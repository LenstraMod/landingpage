<?php

namespace App\Http\Controllers;

use App\Models\dataSoal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataSoal = new dataSoal();
        $dataSoal = $dataSoal->getAllSoal();

        return view('soal.soal',compact('dataSoal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataMapel = [
            [
                'namaMapel' =>'Matematika',
            ],
            [
                'namaMapel' =>'Bahasa Indonesia',
            ],
            [
                'namaMapel' =>'Bahasa Inggris',
            ],
            [
                'namaMapel' =>'Produk Kreatif Kewirausahaan',
            ],
            [
                'namaMapel' =>'Pemograman Web dan Bergerak',
            ],
            
        ];
        return view('soal.tambahSoal',compact('dataMapel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'mapel' => 'required',
            'soal' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
            'option_e' => 'required',
            'jawaban_benar' => 'required',
        ]);

        $soal = new dataSoal();
        $soal->fill([
            'mapel' => $request->mapel,
            'soal' => $request->soal,
            'option_a' => $request->option_a,
            'option_b' => $request->option_b,
            'option_c' => $request->option_c,
            'option_d' => $request->option_d,
            'option_e' => $request->option_e,
            'jawaban_benar' => $request->jawaban_benar,
        ]);

        $soal->save();

        return redirect('soal')->with('toastSuccess','Soal berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(dataSoal $dataSoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dataSoal $dataSoal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dataSoal $dataSoal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dataSoal $dataSoal)
    {
        //
    }
}
