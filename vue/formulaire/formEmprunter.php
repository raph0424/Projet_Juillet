<form class="form-group" method="post" action="">
    <table border=0>
        <h1> Selectionnez les transports empruntés par l'étudiant </h1>
        <div class="form-group">
    <td><select name="id_etudiant">
            <?php
                    foreach( $results as $uneCateg)
                    {
                        echo "<option value='".$uneCateg['id_etudiant']."'>"
                        .$uneCateg['Nom']."</option>";
                    }
            ?>
            </select>
            </td>
            <div class="form-check">
                <input class="form-check-input" name="tab[]" type="checkbox" value="1" id="RerA">
                <label class="form-check-label" for="defaultCheck1">
                    RER A
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="tab[]" type="checkbox" value="2" id="RerB">
                <label class="form-check-label" for="defaultCheck1">
                    RER B
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="tab[]" type="checkbox" value="3" id="RerC">
                <label class="form-check-label" for="defaultCheck1">
                    RER C
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="tab[]" type="checkbox" value="4" id="Metro3">
                <label class="form-check-label" for="defaultCheck1">
                    Metro Ligne 3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="tab[]" type="checkbox" value="5" id="Metro1">
                <label class="form-check-label" for="defaultCheck1">
                    Metro Ligne 1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="tab[]" type="checkbox" value="6" id="Metro4">
                <label class="form-check-label" for="defaultCheck1">
                    Metro Ligne 4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="tab[]" type="checkbox" value="7" id="Bus26">
                <label class="form-check-label" for="defaultCheck1">
                    Bus 26
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="tab[]" type="checkbox" value="5" id="Bus46">
                <label class="form-check-label" for="defaultCheck1">
                    Bus 46
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="tab[]" type="checkbox" value="6" id="Bus227">
                <label class="form-check-label" for="defaultCheck1">
                    Bus 227
                </label>
            </div>
        </div> 


    </table>
        <input class ='buttonCom btn btn-primary' type="submit" name="Ajouter" value="Envoyer">
        <!--<input type="hidden" name="id_ticket" value="<?php/* echo $id_ticket ;*/?>">-->
</form>