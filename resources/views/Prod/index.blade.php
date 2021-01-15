@extends('layouts.master')

@section('url')
<div id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="/home">Home</a></li>
            <li>Product results</li>
        </ul>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="pagination">
        {{ $products->links() }}
    </div>
    <div class="products-wrap">
        <aside id="sidebar">
            <form action="/product/show" method="get">
                <div class="widget">
                    <h3>Products per page:</h3>
                    <fieldset>
                        <input checked type="checkbox" name="paginate" value="8">
                        <label>8</label>
                        <input type="checkbox" name="paginate" value="16">
                        <label>16</label>
                        <input type="checkbox" name="paginate" value="32">
                        <label>32</label>
                    </fieldset>
                </div>
                <div class="widget">
                    <h3>Sort by:</h3>
                    <fieldset>
                        <input type="checkbox" checked name="sort_by" value="created_at">
                        <label>Date</label>
                        <input type="checkbox" name="sort_by" value="price">
                        <label>Price</label>
                    </fieldset>
                </div>
                <div class="widget">
                    <h3>Price range:</h3>
                    <fieldset>
                        <div id="price-range"></div>
                    </fieldset>
                </div>
                <div class="submit">
                    <button type="submit" name="submit" value="submit">Confirm</button>
                </div>
            </form>
        </aside>
        <div id="content">
            <section class="products">
                @if ($products != null )
                    @foreach ($products as $prod)
                        <article>
                            <a href="/product/{{ $prod->id }}"><img src="/storage/{{ $prod->image }}" alt="image" style="width: 194px; height: 210px"></a>
                            <h3><a href="/product/{{ $prod->id }}">{{ $prod->name }}</a></h3>
                            <h4><p>{{ $prod->price }}</p></h4>
                            <a href="/cart/{{ $prod->id }}" class="btn-add">Add to cart</a>
                        </article>
                    @endforeach
                @else
                    <article>
                        <h1>There is no product of in this category</h1>
                    </article>
                @endif
            </section>
        </div>
        <!-- / content -->
    </div>
    <div class="pagination">
        {{ $products->links() }}
    </div>
</div>
@endsection