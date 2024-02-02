<script setup>

</script>

<template>
    <div class="flex justify-between items-center p-5 bg-todo-red text-white">

        <router-link to="/">
            <div class="flex">
                <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="0.5" width="41" height="41" rx="3" fill="white"/>
                    <rect x="15.375" y="10.75" width="21.7812" height="5.125" fill="#FF4F5A"/>
                    <rect x="15.375" y="19.7188" width="21.7812" height="5.125" fill="#FF4F5A"/>
                    <rect x="15.375" y="28.6875" width="21.7812" height="5.125" fill="#FF4F5A"/>
                </svg>
                <span class="pl-3 text-4xl font-rowdies text-white">Todo Daily</span>
            </div>
        </router-link>

        <!-- TODO add user name and change for a default user picture -->
        <div class="flex items-center">
            <span class="text-2xl">James</span>
            <div class="h-[55px] w-[55px] rounded-full bg-gray-600 ml-5"></div>
        </div>
    </div>
</template>

<style scoped>

</style>
