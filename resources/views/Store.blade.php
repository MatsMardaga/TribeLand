<!-- Check to see which layout to use, if logged in and admin admin layout is used, if the if statement fails the app layout is used -->
@extends( (Auth::check() && Auth::user()->is_admin) ? 'layouts.admin' : 'layouts.app')

@section('content')

<section class="bg-black" id="about">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8 text-white">
                <h2>What is this site</h2>
                <p class="lead"></p>
            </div>
        </div>
    </div>
</section>
@endsection