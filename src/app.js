const express = require('express');
const mysql = require('mysql');
const app = express();
const port = 3000;

// MySQL-Datenbankverbindung
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'deinBenutzername',
  password: 'deinPasswort',
  database: 'deineDatenbank'
});

connection.connect((err) => {
  if (err) throw err;
  console.log('Verbunden mit der Datenbank!');
});

// Route für die Anzeige der Playlist
app.get('/playlist', (req, res) => {
  const query = 'SELECT * FROM playlist';
  connection.query(query, (err, results) => {
    if (err) throw err;
    let html = '<h1>Playlist</h1><table border="1"><tr><th>Artist</th><th>BPM</th><th>Device</th><th>Genre</th><th>Key</th><th>Label</th><th>Timestamp</th><th>Title</th><th>Rekordbox ID</th></tr>';
    results.forEach(row => {
      html += `<tr><td>${row.track_artist}</td><td>${row.track_bpm}</td><td>${row.track_device}</td><td>${row.track_genre}</td><td>${row.track_key}</td><td>${row.track_label}</td><td>${row.track_timestamp}</td><td>${row.track_title}</td><td>${row.rekordbox_id}</td></tr>`;
    });
    html += '</table>';
    res.send(html);
  });
});

// Server starten
app.listen(port, () => {
  console.log(`Server läuft auf http://localhost:${port}`);
});
