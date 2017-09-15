@extends('master')

@section('content')
	@foreach ($posts as $post)
		<div class="post">
		    <figure>
		        <div class="img-overlay"></div>
		        <img src="images/posts/post-1.jpg" class="img-responsive">
		    </figure>
		    <div class="post-content">
		        <ul class="list-inline list-unstyled side-meta hidden-xs">
		            <li>AUTHOR <a href="#">Auther Deo</a></li>
		            <li>DATE <a href="#">{{$post->created_at->toFormattedDateString()}}</a></li>
		        </ul>
		        <div class="side-content">
		            <a href="/posts/{{$post->id}}" class="overflow post-title">
		                <span class="pull-left sport">Sport</span> {{$post->title}}
		            </a>
		            <p class="hidden-xs">
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
		                <li class="pull-right"><a href="#" class="read-btn">Read More</a></li>
		            </ul>
		        </div>
		    </div>
		</div>
	@endforeach
	<!--Pagination-->
	<nav aria-label="Page navigation" class="text-center">
	    <ul class="pagination pagination-sm">
	        <li class="page-item disabled">
	            <a class="page-link" href="#" tabindex="-1">« OLDER POSTS</a>
	        </li>
	        <li class="page-item active hidden-xs"><a class="page-link" href="#">1</a></li>
	        <li class="page-item hidden-xs"><a class="page-link" href="#">2</a></li>
	        <li class="page-item hidden-xs"><a class="page-link" href="#">3</a></li>
	        <li class="page-item">
	            <a class="page-link" href="#">NEW POSTS »</a>
	        </li>
	    </ul>
	</nav>
@endsection