@extends('backend.layouts.master')

@section('title')
   Profil
@endsection
@section('more-style')
<style >
    .belomisi{
        color:red;
    }
    .propil{
        width:50%; 
        display: block;
        margin: 20px auto;
     
    }
</style>
@endsection

@section('content')
<section class="content">
        <div class="container-fluid">
          <!-- Text Aligns -->
          <div class="row clearfix">
              <div class="col-xs-12">
                  <div class="card">
                      <div class="header">
                          <h2>
                              Selamat Datang Dokter, <a href="">{{Auth::user()->name}}</a>
                          </h2>
                          <ul class="header-dropdown m-r--5">
                              <li class="dropdown">
                                  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                      <i class="material-icons">more_vert</i>
                                  </a>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="javascript:void(0);">Action</a></li>
                                      <li><a href="javascript:void(0);">Another action</a></li>
                                      <li><a href="javascript:void(0);">Something else here</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                      <div class="body">
                          <div class="row clearfix">
                              <div class="col-md-12">
                                <div id="aniimated-thumbnials" class="list-unstyled row clearfix" style="align:center">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4" style="margin-bottom:0px;">
                                       @if (empty(Auth::user()->gambar))
                                        <a href="images/image-gallery/1.jpg" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail propil" src="{{asset('images/user.png')}}">
                                        </a>
                                        @else
                                        <a href="images/image-gallery/1.jpg" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail propil" src="{{ asset('storage/images/foto_dokter/'.$profil->gambar) }}">
                                        </a>
                                      @endif
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4 profilku">
                                  <h3 class="align-center" style="margin-top:0px;margin-bottom:30px;">Profil</h3>

                                  <div class="col-xs-4">
                                    <p>Nama </p>
                                  </div>
                                  <div class="col-xs-8 isi">
                                    <p>: {{Auth::user()->name}}</p>
                                  </div>

                                  <div class="col-xs-4">
                                    <p>Email   </p>
                                  </div>
                                  <div class="col-xs-8 isi">
                                    <p>: {{Auth::user()->email}}</p>
                                  </div>

                                  <div class="col-xs-4">
                                    <p>Password </p>
                                  </div>
                                  <div class="col-xs-8 isi">
                                    <p><a href="">: change password</a></p>
                                  </div>

                                  <div class="col-xs-4">
                                    <p>Spesialisasi </p>
                                  </div>
                                  <div class="col-xs-8 isi">
                                    @if (empty(Auth::user()->spesialis))
                                    <p class="belomisi"><i>: isi spesialisasi anda</i></p>
                                    @else 
                                    <p>: {{$profil->spesialis}}</p>
                                    @endif
                                  </div>

                                   <div class="col-xs-4">
                                    <p>Jenis Kelamin </p>
                                  </div>
                                  <div class="col-xs-8 isi">
                                    @if (empty(Auth::user()->jenis_kelamin))
                                    <p class="belomisi"><i>: isi Jenis Kelamin anda</i></p>
                                    @else 
                                    <p>: <?php if ($profil->jenis_kelamin == 0) echo "Perempuan" ;else echo "Laki-Laki";?></p>
                                    @endif
                                  </div>
                                  <div class="row"> </div>

                                  <div class="col-xs-4">
                                    <p>Telephone </p>
                                  </div>
                                  <div class="col-xs-8 isi">
                                    @if (empty(Auth::user()->phone))
                                    <p class="belomisi"><i>: isi Telephone anda</i></p>
                                    @else 
                                    <p>: {{$profil->phone}}</p>
                                    @endif
                                  </div>

                                  <div class="col-xs-4">
                                    <p>Alamat </p>
                                  </div>
                                  <div class="col-xs-8 isi">
                                    @if (empty(Auth::user()->alamat))
                                    <p class="belomisi"><i>: isi alamat anda</i></p>
                                    @else 
                                    <p>: {{$profil->alamat}}</p>
                                    @endif
                                  </div>
                                  <div class="align-center">
                                    <a href="/backend/profil/editprofil/{{Auth::user()->id}}"><button type="button" class="btn btn-lg bg-blue waves-effect">EDIT PROFIL</button></a>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- #END# Text Aligns -->
        </div>
    </section>
@endsection
