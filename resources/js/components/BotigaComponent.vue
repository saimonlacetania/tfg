<style>
.nav-link.active {
    background-color: #ff6565 !important;
    color: white !important;
}
.nav-link {
    text-decoration: none !important;
    color: white !important;
}
</style>

<template>
    
</template>

<script>
export default {
    data() {
        return {
            user: "",
            botiga: ""
        };
    },
    mounted() {
        axios.get("/api/user").then(res => {
            this.user = res.data;
        });
        axios.get("/api/botiga").then(res => {
            this.botiga = res.data;
        });
    }
};
</script>