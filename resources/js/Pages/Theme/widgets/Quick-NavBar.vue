<template>
    <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <Link class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " :href="route('dashboard')">
              Inteli System
            </Link>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <Link class="nav-link d-flex align-items-center me-2 active" aria-current="page" :href="route('dashboard')">
                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                    Dashboard
                  </Link>
                </li>
                <li class="nav-item">
                  <Link class="nav-link me-2" :href="route('user-profile')">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                    Profile
                  </Link>
                </li>
                <li class="nav-item">
                  <Link class="nav-link me-2" :href="route('register')">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    Sign Up
                  </Link>
                </li>
                <li class="nav-item">
                  <Link class="nav-link me-2" :href="route('login')">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    Sign In
                  </Link>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="https://softwarescares.sparktalks.org" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">SoftwaresCares</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
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
