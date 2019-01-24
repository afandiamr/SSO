<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
$controller = $this->request->getParam('controller');
$action = $this->request->getParam('action');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/ico" sizes="16x16" href="../img/ict.ico">
        <title>Inovasi Cipta Teknologi Apps</title>
        <!--<link href="css/colors/blue.css" id="theme" rel="stylesheet">-->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <?=
        $this->Html->css([
            '../bootstrap/dist/css/bootstrap.min.css',
            '../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css',
            '../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css',
            '../plugins/bower_components/bootstrap-select/bootstrap-select.min.css',
            'style.css', 'colors/blue.css', 'animate.css',
            '../plugins/bower_components/toast-master/css/jquery.toast.css',
        ])
        ?>
        <?= $this->fetch('css') ?>
        <?=
        $this->Html->script([
            '../plugins/bower_components/jquery/dist/jquery.min.js',
            'lib/websocket.js',
            '../bootstrap/dist/js/tether.min.js',
            '../bootstrap/dist/js/bootstrap.min.js',
            '../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js',
            '../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js',
            '../plugins/bower_components/footable/js/footable.all.min.js',
            '../plugins/bower_components/styleswitcher/jQuery.style.switcher.js',
            'jquery.slimscroll.js',
            'waves.js',
            'jsrsasign-latest-all-min.js',
            'custom.min.js',
            '../plugins/bower_components/toast-master/js/jquery.toast.js',
            'toastr.js',
            'footable-init.js',
        ])
        ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('script') ?>
    </head>

    <body>
        <!-- Preloader -->
        <!--        <div class="preloader">
                    <div class="cssload-speeding-wheel"></div>
                </div>-->
        <div id="wrapper">
            <!-- Top Navigation -->
            <nav class="navbar navbar-default navbar-static-top m-b-0">
                <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                    <!-- Logo -->
                    <div class="top-left-part">
                        <a class="logo" href="index.html">
                            <!-- Logo icon image, you can use font-icon also --><b><img src="../plugins/images/eliteadmin-logo.png" alt="home" /></b>
                            <!-- Logo text image you can use text also --><span class="hidden-xs"><img src="../plugins/images/eliteadmin-text.png" alt="home" /></span> </a>
                    </div>
                    <!-- /Logo -->
                    <!-- This is for mobile view search and menu icon -->
                    <ul class="nav navbar-top-links navbar-left hidden-xs">
                        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                        <li>
                            <form role="search" class="app-search hidden-xs">
                                <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                        </li>
                    </ul>
                    <!-- This is the message dropdown -->
                    <ul class="nav navbar-top-links navbar-right pull-right">
                        <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                            </a>
                            <ul class="dropdown-menu mailbox animated bounceInDown">
                                <li>
                                    <div class="drop-title">You have 4 new messages</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <a href="#">
                                            <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <a href="#">
                                            <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <a href="#">
                                            <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <a href="#">
                                            <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                            <!-- /.dropdown-messages -->
                        </li>
                        <!-- /.dropdown -->
                        <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
                                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                            </a>
                            <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                                <li>
                                    <a href="#">
                                        <div>
                                            <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div>
                                            <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                            <!-- /.dropdown-tasks -->
                        </li>
                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?= '..' . str_replace("/", "\\", ltrim($current_user['photo_dir'] . $current_user['photo'], 'webroot')); ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?= $current_user['profile']['nick_name'] ?></b> </a>
                            <ul class="dropdown-menu dropdown-user animated flipInY">
                                <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                        <!-- /.dropdown -->
                    </ul>
                </div>
                <!-- /.navbar-header -->
                <!-- /.navbar-top-links -->
                <!-- /.navbar-static-side -->
            </nav>
            <!-- End Top Navigation -->
            <!-- Left navbar-header -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                            <!-- input-group -->
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                                </span> </div>
                            <!-- /input-group -->
                        </li>
                        <li class="user-pro">
                            <a href="#" class="waves-effect"><img src="<?= '..' . str_replace("/", "\\", ltrim($current_user['photo_dir'] . $current_user['photo'], 'webroot')); ?>" alt="user-img" class="img-circle"> <span class="hide-menu"> <?= $current_user['profile']['full_name'] ?><span class="fa arrow"></span></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
<!--                                <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>-->
                                <li><a href="<?= $this->request->getAttribute("webroot") . 'users/akun' ?>"><i class="ti-settings"></i> Account Setting</a></li>
                                <li><a href="<?= $this->request->getAttribute("webroot") . 'users/logout' ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!--<li class="nav-small-cap m-t-10">--- Main Menu</li>-->
                        <?php
                        foreach ($menu as $authorized) {
                            if ($authorized->lead == '0') {
//                                                    debug($parent_id);die();
                                $activeHead = (($parent_id[0]['alias'] == $authorized->alias) && ($parent_id[0]['controller_name'] == $authorized->controller_name) ) ? 'active' : '';
                                echo '<li class="' . $activeHead . '" >';
                                echo '<a class=" waves-effect ' . $activeHead . '" href="javascript:void(0);"  > <i class="linea-icon linea-basic" data-icon="' . $authorized->icon . '"></i><span class="hide-menu"> ' . $authorized->alias . '<span class="fa arrow"></span></span></a>';
                                echo '<ul class="nav nav-second-level">';
                                if ($authorized->has('children')) {
                                    $param = '';
                                    foreach ($authorized->children as $child) {
                                        $path = $child->alias;
                                        //                            debug($child);die();
                                        $active = ($child_id[0]['alias'] == $path && $child_id[0]['controller_name'] == $child->controller_name ) ? 'active' : '';
                                        $pathchild = $child->controller_name . "/" . $child->method_name;
                                        if (!empty($child->parameter)) {
                                            $var_array = array("virtualParam" => $child->parameter);
                                            extract($var_array, EXTR_PREFIX_SAME, "wddx");
                                            $param = "/" . "${virtualParam}";
                                        }
                                        echo '<li><a  class="' . $active . '" href=' . $this->request->getAttribute("webroot") . $pathchild . $param . '> ' . $child->alias . '</a></li>';
                                    }
                                }
                                echo '</ul>';
                                echo '</li>';
                            } else {
                                $pathParrent = $authorized->controller_name . "/" . $authorized->method_name;
                                $paramParent = '';
                                $activeHead = (($parent_id[0]['alias'] == $authorized->alias) ) ? 'active' : '';
                                //                    debug($controller);die();
                                if (!empty($authorized->parameter)) {

                                    $var_array = array("color" => "blue");
                                    extract($var_array, EXTR_PREFIX_SAME, "wddx");
                                    $paramParent = "/" . "$color";
                                }
                                echo '<li >';
                                echo '<a class= waves-effect' . $activeHead . ' href="' . $this->request->getAttribute("webroot") . $pathParrent . $paramParent . '"><i class="linea-icon linea-basic" data-icon="' . $authorized->icon . '"></i><span class="hide-menu"> ' . $authorized->alias . '</span></a>';
                                echo '</li>';
                            }
                        }
                        ?>
                        <li class="nav-small-cap">--- Support</li>
                        <li><a href="" class=""><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Documentation</span></a></li>
                        <li><a href="" class=""><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Report Bugs</span></a></li>
                        <li><a href="" class=""><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Faqs</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- Left navbar-header end -->
            <!-- Page Content -->
            <div id="page-wrapper">
                <?php echo $this->Flash->render() ?>
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title"><?= $child_id[0]['alias'] ?></h4> </div>
                        <?php
                        $this->Breadcrumbs->setTemplates([
                            'wrapper' => '{{content}}',
                            'separator' => '<li><span{{innerAttrs}}></span></li>'
                        ]);
                        ?>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="<?= $this->request->getAttribute("webroot") . $menu[0]['controller_name'] . "/" . $menu[0]['method_name'] ?>">Home</a></li>
                                <?php
                                if ($child_id[0]['parent_id'] == 0) {
                                    if ($child_id[0]['alias'] != "Beranda") {
                                        $this->Breadcrumbs->add([
                                            ['title' => ucwords($parent_id[0]['alias']), 'url' => ['controller' => $controller, 'action' => 'index']]
                                        ]);
                                    }
                                } else {
                                    $this->Breadcrumbs->add([
                                        ['title' => ucwords($parent_id[0]['alias'])],
                                        ['title' => ucwords($child_id[0]['alias']), 'url' => ['controller' => $controller, 'action' => $action]]
                                    ]);
                                }
                                echo $this->Breadcrumbs->render();
                                ?>
                            </ol>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <?php echo $this->fetch('content') ?>
                </div>
                <!-- /.container-fluid -->
                <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
            </div>
            <!-- /#page-wrapper -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul>
                            <li><b>Layout Options</b></li>
                            <li>
                                <div class="checkbox checkbox-info">
                                    <input id="checkbox1" type="checkbox" class="fxhdr">
                                    <label for="checkbox1"> Fix Header </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-warning">
                                    <input id="checkbox2" type="checkbox" class="fxsdr">
                                    <label for="checkbox2"> Fix Sidebar </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox4" type="checkbox" class="open-close">
                                    <label for="checkbox4"> Toggle Sidebar </label>
                                </div>
                            </li>
                        </ul>
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                            <li><a href="javascript:void(0)" theme="blue" class="blue-theme working">4</a></li>
                            <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                            <li><b>With Dark sidebar</b></li>
                            <br/>
                            <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                            <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#wrapper -->
    </body>

</html>


