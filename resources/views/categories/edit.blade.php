<x-app>

<h1>Modifica la categoria</h1>

@if(session()->has('succes'))
    <div class="alert alert-success" role="alert">
        {{session('succes')}}
    </div>
@endif

<form method="POST" action="{{route('categories.update', $category)}}">  
@csrf
{{ method_field('PUT') }}
    
  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" name="name" value="{{old('name', $category->name)}}">
    @error('name')
        <span class="small text-danger">{{$message}}</span>
    @enderror
  </div>

  <div class="form-floating mb-3">
    <textarea class="form-control" style="height: 100px" name="description" value="{{old('description', $category->description)}}"></textarea>
    <label>Descrizione</label>
    @error('description')
        <span class="small text-danger">{{$message}}</span>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Modifica categoria</button>
</form>

</x-app>