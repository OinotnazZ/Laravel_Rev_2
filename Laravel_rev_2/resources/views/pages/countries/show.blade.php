@extends('master.main')
@section('content')
    <div class="table">
        <h1>Brand</h1>
        <table class="table table-bordered table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td> {{$country->id}}</td>
                <td> {{$country->name}}</td>
                <td> {{$country->created_at}}</td>
                <td> {{$country->updated_at}}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
