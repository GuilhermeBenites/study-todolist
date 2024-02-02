<script setup>

import TopBar from "../Components/TopBar.vue";
import Menu from "../Components/Menu.vue";
</script>

<template>
    <div>
        <top-bar/>

        <div class="grid grid-cols-[17%_auto] h-screen">
            <Menu />
            <div class="pt-10 pl-12">
                <slot/>
            </div>
        </div>

    </div>
</template>

<style scoped>

</style>
