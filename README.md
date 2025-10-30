# Inventory Backend (Symfony + DDEV)

Backend-API für ein Inventarverwaltungstool. Läuft lokal mit DDEV (Docker) und MariaDB und liefert JSON-Endpunkte für bspw. Items & Mitarbeiter.

## Lokal starten
```bash
ddev start
ddev launch
```


# Neue Tabelle für die Datenbank erstellen:

## 1. Neue Entity erstellen
```bash
ddev exec bin/console make:entity
```
- Tabellennamen eingeben Bspw. "Employee"
- Felder hinzufügen (Name, E-Mail, etc.)

## 2. Migration generieren und ausführen
- Nachdem du das Entity erstellt hast, musst du eine Migration erstellen, die die Tabelle in der Datenbank anlegt.
```bash
ddev exec bin/console make:migration
```

- Führe die Migration aus, um die Tabelle in der Datenbank zu erstellen:
```bash
ddev exec bin/console doctrine:migrations:migrate
```
- Bestätige die Migration, indem du yes eingibst, wenn du dazu aufgefordert wirst.

## 3. Controller erstellen
```bash
ddev exec bin/console make:controller EmployeeController
```

## 4. Controller-Action erstellen
- Erstelle eine neue Action im Controller, um die API-Endpunkte für die neue Tabelle zu definieren.
