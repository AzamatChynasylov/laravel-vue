<template>
    <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          
              <div class="card-header">
                <h3 class="card-title">Уровни</h3>
								<button class="btn btn-success float-right" @click="editMode ? modalEdit() : modalOpen()">
									Добавить Уровень
									<i class="fa fa-user-plus"></i>
									</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 20px">ID</th>
                      <th>Название</th>
											<th>Создан</th>
                      <th style="width: 40px">Modify</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="level in levels" :key="level.id">
                      <td>{{level.id}}</td>
                      <td>{{level.name | upText}}</td>
                      <td>
                        {{level.created_at | myDate}}
                      </td>
                      <td>
												<a href="#" @click="modalEdit(level)"> <i class="fa fa-edit orange"></i></a>
												/
												<a href="#" @click="deleteLevel(level.id)"> <i class="fa fa-trash red"></i></a>
											</td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            
        </div>
      </div>
    </div>
		<!-- Modal -->
		<div class="modal fade" id="addLevelModal" tabindex="-1" role="dialog" aria-labelledby="addLevelModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<form @submit.prevent="editMode ? updateLevel() : level()" @keydown="form.onKeydown($event)">
					<div class="modal-header">
						<h5 class="modal-title" id="addLevelModalLabel">{{ editMode ? 'Обновить Уровень' : 'Создать Уровень'}} </h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						 
						<div class="form-group">
							
							<input v-model="form.name" type="text" name="name"
							placeholder="Name"
								class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" >
							<has-error :form="form" field="name"></has-error>
						</div>
					
				
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Отмена</button>
							<button :disabled="form.busy" type="submit" class="btn btn-primary">{{ editMode ? 'Обновить' : 'Сохранить'}}  </button>
						</div>
						</form>
				</div>
			</div>
		</div>
  </div>
</template>

<script>
export default {
	props:['levels'],
	data() {
			return{
			editMode: false,
			users: {},
			form: new Form({
				id: '',
        name: ''
      })
		}
	},
	methods: {
	  modalOpen(){
			this.editMode = false;
			this.form.reset();
			$('#addLevelModal').modal('show');
		},
		level(){
			
		}
		
	},
  created() {
		
  }
};
</script>
