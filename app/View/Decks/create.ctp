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
        
        <!--sidebar-->
  	
        <!--/main-->
         <div class="col-sm-12" style="color:black">

		 
            <div class="panel panel-default">
                   <div class="panel-heading"><h4>Create Deck</h4></div>
                    <div class="panel-body">
                     
					<form class="form-horizontal">
                      <div class="form-group text-left">
                    	<label for="Username" class="col-sm-2 control-label">Deck Name: </label>
                    		<div class="col-sm-5">
                      				<input name="deckname" type="text" class="form-control" id="deckname" placeholder="deckname" required>
                   			</div>
						</div>
					<div class="form-group text-left">
						<label for="Achievements" class="col-sm-2 control-label">Categories: </label>
                    		<div class="col-sm-5">
                      				<select>
									  <option value="math">Math</option>
									  <option value="animal">Animal</option>
									  <option value="car">Car</option>
									  <option value="food">Food</option>
									</select>
                   			</div>
							 </div>
				  <div class="form-group text-left">
                    				<label for="Tag" class="col-sm-2 control-label"> Tag</label>
                    				<div class="col-sm-5">
                      					<input name="tag_video" type="text" class="form-control" id="tagPicture" placeholder="* ?????? " required>
                                       </div>
                                 
                  				</div>
								
					<div class="form-group text-left">
						<label for="Achievements" class="col-sm-2 control-label">Description: </label>
                    		<div class="col-sm-5">
                      					<textarea name="description_video" class="form-control" rows="5" id="descriptionVideo" placeholder="Description..." required="required"></textarea>
                    				</div>
							 </div>
							 

                                <div class="form-group text-left" style="margin-left:70%"><!-- Input File-->
                    				<input type="file" id="pictureInputFile" required>
                  				</div>
                                
                                <button class="btn btn-info" style="margin-left:30%" type="submit"><!-- Summit Button-->
                    <span><img src="https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/plus-20.png" ></span> Submit</button>
                                
                   </form>
				   </div>
				   
     
        </div><!--/.col-xs-12-->
      </div><!--/.row-->
    </div>
  </div><!--/.container-->
</div><!--/.page-container-->
          
         