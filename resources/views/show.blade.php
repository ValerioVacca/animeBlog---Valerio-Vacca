<x-layout headerTitle="{{$anime['title']}}">

    <div class="container my-5">

        <div class="row align-items-center vh-100">

            <div class="col-12 col-md-6">
                <img class="img-detail" src="{{$anime['images']['jpg']['image_url']}}" alt="">
                <h2 class="text-white">{{$anime['title_japanese']}}</h2>
            </div>

            <div class="col-12 col-md-6 vh-100">
                <p class="fs-4">Generi:</p>

                <ul>
                    @foreach($anime['genres'] as $genre)
                        <li>{{$genre['name']}}</li>
                    @endforeach
                </ul>

                <p class="fs-4">Numero di episodi: {{$anime['episodes']}}</p>
                <p class="fs-4">Sinossi:</p>
                <p>{{$anime['synopsis']}} </p>

                <div class="mt-5">
                    <a class="btn-custom" href="{{route('homepage')}}">Vai alla lista degli anime</a>
                </div>
            </div>

        </div>
    </div>

</x-layout>