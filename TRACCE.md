Selfwork Laravel - 11 - Il CRUD

Rivedere la lezione

Creare un nuovo blog 

    Scaffolding base (PublicController, Components, Bootstrap c/Vite) 
    Homepage 
    logica di CRUD per gli articoli
    index 
    create 
    store 
    show 
    edit 
    update 
    delete 

Pushare online con nome laravel_12_nome_cognome                       
_______________________________________________________________________________________

Requisiti

        Controller
        View
        Rotta
        HomePage
        Layout
        Navbar
        Footer
        Body
        
        
    Articoli
        Card bootstrap
        Title
        Description
        Foto

    Per ogni articolo deve essere possibile visitarne la pagina
        Controller
        View
        Rotta
        GET
        Parametrica ('id')
        

    Form di creazione dell' articolo
        View (la pagina che mostrerà il form)
        Rotta
        Controller

   /* Primo step prima di realizzare ogni progetto */

    Dipendenze
        node(js) & npm
        php & composer
        Bootstrap
        Vite
        Mailito o Mailtrap
        php artisan storage: link (che collega lo storage alla cartella public)

_______________________________________________________________________________

Passaggi necessari Fortify per l'autenticazione

- Boot

- Vista

- Form

Passaggi necessari per email verification
 
 - "implements MustVerifyEmail" al Model User

 - Decommentare riga "Features::emailVerification()" in
    fortify php
_______________________________________________________________________

CRUD

    Create
        create (mostra la vista )
        store (salva l'informazione)

    Read
        index (mostra tutti i record)
        show (mostra solo 1 record)

    Update
        edit (mostra la vista )
        update (aggiorna l'informazione)

    Delete
        destroy (elimina l'informazione)

    php artisan make:model Category -mcr
        Model : Category
        Migration : categories
        Controller : CategoryController

_______________________________________________________________

Appunti

Step 1

Creare una tabella es: Category 

(ORM = Il model è quella classe che ci permette di trasformare un record di una tabella in un oggetto di quella classe)

- Migration (cmnd make migration)

- Modello (cmnd make model)

- Controller (cmnd make controller)

Comando Laravel che segue il concetto CRUD (unisce tutti e tre comandi)

php artisan make:model Category -mcr

Step 2

Creare una dashboard di modifica

- Vista

- Rotta

Step 3 

Creare le 4 rotte delle funzioni create, index, edit e show 
all'interno di una cartella che ha il nome dell'entità al singolare

views/categories

 - create.blade.php
 - index.blade.php
 - edit.blade.php
 - show.blade.php

Prima di andare a creare tutta la logica per salvare la categoria, per evitare bug, 
andiamo subito a creare la richiesta personalizzata, poichè abbiamo bisogno della validazione.
(Ordine che segue e che consiglia di seguire Giovanni)


Step 4

Validation rules per la richiesta personalizzata nel controller

- cmnd es: php artisan make:request StoreCategoryRequest

*Importante, prima cosa da fare nella funzione "authorize()" della richiesta personalizzata, cambiare il valore in true*



                        


                        
