<div class="page-container">

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
                    <div class="panel-heading"><h4>Archivement</h4></div>
                        <div class="panel-body">
                            <?php //echo "addicy = ".$addict; ?>
                            <?php //echo "upload = ".$upload; ?>
                            <?php //echo "Top Score = ".$top['Score']['score']; ?>

                            <div class="box lightbox-content">
                                <div class="arc-pic">
                                    <?php echo $this->Html->image('addict.png', ['class' => 'arc-pic-icon']) ?>
                                </div>
                                <div class="arc-detail">
                                    <h3>Addict</h3>
                                    <h3><?php echo $addict.'/'.$achievement['Achievement']['favorite']; ?></h3>

                                </div>

                            </div>
                            <div class="box lightbox-content">
                                <div class="arc-pic">
                                    <?php echo $this->Html->image('top.png', ['class' => 'arc-pic-icon']) ?>
                                </div>
                                <div class="arc-detail">
                                    <h3>Top Score</h3>
                                    <h3><?php echo $top['Score']['score'].'/'.$achievement['Achievement']['top_score']; ?></h3>
                                </div>

                            </div>
                            <div class="box lightbox-content">
                                <div class="arc-pic">
                                    <?php echo $this->Html->image('upload.png', ['class' => 'arc-pic-icon']) ?>
                                </div>
                                <div class="arc-detail">
                                    <h3>Upload</h3>
                                    <h3><?php echo $upload.'/'.$achievement['Achievement']['upload']; ?> Times</h3>
                                </div>

                            </div>
                            <div class="box lightbox-content">
                                <div class="arc-pic">
                                    <?php echo $this->Html->image('genius.png', ['class' => 'arc-pic-icon']) ?>
                                </div>
                                <div class="arc-detail">
                                    <h3>Genius</h3>
                                    <h3>8/<?php echo $achievement['Achievement']['genius'] ?></h3>
                                </div>

                            </div>
                            <div class="box lightbox-content">
                                <div class="arc-pic">
                                    <?php echo $this->Html->image('share.png', ['class' => 'arc-pic-icon']) ?>
                                </div>
                                <div class="arc-detail">
                                    <h3>Sharity</h3>
                                    <h3>1/<?php echo $achievement['Achievement']['share'] ?></h3>
                                </div>

                            </div>



                        </div><!--/panel-body-->
                </div><!--/panel-->
            </div><!--/panel-body-->

        </div><!--/.col-xs-12-->
    </div><!--/.row-->
</div>

