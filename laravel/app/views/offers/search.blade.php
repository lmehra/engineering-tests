@section('content')
@if($errors->first('phone_number'))
<div class="alert alert-warning">
    <p>{{ $errors->first('phone_number') }}</p>
</div>
@endif

@if(Session::get('error'))
<div class="alert alert-warning">
    <p>{{ Session::get('error') }}</p>
</div>
@endif
<div class="row">
    <h4>
        {{ HTML::link('/offers', 'Browse all offers',array('class'=>'btn btn-info'))}}
        <button type="button" data-offer="1" data-target="#myModal" data-toggle="modal" class="btn btn-primary">View your Offers</button>
   </h4>
    <br>
    <h4>Search your offer</h4>
</div>
<div class="row">
    {{ Form::open(array('url' => 'search')) }}

    <div class="form-group">
        {{ Form::label('city', 'Location') }}
        {{ Form::select('city', $cities); }}
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                {{ Form::label('min_price', 'Min Price') }}
                {{ Form::text('min_price', Input::old('description'), array('class' => 'form-control')) }}
            </div>
            <div class="col-md-6">
                {{ Form::label('max_price', 'Max Price') }}
                {{ Form::text('max_price', Input::old('description'), array('class' => 'form-control')) }}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                {{ Form::label('guest', 'Number of Guests') }}
                {{ Form::text('guest', Input::old('guest'), array('class' => 'form-control')) }}
            </div>
            <div class="col-md-6">
                {{ Form::label('date', 'Select Date') }}
                {{ Form::text('date',null, array('class' => 'datepicker form-control','placeholder' => 'Select a Day','data-provide'=>"datepicker")) }}
            </div>
        </div>
    </div>

    <div class="form-group container-fluid">
        <div class="row">
            <div class="row">
                <div class="col-md-2">{{ Form::label('', 'Choose Timing') }}</div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    {{ Form::text('min_time',null , array('class' => 'timepicker form-control')) }}
                </div>

                <div class="col-md-2 center">
                    To
                </div>

                <div class="col-md-5">
                    {{ Form::text('max_time',null , array('class' => 'timepicker form-control')) }}
                </div>
            </div>
        </div>
    </div>

    {{ Form::submit('Search Offers', array('class' => 'btn btn-success')) }}

    {{ Form::close() }}
</div>

<div class="row">
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {{ Form::open(array('url' => '/guest/checkOffer')) }}
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