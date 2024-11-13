<x-layout headerTitle="Anime TV">

    <div class="container my-5">
        <div class="row">

            @foreach($animes as $anime)
                <div class="col-12 col-md-4 my-3 d-flex justify-content-center">

                    <x-card
                        {{-- img="{{$anime['images']['jpg']['image_url']}}"
                        title="{{$anime['title']}}"
                        synopsis="{{Str::limit($anime['synopsis'], 30)}}" --}}

                        {{-- binding esplicito --}}
                        :animes="$anime"
                    />
                </div>
            @endforeach

        </div>
    </div>

</x-layout>