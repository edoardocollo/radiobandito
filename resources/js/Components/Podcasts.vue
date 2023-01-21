<script setup>
import Podcast from "@/Components/Podcast.vue";
</script>

<template>
    <div class="w-100 mt-3 px-3">
        <Podcast v-for="podcast in podcasts" :podcast="podcast"></Podcast>
    </div>
</template>
<style scoped>

</style>
<script>
export default {
    data() {
        return {
            podcasts:{}
        }
    },
    mounted() {
        let self = this
        axios.get(route('getPodcasts'))
            .then(function (response) {
                self.podcasts = response.data
                console.log(self.podcasts)
            })
            .catch(function (error) {
                console.log(error);
            });
    },
    methods: {
    }
}
</script>

