<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wajah;
use Phpml\Classification\KNearestNeighbors;
use Phpml\FeatureExtraction\TokenCountVectorizer;
use Phpml\Tokenization\WhitespaceTokenizer;
use Phpml\FeatureExtraction\TfIdfTransformer;
use Phpml\Dataset\ArrayDataset;
use Phpml\CrossValidation\StratifiedRandomSplit;
use Illuminate\Support\Facades\Log;

class WajahController extends Controller
{
    public function index(){
        $wajah = Wajah::paginate(20);
        return view ('wajah.index', ['wajah'=> $wajah]);
    }
    public function create(){
        return view ('wajah.input');
    }
    public function insert(){
        return view ('wajah.create');
    }
public function store(Request $request)
{
    Log::info($request->all());

    // Validasi
    $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'tanggal_konsultasi' => 'required',
        'perawatan_rutin' => 'required',
        'perawatan_sebelumnya' => 'required',
        'saran_perawatan' => 'required'
    ]);

    // Coba simpan data dan tangani jika ada error
    try {
        Wajah::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_konsultasi' => $request->tanggal_konsultasi,
            'perawatan_rutin' => $request->perawatan_rutin,
            'perawatan_sebelumnya' => $request->perawatan_sebelumnya,
            'saran_perawatan' => $request->saran_perawatan
        ]);

        // Redirect dengan pesan sukses
        return redirect('/perawatanWajah')->with('success', 'Data berhasil disimpan!');
    } catch (\Exception $e) {
        // Log error dan redirect dengan pesan error
        Log::error('Error saat menyimpan data: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
    }
}
    public function edit($id){
        $wajah = Wajah::findOrFail($id);
        return view ('Wajah.edit', compact('wajah'));
    }
    public function update(Request $request, $id){
        Log::info('Data input:', $request->all());

    // Validasi
    $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'tanggal_konsultasi' => 'required',
        'perawatan_rutin' => 'required',
        'perawatan_sebelumnya' => 'required',
        'saran_perawatan' => 'required'
    ]);

    // Coba simpan data dan tangani jika ada error
    try {
        $wajah = Wajah::find($id);
        $wajah->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_konsultasi' => $request->tanggal_konsultasi,
            'perawatan_rutin' => $request->perawatan_rutin,
            'perawatan_sebelumnya' => $request->perawatan_sebelumnya,
            'saran_perawatan' => $request->saran_perawatan
        ]);

        // Log data yang berhasil disimpan
        Log::info('Data berhasil diperbarui:', $wajah->toArray());

        // Redirect dengan pesan sukses
        return redirect('/perawatanWajah')->with('success', 'Data berhasil diperbarui!');
    } catch (\Exception $e) {
        // Log error
        Log::error('Error saat memperbarui data:', ['error' => $e->getMessage()]);

        // Redirect dengan pesan error
        return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui data.');
    }
    }
    public function destroy($id){
        $wajah = Wajah::find($id);
        $wajah -> delete();
        return back();
    }
    public function hasil(Request $request){
        $data = Wajah::All();

        $samples = [];
        $labels = [];

        foreach ($data as $item) {
            $samples[] = $item->perawatan_rutin . ' ' . $item->perawatan_sebelumnya;
            $labels[] = $item->saran_perawatan;
        }
        $vectorizer = new TokenCountVectorizer(new WhitespaceTokenizer());
        $vectorizer->fit($samples);
        $vectorizer->transform($samples);
        
        $transformer = new TfIdfTransformer();
        $transformer->fit($samples);
        $transformer->transform($samples);
    


        if (count($samples) !== count($labels)) {
            return response()->json([
                'error' => 'The size of samples and labels does not match.'
            ], 400);
        }

        $dataset = new ArrayDataset($samples, $labels);
        $split = new StratifiedRandomSplit($dataset, 0.3);

        $trainSamples = $split->getTrainSamples();
        $trainLabels = $split->getTrainLabels();
        $testSamples = $split->getTestSamples();
        $testLabels = $split->getTestLabels();
 
        if (count($trainSamples) !== count($trainLabels) || count($testSamples) !== count($testLabels)) {
            return response()->json([
                'error' => 'The size of train samples and labels or test samples and labels does not match.'
            ], 400);
        }

        $knn = new KNearestNeighbors();

        $knn->train($trainSamples, $trainLabels);
        $correct = 0;
        foreach ($testSamples as $index => $sample) {
            if ($knn->predict($sample) === $testLabels[$index]) {
                $correct++;
            }
        }
        $accuracy = $correct / count($testSamples);


        $rutin = $request->input('rutin');
        $terakhir = $request->input('terakhir');
  
        $inputSample = [$rutin . ' ' . $terakhir];
        $vectorizer->transform($inputSample);
        $transformer->transform($inputSample);
        if (count($inputSample) !== 1) {
            Log::error('Input size mismatch.');
            return response()->json([
                'error' => 'Ukuran input tidak sesuai.'
            ], 400);
        }

        // Dapatkan rekomendasi
        try {
            $rekomendasi = $knn->predict($inputSample[0]);
        } catch (\Exception $e) {
            Log::error('Prediction error: ' . $e->getMessage());
            return response()->json([
                'error' => 'Terjadi kesalahan saat mendapatkan rekomendasi.'
            ], 500);
        }
        return redirect()->route('hasil')-> with([
            'rekomendasi' => $rekomendasi,
            'accuracy' => $accuracy
        ]);
    }
}
