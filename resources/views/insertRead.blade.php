@extends('welcome')
@section('content')
<center>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Record
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CRUD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="insertData" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <input type="text" placeholder="Enter product Name" class="form-control" id="" name="pname">
                        </div>
                        <div class="mb-2">
                            <input type="text" placeholder="Enter product Price" class="form-control" id=""
                                name="pprice">
                        </div>
                        <div class="mb-2">
                            <input type="file" class="form-control" id="" name="img">
                        </div>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</center>
<div class="container">
    <table class="table mt-5">
        <thead class="bg-primary text-white fw-bold">
            <th>No</th>
            <th>product Name</th>
            <th>product Price</th>
            <th>product Image</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>
        <tbody class="text-danger bg-light fs-4">
            @foreach($data as $item)
            <tr>
                <form action="updateDelete">
                    <td class="pt-5"><input type="hidden" name="id" value="{{$item['id']}}">{{$item['id']}}</td>
                    <td class="pt-5"><input type="hidden" name="name" value="{{$item['PNmae']}}">{{$item['PNmae']}}</td>
                    <td class="pt-5"><input type="hidden" name="price" value="{{$item['PPrice']}}">{{$item['PPrice']}}
                    </td>
                    <td> <img src="images/{{$item['PImage']}}" width="70px" height="70px" h alt=""> </td>
                    <td class="pt-5"><input type="submit" class="btn btn-outline-warning" name="update" value="Update">
                    </td>
                    <td class="pt-5"><input type="submit" class="btn btn-outline-danger" name="delete" value="Delete">
                    </td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection