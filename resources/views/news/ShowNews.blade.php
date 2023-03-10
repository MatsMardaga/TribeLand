<!-- Check to see which layout to use, if logged in and admin admin layout is used, if the if statement fails the app layout is used -->
@extends(Auth::check() && Auth::user()->is_admin ? 'layouts.admin' : 'layouts.app')

@section('content')
    <header class="">
        <div class="">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <!--used to show message when item is created or updated-->
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <!--used to show message when item is deleted-->
                        @if (session('statuswarn'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('statuswarn') }}
                            </div>
                        @endif
                        <div class="card-header">All posts</div>
                        <div class="card-body">
                            <div>
                            </div>
                            @foreach ($news as $item)
                                <h3>{{ $item->title }}</h3>
                                <p>{{ $item->message }}</p>
                                <small>Posted by {{ $item->user->name }} On
                                    {{ date('d-m-Y', strtotime($item->created_at)) }} At
                                    {{ date('H:i', strtotime($item->created_at)) }} </small>
                                <small>Last edited at {{ date('d-m-Y at H:i', strtotime($item->updated_at)) }} At
                                    {{ date('H:i', strtotime($item->updated_at)) }}</small>
                                @if (Auth::check() && Auth::user()->is_admin)
                                    <a href="{{ route('News.edit', $item->id) }}">Edit post</a>
                                    <form method="POST" action="{{ route('News.destroy', $item->id) }}">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete Post" class="btn"
                                            onclick="return confirm('Delete post?');">
                                    </form>
                                @endif
                                <hr>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <header>
        @endsection
