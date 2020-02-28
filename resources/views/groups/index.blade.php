@extends('layouts.master')

@section('content')
	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				
						<div class="card-header">
							<h3 class="card-title">Группы</h3>
						<a class="btn btn-success float-right" href="{{route('groups.create')}}">
								Добавить Группу
								<i class="fa fa-user-plus"></i>
								</a>
						</div>
						<!-- /.card-header -->
						<div class="row justify-content-center">
							<div class="col-md-6 ">
								<div class="card-body p-0 ">
									@if (count($groups) > 0)
									<div  data-select2-id="69">
										<div class="form-group" data-select2-id="68">
											<label>Выберите Группу из списка</label>
											<select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
												<option value="">-- Выберите Группу из списка --</option>
													@include('groups.partials._groups')
											</select>
											
										</div>
										<!-- /.form-group -->
										
										<!-- /.form-group -->
									</div>
									@else
									<div >
										<div class="p-5 text-center">
										 
											<h5 class="green"><i class="icon fa fa-check"></i>  Пока Групп нет </h5>
											
											<a  href="{{route('groups.create')}}" class="btn btn-primary mt-5">Создайте Группу</a>
										</div>
									</div>
									@endif
								
								</div>
							</div>
						</div>
						<!-- /.card-body -->
					
			</div>
		</div>
	</div>
	<!-- Modal -->

</div>
@endsection
