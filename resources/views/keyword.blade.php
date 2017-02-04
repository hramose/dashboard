@extends('template');
@section('main')
              <!-- page start-->
                  <div class="row">
                      <div class="col-lg-12" align="center"> <h3>Input Data Keyword</h3></div>
                        <section class="panel">                       
                         <div class="col-lg-4">
                            <header class="panel-heading">
                              Silahkan inputkan data keyword
                            </header>
                          <div class="panel-body">
                              <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                      <label for="indext" class="col-lg-2 col-sm-2 control-label">Index</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="index" placeholder="Masukkan index yang ingin di berikan">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="keyword" class="col-lg-2 col-sm-2 control-label">Keyword</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="keyword" placeholder="Masukkan keywordnya">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Simpan </button>
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
                              <tr>
                                  <td><a href="#">Vector Ltd</a></td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          Adimin co
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          boka soka
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          salbal llb
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="#">Vector Ltd</a></td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          Adimin co
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="#">Vector Ltd</a></td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          Adimin co
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="#">Vector Ltd</a></td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <a href="#">
                                          Adimin co
                                      </a>
                                  </td>
                                  <td class="hidden-phone">Lorem Ipsum dorolo</td>
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