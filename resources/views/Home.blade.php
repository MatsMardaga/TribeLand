<!-- Check to see which layout to use, if logged in and admin admin layout is used, if the if statement fails the app layout is used -->
@extends(Auth::check() && Auth::user()->is_admin ? 'layouts.admin' : 'layouts.app')

@section('content')
    <!-- Header-->
    <header class="bg-black bg-gradient text-white">
        <div class="container px-4 text-center">
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
                <br>
                <a href="/about">You can click here to see the about page</a>
            </p>
        </div>
    </header>
    <!-- Who are we section-->
    <section class="bg-black" id="about">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8 text-white">
                    <h2>What is this site</h2>
                    <p class="lead">
                        This site was developped for a school project called Backend web
                        It was developped by Mats Mardaga and could in the future be used as a basis for other personal projects
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
