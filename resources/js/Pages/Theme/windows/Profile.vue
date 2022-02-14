<template>
  <Sidebar></Sidebar>
  <Details></Details>
</template>

<script>
    import { defineComponent } from 'vue'
    import Sidebar from '../widgets/Sidebar'
    import Details from '../widgets/Details'

    export default defineComponent({
        components:
        {
          Sidebar,
          Details
        },
    })
</script>