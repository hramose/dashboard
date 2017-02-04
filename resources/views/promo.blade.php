@extends('template');
@section('main')
              <!-- page start-->
              <!--datetime picker start-->
              <div class="row">
                  <div class="col-md-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Promosi
                              <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                          </header>
                          <div class="panel-body">
                          <form action="#" class="form-horizontal tasi-form">
                              <div class="form-group">
                                  <label class="control-label col-md-3">Tanggal Mulai Promo</label>
                                  <div class="col-md-3 col-xs-11">
                                      <input class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-md-3">Tanggal Akhir Promo</label>
                                  <div class="col-md-3 col-xs-11">
                                      <input class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                  </div>
                              </div>    
                          </form>
                      </div>
                      </section>
                      <section class="panel">
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Toko</th>
                                  <th><i class="fa fa-comments"></i> Promo</th>
                                  <th><i class="fa fa-bookmark"></i> Periode</th>
                                  <th><i class="fa fa-bookmark"></i> Status</th>
                                  <th><i class=" fa fa-edit"></i> Edit</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td><a href="#">ESD</a></td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                  <td>12120.00$ </td>
                                  <td><span class="label label-info label-mini">Due</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          ESD
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>56456.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          Maskurir
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>14400.00$ </td>
                                  <td><span class="label label-success label-mini">Paid</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          ESD
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>2323.50$ </td>
                                  <td><span class="label label-danger label-mini">Paid</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="#">ESD</a></td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                  <td>12120.00$ </td>
                                  <td><span class="label label-primary label-mini">Due</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          Maskurir
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>56456.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="#">Maskurir</a></td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                  <td>12120.00$ </td>
                                  <td><span class="label label-success label-mini">Due</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          Maskurir
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>56456.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="#">ESD</a></td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                  <td>12120.00$ </td>
                                  <td><span class="label label-info label-mini">Due</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          Maskurir
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>56456.00$ </td>
                                  <td><span class="label label-warning label-mini">Due</span></td>
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
          <!--datetime picker end-->
          
          <!-- page end-->
@stop