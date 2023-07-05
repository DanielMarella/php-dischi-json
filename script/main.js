const { createApp } = Vue;


createApp({
    data() {
        return {

            apiUrl : './server.php',
            items : [],
        }
    },

    methods: {
        getItems(){
            axios.get(this.apiUrl, {
            })
            .then((response)=> {
                console.log(response.data);
                this.items = response.data;
            })
            .catch(function (error) {
                console.log(error);
            })
        }
    },

    created() {
        this.getItems();
    },

}).mount('#app')