@extends('admin.master')
@section('content')

    <div class="container-xxl p-10">
{{--        alert box for del MSG--}}
        @if(session('delMsg'))
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    Toastify({
                        text: '{{ session('delMsg') }}',
                        duration: 3000,
                        destination: "https://github.com/apvarun/toastify-js",
                        newWindow: true,
                        close: true,
                        gravity: "bottom", // `top` or `bottom`
                        position: "center", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style: {
                            background: "rgba(30, 61, 241, 0.8)",
                        },
                        onClick: function(){} // Callback after click
                    }).showToast();
                });
            </script>
        @endif
        <div class="breadcrumbs text-sm">
            <ul>
                <li><a>Categories</a></li>
                <li>List</li>
            </ul>
        </div>

        <div class="flex justify-between items-center">
            <h5 class="text-[2rem] font-black tracking-tight mb-5">Categories</h5>
            <!-- Open the modal using ID.showModal() method -->
            <button class="btn btn-primary btn-md py-1" onclick="my_modal_1.showModal()">New Category</button>
            <dialog id="my_modal_1" class="modal">
                <div class="modal-box h-72 max-w-screen-md flex flex-col justify-around">
                    <div class="flex justify-between">
                        <h3 class="text-lg font-bold">Create category</h3>
                        <div class="modal-action m-0 p-0">
                            <form method="dialog">
                                <!-- if there is a button in form, it will close the modal -->
                                <button class="btn btn-outline btn-sm"><i class="fa-solid fa-xmark"></i></button>
                            </form>
                        </div>
                    </div>

                    <h3 class="text-sm font-bold">Name</h3>
                    <form action="{{url('categories ')}}" method="POST" class="h-2/5 flex flex-col justify-between">
                        @csrf
                        <input type="text" placeholder="Type here" name="category"
                               class="input input-bordered w-full focus:outline-none focus:border"/>

                        <div class="w-1/2 flex justify-between">
                            <button type="submit" class="btn btn-primary btn-sm">Create</button>
                        </div>
                    </form>
                </div>
            </dialog>
        </div>
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                <tr>
                    <th colspan="3"></th>
                    <th class="w-44">
                        <form action="" method="">
                            <label class="input input-bordered flex items-center gap-2">
                                <input type="text" class="grow" placeholder="Search"/>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 16"
                                    fill="currentColor"
                                    class="h-4 w-4 opacity-70">
                                    <path
                                        fill-rule="evenodd"
                                        d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                                        clip-rule="evenodd"/>
                                </svg>
                            </label>
                        </form>
                    </th>
                </tr>
                <tr class="border-x-2 ">
                    <th></th>
                    <th class="font-black">Name</th>
                    <th></th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="border-x-2">

                <!-- row 2 -->
                @foreach ($categories as $cateogry)
                    <tr class="hover">
                        <th>{{$cateogry->id}}</th>
                        <td>{{$cateogry->name}}</td>
                        <td></td>
                        <td>
                            <form action="{{url('categories/'.$cateogry->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{url('categories/'.$cateogry->id.'/edit')}}" class="btn btn-sm btn-primary">Edit</a>
                                <button type="submit" class="btn btn-sm btn-error">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
