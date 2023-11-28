<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\siswa;

class SiswaController extends Controller
{
    public function index(){   
        // $Siswa = Siswa::latest()->pageinate(5);
        // return view('table',compact('Siswa'))->with('i',(request()->input('page',1)-1)*5);
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        $i = 1;
        $siswa = DB::table('siswa')->get();
        return view('table',compact('siswa','i'));
        
    }
    public function create(){
        return view ('TambahData');
    }
    public function store(Request $request){

        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $Gambar = $request->file('gambar');
        $nama_gambar = time() . '-' . $Gambar->getClientOriginalName();
        $path = public_path('/images');

        $Gambar->move($path,$nama_gambar);

        $siswa = new siswa();
        $siswa->fill([
            'nama_siswa' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'gambar' => $nama_gambar
        ]);
        $siswa->save();

        return redirect('/table')->with('toast_success','Data Berhasil di Tambahkan');
    }
    public function edit($id){
        $data = DB::table('siswa')->where('id',$id)->first();
        return view('edit',compact('data'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $siswa = siswa::find($id);

        if($siswa){
            $Gambar = $request->file('gambar');
            $nama_gambar = time() . '-' . $Gambar->getClientOriginalName();
            $path = public_path('/images');

            if(File::exists(public_path($siswa->$Gambar))){
                File::delete(public_path($siswa->$Gambar));
            }
    
            $Gambar->move($path,$nama_gambar);

            $siswa->fill([
                'nama_siswa' => $request->nama,
                'kelas' => $request->kelas,
                'jurusan' => $request->jurusan,
                'gambar' => $nama_gambar    
            ]);
            $siswa->save();

            return redirect('/table')->with('toast_success','Data Berhasil di Update');
        }
    }
    public function delete($id){
        DB::table('siswa')->where('id',$id)->delete();
        return redirect('/table')->with('toast_danger','Data Berhasil di Hapus');
    }
}
