@foreach($posts as $rpost)     
    <div class="newsheader-sidebar">
        <h5>Recent News
            <hr class="sidebar">
        </h5>
    </div>    
    <ul class="recentnews">
    <li class="newsitem">
        <a href="/post/{{ $rpost->slug }}"><span>{{ $rpost->title }}</span></a><br>
        <i class="far fa-clock"></i> {{ $rpost->created_at }}
    </li>    
    </ul>    
@endforeach