<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Axios -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>

        <!-- Vue -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- My_CSS -->
        <link rel="stylesheet" href="styles/style.css">
        <title>PhpDischiJson</title>
    </head>

    <body>

        <header class="head ">

        </header>
        <main>
            <div id="app">
                    
                <div class="container pt-5 ">
                    <div class="row">
                        <div class="col-4"  v-for="(item, index) in items" :key="index">
                            <div class="card w-75 mb-4 align-items-center">
                                <img :src="item.poster" class="card-img-top w-50 mt-4" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title ">{{item.title}}</h5>
                                    <p class="card-text">{{item.author}}</p>
                                    <p class="card-text">{{item.year}}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="./script/main.js"></script>
    </body>
</html>