@extends('products.layout.app')


@section('head')
@section('title', 'Edit page')

@section('content')

<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 p-2"><i class="bi bi-bricks"></i> BUILD IT</span>
    </div>
  </nav>


 <div class="container">
    <div class="row">
        
<h1>Edit a Product</h1>
<div>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <input class="form-select p-3 m-2 fw-bold" type="text" name="name" placeholder="Name" value="{{ $product->name }}">
        </div>
        <div>
            <input class="form-select p-3 m-2 fw-bold" type="text" name="qty" placeholder="Qty" value="{{ $product->qty }}">
        </div>
        <div>
            <input class="form-select p-3 m-2 fw-bold"  type="number" name="price" placeholder="Price" value="{{ $product->price }}">
        </div>
        <div>
            <input class="form-select p-2 m-2 fw-bold" type="submit" value="Save">
        </div>
    </form>
</div>
    </div>
 </div>
    
@endsection