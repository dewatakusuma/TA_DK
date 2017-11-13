@extends('backend.layouts.master')

@section('title')
   Add Pasien
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <form role="form" method="POST" action="{{ url('/backend/editPasien/update') }}"  enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="form-group">
                <label>Foto Pasien</label>
                <input type="file" name="gambar" class="form-control-file" required>
            </div>

            <div class="form-group">
                <label>Nama Pasien</label>
                <input type="text" class="form-control" name="nama_pasien" placeholder="Nama Pasien" value="{{$datapasien->nama_pasien}}" required/>
            </div>
           
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{$datapasien->email}}" required/>
            </div>
           
            <div class="form-group">
                <label>Nomor Id Device</label>
                <input type="text" class="form-control" name="device_id" placeholder="Nomor Id Device" value="{{$datapasien->device_id}}" required/>
            </div>

             <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{$datapasien->alamat}}" required/>
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
                <label>Nomor Telephone</label>
                <input type="text" class="form-control" name="phone" placeholder="Nomor Telephone" value="{{$datapasien->phone}}" required/>
            </div>

             <div class="form-group">
                <label>Usia</label>
                <input type="text" class="form-control" name="usia" placeholder="Usia" value="{{$datapasien->usia}}" required/>
            </div>
       
            <div >
               <input class="btn main-color-bg btn-lg" type="submit" value="Save">
            </div>
             <input type="text" value="{{ $datapasien->id }}" class="form-control" name="id" required style="display:none"/>
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
