<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function list(){
        return view('book');
    }

    public function create(){
        return view('createBook');
    }

    public function detail($id){
        return view('detail', [
            'id' => $id
        ]);
    }

    public function edit($id){
        return view('edit');
    }

    public function delete(){}
}
