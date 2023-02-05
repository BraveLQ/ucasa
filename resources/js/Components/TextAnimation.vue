<template>
    <p>UCA Student Association</p>
</template>

<script>
export default {
    name: "TextAnimation",

}
</script>

<style scoped>


p {
    position: relative;
    font-family: sans-serif;
    text-transform: uppercase;
    letter-spacing: 4px;
    overflow: hidden;
    background: linear-gradient(90deg, #000, #fff, #000);
    background-repeat: no-repeat;
    background-size: 80%;
    animation: animate 3s linear infinite;
    -webkit-background-clip: text;
    -webkit-text-fill-color: rgba(255, 255, 255, 0);
}

@keyframes animate {
    0% {
        background-position: -500%;
    }
    100% {
        background-position: 500%;
    }
}
</style>
