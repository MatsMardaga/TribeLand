@extends( (Auth::check() && Auth::user()->is_admin) ? 'layouts.admin' : 'layouts.app')

@section('content')

<div class="container">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Alle posts</div>
                <div class="card-body">
                    <div>
                    </div>
                    @foreach($news as $item)
                    <h3>{{ $item->title}}</h3>
                    <p>{{ $item->message}}</p>
                    <small>Posted by {{ $item->user->name}} On {{ $item->created_at->format('d/m/y \a\t H:i')}} </small>
                    <small>Last edited at {{ $item->updated_at->format('d/m/y \a\t H:i')}}</small>
                    @if(Auth::check() && Auth::user()->is_admin)
                        <a href="{{route('News.edit', $item->id)}}">Edit post</a>
                        <form method="POST" action="{{route('News.destroy', $item->id)}}">
                            @csrf
                            @method("delete")
                            <input type="submit" value="Delete Post" class="btn" onclick="return confirm('Delete post?');">
                        </form>
                    @endif
                    <hr>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection