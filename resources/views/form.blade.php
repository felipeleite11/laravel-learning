@extends('layouts/default')

@section('content')

    <div class="col-sm col-md-8 animate__animated animate__fadeIn">
        @if(isset($data))
            <form action="/data/{{$data->id}}" method="post">
            @method('PUT')
        @else
            <form action="/data" method="post">
        @endif

            @csrf

            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
                <input type="text" class="form-control" name="name" aria-describedby="inputGroup-sizing-sm" value="{{$data->name ?? ''}}">
            </div>

            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Points</span>
                <input type="number" class="form-control" name="points" aria-describedby="inputGroup-sizing-sm" value="{{$data->points ?? ''}}">
            </div>

            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Birthdate</span>
                <input type="date" class="form-control" name="birthdate" aria-describedby="inputGroup-sizing-sm" value="{{isset($data) ? date('Y-m-d', strtotime($data->birthdate)) : ''}}">
            </div>

            <button type="submit" class="btn btn-primary">
                @if(isset($data))
                    Save changes
                @else
                    Submit
                @endif
            </button>
        </form>
    </div>

@endsection
