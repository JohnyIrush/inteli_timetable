<template>
 <div class="row justify-content-around mt-4">
   <div class="col-lg-12 mb-lg-0 mb-4">
     <div class="card z-index-2 bg-gradient-dark border-radius-lg">
      <div class="row justify-content-around">
          <div class="col-12">
             <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
               <li class="nav-item m-5" role="presentation">
                 <button class="nav-link active" id="generate-tab" data-bs-toggle="tab" data-bs-target="#generate" type="button" role="tab" aria-controls="generate" aria-selected="true"> <i class="fa fa-cog py-2"> </i> Generate Timetable </button>
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
          <div class="col-12">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="generate" role="tabpanel" aria-labelledby="generate-tab">
             <div class="row justify-content-around mt-4">
               <div class="col-lg-12 mb-lg-0 mb-4">
                 <div class="card z-index-2 bg-gradient-dark border-radius-lg">
                  <div class="row">
                      <div class="col-2">
                         <ul class="nav nav-tabs flex-column" id="schedule" role="tablist">
                           <li class="nav-item m-3 bg-gradient-success" role="presentation">
                             <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="true">  Create </button>
                           </li>
                           <li class="nav-item m-3 bg-gradient-success" role="presentation">
                             <button class="nav-link" id="day-tab" data-bs-toggle="tab" data-bs-target="#day" type="button" role="tab" aria-controls="day" aria-selected="true"> Days </button>
                           </li>
                           <li class="nav-item m-3 bg-gradient-success" role="presentation">
                             <button class="nav-link" id="session-tab" data-bs-toggle="tab" data-bs-target="#session" type="button" role="tab" aria-controls="session" aria-selected="false">Sessions</button>
                           </li>
                           <li class="nav-item m-3 bg-gradient-success" role="presentation">
                             <button class="nav-link" id="subject-tab" data-bs-toggle="tab" data-bs-target="#subject" type="button" role="tab" aria-controls="subject" aria-selected="false">Subjects</button>
                           </li>
                           <li class="nav-item m-3 bg-gradient-success" role="presentation">
                             <button class="nav-link" id="venue-tab" data-bs-toggle="tab" data-bs-target="#venue" type="button" role="tab" aria-controls="venue" aria-selected="false">Venues</button>
                           </li>
                           <li class="nav-item m-3 bg-gradient-success" role="presentation">
                             <button class="nav-link" id="teacher-tab" data-bs-toggle="tab" data-bs-target="#teacher" type="button" role="tab" aria-controls="teacher" aria-selected="false">Teachers</button>
                           </li>
                         </ul>
                      </div>
                      <div class="col-10">
                       <div class="tab-content" id="timetableContent">
                         <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                             
                         </div>
                         <div class="tab-pane fade show active" id="day" role="tabpanel" aria-labelledby="day-tab">
                             <Days></Days>
                         </div>
                         <div class="tab-pane fade" id="session" role="tabpanel" aria-labelledby="session-tab">
                           <Sessions></Sessions>
                         </div>
                         <div class="tab-pane fade" id="subject" role="tabpanel" aria-labelledby="subject-tab">
                           <Subjects></Subjects>
                         </div>
                         <div class="tab-pane fade" id="venue" role="tabpanel" aria-labelledby="venue-tab">
                           <Venues></Venues>
                         </div>
                         <div class="tab-pane fade" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
                           <Teachers></Teachers>
                         </div>
                       </div>
                      </div>
                  </div>
                 </div>
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
      <div class="row justify-content-around">
          <Charts></Charts>
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
    import Charts from '../../../Theme/plugins/Charts.vue'
    import Teachers from '../../../Staff/Teachers/widgets/tables/teachers.vue'


    export default defineComponent({
        components: {
            Days,
            Sessions,
            Venues,
            Subjects,
            Charts,
            Teachers
        },
    })
</script>

<style scoped>

</style>
