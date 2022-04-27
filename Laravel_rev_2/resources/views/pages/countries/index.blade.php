@extends('master.main')
@section('content')
    <div class="table">
        <h1>Countries</h1>
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
            @foreach($countries as $country)
                <tr>
                    <td> {{$country->id}}</td>
                    <td> {{$country->name}}</td>
                    <td> {{$country->created_at}}</td>
                    <td> {{$country->updated_at}}</td>
                    <td><a href="{{url('countries/' . $country->id)}}"><button type="button" class="btn btn-light">Show</button></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
