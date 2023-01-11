@extends( (Auth::check() && Auth::user()->is_admin) ? 'layouts.admin' : 'layouts.app')

@section('FAQ')

<section class="bg-black" id="about">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8 text-white">
                <h2>FAQ</h2>
                <p class="lead"></p>
            </div>
        </div>
    </div>
</section>

@endsection