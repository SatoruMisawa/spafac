@if(!array_key_exists($page,$page_name))
   <h2>新着スペース一覧</h2>
@else
   <h2>{{$page_name[$page]}}新着スペース一覧</h2>
@endif
<div class="pac">
       <ul>
        @foreach($query as $data)
           <li>
             <a href="{{ action('SpaceController@index', $data->facility_id ) }}">
               <img src="{{$data->url}}" class="okan" alt="1">
               <img src="/assets/images/party/party_img01.jpg" alt="party">
               <div class="readme">
               <p>{{$data->name}}</p>
               <p>{{$data->capacity}}人 {{$data->address1}}<span class="s-one"><i>★</i><i>★</i><i>★</i><i>★</i><i>★</i></span>件</p>
               <p>{{$data->about}}</p>
               </div>
             </a>
           </li>
        @endforeach

       </ul>
</div>
	<p class="more_lank"><a href="/search">新着スペース全てをみる</a></p>
