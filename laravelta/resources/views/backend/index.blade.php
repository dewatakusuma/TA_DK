@extends('backend.layouts.master')

@section('title')
   Home
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- With Captions -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>WITH CAPTIONS</h2>
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
                          <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                              <div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">
                                  <!-- Indicators -->
                                  <ol class="carousel-indicators">
                                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                  </ol>

                                  <!-- Wrapper for slides -->
                                  <div class="carousel-inner" role="listbox">
                                      <div class="item active">
                                          <img src="../../images/image-gallery/11.jpg" />
                                      </div>
                                      <div class="item">
                                          <img src="../../images/image-gallery/12.jpg" />
                                      </div>
                                      <div class="item">
                                          <img src="../../images/image-gallery/19.jpg" />
                                      </div>
                                  </div>

                                  <!-- Controls -->
                                  <a class="left carousel-control box-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="right carousel-control box-control" href="#carousel-example-generic" role="button" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                  </a>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <!-- <div class="container-"> -->
                            <div id="deskripsi">
                              <div class="box-deskripsi box-active">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 align-justify">
                                  <h1>test</h1>
                                  <p>0</p>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="row"></div>
                              </div>
                              <div class="box-deskripsi">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 align-justify">
                                  <h1>test</h1>
                                  <p>1</p>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="row"></div>
                              </div>
                              <div class="box-deskripsi">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 align-justify">
                                  <h1>test</h1>
                                  <p>2</p>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="row"></div>
                              </div>
                            </div>
                            <!-- </div> -->
                          </div>
                        </div>
                    </div>
                </div>
                <!-- #END# With Captions -->
    </div>
</section>

@endsection

@section('more-style')
	.box-deskripsi{
		display:none;
	}
<style>
	.box-deskripsi{
		display:none;
	}
	.box-active{
		display:block;
	}
</style>
@endsection


@section('more-script')
   <script>
    $( document ).ready(function() {
        // alert("ready!");
        var count = 0;
        // $(".box-deskripsi").eq(2).delay(1000).fadeIn();
        $('#deskripsi .box-deskripsi').eq(0).addClass('box-active');
        $(".box-deskripsi").eq(0).show();
        $('.box-control.left').on("click", function(){
          $('#deskripsi .box-deskripsi').filter('.box-active').hide();
          $('#deskripsi .box-deskripsi').filter('.box-active').removeClass('box-active');
          if (count <= 0){
            count = 2;
          } else {
            count -= 1;
          }
          $('#deskripsi .box-deskripsi').eq(count).addClass('box-active');
          $(".box-deskripsi").eq(count).fadeIn(1000);

        });

        $('.box-control.right').on("click", function(){
          $('#deskripsi .box-deskripsi').filter('.box-active').hide();
          $('#deskripsi .box-deskripsi').filter('.box-active').removeClass('box-active');
          if (count >= 2){
            count = 0;
          } else {
            count += 1;
          }
          $('#deskripsi .box-deskripsi').eq(count).addClass('box-active');
          $(".box-deskripsi").eq(count).fadeIn(1000);
        })

        $('.carousel-indicators li').click(function(){
          var index = 0;
          index = $(this).data("slide-to");
          $('#deskripsi .box-deskripsi').filter('.box-active').hide();
          $('#deskripsi .box-deskripsi').filter('.box-active').removeClass('box-active');
          $('#deskripsi .box-deskripsi').eq(index).addClass('box-active');
          $('#deskripsi .box-deskripsi').eq(index).fadeIn(1000);

        });
    });
    </script>
@endsection
