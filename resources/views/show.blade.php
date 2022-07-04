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
        <div class="row px-3 py-2 mb-1">
            <div class="">
                <a href="/posts" class="btn btn-info btn-back mx-4 ">بازگشت</a>
            </div>
            <div>
                <h1 class="text-center text-white ">مشاهده پست</h1>
            </div>
            <div class="col-md-4  col-12 card mx-auto mt-4 text-light">
                <div class="card-header m-2">
                    <h3>{{ $article->title }}</h3>
                </div>
                <div class="card-body">
                    <div class=" mx-auto">
                        <img src="{{ asset('storage/' . $article->image) }}" alt="not found"
                            class="w-100 rounded img-thumbnail img-fluid">
                    </div>
                </div>
                <div class="card-footer ">
                    <p>{{ $article->body }}</p>
                </div>
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
