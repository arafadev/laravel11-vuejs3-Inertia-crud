<template>
  <div>
    <Frontend>
      <Head title="About Page" />
      <h1>This is {{ title }}</h1>
    </Frontend>
  </div>
</template>

<script setup>
import Frontend from "@/Layouts/FrontendLayout.vue";
import { Head } from "@inertiajs/vue3";
defineProps({
  title: String,
});
</script>