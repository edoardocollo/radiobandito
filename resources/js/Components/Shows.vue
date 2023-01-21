<script setup>
import Show from "@/Components/Show.vue";</script>

<template>
    <div class="w-100 mt-3 px-3">
        <Show v-for="show in shows" :show="show"></Show>
    </div>
</template>
<style scoped>

</style>
<script>
export default {
    data() {
        return {
            shows:{}
        }
    },
    mounted() {
        let self = this
        axios.get(route('getShows'))
            .then(function (response) {
                self.shows = response.data
                console.log('shows', self.shows)
            })
            .catch(function (error) {
                console.log(error);
            });
    },
    methods: {
    }
}
</script>

