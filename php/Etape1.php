<?php

$arrVotes = $_POST['vote_per_grp'];
$arrNoms = $_POST['nom_per_grp'];
$QuotientElectoral = 0;
$SiegesDistribues = 0;

for ($x = 0; $x < $_POST['Nbgrps'] ; ++$x)
{
    $pourcentage = ($arrVotes[$x] * 100) / $_POST['Nbvotes'];

    if ($pourcentage > 5)
    {
        $QuotientElectoral +=  $arrVotes[$x] ;
        $SiegesDistribues += (int) ($arrVotes[$x] / ($QuotientElectoral / $_POST['Nbsieges']));
    }
}
echo '<script> console.log('.$SiegesDistribues.')</script>';

echo ' <p>En <strong style="color: red">Rouge</strong>:les groupes n’ayant pas atteint la barre des 5% sont éliminées.</p>' .
    ' <table class="table table-hover"><thead>' .
    ' <th> Nom du Groupe</th>' .
    ' <th> Nb de Votes</th>' .
    ' <th> Pourcentage</th>' .
    ' <th> Nb de Sieges</th></thead> <tbody>';

for ($x = 0; $x < $_POST['Nbgrps'] ; $x++) {

     $pourcentage  = ( $arrVotes[$x] * 100 ) / $_POST['Nbvotes'];
     $siege = (int) ($arrVotes[$x] / ($QuotientElectoral / $_POST['Nbsieges'])) ;
    if ($pourcentage > 5)
    {
        echo ' <tr>' .
        ' <td id="NomGroupe'. ($x + 1).'" >'. $arrNoms[$x] .' </td>' .
        ' <td calss="grpVotes" name="Groupe_' . ($x + 1) . '" id="Groupe_' . ($x + 1) . '" >'. $arrVotes[$x] .' </td>' .
        ' <td calss="pourcentage" name="Pourcentage_' . ($x + 1) . '" id="Pourcentage_' . ($x + 1) . '" >'. $pourcentage.'% </td>' .
        ' <td calss="sieges" name="Siege_' . ($x + 1) . '" id="Siege_' . ($x + 1) . '" >'. $siege.' </td>' .

        ' </tr>';
    }else {
        echo ' <tr style="background-color: tomato">' .
            ' <td id="NomGroupe'. ($x + 1).'" >'. $arrNoms[$x] .' </td>' .
            ' <td calss="grpVotes" name="Groupe_' . ($x + 1) . '" id="Groupe_' . ($x + 1) . '" >'. $arrVotes[$x] .' </td>' .
            ' <td calss="pourcentage" name="Pourcentage_' . ($x + 1) . '" id="Pourcentage_' . ($x + 1) . '" >'. $pourcentage.'% </td>' .
            ' <td calss="sieges" name="Siege_' . ($x + 1) . '" id="Siege_' . ($x + 1) . '" > --- </td>' .

            ' </tr>';
    }


}

echo '<tbody>';
?>