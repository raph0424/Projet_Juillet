<form class="form-group" method="post" action="">
    <table border=0>
    <div class="form-group">
            <label for="info" class="col-sm-4 control-label">Note d'informatique</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="info" name="info" placeholder="Note">
            </div>
        </div>  
        <div class="form-group">
            <label for="math" class="col-sm-4 control-label">Note de mathématique</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="math" name="math" placeholder="Note">
            </div>
        </div>   
        <div class="form-group">
            <label for="fr" class="col-sm-4 control-label">Note de français</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="fr" name="fr" placeholder="Note">
            </div>
        </div>   
        <div class="form-group">
            <label for="eng" class="col-sm-4 control-label">Note d'anglais</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="eng" name="eng" placeholder="Note">
            </div>
        </div>   
        <div class="form-group">
            <label for="ecd" class="col-sm-4 control-label">Note d'eco droit management</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="ecd" name="ecd" placeholder="Note">
            </div>
        </div>      
    </table>
        <input class ='buttonCom btn btn-primary' type="submit" name="envoyer" value="Envoyer">
        <!--<input type="hidden" name="id_ticket" value="<?php/* echo $id_ticket ;*/?>">-->
</form>