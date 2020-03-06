<template>
	<div class="form-group row" >
		<label for="phone" class="col-sm-2 col-form-label">Номер телефона</label>
		<div class="col-sm-10 input-group ">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fa fa-phone"></i></span>
			</div>
			<input type="text" class="form-control" id="phone" name="phone" 
			autocomplete="off" required
			placeholder="(XXX) XXX-XXX"
			v-model="phonenumber">
		</div>
	</div>
</template>


<script>
export default {
	data() {
		return{
			phonenumber: ''
		}
	},
	watch: {
		phonenumber(){
			this.phonenumber = this.phonenumber.replace(/[^0-9]/g, '')
													.replace(/^(\d{3})?(\d{3})?(\d{3})?/g, '($1) $2-$3')
													.substr(0,13);
		}
	}
}


</script>