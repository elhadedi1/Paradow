

<ul class="nav nav-tabs myTab1" id="myTab" role="tablist">
    <li class="nav-item col-xs-2 col-sm-2 col-md-4 col-lg-2" style="margin-bottom:0px">
        <a href="{{ route('user.show', ['id' => $user->id]) }}" class="nav-link {{ Request::is('user/' . $user->id) ? 'active' : '' }}">
            TimeLine 
        <span class="badge badge-secondary">{{$count_categories}}</span></a>
    </li>
<br>
    <li class="nav-item col-xs-2 col-sm-2 col-md-4 col-lg-2" style="margin-bottom:0px">
        <a href="{{ route('user.followings', ['id' => $user->id]) }}" class="nav-link {{ Request::is('user/*/followings') ? 'active' : '' }}">
            Followings <span class="badge badge-secondary">{{ $count_followings }}</span>
        </a>
    </li>
<br>
    <li class="nav-item col-xs-2 col-sm-2 col-md-4 col-lg-2" style="margin-bottom:0px">
        <a href="{{ route('user.followers', ['id' => $user->id]) }}" class="nav-link {{ Request::is('user/*/followers') ? 'active' : '' }}">
            Followers 
            <span class="badge badge-secondary">{{ $count_followers }}</span>
        </a>
    </li>
</ul> 