<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          
              <div class="card-header">
                <h3 class="card-title">Users</h3>
								<button class="btn btn-success float-right" @click="editMode ? modalEdit() : modalOpen()">
									Add User 
									<i class="fas fa-user-plus"></i>
									</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 20px">ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Type</th>
											<th>Registered At</th>
                      <th style="width: 40px">Modify</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="user in users" :key="user.id">
                      <td>{{user.id}}</td>
                      <td>{{user.name}}</td>
                      <td>{{user.email}}</td>
                      <td>{{user.type | upText}}</td>
                      <td>
                        {{user.created_at | myDate}}
                      </td>
                      <td>
												<a href="#" @click="modalEdit(user)"> <i class="fa fa-edit orange"></i></a>
												/
												<a href="#" @click="deleteUser(user.id)"> <i class="fa fa-trash red"></i></a>
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
		<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<form @submit.prevent="editMode ? updateUser() : user()" @keydown="form.onKeydown($event)">
					<div class="modal-header">
						<h5 class="modal-title" id="addUserModalLabel">{{ editMode ? 'Update User Information' : 'Add User'}} </h5>
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

						<div class="form-group">
							<input v-model="form.email" type="email" name="email" id="email"
							placeholder="Email"
								class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
							<has-error :form="form" field="email"></has-error>
						</div>

							<div class="form-group">
							
							<textarea v-model="form.bio" name="bio" id="bio"
							placeholder="Bio"
								class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
							<has-error :form="form" field="bio"></has-error>
						</div>

							<div class="form-group">
                        <select class="form-control" v-model="form.type"  name="type" id="type"
												:class="{ 'is-invalid': form.errors.has('type') }">
                          <option value="">Select user Role</option>
                          <option value="admin">Admin</option>
                          <option value="user">Standart User</option>
                          <option value="author">Author</option>
                        </select>
												<has-error :form="form" field="type"></has-error>

							</div>
						
						<div class="form-group">
							<input v-model="form.password" type="password" name="password" placeholder="Password"
								class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
							<has-error :form="form" field="password"></has-error>
						</div>

					
				
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							<button :disabled="form.busy" type="submit" class="btn btn-primary">{{ editMode ? 'Update User Information' : 'Add User'}}  </button>
						</div>
						</form>
				</div>
			</div>
		</div>
  </div>
</template>

<script>
export default {
	data() {
		return{
			editMode: false,
			users: {},
			form: new Form({
				id: '',
        name: '',
        email: '',
			 password: '',
			 type: '',
			 bio: '',
			 photo: ''
      })
		}
	},
	methods: {
		updateUser(){
			this.$Progress.start();
      // Submit the form via a POST request
      this.form.put('/api/user/'+this.form.id)
        .then(() => {  
					this.$Progress.finish() ;
					$('#addUserModal').modal('hide');
					Fire.$emit('updateUser');
					toast.fire({
						icon: 'success',
						title: 'User updated successfully'
					})
				
					})
				.catch(error => {
					this.$Progress.fail()
					toast.fire({
						icon: 'error',
						title: 'Something went wrong'
					})
				})
		},
		modalEdit(user){
			this.editMode = true;
			this.form.reset();
			$('#addUserModal').modal('show');
			this.form.fill(user);
		},
		modalOpen(){
			this.editMode = false;
			this.form.reset();
			$('#addUserModal').modal('show');
		},
		deleteUser(id){
			swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
			if (result.value) {
				this.$Progress.start();
				this.form.delete('/api/user/'+id).then(()=>{
					Fire.$emit('updateUser');
					this.$Progress.finish();
					swal.fire(
					'Deleted!',
					'Your file has been deleted.',
					'success'
				)
				}).catch(error=>{
						this.$Progress.fail();
						toast.fire({
						icon: 'error',
						title: 'Something went wrong'
					})
				});
				
			}
		})
		},
		getUsers() {
			axios.get('/api/user').then(({ data }) => { this.users = data.data });
		},
		    user () {
					 this.$Progress.start();
      // Submit the form via a POST request
      this.form.post('/api/user')
        .then(({ data }) => {  
					this.$Progress.finish() ;
					$('#addUserModal').modal('hide');
					Fire.$emit('updateUser');
					toast.fire({
						icon: 'success',
						title: 'User created successfully'
					})
				
					})
				.catch(error => {
					this.$Progress.fail()
					toast.fire({
						icon: 'error',
						title: 'Something went wrong'
					})
				})
		}
		
	},
  created() {
		this.getUsers();
		Fire.$on('updateUser',()=>{
			this.getUsers();
		});
  }
};
</script>
