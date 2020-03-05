<template>
    <div class="">
        <div class="form-group row">
            <label for="start_date" class="col-sm-2 col-form-label"
                >Начало обучения</label
            >
            <div class="col-sm-10 input-group ">
                <div class="input-group-prepend">
                    <span class="input-group-text"
                        ><i class="fa fa-envelope"></i
                    ></span>
                </div>
               <date-picker   v-model="first_date" 
							 :format="format" 
							 :disabled-date="disableWeekends"
							 :input-attr="input_attr2" 
							 	input-class="form-class"></date-picker > 
            </div>
        </div>
				
				 <div class="form-group row">
            <label for="count_lesson" class="col-sm-2 col-form-label"
                >Количество уроков</label
            >
            <div class="col-sm-4 input-group ">
                <div class="input-group-prepend">
                    <span class="input-group-text"
                        ><i class="fa fa-envelope"></i
                    ></span>
                </div>
                <input
                    type="number"
                    id="count_lesson"
                    class="form-control"
                    v-model="count_date"
                    required
										name="count_date"
										v-on:input="countLesson"
                />
								
            </div>
        </div>



        <div class="form-group row">
            <label for="end_date" class="col-sm-2 col-form-label"
                >Конец обучения</label
            >
            <div class="col-sm-10 input-group ">
                <div class="input-group-prepend">
                    <span class="input-group-text"
                        ><i class="fa fa-envelope"></i
                    ></span>
                </div>
                <date-picker  v-model="last_date" 
								:format="format" 
								:disabled-date="disableWeekends" 
								:input-attr="input_attr" 
								input-class="form-class"></date-picker > 
            </div>
        </div>
				
    </div>
</template>

<script>
import DatePicker from 'vue2-datepicker';
	import 'vue2-datepicker/index.css';
	import 'vue2-datepicker/locale/ru';
export default {
	 components: {
    DatePicker
  },
    data() {
        return {
						first_date: null,
						last_date: new Date(2019, 7, 1),
						count_date: null,
						format: 'D-MM-YYYY',
						input_attr2: {
							name: 'first_date',
						
						},
						input_attr: {
							name: 'last_date',
						
						},
						
        };
    },
    created() {
        this.getEvents();
    },
    methods: {
				countLesson(){
					this.last_date = moment(this.first_date).add(this.count, 'days').format('MMMM Do YYYY').toDate();
					console.log(this.last_date);
					//this.last_date =  moment(first_date).format('MMMM Do YYYY');
					//this.last_date =  moment(this.first_date, "YYYY-MM-DD").add(5, 'days');
					//this.last_date = moment(this.first_date);
				},
				disableWeekends (date) {
			const day = new Date(date).getDay()
      return day === 0
    },
				
        addNewEvent() {},
        showEvent(arg) {},
        updateEvent() {},
        deleteEvent() {},
        getEvents() {},
        resetForm() {}
    },
    watch: {}
};
</script>

<style lang="css">

</style>
