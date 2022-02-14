<template>
  <div class="container-fluid py-4">
      <Tab></Tab>
      <Footer></Footer>
  </div>
</template>

<script>
    import { defineComponent } from 'vue'

    import Footer from '../../Theme/widgets/Footer.vue'
    import main_menu from '../widgets/menus/main-menu.vue'
    import Tab from '../widgets/tabs/Tab.vue'
    export default defineComponent({
        components: {
            Footer,
            main_menu,
            Tab
        },

        mounted() {
          
        },
    })
</script>
