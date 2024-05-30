<x-app>
    <br>
    <h3>Compila il form per contattarci</h3>

    <div class="row">
        @if (session()->has('succes'))
        <div class="alert alert-success" role="alert">
            {{session('succes')}}
        </div>
        @endif
        @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{session('error')}}
        </div>
        @endif
        <div class="col-12">
            <form method="POST" action="{{('send-mail')}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nome e Cognome</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" style="height: 100px" name="msg"></textarea>
                    <label for="floatingTextarea2">Lascia qui un messaggio</label>
                </div>
                <br>
                <button type="submit" class="btn primary-bg">Invia</button>
            </form>
        </div>
    </div>

</x-app>

<!-- array [
    'email'=>"Ci sarà il valore dell'input del form es: mariorossi@gmail.com",
    'name'=>"Ci sarà il valore dell'input del form es: Mario Rossi",
    'message'=>"Ci sarà il valore dell'input del form es: Ciao, sono Mario rossi", 
] -->