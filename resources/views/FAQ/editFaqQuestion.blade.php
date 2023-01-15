@extends( (Auth::check() && Auth::user()->is_admin) ? 'layouts.admin' : 'layouts.app')

@section('content')
    <header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit question</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('FAQquestion.update', $question->id) }}">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <label for="question" class="col-md-4 col-form-label text-md-end">Edit question</label>

                                    <div class="col-md-6">
                                        <input id="question" type="text"
                                            class="form-control @error('question') is-invalid @enderror" name="question"
                                            value="{{ $question->name }}" required autofocus>

                                        @error('question')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="answer" class="col-md-4 col-form-label text-md-end">Edit Answer

                                    </label>

                                    <div class="col-md-6">
                                        <textarea class="form-control @error('answer') is-invalid @enderror" name="answer" cols="85" rows="10"
                                            required>{{ $question->content }}</textarea>
                                        @error('answer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Edit post
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header>
        @endsection
