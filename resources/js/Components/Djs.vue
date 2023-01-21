<script setup>
    import Dj from "@/Components/Dj.vue";
</script>

<template>
    <div class="w-100 mt-3 px-3">
        <Dj v-for="dj in djs" :dj="dj"></Dj>
    </div>
</template>
<style scoped>

</style>
<script>
export default {
    data() {
        return {
            djs:{}
        }
    },
    mounted() {
        let self = this
        axios.get(route('getDjs'))
            .then(function (response) {
                self.djs = response.data
                console.log('djs', self.djs)
            })
            .catch(function (error) {
                console.log(error);
            });
    },
    methods: {
    }
}
</script>

