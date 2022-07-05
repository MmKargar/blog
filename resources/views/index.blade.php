<!doctype html>
<html lang="en">

<head>
    <title>index page</title>
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
            <div>
                <h1 class="text-center text-light mt-3">بلاگ</h1>
            </div>
            <div class="mt-3">
                <div class="mb-3 box-add">
                    <a href="/posts/create" class="btn btn-add">افزودن</a>
                </div>
                <div class="col-12 col-md-8 table-responsive mx-auto">
                    <table class="table table-light text-center text-light">
                        <thead>
                            <tr>
                                <th>شماره کاربر</th>
                                <th>عنوان</th>
                                <th>تصویر</th>
                                <th> عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td class="d-flex align-items-baseline justify-content-center pt-1">
                                        {{ $item->id }}</td>
                                    <td class="pt-4">{{ $item->title }}</td>
                                    <td>
                                        <div class="image-style mx-auto">
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="not found"
                                                class="rounded w-100 mb-3 img-fluid">
                                        </div>
                                    </td>
                                    <td class="d-flex align-items-baseline justify-content-center pt-4">
                                        <div>
                                            <a href="posts/{{ $item->id }}/edit"
                                                class="btn btn-warning text-light mx-1">ویرایش</a>
                                        </div>

                                        <form>
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-delete mx-1"
                                                data-bs-target="#exampleModal"
                                                onclick="deletefunc({{ $item->id }})">حذف</button>
                                        </form>
                                        <div>
                                            <a href="posts/{{ $item->id }}" class="btn btn-primary mx-1">مشاهده</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center my-4">
                        {!! $data->links() !!}
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header d-flex justify-content-between">
                                <div>
                                    <h3 class="modal-title text-danger text-bold">هشدار</h3>
                                </div>
                                <div>
                                    <button type="button" class=" btn btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                    </button>
                                </div>
                            </div>
                            <div class="modal-body">
                                <h6>آیا از حذف رکورد اطمینان دارید ؟</h6>
                            </div>
                            <div class="modal-footer">
                                <form id="confirm-form" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </form>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">بازگشت</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="/js/script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
        </script>
</body>

</html>
