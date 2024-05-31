<x-app>

    <h2>Registrati sul nostro sito</h2>

<form method="POST" action="/register">
    @csrf
    <div class="mb-3">
        <label class="form-label">Indirizzo email</label>
        <input type="email" class="form-control" name="email" value="{{old('email')}}">
    @error('email')
        <span class="small text-danger">{{$message}}</span>
    @enderror  
    </div>
    <div class="mb-3">
        <label class="form-label">Nome utente</label>
        <input type="text" class="form-control" name="name" value="{{old('name')}}">
    @error('name')
        <span class="small text-danger">{{$message}}</span>
    @enderror 
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    @error('password')
        <span class="small text-danger">{{$message}}</span>
    @enderror 
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Conferma password</label>
        <input type="password" class="form-control" name="password_confirmation">
    </div>
  <button type="submit" class="btn btn-primary">Registrati</button>
</form>
    
</x-app>