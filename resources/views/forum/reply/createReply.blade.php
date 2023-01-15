@extends('layouts.admin')

@section('content')
<Header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reply to forum message</div>

                <div class="card-body">
                    <form method="POST" action="{{route('ForumReply.store'), $id}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="content" class="col-md-4 col-form-label text-md-end">Message</label>

                            <div class="col-md-6">
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" cols="30" rows="23"></textarea>

                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Post message on forum
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</Header>
@endsection