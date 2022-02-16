<template>
  <Sidebar></Sidebar>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
      <NavBar></NavBar>
      <Body></Body>
      <settings></settings>
  </main>
</template>

<script>
    import { defineComponent } from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import NavBar from '../../Theme/widgets/NavBar.vue'
    import Body from '../widgets/Body.vue'
    import Sidebar from '../../Theme/widgets/Sidebar.vue'


    export default defineComponent({
        components: {
            Link, 
            NavBar,
            Body,
            Sidebar
        },
    })
</script>
