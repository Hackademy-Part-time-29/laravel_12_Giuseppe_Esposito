<x-app>

    <h2>Recupera la password</h2>

    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{route('password.email')}}"> 
        <!-- Possiamo inserire la route al posto di "/forgot-password" -->
        @csrf
        <div class="mb-3">
            <label class="form-label">Indirizzo email</label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}">
        @error('email')
        <span class="small text-danger">{{$message}}</span>
        @enderror  
        </div>
        <button type="submit" class="btn btn-primary">Recupera password</button>
    </form>
    
</x-app>