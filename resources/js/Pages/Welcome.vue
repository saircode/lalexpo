<script setup>
import navbarMenu from "@/Components/lalexpo/navbarMenu.vue";
import banner from "@/Components/lalexpo/banner.vue";
import localizationVue from "@/Components/lalexpo/localization.vue";
import sponsors from "@/Components/lalexpo/sponsors.vue";
import schedule from "@/Components/lalexpo/schedule.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({});
</script>

<template>
  <Head title="Welcome" />
  <navbarMenu />
  <banner />
  <localizationVue/>
  <sponsors/>
  <schedule/>
</template>

<style scoped>
</style>
