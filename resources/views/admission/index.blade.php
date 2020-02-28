@extends('layouts.master')

@section('content')
	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				
						<div class="card-header">
							<h3 class="card-title">Поиск студентов</h3>
							<a class="btn btn-success float-right" href="{{route('admission.create')}}">
								Добавить студента
								<i class="fa fa-user-plus"></i>
								</a>
						</div>
						<!-- /.card-header -->
						<div class="card-body p-5">
							@include('admission.partials.search')
						</div>

						<div class="card-footer">
							@if(isset($students))
								{{$students}}
							@endif
						</div>
						<!-- /.card-body -->
					
			</div>
		</div>
	</div>
	<!-- Modal -->

</div>
@endsection
