<template>
 <div class="row justify-content-around mt-4">
   <div class="col-lg-10 mb-lg-0 mb-4">
     <div class="card z-index-2 bg-gradient-dark border-radius-lg">
      <div class="row justify-content-around">
          <div class="col-11">
             <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
               <li class="nav-item m-5" role="presentation">
                 <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"> <i class="far fa-tools"></i> Generate Timetable </button>
               </li>
               <li class="nav-item m-5" role="presentation">
                 <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-clock"></i> Timetables</button>
               </li>
               <li class="nav-item m-5" role="presentation">
                 <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="far fa-edit"></i>Edit</button>
               </li>
             </ul>
          </div>
      </div>
      <div class="row justify-content-around">
          <div class="col-11">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row justify-content-around">
                    <div class="col-6 ">
                        <Days></Days>
                    </div>
                    <div class="col-6 ">
                        <sessions></Sessions>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-6 ">
                        <Venues></Venues>
                    </div>
                    <div class="col-6 ">
                        <Subjects></Subjects>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
          </div>
          </div>
      </div>
     </div>
   </div>
 </div>
</template>

<script>
    import { defineComponent } from 'vue'

    import Days from '../tables/days.vue'
    import Sessions from '../tables/sessions.vue'
    import Venues from '../tables/venues.vue'
    import Subjects from '../../../Academic/Subjects/widgets/tables/subjects.vue'


    export default defineComponent({
        components: {
            Days,
            Sessions,
            Venues,
            Subjects
        },
    })
</script>

<style scoped>

</style>
