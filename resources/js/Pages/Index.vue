<template>
  <div class="container mx-auto px-4 py-8 max-w-4xl relative  font-serif">
    <Navigation />
    <!-- Newspaper Header -->
    <header class="text-center mb-8">
      <div class="grid grid-cols-12 text-center items-center mb-2">
        <div class="col-span-2 "><img class="rounded-full border w-full h-full m-auto" src="/storage/image/JR_Notext.png" alt="JR" /></div>
        <div class="col-span-10"><h1 class="newspaper-title text-[25px] md:text-[65px]">In God's Perfect Time</h1></div>
      </div>

      <div class="items-center text-sm text-gray-600 border-t border-b border-gray-400 py-2">
        <div class="flex justify-between">
          <div>KASAL NG TAON</div>
          <div>
            IKA 25 NG HULYO, 2025, 8:00AM
          </div>
        </div>

        <div>
          Counting down to
          <strong>
            forever!
            <p>
              {{ time.years }} years,
              {{ time.months }} months,
              {{ time.days }} days,
              {{ time.hours }} hours,
              {{ time.minutes }} minutes,
              {{ time.seconds }} seconds
            </p>
          </strong>
        </div>
      </div>
    </header>

    <!-- Main Headline -->
    <div class="text-center">
      <div class="grid md:grid-cols-3">
        <h2 class="newspaper-title-2 text-5xl mb-4 md:text-right">Jayson</h2>
        <h2 class="newspaper-title-2 text-3xl mb-4">&amp;</h2>
        <h2 class="newspaper-title-2 text-5xl mb-4 md:text-left">Rachelle</h2>
      </div>

      <h3 class="newspaper-text text-xl mb-2">IKAKASAL ULIT!</h3>
      <div class="newspaper-text text-3xl font-bold md:mb-7 border-y-4 border-slate-600 font-stretch-expanded">INAANYAYAHAN KA NAMIN!</div>
    </div>

    <!-- Main Content -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
      <!-- Photo Section -->
      <div
        ref="imageRef"
        class="relative text-center mt-1"
        :class="[
          'transition-all duration-3000 ease-in-out transform',
          isVisible ? 'opacity-100 scale-100' : 'opacity-0 scale-95'
        ]"
      >
        <img class="h-full w-full max-w-md mx-auto rounded-lg bottom-0" src="/storage/image/RJImage1.png" alt="Jayson and Rachelle" />
      </div>

      <!-- Details Section -->
      <div class="space-y-6">
        <div class="text-center mb-6">
          <p class="text-lg italic">GOD HAS MADE EVERYTHING BEAUTIFUL IN ITS TIME.</p>
          <p class="text-md newspaper-title">Ecclesiastes 3:11</p>
        </div>

        <div class="space-y-4">
          <div class="flex items-center space-x-4">
            <svg class="size-[50px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div class="relative flex flex-between mb-5">
              <div>
                <h4 class="font-semibold">DATE AND TIME</h4>

                <p>JULY 25, 2025 - 8:00 AM</p>
              </div>

              <div
                class="text-sm absolute transform translate-x-40 md:translate-x-60 rotate-[30deg] bg-yellow-200 text-pink-700 md:font-bold px-2 py-1 rounded-md shadow-md border border-yellow-300 cursor-pointer hover:border-yellow-500 hover:bg-yellow-300"
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
              <p class="text-sm text-slate-600">Jose Laurel St, San Miguel, Manila, 1005 Metro Manila</p>
            </div>
          </div>

          <div class="flex items-center space-x-4 mb-5">
            <img class="size-[50px]" src="/storage/image/cheers.png" alt="RECEPTION" />
            <div>
              <h4 class="font-semibold"><a href="#reception">RECEPTION</a></h4>
              <p>STALLA SUITES</p>
              <p class="text-sm text-slate-600">1008 Quezon Ave, Diliman, Quezon City, 1003 Metro Manila</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Message Section -->
    <div class="border-t border-gray-400 pt-8 mb-12">
      <h3 class="text-2xl font-bold text-center mb-4">MENSAHE PARA SA AMING PAMILYA AT MGA KAIBIGAN</h3>
      <p class="text-center text-lg leading-relaxed">
        With full hearts and joyful spirits, we invite you to share in the celebration of our love. Your precence, love, and support mean more to us than words can express. Salamat at parte ka ng 18 years na relasyon namin na ito. Sa pagharap namin sa Dambana gusto namin isa ka sa saksi ng aming walang hangganang pagmamahalan kaya inaanyayahan namin ikaw na MAKISALO, MAKIBAHAGI, AT MAKISAYA sa araw ng aming kasal.
      </p>
    </div>
    


    <a name="gabay" />
    <!-- Wedding Entourage Section -->
    <div class=" border-gray-400 mt-12 pt-8 ">
      <div class="text-center mb-8 border-y-4 py-4 border-black">
        <h1 class="newspaper-title text-4xl">Gabay</h1>
      </div>



      <!-- Parents Section -->
      <div class="mb-12">
        <h2 class="text-2xl font-bold text-center mb-4">MGA MAHAL NAMING MAGULANG</h2>
        <div class="space-y-1 text-center md:text-left md:flex md:justify-between px-11">
          <div class="text-left text-sm md:text-md mb-3">
            <p>SIXTO BAGADIONG</p>
            <p>THERESA BAGADIONG</p>
          </div>
          <div class="text-left text-sm md:text-md mb-3">
            <p>REYNALDO DIZON</p>
            <p>PURITA DIZON</p>
          </div>
        </div>
      </div>

      <!-- Primary Sponsors Section -->
      <div class="mb-8">
        <h2 class="text-2xl font-bold text-center mb-4">MGA GABAY SA AMING BUHAY</h2>
        <div class="space-y-1  md:flex md:justify-between px-8">
          <div class="text-left text-sm md:text-md">
            <div class="text-md font-semibold mb-2">Ninong</div>
            <p>ENGR. JUNE ROMERO CORPUZ</p>
            <p>ENGR. LAWRENCE BAGADIONG</p>
            <p>FIDEL DIAZ</p>
            <p>VENER BAGADIONG</p>
            <p>ENGR. EDGARDO SIGUA</p>
            <p>RAFAEL DIZON</p>
            <p>JOSE PEDRO PENAFLOR</p>
            <p>RICARDO RAMISCAL</p>
            <p>NORBERTO CERCADO</p>
            <p>ALEJANDRO NAVA</p>
          </div>

          <div class="text-left text-sm md:text-md">
            <div class="text-md font-semibold mb-2">Ninang</div>
            <p>IMELDA SALVACION - CORPUZ</p>
            <p>ABIGAIL DYANNE GOYENA</p>
            <p>ENGR. CARMELITA ROMERO DIAZ</p>
            <p>MARY GRACE BAGADIONG</p>
            <p>EDITHA DIZON</p>
            <p>EUSEBIA GAMUELA</p>
            <p>FRANCIA PENAFLOR</p>
            <p>REBECCA PALMA</p>
            <p>GAUDENCIA TEODOSIO</p>
            <p>JOANNE NAVA</p>
          </div>
        </div>
      </div>

      <!-- Secondary Sponsors Section -->
      <div class="mb-8">
        <h2 class="text-1xl font-bold text-center mb-4">ANG MGA ANAK NAMIN ANG SILANG TAGAPAG INGAT NG SAGISAG NG AMING PAGMAMAHALAN, PANANAMPALATAYA AT KASAGANAHAN. SILA DIN ANG MAGBIBIGAY TANGLAW SA AMING BAGONG LANDAS, MAGBIBIGAY SUKLOB SA AMING PAGIGING-ISA AT MAGBIBIGKIS NG TALI NG KATIWASAYAN</h2>
        <div class="text-left md:text-center text-sm md:text-md mb-3 ">
          <p>PRINCESS JAYCHELLE BAGADIONG</p>
          <p>PRINCE EZIO BAGADIONG</p>
        </div>
      </div>
    </div>
    <a name="location" />
    <!-- Wedding Details Section -->
    <div class="mt-12 pt-8 mb-12 ">
      <div class="text-center mb-8 border-y-4 py-4 border-black">
        <h1 class="newspaper-title text-4xl">Mga Detalye</h1>
      </div>

      <div class="gap-8">
        <!-- Left Column -->
        <div class=" mb-12">
          <!-- Map Section -->
          <div class="mb-8">
            <h2 class="text-2xl font-bold text-center mb-4">Lokasyon</h2>
            <a name="ceremony" />
            <a name="reception" />
            <div class="space-y-6 text-center">
              <div class=" mb-20">
                <div class="grid grid-cols-1 md:grid-cols-2 space-x-10">
                  <div class="p-4 border">
                    <img class="w-full h-full mx-auto mb-2" src="/storage/image/ST_JUDE_THADDEUS_MANILA.png" alt="ST_JUDE_THADDEUS_MANILA" />
                  </div>

                  <iframe class="w-full h-full border" style="margin-left:0px; border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.0341355333035!2d120.9928434751061!3d14.597130785888805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9f093a1e585%3A0x81793418f0aef202!2sNational%20Shrine%20of%20Saint%20Jude%20Thaddeus%20(Archdiocese%20of%20Manila)!5e0!3m2!1sen!2sph!4v1747484930410!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" />
                </div>
                <div>
                  <p class="font-bold">SEREMONYA</p>
                  <p>NATIONAL SHRINE OF ST. JUDE THADDEUS MANILA</p>
                  <p class="text-sm text-slate-600">Jose Laurel St, San Miguel, Manila, 1005 Metro Manila</p>
                </div>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 space-x-10">
                <div class="p-4 border">
                  <img class="w-full h-full mx-auto mb-2" src="/storage/image/STALLA_SUITE.jpg" alt="STALLA_SUITE" />
                </div>

                <iframe class="w-full h-full border" style="margin-left:0px; border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6492.400007064968!2d121.0183273888099!3d14.632985671876392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b743ff1d45cd%3A0x6b408ae166af4c5e!2sStalla%20Suites%20Events%20Place!5e0!3m2!1sen!2sph!4v1747486034158!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" />
              </div>
              <div class="!mt-0">
                <p class="font-bold">RECEPTION</p>
                <p>STALLA SUITES</p>
                <p class="text-sm text-slate-600">1008 Quezon Ave, Diliman, Quezon City, 1003 Metro Manila</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column -->
        <div class="grid grid-cols-2 rounded-lg">
          <!-- Attire Section -->
          <div class="mb-8 col-span-2 md:col-span-1 border rounded-md px-5 mx-2">
            <h2 class="text-2xl font-bold text-center mb-4">KASUOTAN</h2>
            <div class="text-center">
              <div class="flex justify-center gap-8 mb-4">
                <img src="/storage/image/dress.png" alt="Dress" class="w-16 h-16 rotate-[-30deg]" />
                <img src="/storage/image/suit.png" alt="Suit" class="w-16 h-16" />
                <img src="/storage/image/pants.png" alt="Pants" class="w-16 h-16 rotate-[30deg]" />
              </div>


              <div class="mb-3">
                <strong>Sa mga Ninong</strong>
                <p>Pantalon, Coat, and Tie</p>
              </div>

              <div class="mb-3">
                <strong>Sa mga Ninang</strong>
                <p>Pormal na Bestidang Mahaba</p>
              </div>

              <div class="mb-3">
                <strong>Sa mga Bisita</strong>
                <p>Sapat na ang iyong presensya sa aming kasal. Ikaw na ang bahalang mag isip ng iyong susuotin. (Dress to Impress)</p>
              </div>

              

              <div class="mb-3">
                <strong class="newspaper-title-2 mb-4 text-lg">Kulay</strong>
                <div class="mb-3 grid grid-cols-12 gap-1">
                  <div class="text-xs col-span-3 rounded-full p-2" style="background-color:#B2AC88;">Sage Green</div>

                  <div class="text-xs col-span-3 rounded-full p-2" style="background-color:#C1E1C1;">Light Green</div>

                  <div class="text-xs col-span-3 rounded-full p-2" style="background-color:#F4C2C2;">Blush Pink</div>

                  <div class="text-xs col-span-3 rounded-full p-2" style="background-color:#d58a94;">Dusty Pink</div>
                </div>

                <img src="/storage/image/pallets.jpg" alt="Pallette" class="rounded-lg" />
              </div>
            </div>
          </div>

          <!-- Gift Guide Section -->
          <div class="mb-8 col-span-2 md:col-span-1 border rounded-md px-5">
            <div class="mb-8">
              <h2 class="text-2xl font-bold text-center mb-2">REGALO</h2>
              <p class="text-center leading-relaxed">
                Sa dami ng biyayang ibinigay sa amin ng Diyos, wala na kaming mahihiling pa. Ang inyong presensya at dasal ay sapat na para sa amin. Pero kung nais n'yong magbigay ng kaunting regalo, mas mainam po sana kung ito'y salapi. Malaking pasasalamat po ang aming ipinaabot.
              </p>
            </div>

            <div class="mb-8">
              <h2 class="text-2xl font-bold text-center mb-2">TUGON</h2>
              <p class="text-center leading-relaxed">
                Ikaw ay mahalaga sa araw na ito kaya't sana ay ika'y makisaya. Bawal ang eat and run. Minsan lang ito kaya ibigay mo na sa amin ang araw na ito.
              </p>
            </div>

            <div class="mb-3">
              <h2 class="text-2xl font-bold text-center mb-2">PAALALA</h2>
              <p class="text-center leading-relaxed">Iwasan magsuot ng kulay itim na kasuotan</p>
            </div>

            <div class="mb-12">
              <p class="newspaper-title-2 text-center">May kaukulang Gantimpala sa mananalong</p>
              <p class="text-center text-sm "><em>"BEST OOTD"</em></p>
            </div>


            <div class="mb-2">
              <div class="flex justify-center ">
                <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </div>

              <div class="text-sm md:text-md text-center">
                <p class="semibold">NAKIKIUSAP KAMI NA GAMITIN NIYO PO ANG AMING HASTAG PARA MATULUNGAN NIYONG MADOKYUMENTO ANG AMING ESPESYAL NA ARAW!</p>
              </div>
              <div class="mb-2">
                <div class="border border-gray-300 p-2 text-center">
                  <a class="text-indigo-700" href="https://www.facebook.com/hashtag/CHELLElebrationofJAYnuineLove">#CHELLElebrationofJAYnuineLove</a>
                </div>
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
          <div class="col-span-4  mb-3">
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

    <a name="gallery" />
    
    <div class="mb-12 border p-3 rounded-md">
      <h1 class="newspaper-title text-4xl text-center">Gallery</h1>
      
      <Gallery />
    </div>



    <a name="rsvp" />

    <div class="mb-5">
      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/49wHubftRzuuq6KbAEcsLt?utm_source=generator" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy" />
    </div>



    <!-- RSVP Section -->
    <RSVP />


    <!-- Footer -->
    <footer class="text-center mt-12 text-sm text-gray-600">
      <p>© 2025 Jayson & Rachelle Wedding</p>
      <div class="w-full m-auto flex items-center justify-center">
        <a href="https://www.facebook.com/Xirb.exe2/" target="_blank" class="flex items-center align-middle">
          <img src="/storage/image/Logo.png" alt="MB" class="size-[25px] align-middle" />
          <strong>Mattbrix Dev</strong>
        </a>
      </div>
    </footer>
  </div>
</template>


<script setup>
import Gallery from '@/Components/Gallery.vue'
import Navigation from '@/Components/Navigation.vue'
import RSVP from '@/Components/RSVP.vue'
//import VueCountdown from '@chenfengyuan/vue-countdown'




//COuntUP
import { ref, onMounted, onBeforeUnmount } from 'vue'
import dayjs from 'dayjs'
import duration from 'dayjs/plugin/duration'
import relativeTime from 'dayjs/plugin/relativeTime'
import utc from 'dayjs/plugin/utc'



//image flip


const isVisible = ref(false)
const imageRef = ref(null)

onMounted(() => {
  const observer = new IntersectionObserver(
    ([entry]) => {
      if (entry.isIntersecting) {
        isVisible.value = true
      }
    },
    {
      threshold: 0.3,
    },
  )

  if (imageRef.value) {
    observer.observe(imageRef.value)
  }
})

//countup

dayjs.extend(duration)
dayjs.extend(relativeTime)
dayjs.extend(utc)

const targetDate = dayjs('2025-07-25T09:00:00') // Your base date

const time = ref({
  years: 0,
  months: 0,
  days: 0,
  hours: 0,
  minutes: 0,
  seconds: 0,
})

let interval = null

function updateTime() {
  const now = dayjs()
  let years = now.diff(targetDate, 'year')
  const dateAfterYears = targetDate.add(years, 'year')

  let months = now.diff(dateAfterYears, 'month')
  const dateAfterMonths = dateAfterYears.add(months, 'month')

  let days = now.diff(dateAfterMonths, 'day')
  const dateAfterDays = dateAfterMonths.add(days, 'day')

  let hours = now.diff(dateAfterDays, 'hour')
  const dateAfterHours = dateAfterDays.add(hours, 'hour')

  let minutes = now.diff(dateAfterHours, 'minute')
  const dateAfterMinutes = dateAfterHours.add(minutes, 'minute')

  let seconds = now.diff(dateAfterMinutes, 'second')

  time.value = { years, months, days, hours, minutes, seconds }
}

onMounted(() => {
  updateTime()
  interval = setInterval(updateTime, 1000)
})

onBeforeUnmount(() => {
  clearInterval(interval)
})
</script>

