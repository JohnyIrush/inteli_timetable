<template>
<Sidebar></Sidebar>
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
  <NavBar></NavBar>
  <Billing></Billing>
  <settings></settings>
</main>
</template>

<script>
    import { defineComponent } from 'vue'
    import Sidebar from '../widgets/Sidebar'
    import Billing from '../widgets/Billing'
    import settings from '../plugins/settings.vue'
    import NavBar from '../widgets/NavBar.vue'

    export default defineComponent({
        components:
        {
          Sidebar,
          Billing,
          settings,
          NavBar
        },
    })
</script>
