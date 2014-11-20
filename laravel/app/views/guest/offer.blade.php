@section('content')

@if(Session::get('error'))
<div class="alert alert-warning">
    <p>{{ Session::get('error') }}</p>
</div>
@endif
<div class="row">
    <h3>Your Details</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"><b>Name</b></div>
            <div class="col-md-3">{{$guest->name}}</div>
        </div>
        <div class="row">
            <div class="col-md-2"><b>Contact Number</b></div>
            <div class="col-md-3">{{$guest->phone_number}}</div>
        </div>
    </div>
</div>
<div class="row mar-top-20">
    <h3>Offer Details</h3>
    <table class="table">
        <tr>
            <td>Offer:</td>
            <td><p>{{ $guest->offer->description }}</p></td>
        </tr>

        <tr>
            <td>Location:</td>
            <td>{{ $guest->offer->restaurant->city}}, {{$guest->offer->restaurant->country }}</td>
        </tr>

        <tr>
            <td>Restaurant:</td>
            <td>{{  $guest->offer->restaurant->name }}</td>
        </tr>
        <tr>
            <td>Available On:</td>
            <td>{{ $days_avail }}</td>
        </tr>
        @if($start_time)
        <tr>
            <td>Timings:</td>
            <td>{{ $start_time }} - {{ $end_time }}</td>
        </tr>
        @endif

        @if($guest->offer->min_guest)
        <tr>
            <td>Guests Allowed:</td>
            <td>{{ $guest->offer->min_guest }} - {{ $guest->offer->max_guest }}</td>
        </tr>
        @endif

        @if($expire_on)
        <tr>
            <td>Valid Till:</td>
            <td>{{$expire_on}}</td>
        </tr>
        @endif

    </table>
</div>
@stop
