@if(Auth::check())
@if (auth()->user()->is_following($user->id))
                                    <td>
                                        <form action="{{route('user.unfollow', ['id' => $user->id])}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button  class="btn btn-danger" type="submit" id="delete-follow-{{ $user->id }} style="width:200px;height:42px;"">
                                                <i class="fa fa-btn fa-trash"></i>Unfollow
                                            </button>
                                        </form>
                                    </td>
                                @else
                                    <td>
                                        <form action="{{route('user.follow', ['id' => $user->id])}}" method="POST">
                                            {{ csrf_field() }}

                                            <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success" style="width:200px;height:42px;">
                                                <i class="fa fa-btn fa-user"></i>Follow
                                            </button>
                                        </form>
                                    </td>
                                @endif
                                @else
                                
  <td>
                                        <form action="{{route('user.follow', ['id' => $user->id])}}" method="POST">
                                            {{ csrf_field() }}

                                            <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success" style="width:200px;height:42px;" disabled="disabled">
                                                <i class="fa fa-btn fa-user"></i>Follow
                                            </button><br>
                                            <h5 style="color:red;">You must have an account to follow {{$user->name}}. </h5>
                                        </form>
                                    </td>
                                    @endif
                                    
                                
        