@extends( (Auth::check() && Auth::user()->is_admin) ? 'layouts.admin' : 'layouts.app')
@section('content')

<header>
    <div class="container px-4 text-center">
        <h1 class="fw-bolder">Welcome to TribeLand</h1>
        <hr>
        <p class="lead">
            Tribeland is a webstore that focusses on Norse and Celtic mythology but as the name implies, we sell tribal stuff in general.
            <br>
            <br>
            What distinguishes us from other stores is that our focus is not only on making money and selling trendy tribal and mythological merchandise,
            we also aim to educate people on those topics by providing you with information about the items you pruchase.
            Our admins will often post exciting news about archeological finds, historical discoveries and blog posts about living in nature.
            <br>
            <br>
            Join our community so you can interact and suggest topic we can write about.
        </p>
    </div>
</header>
@endsection