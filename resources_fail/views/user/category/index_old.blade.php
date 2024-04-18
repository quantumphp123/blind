@extends('user.layout.layout')

@section('title','Category')
    
@section('content')

<main id="content">

    <section class="pb-11 pb-lg-15 pt-10" style="margin-top: 6%;">
      <div class="container">
        <h2 class="fs-sm-40 mb-9 text-center">{{ strtoupper($category['category_name']) }}</h2>
        <p>
            {{ $category['description'] }}
        </p>
      </div>
      <div class="container mt-5 d-flex flex-wrap p-0">
        @foreach ($category['products'] as $product)
        <div class="w-25 ml-2">
          <a href="{{ route('show-product', $product['id']) }}">
            <img src="{{ url('assets/user/images/'.$product['img_name']) }}" alt="{{ $product['img_name'] }}" style="height: 100%;">
            <p class="mt-1">{{ ucwords($product['name']) }}</p>
          </a>
        </div>
        @endforeach
      </div>
    </section>
  </main>

@endsection
