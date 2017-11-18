@extends('backend.layouts.master')

@section('title')
   Data pasien
@endsection



@section('content')
<section class="content">
   <div class="container-fluid">
   <a href="/backend/showaddpasien" class="btn main-color-bg bg-light-blue " role="button" aria-pressed="true"><i class="material-icons">add</i>Add Pasien</a>
        <div class="block-header">
            <div class="table-responsive">
                <table class="table table-bordered table-striped ">
                    <tr>
                        <thead class="main-color-bg">
                            <th><center>No</center></th>
                            <th><center>Foto Pasien</center></th>
                            <!-- <th><center>id_pasien</center></th> -->
                            <th><center>Nama</center></th>
                            <th><center>Email</center></th>
                            <!-- <th><center>device_id</center></th> -->
                            <th><center>Alamat</center></th>
                            <th><center>Jenis Kelamin</center></th>
                            <th><center>Phone</center></th>
                            <th><center>Usia</center></th>
                            <th><center>Kelola</center></th>
                            <!-- <th><center>id_dokter</center></th> -->
                        </thead>
                    </tr>
                    <tr>
                        <tbody>
                        @foreach ($datapasien as  $data)
                            <tr>
                            <td><center> {{ $loop->iteration }}</center> </td>
                            <td>
                                <center>
                                    <img src="{{ asset('storage/images/foto_pasien/'.$data->gambar)}}" width="100px" height="100px" />
                                </center>
                            </td>
                           
                            <td>{{ $data->nama_pasien}}</td>
                            <td>{{ $data->email}}</td>
                            <!-- <td>{{ $data->device_id}}</td> -->
                            <td>{{ $data->alamat}}</td>
                            <td> <?php if ($data->jenis_kelamin == 0) echo "Perempuan" ;else echo "Laki-Laki";?> </td>
                            
                            <td>{{ $data->phone}}</td>
                            <td>{{ $data->usia}}</td>
                            <!-- <td>{{ $data->id_dokter}}</td> -->
                            
                           <td>
                            <center>
                                <a class="btn bg-light-blue" href="{{url('/backend/editPasien/'.$data->id)}}">Edit Pasien</a>
                                
                                <a class="btn bg-red" href="{{url('/backend/showaddpasien/delete/'.$data->id.'/'.Auth::user()->id)}}" 
                                    onclick="return confirm('Anda yakin akan menghapus ini?'); event.preventDefault();
                                    document.getElementById('hapus').submit();" >Hapus Pasien</a>

                                    <form id="hapus" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="text" value="{{ Auth::user()->id}}" class="form-control" name="id_dokter" required style="display:none"/> 
                                    </form>

                                <a class="btn bg-light-blue" href="{{url('/backend/monitoring/index/'.$data->id)}}">Monitoring</a>
                            </center>
                            </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
</section>
@endsection
