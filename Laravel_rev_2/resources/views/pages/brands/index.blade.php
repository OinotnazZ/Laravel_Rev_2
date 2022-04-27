@extends('master.main')
@section('content')
    <div class="table">
        <h1>Brands</h1>
        <table class="table table-bordered table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($brands as $brand)
                <tr>
                    <td> {{$brand->id}}</td>
                    <td> {{$brand->name}}</td>
                    <td> {{$brand->created_at}}</td>
                    <td> {{$brand->updated_at}}</td>
                    <td><a href="{{url('brands/' . $brand->id)}}"><button type="button" class="btn btn-light">Show</button></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
