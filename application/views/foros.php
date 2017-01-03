<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>ProUI - Responsive Bootstrap Admin Template</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
       <?php include('imports.php');?>
    </head>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->

            <!-- Page Container -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available #page-container classes:

                '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

                'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
                'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
                'sidebar-mini sidebar-visible-lg-mini'          for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
                'sidebar-mini sidebar-visible-lg'               for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)

                'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
                'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

                'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

                'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

                'style-alt'                                     for an alternative main style (without it: the default style)
                'footer-fixed'                                  for a fixed footer (without it: a static footer)

                'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

                'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
                'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

                'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links
            -->
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                <!-- Alternative Sidebar -->
                <div id="sidebar-alt">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-alt-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Chat -->
                            <!-- Chat demo functionality initialized in js/app.js -> chatUi() -->
                            <a href="page_ready_chat.html" class="sidebar-title">
                                <i class="gi gi-comments pull-right"></i> <strong>Chat</strong>UI
                            </a>
                            <!-- Chat Users -->
                            <ul class="chat-users clearfix">
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-online">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-online">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-online">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar10.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-online">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-away">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar7.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-away">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar9.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="chat-user-busy">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar1.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar3.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar13.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span></span>
                                        <img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle">
                                    </a>
                                </li>
                            </ul>
                            <!-- END Chat Users -->

                            <!-- Chat Talk -->
                            <div class="chat-talk display-none">
                                <!-- Chat Info -->
                                <div class="chat-talk-info sidebar-section">
                                    <button id="chat-talk-close-btn" class="btn btn-xs btn-default pull-right">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle pull-left">
                                    <strong>John</strong> Doe
                                </div>
                                <!-- END Chat Info -->

                                <!-- Chat Messages -->
                                <ul class="chat-talk-messages">
                                    <li class="text-center"><small>Yesterday, 18:35</small></li>
                                    <li class="chat-talk-msg animation-slideRight">Hey admin?</li>
                                    <li class="chat-talk-msg animation-slideRight">How are you?</li>
                                    <li class="text-center"><small>Today, 7:10</small></li>
                                    <li class="chat-talk-msg chat-talk-msg-highlight themed-border animation-slideLeft">I'm fine, thanks!</li>
                                </ul>
                                <!-- END Chat Messages -->

                                <!-- Chat Input -->
                                <form action="index.html" method="post" id="sidebar-chat-form" class="chat-form">
                                    <input type="text" id="sidebar-chat-message" name="sidebar-chat-message" class="form-control form-control-borderless" placeholder="Type a message..">
                                </form>
                                <!-- END Chat Input -->
                            </div>
                            <!--  END Chat Talk -->
                            <!-- END Chat -->

                            <!-- Activity -->
                            <a href="javascript:void(0)" class="sidebar-title">
                                <i class="fa fa-globe pull-right"></i> <strong>Activity</strong>UI
                            </a>
                            <div class="sidebar-section">
                                <div class="alert alert-danger alert-alt">
                                    <small>just now</small><br>
                                    <i class="fa fa-thumbs-up fa-fw"></i> Upgraded to Pro plan
                                </div>
                                <div class="alert alert-info alert-alt">
                                    <small>2 hours ago</small><br>
                                    <i class="gi gi-coins fa-fw"></i> You had a new sale!
                                </div>
                                <div class="alert alert-success alert-alt">
                                    <small>3 hours ago</small><br>
                                    <i class="fa fa-plus fa-fw"></i> <a href="page_ready_user_profile.html"><strong>John Doe</strong></a> would like to become friends!<br>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-check"></i> Accept</a>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-times"></i> Ignore</a>
                                </div>
                                <div class="alert alert-warning alert-alt">
                                    <small>2 days ago</small><br>
                                    Running low on space<br><strong>18GB in use</strong> 2GB left<br>
                                    <a href="page_ready_pricing_tables.html" class="btn btn-xs btn-primary"><i class="fa fa-arrow-up"></i> Upgrade Plan</a>
                                </div>
                            </div>
                            <!-- END Activity -->

                            <!-- Messages -->
                            <a href="page_ready_inbox.html" class="sidebar-title">
                                <i class="fa fa-envelope pull-right"></i> <strong>Messages</strong>UI (5)
                            </a>
                            <div class="sidebar-section">
                                <div class="alert alert-alt">
                                    Debra Stanley<small class="pull-right">just now</small><br>
                                    <a href="page_ready_inbox_message.html"><strong>New Follower</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Sarah Cole<small class="pull-right">2 min ago</small><br>
                                    <a href="page_ready_inbox_message.html"><strong>Your subscription was updated</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Bryan Porter<small class="pull-right">10 min ago</small><br>
                                    <a href="page_ready_inbox_message.html"><strong>A great opportunity</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Jose Duncan<small class="pull-right">30 min ago</small><br>
                                    <a href="page_ready_inbox_message.html"><strong>Account Activation</strong></a>
                                </div>
                                <div class="alert alert-alt">
                                    Henry Ellis<small class="pull-right">40 min ago</small><br>
                                    <a href="page_ready_inbox_message.html"><strong>You reached 10.000 Followers!</strong></a>
                                </div>
                            </div>
                            <!-- END Messages -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Alternative Sidebar -->

                <!-- Main Sidebar -->
                <?php include('menu.php'); ?>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <!-- In the PHP version you can set the following options from inc/config file -->
                    <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
                    
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Forum Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    <i class="fa fa-comments-o"></i>Forum<br><small>Clean UI for your Forum!</small>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Pages</li>
                            <li><a href="">Forum</a></li>
                        </ul>
                        <!-- END Forum Header -->
                        <div class="row text-center">
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" onclick="$('#modal-insertar').modal('show');" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-success">
                                        <h4 class="widget-content-light"><strong>Añadir nuevo</strong> Tema</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i class="fa fa-plus"></i></span></div>
                                </a>
                            </div>
                        </div>
                        <!-- Forum Block -->
                        <div class="block">
                            <!-- Forum Tabs Title -->
                            <div class="block-title">
                                <ul class="nav nav-tabs" data-toggle="tabs">
                                    <li class="active"><a href="#forum-categories">Categories</a></li>
                                    <li><a href="#forum-topics">Topics</a></li>
                                    <li><a href="#forum-discussion">Discussion</a></li>
                                </ul>
                            </div>
                            <!-- END Forum Tabs -->

                            <!-- Tab Content -->
                            <div class="tab-content">
                                <!-- Forum -->
                                <div class="tab-pane active" id="forum-categories">
                                    <!-- Intro Category -->
                                    <table class="table table-borderless table-striped table-vcenter">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Introduction</th>
                                                <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Topics</th>
                                                <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Posts</th>
                                                <th class="hidden-xs hidden-sm" style="width: 200px;">Last Post</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><i class="gi gi-globe fa-2x"></i></td>
                                                <td>
                                                    <h4>
                                                        <a href="javascript:void(0)"><strong>Welcome</strong></a><br>
                                                        <small>Feel free to come inside and introduce yourself!</small>
                                                    </h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">205</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">1265</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Sandra Gilbert</a><br><small>February 30, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><i class="gi gi-bullhorn fa-2x"></i></td>
                                                <td>
                                                    <h4>
                                                        <a href="javascript:void(0)"><strong>Announcements</strong></a><br>
                                                        <small>For the latest news, here is the place</small>
                                                    </h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">251</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">6352</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Carolyn Cruz</a><br><small>June 15, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><i class="gi gi-pen fa-2x"></i></td>
                                                <td>
                                                    <h4>
                                                        <a href="javascript:void(0)"><strong>Terms &amp; Conditions</strong></a><br>
                                                        <small>Please read the rules of our forum</small>
                                                    </h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">20</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">20</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Shirley Ray</a><br><small>February 10, 2014</small></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- END Intro Category -->

                                    <!-- Web Application Category -->
                                    <table class="table table-borderless table-striped table-vcenter">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Web Application</th>
                                                <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Topics</th>
                                                <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Posts</th>
                                                <th class="hidden-xs hidden-sm" style="width: 200px;">Last Post</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><i class="gi gi-brush fa-2x"></i></td>
                                                <td>
                                                    <h4>
                                                        <a href="javascript:void(0)"><strong>Getting Started</strong></a><br>
                                                        <small>New user? Don't worry, you will find everything you need in here</small>
                                                    </h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">120</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">1253</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Harry Owens</a><br><small>April 12, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><i class="gi gi-pencil fa-2x"></i></td>
                                                <td>
                                                    <h4>
                                                        <a href="javascript:void(0)"><strong>Tutorials</strong></a><br>
                                                        <small>The best place for tutorials</small>
                                                    </h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">302</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">1356</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Edward Cook</a><br><small>March 15, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><i class="gi gi-embed_close fa-2x"></i></td>
                                                <td>
                                                    <h4>
                                                        <a href="javascript:void(0)"><strong>Plugins</strong></a><br>
                                                        <small>Find out the best of the best out there</small>
                                                    </h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">365</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">6330</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Samuel Collins</a><br><small>February 30, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><i class="gi gi-tower fa-2x"></i></td>
                                                <td>
                                                    <h4>
                                                        <a href="javascript:void(0)"><strong>API</strong></a><br>
                                                        <small>API related discussions</small>
                                                    </h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">862</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">7650</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Carl Chen</a><br><small>March 24, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><i class="gi gi-heat fa-2x"></i></td>
                                                <td>
                                                    <h4>
                                                        <a href="javascript:void(0)"><strong>Extentions</strong></a><br>
                                                        <small>Extend our web application's features</small>
                                                    </h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">80</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">658</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Justin Weber</a><br><small>February 15, 2014</small></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- END Web Application Category -->

                                    <!-- Support Category -->
                                    <table class="table table-borderless table-striped table-vcenter">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Support</th>
                                                <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Topics</th>
                                                <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Posts</th>
                                                <th class="hidden-xs hidden-sm" style="width: 200px;">Last Post</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><i class="gi gi-book fa-2x"></i></td>
                                                <td>
                                                    <h4>
                                                        <a href="javascript:void(0)"><strong>How to</strong></a><br>
                                                        <small>The best guides handcrafted just for you!</small>
                                                    </h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">120</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">1352</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Judith Smith</a><br><small>January 20, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><i class="gi gi-circle_question_mark fa-2x"></i></td>
                                                <td>
                                                    <h4>
                                                        <a href="javascript:void(0)"><strong>Questions</strong></a><br>
                                                        <small>Need assistance? Don’t worry, we are here to help!</small>
                                                    </h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">2150</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">12300</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Roger Griffin</a><br><small>January 25, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><i class="gi gi-book_open fa-2x"></i></td>
                                                <td>
                                                    <h4>
                                                        <a href="javascript:void(0)"><strong>Users’ Sandbox</strong></a><br>
                                                        <small>Discuss with other users</small>
                                                    </h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">2150</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">12300</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Megan Harvey</a><br><small>May 2, 2014</small></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- END Support Category -->
                                </div>
                                <!-- END Forum -->

                                <!-- Topics -->
                                <div class="tab-pane" id="forum-topics">
                                    <table class="table table-borderless table-striped table-vcenter">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Getting Started</th>
                                                <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Replies</th>
                                                <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Views</th>
                                                <th class="hidden-xs hidden-sm" style="width: 200px;">Last Post</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="width: 80px;"><i class="gi gi-pin_flag fa-2x text-danger"></i></td>
                                                <td>
                                                    <h4><a href="javascript:void(0)"><strong>Welcome to our Getting Started category</strong></a> <br><small><a href="page_ready_user_profile.html">Hannah Bates</a> on <em>January 1, 2014</em></small></h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">456</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">6598</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Maria Young</a><br><small>June 25, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><i class="gi gi-pin_flag fa-2x text-danger"></i></td>
                                                <td>
                                                    <h4><a href="javascript:void(0)"><strong>A big upgrade is coming to our app</strong></a> <br><small><a href="page_ready_user_profile.html">Anna Matthews</a> on <em>February 2, 2014</em></small></h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">277</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">1254</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Jacob Matthews</a><br><small>June 28, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><i class="gi gi-pin_flag fa-2x text-danger"></i></td>
                                                <td>
                                                    <h4><a href="javascript:void(0)"><strong>Tips &amp; tricks for staying motivated</strong></a> <br><small><a href="page_ready_user_profile.html">Jeremy Davis</a> on <em>February 5, 2014</em></small></h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">248</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">7548</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Catherine Carr</a><br><small>June 30, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h4><a href="javascript:void(0)"><strong>2014, all the new features!</strong></a> <br><small><a href="page_ready_user_profile.html">Anthony Carroll</a> on <em>January 3, 2014</em></small></h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">247</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">6325</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Mary Fields</a><br><small>July 10, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h4><a href="javascript:void(0)"><strong>Your app saved me tons of time</strong></a> <br><small><a href="page_ready_user_profile.html">Albert Barnes</a> on <em>February 10, 2014</em></small></h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">247</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">2589</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Roy Moreno</a><br><small>March 13, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h4><a href="javascript:void(0)"><strong>Is it easy to upgrade my plan?</strong></a> <br><small><a href="page_ready_user_profile.html">Bruce Carlson</a> on <em>January 6, 2014</em></small></h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">247</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">4587</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Juan Shaw</a><br><small>April 23, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h4><a href="javascript:void(0)"><strong>Check out all those tips &amp; tricks!</strong></a> <br><small><a href="page_ready_user_profile.html">Andrew Ross</a> on <em>February 8, 2014</em></small></h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">528</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">1254</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Alan Weaver</a><br><small>February 17, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h4><a href="javascript:void(0)"><strong>Review needed</strong></a> <br><small><a href="page_ready_user_profile.html">Jerry Vasquez</a> on <em>January 1, 2014</em></small></h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">584</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">1478</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Juan Carroll</a><br><small>June 6, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h4><a href="javascript:void(0)"><strong>Testing out the API</strong></a> <br><small><a href="page_ready_user_profile.html">Jeremy Miller</a> on <em>January 1, 2014</em></small></h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">541</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">9512</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Philip Evans</a><br><small>June 10, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h4><a href="javascript:void(0)"><strong>Issue when saving a file, can you help me?</strong></a> <br><small><a href="page_ready_user_profile.html">Sean Jones</a> on <em>January 1, 2014</em></small></h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">158</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">6325</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Jesse Gray</a><br><small>May 26, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h4><a href="javascript:void(0)"><strong>New Features!</strong></a> <br><small><a href="page_ready_user_profile.html">Denise Butler</a> on <em>January 1, 2014</em></small></h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">147</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">1258</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Willie Lane</a><br><small>March 9, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h4><a href="javascript:void(0)"><strong>Question about the new features!</strong></a> <br><small><a href="page_ready_user_profile.html">Julie Banks</a> on <em>January 1, 2014</em></small></h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">264</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">6325</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Nicholas Lee</a><br><small>April 8, 2014</small></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h4><a href="javascript:void(0)"><strong>Which plan to choose?</strong></a> <br><small><a href="page_ready_user_profile.html">Anna Kim</a> on <em>January 1, 2014</em></small></h4>
                                                </td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">156</a></td>
                                                <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">9685</a></td>
                                                <td class="hidden-xs hidden-sm">by <a href="page_ready_user_profile.html">Donna Ford</a><br><small>April 2, 2014</small></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="text-center">
                                        <ul class="pagination pagination-sm">
                                            <li class="disabled"><a href="javascript:void(0)">Prev</a></li>
                                            <li class="active"><a href="javascript:void(0)">1</a></li>
                                            <li><a href="javascript:void(0)">2</a></li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a href="javascript:void(0)">...</a></li>
                                            <li><a href="javascript:void(0)">999</a></li>
                                            <li><a href="javascript:void(0)">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END Topics -->

                                <!-- Discussion -->
                                <div class="tab-pane" id="forum-discussion">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr>
                                                <th colspan="2">All the new Features <small>by <a href="page_ready_user_profile.html"><strong>Randy Sanders</strong></a> on <em>May 1, 2014</em></small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><a href="page_ready_user_profile.html"><strong>User</strong></a></td>
                                                <td>on <em>May 10, 2014 - 12:00</em></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 12%;">
                                                    <div class="push-bit">
                                                        <a href="page_ready_user_profile.html">
                                                            <img src="img/placeholders/avatars/avatar14.jpg" alt="avatar" class="img-circle">
                                                        </a>
                                                    </div>
                                                    <small>1253 Posts</small>
                                                </td>
                                                <td>
                                                    <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.</p>
                                                    <em>Signature</em>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="page_ready_user_profile.html"><strong>User</strong></a></td>
                                                <td>on <em>May 25, 2014 - 19:30</em></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="push-bit">
                                                        <a href="page_ready_user_profile.html">
                                                            <img src="img/placeholders/avatars/avatar11.jpg" alt="avatar" class="img-circle">
                                                        </a>
                                                    </div>
                                                    <small>5213 Posts</small>
                                                </td>
                                                <td>
                                                    <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.</p>
                                                    <em>Signature</em>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="page_ready_user_profile.html"><strong>User</strong></a></td>
                                                <td>on <em>June 1, 2014 - 16:01</em></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="push-bit">
                                                        <a href="page_ready_user_profile.html">
                                                            <img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle">
                                                        </a>
                                                    </div>
                                                    <small>2585 Posts</small>
                                                </td>
                                                <td>
                                                    <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.</p>
                                                    <em>Signature</em>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="page_ready_user_profile.html"><strong>User</strong></a></td>
                                                <td>on <em>June 10, 2014 - 09:16</em></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="push-bit">
                                                        <a href="page_ready_user_profile.html">
                                                            <img src="img/placeholders/avatars/avatar6.jpg" alt="avatar" class="img-circle">
                                                        </a>
                                                    </div>
                                                    <small>3251 Posts</small>
                                                </td>
                                                <td>
                                                    <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.</p>
                                                    <em>Signature</em>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="page_ready_user_profile.html"><strong>User</strong></a></td>
                                                <td>on <em>June 15, 2014 - 15:15</em></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <div class="push-bit">
                                                        <a href="page_ready_user_profile.html">
                                                            <img src="img/placeholders/avatars/avatar9.jpg" alt="avatar" class="img-circle">
                                                        </a>
                                                    </div>
                                                    <small>5621 Posts</small>
                                                </td>
                                                <td>
                                                    <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.</p>
                                                    <em>Signature</em>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="page_ready_user_profile.html"><strong>You</strong></a></td>
                                                <td><em>Now</em></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <a href="page_ready_user_profile.html"><img src="img/placeholders/avatars/avatar.jpg" class="img-circle" alt="avatar"></a>
                                                </td>
                                                <td>
                                                    <form action="page_ready_forum.html" method="post" class="form-horizontal" onsubmit="return false;">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <textarea id="textarea-message" name="textarea-message" rows="8" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-reply"></i> Reply</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="text-center">
                                        <ul class="pagination pagination-sm">
                                            <li class="disabled"><a href="javascript:void(0)">Prev</a></li>
                                            <li class="active"><a href="javascript:void(0)">1</a></li>
                                            <li><a href="javascript:void(0)">2</a></li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a href="javascript:void(0)">...</a></li>
                                            <li><a href="javascript:void(0)">10</a></li>
                                            <li><a href="javascript:void(0)">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END Discussion -->
                            </div>
                            <!-- END Tab Content -->
                        </div>
                        <!-- END Forum Block -->
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <footer class="clearfix">
                        <div class="pull-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                        </div>
                        <div class="pull-left">
                            <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI 3.6</a>
                        </div>
                    </footer>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <fieldset>
                                <legend>Vital Info</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">Admin</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                                    <div class="col-md-8">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- Modal para insertar datos  -->
        <div id="modal-insertar" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Poronga</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <fieldset>
                                <legend>Vital Info</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">Admin</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                                    <div class="col-md-8">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                    
                    
                </div>
            </div>
        </div>
        <!-- END del Modal para insertar -->
        <!-- END User Settings -->

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->

    </body>
</html>