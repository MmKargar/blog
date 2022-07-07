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
                                        <div>
                                            <button class="btn btn-danger btn-delete mx-1"
                                                @click=" isActive=true ">حذف</button>
                                        </div>

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


            </div>
        </div>
    </div>





    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <script>
        new Vue({
            el: ".row",
            data: {
                isActive: false,
            },
            methods: {
                click() {
                    this.$modal.show('example-modal')
                }
            }

        });
    </script>

@endsection

@section('script', '/js/script.js')
