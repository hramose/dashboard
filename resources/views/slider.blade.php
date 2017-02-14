@extends('template')
@section('main')
<?php
const DEFAULT_URL = 'https://sandbox-mangan.firebaseio.com/';
const DEFAULT_TOKEN = 'Tw82srBlXIoNY4Dpjm5tRUQaE2UZQjVNu0oAgoia';
const DEFAULT_PATH = '/';

//default parameter untuk memanggil path tertentu
$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
// $name menyimpan json hasil dari firebase yang didapat
$name = $firebase->get(DEFAULT_PATH . '/slider');
//json_decode merubah object menjadi array
$obj = json_decode($name, TRUE);
// dd($obj);
?>
<!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      Slider Gallery
                  </header>
                  <div class="panel-body">
                      <ul class="grid cs-style-3">
                          <?php for ($x=0;$x<5;$x++){ ?>
                          <li>
                              <figure>
                                  <img src="{{$obj[$x]["url"]}}" alt="img04">
                                  <figcaption>
                                      <h3>Slider {{$x+1}}</h3>
                                      <a class="fancybox" rel="group" data-toggle="modal" data-target="#myModal{{$x}}">Change</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <?php } ?>
                      </ul>

                  </div>
              </section>
              <?php for ($y=0;$y<5;$y++){ ?>
              <div id="myModal{{$y}}" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Change Slider Image</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" action="{{ url('slider/simpan')}}" method="POST" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="indext" class="col-lg-2 col-sm-2 control-label">Url</label>
                                <div class="col-lg-10">
                                    <input type="hidden" class="form-control" name="index" value={{$y}} >
                                    <input type="text" class="form-control" name="url" placeholder="Masukkan url gambar">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <input type="submit" value="simpan" class="btn btn-success">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                </div>
                <div class="modal-footer">
                    
                </div>
                </div>

            </div>
            </div>
              <?php } ?>
              <!-- page end-->
              @stop