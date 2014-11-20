@section('content')
<div class="row">
    <h1>Available Offers</h1>
</div>

<div class="row">
    @foreach($offers as $offer)
    <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3">
        <div class="thumbnail bootsnipp-thumb">

                <div>
                    <div><b>Offer</b></div>
                    <p>
                      {{$offer->description}}
                    </p>
                </div>
                <div>
                    <div><b>Restaurant</b></div>
                    <p>{{$offer->restaurant->name}}</p>
                </div>
                <div>
                    <div><b>City</b></div>
                    <p>{{$offer->restaurant->city}}</p>
                </div>

                <div class="caption">
                    <p>
                        {{ Form::button('Take Offers', array('class' => 'take_offer btn btn-primary btn-lg btn-block', 'data-toggle'=>"modal", 'data-target'=>"#myModal", 'data-offer'=>$offer->id)) }}
                    </p>
                </div>

        </div>
    </div>
    @endforeach
</div>

<div class="row">
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {{ Form::open(array('url' => 'guest/offer')) }}
                {{ Form::hidden('offer_id', '') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Please provide your details</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control','placeholder' => 'Enter your name','required'=>'required')) }}
                            </div>
                            <div class="col-md-6">
                                {{ Form::label('phone_number', 'Phone number') }}
                                {{ Form::number('phone_number',null, array('class' => 'form-control','placeholder' => 'Enter your contact number','required'=>'required', 'min'=>'1')) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop
