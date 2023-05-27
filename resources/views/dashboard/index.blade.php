@extends('layouts.dashboard')

@section('title', 'Dashboard')
@section('content')



<div class="container p-3">
    <div class="row">
    @foreach($categories as $category)
      <div class="col-md-3">
        <div class="category-card">
          <img src="{{$category->image_url}}" alt="Category 1" width="200" height="200">
          <h4>{{$category->name}}</h4>
        </div>
      </div>
      @endforeach
    </div>
  </div>


@endSection('content')