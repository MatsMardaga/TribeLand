@extends('layouts.admin')

@section('content')

<!-- Header-->
<header class="bg-black bg-gradient text-white">
    <div class="container px-4 text-center">
        <h1 class="fw-bolder">Welcome to the AdminToolkit {{ Auth::user()->name }} </h1>
        <hr>
        <p class="lead">
            Here you will find the tools needed to administrate the TribeLand website
            <br>
            <br>
            In your inbox you will find suggestions for FAQ questions and News items.
            You can add update and delete newsitems and FAQ questions as well as their categories
            <br>
            <br>
            For further information e-mail me at mats.mardaga@gmail.com, O7.
        </p>
    </div>
</header>
<!-- Add news item button-->
<section class="bg-black" id="about" >
    <div class="container px-4">
        <div class="row gx-4">
            <div class="col-lg-8 text-white">
                <a href="{{route('News.create')}}" class="row gx-4 justify-content-left text-decoration-none text-white">add newsitem</a>

            </div>
        </div>
    </div>
</section>
<!-- Services section-->
<section class="bg-black">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8 text-white">
                <h2>Who made it</h2>
                <p class="lead"></p>
            </div>
        </div>
    </div>
</section>
<!-- Contact section-->
<section class="bg-black">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center text-white">
            <div class="col-lg-8">
                <h2>Why did we create it </h2>
                <p class="lead"></p>
            </div>
        </div>
    </div>
</section>

@endsection