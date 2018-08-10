                    </div>
                    <div class="row">
                      <div class="table-responsive-md" style="    padding-right: 0;"><br>
                      <table class="table table-bordered" style="background-color: #1d4242;">
                      <thead id="tc_thead">
                        <tr>
                          <th>Diskusi</th>
                          {{-- <th>Komentar</th> --}}
                          <th>Views</th>
                          <th>Dibuat</th>
                        </tr>
                      </thead>
                        <tbody style="background: #f9f9f9;">

                          @foreach($forums as $forum)
                          <tr> 
                            <td>

                              <div class="forum_title">
                                <h4><a href="{{route('forumslug', $forum->slug)}}">{{str_limit($forum->title, 40)}}</a></h4>
                                  <p>{!!str_limit($forum->description, 30)!!}</p>
                                @foreach($forum->tags as $tag)
                                  <a href="#" class="badge badge-success tag_label">{{$tag->name}}</a>
                                @endforeach
                                @if(empty($forum->image))
                                @else
                                  <div class="badge badge-success tag_label_image"><i class="fa fa-image"></i></div>
                                @endif
                              </div>

                            </td>
                            {{-- <td  style="text-align: center">{{$forum->comments_count}}</td> --}}
                            <td  style="text-align: center">{{$forum->Views->count()}}</td>
                            <td>

                              <div class="forum_by">
                                <small style="margin-bottom: 0; color: #666">{{ date('j F Y', strtotime($forum->created_at)) }}
                                by <a href="#">{{ $forum->user['name'] }}</a>
                                {{-- by <a href="#">{{$forum->user->name}}</a> --}}

                              </div>
                            </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                 <!-- pagination -->
                      <div class="row justify-content-center">
                      {!! $forums->links() !!}
                      </div>
                      </div>
                    </div>