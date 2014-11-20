@section('content')
<div class="row">
    <h1>All Guests</h1>
    <a class="btn btn-success" href="{{ url('guest/create') }}">New</a>
</div>
<div class="row">
    {{ $guests->links() }}
</div>
<div class="row">
    <table class="table">
        <thead>
            
            <th>Id</th>
            <th>Name</th>
            <th>Phone_number</th>
            <th>Offer Selected</th>
        </thead>
        <tbody>
            @foreach($guests as $guest)
	           <tr>
                    
                    <td>
                        <a href="{{ url('guest/details/'.$guest->id) }}">{{ $guest->id }}</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('guest/details/'.$guest->id) }}">{{ $guest->name }}</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('guest/details/'.$guest->id) }}">{{ $guest->phone_number }}</a>
                    </td>

                   <td>
                       @if($guest->offer)
                       <a href="{{ url('guest/details/'.$guest->id) }}">{{ $guest->offer->description }}</a>
                       @endif
                   </td>
                    
	           </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
