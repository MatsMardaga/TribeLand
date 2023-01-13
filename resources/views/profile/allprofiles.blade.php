@extends( (Auth::check() && Auth::user()->is_admin) ? 'layouts.admin' : 'layouts.app')

@section('content')


<div class="container">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Alle posts</div>
                <div class="card-body">
                    @foreach($profile as $user)
                    <h3>{{ $user->name}}</h3>
                    <p>{{ $user->country}}</p>
                    @if(Auth::check() && Auth::user()->is_admin)
                    <a href="{{route('Allprofiles.show', $user->id)}}">Promote to admin</a>
                    @endif
                    <hr>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>
@endsection