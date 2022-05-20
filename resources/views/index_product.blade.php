<x-layout_product>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-md-6">
						<h3>quan ly san pham</h3>
					</div>
					<div class="col-md-6">
						<a href="{{route('products.create')}}" class="btn btn-primary"></a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>id</td>
							<td>id</td>
							<td>id</td>
							<td>id</td>
							<td>id</td>
							<td>id</td>
							<td>id</td>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $pd)
						<tr>
							<td>
								{{$pd->name_product}}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>


</x-layout_product>