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
    <div class="content-wrapper">
        <h1>Component botiga</h1>
        <h2>{{this.botiga.nom}}</h2>
        <h2>{{this.botiga.descripcio}}</h2>


        <router-link :to="'AfegirProducte'">
            <p class="text-dark">
                Afegir Producte
            </p>
        </router-link>
    </div>
</template>

<script>
export default {
    data() {
        return {
            botiga: "",
            user: ""
        };
    },
    mounted() {
        axios.get("/api/user").then((res) => {
                this.user = res.data;
            }).then(
        axios.get("/api/botiga").then(res2 => {
            console.log(this.user.id);
            for (let b in res2.data) {
                if (res2.data[b].id_usuari==this.user.id) {
                    this.botiga = res2.data[b]
                }
            }
        }));
        
        
        
    },

};
</script>