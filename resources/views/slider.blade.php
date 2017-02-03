@extends('template')
@section('main')
<!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      Slider Gallery
                  </header>
                  <div class="panel-body">
                      <ul class="grid cs-style-3">
                          <li>
                              <figure>
                                  <img src="{{asset('assets/img/pic1.jpg')}}" alt="img04">
                                  <figcaption>
                                      <h3>Slider1</h3>
                                      <a class="fancybox" rel="group" href="sliderupload.html">Change</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="{{asset('assets/img/pic2.jpg')}}" alt="img01">
                                  <figcaption>
                                      <h3>Slider2</h3>
                                      <a class="fancybox" rel="group" href="sliderupload.html">Change</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="{{asset('assets/img/pic3.jpg')}}" alt="img02">
                                  <figcaption>
                                      <h3>Slider3</h3>
                                      <a class="fancybox" rel="group" href="sliderupload.html">Change</a>
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="{{asset('assets/img/pic4.jpg')}}" alt="img05">
                                  <figcaption>
                                      <h3>Slider4</h3>
                                      <a class="fancybox" rel="group" href="sliderupload.html">Change</a>
                                  </figcaption>
                              </figure>
                          </li>
                      </ul>

                  </div>
              </section>
              
              <!-- page end-->
              @stop