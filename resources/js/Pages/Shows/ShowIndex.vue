<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import List from "@/Components/List.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Modal from "@/Components/Modal.vue";
</script>
<template>
    <Modal :show="openDialog" @close="openDialog = false"></Modal>

    <AdminLayout>
        <PrimaryButton @click="createShow()">Nuovo</PrimaryButton>
        <List entity="shows"></List>

    </AdminLayout>
</template>
<script>
export default {
    data() {
        return {
            openDialog: false
        }
    },
    created() {
        console.log('shows',this.shows)
    },
    methods: {
        createShow : function(){
            this.openDialog = true
        }
    }
}

</script>
