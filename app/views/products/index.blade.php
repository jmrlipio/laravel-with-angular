@extends('layouts.master')
@section('content')

<div class="row">
	<div class="container">		

		<div ng-controller="productSearchCtrl" class="col-md-12">

			<h1 class="text-center">Products Table</h1><br/>
			 @{{ message }} 
			<div class="panel panel-default">
				{{ Form::open(array('url'=>'products/search', 'class'=>'pull-right', 'id' => 'search','method'=>'GET' )) }}
						    
				    {{ Form::text('keyword', null, array('placeholder' => 'Search product','class' => 'form-control', 'id'=>'query', 'ng-model'=>'searchQuery')) }}
				
				{{ Form::close() }}

				<div class="panel-heading">
					<h3 class="panel-title">Search Products by name</h3>					

				</div>

				<div class="panel-body">
					<ul class="list-group">
						@forelse($products as $data)
							<li class="list-group-item">{{ $data->name }}</li>

							@empty
								<li>No products</li>

						@endforelse
					</ul>
				</div>
				<script>
					myApp.controllers.productSearchCtrl = ['$scope', function($scope){
						$scope.message('Yeah');
						/*$scope.searchQuery = "default";
						$scope.product = [];*/
					}];
				</script>
			</div>				
		</div>		
	</div>
</div>

@stop

@section('page-script')	

<script>

	window.onload = function() {
		$("#query").focus();
	};

	myApp.boot();

</script>
@stop