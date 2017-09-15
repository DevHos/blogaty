@extends('posts.single')

@section('content')

<!-- ======= Single ======= -->

<div class="post main-post">
    <figure>
        <div class="img-overlay"></div>
        <img src="../images/posts/post-1.jpg" class="img-responsive">
    </figure>
    <div class="post-content">
        <ul class="list-inline list-unstyled side-meta hidden-xs">
            <li>AUTHOR <a href="#">Auther Deo</a></li>
            <li>DATE <a href="#">{{$post->created_at->toFormattedDateString()}}</a></li>
        </ul>
        <div class="side-content">
            <a href="#" class="overflow post-title">
                <span class="pull-left sport">Sport</span> {{$post->title}}
            </a>
            <p>
                {{$post->body}}
            </p>
            <ul class="list-unstyled list-inline post-meta">
                <li>Like : <a href="#">{{$post->likes}}</a></li>
                <li>Comment : <a href="#">234</a></li>
                <br class="visible-xs">
                <li class="post-share">Share :
                    <ul class="list-unstyled list-inline">
                        <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                    </ul>
                </li>
                <li class="pull-right"><a href="#" class="read-btn hash-tag">#Healthy, #Sport</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="post next-prev-post text-center">
	@if($previous)
    	<a href="{{ URL::to( 'posts/' . $previous->id ) }}">« {{ $previous->title }}</a>
    @endif
    <span>|</span>
    @if($next)
    	<a href="{{ URL::to( 'posts/' . $next->id ) }}">{{ $next->title }} »</a>
    @endif
</div>
<div class="post author-info">
    <a class="pull-left" href="#">
        <img class="media-object" src="../images/single-post/avatar-1.jpg" alt="" style="width: 70px;height: 70px">
    </a>
    <div class="media-body">
        <a href="#"><span class="fa fa-user"></span>Hanan Hamdy</a>
        <p>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
        </p>
        <a href="#" class="single-post-date hidden-xs">UI DESIGNER</a>
    </div>
</div>
<div class="post comments">
    <h4>Comments<span class="color-main">({{$post->comments->count()}})</span></h4>
    @foreach ($post->comments as $comment)
    <div class="media">
        <a class="media-left" href="#">
            <img class="media-object" src="../images/single-post/avatar-1.jpg" alt="" style="width: 70px;height: 70px">
        </a>
        <div class="media-body">
            <div class="date-loc">
                <a href="#"><span class="fa fa-user"></span>{{$comment->author_name}}</a>
            </div>
            <p>
                {{$comment->body}}
            </p>
            <div class="date-loc">
                <a href="#" class="color-main">Reply</a>
            </div>
            <a href="#" class="single-post-date">{{$comment->created_at->diffForHumans()}}</a>
        </div>
    </div>
    @endforeach
</div>
<div class="post comment-form text-left">
    <h4>Leave a comment</h4>
    <form action="/posts/{{$post->id}}/comments" method="post">
    	{{csrf_field()}}
	    <div class="row contact-form">
	    	@if(Auth::guest())
	        <div class="col-sm-6">
	            <span class="input input--jiro">
	                <input class="input__field input__field--jiro" name="author_name" type="text" id="name"/>
	                <label class="input__label input__label--jiro" for="name">
	                    <span class="input__label-content input__label-content--jiro">Name</span>
	                </label>
	            </span>
	        </div>
	        <div class="col-sm-6">
	            <span class="input input--jiro">
	                <input class="input__field input__field--jiro" name="author_email" type="email" id="email"/>
	                <label class="input__label input__label--jiro" for="email">
	                    <span class="input__label-content input__label-content--jiro">Email</span>
	                </label>
	            </span>
	        </div>
	        @endif
	        <div class="col-sm-12">
	            <span class="input textarea input--jiro">
	                <textarea rows="4" cols="50" name="body" class="input__field input__field--jiro" type="text" id="message"></textarea>
	                <label class="input__label input__label--jiro" for="message">
	                    <span class="input__label-content input__label-content--jiro">
	                        Comment Conent
	                    </span>
	                </label>
	            </span>
	        </div>
	        <div class="col-sm-12">
	            <button type="submit" class="btn">Submit</button>
	        </div>
	    </div>
	    <br>
	    @include ('layouts.errors')
    </form>
    
</div>

@endsection