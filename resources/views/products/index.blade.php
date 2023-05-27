@extends('dashboard')

@section('content')
<!-- Items Starts Here -->
<div class="featured-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading justefiy-content-between">
                    <form action="{{route('products.index')}}" class="row g-2 ">
                        <div class="col-8">
                            <h1 class="pb-2">Our Products</h1>
                        </div>
                        <div class="col-3">
                            <input type="text" name="search" placeholder="search ..." value="{{request('search')}}" class="form-control">
                        </div>
                        <div class="col-1 ">
                            <button type="submit" class="btn-primary form-control ps-0"> <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="featured container no-gutter">
    <div class="container-fluid">
    <div class="row posts">
        <div class="col-md-3 fixed-left">
            <ul>
                <li>
                <a href="{{ route('products.index') }}" class="" data-filter="*">All Categories </a>
                </li>
                @foreach($categories as $category)
                <li>
                <a href="{{ route('products.filter', $category) }}" class="">{{ $category->name }}</a>

                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
        @foreach($products as $product)
        <div id="1" class="item new col-md-4">
            <a href="single-product.html">
                <div class="featured-item">
                    <img src="{{ $product->image_url }}" alt="x">
                    <h4>{{$product->name}}</h4>
                    <h6>{{$product->price}}.0$</h6>
                </div>
            </a>
        </div>
        @endforeach
        </div>
    </div>
    </div>
    </div>
</div>


<!-- Featred Page Ends Here -->

@endSection