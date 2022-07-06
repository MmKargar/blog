@extends('layout.master')

{{-- set title page --}}
@section('title', 'edit-add page')

{{-- content of edit-add page --}}
@section('content')

    <div class="container-fluid">
        <div class="row">
            {{-- show errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="col-12 col-md-8 mx-auto mt-4 p-3 rounded">

                {{-- you can add or edit data in table--}}
                <h1 class="text-center text-light">
                    {{ $route == 'create' ? 'افزودن پست' : 'ویرایش پست' }}</h1>
                <form action="{{ $route == 'create' ? 'store' : "/posts/$article->id/update" }}" method="POST"
                    class="form p-3 " enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="form-control mt-5 mb-3 p-3" name="title" placeholder="عنوان..."
                        value="{{ $route == 'create' ? old('title') : "$article->title" }}">
                    <textarea name="body" id="body" cols="30" rows="10" class="form-control mb-3"
                        placeholder="اینجا بنویسید ...">{{ $route == 'create' ? old('body') : "$article->body" }}</textarea>
                    @if ($route == 'edit')
                        @method('put')
                        <div class="image-style">
                            <img src="{{ asset('storage/' . $article->image) }}" class=" rounded w-100 mb-3 img-fluid"
                                alt="not found">
                        </div>
                    @endif
                    <input type="file" name="image" class="form-control">
                    <div class="my-4">
                        <button class="btn btn-primary btn-lg" type="submit"
                            value="">{{ $route == 'create' ? 'افزودن' : 'ویرایش' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
