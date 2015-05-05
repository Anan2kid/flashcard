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
                    <div class="panel-heading"><h4>Archivement Rule</h4></div>
                    <div class="panel-body">
                        <?php //echo "addicy = ".$addict; ?>
                        <?php //echo "upload = ".$upload; ?>
                        <?php //echo "Top Score = ".$top['Score']['score']; ?>

                        <?php
                            echo $this->Form->create('Achievement', [
                                'url' => [
                                    'controller' => 'users',
                                    'action' => 'editAchievement'
                                ]
                            ]);
                        ?>

                        <div class="box lightbox-content">
                            <div class="arc-pic">
                                <?php echo $this->Html->image('addict.png', ['class' => 'arc-pic-icon']) ?>
                            </div>
                            <div class="arc-detail">
                                <h3>Addict</h3>
                                <div id="favorite">
                                    <h3><?php echo $achievement['Achievement']['favorite']; ?></h3>
                                    <a class="btn btn-danger" onclick="edit('#favorite');">Edit</a>
                                    </br>
                                    </br>
                                </div>
<!--                                <a class="cursor" id="favorite" onclick="edit('#favorite');"><h3>--><?php //echo $archivement['Archivement']['favorite']; ?><!--</h3></a>-->
                                <div class="edit-qty-group hide" id="favorite-edit-group">
                                    <div class="edit-qty-number">
                                        <?php
                                            echo $this->Form->input('favorite', [
                                                'label' => false,
                                                'div' => false,
                                                'type' => 'number',
                                                'min' => 1,
                                                'required',
                                                'value' =>
                                                    isset($this->request->data['Achievement']['favorite']) ?
                                                        $this->request->data['Achievement']['favorite']
                                                        : $achievement['Achievement']['favorite'],
                                                'placeholder' => 'favorite',
                                                'class' => 'input-edit'
                                            ]);
                                        ?>
                                    </div>
                                    </br>

                                    <div class="edit-qty-btn">
                                        <button class="btn btn-success" type="submit"  role="button">
                                            <span><i class="glyphicon glyphicon-ok"></i></span>
                                        </button>
                                        <button class="btn btn-danger" type="button"  role="button" onclick="cancel('#favorite');">
                                            <span><i class="glyphicon glyphicon-remove"></i></span>
                                        </button>
                                    </div>
                                    </br>
                                </div>
                            </div>

                        </div>


                        <div class="box lightbox-content">
                            <div class="arc-pic">
                                <?php echo $this->Html->image('top.png', ['class' => 'arc-pic-icon']) ?>
                            </div>
                            <div class="arc-detail">
                                <h3>Top Score</h3>
                                <div id="top-score">
                                    <h3><?php echo $achievement['Achievement']['top_score']; ?></h3>
                                    <a class="btn btn-danger" onclick="edit('#top-score')">Edit</a>
                                    </br>
                                    </br>
                                </div>
                                <div class="edit-qty-group hide" id="top-score-edit-group">
                                    <div class="edit-qty-number">
                                        <?php
                                        echo $this->Form->input('top_score', [
                                            'label' => false,
                                            'div' => false,
                                            'type' => 'number',
                                            'min' => 1,
                                            'required',
                                            'value' =>
                                                isset($this->request->data['Achievement']['top_score']) ?
                                                    $this->request->data['Achievement']['top_score']
                                                    : $achievement['Achievement']['top_score'],
                                            'placeholder' => 'Top Score',
                                            'class' => 'input-edit'
                                        ]);
                                        ?>
                                    </div>
                                    </br>

                                    <div class="edit-qty-btn">
                                        <button class="btn btn-success" type="submit"  role="button">
                                            <span><i class="glyphicon glyphicon-ok"></i></span>
                                        </button>
                                        <button class="btn btn-danger" type="button"  role="button" onclick="cancel('#top-score');">
                                            <span><i class="glyphicon glyphicon-remove"></i></span>
                                        </button>
                                    </div>
                                    </br>
                                </div>
                            </div>

                        </div>


                        <div class="box lightbox-content">
                            <div class="arc-pic">
                                <?php echo $this->Html->image('upload.png', ['class' => 'arc-pic-icon']) ?>
                            </div>
                            <div class="arc-detail">
                                <h3>Upload</h3>
                                <div id="upload">
                                    <h3><?php echo $achievement['Achievement']['upload']; ?> Times</h3>
                                    <a class="btn btn-danger" onclick="edit('#upload')">Edit</a>
                                    </br>
                                    </br>
                                </div>
                            </div>
                            <div class="edit-qty-group hide" id="upload-edit-group">
                                <div class="edit-qty-number">
                                    <?php
                                    echo $this->Form->input('upload', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'number',
                                        'min' => 1,
                                        'required',
                                        'value' =>
                                            isset($this->request->data['Achievement']['upload']) ?
                                                $this->request->data['Achievement']['upload']
                                                : $achievement['Achievement']['upload'],
                                        'placeholder' => 'Upload',
                                        'class' => 'input-edit'
                                    ]);
                                    ?>
                                </div>
                                </br>

                                <div class="edit-qty-btn">
                                    <button class="btn btn-success" type="submit"  role="button">
                                        <span><i class="glyphicon glyphicon-ok"></i></span>
                                    </button>
                                    <button class="btn btn-danger" type="button"  role="button" onclick="cancel('#upload');">
                                        <span><i class="glyphicon glyphicon-remove"></i></span>
                                    </button>
                                </div>
                                </br>
                            </div>

                        </div>


                        <div class="box lightbox-content">
                            <div class="arc-pic">
                                <?php echo $this->Html->image('genius.png', ['class' => 'arc-pic-icon']) ?>
                            </div>
                            <div class="arc-detail">
                                <h3>Genius</h3>
                                <div id="genius">
                                    <h3><?php echo $achievement['Achievement']['genius']; ?></h3>
                                    <a class="btn btn-danger" onclick="edit('#genius')">Edit</a>
                                    </br>
                                    </br>
                                </div>
                                <div class="edit-qty-group hide" id="genius-edit-group">
                                    <div class="edit-qty-number">
                                        <?php
                                        echo $this->Form->input('genius', [
                                            'label' => false,
                                            'div' => false,
                                            'type' => 'number',
                                            'min' => 1,
                                            'required',
                                            'value' =>
                                                isset($this->request->data['Achievement']['genius']) ?
                                                    $this->request->data['Achievement']['genius']
                                                    : $achievement['Achievement']['genius'],
                                            'placeholder' => 'Genius',
                                            'class' => 'input-edit'
                                        ]);
                                        ?>
                                    </div>
                                    </br>

                                    <div class="edit-qty-btn">
                                        <button class="btn btn-success" type="submit"  role="button">
                                            <span><i class="glyphicon glyphicon-ok"></i></span>
                                        </button>
                                        <button class="btn btn-danger" type="button"  role="button" onclick="cancel('#genius');">
                                            <span><i class="glyphicon glyphicon-remove"></i></span>
                                        </button>
                                    </div>
                                    </br>
                                </div>

                            </div>

                        </div>


                        <div class="box lightbox-content">
                            <div class="arc-pic">
                                <?php echo $this->Html->image('share.png', ['class' => 'arc-pic-icon']) ?>
                            </div>
                            <div class="arc-detail">
                                <h3>Sharity</h3>
                                <div id="share">
                                    <h3><?php echo $achievement['Achievement']['share'] ?></h3>
                                    <a class="btn btn-danger" onclick="edit('#share')">Edit</a>
                                    </br>
                                    </br>
                                </div>

                                <div class="edit-qty-group hide" id="share-edit-group">
                                    <div class="edit-qty-number">
                                        <?php
                                        echo $this->Form->input('share', [
                                            'label' => false,
                                            'div' => false,
                                            'type' => 'number',
                                            'min' => 1,
                                            'required',
                                            'value' =>
                                                isset($this->request->data['Achievement']['share']) ?
                                                    $this->request->data['Achievement']['share']
                                                    : $achievement['Achievement']['share'],
                                            'placeholder' => 'Share',
                                            'class' => 'input-edit'
                                        ]);
                                        ?>
                                    </div>
                                    </br>

                                    <div class="edit-qty-btn">
                                        <button class="btn btn-success" type="submit"  role="button">
                                            <span><i class="glyphicon glyphicon-ok"></i></span>
                                        </button>
                                        <button class="btn btn-danger" type="button"  role="button" onclick="cancel('#share');">
                                            <span><i class="glyphicon glyphicon-remove"></i></span>
                                        </button>
                                    </div>
                                    </br>
                                </div>

                            </div>

                        </div>

                        <?php echo $this->Form->end(); ?>


                    </div><!--/panel-body-->
                </div><!--/panel-->
            </div><!--/panel-body-->

        </div><!--/.col-xs-12-->
    </div><!--/.row-->
</div>

<script>

    $(function(){


    });

    function ready(){



    }

    function edit(id){

        var taget =  id + "-edit-group";

        $(taget).removeClass("hide");
        $(taget).show();
        $(id).hide();
    }

    function cancel(id){

        var taget =  id + "-edit-group";
        $(taget).hide();
        $(id).show();
    }



</script>

