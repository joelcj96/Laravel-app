
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

         
<h1>Create a Product</h1>
<div>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('product.store') }}" method="post">
        @csrf
        @method('post')
       <div class="">
         <input class="form-control p-3 fw-bold mb-2" type="text" name="name" placeholder="Name">
       </div>
       <div>
        <input class="form-select p-3 fw-bold mb-2"  type="text" name="qty" placeholder="Qty">
      </div>
      <div>
        <input class="form-select p-3 fw-bold mb-2"  type="number" name="price" placeholder="Price">
      </div>
      <div>
         <input class="form-select fw-bold"  type="submit" value="Save">
      </div>
    </form>
</div>    

    </div>
 </div>

@endsection