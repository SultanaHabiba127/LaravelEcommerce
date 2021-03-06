@extends('layouts.master')
@section('content')
     <!-- Sidebar Content -->
  <div class='container margin-top-20'>
      <div class="row">
          <div class="col-md-4">
              @include('partials.product-sidebar')
          </div>
          <div class="col-md-8">
              <div class="widget">
                  <h3>Featured Product</h3>
                  <div class="row">
                      <div class="col-md-3">
                          <div class="card">
                          <img class="card-img-top feature-img" src="{{ asset('images/products/'. '1.jpg') }}" alt="Card image">
                              <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Taka 10,000</p>
                                <a href="#" class="btn btn-outline-warning">Add To Cart</a>
                              </div>
                            </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card">
                          <img class="card-img-top feature-img" src="{{ asset('images/products/'. '1.jpg') }}" alt="Card image">
                              <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Taka 10,000</p>
                                <a href="#" class="btn btn-outline-warning">Add To Cart</a>
                              </div>
                            </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card">
                          <img class="card-img-top feature-img" src="{{ asset('images/products/'. '1.jpg') }}" alt="Card image">
                              <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Taka 10,000</p>
                                <a href="#" class="btn btn-outline-warning">Add To Cart</a>
                              </div>
                            </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card">
                          <img class="card-img-top feature-img" src="{{ asset('images/products/'. '1.jpg') }}" alt="Card image">
                              <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Taka 10,000</p>
                                <a href="#" class="btn btn-outline-warning">Add To Cart</a>
                              </div>
                            </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card">
                          <img class="card-img-top feature-img" src="{{ asset('images/products/'. '1.jpg') }}" alt="Card image">
                              <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Taka 10,000</p>
                                <a href="#" class="btn btn-outline-warning">Add To Cart</a>
                              </div>
                            </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card">
                          <img class="card-img-top feature-img" src="{{ asset('images/products/'. '1.jpg') }}" alt="Card image">
                              <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Taka 10,000</p>
                                <a href="#" class="btn btn-outline-warning">Add To Cart</a>
                              </div>
                            </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card">
                          <img class="card-img-top feature-img" src="{{ asset('images/products/'. '1.jpg') }}" alt="Card image">
                              <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Taka 10,000</p>
                                <a href="#" class="btn btn-outline-warning">Add To Cart</a>
                              </div>
                            </div>
                      </div>
                      <div class="col-md-3">
                          <div class="card">
                          <img class="card-img-top feature-img" src="{{ asset('images/products/'. '1.jpg') }}" alt="Card image">
                              <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Taka 10,000</p>
                                <a href="#" class="btn btn-outline-warning">Add To Cart</a>
                              </div>
                            </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection