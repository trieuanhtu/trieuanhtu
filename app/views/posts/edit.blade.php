@extends('layouts.layout')

@section('content')
<div id="page-wrapper">

    <div class="container-fluid">


        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">

                <h1>Edit {{ $post->title }}</h1>
                <!-- if there are creation errors, they will show here -->
                {{ HTML::ul($errors->all()) }}
                {{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) }}

                <div class="form-group">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('alias', 'Alias') }}
                    {{ Form::text('alias', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('category_id', 'Category Id') }}
                    {{ Form::text('category_id', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('author', 'Author') }}
                    {{ Form::text('author', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('username', 'Username') }}
                    {{ Form::text('username', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('content', 'Content') }}
                    {{ Form::text('content', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('tags', 'Tags') }}
                    {{ Form::text('tags', null, array('class' => 'form-control')) }}
                </div>

                {{ Form::submit('Edit the post!', array('class' => 'btn btn-primary')) }}

                {{ Form::close() }}


            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
@stop