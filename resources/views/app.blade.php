<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Todos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <meta name="description" content="TODO List - sample application for NetBeans IDE" />
        <meta name="keywords" content="NetBeans, PHP" />
        <meta name="author" content="NetBeans PHP team" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        
        <link href="{{ asset('/css/redmond/jquery-ui-1.8.16.custom.css') }}" rel="stylesheet" />
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('/css/layout.css') }}" rel="stylesheet" />
        <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
         
        <script src="{{ asset('/js/jquery-1.9.1.min.js') }}"></script>
        <script src="{{ asset('/js/jquery-ui-1.8.16.custom.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body id="page">
        <!--	bootstrap container-->
        <div class="container">
            <div class="tail-top-right"></div>
            <div id="main">
                <!-- header -->
                <div id="header"></div>
                <!-- content -->
                <div id="content">
                    <div class="wrapper">
                        <div class="col-1">
                            <div class="box">
                                <div class="inner">
                                    <div class="title"><a href="http://netbeans.org/features/php/">NetBeans IDE PHP</a></div>
                                    <ul class="list">
                                        <li><span><a href="{{ url('/todos') }}">Home</a></span></li>
                                        <li><span><a href="{{ url('/todos/status/pending') }}"
                                                     ><img src="{{ asset('/images/status/PENDING.png') }}" alt="" title="Pending TODOs" class="icon" />Pending TODOs</a></span></li>
                                        <li><span><a href="{{ url('/todos/status/done') }}"
                                                     ><img src="{{ asset('/images/status/DONE.png') }}" alt="" title="Done TODOs" class="icon" />Done TODOs</a></span></li>
                                        <li><span><a href="{{ url('/todos/status/voided') }}"
                                                     ><img src="{{ asset('/images/status/VOIDED.png') }}" alt="" title="Voided TODOs" class="icon" />Voided TODOs</a></span></li>
                                        <li class="last"><span><a href="{{ url('/todos/add_edit') }}"
                                                                  ><img src="{{ asset('/images/action/add.png') }}" alt="" title="Add TODO" class="icon" />Add TODO</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="indent">
                                @yield('content')

                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer -->
                <div id="footer">
                    <div class="indent">
                        <div class="fleft"><a href="https://blogs.oracle.com/netbeansphp/">NetBeans PHP team</a>, 2011 &copy; Copyright Oracle corp., All rights reserved</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

