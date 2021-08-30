@section('content3')
<div class="row mt-3" id="addReply">
    <div class="col-xl-8 col-md-8 col-sm-10 mt-3 m-auto mb-3">
        <form action="{{url('/post') . '/' . $viewPost->id}}" method="POST">
            @csrf
            <div class="row mb-3 justify-content-center align-item-center">
                <div class="col-xl-7 ml-3 col-md-10 col-sm-10 col-10 p-1">
                    <textarea class="form-control" id="commentInput" name="content" placeholder="Comment"></textarea>
                </div>
                <div class="col-xl-2 col-md-2 col-sm-2 col-2 p-1">
                    <button type="submit" class="btn btn-primary w-120 h-100" style="margin-left: 60px" id="">Submit</button>
                </div>
                <a href="{{ route ('list-post') }}" style="width: 45.5rem"  name="next-page" class="btn btn-primary text-white mt-3">Go to post Page</a>
            </div>
        </form>
    </div>
</div>
@endsection
