<template>
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('/theme/assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6">
        <div class="row justify-content-center">
            <div class="col-3"></div>
            <div class="col-6 text-center">
                <h1 class="display-1 text-white">Main Menu</h1>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-user-plus"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Admission</span>
               </li>
             </ul>
            </div>
            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-chalkboard-teacher"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Staff</span>
               </li>
             </ul>
            </div>
            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-graduation-cap"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Academics</span>
               </li>
             </ul>
            </div>

            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-book-reader"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Exams</span>
               </li>
             </ul>
            </div>

            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-globe"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Online Classes</span>
               </li>
             </ul>
            </div>

            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-file-powerpoint"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">E-Learning</span>
               </li>
             </ul>
            </div>

            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-book-open"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Library</span>
               </li>
             </ul>
            </div>

            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-microscope"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Research Center</span>
               </li>
             </ul>
            </div>

            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-store"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Inventory</span>
               </li>
             </ul>
            </div>

            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-coins"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Finance</span>
               </li>
             </ul>
            </div>

            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-blender-phone"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Communication</span>
               </li>
             </ul>
            </div>

            <div class="col-2">
             <ul class="nav flex-column">
               <li class="nav-item">
                <Link class="nav-link  active" :href="route('dashboard')">
                  <div class="icon text-white bg-gradient-info shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-user-graduate"></i>
                  </div>
                </Link>
               </li>
               <li class="nav-item">
                 <span class="nav-link-text ms-1 text-white">Careers</span>
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
