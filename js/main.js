const { createApp } = Vue

  createApp({
    data() {
      return {
       albums : [],
      }
    },
    created () {
      axios.get('http://localhost/php-dischi-json/api.php')
        .then((code) => {
          this.albums = code.data;
        });
    },
  }).mount('#app')
