<template>
  <div>
    <div v-for="user in usersList" :key="user.id">
      <img :src="`storage/uploads/${user.image}`"/>
    </div>
  </div>
</template>

<script>

export default {

    name: 'CardUser',

    props : {
      usersList : Array,
    },

    data () {

      return {

      }

    }

}

</script>

<style>

</style>