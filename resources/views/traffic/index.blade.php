@extends('layouts.master')

@section('content')
	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				
						<div class="card-header">
							<h3 class="card-title">Трафик реклама</h3>
						<a class="btn btn-success float-right" href="{{route('traffic.create')}}">
								Добавить Маркетплейс
								<i class="fa fa-user-plus"></i>
								</a>
						</div>
						<!-- /.card-header -->
						<div class="card-body p-0">
							<table class="table table-striped">
								<thead>
									<tr class="text-center">
										<th style="width: 50px">ID</th>
										<th>Название</th>
										<th style="width: 50px">Операции</th>
									</tr>
								</thead>
								<tbody>
									@forelse ($traffics as $traffic)
									<tr>
										<td>{{$traffic->id}}</td>
										<td>{{$traffic->name}}</td>
										
										<td>
											<form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{ route('traffic.destroy', $traffic) }}" method="post">
												
										<a href="{{route('traffic.edit',$traffic)}}" > <i class="fa fa-edit orange"></i></a>
											/
											@method('DELETE')
												@csrf
											
											<button type="submit" class="btn"><i class="fa fa-trash red"></i></button>
											</form>
										</td>
									</tr>
									@empty
									<tr>
										
										<td colspan="4" class="text-center p-5"><p class="text-primary">Нет Маркетплейса</p></td>
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
