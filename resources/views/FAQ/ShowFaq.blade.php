@extends( (Auth::check() && Auth::user()->is_admin) ? 'layouts.admin' : 'layouts.app')

@section('content')
<section class="bg-white" id="about">
    <h2 class="row gx-4 justify-content-center">FAQ page</h2>
    <hr>
    <div class="row gx-4 justify-content-center">
        <div class="col-lg-8">
            @foreach($category as $item)
            <h1>{{ $item->name }}</h1>
            @foreach($item->FaQCategoryQuestion as $question)
            <p>
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapse{{$item->id}}{{$question->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    {{ $question->name }}
                </a>
            </p>
            <div class="collapse" id="collapse{{$item->id}}{{$question->id}}">
                <div class="card card-body">
                    <p>{{ $question->content }}</p>
                </div>
            </div>
            <h3 data-bs-toggle="collapse"></h3>
            <br>
            @endforeach

            @endforeach
        </div>
    </div>

</section>
@endsection