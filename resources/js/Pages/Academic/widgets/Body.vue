<template>
  <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <main_menu></main_menu>
        </div>
      </div>
      <Footer></Footer>
  </div>
</template>

<script>
    import { defineComponent } from 'vue'

    import Footer from '../../Theme/widgets/Footer.vue'
    import main_menu from '../widgets/menus/main-menu.vue'
    export default defineComponent({
        components: {
            Footer,
            main_menu,
        },

        mounted() {
          
        },
    })
</script>
