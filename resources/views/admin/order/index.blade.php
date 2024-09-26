@extends('admin/master')
@section('content')
    <div class="container-xxl p-10">
        <div class="breadcrumbs text-sm">
            <ul>
                <li><a>Orders</a></li>
                <li>List</li>
            </ul>
        </div>

        <div class="flex justify-between items-center">
            <h5 class="text-[2rem] font-black tracking-tight mb-5">Orders</h5>>                                                                                                                                 </Orders></h5>

        </div>
        <div class="overflow-x-auto card bg-white shadow-lg">
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

                <tr>
                    <th>Customer Name</th>
                    <th class="font-black">Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="border-x-2">

                <!-- row 2 -->
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->status}}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
