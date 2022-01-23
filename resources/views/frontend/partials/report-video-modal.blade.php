<!-- Modal -->
<div class="modal fade" id="reportVideoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color:black;" class="modal-title" id="exampleModalLabel">Report Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => ['report.video', $video->id], 'method' => 'post']) !!}
                <div class="form-group">
                    {!! Form::label('reason', 'Reason', ['class' => 'control-label']) !!}
                    {!! Form::select('reason', [
                                'spam' => 'spam',
                                'inappropriate' => 'inappropriate',
                                'other' => 'other',
                                ] , null , ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('comment', 'Comment', ['class' => 'control-label']) !!}
                    {!! Form::text('comment', '', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="modal-footer">
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
