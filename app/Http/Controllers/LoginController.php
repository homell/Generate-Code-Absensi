<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view ('login.index');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'username'  => 'required',
            'password'  => 'required|min:3'
        ]);

        $username = $request->post('username');
        $password = $request->post('password');

        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        // CURLOPT_URL => "http://192.168.43.153:8000/ambildatadosen",
        // CURLOPT_RETURNTRANSFER => true,
        // CURLOPT_ENCODING => "",
        // CURLOPT_MAXREDIRS => 10,
        // CURLOPT_TIMEOUT => 0,
        // CURLOPT_FOLLOWLOCATION => true,
        // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        // CURLOPT_CUSTOMREQUEST => "GET",
        // ));
        // $response = curl_exec($curl);
        // curl_close($curl);

        // $result = json_decode($response, true);
        // $result = array($results);

        $data_login = DB::table('pegawai')->select('nip', 'password')
                    ->where('nip', $username)
                    ->where('password', $password)
                    ->get();
        // foreach ($result as $key => $res) {
            if ($data_login->count() > 0) {
                return redirect('/dashboard')->with('status', 'Selamat Datang Admin');
            } else {
                return redirect('/');
            }
        // }
        

        
    }
}
