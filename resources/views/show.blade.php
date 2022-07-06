@extends('layout.master')

{{-- set title page --}}
@section('title', 'show page')

{{-- content of show page --}}
@section('content')
    <div class="container-fluid">
        <div class="row px-3 py-2 mb-1">

            {{-- back to the index page --}}
            <div>
                <a href="/posts" class="btn btn-info btn-back mx-4 ">بازگشت</a>
            </div>

            <div>
                <h1 class="text-center text-white ">مشاهده پست</h1>
            </div>

            {{-- title page --}}
            <div class="col-md-4  col-12 card mx-auto mt-4 text-light">
                <div class="card-header m-2">
                    <h3>{{ $article->title }}</h3>
                </div>

                {{-- display image --}}
                <div class="card-body">
                    <div class="mx-auto">
                        <img src="{{ asset('storage/' . $article->image) }}" alt="not found"
                            class="w-100 rounded img-thumbnail img-fluid">
                    </div>
                </div>

                {{-- display body --}}
                <div class="card-footer">
                    <p>{{ $article->body }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
