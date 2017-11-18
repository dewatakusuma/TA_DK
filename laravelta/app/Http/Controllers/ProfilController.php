<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    
     public function index($id)
    {
    	 $profil = \DB::table('users')
        ->where('id',$id)->first();
        // dd($profil);
    	// dd($datapasien);
       return view('backend.profil.indexprofil',compact('profil')); 
	}

	 public function updateProfil(Request $request)
    {
        // dd($request->id_pasien);
        if (!empty($request->file('gambar'))) {

            $gambar = $request->file('gambar');
            $imgname = preg_replace('/\s+/', '-',$request->name).'.'.$gambar->getClientOriginalExtension();
            $gambar->storeAs('public/images/foto_dokter',$imgname);
            $dbsldr = $imgname;
        }
        // dd($gambar,$imgname,$dbsldr);
        $dataedit=User::findOrFail($request->id);
        // dd($dataedit);
        if ( $dataedit ){
            
            $dataedit->gambar = $dbsldr;
            $dataedit->name = $request->name;
            $dataedit->email = $request->email;
            $dataedit->alamat = $request->alamat;
            $dataedit->jenis_kelamin = $request->jenis_kelamin;
            $dataedit->phone = $request->phone;
            $dataedit->spesialis = $request->spesialis;
            $dataedit->save();
            }
       
         $profil = User::findOrFail($request->id);
        // dd($datapasien);
        return view('backend.profil.indexprofil',compact('profil')); //'datapasien' ->ke view untuk nampilin  
    }

    public function editProfil($id)
    {
        $profil = \DB::table('users')
        ->where('id',$id)->first();
        //$databahasa = \DB::select('select id as id_bahasa , bahasa  from bahasa');
        // dd($data);

        return view("backend.profil.editprofil", compact('profil'));
    }

}

