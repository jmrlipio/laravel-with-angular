@extends('layouts.master')
@section('content')

<div class="row">
	<div class="container">		

			<div class="col-md-12">

				<h1 class="text-center">Products Table</h1><br/>

			<div class="panel panel-default">
				{{ Form::open(array('url'=>'products/search', 'class'=>'pull-right', 'id' => 'search', )) }}
						    
						    {{ Form::text('search', null, array('placeholder' => 'Search product','class' => 'form-control')) }}
						
						{{ Form::close() }}
				<div class="panel-heading">
					<h3 class="panel-title">Search Products by name</h3>					

				</div>

				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item">YESe</li>
					</ul>
				</div>
			</div>
				<table class="table table-striped table-hover">		

					<tr>
						<th>Product Name</th>
						<th>Category</th>
						<th>Price</th>
					</tr>

				@forelse($products as $data)

					<tr>
						<td>{{{ $data->name }}}</td>
						<td>{{{ $data->category }}}</td>
						<td>{{{ $data->price }}}</td>
					</tr>

				@empty

					<h1>No products</h1>

				@endforelse

				</table>
			</div>		
	</div>
</div>	
@stop