<!-- modal, on click it opens with the selected disco info -->
<div v-if="clicked" class=" position-absolute z-2 top-0 vh-100 vw-100 p-4">                
    <div class="custom-card-bg-modal h-100 p-2 rounded-2">
        <button type="button" class="btn float-end"  @click="clicked = false">
            <i class="fas fa-xmark h2"></i>
        </button>
        <div class="h-100 d-flex justify-content-center align-items-center">

            <div class="card bg-transparent border border-0">
                <figure class="modal-figure">
                    <img class="card-img-top" :src="selectedDisc.poster" :alt="selectedDisc.title"/>
                </figure>
                <div class="card-body  text-center">
                    <h4 class="card-title fw-bolder">{{selectedDisc.title}}</h4>
                    <h6 class="card-text fw-light">{{selectedDisc.author}}</h6>
                    <p class="card-text fw-bolder">{{selectedDisc.year}}</p>
                </div>
            </div>

        </div>
    </div>
</div>