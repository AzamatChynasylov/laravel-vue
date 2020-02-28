<div class="row justify-content-center">
	<div class="col-md-6">
		<div class="form-group">
			<label for="exampleInputtitle">Название Группы</label>
			<input type="text" class="form-control 
			@if($errors->has('title')) is-invalid @endif" id="exampleInputtitle" placeholder="Введите Название Здесь"
				name="title" value="{{$level->title ?? old('title')}}" required autocomplete="off">
		</div>
		@error('title')
		<small class="text-danger">{{$message}}</small>
		@enderror


		<div class="" data-select2-id="69">
			<div class="form-group" data-select2-id="68">
				<label>Выберите Время Группы </label>
				<select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17"
					tabindex="-1" aria-hidden="true" name="parent_id">
					<option value="0">-- Выберите Группу из списка --</option>
					@include('groups.partials._groups')
				</select>

			</div>
		</div>
		<div class="" data-select2-id="70">
			<div class="form-group" data-select2-id="79">
				<label>Выберите Уровень Группы</label>
				<select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17"
					tabindex="-1" aria-hidden="true" name="level_id">
					<option value="">-- Выберите Уровень Группы из списка --</option>
					@include('groups.partials.levels')
				</select>

			</div>
		</div>
	</div>
</div>