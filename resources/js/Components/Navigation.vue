<template>
  <nav class="fixed top-0 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-center h-16">
        <div class="flex space-x-8 items-center">
          <a
            v-for="item in navigationItems"
            :key="item.name"
            :href="item.href"
            class="text-gray-700 hover:text-rose-500 px-3 py-2 text-sm font-medium transition-colors duration-200 relative group"
          >
            {{ item.name }}
            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-rose-500 transform scale-x-0 transition-transform duration-200 group-hover:scale-x-100" />
          </a>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
const navigationItems = [
  { name: 'Gabay', href: '#gabay' },
  { name: 'Lokasyon', href: '#location' },
  { name: 'Gallery', href: '#gallery' },
  { name: 'RSVP', href: '#rsvp' },
]
</script>

  <style scoped>
  nav {
    transition: background-color 0.3s ease;
  }
  </style>