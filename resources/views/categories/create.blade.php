<x-app>

<h1>Crea una nuova categoria</h1>

@if(session()->has('succes'))
    <div class="alert alert-success" role="alert">
        {{session('succes')}}
    </div>
@endif

<form method="POST" action="{{route('categories.store')}}">
  @csrf 

  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" name="name" value="{{old('title')}}">
    @error('name')
        <span class="small text-danger">{{$message}}</span>
    @enderror
  </div>

  <div class="form-floating mb-3">
    <textarea class="form-control" style="height: 100px" name="description" value="{{old('description')}}"></textarea>
    <label>Descrizione</label>
    @error('description')
        <span class="small text-danger">{{$message}}</span>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Crea categoria</button>
</form>

</x-app>