<div class="container">
    <div class="d-flex">

<div class="col-lg-4">
    <div class="card">
                <div class="card-header">
                  <h3 class="card-title">My Profile</h3>
                </div>
                <div class="card-body">
                  @if (session('post_info'))
                      <span class="btn btn-success">
                          <strong>{{ session('post_info') }}</strong>
                      </span>
                  @endif
                  <form name="aticle_form" role="form" method="post" action="/admin/article" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="writer_name" class="form-label">Writers Full Name</label>
                          <input type="text" id="writer_name" name="writer_name" class="form-control" placeholder="Enter writers full Name">
                        </div>
                        <div class="input-group">
                          @if ($errors->has('writer_name'))
                              <span class="btn table-danger">
                                  <strong>{{ $errors->first('writer_name') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="form-group">
                          <label for="post_title" class="form-label">Post Title</label>
                          <input type="text" id="post_title" name="post_title" class="form-control" placeholder="Enter post title">
                        </div>
                        <div class="input-group">
                          @if ($errors->has('post_title'))
                              <span class="btn table-danger">
                                  <strong>{{ $errors->first('post_title') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="post_body" class="form-label">Post Body</label>
                      <textarea id="post_body" name="post_body" class="form-control" rows="5" placeholder="Type the content of the post... not more than 255 characters"></textarea>
                    </div>
                    <div class="input-group">
                      @if ($errors->has('post_body'))
                          <span class="btn table-danger">
                              <strong>{{ $errors->first('post_body') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="image" class="form-label">Image</label>
                      <input type="file" name="image" class="form-control" placeholder="select an image file place">
                    </div>
                    <div class="input-group">
                      @if ($errors->has('image'))
                          <span class="btn table-danger">
                              <strong>{{ $errors->first('image') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-footer">
                      <button class="btn btn-primary btn-block">Post Article</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>



            <div class="col-8">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Blog Post</h3>
                  </div>
                  @if (session('post_delete'))
                      <span class="btn btn-success">
                          <strong>{{ session('post_delete') }}</strong>
                      </span>
                  @endif
                  @if(count($blog_post)>0)
                  {{ $blog_post->links() }}
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">Post Id</th>
                          <th>writers Name</th>
                          <th>Post Tile</th>
                          <th>Post Body</th>
                          <th>Created</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($blog_post->all() as $post)
                        <tr>
                          <td><span class="text-muted">{{$post -> post_id}}</span></td>
                          <td>{{$post -> writer_name}}</td>
                          <td>
                            {{str_limit($post->post_title, $limit = 25, $end = '...')}}
                          </td>
                          <td>
                            {{str_limit($post->post_body, $limit = 25, $end = '...')}}
                          </td>
                          <td>
                            {{$post -> created_at}}
                          </td>
                          <td class="text-right">
                            <a href="/admin_blog/blogpost?oluchi={{$post -> id}}" class="btn btn-danger btn-sm">Delete</a>
                          </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                  @endif
                </div>
              </div>

            </div>
          </div>
