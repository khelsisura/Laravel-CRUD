<div class="row mb-2 mr-2 pb-1">
    <div class="col-6">
        <label for="address">Address:</label>
        <span class="text-danger">{{ $errors->has('address') ? '20 Maximum Character Only' : '' }}</span>
        {{ Form::text('address', NULL, ['class'=>'form-control', 'id'=>'address', 'placeholder'=>'Address']) }}
    </div>
</div>
<div class="row mb-2 mr-2 pb-3">
    <div class="col-6">
        <label for="city">City:</label>
        {{ Form::text('city', NULL, ['class'=>'form-control', 'id' => 'city', 'placeholder' => 'City']) }}
    </div>
</div>
<div class="row mb-2 mr-2 pb-3">
    <div class="col-6">
        <label for="state">State:</label>
        {{ Form::select('state', $countries, NULL, ['class'=>'form-control', 'id' => 'state']) }}
    </div>
    <div class="col-2">
        <label for="zip">Zip Code:</label>
        <span class="text-danger">{{ $errors->has('zip') ? 'No. Only' : '' }}</span>
        {{ Form::text('zip', NULL, ['class'=>'form-control', 'id' => 'zip', 'placeholder' => 'Zip']) }}
    </div>
</div>
<div class="row mb-2">
    <div class="col">
        {{ Form::button(isset($model)? 'Update' : 'Save', ['class'=>'btn btn-success pl-5 pr-5', 'type'=>'submit']) }}
    </div>
</div>