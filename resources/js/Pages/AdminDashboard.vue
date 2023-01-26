<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import List from "@/Components/List.vue";
import CreateForm from "@/Components/CreateForm.vue";
</script>

<template>

    <AdminLayout :errors="errors">

    </AdminLayout>
</template>
<script>
export default {
    props:['errors'],
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
