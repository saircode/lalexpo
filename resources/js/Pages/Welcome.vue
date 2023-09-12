<script setup>
import navbarMenu from "@/Components/lalexpo/navbarMenu.vue";
import banner from "@/Components/lalexpo/banner.vue";
import localizationVue from "@/Components/lalexpo/localization.vue";

import { Head, Link } from "@inertiajs/vue3";

defineProps({});
</script>

<template>
  <Head title="Welcome" />
  <navbarMenu />
  <banner />
  <localizationVue/>
</template>

<style scoped>
</style>
