@extends('layout.master')

{{-- set title page --}}
@section('title', 'index page')

{{-- content of index page --}}
@section('content')
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
                                {{-- show data --}}
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
                                            <button class="btn btn-danger btn-delete mx-1" data-bs-target="#exampleModal"
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

                        {{-- display Laravel pagination --}}
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

                                    {{-- display a modal when you click on this btn --}}
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

                                    {{-- delete data when click on this btn --}}
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </form>

                                {{-- Cancel the delete operation --}}
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">بازگشت</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
