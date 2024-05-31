<x-app>

    <h2>Verifica la tua mail</h2>
    <p>
        Ti invieremo una richiesta di verifica della mail.
        Una volta verificata, potrai accedere a tutti i nostri servizi.
    </p>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            A new email verification link has been emailed to you!
        </div>
    @endif

<form method="POST" action="/email/verification-notification">
    @csrf
        <button type="submit" class="btn btn-primary mt-4">Invia</button>
</form>
    
</x-app>