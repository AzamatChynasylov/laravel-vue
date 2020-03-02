@extends('layouts.master')

@section('content')
	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				
						<div class="card-header">
							<h3 class="card-title">Услуги</h3>
						<a class="btn btn-success float-right" href="{{route('service.create')}}">
								Добавить Услугу
								<i class="fa fa-user-plus"></i>
								</a>
						</div>
						<!-- /.card-header -->
						<div class="card-body p-0">
							<table class="table table-striped">
								<thead>
									<tr>
										<th style="width: 20px">ID</th>
										<th>Название</th>
										<th>Создан</th>
										<th style="width: 40px">Операции</th>
									</tr>
								</thead>
								<tbody>
									@forelse ($services as $service)
									<tr>
										<td>{{$service->id}}</td>
										<td>{{$service->name}}</td>
										<td>
											{{$service->price}}
										</td>
										<td>
											<form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{ route('service.destroy', $service) }}" method="post">
												
										<a href="{{route('service.edit',$service)}}" > <i class="fa fa-edit orange"></i></a>
											/
											@method('DELETE')
												@csrf
											
											<button type="submit" class="btn"><i class="fa fa-trash red"></i></button>
											</form>
										</td>
									</tr>
									@empty
									<tr>
										
										<td colspan="4" class="text-center p-5"><p class="text-primary">Нет Услуг</p></td>
									</tr>
											
									@endforelse
								 
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					
			</div>
		</div>
	</div>
	<!-- Modal -->

</div>
@endsection
