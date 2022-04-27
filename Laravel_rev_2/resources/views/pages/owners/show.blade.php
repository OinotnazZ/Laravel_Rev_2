@extends('master.main')
@section('content')
    <div class="table">
        <h1>Owner</h1>
        <table class="table table-bordered table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Birth Date</th>
                <th scope="col">Wallet money</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td> {{$owner->id}}</td>
                <td> {{$owner->name}}</td>
                <td> {{$owner->birth_date}}</td>
                <td> {{$owner->wallet_money}}</td>
                <td> {{$owner->created_at}}</td>
                <td> {{$owner->updated_at}}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
