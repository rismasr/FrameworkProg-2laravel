<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function index(Request $request){
        $daftarMahasiswa = [
            ['nim' => '17090001', 'nama' => 'Ahmad Subarjo', 'kelas' => '6A'],
            ['nim' => '17090002', 'nama' => 'Bunga Fadilah', 'kelas' => '6B'],
            ['nim' => '17090003', 'nama' => 'Citra Lestari', 'kelas' => '6C'],
            ['nim' => '17090004', 'nama' => 'Fitria', 'kelas' => '6D'],
            ['nim' => '17090025', 'nama' => 'Arsen Saputra', 'kelas' => '6D'],
            ['nim' => '17090068', 'nama' => 'Kumala Sari', 'kelas' => '6C'],
            ['nim' => '17090102', 'nama' => 'Hana Maesaroh', 'kelas' => '6B'],
            ['nim' => '17090131', 'nama' => 'Bambang Sumarsono', 'kelas' => '6A'],
            ['nim' => '17090168', 'nama' => 'Danang Kumbara', 'kelas' => '6D'],
            ['nim' => '17090172', 'nama' => 'Syifa Azahra', 'kelas' => '6B'],
            ['nim' => '17090173', 'nama' => 'Laluna', 'kelas' => '6A'],
            ['nim' => '17090185', 'nama' => 'Nathan', 'kelas' => '6C'],
            
        ];

        if($request->query('kelas')){
            $daftarMahasiswa = array_filter($daftarMahasiswa, function($kelas){
                return $kelas['kelas'] == request()->kelas;
            });
        }
        return view('daftar-mahasiswa', compact('daftarMahasiswa'));
    }
    
    public function show($daftar){
        $daftarMahasiswa = [
            ['nim' => '17090001', 'nama' => 'Ahmad Subarjo', 'kelas' => '6A'],
            ['nim' => '17090002', 'nama' => 'Bunga Fadilah', 'kelas' => '6B'],
            ['nim' => '17090003', 'nama' => 'Citra Lestari', 'kelas' => '6C'],
            ['nim' => '17090004', 'nama' => 'Fitria', 'kelas' => '6D'],
            ['nim' => '17090025', 'nama' => 'Arsen Saputra', 'kelas' => '6D'],
            ['nim' => '17090068', 'nama' => 'Kumala Sari', 'kelas' => '6C'],
            ['nim' => '17090102', 'nama' => 'Hana Maesaroh', 'kelas' => '6B'],
            ['nim' => '17090131', 'nama' => 'Bambang Sumarsono', 'kelas' => '6A'],
            ['nim' => '17090168', 'nama' => 'Danang Kumbara', 'kelas' => '6D'],
            ['nim' => '17090172', 'nama' => 'Syifa Azahra', 'kelas' => '6B'],
            ['nim' => '17090173', 'nama' => 'Laluna', 'kelas' => '6A'],
            ['nim' => '17090185', 'nama' => 'Nathan', 'kelas' => '6C'],
            
        ];

        if($daftar){
            $daftarMahasiswa = array_filter($daftarMahasiswa, function($kelas){
                return $kelas['kelas'] == request()->segment(count(request()->segments()));
            });
        }
        return view('daftar-mahasiswa', compact('daftarMahasiswa'));
    }
}
