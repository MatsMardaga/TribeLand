@extends(Auth::check() && Auth::user()->is_admin ? 'layouts.admin' : 'layouts.app')

@section('content')
    <section class="bg-white" id="about">
        <h2 class="row gx-4 justify-content-center">FAQ page</h2>
        @if (Auth::check() && Auth::user()->is_admin)
        <a class="row gx-4 justify-content-center" href="{{ route('FAQcategory.create') }}">Create new category</a>
        @endif
        <hr>
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('statuswarn'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('statuswarn') }}
                    </div>
                @endif
                @foreach ($category as $item)
                    <h1>{{ $item->name }}</h1>
                    @if (Auth::check() && Auth::user()->is_admin)
                        <div class="">

                            <a href="{{ route('FAQcategory.edit', $item->id) }}">Edit category</a>
                            <a href="{{ route('FAQ.createwithID', $item->id) }}">Create Q&A</a>
                            <form method="POST" action="{{ route('FAQcategory.destroy', $item->id) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete category" class="btn"
                                    onclick="return confirm('Delete category?');">
                            </form>
                        </div>
                    @endif
                    @foreach ($item->FaQCategoryQuestion as $question)
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse"
                                href="#collapse{{ $item->id }}{{ $question->id }}" role="button" aria-expanded="false"
                                aria-controls="collapseExample">
                                {{ $question->name }}
                            </a>
                            @if (Auth::check() && Auth::user()->is_admin)
                                <a href="{{ route('FAQquestion.edit', $question->id) }}">Edit Q&A</a>
                                <form method="POST" action="{{route('FAQquestion.destroy', $question->id)}}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete question and content" class="btn"
                                        onclick="return confirm('Delete question and content?');">
                                </form>
                            @endif
                        </p>
                        <div class="collapse" id="collapse{{ $item->id }}{{ $question->id }}">
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
