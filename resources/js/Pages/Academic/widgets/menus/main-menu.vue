<template>
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('/theme/assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6">
        <div class="row justify-content-center">
            <div class="col-3"></div>
            <div class="col-6 text-center">
                <h1 class="display-3 text-white">Academics Menu</h1>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('timetable')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-clock"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Timetable/Schedule</span>
               </li>
             </ul>
            </div>
            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-school"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Manage Class/Stream</span>
               </li>
             </ul>
            </div>
            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-bookmark"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Subjects</span>
               </li>
             </ul>
            </div>

            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-layer-plus"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Term/Semester</span>
               </li>
             </ul>
            </div>

            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-user-friends"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Students</span>
               </li>
             </ul>
            </div>
        </div>
        </span>
      </div>
</template>

<script>
    import { defineComponent } from 'vue'

    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link
        },
    })
</script>
