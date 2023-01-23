<script setup>
</script>

<template>
    <div style="padding: 0 80px">
<!--        Form-->
        <form method="POST" action="#">
            <!-- Title -->
            <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                    Title
                </label>

                <input
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    type="text" name="email" placeholder="180" value="" />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <label class="block text-sm font-bold text-gray-700" for="password">
                    Description
                </label>
                <textarea name="description"
                          class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                          rows="4" placeholder="400"></textarea>
            </div>

            <div class="flex items-center justify-start mt-4 gap-x-2">
                <button type="submit"
                        class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                    Save
                </button>
                <button type="submit"
                        class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                    Cancel
                </button>
            </div>
        </form>

    </div>
</template>
<style scoped>
</style>
<script>
export default {
    props:['show'],
    data() {
        return {
        }
    },
    created() {
    },
    methods: {
    }

}

</script>

