<?php

namespace App\Http\Controllers\Backend;

use App\BAB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {

        return view('backend.master')->withSuccess('BAB Berhasil Disimpan');
    }

    public function simpanBAB(Request $request)
    {
        $bab = new BAB();
        $bab->BAB = $request->bab;
        $bab->save();

        return view('backend/master')->withSuccess('File Berhasil Disimpan');
    }
}
