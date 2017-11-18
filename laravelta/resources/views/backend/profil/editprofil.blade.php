@extends('backend.layouts.master')

@section('title')
   Add Pasien
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <form role="form" method="POST" action="{{ url('/backend/profil/update') }}"  enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="form-group">
                <label>Foto Dokter</label>
                <input type="file" name="gambar" class="form-control-file" required>
            </div>

            <div class="form-group">
                <label>Nama Dokter</label>
                <input type="text" class="form-control" name="name" placeholder="Nama Dokter" value="{{$profil->name}}" required/>
            </div>
           
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{$profil->email}}" required/>
            </div>

            <div class="form-group">
            <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" required/>
                    <OPTION disabled>Pilihan </OPTION>
                    <OPTION value="1">Laki - Laki</OPTION>
                    <option value="0">Perempuan</option>               
                </select>                   
            </div>

           
            <div class="form-group">
                <label>Spesialis</label>
                <input type="text" class="form-control" name="spesialis" placeholder="Spesialis" value="{{$profil->spesialis}}" required/>
            </div>

            <div class="form-group">
                <label>No Telphone</label>
                <input type="text" class="form-control" name="phone" placeholder="No Telphone" value="{{$profil->phone}}" required/>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{$profil->alamat}}" required/>
            </div>
      
            <div >
               <input class="btn main-color-bg btn-lg" type="submit" value="Save">
            </div>
             <input type="text" value="{{ $profil->id }}" class="form-control" name="id" required style="display:none"/>
            </form>
        </div>
    </div>
</section>
@endsection

<!-- @section('more-script')
    <script src="https://cdn.ckeditor.com/4.7.1/basic/ckeditor.js" type="text/javascript"></script>
    <script>
        CKEDITOR.replace( 'sl_latihan' );
    </script>
@endsection -->
