<main class="overflow-y-auto py-5">
    <div class="container custom-x-padding">
        <div class="row">
            <div 
                class="col-4 p-4"
                v-for="(disc, index) in discs" :key="index"
            >
                <div class="card custom-card-bg px-5 cursor-pointer" @click="getSingleDisc(index)">
                    <figure>
                        <img class="card-img-top pt-4 img-fluid" :src="disc.poster" :alt="disc.title"/>
                    </figure>
                    <div class="card-body  text-center">
                        <h4 class="card-title fw-bolder">{{disc.title}}</h4>
                        <h6 class="card-text fw-light">{{disc.author}}</h6>
                        <p class="card-text fw-bolder">{{disc.year}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <?php include_once __DIR__ . '/modal.php' ?>

</main>