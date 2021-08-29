@section('content2')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-warning">
                    Comments
                </div>
                <div class="card-body bg-black text-white">
                    {{-- @php(dd($viewPost->comments)) --}}
                    @foreach ($viewPost->comments as $comment)
                    <div class="user mt-2">From: {{$comment->user['name']}}</div>
                    <div class="content mb-2">Answer: {{$comment->content}}</div>
                    <hr style="height: 5px;">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
