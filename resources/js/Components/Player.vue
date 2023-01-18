<script setup>
</script>

<template>
    <div class="d-flex bg_orange border_black">
        <button class="border_black"><i class="fa-solid fa-play"></i></button>
        <div class="text_wrap">
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur </p>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <button class="border_black"><i class="fa-solid fa-chevron-right"></i></button>
    </div>
</template>
<style scoped>
.bg_orange {
    background-color: #FFBB12;
}
button {
    height: 60px;
    width: 60px;
}
.border_black {
    border: 1px solid black;
}
.text_wrap{
    width: calc(100% - 120px);
    display: flex;
    align-items: center;
    padding: 0px 5px 0px 5px;
}
</style>

