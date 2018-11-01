<template>
    <div class="w-full border bg-white rounded shadow flex flex-col p-8">
        <h1 class="text-grey-darkest text-2xl font-bold mb-8">Ask a question</h1>
        <textarea v-model="question" class="w-full bg-grey-lighter py-3 px-4 mb-4" :class="{'border border-red': errors.question}" rows="5" placeholder="Tippen Sie die Frage ein" type="text" />

        <p class="-mt-2 mb-4" v-show="errors.question" v-for="error in errors.question" :key="error">{{ error }}</p>

        <div class="w-full flex justify-end">
            <a @click="askNewQuestion" class="py-3 px-4 bg-green-light cursor-pointer text-white hover:text-green-lightest">abschicken</a>
        </div>


    </div>
</template>

<script>
export default {
  data() {
    return {
      question: "",
      errors: { question: "" }
    };
  },
  methods: {
    askNewQuestion() {
      axios
        .post("/threads", {
          question: this.question
        })
        .catch(errors => {
          this.errors = errors.response.data.errors;
        });
    }
  }
};
</script>
