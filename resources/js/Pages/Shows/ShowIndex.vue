<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import List from "@/Components/List.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Modal from "@/Components/Modal.vue";
</script>
<template>
    <Modal :show="openDialog"></Modal>

    <AdminLayout>
        <PrimaryButton @click="createShow()">Nuovo</PrimaryButton>
        <List></List>

    </AdminLayout>
</template>
<script>
export default {
    data() {
        return {
            openDialog: false
        }
    },
    methods: {
        createShow : function(){
            this.openDialog = true
        }
    }
}

</script>
