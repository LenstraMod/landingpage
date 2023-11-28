<?php

namespace App\Http\Controllers;

use App\Models\paketModel;
use Illuminate\Http\Request;

class paketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPaket = new paketModel();
        $dataPaket = $dataPaket->getAllPaket();

        return view('soal.mapel.paket',compact('dataPaket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(paketModel $paketModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(paketModel $paketModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, paketModel $paketModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(paketModel $paketModel)
    {
        //
    }
}
