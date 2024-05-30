<div class="card" style="width: 18rem;">
    @if($article->cover)
        <img src="{{Storage::url($article->cover)}}" class="card-img-top" alt="...">
    @else
        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
    @endif
            <div class="card-body">
                <h5 class="card-title">{{$article->name}}</h5>
                <p class="card-text">{{Str::limit($article->description, 100)}}</p>
                <a href="{{route('article',['id'=>$article->id])}}" class="btn btn-primary">Leggi di più</a>
            </div>
</div>