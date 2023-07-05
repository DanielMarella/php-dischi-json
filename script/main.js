const { createApp } = Vue;


createApp({
    data() {
        const message = ('Hello vue!')
        return {
            message
        }
    },

    methods: {
        axios.get('')
        .then(function (response) {

            console.log(response);
        })
        .catch(function (error) {

            console.log(error);
        })
    },



}).mount('#app')