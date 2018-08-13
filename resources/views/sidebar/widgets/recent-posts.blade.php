    <div class="newsheader-sidebar">
        <h5>Recent News
            <hr class="sidebar">
        </h5>
    </div>  
@foreach($Api->Posts as $rpost)   
    <ul class="recentnews">
    <li class="newsitem">
        <a href="/news/{{ $rpost->slug }}"><span>{{ $rpost->title }}</span></a><br>
        {{$rpost->meta_description}} <br>
        <i class="far fa-clock"></i> {{ date('dS M Y', strtotime($rpost->created_at)) }} <i class="far fa-user user"></i> {{$rpost->author_id}}    </li>    
    </ul>    
@endforeach