@extends('master.main')
@section('content')
    <div class="table">
        <h1>Cars</h1>
        <table class="table table-bordered table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Registration</th>
                <th scope="col">Year of Manufacture</th>
                <th scope="col">Color</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <td> {{$car->id}}</td>
                    <td> {{$car->registration}}</td>
                    <td> {{$car->year_of_manufacture}}</td>
                    <td> {{$car->color}}</td>
                    <td> {{$car->created_at}}</td>
                    <td> {{$car->updated_at}}</td>
                    <td><a href="{{url('cars/' . $car->id)}}"><button type="button" class="btn btn-light">Show</button></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
