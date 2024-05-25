<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    //
    function show(){
        $data['project'] = Project::all();
        return view('project',$data);
    }

    function add(){
        $data = [
            'action' => url('project/create'),
            'project' => (object)[
                'judul' => '',
                'kategori' => '',
                'foto_project' => '',
                'deskripsi' => '',
            ],
        ];
        return view('formProject',$data);
    }

    function create(Request $req){
        $this->validate($req,[
            // 'tittle'=> 'required',
            // 'kategori'=> 'required',
            // 'deskripsi'=> 'required',
            // 'foto_porto'=> 'required',
        ]);
        Project::create([
            'judul' => $req->judul,
            'kategori' => $req->kategori,
            'foto_project' => $req->file('foto_project')->store('foto_project'),
            'deskripsi'=> $req->deskripsi
        ]);
        return redirect('project');
    }

    function delete($id){
        $project = Project::where('id',$id)->first();
        $project->delete();
        Storage::delete($project->foto_project);
        return redirect('project');
    }

    function edit($id){
        $data['project'] = Project::find($id);
        $data['action'] = url('project/update').'/'.$data['project']->id;
        $data['tombol'] = 'update';
        return view('formProject', $data); 
    }

    function update(Request $req){
        if($req->file('foto_project')){
            $file = $req->file('foto_project')->store('foto_project');
        }else{
            $file = DB::row('foto_project');
        }
        Project::where('id',$req->id)->update([
            'judul' => $req->judul,
            'kategori' => $req->kategori,
            'foto_project' => $file,
            'deskripsi'=> $req->deskripsi
        ]);
        return redirect('project');
    }
}
