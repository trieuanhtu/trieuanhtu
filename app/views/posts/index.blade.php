@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div  class="col-md-4">
            <p>Title</p>
        </div>
        <div  class="col-md-2">
            <p>Author</p>
        </div>
        <div  class="col-md-2">
            <p>Content</p>
        </div>
        <div  class="col-md-2">
            <p>Tags</p>
        </div>
        <div  class="col-md-2">

        </div>
    </div>
    <div class="row">
            <?php if(!empty($posts)){ ?>
                @foreach($posts as $d)
                <div >
                    <div class="col-md-4">
                        <a href="posts/{{ $d->id }}/edit">{{ $d->title }}</a>
                    </div>
                    <div class="col-md-2">
                        <p>{{ $d->author }}</p>
                    </div>
                    <div class="col-md-2">
                        <p>{{ $d->content }}</p>
                    </div>
                    <div class="col-md-2">
                        <p>{{ $d->tags }}</p>
                    </div>
                    <div class="col-md-2">
                        {{Form::model($d, array('route' => array('posts.destroy',$d->id), 'method' => 'DELETE'))}}
                        {{Form::submit('Delete',  array('class' => 'btn btn-danger pull-left', 'onclick' => 'return confirm("Do you want delete this post")'))}}
                        {{Form::close()}}
                    </div>

                </div>
                @endforeach
            <?php } ?>
    </div>


</div>



@stop