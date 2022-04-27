@extends('master.main')
@section('content')
    <div class="table">
        <h1>Brand</h1>
        <table class="table table-bordered table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Registration</th>
                <th scope="col">Year of Manufacture</th>
                <th scope="col">Color</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td> {{$car->id}}</td>
                <td> {{$car->registration}}</td>
                <td> {{$car->year_of_manufacture}}</td>
                <td> {{$car->color}}</td>
                <td> {{$car->created_at}}</td>
                <td> {{$car->updated_at}}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
