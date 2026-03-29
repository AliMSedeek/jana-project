@extends('app.app')
@section('content')
<h1 class="text-danger">Add Cake Topping </h1>
<form action="{{route('cakes.store') }}" method="POST">
@csrf
<div class="mb-3">
<label for="name" class="form-label" >Name Cake</label>
<input type="text" class="form-control" id="name" placeholder="Enter Name Cake " name="name"
required>
</div>
<div class="mb-3">
<label for="description" class="form-label">Description</label>
<textarea class="form-control" id="description"
name="description" placeholder="Enter your desired sauce, whether to add fruit or not, cake color, or any other cake toppings."></textarea>
</div>
<div class="mb-3">
<label for="price" class="form-label">Price</label>
<input type="number" step="0.01" class="form-control" id="price" placeholder="Enter Thinking Price Almost"
name="price" required>
</div>
<div class="mb-3">
<label for="quantity" class="form-label">Quantity</label>
<input type="number" class="form-control" id="quantity" placeholder="Enter Need Your Quantity "
name="quantity" required>
</div>
<button type="submit" class="btn btn-danger my-3">Submit</button>
</form>
@endsection
