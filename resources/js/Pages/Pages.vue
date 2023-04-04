<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Section from "@/Components/Section.vue";
// import AudioPlayer from "@/Components/AudioPlayer.vue";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>

        <div v-if="pageName == 'dashboard'">

<!--            <AudioPlayer></AudioPlayer>-->
            <Section title="Ora In Onda" type="show" color="black"></Section>
            <Section title="Social" type="socials" color="black"></Section>
            <Section title="Podcast" type="podcasts" color="orange"></Section>

        </div>
        <div v-else-if="pageName == 'programmi'">
            <Section :title="pageName" type="shows" color="orange"></Section>
        </div>
        <div v-else-if="pageName == 'djs'">
            <Section :title="pageName" type="djs" color="orange"></Section>
        </div>
        <div v-else>
            <div>
                <h1>{{pageName}}  {{pageId}}</h1>
            </div>
            <div v-html="pageRecord.content">
            </div>
        </div>
<!--        <Player></Player>-->

    </AuthenticatedLayout>
</template>
<script>
export default {
    props:['pageName', 'pageId'],
    data() {
        return {
            pageRecord: []
        }
    },
    mounted() {
        console.log(this.pageName,this.pageId)
        let self = this
        axios.post(route('getPage'),{
            id: this.pageId
        })
            .then(function (response) {
                self.pageRecord = response.data
                console.log("record",self.pageRecord)
            })
            .catch(function (error) {
                console.log(error);
            });

    },
    methods: {
    }
}

</script>
