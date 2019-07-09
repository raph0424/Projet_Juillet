<!-- Custom styles for this template -->
<link href="../css/shop-homepage.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php
$lesCateg = $unControleur->selectMatiere();
$lesCategs = $unControleur->selectEtudiant();
?>
<center>
<div class="col-sm-6">
<?php
 if(isset($_SESSION['login'])  && $_SESSION['login'] == "admin")
 {
$id = $_GET['id'];
$_SESSION['id_etudiant'] = $id;
$result = $unControleur->selectMoyenne();
$result_moy = $unControleur->calculeMoyenne();
$resultat = $unControleur->selectEtudiantt();
require_once("vueMoyenne1.php");
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

