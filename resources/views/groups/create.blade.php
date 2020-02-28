@extends('layouts.master')

@section('content')
	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				
						<div class="card-header">
							<h3 class="card-title">Создание Группы</h3>
						
						</div>
						<!-- /.card-header -->
						<form action="{{route('groups.store')}}" method="post">
							@csrf
						<div class="card-body p-0">
						
						
							@include('groups.partials.form')
						
						
						</div>
						<!-- /.card-body -->
						<div class="card-footer text-center">
							<button class="btn btn-primary " type="submit" >Создать Группу</button>
						</div>
						<!-- /.card-footer -->
					</form>
					
			</div>
		</div>
	</div>
	<!-- Modal -->

</div>
@endsection
