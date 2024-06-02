<x-app>

    <h1 class="mb-4">{{$title}}</h1>

        <div class="row">
            @foreach ($articles as $article)
                <div class="col-3  mb-4">
                    <x-article-card :article="$article"/>
                </div>
            @endforeach
        </div>
        
        {{$articles->links()}}
</x-app>