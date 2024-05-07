<style>
    main {

        & img {
            width: 100%;
            height: 600px;
        }

        .current {
            background-color: #0282f9;
            position: absolute;
            top: 36.5rem;
            left: 20rem;
            color: white;
        }

    }
</style>

<main class="position-relative">
    <div class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>

    <div class="current">
        <h2 class="p-1 py-0">CURRENT SERIES</h2>
    </div>

    <div class="container mt-5">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="{{$product['thumb']}}" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">{{$product['title']}}</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>

            </div>
            @endforeach
        </div>



    </div>
</main>