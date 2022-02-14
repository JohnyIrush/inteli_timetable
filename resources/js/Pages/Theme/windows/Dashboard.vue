<template>
  <Sidebar></Sidebar>
  <Dash></Dash>
</template>

<script>
    import { defineComponent } from 'vue'
    import Sidebar from '../widgets/Sidebar'
    import Dash from '../widgets/Dash'

    export default defineComponent({
        components:
        {
          Sidebar,
          Dash
        },
    })
</script>
