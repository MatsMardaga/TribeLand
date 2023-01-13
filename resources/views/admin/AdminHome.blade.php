@extends('layouts.admin')

@section('content')

<!-- Header-->
<header class="bg-black bg-gradient text-white">
    <div class="container px-4 text-center">
        @csrf
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

<section class="bg-black" id="about">
    <div class="container px-4">
        <div class="row gx-4">
            <div class="col-lg-8 text-white">
                <h2>Tools</h2>
                <br>
                <a href="{{route('News.create')}}" class="row gx-4 justify-content-left text-decoration-none text-white">add newsitem</a>
                <hr>
            </div>
        </div>
    </div>
</section>
<!-- Services section-->
<section class="bg-black">
    <div class="container px-4">
        <div class="row gx-4">
            <div class="col-lg-8 text-white">
                <h2>Inbox</h2>
                <br>
                @foreach($contact as $item)
                <h3>{{ $item->subject}}</h3>
                <p>{{ $item->content}}</p>
                <small>Posted by {{ $item->user->name}} On {{ date('d-m-Y', strtotime($item->created_at)) }} At {{ date('H:i', strtotime($item->created_at)) }}</small>
                <hr>
                @endforeach
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