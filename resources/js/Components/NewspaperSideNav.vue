<template>
  <div class="relative font-serif bg-[#fdfaf6] min-h-screen">
    <!-- Mobile Toggle Button -->
    <button
      class="fixed top-4 left-4 z-50 bg-neutral-100 p-2 rounded shadow-md md:hidden"
      @click="showMenu = !showMenu"
    >
      <span v-if="!showMenu">☰ Menu</span>
      <span v-else>✖ Close</span>
    </button>

    <!-- Floating Side Nav -->
    <nav
      class="fixed top-0 md:top-1/4 left-0 md:left-6 bg-neutral-100 border border-gray-300 shadow-lg rounded-md p-6 space-y-4 w-64 z-40 transition-all duration-300"
      :class="[
        showMenu ? 'translate-x-0' : '-translate-x-full',
        'md:translate-x-0 md:block'
      ]"
    >
      <h2 class="text-xl font-bold text-gray-700 border-b pb-2 mb-2">🗞️ Save the Date</h2>
      <a v-scroll-to="'#section1'" href="#section1" class="block text-gray-700 hover:text-black hover:underline">📰 Headline</a>
      <a v-scroll-to="'#section2'" href="#section2" class="block text-gray-700 hover:text-black hover:underline">📜 Features</a>
      <a v-scroll-to="'#section3'" href="#section3" class="block text-gray-700 hover:text-black hover:underline">📅 Events</a>

      <button
        class="mt-6 w-full bg-gray-200 hover:bg-gray-300 text-gray-800 text-sm rounded px-3 py-2 text-center"
        @click="scrollToTop"
      >
        ⬆ Go to Top
      </button>
    </nav>

    <!-- Main Content -->
    <div class="md:ml-64 px-6 py-12 space-y-64">
      <section id="section1" class="min-h-screen border-b pb-8">
        <h1 class="text-4xl font-bold mb-4">📰 Headline</h1>
        <p class="text-lg text-gray-800">This layout resembles a classic newspaper with modern Vue features.</p>
      </section>

      <section id="section2" class="min-h-screen border-b pb-8">
        <h1 class="text-4xl font-bold mb-4">📜 Features</h1>
        <p class="text-lg text-gray-800">Feature highlights and messages go here.</p>
      </section>

      <section id="section3" class="min-h-screen border-b pb-8">
        <h1 class="text-4xl font-bold mb-4">📅 Events</h1>
        <p class="text-lg text-gray-800">Show off your important date, like your wedding or celebration.</p>
      </section>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const showMenu = ref(false)

function scrollToTop() {
  window.scrollTo({ top: 0, behavior: 'smooth' })
}
</script>

  <style scoped>
  html {
    scroll-behavior: smooth;
  }
  </style>
