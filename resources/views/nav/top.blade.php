<div class="top-header">
    <div class="container">
        <span class="trend">TREND NEWS</span>
        <div class="trend-news">
            @foreach($posts as $post)
            <div class="overflow">
                <a href="#"><strong>{{$post->created_at->toFormattedDateString()}} |</strong> {{$post->title}}</a>
            </div>
            @endforeach
        </div>
        <ul class="list-inline pull-right hidden-sm hidden-xs">
            <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
            <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
            <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
            <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
            <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
        </ul>
    </div>
</div>