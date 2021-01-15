@extends('layouts.master',[
    'items'=>$items,
    'total'=>$total
])

@section('url')
<div id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="/home">Home</a></li>
            <li>Product page</li>
        </ul>
    </div>
    <!-- / container -->
</div>
@endsection

@section('content')
<!-- / body -->
<div id="body">
    <div class="container">
        <div id="content" class="full">
            <div class="product">
                <div class="image">
                    <img src="/storage/{{ $product->image }}" alt="">
                </div>
                <div class="details">
                    <h1>{{ $product->name }}</h1>
                    <h4>${{ $product->price }}</h4>
                    <div class="entry">
                        <p>{{ $product->description }}</p>
                        <div class="tabs">
                            <div class="nav">
                                <ul>
                                    <li class="active"><a href="#desc">Description</a></li>
                                    <li><a href="#spec">Comment</a></li>
                                </ul>
                            </div>
                            <div class="tab-content active" id="desc">
                                <p>{{ $product->description }}</p>
                            </div>
                            <div class="tab-content" id="spec">
                                <div class="add-comment">
                                    <a href="" id="reply"></a>
                                    <form method="POST" action="/comment">
                                        @csrf
                                        <div class="reply-form">
                                            <input type="text" name="body" class="form-control" />
                                            <input type="hidden" name="product_id" value="{{ $product->id }}" />
                                            <input type="hidden" name="parent_id" value="" />
                                        </div>
                                        <div class="reply-form">
                                            <input type="submit" class="comment-btn" value="Comment" />
                                        </div>
                                    </form>
                                </div>
                                @include('Prod.comment', [
                                    'comments'=>$product->comments,
                                    'product_id'=>$product->id
                                ])
                            </div>
                        </div>
                    </div>
                    <div class="actions">
                        <label>Quantity:</label>
                        <select><option>1</option></select>
                        <a href="/cart/{{$product->id}}" class="btn-grey">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- / content -->
    </div>
    <!-- / container -->
</div>
<!-- / body -->

@endsection