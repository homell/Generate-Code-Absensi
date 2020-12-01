<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Generator;

class QrCodeController extends Controller
{
    public function index()
    {
        return view('qrcode.index');
    }
    public function qrcode(Request $request)
    {
        $kodeqr = $request->post('kode');
        $tanggal = date('Y-m-d');

        $qrcode = new Generator;
        $data = $qrcode->size(400)
                    //    ->format('png')
                    //    ->merge('path-to-image.png')
                       ->generate($tanggal.$kodeqr);
        return view('qrcode.index', compact('data'));
    }

}
