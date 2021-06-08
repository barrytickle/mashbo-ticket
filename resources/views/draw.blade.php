@extends('layouts.master')
@section('content')
<div class="container" style="padding:20px;">
    <div class="d-flex flex-row justify-content-between align-items-center" >
        <div class="p-2">
            <h1 style="margin-bottom:20px;">Draws</h1>
        </div>
        <div class="p-2">
            @include('nav')
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Draw ID</th>
                <th>Title</th>
                <th>Target</th>
                <th>Entered</th>
                <th>Remaining</th>
                <th>View</th>

            </tr>
            </thead>
            <tbody>

            @foreach($draws as $draw)
                <tr style="vertical-align: middle">
                    <td>{{$draw->id}}</td>
                    <td>{{$draw->title}}</td>
                    <td>{{$draw->target}}</td>
                    <td>{{$draw->entered()}}</td>
                    <td>{{$draw->remaining()}}</td>
                    <td><a class="btn btn-success" href={{route('front.draw.show', ['id' => $draw->id])}}>View</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
