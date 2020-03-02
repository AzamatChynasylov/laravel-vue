
<div class="form-group">
	<label for="exampleInputName">Название</label>
	<input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="exampleInputName" placeholder="Введите Название Здесь" name="name" value="{{$service->name ?? old('name')}}" required>
</div>
@error('name')
<small class="text-danger">{{$message}}</small>
@enderror

<div class="form-group">
	<label for="exampleInputprice">Цена</label>
	<input type="number" class="form-control @if($errors->has('price')) is-invalid @endif" id="exampleInputprice" placeholder="Цена" name="price" value="{{$service->price ?? old('price')}}" required>
</div>
@error('price')
<small class="text-danger">{{$message}}</small>
@enderror