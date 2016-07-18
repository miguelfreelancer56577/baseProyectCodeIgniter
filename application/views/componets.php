
nombre: <input type="text" name="minombre" />
fecha: <input type="text" name="fecha" id="fecha" class="fecha"/>

<h3>Click to show a simple image gallery</h3>
<p>
    <a class="fancybox" href="<?php echo base_url("recursos/images/gallery/1.jpg"); ?>" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="<?php echo base_url("recursos/images/gallery/1.jpg"); ?>" alt="" class="imgFancybox" /></a>
    <a class="fancybox" href="<?php echo base_url("recursos/images/gallery/2.jpg"); ?>" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="<?php echo base_url("recursos/images/gallery/2.jpg"); ?>" alt="" class="imgFancybox" /></a>
    <a class="fancybox" href="<?php echo base_url("recursos/images/gallery/3.jpg"); ?>" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="<?php echo base_url("recursos/images/gallery/3.jpg"); ?>" alt="" class="imgFancybox"/></a>
</p>
<script type="text/javascript">
    $('.fancybox').fancybox().find("img").css({
        "width": "10%"
    });
</script>


<script type="text/javascript">
    $(".fecha").datepicker();
</script>

<br /><br />
<div class="panel panel-yellow">
    <div class="panel-heading">
        Login Form</div>
    <div class="panel-body pan">
        <form class="cmxform" id="commentForm" method="get" action="">
            <p>
                <label for="cname">Name (required, at least 2 characters)</label>
                <input id="cname" name="name" minlength="2" type="text" required class="form-control">
            </p>
            <p>
                <label for="cemail">E-Mail (required)</label>
                <input id="cemail" type="email" name="email" required class="form-control">
            </p>
            <p>
                <label for="curl">URL (optional)</label>
                <input id="curl" type="url" name="url" class="form-control">
            </p>
            <p>
                <label for="ccomment">Your comment (required)</label>
                <textarea id="ccomment" name="comment" required class="form-control"></textarea>
            </p>
            <p>
                <input class="submit" type="submit" value="Submit">
            </p>
        </form>
    </div>
</div>

<script type="text/javascript">
    $("#commentForm").validate();
</script>


<div class="page-content">
    <div id="tab-general">
        <div id="sum_box" class="row mbl">
            <div class="col-sm-6 col-md-3">
                <div class="panel profit db mbm">
                    <div class="panel-body">
                        <p class="icon">
                            <i class="icon fa fa-shopping-cart"></i>
                        </p>
                        <h4 class="value">
                            <span data-counter="" data-start="10" data-end="50" data-step="1" data-duration="0">
                            </span><span>$</span></h4>
                        <p class="description">
                            Profit description</p>
                        <div class="progress progress-sm mbn">
                            <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                 style="width: 80%;" class="progress-bar progress-bar-success">
                                <span class="sr-only">80% Complete (success)</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="panel income db mbm">
                    <div class="panel-body">
                        <p class="icon">
                            <i class="icon fa fa-money"></i>
                        </p>
                        <h4 class="value">
                            <span>215</span><span>$</span></h4>
                        <p class="description">
                            Income detail</p>
                        <div class="progress progress-sm mbn">
                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                 style="width: 60%;" class="progress-bar progress-bar-info">
                                <span class="sr-only">60% Complete (success)</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="panel task db mbm">
                    <div class="panel-body">
                        <p class="icon">
                            <i class="icon fa fa-signal"></i>
                        </p>
                        <h4 class="value">
                            <span>215</span></h4>
                        <p class="description">
                            Task completed</p>
                        <div class="progress progress-sm mbn">
                            <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                 style="width: 50%;" class="progress-bar progress-bar-danger">
                                <span class="sr-only">50% Complete (success)</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="panel visit db mbm">
                    <div class="panel-body">
                        <p class="icon">
                            <i class="icon fa fa-group"></i>
                        </p>
                        <h4 class="value">
                            <span>128</span></h4>
                        <p class="description">
                            Visitor description</p>
                        <div class="progress progress-sm mbn">
                            <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                 style="width: 70%;" class="progress-bar progress-bar-warning">
                                <span class="sr-only">70% Complete (success)</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mbl">
            <div class="col-lg-8">
                <div class="panel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="mbs">
                                    Network Performance</h4>
                                <p class="help-block">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem...</p>
                                <div id="area-chart-spline" style="width: 100%; height: 300px">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h4 class="mbm">
                                    Server Status</h4>
                                <span class="task-item">CPU Usage (25 - 32 cpus)<small class="pull-right text-muted">40%</small><div
                                        class="progress progress-sm">
                                        <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 40%;" class="progress-bar progress-bar-orange">
                                            <span class="sr-only">40% Complete (success)</span></div>
                                    </div>
                                </span><span>Memory Usage (2.5GB)<small class="pull-right text-muted">60%</small><div
                                        class="progress progress-sm">
                                        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 60%;" class="progress-bar progress-bar-blue">
                                            <span class="sr-only">60% Complete (success)</span></div>
                                    </div>
                                </span><span>Disk Usage (C:\ 120GB , D:\ 430GB)<small class="pull-right text-muted">55%</small><div
                                        class="progress progress-sm">
                                        <div role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 55%;" class="progress-bar progress-bar-green">
                                            <span class="sr-only">55% Complete (success)</span></div>
                                    </div>
                                </span><span>Domain (2/5)<small class="pull-right text-muted">66%</small><div class="progress progress-sm">
                                        <div role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 66%;" class="progress-bar progress-bar-yellow">
                                            <span class="sr-only">66% Complete (success)</span></div>
                                    </div>
                                </span><span>Database (90/100)<small class="pull-right text-muted">90%</small><div
                                        class="progress progress-sm">
                                        <div role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 90%;" class="progress-bar progress-bar-pink">
                                            <span class="sr-only">90% Complete (success)</span></div>
                                    </div>
                                </span><span>Email Account (25/50)<small class="pull-right text-muted">50%</small><div
                                        class="progress progress-sm">
                                        <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 50%;" class="progress-bar progress-bar-violet">
                                            <span class="sr-only">50% Complete (success)</span></div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="portlet box">
                    <div class="portlet-header">
                        <div class="caption">
                            Chats</div>
                    </div>
                    <div class="portlet-body">
                        <div class="chat-scroller">
                            <ul class="chats">
                                <li class="in">
                                    <img src="<?php echo base_url("recursos/images/avatar/48.jpg"); ?>" class="avatar img-responsive" />
                                    <div class="message">
                                        <span class="chat-arrow"></span><a href="#" class="chat-name">Admin</a>&nbsp;<span
                                            class="chat-datetime">at July 06, 2014 17:06</span><span class="chat-body">Lorem ipsum
                                            dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                                            ut laoreet dolore magna aliquam erat volutpat.</span></div>
                                </li>
                                <li class="out">
                                    <img src="<?php echo base_url("recursos/images/avatar/48.jpg"); ?>" class="avatar img-responsive" />
                                    <div class="message">
                                        <span class="chat-arrow"></span><a href="#" class="chat-name">Admin</a>&nbsp;<span
                                            class="chat-datetime">at July 06, 2014 18:06</span><span class="chat-body">Lorem ipsum
                                            dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                                            ut laoreet dolore magna aliquam erat volutpat.</span></div>
                                </li>
                                <li class="in">
                                    <img src="<?php echo base_url("recursos/images/avatar/48.jpg"); ?>" class="avatar img-responsive" />
                                    <div class="message">
                                        <span class="chat-arrow"></span><a href="#" class="chat-name">Admin</a>&nbsp;<span
                                            class="chat-datetime">at July 06, 2014 17:06</span><span class="chat-body">Lorem ipsum
                                            dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                                            ut laoreet dolore magna aliquam erat volutpat.</span></div>
                                </li>
                                <li class="out">
                                    <img src="<?php echo base_url("recursos/images/avatar/48.jpg"); ?>" class="avatar img-responsive" />
                                    <div class="message">
                                        <span class="chat-arrow"></span><a href="#" class="chat-name">Admin</a>&nbsp;<span
                                            class="chat-datetime">at July 06, 2014 18:06</span><span class="chat-body">Lorem ipsum
                                            dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                                            ut laoreet dolore magna aliquam erat volutpat.</span></div>
                                </li>
                                <li class="in">
                                    <img src="<?php echo base_url("recursos/images/avatar/48.jpg"); ?>" class="avatar img-responsive" />
                                    <div class="message">
                                        <span class="chat-arrow"></span><a href="#" class="chat-name">Admin</a>&nbsp;<span
                                            class="chat-datetime">at July 06, 2014 17:06</span><span class="chat-body">Lorem ipsum
                                            dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                                            ut laoreet dolore magna aliquam erat volutpat.</span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="chat-form">
                            <div class="input-group">
                                <input id="input-chat" type="text" placeholder="Type a message here..." class="form-control" /><span
                                    id="btn-chat" class="input-group-btn">
                                    <button type="button" class="btn btn-green">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mbl">
            <div class="col-lg-4">
                <div class="panel">
                    <div class="panel-body">
                        <div class="profile">
                            <div style="margin-bottom: 15px" class="row">
                                <div class="col-xs-12 col-sm-8">
                                    <h2>
                                        John Doe</h2>
                                    <p>
                                        <strong>About:</strong> Web Designer / UI.</p>
                                    <p>
                                        <strong>Hobbies:</strong> Read, out with friends, listen to music, draw and learn
                                        new things.</p>
                                    <p>
                                        <strong class="mrs">Skills:</strong><span class="label label-green mrs">html5</span><span
                                            class="label label-green mrs">css3</span><span class="label label-green mrs">jquery</span></p>
                                </div>
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <figure><img src="<?php echo base_url("recursos/images/avatar/128.jpg"); ?>" alt="" style="display: inline-block" class="img-responsive img-circle"/>
                                        <figcaption class="ratings"><p><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star"></span></a><a href="#"><span class="fa fa-star-o"></span></a></p></figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="row text-center divider">
                                <div class="col-xs-12 col-sm-4 emphasis">
                                    <h2>
                                        <strong>20,7K</strong></h2>
                                    <p>
                                        <small>Followers</small>
                                    </p>
                                    <button class="btn btn-yellow btn-block">
                                        <span class="fa fa-plus-circle"></span>&nbsp; Follow
                                    </button>
                                </div>
                                <div class="col-xs-12 col-sm-4 emphasis">
                                    <h2>
                                        <strong>245</strong></h2>
                                    <p>
                                        <small>Following</small>
                                    </p>
                                    <button class="btn btn-blue btn-block">
                                        <span class="fa fa-user"></span>&nbsp; Profile
                                    </button>
                                </div>
                                <div class="col-xs-12 col-sm-4 emphasis">
                                    <h2>
                                        <strong>43</strong></h2>
                                    <p>
                                        <small>Snippets</small>
                                    </p>
                                    <div class="btn-group dropup">
                                        <button type="button" data-toggle="dropdown" class="btn btn-orange dropdown-toggle">
                                            <span class="fa fa-gear"></span>&nbsp; Options
                                        </button>
                                        <ul role="menu" class="dropdown-menu pull-right text-left">
                                            <li><a href="#"><span class="fa fa-envelope"></span>&nbsp; Send an email</a></li>
                                            <li><a href="#"><span class="fa fa-list"></span>&nbsp; Add or remove from a list</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#"><span class="fa fa-warning"></span>&nbsp; Report this user for spam</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" role="button" class="btn disabled">Unfollow</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="portlet box">
                    <div class="portlet-header">
                        <div class="caption">
                            Todo List</div>
                    </div>
                    <div style="overflow: hidden;" class="portlet-body">
                        <ul class="todo-list sortable">
                            <li class="clearfix"><span class="drag-drop"><i></i></span>
                                <div class="todo-check pull-left">
                                    <input type="checkbox" value="" /></div>
                                <div class="todo-title">
                                    Sed ut perspiciatis unde omnis iste</div>
                                <div class="todo-actions pull-right clearfix">
                                    <a href="#" class="todo-complete"><i class="fa fa-check"></i></a><a href="#" class="todo-edit">
                                        <i class="fa fa-edit"></i></a><a href="#" class="todo-remove"><i class="fa fa-trash-o">
                                        </i></a>
                                </div>
                            </li>
                            <li class="clearfix"><span class="drag-drop"><i></i></span>
                                <div class="todo-check pull-left">
                                    <input type="checkbox" value="" /></div>
                                <div class="todo-title">
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</div>
                                <div class="todo-actions pull-right clearfix">
                                    <a href="#" class="todo-complete"><i class="fa fa-check"></i></a><a href="#" class="todo-edit">
                                        <i class="fa fa-edit"></i></a><a href="#" class="todo-remove"><i class="fa fa-trash-o">
                                        </i></a>
                                </div>
                            </li>
                            <li class="clearfix"><span class="drag-drop"><i></i></span>
                                <div class="todo-check pull-left">
                                    <input type="checkbox" value="" /></div>
                                <div class="todo-title">
                                    Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                    minus id</div>
                                <div class="todo-actions pull-right clearfix">
                                    <a href="#" class="todo-complete"><i class="fa fa-check"></i></a><a href="#" class="todo-edit">
                                        <i class="fa fa-edit"></i></a><a href="#" class="todo-remove"><i class="fa fa-trash-o">
                                        </i></a>
                                </div>
                            </li>
                            <li class="clearfix"><span class="drag-drop"><i></i></span>
                                <div class="todo-check pull-left">
                                    <input type="checkbox" value="" /></div>
                                <div class="todo-title">
                                    Et harum quidem rerum facilis est</div>
                                <div class="todo-actions pull-right clearfix">
                                    <a href="#" class="todo-complete"><i class="fa fa-check"></i></a><a href="#" class="todo-edit">
                                        <i class="fa fa-edit"></i></a><a href="#" class="todo-remove"><i class="fa fa-trash-o">
                                        </i></a>
                                </div>
                            </li>
                            <li class="clearfix"><span class="drag-drop"><i></i></span>
                                <div class="todo-check pull-left">
                                    <input type="checkbox" value="" /></div>
                                <div class="todo-title">
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</div>
                                <div class="todo-actions pull-right clearfix">
                                    <a href="#" class="todo-complete"><i class="fa fa-check"></i></a><a href="#" class="todo-edit">
                                        <i class="fa fa-edit"></i></a><a href="#" class="todo-remove"><i class="fa fa-trash-o">
                                        </i></a>
                                </div>
                            </li>
                            <li class="clearfix"><span class="drag-drop"><i></i></span>
                                <div class="todo-check pull-left">
                                    <input type="checkbox" value="" /></div>
                                <div class="todo-title">
                                    Excepteur sint occaecat cupidatat non proident</div>
                                <div class="todo-actions pull-right clearfix">
                                    <a href="#" class="todo-complete"><i class="fa fa-check"></i></a><a href="#" class="todo-edit">
                                        <i class="fa fa-edit"></i></a><a href="#" class="todo-remove"><i class="fa fa-trash-o">
                                        </i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="timeline-centered timeline-sm">
                    <article class="timeline-entry">
                        <div class="timeline-entry-inner">
                            <time datetime="2014-01-10T03:45" class="timeline-time"><span>12:45 AM</span><span>Today</span></time>
                            <div class="timeline-icon bg-violet"><i class="fa fa-exclamation"></i></div>
                            <div class="timeline-label"><h4 class="timeline-title">New Project</h4>

                                <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial.</p></div>
                        </div>
                    </article>
                    <article class="timeline-entry left-aligned">
                        <div class="timeline-entry-inner">
                            <time datetime="2014-01-10T03:45" class="timeline-time"><span>9:15 AM</span><span>Today</span></time>
                            <div class="timeline-icon bg-green"><i class="fa fa-group"></i></div>
                            <div class="timeline-label bg-green"><h4 class="timeline-title">Job Meeting</h4>

                                <p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette.</p></div>
                        </div>
                    </article>
                    <article class="timeline-entry">
                        <div class="timeline-entry-inner">
                            <time datetime="2014-01-09T13:22" class="timeline-time"><span>8:20 PM</span><span>04/03/2013</span></time>
                            <div class="timeline-icon bg-orange"><i class="fa fa-paper-plane"></i></div>
                            <div class="timeline-label bg-orange"><h4 class="timeline-title">Daily Feeds</h4>

                                <p><img src="http://lorempixel.com/45/45/nature/3/" alt="" class="timeline-img pull-left"/>Parsley amaranth tigernut silver beet maize fennel spinach ricebean black-eyed. Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial.</p></div>
                        </div>
                        <div class="timeline-entry-inner">
                            <div style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);" class="timeline-icon"><i class="fa fa-plus"></i></div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-4">
                <div id="my-calendar"></div>
            </div>
            <div class="col-lg-4">
                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portlet box">
                                <div class="portlet-header">
                                    <div class="caption">
                                        Pie with gradient fill</div>
                                    <div class="tools">
                                        <i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config"
                                                                           class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="pie-with-gradient-fill">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="portlet box">
                    <div class="portlet-header">
                        <div class="caption">
                            Scatter plot</div>
                        <div class="tools">
                            <i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config"
                                                               class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="angular-gauge">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div id="title-breadcrumb-page" class="row">
        <div class="col-lg-12">
            <h4 class="mbxl">
                Let hover on the option you like and click "Demo" button to see it works!</h4>
            <div class="page-title-breadcrumb option-demo">
                <div class="page-header pull-left">
                    <div class="page-title">
                        Title & Breadcrumb Left</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li><a href="#">Layouts</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">Title &amp; Breadcrumb</li>
                </ol>
                <div class="clearfix">
                </div>
            </div>
            <div class="mbxxl">
            </div>
            <div class="page-title-breadcrumb option-demo">
                <div class="page-header pull-left">
                    <div class="page-title pull-left mrm">
                        Title & Breadcrumb with Label</div>
                    <span class="label label-primary pull-left mtm">New</span></div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li><a href="#">Layouts</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">Title &amp; Breadcrumb</li>
                </ol>
                <div class="clearfix">
                </div>
            </div>
            <div class="mbxxl">
            </div>
            <div class="page-title-breadcrumb option-demo">
                <div class="page-header pull-left">
                    <div class="page-title mrm">
                        Title & Subtitle & Breadcrumb Inline Left</div>
                    <div class="page-subtitle">
                        Lorem ipsum dolor sit amet</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li><a href="#">Layouts</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">Title &amp; Breadcrumb</li>
                </ol>
                <div class="clearfix">
                </div>
            </div>
            <div class="mbxxl">
            </div>
            <div class="page-title-breadcrumb option-demo">
                <div class="page-header pull-right">
                    <div class="page-title">
                        Title & Breadcrumb Inline Right</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-left">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li><a href="#">Layouts</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">Title &amp; Breadcrumb</li>
                </ol>
                <div class="clearfix">
                </div>
            </div>
            <div class="mbxxl">
            </div>
            <div class="page-title-breadcrumb option-demo">
                <div class="page-header pull-right">
                    <div class="page-title mrm">
                        Title & Subtitle & Breadcrumb Inline Right</div>
                    <div class="page-subtitle">
                        Lorem ipsum dolor sit amet</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-left">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li><a href="#">Layouts</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">Title &amp; Breadcrumb</li>
                </ol>
                <div class="clearfix">
                </div>
            </div>
            <div class="mbxxl">
            </div>
            <div class="page-title-breadcrumb option-demo">
                <div class="page-header pull-right">
                    <div class="page-toolbar">
                        <button type="button" data-hover="tooltip" title="Download" class="btn btn-blue">
                            <i class="fa fa-download"></i>
                        </button>
                        &nbsp;
                        <button type="button" data-hover="tooltip" title="Send Message" class="btn btn-yellow">
                            <i class="fa fa-envelope-o"></i>
                        </button>
                        &nbsp;
                        <div class="btn-group">
                            <button type="button" data-toggle="dropdown" class="btn btn-orange dropdown-toggle">
                                Setting &nbsp;<span class="caret"></span></button>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#">Dropdown link</a></li>
                                <li><a href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-left">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li><a href="#">Layouts</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">Title &amp; Breadcrumb</li>
                </ol>
                <div class="clearfix">
                </div>
            </div>
            <div class="mbxxl">
            </div>
            <div class="page-title-breadcrumb option-demo">
                <div class="page-header">
                    <div class="page-title mrm">
                        Title & Subtitle & Breadcrumb Inline Left</div>
                    <div class="page-subtitle">
                        Lorem ipsum dolor sit amet</div>
                </div>
                <hr />
                <ol class="breadcrumb page-breadcrumb">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li><a href="#">Layouts</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">Title &amp; Breadcrumb</li>
                </ol>
                <div class="clearfix">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="page-content">
    <div id="tab-general">
        <div class="row mbl">
            <div class="col-lg-12">
                <div class="col-md-12">
                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                Contacts Form</div>
                            <div class="panel-body pan">
                                <form action="#">
                                    <div class="form-body pal">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputName" class="control-label">
                                                        Name</label>
                                                    <div class="input-icon right">
                                                        <i class="fa fa-user"></i>
                                                        <input id="inputName" type="text" placeholder="" class="form-control" /></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputEmail" class="control-label">
                                                        E-mail</label>
                                                    <div class="input-icon right">
                                                        <i class="fa fa-envelope"></i>
                                                        <input id="inputEmail" type="text" placeholder="" class="form-control" /></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSubject" class="control-label">
                                                Subject</label>
                                            <div class="input-icon right">
                                                <i class="fa fa-tag"></i>
                                                <input id="inputSubject" type="text" placeholder="" class="form-control" /></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMessage" class="control-label">
                                                Message</label><textarea rows="5" class="form-control"></textarea></div>
                                        <div class="form-group mbn">
                                            <div class="checkbox">
                                                <label>
                                                    <input tabindex="5" type="checkbox" />&nbsp; Send a copy to my e-mail address</label></div>
                                        </div>
                                    </div>
                                    <div class="form-actions text-right pal">
                                        <button type="submit" class="btn btn-primary">
                                            Send message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="panel panel-blue" style="background:#fff;">
                            <div class="panel-heading">
                                Comment Form</div>
                            <div class="panel-body pan">
                                <form action="#">
                                    <div class="form-body pal">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="inputName" class="control-label">
                                                        Name</label>
                                                    <div class="input-icon right">
                                                        <i class="fa fa-user"></i>
                                                        <input id="inputName" type="text" placeholder="" class="form-control" /></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="inputEmail" class="control-label">
                                                        E-mail</label>
                                                    <div class="input-icon right">
                                                        <i class="fa fa-envelope"></i>
                                                        <input id="inputeMail" type="text" placeholder="" class="form-control" /></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="inputWebsite" class="control-label">
                                                        Website</label>
                                                    <div class="input-icon right">
                                                        <i class="fa fa-globe"></i>
                                                        <input id="inputWebsite" type="text" placeholder="" class="form-control" /></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMessage" class="control-label">
                                                Comment</label><textarea rows="5" class="form-control"></textarea>
                                            <small class="help-block">You may use these HTML tags and attributes: &#x3C;a href=&#x22;&#x22;
                                                title=&#x22;&#x22;&#x3E;, &#x3C;abbr title=&#x22;&#x22;&#x3E;, &#x3C;acronym title=&#x22;&#x22;&#x3E;,
                                                &#x3C;b&#x3E;, &#x3C;blockquote cite=&#x22;&#x22;&#x3E;, &#x3C;cite&#x3E;, &#x3C;code&#x3E;,
                                                &#x3C;del datetime=&#x22;&#x22;&#x3E;, &#x3C;em&#x3E;, &#x3C;i&#x3E;, &#x3C;q cite=&#x22;&#x22;&#x3E;,
                                                &#x3C;strike&#x3E;, &#x3C;strong&#x3E;. </small>
                                        </div>
                                        <div class="form-group mbn">
                                            <label for="inputSubject" class="control-label">
                                                Enter characters below</label>
                                            <div class="input-icon right">
                                                <i class="fa fa-font"></i>
                                                <input id="inputSubject" type="text" placeholder="" class="form-control" /></div>
                                        </div>
                                    </div>
                                    <div class="form-actions text-right pal">
                                        <button type="submit" class="btn btn-primary">
                                            Add comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                Login Form</div>
                            <div class="panel-body pan">
                                <form action="#" class="form-horizontal" id="logueo">
                                    <div class="form-body pal">
                                        <div class="form-group">
                                            <label for="inputName" class="col-md-3 control-label">
                                                Name</label>
                                            <div class="col-md-9">
                                                <div class="input-icon right">
                                                    <i class="fa fa-user"></i>
                                                    <input id="nombre" name="nombre" type="text" placeholder="" class="form-control" /></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword" class="col-md-3 control-label">
                                                Password</label>
                                            <div class="col-md-9">
                                                <div class="input-icon right">
                                                    <i class="fa fa-lock"></i>
                                                    <input id="contrasena" name="contrasena" type="text" placeholder="" class="form-control" /></div>
                                                <span class="help-block mbn"><a href="#"><small>Forgot password?</small> </a></span>
                                            </div>
                                        </div>
                                        <div class="form-group mbn">
                                            <div class="col-md-offset-3 col-md-6">
                                                <div class="checkbox">
                                                    <label>
                                                        <input tabindex="5" type="checkbox" />&nbsp; Keep me logged in</label></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions pal">
                                        <div class="form-group mbn">
                                            <div class="col-md-offset-3 col-md-6">
                                                <a href="#" class="btn btn-primary">Register</a>&nbsp;&nbsp;
                                                <button type="submit" class="btn btn-primary">
                                                    Login</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="panel panel-orange">
                            <div class="panel-heading">
                                Registration form</div>
                            <div class="panel-body pan">
                                <form action="#">
                                    <div class="form-body pal">
                                        <div class="form-group">
                                            <div class="input-icon right">
                                                <i class="fa fa-user"></i>
                                                <input id="inputName" type="text" placeholder="Username" class="form-control" /></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-icon right">
                                                <i class="fa fa-envelope"></i>
                                                <input id="inputEmail" type="text" placeholder="Email address" class="form-control" /></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-icon right">
                                                <i class="fa fa-lock"></i>
                                                <input id="inputPassword" type="password" placeholder="Password" class="form-control" /></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-icon right">
                                                <i class="fa fa-lock"></i>
                                                <input id="inputConfirmPassword" type="password" placeholder="Confirm Password" class="form-control" /></div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input id="inputFirstName" type="text" placeholder="First Name" class="form-control" /></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input id="inputLastName" type="text" placeholder="Last Name" class="form-control" /></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>Gender</option>
                                                <option value="0">Male</option>
                                                <option value="1">Female</option>
                                                <option value="2">Other</option>
                                            </select></div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input tabindex="5" type="checkbox" />&nbsp; I want to receive news and special
                                                    offers</label></div>
                                        </div>
                                        <div class="form-group mbn">
                                            <div class="checkbox">
                                                <label>
                                                    <input tabindex="5" type="checkbox" />&nbsp; I agree with the Terms and Conditions</label></div>
                                        </div>
                                    </div>
                                    <div class="form-actions text-right pal">
                                        <button type="submit" class="btn btn-primary">
                                            Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="panel panel-violet">
                            <div class="panel-heading">
                                Order services</div>
                            <div class="panel-body pan">
                                <form action="#">
                                    <div class="form-body pal">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-user"></i>
                                                        <input id="inputName" type="text" placeholder="Name" class="form-control" /></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-briefcase"></i>
                                                        <input id="inputCompany" type="text" placeholder="Company" class="form-control" /></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-envelope"></i>
                                                        <input id="inputEmail" type="text" placeholder="E-mail" class="form-control" /></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-phone"></i>
                                                        <input id="inputPhone" type="text" placeholder="Phone" class="form-control" /></div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Interested in</option>
                                                        <option value="design">Design</option>
                                                        <option value="development">Development</option>
                                                        <option value="illustration">Illustration</option>
                                                        <option value="brading">Branding</option>
                                                        <option value="video">Video</option>
                                                    </select></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Budget</option>
                                                        <option value="0">Less than 5000$</option>
                                                        <option value="1">5000$ - 10000$</option>
                                                        <option value="2">10000$ - 20000$</option>
                                                        <option value="3">More than 20000$</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-calendar"></i>
                                                        <input id="inputStartDate" type="text" placeholder="Expected start date" class="form-control" /></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-calendar"></i>
                                                        <input id="inputFinishDate" type="text" placeholder="Expected finish date" class="form-control" /></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="inputIncludeFile" type="file" placeholder="Inlcude some file" /></div>
                                        <div class="form-group mbn">
                                            <textarea rows="5" placeholder="Tell us about your project" class="form-control"></textarea></div>
                                    </div>
                                    <div class="form-actions text-right pal">
                                        <button type="submit" class="btn btn-primary">
                                            Send request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-pink">
                            <div class="panel-heading">
                                Review form</div>
                            <div class="panel-body pan">
                                <form action="#">
                                    <div class="form-body pal">
                                        <div class="form-group">
                                            <div class="input-icon right">
                                                <i class="fa fa-user"></i>
                                                <input id="inputName" type="text" placeholder="Your name" class="form-control" /></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-icon right">
                                                <i class="fa fa-envelope"></i>
                                                <input id="inputEmail" type="text" placeholder="Your e-mail" class="form-control" /></div>
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="5" placeholder="Text of the review" class="form-control"></textarea></div>
                                        <div class="form-group">
                                            <div class="rating">
                                                <label for="quality-5">
                                                    <i class="fa fa-star"></i>
                                                </label>
                                                <label for="quality-4">
                                                    <i class="fa fa-star"></i>
                                                </label>
                                                <label for="quality-3">
                                                    <i class="fa fa-star"></i>
                                                </label>
                                                <label for="quality-2">
                                                    <i class="fa fa-star text-yellow"></i>
                                                </label>
                                                <label for="quality-1">
                                                    <i class="fa fa-star text-yellow"></i>
                                                </label>
                                                Quality of the product
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="rating">
                                                <label for="reliability-5">
                                                    <i class="fa fa-star"></i>
                                                </label>
                                                <label for="reliability-4">
                                                    <i class="fa fa-star text-yellow"></i>
                                                </label>
                                                <label for="reliability-3">
                                                    <i class="fa fa-star text-yellow"></i>
                                                </label>
                                                <label for="reliability-2">
                                                    <i class="fa fa-star text-yellow"></i>
                                                </label>
                                                <label for="reliability-1">
                                                    <i class="fa fa-star text-yellow"></i>
                                                </label>
                                                Reliability of the product
                                            </div>
                                        </div>
                                        <div class="form-group mbn">
                                            <div class="rating">
                                                <label for="overall-5">
                                                    <i class="fa fa-star"></i>
                                                </label>
                                                <label for="overall-4">
                                                    <i class="fa fa-star"></i>
                                                </label>
                                                <label for="overall-3">
                                                    <i class="fa fa-star text-yellow"></i>
                                                </label>
                                                <label for="overall-2">
                                                    <i class="fa fa-star text-yellow"></i>
                                                </label>
                                                <label for="overall-1">
                                                    <i class="fa fa-star text-yellow"></i>
                                                </label>
                                                Overall rating
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions text-right pal">
                                        <button type="submit" class="btn btn-primary">
                                            Submit a review</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="panel panel-grey">
                            <div class="panel-heading">
                                Checkout form</div>
                            <div class="panel-body pan">
                                <form action="#">
                                    <div class="form-body pal">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-icon">
                                                        <i class="fa fa-user"></i>
                                                        <input id="inputFirstName" type="text" placeholder="First Name" class="form-control" /></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-icon">
                                                        <i class="fa fa-user"></i>
                                                        <input id="inputLastName" type="text" placeholder="Last Name" class="form-control" /></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-icon">
                                                        <i class="fa fa-envelope"></i>
                                                        <input id="inputEmail" type="text" placeholder="E-mail" class="form-control" /></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="input-icon">
                                                        <i class="fa fa-phone"></i>
                                                        <input id="inputPhone" type="text" placeholder="Phone" class="form-control" /></div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Country</option>
                                                    </select></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input id="inputCity" type="text" placeholder="City" class="form-control" /></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input id="inputPostCode" type="text" placeholder="Post code" class="form-control" /></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id="inputAddress" type="text" placeholder="Address" class="form-control" /></div>
                                        <div class="form-group">
                                            <textarea rows="5" placeholder="Additional info" class="form-control"></textarea></div>
                                        <hr />
                                        <div class="form-group">
                                            <div class="radio">
                                                <label class="radio-inline">
                                                    <input id="optionsVisa" type="radio" name="optionsRadios" value="Visa" checked="checked" />&nbsp;
                                                    Visa</label><label class="radio-inline"><input id="optionsMasterCard" type="radio"
                                                                                               name="optionsRadios" value="MasterCard" />&nbsp; MasterCard</label><label class="radio-inline"><input
                                                        id="optionsPayPal" type="radio" name="optionsRadios" value="PayPal" />&nbsp; PayPal</label></div>
                                        </div>
                                        <div class="form-group">
                                            <input id="inputNameCard" type="text" placeholder="Name on card" class="form-control" /></div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input id="inputCardNumber" type="text" placeholder="Card number" class="form-control" /></div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input id="inputCVV2" type="text" placeholder="CVV2" class="form-control" /></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mbn">
                                                    <label class="pts">
                                                        Expiration date</label></div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Month</option>
                                                    </select></div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group mbn">
                                                    <input id="inputYear" type="text" placeholder="Year" class="form-control" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions text-right pal">
                                        <button type="submit" class="btn btn-primary">
                                            Continue</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div id="tab-general">
        <div class="row mbl">
            <div class="col-lg-12">

                <div class="col-md-12">
                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                    </div>
                </div>

            </div>

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">Simple Table</div>
                            <div class="panel-body">
                                <table class="table table-hover" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Age</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Henry</td>
                                            <td>23</td>
                                            <td><span class="label label-sm label-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>John</td>
                                            <td>45</td>
                                            <td><span class="label label-sm label-info">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>30</td>
                                            <td><span class="label label-sm label-warning">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-green">
                            <div class="panel-heading">Bordered Table</div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Age</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Henry</td>
                                            <td>23</td>
                                            <td><span class="label label-sm label-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>John</td>
                                            <td>45</td>
                                            <td><span class="label label-sm label-info">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>30</td>
                                            <td><span class="label label-sm label-warning">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-red">
                            <div class="panel-heading">Contextual Row</div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Column</th>
                                            <th>Column</th>
                                            <th>Column</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="active">
                                            <td>1</td>
                                            <td>active</td>
                                            <td>active</td>
                                            <td>active</td>
                                        </tr>
                                        <tr class="success">
                                            <td>2</td>
                                            <td>success</td>
                                            <td>success</td>
                                            <td>success</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>3</td>
                                            <td>warning</td>
                                            <td>warning</td>
                                            <td>warning</td>
                                        </tr>
                                        <tr class="danger">
                                            <td>4</td>
                                            <td>danger</td>
                                            <td>danger</td>
                                            <td>danger</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-blue" style="background:#FFF;">
                            <div class="panel-heading">Variations Table</div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Age</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Henry</td>
                                            <td>23</td>
                                            <td><span class="label label-sm label-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>John</td>
                                            <td>45</td>
                                            <td><span class="label label-sm label-info">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>30</td>
                                            <td><span class="label label-sm label-warning">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th><i>4 People</i></th>
                                            <th></th>
                                            <th><i>1 Approved</i></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-violet">
                            <div class="panel-heading">Striped Table</div>
                            <div class="panel-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Age</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Henry</td>
                                            <td>23</td>
                                            <td><span class="label label-sm label-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>John</td>
                                            <td>45</td>
                                            <td><span class="label label-sm label-info">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>30</td>
                                            <td><span class="label label-sm label-warning">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-pink">
                            <div class="panel-heading">Condensed Table</div>
                            <div class="panel-body">
                                <table class="table table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Age</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Henry</td>
                                            <td>23</td>
                                            <td><span class="label label-sm label-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>John</td>
                                            <td>45</td>
                                            <td><span class="label label-sm label-info">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>30</td>
                                            <td><span class="label label-sm label-warning">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-grey">
                            <div class="panel-heading">Contextual Column</div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Column</th>
                                            <th>Column</th>
                                            <th>Column</th>
                                            <th>Column</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="active">active</td>
                                            <td class="success">success</td>
                                            <td class="warning">warning</td>
                                            <td class="danger">danger</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="active">active</td>
                                            <td class="success">success</td>
                                            <td class="warning">warning</td>
                                            <td class="danger">danger</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="active">active</td>
                                            <td class="success">success</td>
                                            <td class="warning">warning</td>
                                            <td class="danger">danger</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="active">active</td>
                                            <td class="success">success</td>
                                            <td class="warning">warning</td>
                                            <td class="danger">danger</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="active">active</td>
                                            <td class="success">success</td>
                                            <td class="warning">warning</td>
                                            <td class="danger">danger</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-orange">
                            <div class="panel-heading">Hover Table - Opion 1</div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Age</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Henry</td>
                                            <td>23</td>
                                            <td><span class="label label-sm label-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>John</td>
                                            <td>45</td>
                                            <td><span class="label label-sm label-info">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>30</td>
                                            <td><span class="label label-sm label-warning">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-green">
                            <div class="panel-heading">Hover Table - Opion 2</div>
                            <div class="panel-body">
                                <table class="table table-hover-color">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Age</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Henry</td>
                                            <td>23</td>
                                            <td><span class="label label-sm label-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>John</td>
                                            <td>45</td>
                                            <td><span class="label label-sm label-info">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>30</td>
                                            <td><span class="label label-sm label-warning">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Lahm</td>
                                            <td>15</td>
                                            <td><span class="label label-sm label-danger">Blocked</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>

<div class="page-content">
    <div id="tab-general">
        <div class="row mbl">
            <div class="col-lg-12">

                <div class="col-md-12">
                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                    </div>
                </div>

            </div>

            <div class="col-lg-12">
                <div class="col-lg-6">
                    <iframe src="http://player.vimeo.com/video/22439234" style="width: 100%; height:340px; border:0"></iframe>
                </div>
                <div class="col-lg-6"><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                        expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                        Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                    <ol class="pll">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit</li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><h2 class="mbxl">Our Team</h2>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="member-team"><img src="http://lorempixel.com/640/480/business/1/" class="img-responsive"/>

                                <h3>Michelle Bates
                                    <small>CEO</small>
                                </h3>
                                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae.</p>
                                <ul class="social-icons list-unstyled list-inline mbl mtl">
                                    <li><a href="#" data-hover="tooltip" data-original-title="facebook" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-hover="tooltip" data-original-title="google Plus" class="googleplus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" data-hover="tooltip" data-original-title="skype" class="skype"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#" data-hover="tooltip" data-original-title="twitter" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="member-team"><img src="http://lorempixel.com/640/480/business/7/" class="img-responsive"/>

                                <h3>Nathan Murray
                                    <small>Project Manager</small>
                                </h3>
                                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae.</p>
                                <ul class="social-icons list-unstyled list-inline mbl mtl">
                                    <li><a href="#" data-hover="tooltip" data-original-title="facebook" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-hover="tooltip" data-original-title="google Plus" class="googleplus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" data-hover="tooltip" data-original-title="skype" class="skype"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#" data-hover="tooltip" data-original-title="twitter" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="member-team"><img src="http://lorempixel.com/640/480/business/1/" class="img-responsive"/>

                                <h3>Rachel Jordan
                                    <small>Designer</small>
                                </h3>
                                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae.</p>
                                <ul class="social-icons list-unstyled list-inline mbl mtl">
                                    <li><a href="#" data-hover="tooltip" data-original-title="facebook" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-hover="tooltip" data-original-title="google Plus" class="googleplus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" data-hover="tooltip" data-original-title="skype" class="skype"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#" data-hover="tooltip" data-original-title="twitter" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="member-team"><img src="http://lorempixel.com/640/480/business/7/" class="img-responsive"/>

                                <h3>Margaret Adams
                                    <small>Developer</small>
                                </h3>
                                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae.</p>
                                <ul class="social-icons list-unstyled list-inline mbl mtl">
                                    <li><a href="#" data-hover="tooltip" data-original-title="facebook" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-hover="tooltip" data-original-title="google Plus" class="googleplus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" data-hover="tooltip" data-original-title="skype" class="skype"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#" data-hover="tooltip" data-original-title="twitter" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>


<div class="page-content">
    <div id="tab-general">
        <div class="row mbl">
            <div class="col-lg-12">

                <div class="col-md-12">
                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                    </div>
                </div>

            </div>

            <div class="col-lg-12">


                <div class="row">
                    <div class="col-md-12"><h2>Profile: John Doe</h2>

                        <div class="row mtl">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="text-center mbl"><img src="http://lorempixel.com/640/480/business/1/" alt="" class="img-responsive"/></div>
                                    <div class="text-center mbl"><a href="#" class="btn btn-green"><i class="fa fa-upload"></i>&nbsp;
                                            Upload</a></div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <tbody>
                                        <tr>
                                            <td>User Name</td>
                                            <td>John Doe</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>name@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>Street 123, Avenue 45, Country</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td><span class="label label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>User Rating</td>
                                            <td><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Member Since</td>
                                            <td> Jun 03, 2014</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-9">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab-edit" data-toggle="tab">Edit Profile</a></li>
                                    <li><a href="#tab-messages" data-toggle="tab">Messages</a></li>
                                </ul>
                                <div id="generalTabContent" class="tab-content">
                                    <div id="tab-edit" class="tab-pane fade in active">
                                        <form action="#" class="form-horizontal"><h3>Account Setting</h3>

                                            <div class="form-group"><label class="col-sm-3 control-label">Email</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="email" placeholder="email@yourcompany.com" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Username</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="text" placeholder="username" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Password</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4"><input type="password" placeholder="password" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Confirm Password</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4"><input type="password" placeholder="password" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <h3>Profile Setting</h3>

                                            <div class="form-group"><label class="col-sm-3 control-label">First Name</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="text" placeholder="first name" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Last Name</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="text" placeholder="last name" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Gender</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9">
                                                            <div class="radio"><label class="radio-inline"><input type="radio" value="0" name="gender" checked="checked"/>&nbsp;
                                                                    Male</label><label class="radio-inline"><input type="radio" value="1" name="gender"/>&nbsp;
                                                                    Female</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Birthday</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4"><input id="datepicker-normal" type="text" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Marital Status</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4"><select class="form-control">
                                                                <option>Single</option>
                                                                <option>Married</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Position</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4"><select class="form-control">
                                                                <option>CEO</option>
                                                                <option>Director</option>
                                                                <option>Manager</option>
                                                                <option>Staff</option>
                                                                <option>Office Boy</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">About</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><textarea rows="3" class="form-control"></textarea></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <h3>Contact Setting</h3>

                                            <div class="form-group"><label class="col-sm-3 control-label">Mobile Phone</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="text" placeholder="mobile phone" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Website</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="text" placeholder="website" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Facebook</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="text" placeholder="facebook" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Twitter</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="text" placeholder="twitter" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <button type="submit" class="btn btn-green btn-block">Finish</button>
                                        </form>
                                    </div>
                                    <div id="tab-messages" class="tab-pane fade in">
                                        <div class="row mbl">
                                            <div class="col-lg-6"><span style="margin-left: 15px"></span><input type="checkbox"/><a href="#" class="btn btn-success btn-sm mlm mrm"><i class="fa fa-send-o"></i>&nbsp;
                                                    Write Mail</a><a href="#" class="btn btn-white btn-sm"><i class="fa fa-trash-o"></i>&nbsp;
                                                    Delete</a></div>
                                            <div class="col-lg-6">
                                                <div class="input-group"><input type="text" class="form-control"/><span class="input-group-btn"><button type="button" class="btn btn-white">Search</button></span></div>
                                            </div>
                                        </div>
                                        <div class="list-group"><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star text-yellow mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                                    class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp;
                                                - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span
                                                    class="fa fa-star text-yellow mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span
                                                    class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp;
                                                - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                                    style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span
                                                        class="glyphicon glyphicon-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span
                                                    class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp;
                                                - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                                    style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span
                                                        class="glyphicon glyphicon-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span
                                                    class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp;
                                                - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                                    style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span
                                                        class="glyphicon glyphicon-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span
                                                    class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </div>
</div>


<div class="page-content">
    <div id="tab-general">
        <div class="row mbl">
            <div class="col-lg-12">

                <div class="col-md-12">
                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                    </div>
                </div>

            </div>

            <div class="col-lg-12">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-body"><h4 class="block-heading">Style 1</h4>

                                <div id="nestable" class="dd">
                                    <ol class="dd-list">
                                        <li data-id="1" class="dd-item">
                                            <div class="dd-handle">Item 1</div>
                                        </li>
                                        <li data-id="2" class="dd-item">
                                            <div class="dd-handle">Item 2</div>
                                            <ol class="dd-list">
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd-handle">Item 3</div>
                                                </li>
                                                <li data-id="4" class="dd-item">
                                                    <div class="dd-handle">Item 4</div>
                                                </li>
                                                <li data-id="5" class="dd-item">
                                                    <div class="dd-handle">Item 5</div>
                                                    <ol class="dd-list">
                                                        <li data-id="6" class="dd-item">
                                                            <div class="dd-handle">Item 6</div>
                                                        </li>
                                                        <li data-id="7" class="dd-item">
                                                            <div class="dd-handle">Item 7</div>
                                                        </li>
                                                        <li data-id="8" class="dd-item">
                                                            <div class="dd-handle">Item 8</div>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li data-id="9" class="dd-item">
                                                    <div class="dd-handle">Item 9</div>
                                                </li>
                                                <li data-id="10" class="dd-item">
                                                    <div class="dd-handle">Item 10</div>
                                                </li>
                                            </ol>
                                        </li>
                                        <li data-id="11" class="dd-item">
                                            <div class="dd-handle">Item 11</div>
                                        </li>
                                        <li data-id="12" class="dd-item">
                                            <div class="dd-handle">Item 12</div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-body"><h4 class="block-heading">Style 2</h4>

                                <div id="nestable2" class="dd">
                                    <ol class="dd-list">
                                        <li data-id="13" class="dd-item">
                                            <div class="dd-handle">Item 13</div>
                                        </li>
                                        <li data-id="14" class="dd-item">
                                            <div class="dd-handle">Item 14</div>
                                        </li>
                                        <li data-id="15" class="dd-item">
                                            <div class="dd-handle">Item 15</div>
                                            <ol class="dd-list">
                                                <li data-id="16" class="dd-item">
                                                    <div class="dd-handle">Item 16</div>
                                                </li>
                                                <li data-id="17" class="dd-item">
                                                    <div class="dd-handle">Item 17</div>
                                                </li>
                                                <li data-id="18" class="dd-item">
                                                    <div class="dd-handle">Item 18</div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-body"><h4 class="block-heading">Style 3</h4>

                                <div id="nestable3" class="dd">
                                    <ol class="dd-list">
                                        <li data-id="13" class="dd-item dd3-item">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 13</div>
                                        </li>
                                        <li data-id="14" class="dd-item dd3-item">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 14</div>
                                        </li>
                                        <li data-id="15" class="dd-item dd3-item">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 15</div>
                                            <ol class="dd-list">
                                                <li data-id="16" class="dd-item dd3-item">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content">Item 16</div>
                                                </li>
                                                <li data-id="17" class="dd-item dd3-item">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content">Item 17</div>
                                                </li>
                                                <li data-id="18" class="dd-item dd3-item">
                                                    <div class="dd-handle dd3-handle"></div>
                                                    <div class="dd3-content">Item 18</div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>




        </div>
    </div>
</div>


<div class="page-content">
    <div id="tab-general">
        <div class="row mbl">
            <div class="col-lg-12">

                <div class="col-md-12">
                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                    </div>
                </div>

            </div>

            <div class="col-lg-12">


                <div class="row">
                    <div class="col-sm-3 col-md-2">
                        <div class="btn-group btn-group-sm">
                            <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Mail
                                &nbsp;<span class="caret"></span></button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">Mail</a></li>
                                <li><a href="#">Contacts</a></li>
                                <li><a href="#">Tasks</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default"><input type="checkbox" style="margin: 0; vertical-align: middle;" class="checkall"/></button>
                            <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">All</a></li>
                                <li><a href="#">None</a></li>
                                <li><a href="#">Read</a></li>
                                <li><a href="#">Unread</a></li>
                                <li><a href="#">Starred</a></li>
                                <li><a href="#">Unstarred</a></li>
                            </ul>
                        </div>
                        <button type="button" data-toggle="tooltip" title="Refresh" class="btn btn-default mls mrs"><span class="fa fa-refresh"></span></button>
                        <div class="btn-group">
                            <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">More
                                &nbsp;<span class="caret"></span></button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">Mark all as read</a></li>
                                <li class="divider"></li>
                                <li class="text-center pbm">
                                    <small class="text-muted">Select messages to see more actions</small>
                                </li>
                            </ul>
                        </div>
                        <div class="pull-right"><span class="text-muted"><b>1</b>&nbsp; – &nbsp;<b>50</b>&nbsp; of &nbsp;<b>277</b></span>

                            <div class="btn-group mlm">
                                <button type="button" class="btn btn-default"><span class="fa fa-chevron-left"></span></button>
                                <button type="button" class="btn btn-default"><span class="fa fa-chevron-right"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mtl mbl"></div>
                <div class="row">
                    <div class="col-sm-3 col-md-2"><a href="#" role="button" class="btn btn-danger btn-sm btn-block">COMPOSE</a>

                        <div class="mtm mbm"></div>
                        <div class="panel">
                            <div class="panel-body pan">
                                <ul style="background: #fff" class="nav nav-pills nav-stacked">
                                    <li class="active"><a href="#"><span class="badge pull-right">42</span><i class="fa fa-inbox fa-fw mrs"></i>Inbox</a></li>
                                    <li><a href="#"><i class="fa fa-star-o fa-fw mrs"></i>Starred</a></li>
                                    <li><a href="#"><i class="fa fa-info-circle fa-fw mrs"></i>Important</a></li>
                                    <li><a href="#"><i class="fa fa-plane fa-fw mrs"></i>Sent Mail</a></li>
                                    <li><a href="#"><span class="badge badge-orange pull-right">3</span><i class="fa fa-edit fa-fw mrs"></i>Drafts</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr/>
                        <div class="panel">
                            <div class="panel-body pan">
                                <ul style="background: #fff" class="nav nav-pills nav-stacked">
                                    <li class="active"><a href="#">Buddy Online</a></li>
                                    <li><a href="#"><i class="fa fa-circle text-yellow pull-right"></i>Home</a></li>
                                    <li><a href="#"><i class="fa fa-circle text-success pull-right"></i>Work</a></li>
                                    <li><a href="#"><i class="fa fa-circle text-red pull-right"></i>Family</a></li>
                                    <li><a href="#"><i class="fa fa-circle text-muted pull-right"></i>Other</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab"><span class="fa fa-inbox"></span>&nbsp;
                                    Primary</a></li>
                            <li><a href="#profile" data-toggle="tab"><span class="fa fa-user"></span>&nbsp;
                                    Social</a></li>
                            <li><a href="#messages" data-toggle="tab"><span class="fa fa-tags"></span>&nbsp;
                                    Promotions</a></li>
                            <li><a href="#settings" data-toggle="tab"><span class="fa fa-plus man"></span></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="list-group mail-box"><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                            class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                            style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                                class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                            class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                            style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                                class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                            class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                            style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                                class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                            class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                            style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                                class="fa fa-paperclip"></span></span></a></div>
                            </div>
                            <div id="profile" class="tab-pane fade in">
                                <div class="list-group mail-box"><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                            class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                            style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                                class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                            class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                            style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                                class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                            class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                            style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                                class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                            class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                            style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                                class="fa fa-paperclip"></span></span></a></div>
                            </div>
                            <div id="messages" class="tab-pane fade in">
                                <div class="list-group mail-box"><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                            class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                            style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#"
                                                                                                                                                                                                        class="list-group-item"><input
                                            type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span
                                            class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;"
                                                                                                                                                                                                        class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                                                                                                                                                                                        class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                            style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                                class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                            class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                            style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                                class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                            class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a></div>
                            </div>
                            <div id="settings" class="tab-pane fade in">
                                <div class="list-group mail-box"><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                            class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                            style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                                class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                            class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                            style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                                class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                            class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                            style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                                class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                            class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                                        &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                            style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                                class="fa fa-paperclip"></span></span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-content">
                            <ul class="list-inline item-details">
                                <li><a href="http://themifycloud.com">Admin templates</a></li>
                                <li><a href="http://themescloud.org">Bootstrap themes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>



            </div>




        </div>
    </div>
</div>

<div class="page-content">
    <div id="tab-general">
        <div class="row mbl">
            <div class="col-lg-12">

                <div class="col-md-12">
                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                    </div>
                </div>

            </div>

            <div class="col-lg-12">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">Line Chart</div>
                                <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
                            </div>
                            <div class="portlet-body">
                                <div id="line-chart" style="width: 100%; height:300px"></div>
                            </div>
                        </div>
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">Bar Chart</div>
                                <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
                            </div>
                            <div class="portlet-body">
                                <div id="bar-chart" style="width: 100%; height:300px"></div>
                            </div>
                        </div>
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">Area Chart</div>
                                <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
                            </div>
                            <div class="portlet-body">
                                <div id="area-chart" style="width: 100%; height:300px"></div>
                            </div>
                        </div>
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">Pie Chart</div>
                                <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
                            </div>
                            <div class="portlet-body">
                                <div id="pie-chart" style="width: 100%; height:300px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">Line Chart - Spline</div>
                                <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
                            </div>
                            <div class="portlet-body">
                                <div id="line-chart-spline" style="width: 100%; height:300px"></div>
                            </div>
                        </div>
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">Bar Chart - Stack</div>
                                <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
                            </div>
                            <div class="portlet-body"><h4 class="block-heading">Bar Chart - Stack</h4>

                                <div id="bar-chart-stack" style="width: 100%; height:300px"></div>
                            </div>
                        </div>
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">Area Chart - Spline</div>
                                <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
                            </div>
                            <div class="portlet-body">
                                <div id="Div1" style="width: 100%; height:300px"></div>
                            </div>
                        </div>
                        <div class="portlet box">
                            <div class="portlet-header">
                                <div class="caption">Percentiles Chart</div>
                                <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
                            </div>
                            <div class="portlet-body">
                                <div id="percentiles-chart" style="width: 100%; height:300px"></div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>




        </div>
    </div>
</div>


<div class="page-content">
    <div id="tab-general">
        <div class="row mbl">
            <div class="col-lg-12">

                <div class="col-md-12">
                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                    </div>
                </div>

            </div>

            <div class="col-lg-12">

                <div class="page-content">
                    <div class="row">
                        <div id="change-transitions" class="row">
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="bounce" class="btn btn-success btn-block">bounce</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="flash" class="btn btn-success btn-block">flash</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="pulse" class="btn btn-success btn-block">pulse</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="rubberBand" class="btn btn-success btn-block">rubberBand</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="shake" class="btn btn-success btn-block">shake</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="swing" class="btn btn-success btn-block">swing</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="tada" class="btn btn-success btn-block">tada</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="wobble" class="btn btn-success btn-block">wobble</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="bounceIn" class="btn btn-success btn-block">bounceIn</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="bounceInDown" class="btn btn-success btn-block">bounceInDown</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="bounceInLeft" class="btn btn-success btn-block">bounceInLeft</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="bounceInRight" class="btn btn-success btn-block">bounceInRight</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="bounceInUp" class="btn btn-success btn-block">bounceInUp</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="fadeIn" class="btn btn-success btn-block">fadeIn</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="fadeInDown" class="btn btn-success btn-block">fadeInDown</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="fadeInDownBig" class="btn btn-success btn-block">fadeInDownBig</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="fadeInLeft" class="btn btn-success btn-block">fadeInLeft</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="fadeInLeftBig" class="btn btn-success btn-block">fadeInLeftBig</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="fadeInRight" class="btn btn-success btn-block">fadeInRight</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="fadeInRightBig" class="btn btn-success btn-block">fadeInRightBig</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="fadeInUp" class="btn btn-success btn-block">fadeInUp</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="fadeInUpBig" class="btn btn-success btn-block">fadeInUpBig</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="flip" class="btn btn-success btn-block">flip</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="flipInX" class="btn btn-success btn-block">flipInX</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="flipInY" class="btn btn-success btn-block">flipInY</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="lightSpeedIn" class="btn btn-success btn-block">lightSpeedIn</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="rotateIn" class="btn btn-success btn-block">rotateIn</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="rotateInDownLeft" class="btn btn-success btn-block">rotateInDownLeft</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="rotateInDownRight" class="btn btn-success btn-block">rotateInDownRight</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="rotateInUpLeft" class="btn btn-success btn-block">rotateInUpLeft</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="rotateInUpRight" class="btn btn-success btn-block">rotateInUpRight</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="slideInDown" class="btn btn-success btn-block">slideInDown</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="slideInLeft" class="btn btn-success btn-block">slideInLeft</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="slideInRight" class="btn btn-success btn-block">slideInRight</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="box-placeholder">
                                    <button data-toggle="dropdown" data-value="rollIn" class="btn btn-success btn-block">rollIn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="page-content">
    <div id="tab-general">
        <div class="row mbl">
            <div class="col-lg-12">

                <div class="col-md-12">
                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                    </div>
                </div>

            </div>

            <div class="col-lg-12">
                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <div id="grid-layout-table-1" class="box jplist">
                                        <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                        <div class="jplist-panel box panel-top">
                                            <button type="button" data-control-type="reset" data-control-name="reset" data-control-action="reset" class="jplist-reset-btn btn btn-default">Reset<i class="fa fa-share mls"></i></button>
                                            <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" class="jplist-drop-down form-control">
                                                <ul class="dropdown-menu">
                                                    <li><span data-number="3"> 3 per page</span></li>
                                                    <li><span data-number="5"> 5 per page</span></li>
                                                    <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                    <li><span data-number="all"> view all</span></li>
                                                </ul>
                                            </div>
                                            <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                                <ul class="dropdown-menu">
                                                    <li><span data-path="default">Sort by</span></li>
                                                    <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                    <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                    <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                    <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                                                    <li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>
                                                    <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                                                    <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                    <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                                </ul>
                                            </div>
                                            <div class="text-filter-box">
                                                <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".title" type="text" value="" placeholder="Filter by Title" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter" class="form-control"/></div>
                                            </div>
                                            <div class="text-filter-box">
                                                <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".desc" type="text" value="" placeholder="Filter by Description" data-control-type="textbox" data-control-name="desc-filter" data-control-action="filter" class="form-control"/></div>
                                            </div>
                                            <div data-type="Page {current} of {pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                            <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" class="jplist-pagination"></div>
                                        </div>
                                        <div class="box text-shadow">
                                            <table class="demo-tbl"><item>1</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/arch-1.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">03/15/2012</p>

                                                    <p class="title">Arch</p>

                                                    <p class="desc">An arch is a structure that spans a space and supports a load. Arches appeared as early as the 2nd millennium BC in Mesopotamian brick architecture and their systematic use started with the Ancient Romans who were the first to apply the technique to a wide range of structures.</p>

                                                    <p class="like">5 Likes</p></td>
                                                </tr>
                                                <item>2</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/arch-2.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">03/18/2012</p>

                                                    <p class="title">Architecture</p>

                                                    <p class="desc">Architecture is both the process and product of planning, designing and construction. Architectural works, in the material form of buildings, are often perceived as cultural symbols and as works of art. Historical civilizations are often identified with their surviving architectural achievements.</p>

                                                    <p class="like">25 Likes</p></td>
                                                </tr>
                                                <item>3</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/autumn-1.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">01/16/2011</p>

                                                    <p class="title">Autumn</p>

                                                    <p class="desc">Autumn or Fall is one of the four temperate seasons. Autumn marks the transition from summer into winter, in September (Northern Hemisphere) or March (Southern Hemisphere) when the arrival of night becomes noticeably earlier. The equinoxes might be expected to be in the middle of their respective seasons, but temperature lag
                                                        (caused by the thermal latency of the ground and sea) means that seasons appear later than dates calculated from a purely astronomical perspective.</p>

                                                    <p class="like">12 Likes</p></td>
                                                </tr>
                                                <item>4</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/boats-1.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">02/24/2000</p>

                                                    <p class="title">Boats</p>

                                                    <p class="desc">A boat is a watercraft of any size designed to float or plane, to provide passage across water. Usually this water will be inland (lakes) or in protected coastal areas. However, boats such as the whaleboat were designed to be operated from a ship in an offshore environment. In naval terms, a boat is a vessel small enough to be
                                                        carried aboard another vessel (a ship).</p>

                                                    <p class="like">11 Likes</p></td>
                                                </tr>
                                                <item>5</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/book-1.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">11/22/2001</p>

                                                    <p class="title">Books</p>

                                                    <p class="desc">A book is a set of written, printed, illustrated, or blank sheets, made of ink, paper, parchment, or other materials, usually fastened together to hinge at one side. A single sheet within a book is called a leaf, and each side of a leaf is called a page. A book produced in electronic format is known as an electronic book
                                                        (e-book).</p>

                                                    <p class="like">100 Likes</p></td>
                                                </tr>
                                                <item>6</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/business-1.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">02/05/2004</p>

                                                    <p class="title">Business</p>

                                                    <p class="desc">A business (also known as enterprise or firm) is an organization engaged in the trade of goods, services, or both to consumers. Businesses are predominant in capitalist economies, where most of them are privately owned and administered to earn profit to increase the wealth of their owners. Businesses may also be not-for-profit or
                                                        state-owned. A business owned by multiple individuals may be referred to as a company, although that term also has a more precise meaning.</p>

                                                    <p class="like">15 Likes</p></td>
                                                </tr>
                                                <item>7</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/calendar-1.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">05/08/2003</p>

                                                    <p class="title">Calendar</p>

                                                    <p class="desc">A calendar is a system of organizing days for social, religious, commercial, or administrative purposes. This is done by giving names to periods of time, typically days, weeks, months, and years. The name given to each day is known as a date. Periods in a calendar (such as years and months) are usually, though not necessarily,
                                                        synchronized with the cycle of the sun or the moon.</p>

                                                    <p class="like">18 Likes</p></td>
                                                </tr>
                                                <item>8</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/car-1.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">09/01/2007</p>

                                                    <p class="title">Car</p>

                                                    <p class="desc">An automobile, autocar, motor car or car is a wheeled motor vehicle used for transporting passengers, which also carries its own engine or motor. Most definitions of the term specify that automobiles are designed to run primarily on roads, to have seating for one to eight people, to typically have four wheels, and to be
                                                        constructed principally for the transport of people rather than goods.</p>

                                                    <p class="like">7 Likes</p></td>
                                                </tr>
                                                <item>9</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/christmas-1.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">11/12/1998</p>

                                                    <p class="title">Christmas</p>

                                                    <p class="desc">Christmas or Christmas Day is an annual commemoration of the birth of Jesus Christ, celebrated generally on December as a religious and cultural holiday by billions of people around the world. A feast central to the Christian liturgical year, it closes the Advent season and initiates the twelve days of Christmastide. Christmas is
                                                        a civil holiday in many of the world's nations, is celebrated by an increasing number of non-Christians, and is an integral part of the Christmas and holiday season.</p>

                                                    <p class="like">29 Likes</p></td>
                                                </tr>
                                                <item>10</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/christmas-2.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">06/10/1995</p>

                                                    <p class="title">The Christmas Toy</p>

                                                    <p class="desc">The Christmas Toy is a 1986 made-for-TV movie by The Jim Henson Company. It originally aired on ABC on December 6, 1986, and was originally sponsored by Kraft Foods. Originally introduced by Kermit The Frog, it was released on VHS format in 1993. In 2008, HIT Entertainment (distributed by Lionsgate) released the special on DVD,
                                                        but edited out Kermit's appearance due to legal issues.</p>

                                                    <p class="like">35 Likes</p></td>
                                                </tr>
                                                <item>11</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/christmas-3.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">04/04/2006</p>

                                                    <p class="title">Christmas Tree</p>

                                                    <p class="desc">A Christmas tree is a decorated tree, usually an evergreen conifer such as pine or fir, traditionally associated with the celebration of Christmas. An artificial Christmas tree is an object made to resemble such a tree, usually made from polyvinyl chloride.</p>

                                                    <p class="like">86 Likes</p></td>
                                                </tr>
                                                <item>12</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/city-1.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">06/19/1981</p>

                                                    <p class="title">City</p>

                                                    <p class="desc">A city is a relatively large and permanent settlement. Although there is no agreement on how a city is distinguished from a town within general English language meanings, many cities have a particular administrative, legal, or historical status based on local law.</p>

                                                    <p class="like">125 Likes</p></td>
                                                </tr>
                                                <item>13</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/city-2.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">08/25/1991</p>

                                                    <p class="title">Capital City</p>

                                                    <p class="desc">A capital city (or just, capital) is the area of a country, province, region, or state considered to enjoy primary status; although there are exceptions, a capital is typically a city that physically encompasses the offices and meeting places of the seat of government and is usually fixed by law or by the constitution. An
                                                        alternative term is political capital, but this phrase has a second meaning based on an alternate sense of the word capital. The capital is often, but not necessarily, the largest city of its constituent area.</p>

                                                    <p class="like">191 Likes</p></td>
                                                </tr>
                                                <item>14</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/coffee-grass.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">02/02/2002</p>

                                                    <p class="title">Coffee</p>

                                                    <p class="desc">Coffee is a brewed beverage with a bitter, acidic flavor prepared from the roasted seeds of the coffee plant. The beans are found in coffee cherries, which grow on trees cultivated in over 70 countries, primarily in equatorial Latin America, Southeast Asia, South Asia and Africa. Green (unroasted) coffee is one of the most traded
                                                        agricultural commodities in the world. Coffee can have a stimulating effect on humans due to its caffeine content. It is one of the most-consumed beverages in the world.</p>

                                                    <p class="like">18 Likes</p></td>
                                                </tr>
                                                <item>15</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/coins.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">03/17/1999</p>

                                                    <p class="title">Coins</p>

                                                    <p class="desc">A coin is a piece of hard material that is standardized in weight, is produced in large quantities in order to facilitate trade, and primarily can be used as a legal tender. Coins are usually metal or a metallic material and sometimes made of synthetic materials, usually in the shape of a disc, and most often issued by a
                                                        government. Coins are used as a form of money in transactions of various kinds, from the everyday circulation coins to the storage of large numbers of bullion coins. In the present day, coins and banknotes make up currency, the cash forms of all modern money systems.</p>

                                                    <p class="like">39 Likes</p></td>
                                                </tr>
                                                <item>16</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/crayons.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">03/08/1990</p>

                                                    <p class="title">Crayons</p>

                                                    <p class="desc">A crayon is a stick of colored wax, charcoal, chalk, or other materials used for writing, coloring, drawing, and other methods of illustration. A crayon made of oiled chalk is called an oil pastel; when made of pigment with a dry binder, it is simply a pastel; both are popular media for color artwork. A grease pencil or china
                                                        marker (UK chinagraph pencil) is made of colored hardened grease and is useful for marking on hard, glossy surfaces such as porcelain or glass. Some fine arts companies such as Swiss Caran d'Ache manufacture water-soluble crayons, whose colors are easily mixed once applied to media.</p>

                                                    <p class="like">14 Likes</p></td>
                                                </tr>
                                                <item>17</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/cupcakes.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">05/25/1965</p>

                                                    <p class="title">Cupcakes</p>

                                                    <p class="desc">A cupcake (also British English: fairy cake; Australian English: patty cake or cup cake) is a small cake designed to serve one person, frequently baked in a small, thin paper or aluminum cup. As with larger cakes, frosting and other cake decorations, such as sprinkles, are common on cupcakes. Although their origin is unknown,
                                                        recipes for cupcakes have been printed since at least the late 12th century.</p>

                                                    <p class="like">128 Likes</p></td>
                                                </tr>
                                                <item>18</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/eggs-nest.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">12/31/1986</p>

                                                    <p class="title">Nests</p>

                                                    <p class="desc">A nest is a place of refuge to hold an animal's eggs or provide a place to live or raise offspring. They are usually made of some organic material such as twigs, grass, and leaves; or may simply be a depression in the ground, or a hole in a tree, rock or building. Human-made materials, such as string, plastic, cloth, hair or
                                                        paper, may be used.</p>

                                                    <p class="like">66 Likes</p></td>
                                                </tr>
                                                <item>19</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/flower-1.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">03/19/2012</p>

                                                    <p class="title">Flower</p>

                                                    <p class="desc">A flower, sometimes known as a bloom or blossom, is the reproductive structure found in flowering plants (plants of the division Magnoliophyta, also called angiosperms). The biological function of a flower is to effect reproduction, usually by providing a mechanism for the union of sperm with eggs. Flowers may facilitate
                                                        outcrossing (fusion of sperm and eggs from different individuals in a population) or allow selfing (fusion of sperm and egg from the same flower).</p>

                                                    <p class="like">85 Likes</p></td>
                                                </tr>
                                                <item>20</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/flower-2.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">01/11/2011</p>

                                                    <p class="title">Pseudanthium</p>

                                                    <p class="desc">A pseudanthium (Greek for "false flower") or flower head is a special type of inflorescence, in which several flowers are grouped together to form a flower-like structure. The real flowers are generally small and greatly reduced, but can sometimes be quite large (as in the sunflower flower head). Pseudanthia take various forms.
                                                        The individual flowers of a pseudanthium can be called florets.</p>

                                                    <p class="like">22 Likes</p></td>
                                                </tr>
                                                <item>21</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/flower-3.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">06/06/1993</p>

                                                    <p class="title">Flowering Plant</p>

                                                    <p class="desc">The flowering plants (angiosperms), also known as Angiospermae or Magnoliophyta, are the most diverse group of land plants. Angiosperms are seed-producing plants like the gymnosperms and can be distinguished from the gymnosperms by a series of synapomorphies (derived characteristics). These characteristics include flowers,
                                                        endosperm within the seeds, and the production of fruits that contain the seeds.</p>

                                                    <p class="like">90 Likes</p></td>
                                                </tr>
                                                <item>22</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/fountain.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">06/10/1995</p>

                                                    <p class="title">Fountains</p>

                                                    <p class="desc">A fountain (from the Latin "fons" or "fontis", a source or spring) is a piece of architecture which pours water into a basin or jets it into the air either to supply drinking water or for decorative or dramatic effect. Fountains were originally purely functional, connected to springs or aqueducts and used to provide drinking water
                                                        and water for bathing and washing to the residents of cities, towns and villages. Until the late 19th century most fountains operated by gravity, and needed a source of water higher than the fountain, such as a reservoir or aqueduct, to make the water flow or jet into the air.</p>

                                                    <p class="like">40 Likes</p></td>
                                                </tr>
                                                <item>23</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/leaves.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">04/12/1990</p>

                                                    <p class="title">Leaves</p>

                                                    <p class="desc">A leaf is an organ of a vascular plant, as defined in botanical terms, and in particular in plant morphology. Foliage is a mass noun that refers to leaves as a feature of plants. Typically a leaf is a thin, flattened organ borne above ground and specialized or photosynthesis, but many types of leaves are adapted in ways almost
                                                        unrecognisable in those terms: some are not flat (for example many succulent leaves and conifers), some are not above ground (such as bulb scales), and some are without major photosynthetic function (consider for example cataphylls, spines, and cotyledons).</p>

                                                    <p class="like">42 Likes</p></td>
                                                </tr>
                                                <item>24</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/lichterman.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">11/04/2001</p>

                                                    <p class="title">Landscapes</p>

                                                    <p class="desc">Landscape comprises the visible features of an area of land, including the physical elements of landforms such as (ice-capped) mountains, hills, water bodies such as rivers, lakes, ponds and the sea, living elements of land cover including indigenous vegetation, human elements including different forms of land use, buildings and
                                                        structures, and transitory elements such as lighting and weather conditions.</p>

                                                    <p class="like">14 Likes</p></td>
                                                </tr>
                                                <item>25</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/pinecone.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">08/19/2006</p>

                                                    <p class="title">Conifer Cone</p>

                                                    <p class="desc">A cone (in formal botanical usage: strobilus, plural strobili) is an organ on plants in the division Pinophyta (conifers) that contains the reproductive structures. The familiar woody cone is the female cone, which produces seeds. The male cones, which produce pollen, are usually herbaceous and much less conspicuous even at full
                                                        maturity. The name "cone" derives from the fact that the shape in some species resembles a geometric cone. The individual plates of a cone are known as scales.</p>

                                                    <p class="like">321 Likes</p></td>
                                                </tr>
                                                <item>26</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/river-1.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">07/24/1995</p>

                                                    <p class="title">Rivers</p>

                                                    <p class="desc">A river is a natural watercourse, usually freshwater, flowing towards an ocean, a lake, a sea, or another river. In a few cases, a river simply flows into the ground or dries up completely before reaching another body of water. Small rivers may also be called by several other names, including stream, creek, brook, rivulet,
                                                        tributary and rill. There are no official definitions for generic terms, such as river, as applied to geographic features, although in some countries or communities a stream may be defined by its size. Many names for small rivers are specific to geographic location; one example is "burn" in Scotland and northeast England. Sometimes a river is
                                                        said to be larger than a creek, but this is not always the case, because of vagueness in the language.</p>

                                                    <p class="like">88 Likes</p></td>
                                                </tr>
                                                <item>27</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/river-2.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">03/03/1953</p>

                                                    <p class="title">River Source</p>

                                                    <p class="desc">The source or headwaters of a river or stream is the furthest place in that river or stream from its estuary or confluence with another river, as measured along the course of the river.</p>

                                                    <p class="like">62 Likes</p></td>
                                                </tr>
                                                <item>28</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/sunset-1.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">07/17/2009</p>

                                                    <p class="title">Sunset</p>

                                                    <p class="desc">Sunset or sundown is the daily disappearance of the Sun below the horizon in the west as a result of Earth's rotation. The time of sunset is defined in astronomy as the moment when the trailing edge of the Sun's disk disappears below the horizon in the west. The ray path of light from the setting Sun is highly distorted near the
                                                        horizon because of atmospheric refraction, making the sunset appear to occur when the Sun's disk is already about one diameter below the horizon. Sunset is distinct from dusk, which is the moment at which darkness falls, which occurs when the Sun is approximately eighteen degrees below the horizon. The period between sunset and dusk is called
                                                        twilight.</p>

                                                    <p class="like">25 Likes</p></td>
                                                </tr>
                                                <item>29</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/tree.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">02/20/2008</p>

                                                    <p class="title">Tree</p>

                                                    <p class="desc">A tree is a perennial woody plant. It is most often defined as a woody plant that has many secondary branches supported clear of the ground on a single main stem or trunk with clear apical dominance. A minimum height specification at maturity is cited by some authors, varying from 3 m to 6 m; some authors set a minimum of 10 cm
                                                        trunk diameter (30 cm girth). Woody plants that do not meet these definitions by having multiple stems and/or small size are usually called shrubs, although many trees such as Mallee do not meet such definitions. Compared with most other plants, trees are long-lived, some reaching several thousand years old and growing to up to 115 m (379 ft)
                                                        high.</p>

                                                    <p class="like">57 Likes</p></td>
                                                </tr>
                                                <item>30</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/winter-1.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">07/26/2012</p>

                                                    <p class="title">Winter</p>

                                                    <p class="desc">Winter is the coldest season of the year in temperate climates, between autumn and spring. At the winter solstice, the days are shortest and the nights are longest, with days lengthening as the season progresses after the solstice.</p>

                                                    <p class="like">79 Likes</p></td>
                                                </tr>
                                                <item>31</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/winter-2.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">07/18/1995</p>

                                                    <p class="title">Seesaw</p>

                                                    <p class="desc">A see saw (also known as a teeter-totter or teeter board) is a long, narrow board pivoted in the middle so that, as one end goes up, the other goes down. Mechanically a seesaw is a lever and fulcrum. Seesaws also work as a simple example of a mechanical system with two equilibrium positions. One side is stable, while the other is
                                                        unstable.</p>

                                                    <p class="like">32 Likes</p></td>
                                                </tr>
                                                <item>32</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/winter-sun.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">02/15/2005</p>

                                                    <p class="title">Winter Sun</p>

                                                    <p class="desc">The Sun is the star at the center of the Solar System. It is almost perfectly spherical and consists of hot plasma interwoven with magnetic fields. It has a diameter of about 1,392,000 km, about 109 times that of Earth, and its mass accounts for about 99.86% of the total mass of the Solar System. Chemically, about three quarters
                                                        of the Sun's mass consists of hydrogen, while the rest is mostly helium. The remainder (1.69%, which nonetheless equals 5,628 times the mass of Earth) consists of heavier elements, including oxygen, carbon, neon and iron, among others.</p>

                                                    <p class="like">81 Likes</p></td>
                                                </tr>
                                                <item>33</item>
                                                <tr class="tbl-item"><img/>
                                                <td class="img"><img src="<?php echo base_url("recursos/images/thumbs/woodstump.jpg"); ?>" alt="" title=""/></td>
                                                <data></data>
                                                <td class="td-block"><p class="date">11/12/2004</p>

                                                    <p class="title">Wood</p>

                                                    <p class="desc">Wood is a hard, fibrous tissue found in many trees. It has been used for hundreds of thousands of years for both fuel and as a construction material. It is an organic material, a natural composite of cellulose fibers (which are strong in tension) embedded in a matrix of lignin which resists compression. Wood is produced as
                                                        secondary xylem in the stems of trees (and other woody plants). In a living tree it performs a support function, enabling woody plants to grow large or to stand up for themselves. It also mediates the transfer of water and nutrients to the leaves and other growing tissues. Wood may also refer to other plant materials with comparable
                                                        properties, and to material engineered from wood, or wood chips or fiber.</p>

                                                    <p class="like">25 Likes</p></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="box jplist-no-results text-shadow align-center"><p>No results found</p></div>
                                        <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                        <div class="jplist-panel box panel-bottom">
                                            <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-drop-down form-control">
                                                <ul class="dropdown-menu">
                                                    <li><span data-number="3"> 3 per page</span></li>
                                                    <li><span data-number="5"> 5 per page</span></li>
                                                    <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                    <li><span data-number="all"> view all</span></li>
                                                </ul>
                                            </div>
                                            <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-control-animate-to-top="true" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                                <ul class="dropdown-menu">
                                                    <li><span data-path="default">Sort by</span></li>
                                                    <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                    <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                    <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                    <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                                                    <li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>
                                                    <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                                                    <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                    <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                                </ul>
                                            </div>
                                            <div data-type="{start} - {end} of {all}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                            <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>