<script setup>
import ShowListItem from "@/Components/ShowListItem.vue";
</script>

<template>
    <div>

        <!--        List Table-->
        <table class="" style="width: 100%;">
            <thead>
            <tr>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    ID</th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    Title</th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    Description</th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    Status</th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    Img</th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                    Created_At</th>
                <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50" colspan="3">
                    Action</th>
            </tr>
            </thead>

            <tbody class="bg-white">
                <ShowListItem v-for="item in list" :entity="item"></ShowListItem>
            </tbody>
        </table>
    </div>
</template>
<style scoped>
</style>
<script>
export default {
    props:['entity'],
    data() {
        return {
            endpoint: 'getShows',
            list:[]
        }
    },
    created() {
        if (this.entity == 'show'){
            this.endpoint = 'getShows'
        }
        let self = this
        axios.get(route(this.endpoint))
            .then(function (response) {
                self.list = response.data
                console.log(self.list)
            })
            .catch(function (error) {
                console.log(error);
            });

    },
    methods: {
    }

}

</script>

