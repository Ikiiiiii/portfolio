<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;
use App\Models\Project;


class ProfileController extends Controller
{
    function show(){
        $data['profile'] = Profile::first();
        return view('formProfile',$data);
    }

    function tampil(){
        $data ['profile'] = Profile::all();
        $data ['project'] = Project::all();

        return view('profile', $data);
    }

    function add(){
        $data = [
            'action' => url('profile/create'),
            'profile' => (object)[
                'nama' => '',
                'alamat' => '',
                'jk' => '',
                'tempat' => '',
                'tanggal' => '',
                'status' => '',
                'foto' => '',
                'ig' => '',
                'fb' => '',
                'about' => ''
            ],
        ];
    }

    function create(Request $req){
        Profile::create([
            'nama' => $req->nama,
            'alamat' => $req->alamat,
            'jk' => $req->jk,
            'tempat' => $req->tempat,
            'tanggal' => $req->tanggal,
            'status' => $req->status,
            'foto' => $req->file('foto')->store('foto'),
            'ig' => $req->ig,
            'fb' => $req->fb,
            'about' => $req->about
        ]);
        return redirect('formProfile');
    }

    function edit($id){
        $data['profile'] = Profile::find($id);
        $data['action'] = url('profile/update').'/'.$data['profile']->id;
        $data['tombol'] = 'update';
        $data['jk'] = ['Laki-laki', 'Perempuan'];
        return view('formProfile', $data);
    }

    function update(Request $req){
        if($req->file('foto')){
            $file = $req->file('foto')->store('foto');
        }else{
            $file = DB::row('foto');
        }
        Profile::where('id',$req->id)->update([
            'nama' => $req->nama,
            'alamat' => $req->alamat,
            'jk' => $req->jk,
            'tempat' => $req->tempat,
            'tanggal' => $req->tanggal,
            'status' => $req->status,
            'foto' => $file,
            'ig' => $req->ig,
            'fb' => $req->fb,
            'about' => $req->about
        ]);
        return redirect('profile');
    }

}
