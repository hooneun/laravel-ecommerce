<template>
  <div>Home</div>
  <form @submit.prevent="store">
    <label for="name">Name:</label>
    <input type="text" v-model="state.form.name" />
    <div v-if="errors.name">{{ errors.name[0] }}</div>
    <label for="email">Email:</label>
    <input type="text" v-model="state.form.email" />
    <div v-if="errors.email">{{ errors.email[0] }}</div>
    <label for="password">Password:</label>
    <input type="text" v-model="state.form.password" />
    <div v-if="errors.password">{{ errors.password[0] }}</div>
    <button type="button" @click="store">Submit</button>
  </form>
</template>

<script>
import { users } from "../../compositions/user";
export default {
  props: { errors: Object },
  setup(props) {
    const { state, store } = users();

    return {
      state,
      store,
    };
  },
};
</script>
