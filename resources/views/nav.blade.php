<a class="btn btn-primary" href="/">View all</a>
<a class="btn btn-primary" href="{{route('front.draw.create')}}">Add a new draw</a>
@if(isset($add_ticket))
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
    Add Ticket
    </button>
@endif
