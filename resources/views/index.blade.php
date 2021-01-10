@extends('layouts/default')

@section('content')

    <div class="col-sm col-md-8">

        <table class="table table-bordered bg-white animate__animated animate__fadeIn">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Points</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                    <tr>
                        <th scope="row">{{$d->id}}</th>
                        <td>{{$d->name}}</td>
                        <td>{{$d->points}}</td>
                        <td>{{date('d/m/Y', strtotime($d->birthdate))}}</td>
                        <td class="action-col">
                            <a href="/data/{{$d->id}}">
                                <i data-feather="eye" width="20" class="text-success"></i>
                            </a>
                            <a href="/data/{{$d->id}}/edit">
                                <i data-feather="edit" width="18" class="text-primary"></i>
                            </a>
                            <a href="/data/{{$d->id}}/destroy">
                                <i data-feather="trash-2" width="18" class="text-danger"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row">
            <div class="col-sm col-md-8">
                {{$data->links()}}
            </div>

            <div class="col-sm col-md-4">
                <p align="right" class="text-muted">{{$data->total()}} items found</p>
            </div>
        </div>
    </div>

@endsection
