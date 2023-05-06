@extends('layouts.app')

@section('content')
<div class="container-fluid hero-section d-flex align-items-center vh-100">
    <div class="col-4 text-center m-auto bg-black bg-opacity-50 text-white p-5 ">
        <h1 class="mb-4">Get the details regarding your customized dress, uniforms, and suits. </h1>
       
        <button class="btn-dark-green">book an appointment</button>
    </div>
</div>
<div class="d-flex align-items-center" style="height: 50%;">




<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">


        <div class="container">
                        <div class="container-fluid">
                                <h2 class="heading1 px-2 py-5">What do you intend to do?</h2>
                                <h4 class="heading4 px-2">Looking for tailors or progress of your clothes?</h4>
                                <button class="booknow px-4 py-3 text-uppercase position">Log In as Customer</button>
                                <h4 class="heading4 px-2 py-3">Want to patch up your remaing tailoring jobs?</h4>
                                <button class="booknow px-4 py-3 text-uppercase position">Log In your Tailoring Brands</button>
                        </div>  
                    </div>

 

    </div>




    <div class="carousel-item">

    <div class="container">
   

                        <div class="container-fluid vh-100">
                                <h2 class="heading1 px-2 py-5">What are you?</h2>
                                <h4 class="heading4 px-2">Hoping to sign-up and find a better tailoring experience?</h4>
                                <button class="booknow px-4 py-3 text-uppercase position">Create an account as a Customer</button>
                                <h4 class="heading4 px-2 py-3">Creating an Account to handle your Tailoring?</h4>
                                <button class="booknow px-4 py-3 text-uppercase position">Create an account for your Brand</button>
                        
                    </div>
                    </div>

    </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
















































                  </div>





























<x-product-list></x-product-list>
@endsection
