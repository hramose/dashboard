@extends('template');
@section('main')
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Transaksi
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th>Kode Transaksi</th>
                                  <th>Tanggal</th>
                                  <th>Rumah Makan</th>
                                  <th>Kurir</th>
                                  <th>User</th>
                                  <th>Status</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td><a href="#">MG1234</a></td>
                                  <td class="hidden-phone">12 Februari 2017</td>
                                  <td>RM Blabla </td>
                                  <td>Mas Kurir </td>
                                  <td>Rezandry </td>
                                  <td><span class="label label-danger label-mini">Proses</span></td>
                                  <td>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-list"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="#">MG1234</a></td>
                                  <td class="hidden-phone">12 Februari 2017</td>
                                  <td>RM Blabla </td>
                                  <td>Mas Kurir </td>
                                  <td>Rezandry </td>
                                  <td><span class="label label-danger label-mini">Proses</span></td>
                                  <td>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-list"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="#">MG1234</a></td>
                                  <td class="hidden-phone">12 Februari 2017</td>
                                  <td>RM Blabla </td>
                                  <td>Mas Kurir </td>
                                  <td>Rezandry </td>
                                  <td><span class="label label-success label-mini">Selesai</span></td>
                                  <td>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-list"></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="#">MG1234</a></td>
                                  <td class="hidden-phone">12 Februari 2017</td>
                                  <td>RM Blabla </td>
                                  <td>Mas Kurir </td>
                                  <td>Rezandry </td>
                                  <td><span class="label label-danger label-mini">Proses</span></td>
                                  <td>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-list"></i></button>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                      </section>
                  </div>
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Detail Transaksi
                          </header>
                          <div class="panel-body">
                              <form role="form">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Kode Transaksi</label>
                                      <input type="text" class="form-control"  placeholder="Kode Transaksi">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Status</label>
                                      <input type="text" class="form-control"  placeholder="Status">
                                  </div>                                  
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Tanggal</label>
                                      <input size="16" type="text" readonly class="form_datetime form-control">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Nama Restoran</label>
                                      <input type="text" class="form-control"  placeholder="Nama Restoran">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Alamat Restoran</label>
                                      <input type="text" class="form-control"  placeholder="Alamat Restoran">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Nama User</label>
                                      <input type="text" class="form-control"  placeholder="Nama User">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Alamat User</label>
                                      <input type="text" class="form-control"  placeholder="Alamat User">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Nomor Telepon User</label>
                                      <input type="text" class="form-control"  placeholder="Nomor Telepon User">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Kurir</label>
                                      <input type="text" class="form-control"  placeholder="Kurir">
                                  </div>
                                  <hr>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Feed Delivery</label>
                                      <input type="text" class="form-control"  placeholder="Feed Delivery">
                                  </div>
                                  <div class="form-group">
                                      <header class="panel-heading">
                                        Detail Pesanan
                                      </header>
                                      <div class="panel-body">
                                        <label for="exampleInputPassword1">Pesanan 1</label><br/>
                                        <label for="exampleInputPassword1">Nama Menu 1</label>
                                        <input type="text" class="form-control"  placeholder="Nama Menu">
                                      </div>
                                      <div class="panel-body">
                                        <label for="exampleInputPassword1">Jumlah Pesanan</label>
                                        <input type="text" class="form-control"  placeholder="Jumlah Pesanan">
                                      </div>
                                      <div class="panel-body">
                                        <label for="exampleInputPassword1">Harga</label>
                                        <input type="number" class="form-control"  placeholder="Harga">
                                      </div>
                                      <div class="panel-body">
                                        <label for="exampleInputPassword1">Total Harga</label>
                                        <input type="number" class="form-control"  placeholder="Total Harga">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Total Harga</label>
                                      <input type="number" class="form-control"  placeholder="Total harga">
                                  </div>
                                  <button type="submit" class="btn btn-info">Submit</button>
                              </form>

                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
@stop