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
							 	input-class="form-control"></date-picker > 
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
								input-class="form-control"
								:get-classes="getClasses"></date-picker > 
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
						last_date: null,//new Date(2019, 7, 1)
						count_date: null,
						format: 'D-MM-YYYY',
						input_attr2: {
							name: 'first_date',
						
						},
						input_attr: {
							name: 'last_date',
						
						},
						highlighted: []
						
        };
    },
    created() {
        this.getEvents();
    },
    methods: {
				countLesson(){
					this.highlighted= [];
					let d = moment(this.first_date).format('d');
					
					let count = (this.count_date-1) * 2;
	
				
				let fd = moment(this.first_date).add(count, 'days').diff(moment(this.first_date), 'days');
				let date = moment(this.first_date);
				let days = 0;
			
				while (fd > 0) {
						date = date.add(1, 'days');
						// decrease "days" only if it's a weekday.
						if (date.isoWeekday() == 7) {
							days += 1;
						}
						fd -= 1;
					}
				
				let weekend = moment(this.first_date).add(count+days, 'days');

				if(weekend.isoWeekday() == 7)
				{
					days+=1;
				}


					// console.log('first day ' + this.first_date);
					// console.log('last day ' + moment(this.first_date).add(count, 'days'));
					// console.log('beetween days ' + fd);
					// console.log('weekends ' + days);
					// console.log('counts day ' + count);


				//	console.log(moment(this.first_date).format('d') );
				let addD=count+days;
					let cd = this.last_date = moment(this.first_date).add((addD), 'days').format('d');
					
					if(d==2 || d==4 || d==6)
					{
						
						
						if (cd%2 == 0)
						{
							this.last_date = new Date( moment(this.first_date).add((addD), 'days'));
							
							
						}else{
							addD+=1;
							this.last_date = new Date( moment(this.first_date).add((count+days+1), 'days'));
						}
						date = moment(this.first_date);
						this.highlighted.push(this.first_date);
							while (addD > 0) {
								date = date.add(1, 'days');
								// decrease "days" only if it's a weekday.
								if (date.isoWeekday() == 7 || date.format('d')%2!=0) {
									
								}else
								{
										this.highlighted.push(new Date(date));
								}
							
								addD-= 1;
							}
						//	console.log('rte ' + date);
							// this.highlighted.push(this.first_date);
							// this.highlighted.push(this.last_date);
					}

					else{
						if (cd%2 != 0)
						{
							this.last_date = new Date( moment(this.first_date).add((addD), 'days'));
						}else{
							this.last_date = new Date( moment(this.first_date).add((addD+1), 'days'));
						}
						date = moment(this.first_date);
						this.highlighted.push(this.first_date);
							while (addD > 0) {
								date = date.add(1, 'days');
								// decrease "days" only if it's a weekday.
								if (date.isoWeekday() == 7 || date.format('d')%2==0) {
									
								}else
								{
										this.highlighted.push(new Date(date));
								}
							
								addD-= 1;
							}
					}
			//	console.log('high  '+ this.highlighted);
				},
				disableWeekends (date) {
			const day = new Date(date).getDay()
      return day === 0
		},
		 getClasses(date) {
       if (this.highlighted.find(v => v.getTime() === date.getTime())) {  return  'highlight' }
       return ''   
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
.highlight {
	color: #fff;
	font-weight: bold;
	height: 25px;
  width: 25px;
  background-color: #3490dc;
  border-radius: 50%;
}
</style>
