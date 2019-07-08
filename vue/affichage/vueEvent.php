<!-- Bootstrap core CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/shop-homepage.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</br>
</br>
<div class="container">

            <div class="row">


                <!-- /.col-lg-3 -->

                <div class="col-lg-8">


                    <div class="row">
                        <?php
                        foreach ($result as $unResultat) {
                            if($unResultat['valid'] == 1){
                            $idmodal = 'modal-event-' . $unResultat['id_event'];
                            ?>

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#" data-toggle="modal" data-target="#<?php echo $idmodal; ?>"><img class="card-img-top" src="../img/event/<?php echo $unResultat['designation']; ?>mini.jpg" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <?php
                                            echo "<td>", $unResultat['designation'], "</td>";
                                            ?>
                                        </h4>
                                        <?php
                                        echo "<td>", $unResultat['tarif'], "$ </td>";
                                        ?>
                                        <p class="card-text"></p>
                                        <div class="modal fade bannerformmodal modal-event" tabindex="-1" role="dialog" aria-labelledby="modal-event-label" aria-hidden="true" id="<?php echo $idmodal; ?>">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="modal-event-label-"><?php echo $unResultat['designation']; ?></h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <img class="card-img-top" src="../img/event/<?php echo $unResultat['designation']; ?>mini.jpg" alt="">
                                                                        </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        
                                                        <div class="modal-body">
                                                            <div>
                                                            <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                                                                <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                                                                <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                                                                <!------ Include the above in your HEAD tag ---------->

                                                                
                                                                    <table>
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Produit</th>
                                                                                <th>Prix</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><?php echo $unResultat['designation'];?></td>
                                                                                <td><?php echo $unResultat['tarif'], "$";?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <?php $id = $unResultat['id_event']; ?>
                                                                                <td><a href="Vision<?php echo $unResultat['categorie'];?>.php?id=<?php echo $id?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Visionnez cet événement !</a></td>
                                                                                <td colspan="2" class="hidden-xs"></td>
                                                                                <?php if(isset($_SESSION['id_personne'])){?>
                                                                                <form class="form-group" action="" method="post">
                                                                                    <td><input type="hidden" name="id_event" value ="<?php echo $unResultat['id_event']?>"></td>
                                                                                    <td><input type="hidden" name="id_personne" value ="<?php echo $_SESSION['id_personne']?>"></td>
                                                                                    <td><input data-toggle="modal" id="#ignismyModal" type="submit" name="sub" class="btn btn-success btn-block"></td>
                                                                                </form>
                                                                                <?php }?>
                                                                                <?php if(isset($_SESSION['id_partenaire'])){?>
                                                                                <?php $i = 0;
                                                                                foreach ($results as $unResultats) { 
                                                                                   if($unResultats['id_event'] == $unResultat['id_event']){ 
                                                                                       $i++;
                                                                                }
                                                                                }
                                                                                ?>
                                                                                <tr><th>Il y a actuellement : <?php echo $i; ?> influenceurs inscrits à cet événement</th></tr>
                                                                                <?php } ?>
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                        </div>          
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"></small>

                                    </div>
                                    
                                  
                                </div>
                            </div>
    <?php
    }
}
?>


                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->

        </div>

<div class="modal fade" id="ignismyModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                     </div>
					
                    <div class="modal-body">
                       
						<div class="thank-you-pop">
							<img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
							<h1>Merci!</h1>
							<p>Votre achat bien été pris en compte, vous recevrez votre billet par mail dans les prochaines minutes.</p>
							
 						</div>
                         
                    </div>
					
                </div>
            </div>
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
