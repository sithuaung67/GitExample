@extends('layouts.app')

@section('title') Welcome to..... @stop

@section('content')
    <div class="container mb-5 mt-5" >
        @include('menu')
        <div class="row mb-3">
            <div class="col-md-4 d-none d-sm-block">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{URL::to('images/car1.jpg')}}" alt="First slide">
                            <div class="carousel-caption">
                                <h5>Hello from my web site</h5>
                                <a href="#" class="btn btn-outline-success">More...</a>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('images/car.jpg')}}" alt="Second slide">
                            <div class="carousel-caption">
                                <h5>Hello from my web site</h5>
                                <a href="#" class="btn btn-outline-success">More...</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('images/car3.jpg')}}" alt="Third slide">
                            <div class="carousel-caption">
                                <h5>Hello from my web site</h5>
                                <a href="#" class="btn btn-outline-success">More...</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('images/car4.jpg')}}" alt="Fourth slide">
                            <div class="carousel-caption">
                                <h5>Hello from my web site</h5>
                                <a href="#" class="btn btn-outline-success">More...</a>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" src="{{URL::to('images/car4.jpg')}}"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 d-none d-sm-block">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="3" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"  src="{{URL::to('images/car4.jpg')}}" alt="Five slide">
                            <div class="carousel-caption">
                                <h5>Hello from my web site</h5>
                                <a href="#" class="btn btn-outline-success">More...</a>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('images/car1.jpg')}}" alt="Six slide">
                            <div class="carousel-caption">
                                <h5>Hello from my web site</h5>
                                <a href="#" class="btn btn-outline-success">More...</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('images/car.jpg')}}" alt="Seven slide">
                            <div class="carousel-caption">
                                <h5>Hello from my web site</h5>
                                <a href="#" class="btn btn-outline-success">More...</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('images/car3.jpg')}}" alt="Eight slide">
                            <div class="carousel-caption">
                                <h5>Hello from my web site</h5>
                                <a href="#" class="btn btn-outline-success">More...</a>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="6" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"  src="{{URL::to('images/car.jpg')}}"  alt="First slide">
                            <div class="carousel-caption">
                                <h5>Hello from my web site</h5>
                                <a href="#" class="btn btn-outline-success">More...</a>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('images/car1.jpg')}}" alt="Second slide">
                            <div class="carousel-caption">
                                <h5>Hello from my web site</h5>
                                <a href="#" class="btn btn-outline-success">More...</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('images/car3.jpg')}}" alt="Third slide">
                            <div class="carousel-caption">
                                <h5>Hello from my web site</h5>
                                <a href="#" class="btn btn-outline-success">More...</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('images/car4.jpg')}}" alt="Third slide">
                            <div class="carousel-caption">
                                <h5>Hello from my web site</h5>
                                <a href="#" class="btn btn-outline-success">More...</a>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($pds as $pd)
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            @if($pd->image)
                                <img src="{{route('front.product.image',
                                ['image_name'=>$pd->image])}}" class="card-img-top" style="width: 200px;height: 200px">
                                @endif
                           <p class="card-text text-center">{{$pd->product_name}}</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{route('add.cart',['id'=>$pd->id])}}" class="btn btn-outline-primary shadow ">Add Card </a>

                                    </div>
                                    <div class="col-md-6">
                                      <p><i class="fas fa-money"></i> {{$pd->price}} $ </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    <div class="pagination justify-content-center mb-5" style="background-color: #2ab27b">
        {{$pds->links()}}
    </div>
    <div class="container mb-5" style="background-color: #2ab27b">
        <div class="row">
        <div class="col-md-6">
            <div class="card mb-5">
                <div class="card-header">Location page</div>
                <div class="card-body">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.7350580394727!2d97.38404964981432!3d16.888995721377004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c2e971af8489db%3A0x77befc77b793c6f1!2sComputer+University+(Thaton)!5e0!3m2!1sen!2smm!4v1549781747894" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-black">Contact Our Support team.</div>
                <div class="card-body">
            <form class="text-black" id="contactForm" method="post" action="{{route('post.message')}}">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control @if($errors->has('email')) is-invalid @endif">
                    @if($errors->has('email')) <span class="invalid-feedback">{{$errors->first('email')}}</span> @endif
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="phone" class="form-control @if($errors->has('phone')) is-invalid @endif">
                    @if($errors->has('phone')) <span class="invalid-feedback">{{$errors->first('phone')}}</span> @endif
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" class="form-control @if($errors->has('message')) is-invalid @endif"></textarea>
                    @if($errors->has('message')) <span class="invalid-feedback">{{$errors->first('message')}}</span> @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-light btn-lg">Send</button>
                </div>
                @csrf
            </form>
            @if(Session('info'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session('info')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if(Session('err'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{Session('err')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
            </div>
        </div>
        </div>
    </div>
@include('layouts.footer')
@stop