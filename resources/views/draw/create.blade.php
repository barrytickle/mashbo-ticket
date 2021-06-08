@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Create a new draw</h1>
        <div class="row" style="margin:20px 0;">
            <form style="max-width:50%; margin:20px auto" method="post" action={{route('front.draw.store')}}>
                {{csrf_field()}}
                <div class="form-group" style="margin-bottom:20px;">
                    <label for="exampleInputEmail1">Draw Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="title">
                    <small id="emailHelp" class="form-text text-muted">Title for the draw name.</small>
                </div>
                <div class="form-group" style="margin-bottom:20px;">
                    <label for="target">Target</label>
                    <input type="number" class="form-control" id="target" name="target" step="25" value="0" min="0">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
