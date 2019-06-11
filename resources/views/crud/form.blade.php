<div class="row mb-2 mr-2 pb-1">
    <div class="col">
        <label for="title">Title:</label>
        <span class="text-danger">{{ $errors->has('title') ? '20 Maximum Character Only' : '' }}</span>
        {{ Form::text('title', NULL, ['class'=>'form-control', 'id'=>'title', 'placeholder'=>'Title']) }}
    </div>
</div>
<div class="row mb-2 mr-2 pb-3">
    <div class="col">
        <label for="body">Details:</label>
        {{ Form::textarea('body', NULL, ['class'=>'form-control', 'id' => 'body', 'placeholder' => 'Type here...']) }}
    </div>
</div>
<div class="row mb-2">
    <div class="col">
        {{ Form::button(isset($model)? 'Update' : 'Save', ['class'=>'btn btn-success p-3', 'type'=>'submit']) }}
    </div>
</div>