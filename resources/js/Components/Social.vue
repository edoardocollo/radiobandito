<script setup>
</script>

<template>
    <div class="center flex-column my-5">
        <button class="social_button btn_blue center mb-2"><i class="fa-brands fa-facebook"></i>Facebook</button>
        <button class="social_button btn_pink center mb-2"><i class="fa-brands fa-instagram"></i>Instagram</button>
        <button class="social_button btn_white center mb-2"><i class="fa-brands fa-android"></i>RadioDroid 2</button>
        <button class="social_button btn_green center mb-2"><i class="fa-brands fa-apple"></i>Cuteradio</button>
    </div>
</template>
<style scoped>
.center {
    display: flex;
    justify-content: center;
    align-items: center;
}

.social_button {
    height: 55px;
    border-radius: 3px;
    padding: 20px 30px;
}
.btn_blue {
    background-color: #1877F2;
}
.btn_pink {
    background-color: #C13584;
}
.btn_white {
    background-color: white;
}
.btn_green {
    background-color: #A4C639;
}
</style>

