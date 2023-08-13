@extends('products.layout.app')

@section('head')

@section('title', 'Home page')

@section('content')

<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 p-2"><i class="bi bi-bricks"></i> BUILD IT</span>
    </div>
  </nav>

<div class="container">
    <div class="row">
        <h1>Products</h1>

<a class="h3" href="{{ route('create.index') }}">Create a Product</a>

@if (session()->has('success'))
<ul>
<li>
    {{ session('success') }}
</li>
</ul>
@elseif(session()->has('created'))

<ul>
<li>
    {{ session('created') }}
</li>
</ul>

@elseif(session()->has('deleted'))

<ul>
<li>
    {{ session('deleted') }}
</li>
</ul>

@endif


<table  class="table">
    <thead class="table-dark">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
   
    @foreach ($products as $product)
    <tbody>
    <tr>
        <td class="fw-bold">{{ $product->id  }}</td>
        <td>{{ $product->name  }}</td>
        <td class="fw-bold">{{ $product->qty  }}</td>
        <td class="fw-bold">${{ $product->price  }}</td>
        <td>
            <a class="btn btn-light fw-bold " href="{{ route('edit.index', ['product'=>$product]) }}"><i class="bi bi-pen "></i>Edit</a>
        </td>
        <td>
        <form action="{{ route('delete.index',['product'=>$product]) }}" method="post">
            @csrf
            @method('delete')
            <input class="btn btn-outline-danger p-1 fw-bold " type="submit" value="Delete">
        </form>
        </td>
    </tr>
    </tbody>
    @endforeach
</table>
    </div>
</div>
    
@endsection