  
@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Category</th>
					<th scope="col">Quantity</th>
					<th scope="col"> </th>
					<th scope="col"> </th>
				</tr>
			</thead>
			<tbody>
				@foreach($equipments as $equipment)
					<tr>
						<td>{{ $equipment->id }}</td>
						<td>{{ $equipment->name }}</td>
						<td>{{ $equipment->category }}</td>
						<td>{{ $equipment->quantity }}</td>
						<td><a class="btn btn-primary" href="/equipments/{{ $equipment->id }}/edit" data-toggle="modal" data-target="#editModal">Edit</a></td>
						<td><a class="btn btn-primary" href="/equipments/{{ $equipment->id }}/delete">Delete</a></td>

					</tr>
				@endforeach
			</tbody>			
		</table>
			<a class="btn btn-primary" href='/equipments/add' data-toggle="modal" data-target="#addModal">Add Item</a>
	</div>

  
  <div class="modal" id="addModal">
    <div class="modal-dialog">
      <div class="modal-content">
      

        <div class="modal-header">
          <h4 class="modal-title">Add Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
          <form method="POST" action="/equipments/store">
		@csrf
		  <div class="form-group">
		    <input type="text" class="form-control" name='name'  placeholder="Item Name">
		    <br>
		    <select class="custom-select custom-select-lg mb-3" name ="category"> 
		    	@foreach ($equipments_category as $equipments_category)
		    	<option class="option"  value='{{ $equipments_category->name }} '>
		    		{{ $equipments_category->name }}</option>
		    	@endforeach
		    </select>
		    <input type="text" class="form-control" name='quantity' v-model='quantity'  placeholder="Quantity">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
        </div>
        
        
      </div>
    </div>
  </div>

    <div class="modal" id="editModal">
    <div class="modal-dialog">
      <div class="modal-content">
      

        <div class="modal-header">
          <h4 class="modal-title">Edit Inventory</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
    
        <div class="modal-body">
          <form method="POST" action="/equipments/store">
		@csrf
		  <div class="form-group">
		    <input type="text" class="form-control" name='name'  placeholder="Item Name">
		    <br>
		    <select class="custom-select custom-select-lg mb-3" name ="category"> 
		    	
		    </select>
		    <input type="text" class="form-control" name='quantity' v-model='quantity'  placeholder="Quantity">
		  </div>
		  <button type="submit" class="btn btn-primary">Update</button>
		</form>
        </div>
         
    >
        
    </div>
  </div>
@endsection