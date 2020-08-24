
@if(count($users) > 0)
<ul class="list-unstyled">
    @foreach ($users as $user)
    <li class="media">
        <img src="/images/{{$user->photo}}" width="50px" height="50px"  class="post-avatar mr-2 rounded" alt="...">
        <div class="media-body">
            <div>
                {{$user->name}}
            </div>
            <div>
                <p>{!!link_to_route('user.show','View Profile',['id' => $user -> id])!!}</p>
            </div>
            <hr>
        </div>
    </li>
    @endforeach
</ul>
{{$users -> render('pagination::bootstrap-4')}}
@endif 