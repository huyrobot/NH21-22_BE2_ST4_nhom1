<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>