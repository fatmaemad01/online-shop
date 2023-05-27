@extends('dashboard')

@section('content')
<!-- Items Starts Here -->
<div class="featured-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading justefiy-content-between">
                    <form action="{{route('categories.index')}}" class="row g-2 ">
                        <div class="col-8">
                            <h1 class="pb-2">Our Categories</h1>
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

    <div class="row posts">
        @foreach($categories as $category)
        <div id="1" class="item new col-md-4">
            <a href="single-product.html">
                <div class="featured-item">
                    <img src="{{ $category->image_url }}" alt="x">
                    <h4>{{$category->name}}</h4>
                    <h6>{{$category->price}}</h6>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>


<!-- Featred Page Ends Here -->

@endSection