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
    {{-- <link rel="stylesheet" href="/css/fontiran.css"> --}}
</head>

<body dir="rtl">

    <div class="container-fluid">
        <div class="row mb-5">
            <div class="">
                <h1 class="text-center text-light my-5">بلاگ</h1>
            </div>
            <div class="col-md-8 col-12 mx-auto mb-5 p-4 rounded">
                <form action="posts/create">
                    <button class="btn btn-add mx-5" type="submit">افزودن</button>
                </form>
                <div class="table-responsive p-4 rounded mb-5">
                    <table
                        class="table table-light table-bordered bg-white text-center table-striped table-hover rounded mb-5">
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
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="not found"
                                            class="">
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <form action="posts/{{ $item->id }}/edit" method="GET">
                                            <button class=" mx-1 btn btn-warning" type="submit">ویرایش</button>
                                        </form>
                                        <form action="">
                                            @csrf
                                            @method('delete')
                                            <button class=" mx-1 btn btn-danger btn-delete" {{-- data-bs-toggle="modal" --}}
                                                {{-- data-bs-target="#exampleModal" --}}
                                                onclick="showModal({{ $item->id }})">حذف</button>
                                        </form>
                                        <form action="posts/{{ $item->id }}">
                                            <button class=" mx-1 btn btn-primary" type="submit">مشاهده</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center mt-5">
                        {!! $data->links() !!}
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header d-flex justify-content-between">
                                <div>
                                    <h3 class="modal-title text-danger text-bold" id="exampleModalLabel">هشدار</h3>
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
                                <button type="button" class="btn btn-danger" onclick="deletefunc()">حذف</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">بازگشت</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <script src="/js/script.js"></script>
        <script src="jquery-3.6.0.min.js"></script>
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
