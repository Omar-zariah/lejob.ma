<script setup>
const props = defineProps({
    classes: String,
    size: {
        type: Number,
        default: 30
    }
})
</script>

<template>
    <span :class="classes">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="shape-rendering: auto;"
            :width="props.size + 'px'" :height="props.size + 'px'" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
            <circle cx="50" cy="50" r="32" stroke-width="8" stroke="white"
                stroke-dasharray="50.26548245743669 50.26548245743669" fill="none" stroke-linecap="round">
                <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" keyTimes="0;1"
                    values="0 50 50;360 50 50"></animateTransform>
            </circle>
        </svg>
    </span>
</template>