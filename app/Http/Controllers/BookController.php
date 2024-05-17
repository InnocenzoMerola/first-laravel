<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){

        $titles = [
            'piccolo principe',
            'promessi sposi',
            'harry potter',
            'maze runner'
        ];

        return view('books.index', [
            'titles' => $titles
        ]);
    }

    public function create(){
        return view('books.createBook');
    }

    public function show($id){
        return view('books.show', [
            'id' => $id
        ]);
    }

    public function edit($id){
        return view('books.edit');
    }

    public function delete(){}
}
