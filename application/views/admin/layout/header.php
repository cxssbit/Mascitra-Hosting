<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MASCITRAHOSTING - Web Hosting Indonesia, Murah, Terbaik 2018</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?=base_url()?>assets/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/admin/css/cs-skin-elastic.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/admin/css/style.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/admin/css/lib/datatable/dataTables.bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/selectize.default.css')?>">

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php if($this->router->fetch_class()=='dashboard'){echo'active';}?>">
                        <a href="<?=base_url('dashboard')?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>

                    <li class="menu-title">Backend</li>
                    <li class="<?php if($this->router->fetch_class()=='article'){echo'active';}?>">
                        <a href="<?=base_url('article')?>"><i class="menu-icon fa fa-book"></i>Artikel </a>
                    </li>
                    <li class="<?php if($this->router->fetch_class()=='user'){echo'active';}?>">
                        <a href="<?=base_url('user')?>"><i class="menu-icon fa fa-user"></i>User </a>
                    </li>
                    <li class="<?php if($this->router->fetch_class()=='message'){echo'active';}?>">
                        <a href="<?=base_url('message')?>"><i class="menu-icon far fa-envelope"></i>Message </a>
                    </li>
                    <li class="<?php if($this->router->fetch_class()=='team'){echo'active';}?>">
                        <a href="<?=base_url('team')?>"><i class="menu-icon fas fa-users"></i>Team </a>
                    </li>

                    <li class="menu-title">Frontend</li>
                    <li class="<?php if($this->router->fetch_class()=='contact'){echo'active';}?>">
                        <a href="<?=base_url('contact/manager')?>"><i class="menu-icon fas fa-address-book"></i>Kontak </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="<?=base_url()?>assets/img/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                        <?php $notif=$this->AdminModel->Notif();?>
                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <?php if($this->AdminModel->NotifRow()>0){?>
                                <span class="count bg-primary"><?=$this->AdminModel->NotifRow()?></span>
                                <?php }?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have <?=$this->AdminModel->NotifRow()?> Mails</p>
                                <?php foreach($notif as $data){?>
                                <a class="dropdown-item media" href="<?=base_url('message/view/'.$data->id)?>">
                                    <span class="photo media-left"><i class="far fa-envelope"></i></span>
                                    <div class="message media-body">
                                        <span class="name float-left"><?=$data->name?></span>
                                        <span class="time float-right">Just now</span>
                                        <p><?=character_limiter($data->message,50)?></p>
                                    </div>
                                </a>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?=base_url()?>assets/img/avatar/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="<?=base_url('auth/logout')?>"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->