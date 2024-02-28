const { createApp } = Vue

createApp({
  data() {
    return {
      apiUrl: 'PHP/server.php',
      discs: [],
      selectedDisc: [],

      clicked: false,
    }
  },
  mounted() {
    //la funzione che permette di prendere i dati dal nostro server.php verrà eseguita al mounted del componente (in questo caso al caricamento della pagina)
    this.getData();
  },
  methods: {
    //eseguiamo la chiamata axios con metodo get per fare una richiesta al file server.php che ha preso e trasformato in array associativo gli elementi del file json
    getData(){
      axios.get(this.apiUrl).then( (r) => this.discs = r.data )
    },

    //esegue una chiamata axios al file json con tutti i dischi e seleziona soltanto quello il corrispettivo indice
    getSingleDisc(index){
      this.clicked = true;

      if(index != null || index != undefined){
        axios.get(this.apiUrl).then( (r) => this.selectedDisc = r.data[index] )
      }
    }
  },
}).mount('#app')