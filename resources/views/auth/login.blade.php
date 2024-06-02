<x-app>

    <h2>Accedi al nostro sito</h2>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

<form method="POST" action="/login">
    @csrf
    <div class="mb-3">
        <label class="form-label">Indirizzo email</label>
        <input type="email" class="form-control" name="email" value="{{old('email')}}">
    @error('email')
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
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="remeber">
        <label class="form-check-label" for="exampleCheck1">Ricordati di me</label>
    </div>
    <span>
        <a href="{{route('password.request')}}">Password dimenticata?</a>
    </span>
    <br>
  <button type="submit" class="btn btn-primary mt-4 mb-4">Login</button>
  <p>Nuovo sul nostro sito? <a href="/register">Registrati</a></p>
</form>
    
</x-app>