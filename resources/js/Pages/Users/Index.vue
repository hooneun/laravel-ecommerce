<template>
  <div v-for="(user, index) in users" :key="index">
    {{ user.name }}
  </div>
</template>

<script>
export default {
  props: {
    users: Array,
  },
};
</script>
