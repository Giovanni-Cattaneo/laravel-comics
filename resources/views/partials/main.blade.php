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

    <div class="comics"></div>
</main>