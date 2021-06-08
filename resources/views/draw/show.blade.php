@extends('layouts.master')
@section('content')
    <div class="container" style="padding:20px;">
        <div class="d-flex flex-row justify-content-between align-items-center" >
            <div class="p-2">
                <h1 style="margin-bottom:20px;">{{$draw->title}}</h1>
            </div>
            <div class="p-2">
                @include('nav', ['add_ticket' => true])
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
                </tr>
                </thead>
                <tbody>
                    <tr style="vertical-align: middle">
                        <td>{{$draw->id}}</td>
                        <td>{{$draw->title}}</td>
                        <td>{{$draw->target}}</td>
                        <td>{{$draw->entered()}}</td>
                        <td>{{$draw->remaining()}}</td>
                    </tr>
                </tbody>
            </table>
        </div>



    <h3>Tickets ({{$draw->tickets->count()}})</h3>
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Ticket ID</th>
                    <th>Customer Email</th>
                    <th>Created at</th>
                </tr>
                </thead>
                <tbody>
                @foreach($draw->tickets as $ticket)
                <tr style="vertical-align: middle">
                    <td>{{$ticket->id}}</td>
                    <td>{{$ticket->user->email}}</td>
                    <td>{{$ticket->created_at}}</td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    @include('modal', ['max' => $remaining_users, 'draw' => $draw]);

@endsection
