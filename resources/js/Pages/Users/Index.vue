<template>
  <div v-for="(user, index) in state.users" :key="index">
    {{ index }} {{ user.name }}
  </div>
</template>

<script>
import { reactive } from "vue";
export default {
  props: ["users", "test"],
  setup(props) {
    console.log(props);
    const state = reactive({
      users: [],
    });

    state.users = props.users;

    return {
      state,
    };
  },
};
</script>
