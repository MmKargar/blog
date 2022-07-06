<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/fontiran.css">
</head>

<body>




    <div class="container-fluid">
        <div class="row">
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








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>
