<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function album()
    {
        $album = Album::with('gallery')->get();
        return view('test', compact('album'));
    }
}
