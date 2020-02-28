<div class="form-group">
	<label for="exampleInputName">Название</label>
	<input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="exampleInputName" 
	placeholder="Введите Название Маркетплейса" name="name" 
	value="{{$level->name ?? old('name')}}" required>
</div>
@error('name')
<small class="text-danger">{{$message}}</small>
@enderror