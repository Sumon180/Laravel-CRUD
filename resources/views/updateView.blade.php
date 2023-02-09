@extends('welcome')
@section('content')

<div class="col-md-4 m-auto border p-2 border-info mt-5">
    <h2 class="text-center text-warning">Update</h2>
    <form action="updateData" method="get">
        <div class="mb-2 mb-3">
            <label for="">Product Name</label>
            <input type="text" name="name" value="{{$pname}}" class="form-control" id="">
        </div>
        <div class="mb-2">
            <label for="">Product Price</label>
            <input type="text" name="price" value="{{$pprice}}" class="form-control" id="">
        </div>
        <br>
        <input type="hidden" name="id" value="{{$pid}}">
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
</div>

@endsection