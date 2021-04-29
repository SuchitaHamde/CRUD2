@extends('layouts.app')
@section('content')
<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase italic text-black">
            {{ $product->name }}
        </h1>
    </div>

    <img src="{{ asset('images/'. $product->image_path) }}" class="w-2/1 mb-8 shadow-xl" alt="">
    
    <div class="w-5/6 py-10">
    
     <div class="m-auto">
    

        <h2 class="text-gray-700 text-xl font-bold py-2 ">
            Price: {{ $product->price }}
        </h2>
        <h2 class="uppercase text-gray-700 font-bold text-xl italic py-2">
            Category: {{ $product->category }}
        </h2>
        <p class="text-xl italic font-bold text-gray-700 py-2">
            Product details: {{ $product->details }}
        </p>
       
        
    </div>
         
  
    </div>
</div>

    
@endsection