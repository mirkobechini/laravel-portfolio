## Descrizione
# Nome repo: laravel-portfolio
- Questo esercizio inizia oggi e lo continueremo fino alla fine del corso per creare passo dopo passo il nostro portfolio online!

# Autenticazione con laravel breeze
## Todos
Per oggi, dedichiamoci alla creazione del nostro portfolio, mettendo su un'app Laravel provvista di autenticazione grazie a Breeze.
- [X] Avviamo l'installazione di Laravel
- [X] Installiamo Breeze e Bootstrap
- [X] Verifichiamo che l'autenticazione funzioni
- [X] Creiamo un layout per la nostra area admin

- Ora inseriamo la nostra prima entità: il Progetto.  

# Operazioni CRUD 1
## Todos
- [X] L'obiettivo di oggi è quello di iniziare a preparare il back-office per poter gestire i progetti nel nostro sito portfolio
- [X] Creiamo il modello Project, con relativa migrazione ed un seeder per inserire inizialmente alcuni progetti nel Database
- [X] Prepariamo un Resource Controller (Admin/ProjectController) incaricato di gestire tutte le operazioni CRUD sui progetti. 
- [X] Soffermiamoci per oggi solo sulla logica delle azioni di index e show. 
- [X] Creiamo le rotte per i nostri progetti e 
- [X] prepariamo un layout per mostrare i nostri progetti in tabella nella rotta index.
- [X] Inventiamo anche uno stile per la pagina di show, che dovrà mostrare un singolo progetto. 

# Operazioni CRUD 2
## Todos
- [X] Prepariamo le rotte per le pagine di creazione e modifica dei progetti
- [X] All'interno delle pagine, prepariamo i rispettivi form
- [X] Nel controller, inseriamo la logica per il salvataggio di un nuovo progetto, per la sua modifica e per l'eliminazione
- [X] Nella tabella della pagina index, dovremo inserire i pulsanti su ciascuna riga, per permettere l'eliminazione e la modifica del singolo progetto. 
- [X] Inoltre, potremmo avere un singolo tasto in cima che ci porti alla pagina di creazione del progetto.

# Relazioni (Uno a uno/Uno a molti)
## Todos
- [X] Creiamo il modello Type, con relativa migrazione ed un seeder per inserire i types nel Database
- [X] Creiamo anche la migration per modificare la tabella projects, che dovrà ora contenere la chiave esterna type_id
- [X] Nei modelli Type e Project, aggiungiamo i metodi per definire la relazione one-to-many
- [X] Nella pagina di dettaglio del progetto, mostriamo il Type a cui il progetto appartiene. Volendo, potremmo anche aggiungere una colonna che indica il tipo nella tabella della pagina Index dei progetti.
- [X] Nei form di creazione e modifica dei progetti, dobbiamo permettere di associare un type al progetto stesso.
- [X] Gestiamo inoltre il salvataggio di questa associazione progetto-tipologia nel controller ProjectController
- [X] Aggiungere le operazioni CRUD anche per il model Type, in modo da gestire le tipologie di progetto direttamente dal pannello di amministrazione. 

# Relazioni (Molti a molti)
## Todos
- [X] Creiamo il modello Technology, la migration per la sua tabella ed un seeder.
- [X] Creiamo anche la migration per modificare la tabella projects, che dovrà ora contenere la chiave esterna type_id
- [X] Sarà inoltre necessario creare la tabella pivot project_technology, per gestire la relazione molti a molti
- [X] Nei modelli Technology e Project, dovremo aggiungere i metodi corretti per rappresentare la relazione molti a molti
- [] Nei form di creazione e modifica dei progetti, dobbiamo permettere di associare una o più tecnologie al progetto stesso. Gestiamo inoltre il salvataggio di queste associazioni progetto-tecnologie nel controller ProjectController
- [] All'interno della pagina di dettaglio di un modello, dovremo visualizzare in qualche modo la lista delle tecnologie utilizzate nel singolo progetto.
- [] Aggiungere le operazioni CRUD anche per il modello Technology, in modo da gestire le tipologie di progetto direttamente dal pannello di amministrazione.
- [] Potremmo modificare i seeder in modo tale da creare già le associazioni tra tecnologia e progetti quando viene popoliamo il database.