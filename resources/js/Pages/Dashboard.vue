<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import HeaderMobile from "@/Components/HeaderMobile.vue";
import Player from "@/Components/Player.vue";
import Jumbo from "@/Components/Jumbo.vue";
import Section from "@/Components/Section.vue";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
<!--        <template #header>-->
<!--            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>-->
<!--        </template>-->

<!--        <div class="py-12">-->
<!--            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">-->
<!--                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">-->
<!--                    <div class="p-6 text-gray-900">You're logged in!</div>-->
<!--                    <HeaderMobile></HeaderMobile>-->
<!--                    <Jumbo></Jumbo>-->
<!--                    <Section title="Ora In Onda" type="programs" color="black"></Section>-->
<!--                    <Section title="Social" type="socials" color="black"></Section>-->
<!--                    <Section title="Podcast" type="podcasts" color="orange"></Section>-->
<!--                    <Player></Player>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <HeaderMobile></HeaderMobile>
        <Jumbo></Jumbo>
        <Section title="Ora In Onda" type="programs" color="black"></Section>
        <Section title="Social" type="socials" color="black"></Section>
        <Section title="Podcast" type="podcasts" color="orange"></Section>
        <Player></Player>

    </AuthenticatedLayout>
</template>
