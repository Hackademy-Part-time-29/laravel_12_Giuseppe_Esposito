<x-app>

<h1>Lista delle categorie</h1>

@if(session()->has('succes'))
    <div class="alert alert-success" role="alert">
        {{session('succes')}}
    </div>
@endif

<table class="table">
  <thead class="table-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Azioni</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>{{Str::limit($category->description, 25)}}</td>
            <td>
                <a href="{{route('categories.show', $category)}}" class="btn btn-outline-success">Mostra</a>
                <a href="{{route('categories.edit', $category)}}" class="btn btn-outline-primary">Modifica</a>
                <form method="POST" action="{{route('categories.destroy', $category)}}">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-outline-danger" onclick="alert('Sei sicuro di voler eliminare la categoria)')">Elimina</button>
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>

</x-app>