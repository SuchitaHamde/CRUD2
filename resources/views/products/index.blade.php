@extends('layouts.app')
@section('content')
<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase italic text-black">
            Products
        </h1>
    </div>
    <div class="pt-10">
        <a href="products/create" class="italic text-blue-500 block font-bold text-3xl ">
            Add Product
        </a>

    </div> 
    
    <div class="w-5/6 py-10">
     @foreach ( $products as $product)
     <div class="m-auto">
         <div class="float-right">
             <a href="products/{{ $product->id }}/edit"
                class="bg-green-600 block
                uppercase font-bold text-xl p-3 text-white">
                    Edit
            </a>
        

         
        <form action="/products/{{ $product->id }}" class="pt-5" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="bg-red-600 block
            uppercase font-bold text-xl p-3  text-white">
                Delete
            </button>
        </form>
        <a href="products/{{ $product->id }}"
            class="bg-green-600 block
            uppercase font-bold text-xl p-3 text-white">
                Read
        </a>
    </div>
        <span class="uppercase text-blue-500 font-bold text-5xl italic">
             {{ $product->name }}
        </span>

        <h2 class="text-gray-700 text-xl font-bold py-2 ">
            Price: {{ $product->price }}
        </h2>
        <h2 class="uppercase text-gray-700 font-bold text-xl italic py-2">
            Category: {{ $product->category }}
        </h2>
        <p class="text-xl italic font-bold text-gray-700 py-2">
            Product details: {{ $product->details }}
        </p>
        <hr class="mt-4 mb-10 ">
    </div>
         
     @endforeach
    </div>
</div>

    
@endsection