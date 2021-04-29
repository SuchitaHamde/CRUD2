@extends('layouts.app')
@section('content')
 <div class="m-auto w-4/8 py-24">
     <div class="text-center">
         <h1 class="text-5xl uppercase bold">
            Create Product
         </h1>
     </div>
 </div>
 <div class="flex justify-center pt-10">
     <form action="/products" method="POST" enctype="multipart/form-data">
         @csrf
         

         <div class="block">
           
             <input 
                type="text" 
                name="name"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-500"
                placeholder="Product Name...">

            <input 
                type="text" 
                name="price"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-500"
                placeholder="Product Price...">
            <input 
                type="text" 
                name="category"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-500"
                placeholder="Product Category...">
            <input 
                type="text" 
                name="details"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-500"
                placeholder="Product Details...">
            <input 
                type="file" 
                name="image"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-500"
                >

            <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80
            uppercase font-bold">
                Submit
            </button>

         </div>
     </form>
</div>
@if ($errors->any())
<div class="w-4/8 m-auto text-center">
    @foreach ($errors->all() as $error)
        <li class="text-red-500 list-none">
            {{ $error }}
        </li>
    @endforeach
</div>
 
@endif

    
@endsection