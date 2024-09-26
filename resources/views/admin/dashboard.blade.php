@extends('admin/master')
@section('content')
    <div class="container-xxl p-10">
        <h5 class="text-[2rem] font-black tracking-tight">Dashboard</h5>

        <div class="flex justify-between">
{{--            profile--}}
            <div class="w-1/2 p-5 border-t-2 shadow-md rounded flex justify-between">
                <div class="flex items-center">
                    <i class="fas fa-user" style="font-size: 1.5rem"></i>
                    <div class="ms-5">
                        <h3 class="font-black">Welcome</h3>
                        {{--                    username--}}
                        <p>allen</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <a href="#" class="btn btn-outline-neutral btn-sm border"><i class="fa-solid fa-arrow-right-from-bracket"></i> Sign out</a>
                </div>
            </div>
{{--            notification--}}
            <div class="w-1/3 p-5 shadow-md rounded">
                    <h1>Notifications</h1>


            </div>
        </div>
    </div>

@endsection
