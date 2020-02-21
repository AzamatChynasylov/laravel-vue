<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9">
				
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username" >{{form.name}}</h3>
                <h5 class="widget-user-desc">{{form.type}}</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" :src="'./img/user-img.jpg'" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          
      </div>
			<div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab" @click="profileSettings()">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane" id="activity">
                    
                  </div>
                  <!-- /.tab-pane -->
                 
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form @submit.prevent="updateUser()" @keydown="form.onKeydown($event)">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text"  v-model="form.name" name="name" class="form-control" 
													id="inputName" placeholder="Name"
													:class="{ 'is-invalid': form.errors.has('name') }" >
													<has-error :form="form" field="name"></has-error>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail"   class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="form.email" name="email" class="form-control" id="inputEmail" 
													placeholder="Email"	:class="{ 'is-invalid': form.errors.has('email') }" >
													<has-error :form="form" field="email"></has-error>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Bio</label>
                        <div class="col-sm-10">
                          <textarea class="form-control"  v-model="form.bio" name="bio" id="inputExperience"
													 placeholder="Experience" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
													 <has-error :form="form" field="bio"></has-error>
                        </div>
                      </div>


												<div class="form-group row">
													<label for="inputExperience" class="col-sm-2 col-form-label">Role</label>
													<div class="col-sm-10">
													<select class="form-control" v-model="form.type"  name="type" id="type"
													:class="{ 'is-invalid': form.errors.has('type') }">
														<option value="">Select user Role</option>
														<option value="admin">Admin</option>
														<option value="user">Standart User</option>
														<option value="author">Author</option>
													</select>

													<has-error :form="form" field="type"></has-error>
														</div>
												</div>
						

											 <div class="form-group">
												<label for="exampleInputFile">File input</label>
												<div class="input-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="exampleInputFile" @change="updatePhoto">
														<label class="custom-file-label" for="exampleInputFile">{{form.photo }}</label>
													</div>
												</div>
											</div>


                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <div class="form-group">
														<input v-model="form.password" type="password" name="password" placeholder="Password"
															class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
														<has-error :form="form" field="password"></has-error>
													</div>
													
													<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  If you not change you password leave empty
                </div>
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Save Change</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
    </div>
  </div>
</template>

<script>
export default {
	data(){
		return{
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
  mounted() {
    
  },
	methods:{
			updatePhoto(e){
				let file = e.target.files[0];
				if(file['size'] < 2111775)
				{
					let reader = new FileReader();
				reader.onloadend = (file) => {
					this.form.photo = reader.result;
				};
				reader.readAsDataURL(file);
				}
				else{
						toast.fire({
						icon: 'error',
						title: 'Size more than 2mb'
					})
				}
				
				
			},
			updateUser(){
			this.$Progress.start();
      // Submit the form via a POST request
      this.form.put('/api/profile')
        .then(() => {  
					this.$Progress.finish() ;
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
		profileSettings(){
				this.$Progress.start();
			 this.form.get('/api/profile')
			 .then(({data})=>{
				 
				 this.form.fill(data);
				 this.$Progress.finish() ;
			 })
			 .catch(error=>{
				 this.$Progress.fail()
			 });
		}
	},
	created(){
		this.profileSettings();
	}
};
</script>
