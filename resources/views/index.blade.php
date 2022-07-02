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

<body dir="rtl">


    <div class="container-fluid">
        <div class="row">
            <div class="">
                <h1 class="text-center text-light my-3">بلاگ</h1>
            </div>
            <div class="col-md-8 col-12 mx-auto mb-5 p-4 rounded">
                <a href="posts/create" class="btn btn-add mx-5">افزودن</a>
                <div class="table-responsive p-4 rounded mb-2">
                    <table class="table table-light table-bordered bg-white text-center table-striped table-hover rounded">
                        <thead>
                            <tr>
                                <th>شماره کاربر</th>
                                <th>عنوان</th>
                                <th>تصویر</th>
                                <th> عملیات</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        <img src="{{ $item->image }}" alt="not found" class="img-fluid rounded-top"
                                            alt="">
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <button class=" mx-1 btn btn-warning">ویرایش</button>
                                        <button class=" mx-1 btn btn-danger">حذف</button>
                                        <button class=" mx-1 btn btn-primary">مشاهده</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                      <div class="d-flex justify-content-center">
                        {!! $data->links() !!}
                      </div>
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
