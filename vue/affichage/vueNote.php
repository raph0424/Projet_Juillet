<!-- Custom styles for this template -->
<link href="../css/shop-homepage.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php
$lesCateg = $unControleur->selectMatiere();
$lesCategs = $unControleur->selectEtudiant();

if(isset($_SESSION['login']) && $_SESSION['login'] == "admin")
{
require_once("formulaire/formNote.php");
if(isset($_POST["Ajouter"]))
{
   $envoi = array (
   "Valeur"=>$_POST['info'],
   "id_matiere"=>1,
   "id_etudiant"=>$_POST['id_etudiant']
);
   $envoi1 = array (
    "Valeur"=>$_POST['math'],
    "id_matiere"=>4,
    "id_etudiant"=>$_POST['id_etudiant']

  );
  $envoi2 = array (
    "Valeur"=>$_POST['fr'],
    "id_matiere"=>3,
    "id_etudiant"=>$_POST['id_etudiant']
  );
  $envoi3 = array (
    "Valeur"=>$_POST['eng'],
    "id_matiere"=>5,
    "id_etudiant"=>$_POST['id_etudiant']
  );
  $envoi4 = array (
    "Valeur"=>$_POST['eco'],
    "id_matiere"=>2,
    "id_etudiant"=>$_POST['id_etudiant']
  );
   $unControleur->insert("note",$envoi);
   $unControleur->insert("note",$envoi1);
   $unControleur->insert("note",$envoi2);
   $unControleur->insert("note",$envoi3);
   $unControleur->insert("note",$envoi4);
  
   echo '<div class="modal fade show" style="display : block;" id="ignismyModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onClick = "closeModal()"><span>×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="thank-you-pop">
                                <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                                <h1>Merci!</h1>
                                <p>Vos notes ont bien été ajoutées !</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>';}
}?>
<center>
<div class="col-sm-6">
<?php
 if(isset($_SESSION['login'])  && $_SESSION['login'] != "admin")
 {
$result = $unControleur->selectMoyenne();
$result_moy = $unControleur->calculeMoyenne();
$resultat = $unControleur->selectEtudiantt();
require_once("vueMoyenne.php");
 }
?>
</div>
</center>
<script>
    function closeModal()
    {
        var modal = document.getElementById("ignismyModal");
        modal.style.display = "none";
    }
</script>
<style> 
    /*--thank you pop starts here--*/
    .thank-you-pop{
        width:100%;
        padding:20px;
        text-align:center;
    }
    .thank-you-pop img{
        width:76px;
        height:auto;
        margin:0 auto;
        display:block;
        margin-bottom:25px;
    }

    .thank-you-pop h1{
        font-size: 42px;
        margin-bottom: 25px;
        color:#5C5C5C;
    }
    .thank-you-pop p{
        font-size: 20px;
        margin-bottom: 27px;
        color:#5C5C5C;
    }
    .thank-you-pop h3.cupon-pop{
        font-size: 25px;
        margin-bottom: 40px;
        color:#222;
        display:inline-block;
        text-align:center;
        padding:10px 20px;
        border:2px dashed #222;
        clear:both;
        font-weight:normal;
    }
    .thank-you-pop h3.cupon-pop span{
        color:#03A9F4;
    }
    .thank-you-pop a{
        display: inline-block;
        margin: 0 auto;
        padding: 9px 20px;
        color: #fff;
        text-transform: uppercase;
        font-size: 14px;
        background-color: #8BC34A;
        border-radius: 17px;
    }
    .thank-you-pop a i{
        margin-right:5px;
        color:#fff;
    }
    #ignismyModal .modal-header{
        border:0px;
    }
    /*--thank you pop ends here--*/
</style>

