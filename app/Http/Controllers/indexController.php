<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carouselData = [
            [
                'img' => 'https://3.bp.blogspot.com/-Yw9ortkBFBg/XKIBIdIMfbI/AAAAAAAACgg/7MXwthOhN8MqhslcMSyqh-FbSH8wLoQKgCEwYBhgL/s1600/gambar%2Bsinar%2Bmatahari%2Bpagi-min.jpg',
                'title' => 'New AI Released Today OMAGAH!',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id offici',
                'timestamp' => '3 Minutes Ago'
            ],
            [
                'img' => 'https://3.bp.blogspot.com/-Yw9ortkBFBg/XKIBIdIMfbI/AAAAAAAACgg/7MXwthOhN8MqhslcMSyqh-FbSH8wLoQKgCEwYBhgL/s1600/gambar%2Bsinar%2Bmatahari%2Bpagi-min.jpg',
                'title' => 'Sheesshhh Look at Those Camera',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id offici',
                'timestamp' => '3 Minutes Ago'
            ],
            [
                'img' => 'https://3.bp.blogspot.com/-Yw9ortkBFBg/XKIBIdIMfbI/AAAAAAAACgg/7MXwthOhN8MqhslcMSyqh-FbSH8wLoQKgCEwYBhgL/s1600/gambar%2Bsinar%2Bmatahari%2Bpagi-min.jpg',
                'title' => 'Seriously! $3 for an IPHONE???',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id offici',
                'timestamp' => '3 Minutes Ago'
            ],
        ];
        $cardData = [
                [
                    'img' => 'https://3.bp.blogspot.com/-Yw9ortkBFBg/XKIBIdIMfbI/AAAAAAAACgg/7MXwthOhN8MqhslcMSyqh-FbSH8wLoQKgCEwYBhgL/s1600/gambar%2Bsinar%2Bmatahari%2Bpagi-min.jpg',
                    'cardText' => 'Newest News Maybe Idk seem like trusted enoough you know so check it on',
                    'cardLink' => '/card'
                ],
                [
                    'img' => 'https://3.bp.blogspot.com/-Yw9ortkBFBg/XKIBIdIMfbI/AAAAAAAACgg/7MXwthOhN8MqhslcMSyqh-FbSH8wLoQKgCEwYBhgL/s1600/gambar%2Bsinar%2Bmatahari%2Bpagi-min.jpg',
                    'cardText' => 'Newest News Maybe Idk seem like trusted enoough you know so check it on',
                    'cardLink' => '/card'
                ], [
                    'img' => 'https://3.bp.blogspot.com/-Yw9ortkBFBg/XKIBIdIMfbI/AAAAAAAACgg/7MXwthOhN8MqhslcMSyqh-FbSH8wLoQKgCEwYBhgL/s1600/gambar%2Bsinar%2Bmatahari%2Bpagi-min.jpg',
                    'cardText' => 'Newest News Maybe Idk seem like trusted enoough you know so check it on',
                    'cardLink' => '/card'
                ], [
                    'img' => 'https://3.bp.blogspot.com/-Yw9ortkBFBg/XKIBIdIMfbI/AAAAAAAACgg/7MXwthOhN8MqhslcMSyqh-FbSH8wLoQKgCEwYBhgL/s1600/gambar%2Bsinar%2Bmatahari%2Bpagi-min.jpg',
                    'cardText' => 'Newest News Maybe Idk seem like trusted enoough you know so check it on',
                    'cardLink' => '/card'
                ],
                [
                    'img' => 'https://3.bp.blogspot.com/-Yw9ortkBFBg/XKIBIdIMfbI/AAAAAAAACgg/7MXwthOhN8MqhslcMSyqh-FbSH8wLoQKgCEwYBhgL/s1600/gambar%2Bsinar%2Bmatahari%2Bpagi-min.jpg',
                    'cardText' => 'Newest News Maybe Idk seem like trusted enoough you know so check it on',
                    'cardLink' => '/card'
                ],
                [
                    'img' => 'https://3.bp.blogspot.com/-Yw9ortkBFBg/XKIBIdIMfbI/AAAAAAAACgg/7MXwthOhN8MqhslcMSyqh-FbSH8wLoQKgCEwYBhgL/s1600/gambar%2Bsinar%2Bmatahari%2Bpagi-min.jpg',
                    'cardText' => 'Newest News Maybe Idk seem like trusted enoough you know so check it on',
                    'cardLink' => '/card'
                ],
                [
                    'img' => 'https://3.bp.blogspot.com/-Yw9ortkBFBg/XKIBIdIMfbI/AAAAAAAACgg/7MXwthOhN8MqhslcMSyqh-FbSH8wLoQKgCEwYBhgL/s1600/gambar%2Bsinar%2Bmatahari%2Bpagi-min.jpg',
                    'cardText' => 'Newest News Maybe Idk seem like trusted enoough you know so check it on',
                    'cardLink' => '/card'
                ],
                [
                    'img' => 'https://3.bp.blogspot.com/-Yw9ortkBFBg/XKIBIdIMfbI/AAAAAAAACgg/7MXwthOhN8MqhslcMSyqh-FbSH8wLoQKgCEwYBhgL/s1600/gambar%2Bsinar%2Bmatahari%2Bpagi-min.jpg',
                    'cardText' => 'Newest News Maybe Idk seem like trusted enoough you know so check it on',
                    'cardLink' => '/card'
                ],


            ];

            return view('index',compact('cardData','carouselData'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
