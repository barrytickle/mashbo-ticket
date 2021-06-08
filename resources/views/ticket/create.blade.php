@extends('layouts.master')
@section('content')
    <div class="container" style="padding:20px;">
        <div class="d-flex flex-row justify-content-between align-items-center" >
            <div class="p-2">
                <h1 style="margin-bottom:20px;">{{$draw->title}}</h1>
            </div>
            <div class="p-2">
                @include('nav')
            </div>
        </div>
        <div class="row" style="margin-bottom:50px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Draw ID</th>
                    <th>Title</th>
                    <th>Target</th>
                    <th>Entered</th>
                    <th>Remaining</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr style="vertical-align: middle">
                    <td>{{$draw->id}}</td>
                    <td>{{$draw->title}}</td>
                    <td>{{$draw->target}}</td>
                    <td>{{$draw->entered()}}</td>
                    <td>{{$draw->remaining()}}</td>
                    <td><a class="btn btn-primary">Edit</a></td>
                    <td><a class="btn btn-danger">Delete</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <h2>Create Ticket</h2>
        <div class="row">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
@endsection
