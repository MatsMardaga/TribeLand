@extends( (Auth::check() && Auth::user()->is_admin) ? 'layouts.admin' : 'layouts.app')

@section('content')

<header>
    <section class="bg-black" id="about">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8 text-white">
                    <h2>FAQ page</h2>
                    @foreach($category as $item)
                    <h3>{{ $item->name}}</h3>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <header>

        @endsection