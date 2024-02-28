<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- personal css -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>PHP Dischi JSON</title>
</head>
<body>
    
    <div id="app">
        <div id="web-app" class="vh-100">
            <header>
                <nav class="py-3 container">
                    <figure class="m-0">
                        <img width="40" src="./assets/img/spotify-logo.svg" alt="spotify-logo">
                    </figure>
                </nav>
            </header>

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

                <!-- modal with the selected disc infos -->
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

            </main>

        </div>
    </div>

    <!-- packages -->

    <!-- vue cdn -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios cdn -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- personal main js -->
    <script src="./assets/js/main.js"></script>    

</body>
</html>