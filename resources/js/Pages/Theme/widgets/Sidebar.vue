<template>
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="https://softwarescares.sparktalks.org" target="_blank">
        <img src="/images/inteli.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Inteli System</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <!--START Schools Packages/Modules/ Menu -->
      <school_modules_menu></school_modules_menu>
    <!--END Schools Packages/Modules/ Menu -->
    <div class="sidenav-footer mx-3 ">
      <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
        <div class="full-background" style="background-image: url('/theme/assets/img/curved-images/white-curved.jpeg')"></div>
        <div class="card-body text-start p-3 w-100">
          <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
            <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
          </div>
          <div class="docs-info">
            <h6 class="text-white up mb-0">Need help?</h6>
            <p class="text-xs font-weight-bold">Please check our docs</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard" target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
          </div>
        </div>
      </div>
      <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
    </div>
  </aside>
</template>

<script>
    import { defineComponent } from 'vue'

    import { Head, Link } from '@inertiajs/inertia-vue3';

    import school_modules_menu from './menus/school-modules-menu.vue'

    export default defineComponent({
        components: {
          Link,
          school_modules_menu
        },

        mounted()
        {

        },
    })
</script>
