<template>
  <form ref="rsvpForm" @submit.prevent="rsvp">
    <div v-if="flashsuccess" class="mb-4 border rounded-md shadow-sm border-green-200  bg-green-50 p-2">
      {{ flashsuccess }}
    </div>

    <div v-if="flasherror" class="mb-4 border rounded-md shadow-sm border-red-200 bg-red-50 p-2">
      {{ flasherror }}
    </div>
    <div class="border border-gray-300 p-6 mb-8 rounded-lg">
      <a name="RSVP" />

      <h2 class="newspaper-title text-3xl text-center mb-4">R S V P</h2>




      <div class="flex justify-between space-y-4 ">
        <div class="m-auto w-full h-full ">
          <img src="/storage/image/chairsrsvp.png" alt="chairsrsvp" class="rounded-full shadow-lg" />
        </div>

        <div class="text-center w-full">
          <p style="color:#FE828C;">We hope to see you!</p>
          <p>We have reserved 1 seat for you.</p>
          <p>This favor of a reply is requested on or before</p>
          <p class="text-xl font-bold my-4">June 25, 2025</p>


          <div class="space-y-2">
            <div class="items-center justify-center gap-2">
              <input id="FirstName" v-model="form.FirstName" class="rounded-md" type="text" name="FirstName" placeholder="Your First Name" />
              <div v-if="form.errors.FirstName" class="input-error">
                {{ form.errors.FirstName }}
              </div>
            </div>

            <div class="items-center justify-center gap-2">
              <input id="LastName" v-model="form.LastName" class="rounded-md" type="text" name="LastName" placeholder="Your Last Name" />
              <div v-if="form.errors.LastName" class="input-error">
                {{ form.errors.LastName }}
              </div>
            </div>

            <div class="items-center justify-center gap-2">
              <input id="email" v-model="form.email" class="rounded-md" type="text" name="email" placeholder="Your E-mail address" />
              <div v-if="form.errors.email" class="input-error">
                {{ form.errors.email }}
              </div>
            </div>

            <div class="items-center justify-center gap-2">
              <input id="number" v-model="form.number" class="rounded-md" type="text" name="number" placeholder="Your contact number" />
              <div v-if="form.errors.number" class="input-error">
                {{ form.errors.number }}
              </div>
            </div>

            <div class="flex justify-center gap-2">
              <input id="accepts" v-model="form.Accept" type="radio" name="rsvp" value="1" />
              <label for="accepts">Accepts with pleasure</label>
            </div>
            <div class="flex justify-center gap-2">
              <input id="declines" v-model="form.Accept" type="radio" name="rsvp" value="0" />
              <label for="declines">Declines with regret</label>
            </div>
            <div v-if="form.errors.Accept" class="input-error">
              {{ form.errors.Accept }}
            </div>
            <div class="flex justify-center gap-2">
              <button class="border bg-pink-500 text-slate-100 p-2 rounded-md shadow-md hover:bg-pink-300 hover:text-slate-600" type="submit"> Submit </button>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-4 w-full text-center">
        <p>Kindly fill out the form or contact us to confirm. </p>
        <p>Rachelle - <span class="font-bold mt-2">0917 936 5818</span></p>
      </div>
    </div>
  </form>
</template>


<script setup>
import { useForm, usePage } from '@inertiajs/vue3'
import { watch, ref, computed } from 'vue'

const rsvpForm = ref(null)


const page = usePage()
const flashsuccess = computed(
  ()=> page.props.flash.success,
)

const flasherror = computed(
  ()=> page.props.flash.error,
)


const form = useForm({
  FirstName: '',
  LastName: '',
  email: '',
  number: '',
  Accept: '',
})

const scrollToForm = () => {
  setTimeout(() => {
    rsvpForm.value?.scrollIntoView({
      behavior: 'smooth',
      block: 'start',
    })
  }, 100)
}

const rsvp = () => {
  form.post('/rsvp', {
    onSuccess: () => {
      form.reset()
      scrollToForm()
    },
    onError: () => {
      scrollToForm()
    },
  })
}

// Watch for validation errors as a backup
watch(() => form.errors, (errors) => {
  if (Object.keys(errors).length > 0) {
    scrollToForm()
  }
})
</script>

<style scoped>
.input-error {
  color: #ef4444;
  font-size: 0.875rem;
  margin-top: 0.25rem;
}
</style>