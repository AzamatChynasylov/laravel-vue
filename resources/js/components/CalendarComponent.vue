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
                <input
                    type="date"
                    id="start_date"
                    class="form-control"
                    v-model="first_date"
                    required
										name="first_date"
                />
            </div>
        </div>
				
				 <div class="form-group row">
            <label for="count_lesson" class="col-sm-2 col-form-label"
                >Количество уроков</label
            >
            <div class="col-sm-10 input-group ">
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
                <input
                    type="date"
                    id="end_date"
                    class="form-control"
                    
                    required
										name="last_date"
										:value="last_date"
                />
            </div>
        </div>
				<datepicker :highlighted="highlighted"></datepicker> 
    </div>
</template>

<script>
import Datepicker from 'vuejs-datepicker';
export default {
	 components: {
    Datepicker
  },
    data() {
        return {
						first_date: "",
						last_date: "",
						count_date:"",
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
				 highlighted: {
          customPredictor: function (date) {
            // highlights every day of a month which is a multiple of 4
            if (date.getDate() % 4 === 0) {
              return true
            }
          }
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
