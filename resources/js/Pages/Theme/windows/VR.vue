<template>
<main class="bg-gray-100 virtual-reality ">
  <NavBar></NavBar>
  <Reality></Reality>
  <settings></settings>
  <Footer></Footer>
</main>
</template>

<script>
    import { defineComponent } from 'vue'
    import Sidebar from '../widgets/Sidebar'
    import Reality from '../widgets/Reality'
    import settings from '../plugins/settings.vue'
    import NavBar from '../widgets/NavBar.vue'
    import Footer from '../widgets/Footer.vue'

    export default defineComponent({
        components:
        {
          Sidebar,
          Reality,
          settings,
          NavBar,
          Footer
        },
    })
</script>
