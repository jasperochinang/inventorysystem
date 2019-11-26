@extends('layouts.master')
@section('content')

<div class="container" id="app">
	
		<form method="POST" action="/equipments/store">
		@csrf
		<span class="display-5" >Inventory</span>
		  <div class="form-group">
		    <br>
		    <input type="text" class="form-control" name='name'  placeholder="Name">
		    <br>
		    <input type="text" class="form-control" name='quantity'  placeholder="Quantity">
		    
		    <br>
		    <select class="custom-select custom-select-lg mb-3" name ="category"> 
		    	@foreach ($equipments_category as $equipments_category)
		    	<option class="option"  value='{{ $equipments_category->name }} '>
		    		{{ $equipments_category->name }}</option>
		    	@endforeach
		    </select>
		   <br>
		  </div>
		  <br><br>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
</div>
@endsection
@section('scripts')
	<script type="text/javascript">
		var vm = new Vue({
			el:"#app",
			data:{
				quantity:"",

			},
		})
</script>
@endsection