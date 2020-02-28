

<div class="form-group row" >
	<label for="last_name" class="col-sm-2 col-form-label">Фамилия студента</label>
	<div class="col-sm-10 input-group ">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-envelope"></i></span>
		</div>
		<input type="text" class="form-control" id="last_name" placeholder="Фамилия студента" name="last_name" autocomplete="off" required>
	</div>
</div>

<div class="form-group row" >
	<label for="first_name" class="col-sm-2 col-form-label">Имя студента</label>
	<div class="col-sm-10 input-group ">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-envelope"></i></span>
		</div>
		<input type="text" class="form-control" id="first_name" placeholder="Имя студента" name="first_name" autocomplete="off" required>
	</div>
</div>

<div class="form-group row" >
	<label for="phone" class="col-sm-2 col-form-label">Номер телефона</label>
	<div class="col-sm-10 input-group ">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-phone"></i></span>
		</div>
		<input type="text" class="form-control" id="phone" placeholder="Имя студента" name="phone" autocomplete="off" required>
	</div>
</div>


<div class="form-group row" >
	<label for="email" class="col-sm-2 col-form-label">Email</label>
	<div class="col-sm-10 input-group ">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-envelope"></i></span>
		</div>
		<input type="email" class="form-control" id="email" placeholder="Email" name="email" autocomplete="off" required>
	</div>
</div>
<div class="form-group row" >
	<label for="extra_information" class="col-sm-2 col-form-label">Доп Информация</label>
	<div class="col-sm-10 input-group ">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-envelope"></i></span>
		</div>
		<textarea class="form-control" rows="3" placeholder="Дополнительная  Информация о студента"></textarea>
	</div>
</div>
<div class="form-group row" >
	<label for="group_id" class="col-sm-2 col-form-label">Группа</label>
	<div class="col-sm-10 input-group ">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-envelope"></i></span>
		</div>
		
				<select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true" required>
					<option value="">-- Выберите Группу из списка --</option>
						@include('admission.partials.groups')
				</select>
				
			
	</div>
</div>

<div class="form-group row" >
	<label for="traffic_id" class="col-sm-2 col-form-label">Где узнали Онас</label>
	<div class="col-sm-10 input-group ">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-envelope"></i></span>
		</div>
		
				<select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true" required>
					@foreach ($traffics as $traffic)

    <option value="{{ $traffic->id}}">
   			{{ $traffic->name}}
    </option>

@endforeach
				</select>
				
			
	</div>
</div>