<div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Welcome to Aster Motors Blog
              </h1>
            </div>
            <div class="row row-cards row-deck">
              @if(count($post)>0)
                    @foreach($post->all() as $post)

              <div class="col-sm-6 col-xl-8">
                <div class="card">
                  <a href="/blog/view_post?post={{$post -> post_id}}"><img class="card-img-top" src="{{Storage::url($post->image_id)}}" ></a>
                  <div class="card-body d-flex flex-column">
                    <h4><a href="/blog/view_post?post={{$post -> post_id}}">{{$post->post_title}}</a></h4>
                    <div class="text-muted">{{$post->post_body}}</div>
                    <div class="d-flex align-items-center pt-5 mt-auto">
                      <div>
                        <a href="#" class="text-default">{{$post -> writer_name}}</a>
                        <small class="d-block text-muted">{{$post -> created_at}}</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                @endforeach
              @endif
              <div class="col-sm-6 col-xl-4">
                <div class="card">
                  <div class="card-body d-flex flex-column">
                    <h4><a href="#">adds here</a></h4>
                    <div class="text-muted"></div>
                    <div class="d-flex align-items-center pt-5 mt-auto">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-8">
                <div class="card">
                  <div class="card-body d-flex flex-column">
                    <h4><a href="#">Comment</a></h4>

                      @if(count($comment)>0)
                            @foreach($comment->all() as $comment)
                              <div class="card-body d-flex flex-column">
                            <div class="text-muted">
                            <h4 class="text-primary">{{$comment->commenter_name}}</h4>
                            <div class="text-muted">{{$comment->comment_body}}</div>
                            </div>
                            </div>
                            @endforeach
                    @endif

                    <div class="d-flex align-items-center pt-5 mt-auto">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-8">
                <div class="card">
                  <div class="card-body d-flex flex-column">
                    <h4><a href="#">Post a Comment</a></h4>
                    <div class="text-muted">
                      @if (session('post_info'))
                          <span class="btn btn-success">
                              <strong>{{ session('post_info') }}</strong>
                          </span>
                      @endif
                <div class="card-body">
                  <form name="comment_form" role="form" method="post" action="/blog/comment" enctype="form-data">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="comm_name" class="form-label">Full Name</label>
                          <input type="text" id="comm_name" name="comm_name" class="form-control" placeholder="Enter Your full name please">
                        </div>
                        <div class="input-group">
                          @if ($errors->has('comm_name'))
                              <span class="btn table-danger">
                                  <strong>{{ $errors->first('comm_name') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="email" class="form-label">Email-Address</label>
                          <input id="email" name="email" class="form-control" placeholder="your-email@domain.com">
                        </div>
                        <div class="input-group">
                          @if ($errors->has('email'))
                              <span class="btn table-danger">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="comment" class="form-label">Comment</label>
                      <textarea id="comment" name="comment" class="form-control" rows="5" placeholder="type your comment"></textarea>
                    </div>
                    <div class="input-group">
                      @if ($errors->has('comment'))
                          <span class="btn table-danger">
                              <strong>{{ $errors->first('comment') }}</strong>
                          </span>
                      @endif
                    </div>

                      <input type="hidden" name="post_id" value="{{$post -> post_id}}">

                    <div class="form-footer">
                      <button class="btn btn-primary btn-block">Post your Comment</button>
                    </div>
                  </form>
                </div>
              </div>
                    </div>
                    <div class="d-flex align-items-center pt-5 mt-auto">
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
