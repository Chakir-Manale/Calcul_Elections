<?php

$arrNoms = $_POST['nom_per_grp'];
$arrVotes = $_POST['vote_per_grp'];
$arrSieges = $_POST['siegespargrp'];
$SiegesDistribues = $_POST['NbSiegesDist'];
$Nbsieges = $_POST['Nbsieges'];
$arrSiegesFinal = $arrSieges;
$arrVoteSurSiege = [];

$siegeRestant = $Nbsieges - $SiegesDistribues;

for ($x = 0; $x < $_POST['Nbgrps'] ; $x++)
{
    $arrVoteSurSiege[$x] = (int) ($arrVotes[$x] / ($arrSieges[$x] + 1));
}


$arrayTemp = $arrVoteSurSiege ;
while ( $siegeRestant > 0)
{
    $fortemoy =  max($arrayTemp);
    $key = array_search($fortemoy, $arrVoteSurSiege);
    $arrSiegesFinal[$key] += 1 ;
    unset($arrayTemp[$key]);
    $siegeRestant -= 1;
}

echo ' <p>En <strong style="color: red">Rouge</strong>:les groupes n’ayant pas atteint la barre des 5% sont éliminées.</p>' .
    ' <table class="table table-hover"><thead>' .
    ' <th> Nom du Groupe</th>' .
    ' <th> Nb Votes / (Nb siege + 1)</th>' .
    ' <th> Nb de Sieges final </th></thead> <tbody>';

for ($x = 0; $x < $_POST['Nbgrps'] ; $x++)
{

    echo ' <tr>' .
        ' <td id="NomGroupe'. ($x + 1).'" >'. $arrNoms[$x] .' </td>' .
        ' <td calss="sieges" name="VotesFinal_' . ($x + 1) . '" id="Siege_' . ($x + 1) . '" >'. $arrVoteSurSiege[$x].' </td>' .
        ' <td calss="sieges" name="SiegeFinal_' . ($x + 1) . '" id="Siege_' . ($x + 1) . '" >'. $arrSiegesFinal[$x].' </td>' .
        ' </tr>';
}

?>