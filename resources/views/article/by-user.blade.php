<x-layout>
<h1 class="display-1 text-capitalize">{{$user->name}}</h1>
    <div class="row">
        @foreach($articles as $article)
        <div class="col-4">
        <div class="card" style="width: 18rem;">
  <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <h6 class="card-text">{{$article->subtitle}}</h6>
    <p class="card-text">{{Str::limit($article->body)}}</p>
    <a href="{{route('article.show', $article)}}" class="btn btn-primary">Leggi l'articolo</a>
  </div>
</div>
        </div>
        
        @endforeach
    </div>

</x-layout>