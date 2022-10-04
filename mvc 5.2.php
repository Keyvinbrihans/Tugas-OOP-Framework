<?php
require_once("mvc 5.1.php");
$s = new sarjana;
$s->getProgram('Mahasiswa') . "<br>";
$s->tugasAkhir();

$m = new magister;
$m->getProgram('Mahasiswa') . "<br>";
$m->tugasAkhir();