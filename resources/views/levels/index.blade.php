@extends('layouts.master')

@section('content')
	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				
						<div class="card-header">
							<h3 class="card-title">Уровни</h3>
						<a class="btn btn-success float-right" href="{{route('levels.create')}}">
								Добавить Уровень
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
									@forelse ($levels as $level)
									<tr>
										<td>{{$level->id}}</td>
										<td>{{$level->name}}</td>
										<td>
											{{$level->created_at}}
										</td>
										<td>
											<form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{ route('levels.destroy', $level) }}" method="post">
												
										<a href="{{route('levels.edit',$level)}}" > <i class="fa fa-edit orange"></i></a>
											/
											@method('DELETE')
												@csrf
											
											<button type="submit" class="btn"><i class="fa fa-trash red"></i></button>
											</form>
										</td>
									</tr>
									@empty
									<tr>
										
										<td colspan="4" class="text-center p-5"><p class="text-primary">Нет Уровней</p></td>
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
