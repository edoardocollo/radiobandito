<script setup>
</script>

<template>
    <div class="d-flex justify-between bg-black p-1">
        <img src="./../../img/bandito_logo.png">
        <span>
            <button class="light_blue"><i class="fa-solid fa-phone"></i></button>
            <button class="acid_green"><i class="fa-brands fa-whatsapp"></i></button>
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
            <button><i class="fa-solid fa-bars"></i></button>
        </span>
    </div>
</template>
<style scoped>
.bg-black {
    background-color: black;
}
button {
    color: white;
    height: 45px;
    width: 45px;
    border-radius: 3px;
    border: 2px solid rgba(255,255,255,0.4);
}
.light_blue{
    background-color: #25C1D3 ;
}
.acid_green{
    background-color: #25D366;
}
</style>

