<script setup>
</script>

<template>
    <div class="show_card my-3" :style="{'background-image': 'url(' + show.img_url + ')' }">
        <div class="card_overlay p-3">
            <div class="d-flex justify-end">
                <div class="d-flex flex-column show_card_action text-white">
                    <button><i class="fa-solid fa-play"></i></button>
                    <button><i class="fa-solid fa-share-nodes"></i></button>
                    <button><i class="fa-regular fa-heart"></i></button>
                </div>
            </div>
            <div class="poscast_info">
                <span class="program_badge">programma</span>
                <h1 class="my-2 show_title">{{show.title}}</h1>
                <span class="show_info_stamp">
                    <i class="fa-regular fa-calendar"></i> {{show.updated_at}}
                    <i class="fa-solid fa-eye"></i>
                    <i class="fa-solid fa-share-nodes"></i>
                </span>
            </div>

        </div>
    </div>
</template>
<style scoped>
.show_card {
    height: 452px;
    width: 100%;
    background-size: cover;
    background-position: center;
    background: rgb(0,0,0);
    background: linear-gradient(0deg, rgba(0,0,0,0.7945378835127801) 30%, rgba(0,255,216,0) 100%);
}
.card_overlay {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 452px;
    width: 100%;
    background: rgb(0, 0, 0);
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.7945378835127801) 16%, rgba(0, 255, 216, 0) 60%);
}
.show_card_action {
    padding: 30px 30px;
    font-size: 30px;
}
.program_badge {
    border: 2px solid #FFBB12;
    color: #FFBB12;
}
.show_title {
    color:  white;
    font-size: 30px;
    font-weight: bold;
}
.show_info_stamp {
    color: white;
}
.show_info_stamp > i {
    color: #FFBB12;
}
i {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 40px;
    width: 40px;
    background-image: radial-gradient(circle closest-side ,black, transparent);
}
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

