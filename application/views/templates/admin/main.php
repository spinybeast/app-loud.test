<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>App-Loud</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap/main.css">
    <style>
        input, textarea {
            width: 98%;
        }
    </style>
    <script src="/assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="/media/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <?php
        foreach ($css as $style => $display) {
            echo HTML::style($style);
        }
        foreach ($js as $script) {
            echo HTML::script($script);
        }
    ?>
</head>
<body>
<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <span class="brand">App-Loud admin</span>

                <div class="nav-collapse collapse">

                    <ul class="nav">
                        <li class="active">
                            <a href="<?= Route::url('admin'); ?>">
                                <i class="icon-home icon-black"></i> Home
                            </a>
                        </li>
                    </ul>

                    <ul class="nav pull-right settings">
                        <li class="dropdown">
                            <ul class="dropdown-menu">
                                <li><a href="#">Account Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="#">System Settings</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav pull-right settings">
                        <li><a href="#" class="tip icon logout" data-original-title="Settings"
                               data-placement="bottom"><i class="icon-large icon-cog"></i></a></li>
                        <li class="divider-vertical"></li>
                        <li>
                            <a href="<?= Route::url('admin', array('controller' => 'auth', 'action' => 'logout')); ?>"
                               class="tip icon logout" data-original-title="Logout" data-placement="bottom">
                                <i class="icon-large icon-off"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav pull-right settings">
                        <li class="divider-vertical"></li>
                    </ul>

                    <p class="navbar-text pull-right">
                        Logged in as <strong><?= $adminName ?></strong>
                    </p>

                    <ul class="nav pull-right settings">
                        <li class="divider-vertical"></li>
                    </ul>

                    <!--                    <div class="pull-right">-->
                    <!--                        <form class="form-search form-inline" style="margin:5px 0 0 0;" method="post">-->
                    <!--                            <div class="input-append">-->
                    <!--                                <input type="text" name="keyword" class="span2 search-query" placeholder="Search">-->
                    <!--                                <button type="submit" class="btn"><i class="icon-search"></i></button>-->
                    <!--                            </div>-->
                    <!--                        </form>-->
                    <!--                    </div>-->

                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="tabbable tabs-left well">
        <ul class="nav nav-tabs">
            <li class="nav-header">Navigation</li>
            <li><a href="/" target="_blank">Site</a></li>
            <li <?= Request::current()->controller() == 'Category' ? 'class="active"' : '' ?> >
                <a href="/admin/category/">Categories</a>
            </li>
            <li <?= Request::current()->controller() == 'Review' ? 'class="active"' : '' ?> >
                <a href="/admin/review/">Reviews</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active"> <?= $content ?></div>
        </div>
    </div>
</div>
<!--/row-fluid-->

<hr>

<footer align="center">
    <p>Copyright &copy; <?= date('Y') ?> <strong>App-Loud</strong></p>
</footer>
<script>
    // enable tooltips
    $(".tip").tooltip();
</script>

</body>
</html>
