<!DOCTYPE html>
<html lang="en">
    <head>
        <title>.: Programa de Información Delictiva :.</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo base_url("recursos/images/icons/favicon.ico");?>">
        <link rel="apple-touch-icon" href="<?php echo base_url("recursos/images/icons/favicon.png");?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url("recursos/images/icons/favicon-72x72.png");?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url("recursos/images/icons/favicon-114x114.png");?>">
        <!--Loading bootstrap css-->
        <?php 
            foreach ($css as $item) {
                echo $item;
            }
        ?>
        
        <?php 
        //    load js files
            foreach ($js as $item) {
                echo $item;
            }
        ?>
    </head>
    <body>
        <div>
            <!--BEGIN THEME SETTING-->
            <div id="theme-setting">
                <a href="#" data-toggle="dropdown" data-step="1" data-intro="&lt;b&gt;Many styles&lt;/b&gt; and &lt;b&gt;colors&lt;/b&gt; be created for you. Let choose one and enjoy it!"
                   data-position="left" class="btn-theme-setting"><i class="fa fa-cog"></i></a>
                <div class="content-theme-setting">
                    <select id="list-style" class="form-control">
                        <option value="style1">Flat Squared style</option>
                        <option value="style2">Flat Rounded style</option>
                        <option value="style3" selected="selected">Flat Border style</option>
                    </select>
                </div>
            </div>
            <!--END THEME SETTING-->
            <!--BEGIN BACK TO TOP-->
            <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
            <!--END BACK TO TOP-->
            <!--BEGIN TOPBAR-->
            <div id="header-topbar-option-demo" class="page-header-topbar">
                <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
                    <div class="navbar-header">
                        <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">.:Programa de Información Delictiva.:</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
                    <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>

                        <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                            <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control text-white"/></div>
                        </form>
                        <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">Noticias:</span>
                            <ul id="news-update" class="ticker list-unstyled">
                                <li>Bienvenido al Programa de Información Delictiva - Secretaría de Seguridad Pública</li>
                                <li>Subdirección de Desarrollo de Sistemas Ext. 4020 - 5158 - 6159.</li>
                            </ul>
                        </div>
                        <ul class="nav navbar navbar-top-links navbar-right mbn">
                            <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>

                            </li>
                            <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-envelope fa-fw"></i><span class="badge badge-orange">7</span></a>

                            </li>
                            <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-tasks fa-fw"></i><span class="badge badge-yellow">8</span></a>

                            </li>
                            <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="<?php echo base_url("recursos/images/avatar/48.jpg");?>" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">Moisés Cruz</span>&nbsp;<span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-user pull-right">
                                    <li><a href="#"><i class="fa fa-user"></i>Mi Perfil</a></li>
                                    <li><a href="#"><i class="fa fa-calendar"></i>Mi Calendario</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i>Mi Bandeja<span class="badge badge-danger">3</span></a></li>
                                    <li><a href="#"><i class="fa fa-tasks"></i>Mis Tareas<span class="badge badge-success">7</span></a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-lock"></i>Pantalla de Bloqueo</a></li>
                                    <li><a href="<?php echo site_url("auth/logout");?>"><i class="fa fa-key"></i>Cerrar Sesión</a></li>
                                </ul>
                            </li>
                            <li id="topbar-chat" class="hidden-xs"><a href="javascript:void(0)" data-step="4" data-intro="&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker" data-position="left" class="btn-chat" title="Chat"><i class="fa fa-comments"></i><span class="badge badge-info">3</span></a></li>
                        </ul>
                    </div>
                </nav>
                <!--BEGIN MODAL CONFIG PORTLET-->
                <div id="modal-config" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                                    &times;</button>
                                <h4 class="modal-title">
                                    Modal title</h4>
                            </div>
                            <div class="modal-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget
                                    porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.
                                    Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-default">
                                    Close</button>
                                <button type="button" class="btn btn-primary">
                                    Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END MODAL CONFIG PORTLET-->
            </div>

            <!--BEGIN CHAT FORM-->
            <div id="chat-form" class="fixed">
                <div class="chat-inner">
                    <h2 class="chat-header">
                        <a href="javascript:;" class="chat-form-close pull-right"><i class="glyphicon glyphicon-remove">
                            </i></a><i class="fa fa-user"></i>&nbsp; Chat &nbsp;<span class="badge badge-info">3</span></h2>
                    <div id="group-1" class="chat-group">
                        <strong>Favorites</strong><a href="#"><span class="user-status is-online"></span> <small>
                                Verna Morton</small> <span class="badge badge-info">2</span></a><a href="#"><span
                                class="user-status is-online"></span> <small>Delores Blake</small> <span class="badge badge-info is-hidden">
                                0</span></a><a href="#"><span class="user-status is-busy"></span> <small>Nathaniel Morris</small>
                            <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-idle"></span>
                            <small>Boyd Bridges</small> <span class="badge badge-info is-hidden">0</span></a><a
                            href="#"><span class="user-status is-offline"></span> <small>Meredith Houston</small>
                            <span class="badge badge-info is-hidden">0</span></a></div>
                    <div id="group-2" class="chat-group">
                        <strong>Office</strong><a href="#"><span class="user-status is-busy"></span> <small>
                                Ann Scott</small> <span class="badge badge-info is-hidden">0</span></a><a href="#"><span
                                class="user-status is-offline"></span> <small>Sherman Stokes</small> <span class="badge badge-info is-hidden">
                                0</span></a><a href="#"><span class="user-status is-offline"></span> <small>Florence
                                Pierce</small> <span class="badge badge-info">1</span></a></div>
                    <div id="group-3" class="chat-group">
                        <strong>Friends</strong><a href="#"><span class="user-status is-online"></span> <small>
                                Willard Mckenzie</small> <span class="badge badge-info is-hidden">0</span></a><a
                            href="#"><span class="user-status is-busy"></span> <small>Jenny Frazier</small>
                            <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span>
                            <small>Chris Stewart</small> <span class="badge badge-info is-hidden">0</span></a><a
                            href="#"><span class="user-status is-offline"></span> <small>Olivia Green</small>
                            <span class="badge badge-info is-hidden">0</span></a></div>
                </div>
                <div id="chat-box" style="top: 400px">
                    <div class="chat-box-header">
                        <a href="#" class="chat-box-close pull-right"><i class="glyphicon glyphicon-remove">
                            </i></a><span class="user-status is-online"></span><span class="display-name">Willard
                            Mckenzie</span> <small>Online</small>
                    </div>
                    <div class="chat-content">
                        <ul class="chat-box-body">
                            <li>
                                <p>
                                    <img src="<?php echo base_url("recursos/images/avatar/128.jpg");?>" class="avt" /><span class="user">John Doe</span><span
                                        class="time">09:33</span></p>
                                <p>
                                    Hi Swlabs, we have some comments for you.</p>
                            </li>
                            <li class="odd">
                                <p>
                                    <img src="<?php echo base_url("recursos/images/avatar/48.jpg");?>" class="avt" /><span class="user">Swlabs</span><span
                                        class="time">09:33</span></p>
                                <p>
                                    Hi, we're listening you...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="chat-textarea">
                        <input placeholder="Type your message" class="form-control" /></div>
                </div>
            </div>
            <!--END CHAT FORM-->
            <!--END TOPBAR-->
            <style type="text/css">
                .row .col-lg-12 .col-lg-3 .member-team {
                    text-align: center;
                }
            </style>

            <div id="wrapper">
