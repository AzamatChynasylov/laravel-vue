@extends('layouts.master')

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Обновление Уровня</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
			<form action="{{route('service.update',$service)}}" method="POST" >
				@csrf
				@method('PUT')
					<div class="card-body">
						@include('service.partials.form')
					</div>
					<!-- /.card-body -->
			
					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Обновить</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection