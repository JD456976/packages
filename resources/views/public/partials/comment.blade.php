<div class="col-lg-12">
    <div class="pm-inner">
        <div class="gen-more-like">
            <h5 class="gen-more-title">Comments</h5>
            <div class="row text-center">
                <div class="col-lg-8">
                    @foreach ($comments as $comment)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">{{ $comment->user->username }} Said:</h6>
                                <p class="card-text">{{ $comment->text }}</p>
                                <div class="card-footer">
                                    <p class="card-text">{{ $comment->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @guest
                        <div class="row">
                            <div class="col-lg-12 mb-5">
                                <h4>You must be logged in to comment.</h4>
                            </div>
                        </div>

                    @endguest
                    @auth
                        <div>
                            {!! Form::open(['route' => ['comment', $video->id], 'method' => 'post', 'id' => 'pms_login', 'name' => 'pms_login']) !!}
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible mb-2" role="alert">
                                    <div class="d-flex align-items-center">
                                        <span>{{ session('status') }}</span>
                                    </div>
                                </div>
                            @endif
                            <h4>Leave a Comment</h4>
                            <p class="login-password">
                            {!! Form::textarea('comment', '',['class' => 'input', 'width' => '300']) !!}
                            @error('comment')
                            <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                <div class="d-flex align-items-center">
                                    <span>{{$message}}</span>
                                </div>
                            </div>
                            @enderror
                            </p>
                            <p class="login-password">



                            </p>
                            <p class="login-submit">
                                {!! Form::submit('Submit', ['class' => 'button button-primary']) !!}
                            </p>
                            {!! Form::close() !!}
                        </div>
                    @endauth
                </div>
            </div>
        </div>

    </div>


</div>
