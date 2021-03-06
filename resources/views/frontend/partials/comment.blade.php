<div class="container mt-5 mb-5">
    <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-md-7">
            <div class="card">
                @guest()
                    <h5 class="text-center pt-4" style="color: black">You must be logged in to comment</h5>
                @endguest
                @auth()
                    <div class="align-items-center p-3 form-color">
                        {!! Form::open(['route' => ['comment', $video->id], 'method' => 'post']) !!}
                        <div class="form-group">
                            @error('comment')
                            <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <div class="d-flex align-items-center">
                                    <i class="bx bx-error"></i>
                                    <span>{{$message}}</span>
                                </div>
                            </div>
                            @enderror
                            {!! Form::text('comment', old('comment'), ['class' => 'form-control', 'placeholder' => 'Add Your Comment']) !!}
                            {!! Form::submit('Add Comment', ['class' => 'btn btn-primary mt-2']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                @endauth
                <div class="mt-2">
                    @foreach($comments as $comment)
                        <div class="d-flex flex-row p-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row align-items-center">
                                        <a href="{{ route('user.show', $comment->user_id) }}"><h6 style="color:black;" class="mr-2">{{ $comment->user->username }}</h6></a>

                                    </div>
                                    <small>{{ $comment->created_at->diffForHumans() }}
                                        <a href="" data-toggle="modal" data-target="#reportCommentModal"><i class="fa fa-exclamation-triangle"></i></a></small>
                                </div>
                                <p style="color:black;" class="text-justify comment-text mb-0 border-bottom">
                                    {{ $comment->comment }}
                                </p>
                            </div>
                        </div>
                        @include('frontend.partials.report-comment-modal')
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
