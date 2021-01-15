@foreach ($comments as $cmt)
<div class="comment" @if($cmt->parent_id != null ) style="margin-left:40px;" @endif>
    <strong>{{ $cmt->user->name }}</strong>
    <p>{{ $cmt->body }}</p>
    <a href="" id="reply"></a>
    <form method="POST" action="/comment">
        @csrf
        <div class="reply-form">
            <input type="text" name="body" class="form-control" />
            <input type="hidden" name="product_id" value="{{ $product_id }}" />
            <input type="hidden" name="parent_id" value="{{ $cmt->id }}" />
        </div>
        <div class="reply-form">
            <input type="submit" class="comment-btn" value="Reply" />
        </div>
    </form>
    @include('Prod.comment',['comments' => $cmt->replies])
</div>
@endforeach