# Activiteiten Net: Laravel Project

Activiteiten Net is een dynamische website gebouwd met Laravel 11. Het project is gericht op jeugdbewegingen om activiteiten en spellen te beheren die ze tijdens vergaderingen en kampen kunnen gebruiken.

## Installatie-instructies

Volg onderstaande stappen om het project lokaal te installeren en te laten werken:

### 1. Vereisten
- **PHP**: Versie 8.1 of hoger
- **Composer**: Versie 2.0 of hoger
- **Node.js**: Versie 16 of hoger
- **MySQL**: Versie 8.0 of hoger
- **Laravel**: Versie 11 (inbegrepen in project setup)
- **XAMPP** (Apache & MySQL) of een andere lokale serveromgeving 

### 2. Project downloaden
1. Clone de repository:
   ```bash
   git clone <https://github.com/DeckxArno/Laravel_Project_Deckx_Arno.git>
   cd Laravel
   ```
2. Installeer alle benodigde PHP-dependencies met Composer:
   ```bash
   composer install
   ```
3. Installeer JavaScript- en CSS-pakketten:
   ```bash
   npm install
   npm run build
   ```

### 3. Database configuratie
1. Maak een nieuwe MySQL-database aan of gebruik de localhost database.
2. Kopieer het `.env.example`-bestand en hernoem het naar `.env`:
   ```bash
   cp .env.example .env
   ```
3. Pas de database-instellingen aan in het `.env`-bestand:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=<kies hier de naam van jouw database>
   DB_USERNAME=root
   DB_PASSWORD=
   ```
4. Voer de migraties en seeders uit om de database te initialiseren:
   ```bash
   php artisan migrate:fresh --seed
   ```

### 4. Start de server
1. Start de lokale ontwikkelingsserver:
   ```bash
   php artisan serve
   ```
2. Open de website in je browser via: [http://localhost:8000]

### 5. Default admin
Gebruik de volgende gegevens om in te loggen als admin:
- **E-mailadres**: admin@ehb.be
- **Wachtwoord**: Password!321

### 6. Default user
- Email: user@ehb.be
- Password: Password!321

## Belangrijke features

Voor deze opdracht waren er specifieke functionele eisen. Het behalen van deze eisen resulteert in een basisbeoordeling van 12/20. 
Voor een hogere score kunnen extra functionaliteiten worden toegevoegd aan het project. Hieronder worden zowel de verplichte eisen als de extra's beschreven die in de website zijn opgenomen.

### Minimale Functionaliteiten
- **Authenticatie**: Login, registratie, wachtwoordherstel en rollenbeheer (admin/gebruiker).
- **Profielpagina**: Publieke profielpagina met bewerkbare gegevens zoals gebruikersnaam, verjaardag, profielfoto en een korte "Over mij"-tekst.
- **Nieuwsbeheer**: Admins kunnen nieuwsitems beheren (toevoegen, wijzigen, verwijderen). Bezoekers kunnen alle nieuwsitems bekijken.
- **FAQ-pagina**: Bezoekers kunnen een lijst van veelgestelde vragen per categorie bekijken. Admins kunnen vragen en categorieën beheren.
- **Contactformulier**: Bezoekers kunnen een bericht sturen via een formulier. Admins ontvangen een e-mail met de inhoud van het formulier.

### Extra Functionaliteiten
- **Zoekfunctie**: Gebruikers kunnen eenvoudig andere gebruikers opzoeken via een zoekbalk.
- **Privéberichten**: Een volledig privéberichten-systeem waarmee gebruikers elkaar kunnen bereiken.
- **Nieuwsreacties**: Ingelogde gebruikers kunnen reacties plaatsen op nieuwsitems.
- **Contactbeheer voor admins**: Admins kunnen contactformulieren bekijken en erop reageren vanuit een administratief paneel.


## Technische details

### Database
- **Relaties**:
  - One-to-Many: Nieuwsitems en reacties.
  - Many-to-Many: Gebruikers en rollen.
- Database wordt geinitialiseerd met de seeders.

### Beveiliging
- **XSS-bescherming**: Voorkomt cross-site scripting door data te "ontsmetten" voordat deze wordt weergegeven.
- **CSRF-bescherming**: Formulieren zijn beveiligd tegen CSRF-aanvallen.
- **Client-side validatie**: Basisvalidatie via JavaScript en extra validatie op de server.

## Bronnen
- Laravel-documentatie: [https://laravel.com/docs](https://laravel.com/docs)
- [Canvas opdrachtbeschrijving](https://canvas.ehb.be/courses/40595/assignments/182099)
- Bootstrap: [https://getbootstrap.com](https://getbootstrap.com)
- Tutorials en voorbeeldcode:
  - Traversy Media ([YouTube-kanaal](https://www.youtube.com/user/TechGuyWeb))
  - [Canvas cursus](https://canvas.ehb.be/courses/40595)

## Auteur

Arno Deckx - 2e jaar Bachelor Toegepaste Informatica
Gemaakt voor de opdracht Project1 - Laravel voor het vak Backend Web TI2.

---