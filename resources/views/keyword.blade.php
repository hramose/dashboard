@extends('template');
@section('main')
<?php
const DEFAULT_URL = 'https://sandbox-mangan.firebaseio.com/';
const DEFAULT_TOKEN = 'Tw82srBlXIoNY4Dpjm5tRUQaE2UZQjVNu0oAgoia';
const DEFAULT_PATH = '/';

//default parameter untuk memanggil path tertentu
$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
// $name menyimpan json hasil dari firebase yang didapat
$name = $firebase->get(DEFAULT_PATH . '/keywordResto');
//json_decode merubah object menjadi array
$obj = json_decode($name, TRUE);
?>

              <!-- page start-->
                  <div class="row">
                      <div class="col-lg-12" align="center"> <h3>Input Data Keyword</h3></div>
                      <p id="demo"></p>
                        <section class="panel">                       
                         <div class="col-lg-4">
                            <header class="panel-heading">
                              Silahkan inputkan data keyword
                            </header>
                          <div class="panel-body">

                              <form class="form-horizontal" role="form" action="{{ url('keyword/simpan')}}" method="POST" >
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <div class="form-group">
                                      <label for="indext" class="col-lg-2 col-sm-2 control-label">Index</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="index" placeholder="Masukkan index yang ingin di berikan">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="keyword" class="col-lg-2 col-sm-2 control-label">Keyword</label>
                                      <div class="col-lg-10">
                                          <textarea class="form-control" name="keyword" placeholder="Masukkan keywordnya"></textarea>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <input type="submit" value="simpan" class="btn btn-success">
                                      </div>
                                  </div>
                              </form>

                          </div>
                          </section>

                          <section class="panel">                       
                         <div class="col-lg-12">
                            <header class="panel-heading">
                              Data Keyword
                            </header>
                              <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Index</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Keyword</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach($obj as $s){ ?>
                              <tr>
                                  <td width="20%"><a href="#"><?php echo $s["index"]; ?></a></td>
                                  <td width="70%" class="hidden-phone"><?php echo $s["keyword"]; ?></td>
                                  <td width="10%" class="center">
                                    <div class="box-button">
                                        {!! Form::open(['method'=>'DELETE','action'=>['KeywordController@destroy', $s["index"]]]) !!}
                                        {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                  </td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                          </div>
                          </section>
                      </div>
                  </div>
                  
@stop