<div class="card" style="">
    <img class="img-custom" src="{{$animes['images']['jpg']['image_url']}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$animes['title']}}</h5>
      <p class="card-text">{{Str::limit($animes['synopsis'], 30)}}</p>
      <a href="{{route('anime.show', ['id' => $animes['mal_id'] ])}}" class="btn btn-primary">Vai al dettaglio</a>
    </div>
  </div>