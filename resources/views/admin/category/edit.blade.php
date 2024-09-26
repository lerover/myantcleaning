@extends('admin.master')
@section('content')
    <div class="container-xxl p-10">
    <div class="breadcrumbs text-sm">
        <ul>
            <li><a>Categories</a></li>
            <li>Edit</li>
        </ul>
    </div>

    <div class="flex justify-between items-center">
        <h5 class="text-[2rem] font-black tracking-tight mb-5">Categories Edit</h5>
    </div>

        <form action="{{url('categories/'.$category->id)}}" method="POST">
            @csrf
            @method('PUT')
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" name="category" class="grow" value="{{$category->name}}"/>
            </label>

            <div>
                <button type="submit" class="btn btn-sm btn-primary mt-5">Update</button>
                <a href="{{url('/categories')}}" class="btn btn-sm btn-neutral">Back</a>
            </div>
        </form>

    </div>
@endsection
