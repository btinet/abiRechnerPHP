<?php

require './src/Calculator.php';
require './src/Grade.php';

use App\Calculator;
use App\Grade;

$calculator = new Calculator();

// Datenimport aus Excel-Datei / CSV-Datei (hier erstmal als fertiges Array)
$calculator
    ->addGradeEntry(new Grade(300,300,4.0))
    ->addGradeEntry(new Grade(301,318,3.9))
    // und so weiter
;

// Abfrage der Formulardaten und Berechnung
// Je nach Berechnung Ausgabe möglicher sinnvoller Zusatzprüfungen

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title ?? 'AbiRechner' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="container">
        <h1>AbiRechner</h1>
        <h2>Eingabe der Ergebnisse</h2>
        <form method="POST" class="row g-3 mb-5">
            <div class="col-12">
                <label for="kursblock" class="form-label">Kursblock</label>
                <input type="text" class="form-control" id="kursblock" placeholder="416">
            </div>
            
            <div class="col-12 col-md-6">
                <label for="p1" class="form-label">1. Prüfungsfach</label>
                <select class="form-select" id="p1">
                    <option selected>Fach wählen...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-12 col-md-6">
                <label for="p1points" class="form-label">Notenpunkte</label>
                <select class="form-select" id="p1points">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            
            <div class="col-12 col-md-6">
                <label for="p2" class="form-label">2. Prüfungsfach</label>
                <select class="form-select" id="p2">
                    <option selected>Fach wählen...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-12 col-md-6">
                <label for="p2points" class="form-label">Notenpunkte</label>
                <select class="form-select" id="p2points">
                    <option selected value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            
            <div class="col-12">Und so weiter und so fort...</div>
            <!-- usw. Hier wäre eine Zählschleife perfekt (aus Array?) /-->
            <div class="col-12 col-md-6">
                <button type="reset" class="btn btn-secondary w-100">Zurücksetzen</button>
            </div>
            <div class="col-12 col-md-6">
                <button type="submit" class="btn btn-primary w-100">Berechnen</button>
            </div>
        </form>
        
        <h2>Sinnvolle Zusatzprüfungen</h2>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">Informatik</a>
            <a href="#" class="list-group-item list-group-item-action">Deutsch</a>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>