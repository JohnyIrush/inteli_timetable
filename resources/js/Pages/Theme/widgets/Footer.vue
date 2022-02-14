<template>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                
                 {{  new Date().getFullYear() }}
                
                Powered <i class="fa fa-heart"></i> by
                <a href="https://softwarescares.sparktalks.org/" class="font-weight-bold" target="_blank">SoftwaresCares</a>
                for a better Time Management.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://softwarescares.sparktalks.org" class="nav-link text-muted" target="_blank">SoftwaresCares</a>
                </li>
                <li class="nav-item">
                  <a href="https://softwarescares.sparktalks.org/about" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://softwarescares.sparktalks.org/development/" class="nav-link text-muted" target="_blank">Technology</a>
                </li>
                <li class="nav-item">
                  <a href="https://softwarescares.sparktalks.org" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
</template>

<script>
    import { defineComponent } from 'vue'


    export default defineComponent({
        components: {

        },
    })
</script>
