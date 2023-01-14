@extends(Auth::check() && Auth::user()->is_admin ? 'layouts.admin' : 'layouts.app')

@section('content')
    <!-- Header-->
    <header class="bg-black bg-gradient text-white">
        <div class="container px-4 text-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h1 class="fw-bolder">Welcome to TribeLand</h1>
            <hr>
            <p class="lead">
                Tribeland is a webstore that focusses on Norse and Celtic mythology but as the name implies, we sell tribal
                stuff in general.
                <br>
                <br>
                What distinguishes us from other stores is that our focus is not only on making money and selling trendy
                tribal and mythological merchandise,
                we also aim to educate people on those topics by providing you with information about the items you
                pruchase.
                Our admins will often post exciting news about archeological finds, historical discoveries and blog posts
                about living in nature.
                <br>
                <br>
                Join our community so you can interact and suggest topic we can write about.
            </p>
        </div>
    </header>
    <!-- About section-->
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
