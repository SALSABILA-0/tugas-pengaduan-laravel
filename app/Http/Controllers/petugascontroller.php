<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PetugasController extends Controller

{
        function table(){
            $petugas = DB::table('petugas')-> get();
          return view('table',['petugas'=> $petugas]);
        }

        function tampil_register(Request $request){
                return view('registrasi_petugas');
        }
    
        function proses_tambah_petugas(Request $request){
    
            $request->validate([
                'isi_laporan' => 'required|min:2'
            ]);
        }
        
           function proses_registrasi_petugas(Request $request){
            return view('registrasi_petugas');
            $id_petugas = $request->id_petugas;
            $nama_petugas = $request->nama_petugas;
            $username = $request->username;
            $password = $request->password;
            $no_telp = $request->no_telp;
            $level = $request->level;
    
            DB::table('petugas')->insert([
                'id_petugas' => $id_petugas,
                'nama_petugas' => $nama_petugas,
                'username' => $username,
                'password' => $password,
                'no_telp' => $no_telp,
                'level' => $level, 
            ]);
            return redirect('/table ');
        }
       
        function buatakun(){
            return view(''); 
    
    }

}