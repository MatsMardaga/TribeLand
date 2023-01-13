@extends( (Auth::check() && Auth::user()->is_admin) ? 'layouts.admin' : 'layouts.app')

@section('content')
<section class="bg-white" id="about">
    <h2 class="row gx-4 justify-content-center">FAQ page</h2>
    <div class="row gx-4 justify-content-center">
        <div class="col-lg-8">
            @foreach($category as $item)
            <h1>{{ $item->name}}</h1>
            <p>
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample{{$loop->iteration}}" role="button" aria-expanded="false" aria-controls="collapseExample">

                </a>
            </p>
            @foreach($item->FaQCategoryQuestion as $question)
            <div class="collapse" id="collapseExample{{$loop->iteration}}">
                <div class="card card-body">
                    <p>Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.</p>
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