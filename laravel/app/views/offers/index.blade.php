@section('content')
<div class="row">
    <h1>All Offers</h1>
    <a class="btn btn-success" href="{{ url('offers/create') }}">New</a>
</div>
<div class="row">
    {{ $offers->links() }}
</div>
<div class="row">
    <table class="table">
        <thead>
            
            <th>Restaurant Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Min_guest</th>
            <th>Max_guest</th>
            <th>Days_avail</th>
            <th>Timing</th>
            <th>Active</th>
            <th>Expire_on</th>
        </thead>
        <tbody>
            @foreach($offers as $offers)
	           <tr>
                    
                    <td>
                        <a href="{{ url('offers/details/'.$offers->id) }}">{{ $offers->restaurant->name }}</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('offers/details/'.$offers->id) }}">{{ $offers->description }}</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('offers/details/'.$offers->id) }}">{{ $offers->price }}</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('offers/details/'.$offers->id) }}">{{ $offers->min_guest }}</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('offers/details/'.$offers->id) }}">{{ $offers->max_guest }}</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('offers/details/'.$offers->id) }}">{{ $offers->days_avail }}</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('offers/details/'.$offers->id) }}">{{ $offers->timing }}</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('offers/details/'.$offers->id) }}">{{ $offers->active }}</a>
                    </td>
                    
                    <td>
                        <a href="{{ url('offers/details/'.$offers->id) }}">{{ $offers->expire_on }}</a>
                    </td>
                    
	           </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
