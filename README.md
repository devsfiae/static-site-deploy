# Static Site Deploy

Dieses Repository enthält die Daten und Konfigurationsdateien, um eine statische Website über GitHub zu deployen.

## Struktur

- `.github/workflows/deploy.yml`: GitHub Actions Workflow-Datei für das Deployment.
- `src/`: Verzeichnis, das alle statischen Dateien der Website enthält.
  - `assets/`: Verzeichnis für Bilder und andere Medien.
  - `css/`: Verzeichnis für CSS-Dateien.
  - `js/`: Verzeichnis für JavaScript-Dateien.
  - `index.html`: Haupt-HTML-Datei der Website.
- `.gitignore`: Datei, die Dateien und Verzeichnisse auflistet, die von Git ignoriert werden sollen.
- `README.md`: Diese Datei, die eine Beschreibung des Projekts enthält.
- `LICENSE`: Lizenzdatei für das Projekt.

## Deployment

Um die Website zu deployen, folge diesen Schritten:

1. Forke dieses Repository.
2. Klone das geforkte Repository auf deinen lokalen Rechner.
3. Füge deine statischen Dateien in das `src/`-Verzeichnis ein.
4. Committe und pushe deine Änderungen.
5. GitHub Actions wird automatisch den Deployment-Workflow ausführen und die Website deployen.

## Lizenz

Dieses Projekt ist unter der MIT-Lizenz lizenziert. Siehe die LICENSE Datei für weitere Details.
