<script setup>
</script>

<template>
    <div>
        <div class="">

            <div class="md:col-span-1 mt-2 form_head">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Programma</h3>
                    <p class="mt-1 text-sm text-gray-600">Con questo form potrai inserire un nuovo programma</p>
                </div>
            </div>


            <div class="mt-3 md:col-span-2 md:mt-0">
                <form @submit.prevent="form.post('/show/store')" action="#" method="POST">
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">

<!--                            title-->
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="title" class="block text-sm font-medium text-gray-700">Titolo</label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="title" id="title" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="titolo...">
                                    </div>
                                </div>
                                <div v-if="form.errors.title" class="text-red-600">{{form.errors.title}}</div>
                            </div>

<!--                            name-->
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <div class="mt-1">
                                    <textarea id="description" name="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="descrizione...."></textarea>
                                </div>
                                <div v-if="form.errors.description" class="text-red-600">{{form.errors.description}}</div>
                                <p class="mt-2 text-sm text-gray-500">Inserisci qui dentro una descrizione del programma</p>
                            </div>

<!--                            cover-->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Cover photo</label>
                                <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                </div>
                            </div>

<!--                            state-->
                            <div>
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input id="comments" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="comments" class="font-medium text-gray-700">Comments</label>
                                        <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<style scoped>

</style>
<script>
import {useForm} from "@inertiajs/inertia-vue3";

export default {
    setup(){
        const form = useForm({
            title:'',
            content:'',
        })
        return {form}
    },
    data() {
        return {
        }
    },
    mounted() {
    },
    methods: {
    }
}
</script>

