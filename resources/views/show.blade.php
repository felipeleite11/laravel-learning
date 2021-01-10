@extends('layouts/default')

@section('content')

    <div class="col-sm col-md-8 animate__animated animate__fadeIn">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Person</h5>
                <p>Name: {{$data->name}}</p>
                <p>Points: {{$data->points}}</p>
                <p>Birthdate: {{date('d/m/Y', strtotime($data->birthdate))}}</p>
            </div>
        </div>
    </div>

@endsection
