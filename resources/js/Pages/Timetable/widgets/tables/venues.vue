<template>
      <div class="row justify-content-around my-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Venues</h6>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Venue</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Accessibility</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Location</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="venue in venues" :index="index">
                      <td>
                        {{ venue.venue }}
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p v-for="level in venue.levels" :index="index">{{ level.level }},</p>
                      </td>
                      <td class="align-middle">
                        {{ venue.location }}
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
              venues: {}
            }
        },
        methods: {
          getVenues()
          {
            axios.get('venues')
            .then((response)=>{
              this.venues = response.data;
              //console.log(response.data);
            })
          }
        },

        mounted()
        {
          this.getVenues();
        },
    })
</script>
