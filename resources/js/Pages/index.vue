<template>
  <div class="container mx-auto px-4 py-8 max-w-4xl">
    <!-- Newspaper Header -->
    <header class="text-center mb-8">
      <div class="grid grid-cols-12 text-center items-center mb-2">
        <div class="col-span-2 "><img class="rounded-full border w-full h-full m-auto" src="/storage/image/JR_Notext.png" alt="JR" /></div>
        <div class="col-span-10"><h1 class="newspaper-title text-[25px] md:text-[75px]">The Newlywed Times</h1></div>
      </div>

      <div class="items-center text-sm text-gray-600 border-t border-b border-gray-400 py-2">
        <span>WEDDING OF THE YEAR in </span>
        <strong>
          <VueCountdown
            v-slot="{ days, hours, minutes, seconds }"
            :auto-start="true"
            :time="timeUntilTarget"
            @end="onCountdownEnd"
          >
            <span>{{ days }}d {{ hours }}h {{ minutes }}m {{ seconds }}s</span>
          </VueCountdown>
        </strong>
      </div>
    </header>

    <!-- Main Headline -->
    <div class="text-center">
      <div class="grid md:grid-cols-3">
        <h2 class="newspaper-title-2 text-5xl mb-4 md:text-right">Jayson</h2>
        <h2 class="newspaper-title-2 text-5xl mb-4">and</h2>
        <h2 class="newspaper-title-2 text-5xl mb-4 md:text-left">Rachelle</h2>
      </div>

      <h3 class="newspaper-text text-xl mb-2">ARE GETTING MARRIED!</h3>
      <div class="newspaper-text text-3xl font-bold md:mb-7 border-y-4 border-slate-600 font-stretch-expanded">YOU ARE INVITED!</div>
    </div>

    <!-- Main Content -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
      <!-- Photo Section -->
      <div class="relative text-center">
        <img class="h-full w-full max-w-md mx-auto rounded-lg bottom-0" src="/storage/image/RJImage1.png" alt="Jayson and Rachelle" />
      </div>

      <!-- Details Section -->
      <div class="space-y-6">
        <div class="text-center mb-6">
          <p class="text-lg italic">"GOD HAS MADE EVERYTHING BEAUTIFUL IN ITS TIME."</p>
          <p class="text-md">Ecclesiastes 3:11</p>
        </div>

        <div class="space-y-4">
          <div class="flex items-center space-x-4">
            <svg class="size-[50px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div class="relative flex flex-between mb-5">
              <div>
                <h4 class="font-semibold">DATE AND TIME</h4>

                <p>JULY 23, 2025 - 9:00 AM</p>
              </div>

              <div
                class="text-sm absolute transform translate-x-36 md:translate-x-60 rotate-[30deg] bg-yellow-200 text-pink-700 md:font-bold px-2 py-1 rounded-md shadow-md border border-yellow-300 cursor-pointer hover:border-yellow-500 hover:bg-yellow-300"
                style="font-family: 'Comic Sans MS', 'Patrick Hand', cursive;"
              >
                <a href="#RSVP">💌 Save the Date <br />
                  💌 RSVP here </a>
              </div>
            </div>
          </div>

          <div class="flex items-center space-x-4 mb-5">
            <img class="size-[50px]" src="/storage/image/Church.png" alt="Church" />
            <div>
              <h4 class="font-semibold"><a href="#ceremony">CEREMONY</a></h4>
              <p>NATIONAL SHRINE OF ST. JUDE THADDEUS MANILA</p>
              <p class="text-sm">1420 JOSE P. LAUREL ST.</p>
            </div>
          </div>

          <div class="flex items-center space-x-4 mb-5">
            <img class="size-[50px]" src="/storage/image/cheers.png" alt="RECEPTION" />
            <div>
              <h4 class="font-semibold"><a href="#reception">RECEPTION</a></h4>
              <p>STALLA SUITES</p>
              <p class="text-sm">1008 QUEZON AVE.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Message Section -->
    <div class="border-t border-gray-400 pt-8">
      <h3 class="text-2xl font-bold text-center mb-4">MESSAGE TO FAMILY AND FRIENDS</h3>
      <p class="text-center text-lg leading-relaxed">
        We are overjoyed to share this special day with you, as we begin our journey together as husband and wife. Your love and support mean the world to us, and we are grateful to have you by our side. Thank you for being a part of our lives and making today even more unforgettable. We look forward to creating beautiful memories with you in the years to come!
      </p>
    </div>

    <!-- Wedding Entourage Section -->
    <div class="border-t border-gray-400 mt-12 pt-8">
      <div class="text-center">
        <h1 class="newspaper-title text-4xl mb-8">Wedding Entourage</h1>
      </div>

      <!-- Parents Section -->
      <div class="mb-8">
        <h2 class="text-2xl font-bold text-center mb-4">PARENTS OF THE GROOM</h2>
        <div class="text-center space-y-1">
          <p class="text-xl">SIXTO BAGADIONG</p>
          <p class="text-xl">THERESA BAGADIONG</p>
        </div>
      </div>

      <div class="mb-8">
        <h2 class="text-2xl font-bold text-center mb-4">PARENTS OF THE BRIDE</h2>
        <div class="text-center space-y-1">
          <p class="text-xl">REYNALDO DIZON</p>
          <p class="text-xl">PURITA DIZON</p>
        </div>
      </div>

      <!-- Primary Sponsors Section -->
      <div class="mb-8">
        <h2 class="text-2xl font-bold text-center mb-4">PRIMARY SPONSORS</h2>
        <div class="text-center space-y-1">
          <p class="text-lg">ENGR. JUNE ROMERO CORPUZ</p>
          <p class="text-lg">ENGR. LAWRENCE BAGADIONG</p>
          <p class="text-lg">FIDEL DIAZ</p>
          <p class="text-lg">VENER BAGADIONG</p>
          <p class="text-lg">ENGR. EDGARDO SIGUA</p>
          <p class="text-lg">RAFAEL DIZON</p>
          <p class="text-lg">JOSE PEDRO PENAFLOR</p>
          <p class="text-lg">RICARDO RAMISCAL</p>
          <p class="text-lg">NORBERTO CERCADO</p>
          <p class="text-lg">ALEJANDRO NAVA</p>
          <p class="text-lg">IMELDA SALVACION - CORPUZ</p>
          <p class="text-lg">ABIGAIL DYANNE GOYENA - ENCARNACION</p>
          <p class="text-lg">ENGR. CARMELITA ROMERO DIAZ</p>
          <p class="text-lg">MARY GRACE BAGADIONG</p>
          <p class="text-lg">EDITHA DIZON</p>
          <p class="text-lg">EUSEBIA GAMUELA</p>
          <p class="text-lg">FRANCIA PENAFLOR</p>
          <p class="text-lg">REBECCA PALMA</p>
          <p class="text-lg">GAUDENCIA TEODOSIO</p>
          <p class="text-lg">JOANNE NAVA</p>
        </div>
      </div>

      <!-- Secondary Sponsors Section -->
      <div class="mb-8">
        <h2 class="text-2xl font-bold text-center mb-4">SECONDARY SPONSORS</h2>
        <div class="text-center space-y-1">
          <p class="text-lg">PRINCESS JAYCHELLE BAGADIONG</p>
          <p class="text-lg">PRINCE EZIO BAGADIONG</p>
        </div>
      </div>
    </div>

    <!-- Wedding Details Section -->
    <div class="border-t border-gray-400 mt-12 pt-8 mb-12">
      <div class="text-center">
        <h1 class="newspaper-title text-4xl font-bold mb-8">Wedding Details</h1>
      </div>

      <div class="gap-8">
        <!-- Left Column -->
        <div class=" mb-12">
          <!-- Map Section -->
          <div class="mb-8">
            <h2 class="text-2xl font-bold text-center mb-4">Map Direction</h2>
            <a name="ceremony" />
            <a name="reception" />
            <div class="space-y-6 text-center">
              <div class=" mb-20">
                <div class="grid grid-cols-1 md:grid-cols-2 space-x-10">
                  <div class="p-4 border">
                    <img class="w-full h-full mx-auto mb-2 border" src="/storage/image/ST_JUDE_THADDEUS_MANILA.png" alt="ST_JUDE_THADDEUS_MANILA" />
                  </div>

                  <iframe class="md:w-full md:h-full" style="margin-left:0px; border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.0341355333035!2d120.9928434751061!3d14.597130785888805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9f093a1e585%3A0x81793418f0aef202!2sNational%20Shrine%20of%20Saint%20Jude%20Thaddeus%20(Archdiocese%20of%20Manila)!5e0!3m2!1sen!2sph!4v1747484930410!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" />
                </div>
                <div>
                  <p class="font-bold">CEREMONY</p>
                  <p>NATIONAL SHRINE OF ST. JUDE THADDEUS MANILA</p>
                </div>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 space-x-10">
                <div class="p-4 border">
                  <img class="w-full h-full mx-auto mb-2" src="/storage/image/STALLA_SUITE.jpg" alt="STALLA_SUITE" />
                </div>

                <iframe class="w-full h-full border" style="margin-left:0px; border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6492.400007064968!2d121.0183273888099!3d14.632985671876392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b743ff1d45cd%3A0x6b408ae166af4c5e!2sStalla%20Suites%20Events%20Place!5e0!3m2!1sen!2sph!4v1747486034158!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" />
              </div>
              <div>
                <p class="font-bold">RECEPTION</p>
                <p>STALLA SUITES</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column -->
        <div class="border p-5 grid grid-cols-2 rounded-lg">
          <!-- Attire Section -->
          <div class="mb-8 col-span-2 md:col-span-1">
            <h2 class="text-2xl font-bold text-center mb-4">ATTIRE</h2>
            <div class="text-center">
              <div class="flex justify-center gap-8 mb-4">
                <img src="/storage/image/Dress.png" alt="Dress" class="w-16 h-16 rotate-[-30deg]" />
                <img src="/storage/image/suit.png" alt="Suit" class="w-16 h-16" />
                <img src="/storage/image/Pants.png" alt="Pants" class="w-16 h-16 rotate-[30deg]" />
              </div>
              <p class="italic mb-4">We kindly request our guests to wear these colors for our special day:</p>
              <p class="mb-2 font-semibold"> <span style="color:#B2AC88;">Sage Green</span>, <span style="color:#90EE90;">Light Green</span>, <span style="color:#FE828C;">Blush Pink</span>, <span style="color:#d58a94;">Dusty Pink</span></p>
              <p class="text-sm">(Dress to Impress)</p>
            </div>
          </div>

          <!-- Gift Guide Section -->
          <div class="mb-8 col-span-2 md:col-span-1">
            <h2 class="text-2xl font-bold text-center mb-4">GIFT GUIDE</h2>
            <p class="text-center leading-relaxed">
              With all the blessings that God poured out on us,
              we cannot ask for more. Your presence and prayers
              are all we request. But if you desire to bless us, a
              monetary gift is one we suggest. It would be deeply
              appreciated.
            </p>
          </div>

          <!-- Hashtag Section -->
          <div class="mb-8 col-span-2">
            <div class="flex items-center justify-center gap-2">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <p class="text-sm md:text-md">PLEASE USE OUR HASHTAG TO HELP US DOCUMENT OUR SPECIAL DAY!</p>
            </div>
            <div class="mt-2">
              <div class="border border-gray-300 p-2 text-center">
                <a href="https://www.facebook.com/hashtag/MomentsOfJaysonAndRachelle">#MomentsOfJaysonAndRachelle</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Crossword Section -->
    <div class=" mb-12">
      <h2 class="newspaper-title text-2xl text-center mb-4">Wedding Crossword</h2>
      <div class="space-y-4 grid grid-cols-12">
        <div class="col-span-12 md:col-span-4">
          <div class="col-span-4">
            <h3 class="font-bold">ACROSS</h3>
            <ol class="list-decimal list-inside">
              <li>Flowers of the Bride</li>
              <li>When the Groom asked "Will you marry me?"</li>
              <li>Special Night of the Couple</li>
            </ol>
          </div>
          <div>
            <h3 class="font-bold">DOWN</h3>
            <ol class="list-decimal list-inside">
              <li>Where the Program Happens</li>
              <li>Partner of the Groom</li>
              <li>Raise the glasses and drink together</li>
              <li>Promises of the Couple</li>
              <li>Partner of the Bride</li>
            </ol>
          </div>
        </div>


        <div class="col-span-12 md:col-span-8">
          <img src="/storage/image/CW.png" alt="Cross Word" class="border rounded-lg p-3" />
        </div>
      </div>
    </div>

    <!-- RSVP Section -->
    <div class="border border-gray-300 p-6 mb-8 rounded-lg">
      <a name="RSVP" />
      <h2 class="newspaper-title text-3xl text-center mb-4">R S V P</h2>
      <div class="space-y-4 text-center">
        <p>We have reserved _____ seat/s for you.</p>
        <p>This favor of a reply is requested on or before</p>
        <p class="text-xl font-bold my-4">June XX, 2025</p>

        <div class="space-y-2">
          <div class="flex items-center justify-center gap-2">
            <input id="accepts" type="radio" name="rsvp" />
            <label for="accepts">Accepts with pleasure</label>
          </div>
          <div class="flex items-center justify-center gap-2">
            <input id="declines" type="radio" name="rsvp" />
            <label for="declines">Declines with regret</label>
          </div>
        </div>

        <div class="mt-4">
          <p>Please message</p>
          <p>to confirm</p>
          <p class="font-bold mt-2">09XXXXXXXX</p>
          <p>Rachelle</p>
        </div>
      </div>
    </div>



    <!-- Footer -->
    <footer class="text-center mt-12 text-sm text-gray-600">
      <p>© 2025 Jayson & Rachelle Wedding</p>
    </footer>
  </div>
</template>


<script setup>
import MainLayout from '@/Layouts/MainLayout.vue'
import VueCountdown from '@chenfengyuan/vue-countdown'
import { computed } from 'vue'

// 🎯 Set your target date here
const targetDate = new Date('2025-07-23T09:00:00')

// ⏱ Compute the time difference in milliseconds
const timeUntilTarget = computed(() => targetDate.getTime() - Date.now())

// Optional: Action when countdown ends
function onCountdownEnd() {
  alert('WEDDING TIME!')
}


</script>



<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Newlywed Times - Jayson & Rachelle</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <style>

    </style>
</head>
<body class="bg-gray-100">

</body>
</html>-->