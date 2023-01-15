@extends('layouts.admin')

@section('content')
    <header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit category</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('FAQcategory.update', $cat->id) }}">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <label for="category" class="col-md-4 col-form-label text-md-end">New category
                                        name</label>

                                    <div class="col-md-6">
                                        <input id="category" type="text"
                                            class="form-control @error('category') is-invalid @enderror" name="category"
                                            value="{{ $cat->name }}" required autofocus>

                                        @error('category')
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
