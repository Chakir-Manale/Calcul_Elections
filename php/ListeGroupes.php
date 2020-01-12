 <div class="ListeGroupes">
        <?php
            for ($x = 1; $x <= $_POST['Nbgrps'] ; $x++) {

               echo ' <div class="form-group input-group-prepend">' .
                    ' <label class="input-group-text" for="Groupe_' . $x . '"> Groupe ' . $x . ': </label>' .
                    ' <input type="text" id="NomGroupe'. $x .'" placeholder="Nom du grp..">' .
                    ' <input type="number"  calss="grpVotes" name="Groupe_' . $x . '" id="Groupe_' . $x . '" placeholder="Nb de votes..">' .
                    ' </div>';

            }
            echo ' <input type="number" name="Nbgrps" value="'. $_POST['Nbgrps'] .'" hidden />' ;

            echo '<div class="form-btn form-group input-group-prepend ">'.
                '<a  href="javascript:void(0);" id="Retour" class="btn btn-danger" onclick="GoBack();">Retour</a>' .
                '<a href="javascript:void(0);" name="submit" id="Calculer" class="btn btn-success" onclick="Calculer();"> Calculer </a></div>';

        ?>
    </div>
 <div id="results"></div>
 <div id="etape_finale"></div>
