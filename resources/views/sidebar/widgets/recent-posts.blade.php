@foreach($posts as $rpost)     
    <div class="newsheader-sidebar">
        <h5>Recent News
            <hr class="sidebar">
        </h5>
    </div>    
    <ul class="recentnews">
    <li class="newsitem">
        <a href="/post/{{ $rpost->slug }}"><span>{{ $rpost->title }}</span></a><br>
        {{$rpost->meta_description}} <br>
        <i class="far fa-clock"></i> {{ date('d M Y', strtotime($rpost->created_at)) }} <i class="far fa-user user"></i> {{$rpost->author_id}}    </li>    
    </ul>    
@endforeach