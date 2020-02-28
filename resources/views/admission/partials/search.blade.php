<form action="{{route('admission-search')}}" method="post">
	@csrf
	<div class="form-group">
		<label for="exampleInputName">ФИО или номер телефона</label>
		<input type="text" class="form-control" id="exampleInputName" placeholder="ФИО" name="name" required>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Начать поиск</button>
	</div>
</form>