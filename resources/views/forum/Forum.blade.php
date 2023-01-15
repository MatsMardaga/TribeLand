<!-- Check to see which layout to use, if logged in and admin admin layout is used, if the if statement fails the app layout is used -->
@extends(Auth::check() && Auth::user()->is_admin ? 'layouts.admin' : 'layouts.app')

@section('content')
    <section class="bg-white" id="about">
        <h2 class="row gx-4 justify-content-center">Forum page</h2>
        <a class="row gx-4 justify-content-center" href="{{ route('ForumMessage.create') }}">Post a new message</a>
        <!-- Check to see if user is logged in and is admin, if any of these conditions is false, user will not see this-->
        <hr>
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <!--used to show message when item is created or updated-->
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @foreach ($forum as $item)
                    <h1>{{ $item->title }}</h1>
                    <small> {{ $item->content }}
                        <br>
                        <br>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapse{{ $item->id }}"
                                role="button" aria-expanded="false" aria-controls="collapseExample">
                                Show replies
                            </a>
                        </p>
                        @foreach ($item->ForumMessageReply as $reply)
                            <div class="collapse" id="collapse{{ $item->id }}">
                                <div class="card card-body">
                                    <p>{{ $reply->content }}</p>
                                </div>
                            </div>
                            <h3 data-bs-toggle="collapse"></h3>
                            <br>
                        @endforeach
                        <hr>
                @endforeach
            </div>
        </div>
    </section>
@endsection
