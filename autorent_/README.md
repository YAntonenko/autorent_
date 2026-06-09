# Autorent lihtne projekt

See on lihtsustatud PHP + MySQL + Bootstrap 5 autorendi veebileht.

## Kuidas käivitada

1. Pane kaust `autorent_simple` XAMPP kausta `htdocs` sisse.
2. Ava phpMyAdmin.
3. Loo andmebaas nimega `autorent`.
4. Impordi fail `sql/database.sql`.
5. Ava brauseris:
   `http://localhost/autorent_simple/`

## Admin login

Email: `admin@autorent.ee`
Parool: `admin123`

## Failid

- `index.php` avaleht
- `autod.php` autode list ja otsing
- `auto.php` auto detail ja broneering
- `admin/` admini lehed
- `inc/db.php` andmebaasi ühendus
- `sql/database.sql` tabelid ja testandmed
