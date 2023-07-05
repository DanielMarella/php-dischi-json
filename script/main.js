const { createApp } = Vue;


createApp({
    setup() {
        const message = ('Hello vue!')
        return {
            message
        }
    }
}).mount('#app')