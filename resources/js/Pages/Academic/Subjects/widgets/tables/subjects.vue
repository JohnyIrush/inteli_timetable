<template>
      <div class="row justify-content-around my-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Subjects</h6>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subject</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Department</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subject Teacher</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Standard</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="subject in subjects" :index="index">
                      <td>
                        {{ subject.subject }}
                      </td>
                      <td class="align-middle">
                        <p v-for="department in subject.department" :index="index">{{ department.department }},</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                         <p v-for="teacher in subject.teachers" :index="index">{{ teacher.teacher }},</p>
                      </td>
                      <td class="align-middle">
                        <p v-for="level in subject.levels" :index="index">{{ level.level }},</p>
                      </td>
                      <td class="align-middle">
                       <div class="col-lg-6 col-5 my-auto text-end">
                         <div class="dropdown float-lg-end pe-4">
                           <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                             <i class="fa fa-ellipsis-h text-secondary"></i>
                           </a>
                           <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                             <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                             <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                             <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                           </ul>
                         </div>
                       </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</template>

<script>
    import { defineComponent } from 'vue'


    export default defineComponent({
        components: {

        },
        data() {
            return {
              subjects: {}
            }
        },
        methods: {
          getSubjects()
          {
            axios.get('subjects')
            .then((response)=>{
              this.subjects = response.data;
              //console.log(response.data);
            })
          }
        },

        mounted() {
          this.getSubjects();
        },
    })
</script>
