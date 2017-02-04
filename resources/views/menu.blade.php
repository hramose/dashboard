@extends('template');
@section('main')
              <!-- page start-->
                  <div class="row">
                      <div class="col-lg-12" align="center"> <h3>Input Data Menu</h3></div>
                        <section class="panel">                       
                         <div class="col-lg-8">
                            <header class="panel-heading">
                              Silahkan inputkan data Menu 
                            </header>
                          <div class="panel-body">
                               <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                      <label for="restoran" class="col-lg-4 control-label">Nama Restoran</label>
                                      <div class="col-lg-8">
                                          <select class="form-control" id="restoran">
                                              <option>Abata</option>
                                              <option>KFC</option>
                                              <option>MCD</option>
                                              <option>Ayam Keprabon</option>
                                              <option>Mahkota</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="menu" class="col-lg-4 control-label">Nama Menu</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="menu" placeholder="Masukkan nama menu nya">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="harga" class="col-lg-4 control-label">Harga</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="harga" placeholder="Masukkan harga nya">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="priority" class="col-lg-4 control-label">Prioritas</label>
                                      <div class="col-lg-8">
                                          <select class="form-control" id="priority">
                                              <option>Ya</option>
                                              <option>Tidak</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="review" class="col-lg-4 col-sm-2 control-label">Review</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="review" placeholder="Masukkan review nya">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="tag" class="col-lg-4 col-sm-2 control-label">Tag</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="tag" placeholder="Masukkan tag nya">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="revgambar" class="col-lg-4 col-sm-2 control-label">Review Gambar</label>
                                      <div class="col-lg-8">
                                          <input type="file" class="form-control" id="revgambar" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-2 control-label">Reviewer</label>
                                  </div>
                                  <div class="form-group">
                                      <label for="foto" class="col-lg-4 col-sm-2 control-label">Foto</label>
                                      <div class="col-lg-8">
                                          <input type="file" class="form-control" id="foto" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="nmreview" class="col-lg-4 col-sm-2 control-label">Nama</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="nmreview" placeholder="Masukkan nama reviewer nya">
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
                              Data Menu
                            </header>
                              <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-shopping-cart"></i> Restoran</th>
                                  <th><i class="fa fa-book"></i> Nama Menu</th>
                                  <th><i class="fa fa-dollar"></i> Harga</th>
                                  <th><i class="fa fa-bell"></i> Priority</th>
                                  <th><i class="fa fa-comment"></i> Review</th>
                                  <th><i class="fa fa-tags"></i> Tag</th>
                                  <th><i class="fa fa-picture-o"></i> Review Gambar</th>
                                  <th><i class="fa fa-picture-o"></i> Foto</th>
                                  <th><i class="fa fa-user"></i> Nama</th>
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
                                  <td>Asd</td>
                                  <td>asd</td>
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
                                  <td>Asd</td>
                                  <td>asd</td>
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
                                  <td>Asd</td>
                                  <td>asd</td>
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
                                  <td>Asd</td>
                                  <td>asd</td>
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
                                  <td>Asd</td>
                                  <td>asd</td>
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
                                  <td>Asd</td>
                                  <td>asd</td>
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
                                  <td>Asd</td>
                                  <td>asd</td>
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
                                  <td>Asd</td>
                                  <td>asd</td>
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