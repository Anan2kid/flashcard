<div class="page-container">
  
	<!-- top navbar -->
   <!-- top navbar -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <!-- div header start -->
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <i class="glyphicon glyphicon-flash"></i>
        </a>
        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">THE FLASH CARD</a>
      </div>
      <!-- div header finish -->
      <!-- div collapse start -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><i class="glyphicon glyphicon-star"></i> Bookmarks</a></li>
          <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Decks</a></li>
          <li><a href="#"><i class="glyphicon glyphicon-education"></i> Achievements</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Nutchalum <span class="caret"></span></a>
            <ul id="g-account-menu" class="dropdown-menu" role="menu">
              <li><a href="#">My Profile</a></li>
              <li><a href="#">Edit Profile</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
        </ul>
      </div>
    </div>
    <!-- div collapse finish -->
  </nav>
      
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">
        
        
  	
        <!--/main-->
    <div class="col-sm-9" style="color:black">

		 			   
				   
				   <div class="panel panel-default">
                   <div class="panel-heading">
                       <h4 style="  display: inline;"><?php echo $deck['Deck']['name'] ?></h4>
                        <div class="pull-right">
                            <?php echo $this->Html->link('<i class="glyphicon glyphicon-play" ></i>', ['controller'=>'users', 'action'=>'play',$deck['Deck']['id']] , ['escape' => FALSE]); ?>
                            <?php echo $this->Html->link('<i class="glyphicon glyphicon-star" ></i> ', ['controller'=>'users', 'action'=>'play',$deck['Deck']['id']] , ['escape' => FALSE]); ?>
<!--                           <a class="glyphicon glyphicon-play" href="/deck/play/2"></a>-->
<!--                           <a class="glyphicon glyphicon-star"></a>-->
                        </div>
                   </div>
                    <div class="panel-body">
                  
					<form class="form-horizontal">
                      <div class="form-group text-left">
					 
					  <br>
					  <td>
<!--                    	 <label class="col-sm-3 control-label">--><?php //echo $deck['Deck']['name'] ?><!--</label>-->
<!--                          <a class="glyphicon glyphicon-play"></a>-->
<!--                          <a class="glyphicon glyphicon-star"></a>-->
<!--							<input type="image" style="margin-left:25%" src="play.jpg" name="image3" >-->
<!--							<input type="image" style="margin-left:5%"src="star.png" name="image4" >-->
						</td>
						 
						</div>
					<label style="margin-left:5%"><?php echo $deck['Deck']['description'] ?></label>
                           <br>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <th>Front</th>
                            <th>Back</th>

                            </thead>
                        <tbody>

                        <?php foreach($deck['Card'] as $card): ?>
                        <tr>
                            <td>
                                <div class="">
                                    <?php echo $card['front']; ?>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <?php echo $card['back']; ?>
                                </div>
                            </td>

                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                            </table>

<!--                        <div class="panel panel-default bootcards-media">-->
<!--                            <div class="panel-heading">-->
<!--                                <h3 class="panel-title">Media Card Heading</h3>-->
<!--                            </div>-->
<!--                            <div class="panel-body">-->
<!--                                Media card description lorem ipsum dolor est compendium-->
<!--                            </div>-->
<!--                            <img src="http://www.teamstudio.com/Portals/218295/images/istock_000001242290small.jpg" class="img-responsive"/>-->
<!--                            <div class="panel-footer">-->
<!---->
<!--                            </div>-->
<!--                        </div>-->




							<br>  	
							<br>  
<!--                          <input type="image" style="margin-left:25%" src="play.jpg" name="image3" >-->
                                
                   </form>
<!--                        <div class="fb-share-button" data-href="http://localhost/flash/cakephp/" data-layout="button"></div>-->
				   </div>
     
        </div><!--/.col-xs-12-->
      </div><!--/.row-->
    </div>
  </div><!--/.container-->
</div><!--/.page-container-->



<script>

    $(function(){

        ready();
        nextfun();


    });

    function ready(){
        $.ajax({
            type: "GET",
            url: "/flash/cakephp/decks/test/5/1/6",
            data: {},
            success: function (data) {
////                var settvv = <?php ////echo $dataNa; ?>////;
//                var settvv = 333;
//                console.warn("OKKKK");
//                console.warn(settvv);
            }
        });
    }

    function nextfun(){
        alert();
        var settvv = <?php echo "'" . $dataNa . "'"; ?>;
        console.warn(settvv);

    }



</script>

<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
          
         