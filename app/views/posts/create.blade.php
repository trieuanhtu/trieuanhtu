@extends('layouts.layout')
@section('content')
{{ Form::open(array('url'=>'posts')) }}
<div class="col-md-6">
    <div class="form-group has-success">
        <label class="control-label" for="inputSuccess">Title</label>
        {{ Form::text('title',Input::old('title'),array('class'=>'form-control','placeholder'=>'Enter...','id'=>'inputSuccess')) }}
    </div>
    <div class="form-group has-success">
        <label class="control-label" for="inputSuccess">Alias</label>
        {{ Form::text('alias',Input::old('alias'),array('class'=>'form-control','placeholder'=>'Enter...','id'=>'inputSuccess')) }}
    </div>
    <div class="form-group has-success">
        <label class="control-label" for="inputSuccess">Username</label>
        {{ Form::text('username',Input::old('username'),array('class'=>'form-control','placeholder'=>'Enter...','id'=>'inputSuccess')) }}
    </div><div class="form-group has-success">
        <label class="control-label" for="inputSuccess">Author</label>
        {{ Form::text('author',Input::old('author'),array('class'=>'form-control','placeholder'=>'Enter...','id'=>'inputSuccess')) }}
    </div><div class="form-group has-success">
        <label class="control-label" for="inputSuccess">Content</label>
        {{ Form::textarea('content',Input::old('content'),array('class'=>'form-control','placeholder'=>'Enter...','id'=>'inputSuccess')) }}
    </div><div class="form-group has-success">
        <label class="control-label" for="inputSuccess">Tags</label>
        {{ Form::textarea('tags',Input::old('tags'),array('class'=>'form-control','placeholder'=>'Enter...','id'=>'inputSuccess')) }}
    </div>
    <div class="form-group has-success">
        <label class="control-label" for="inputSuccess">category</label>
        {{ Form::text('category_id',Input::old('category_id'),array('class'=>'form-control','placeholder'=>'Enter...','id'=>'inputSuccess')) }}
    </div>

</div>
<div class="col-md-6">
    <button type="submit" class="btn btn-primary jm_submit">Submit</button>
</div>
{{ Form::token() }}
{{ Form::close() }}
@stop