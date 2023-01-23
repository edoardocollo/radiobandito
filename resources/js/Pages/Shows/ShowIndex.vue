<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import List from "@/Components/List.vue";
import CreateForm from "@/Components/CreateForm.vue";
</script>

<template>

    <AdminLayout>
        <a>
            <button>create</button>
        </a>
        <List></List>

    </AdminLayout>
</template>
<script>
export default {
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
