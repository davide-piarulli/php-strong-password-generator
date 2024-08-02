# Password Generator

![pw generator preview](https://github.com/user-attachments/assets/b1999ab0-2da4-4f24-bd87-62da72e6c7b7)

## **Descrizione**
Questo progetto consiste nella creazione di una pagina web che consente agli utenti di utilizzare un generatore di password sicure. L'esercizio è suddiviso in diverse milestone, sviluppate in modo ordinato per garantire funzionalità e sicurezza.

## **Milestone 1**
Creare un form che invii tramite GET la lunghezza della password desiderata. Una funzione personalizzata utilizzerà questo dato per generare una password casuale composta da lettere minuscole, lettere maiuscole, numeri e simboli, che verrà restituita all'utente. Tutto il codice, sia logica che layout, sarà scritto in un unico file _index.php_.

## **Milestone 2**
Una volta verificato il corretto funzionamento del codice, la logica verrà spostata in un file separato _functions.php_, che sarà incluso nella pagina principale per una migliore organizzazione del codice.

## **Milestone 3 (BONUS)**
Invece di visualizzare la password nella pagina principale, sarà implementato un redirect a una pagina dedicata che, tramite $_SESSION, recupererà e mostrerà la password generata all'utente.

## **Milestone 4 (BONUS)**
Aggiungere ulteriori parametri per la generazione della password, permettendo all'utente di scegliere quali caratteri includere tra numeri, lettere e simboli. Gli utenti potranno selezionare questi caratteri singolarmente (es. solo numeri) o in combinazione (es. numeri e simboli, oppure tutti e tre). Inoltre, sarà data la possibilità di permettere o meno la ripetizione di caratteri uguali.
Simboli: !?&%$<>^+-\*/()[]{}@#\_=

