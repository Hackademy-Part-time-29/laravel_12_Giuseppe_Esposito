Autenticazione

    Installare e configurare Fortify
        composer require laravel/fortify
        php artisan fortify:install
        php artisan migrate

    Configurare la Registrazione
        Abilitare la funzionalità all'interno della funzione boot di FortifyServiceProvider
        Creare la vista che mostrerà il form di registrazione
            Rispettando i vincoli imposti dalla documentazione
        Modificare il reindirizzamento all'interno del file config/fortify.php
            'home' => '/',

    Configurare il Login
        Abilitare la funzionalità all'interno della funzione boot di FortifyServiceProvider
        Creare la vista che mostrerà il form di registrazione
            Rispettando i vincoli imposti dalla documentazione

    Configurare il Logout
        fare una richiesta post alla rotta "logout" con un form vuoto

    @auth

    @guest

    Configurare la l'email verification
        Decommentare "Features::updateProfileInformation" dal file config/fortify.php
        Nel Modello User
            Decommentare "use Illuminate\Contracts\Auth\MustVerifyEmail";
            implementare l'interfaccia nella classe --> class User extends Authenticatable implements MustVerifyEmail
            Abilitare la funzionalità all'interno della funzione boot di FortifyServiceProvider
            Creare la vista per il reinvio della mail
            Utilizzare il middleware "verified"

    Configurare il recupero e reset della password

        Abilitare la funzionalità all'interno della funzione boot di FortifyServiceProvider

        Creato la vista per l'invio della mail di reset

        Creato il link forgot password nel login

        Abilitare la funzionalità per il reset della password all'interno della funzione boot di FortifyServiceProvider

        Creare la vista contenente il form per il reset della password

    Custom Mail
        php artisan vendor:publish --tag=laravel-notifications

Middleware

Schema Middleware

    Metodo 1: inserire per ogni rotta che vogliamo proteggere ->middleware('auth')
    Metodo 2: proteggere l'intero controller inserendo $this->middleware('auth') all'interno della funzione __construct
        ->except('articoli','articolo'); // Protegge tutte le funzioni ( e relative rotte ) escluse le funzioni articoli e articolo
        ->only('create','store'); // Protegge solo le funzioni ( e relative rotte ) create e store
