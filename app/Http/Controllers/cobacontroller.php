<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cobacontroller extends Controller
{
    public function Jenis() {
        echo 'Hello World!';
    }

    public function Tahun($berapa) {
        echo 'Tahun Terbit ' . $berapa;
    }

    public function Penerbit() {
        return view('pt');
    }
}
