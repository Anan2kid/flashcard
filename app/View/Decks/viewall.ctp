
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
        <a class="navbar-brand" href="http://localhost/cakephp/categories">THE FLASH CARD</a>
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
        <div class="col-xs-12 col-sm-12" data-spy="scroll" data-target="#sidebar-nav">
          

          <div class="row">
           	 <div class="col-sm-12">
                <div class="panel panel-default">
                  <div class="panel-heading" style="background-color:#990000"> <h4 style="color:white">New Decks</h4></div>
       
                    <div class="panel-body" style="background-color:#FFFFE0">
                      
                    	<?php foreach ($decks as $deck): ?>
                
                      <div class="col-sm-4 col-md-3">
                      	
          					<!--begin nested list-->
						    <div class="thumbnail">
							      <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkzIiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTFwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yNDJ4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" alt="...">
							      <div class="caption">
							        <h3><?php echo $deck['Deck']['name']; ?></h3>
							        <p> <font size="1"><?php echo $deck['Deck']['description']; ?></font></p>
							        <p><a href="#" class="btn btn-primary" role="button">Play</a> 
                        <a href="#" class="btn btn-default" role="button">Review</a></p>
                      <font size="1">date created<br><?php echo $deck['Deck']['created']; ?></font>
							      </div>
						     
						    </div>

						  </div>
            
						<?php endforeach; ?> 
					
	
                    </div><!--/panel-body-->
                     
                </div><!--/panel-->
            </div><!--/col-->               
          </div><!--/row-->

          
          
   
          
         
          
         
  
         
      
          
        </div><!--/.col-xs-12-->
      </div><!--/.row-->
    </div>
  </div><!--/.container-->
</div><!--/.page-container-->
