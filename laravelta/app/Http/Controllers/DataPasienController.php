<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataPasien;

class DataPasienController extends Controller
{
 	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$datapasien=DataPasien::all();
    	// dd($datapasien);
       return view('backend.datapasien.indexpasien',compact('datapasien')); //'datapasien' ->ke view untuk nampilin
    }

    public function showaddpasien()
    {
    	return view('backend.datapasien.addpasien');
    }

     public function addpasien(Request $request)
    {
    	if (!empty ($request->nama_pasien)) {
            //sorCOde
            $gambar = $request->file('gambar');
            $imgname = preg_replace('/\s+/', '-',$request->nama_pasien).'.'.$gambar->getClientOriginalExtension();
            $gambar->storeAs('public/images/foto_pasien',$imgname);
            $dbsldr = $imgname;
            
            $added = \DB::table('datapasien')
        	->insert(['nama_pasien'=>$request->nama_pasien,'email'=>$request->email, 'gambar'=> $dbsldr,'device_id'=>$request->device_id,'alamat'=>$request->alamat,
        		'jenis_kelamin'=>$request->jenis_kelamin,'phone'=>$request->phone,'usia'=>$request->usia ]);
            
   
    
        } else $request->session()->flash('alert-danger', 'Task failed');
        
        
        $datapasien=DataPasien::all();
        // dd($datapasien);
        return view('backend.datapasien.indexpasien',compact('datapasien')); //'datapasien' ->ke view untuk nampilin
    }

     public function editPasien($id)
    {
        $datapasien = \DB::table('datapasien')
        ->where('id',$id)->first();
        //$databahasa = \DB::select('select id as id_bahasa , bahasa  from bahasa');
        // dd($data);

        return view("backend.datapasien.editpasien", compact('datapasien'));
    }
    public function updatePasien(Request $request)
    {
        // dd($request->id_pasien);
        if (!empty($request->file('gambar'))) {

            $gambar = $request->file('gambar');
            $imgname = preg_replace('/\s+/', '-',$request->nama_pasien).'.'.$gambar->getClientOriginalExtension();
            $gambar->storeAs('public/images/foto_pasien',$imgname);
            $dbsldr = $imgname;
        }

        $dataedit=DataPasien::findOrFail($request->id);
        // dd($dataedit);
        if ( $dataedit ){
            
            $dataedit->gambar = $dbsldr;
            $dataedit->nama_pasien = $request->nama_pasien;
            $dataedit->email = $request->email;
            $dataedit->alamat = $request->alamat;
            $dataedit->jenis_kelamin = $request->jenis_kelamin;
            $dataedit->phone = $request->phone;
            $dataedit->usia = $request->usia;
            $dataedit->save();
            }
       
         $datapasien=DataPasien::all();
        // dd($datapasien);
        return view('backend.datapasien.indexpasien',compact('datapasien')); //'datapasien' ->ke view untuk nampilin  
    }

        public function deletePasien($id)
    {
        $delete = \DB::table('datapasien')
        ->where('id',$id)->delete();
        
        // $Materi = \DB::select('select m.*, b.id as id_b, b.bahasa from materi m LEFT JOIN bahasa b On m.id_bahasa = b.id ');
        // return view("backend.materi.indexMateri", compact('Materi'));
        $datapasien=DataPasien::all();
        // dd($datapasien);
        return view('backend.datapasien.indexpasien',compact('datapasien')); //'datapasien' ->ke view untuk nampilin  
    }

}
