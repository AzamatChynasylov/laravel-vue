@extends('layouts.master')

@section('content')
	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				
						<div class="card-header">
							<h3 class="card-title">Новый Студент</h3>
						</div>
						<!-- /.card-header -->
						<form action="">
						<div class="card-body p-5">
						@include('admission.partials.form')

						<calendar-component></calendar-component>

						</div>

						<div class="card-footer ">
							<div class="row justify-content-center">
							<button type="submit" class="btn btn-primary btn-lg">Создать</button>

								
							</div>
						</div>
					</form>
						<!-- /.card-body -->
					
			</div>
		</div>
	</div>
	<!-- Modal -->

</div>
@endsection
