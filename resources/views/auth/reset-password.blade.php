<x-app>

    <h2>Reset della password</h2>

<form method="POST" action="/reset-password">
    @csrf

    <input type="hidden" name="token" value="{{request()->route('token')}}">

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
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Conferma la password</label>
        <input type="password" class="form-control" name="password_confirmation">
    </div>
  <button type="submit" class="btn btn-primary mt-4">Resetta la password</button>
</form>
    
</x-app>