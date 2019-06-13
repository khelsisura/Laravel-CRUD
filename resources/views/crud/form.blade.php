<div class="row mb-2 mr-2 pb-1">
    <div class="col">
        <label for="address">Address:</label>
        <span class="text-danger">{{ $errors->has('address') ? '20 Maximum Character Only' : '' }}</span>
        {{ Form::text('address', NULL, ['class'=>'form-control', 'id'=>'address', 'placeholder'=>'Address']) }}
    </div>
</div>
<div class="row mb-2 mr-2 pb-3">
    <div class="col">
        <label for="city">City:</label>
        {{ Form::text('city', NULL, ['class'=>'form-control', 'id' => 'city', 'placeholder' => 'City']) }}
    </div>
</div>
<div class="row mb-2 mr-2 pb-3">
    <div class="col">
        <label for="state">State:</label>
        {{ Form::text('state', NULL, ['class'=>'form-control', 'id' => 'state', 'placeholder' => 'State']) }}
    </div>
</div>
<div class="row mb-2 mr-2 pb-3">
    <div class="col">
        <label for="zip">Zip:</label>
        <span class="text-danger">{{ $errors->has('zip') ? 'Number Only' : '' }}</span>
        {{ Form::text('zip', NULL, ['class'=>'form-control', 'id' => 'zip', 'placeholder' => 'Zip']) }}
    </div>
</div>
<div class="row mb-2">
    <div class="col">
        {{ Form::button(isset($model)? 'Update' : 'Save', ['class'=>'btn btn-success p-3', 'type'=>'submit']) }}
    </div>
</div>