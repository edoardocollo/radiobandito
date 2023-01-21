<script setup>
import CardProgramma from "@/Components/CardProgramma.vue";
import Social from "@/Components/Social.vue";
import Podcasts from "@/Components/Podcasts.vue";
import Shows from "@/Components/Shows.vue";
import Djs from "@/Components/Djs.vue";
</script>

<template>
    <div class="flex-column center" :style="{'background-color': bgc}">
        <div  v-if="title" class="orange_label mt-3" :style="{'background-color': title_bgc_color, 'color': title_color}">
            <h1>{{title}}</h1>
        </div>
        <CardProgramma v-if="isShow" class="mt-3"></CardProgramma>
        <Social v-if="isSocial" class="mt-3"></Social>
        <Podcasts v-if="isPodcast"></Podcasts>
        <Shows v-if="isShows"></Shows>
        <Djs v-if="isDjs"></Djs>
    </div>
</template>
<style scoped>
.bg-black {
    background-color: black;
}
.orange_label {
    display: inline-block;
    background-color: #FFBB12;
    padding: 5px 15px;
    transform: skew(-7deg);
}
.center {
    display: flex;
    justify-content: center;
    align-items: center;
}


</style>
<script>
export default {
    props:['title', 'type', 'color'],
    data() {
        return {
            isShow: false,
            isShows: false,
            isSocial: false,
            isDjs: false,
            bgc: null,
            title_color: null,
            title_bgc_color: null,
            isPodcast: null
        }
    },
    created() {
        this.checkType(this.type)
        this.setColor(this.color)
    },
    methods: {
        setColor: function(color){
            if (this.color === 'black'){
                this.bgc = 'black'
                this.title_color = '#black';
                this.title_bgc_color = '#ffc107';

            }
            if (this.color === 'orange'){
                this.bgc = '#ffc107'
                this.title_color = 'white'
                this.title_bgc_color = 'black'
            }

        },
        checkType: function (type) {
            if (this.type === 'show'){
                this.isShow = true
            }
            if (this.type === 'shows'){
                this.isShows = true
            }
            if (this.type === 'socials'){
                this.isSocial = true
            }
            if (this.type === 'podcasts'){
                this.isPodcast = true
            }
            if (this.type === 'djs'){
                this.isDjs = true
            }
        }
    }

}

</script>

