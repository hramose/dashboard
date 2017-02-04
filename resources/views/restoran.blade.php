@extends('template')
@section('main')              
              <!-- page start-->
              	  <div class="row">
                      <div class="col-lg-12" align="center"> <h3>Input Data Restoran</h3></div>
                        <section class="panel">                       
                         <div class="col-lg-8">
                            <header class="panel-heading">
                              Silahkan inputkan data Restoran
                            </header>
                          <div class="panel-body">
                               <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                      <label for="nmresto" class="col-lg-4 control-label">Nama Restoran</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="nmresto" placeholder="Masukkan nama restoran nya">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="alamat" class="col-lg-4 control-label">Alamat</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat nya">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="notelepon" class="col-lg-4 control-label">No Telepon</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="notelepon" placeholder="Masukkan no telepon nya">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="gambar" class="col-lg-4 col-sm-2 control-label">Gambar</label>
                                      <div class="col-lg-8">
                                          <input type="file" class="form-control" id="gambar" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="kategori" class="col-lg-4 control-label">Kategori</label>
                                      <div class="col-lg-8">
                                          <select class="form-control" id="kategori">
                                              <option>Cafe & Resto</option>
                                              <option>Dessert</option>
                                          </select>
                                      </div>
                                  </div>
                                   <div class="form-group">
                                      <label for="ktbuka" class="col-lg-4 control-label">Keterangan Buka</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="ktbuka" placeholder="Masukkan keterangan buka nya">
                                      </div>
                                  </div>
                                   <div class="form-group">
                                      <label for="ktresto" class="col-lg-4 control-label">Keterangan Restoran</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="ktresto" placeholder="Masukkan keterangan restoran nya">
                                      </div>
                                   </div>
                                  	<div class="form-group">
                                      <label for="tginput" class="col-lg-4 control-label">Tanggal Input</label>
                                      <div class="col-lg-8">
                                          <input id="tginput" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                      </div>
                                   </div>
                              		<div class="form-group">
                                      <label for="jmrating" class="col-lg-4 control-label">Jumlah Rating</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="jmrating" placeholder="Masukkan jumlah rating nya">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label for="keyword" class="col-lg-4 control-label">Keyword </label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="keyword" placeholder="Masukkan keyword nya">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label for="rating" class="col-lg-4 control-label">Rating </label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="rating" placeholder="Masukkan rating nya">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label for="timrating" class="col-lg-4 control-label">Rating Tim </label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="timrating" placeholder="Masukkan rating nya">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label for="revtim" class="col-lg-4 control-label">Review Tim </label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="revtim" placeholder="Masukkan review nya">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label for="map" class="col-lg-4 control-label">Map </label>
                                   </div>
                                   <div class="form-group">
                                      <label for="maplat" class="col-lg-4 control-label">Latitude </label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="maplat" placeholder="Masukkan latitude nya">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label for="maplong" class="col-lg-4 control-label">Longtitude </label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="maplong" placeholder="Masukkan longtitude nya">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label  class="col-lg-4 control-label">Reviewer</label>
                                   </div>
                                   <div class="form-group">
                                      <label for="foto" class="col-lg-4 control-label">Foto </label>
                                      <div class="col-lg-8">
                                          <input type="file" class="form-control" id="foto" >
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label for="nama" class="col-lg-4 control-label">Nama </label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="nama" placeholder="Masukkan nama nya">
                                      </div>
                                   </div>

                                  	

                                  <div class="form-group">
                                      <div class="col-lg-8">
                                          <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Simpan </button>
                                      </div>
                                  </div>
                              </form>

                          </div>
                          </section>

                          <section class="panel">                       
                         <div class="col-lg-12">
                            <header class="panel-heading">
                              Data Restoran
                            </header>
                              <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-shopping-cart"></i> Restoran</th>
                                  <th><i class="fa fa-book"></i> Alamat</th>
                                  <th><i class="fa fa-mobile"></i> No Telpon</th>
                                  <th><i class="fa fa-picture-o"></i> Gambar</th>
                                  <th><i class="fa fa-archive"></i> Kategori</th>
                                  <th><i class="fa fa-desktop"></i> Keterangan Buka</th>
                                  <th><i class="fa fa-desktop"></i> Keterangan Restoran</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td><a href="#">Vector Ltd</a></td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                   
                                   
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">Adimin co</a>
                                  </td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                   
                                   
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td> <a href="#"> boka soka</a> </td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                 <td> <a href="#">Salba lib</a> </td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                   
                                   
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td> <a href="#">Adimin Co</a> </td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                   
                                   
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td> <a href="#"> adimin coM</a> </td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                   
                                   
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td> <a href="#">Vector</a> </td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                   
                                   
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td> <a href="#"> Admin Lte</a> </td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                  <td>Lorem  imit</td>
                                   
                                   
                                  <td>Lorem  imit</td>  
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                          </section>
                  </div>
                  </div>
              <!-- page end-->
@stop