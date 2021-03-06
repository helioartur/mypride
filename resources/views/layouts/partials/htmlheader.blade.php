<head>
    <meta charset="UTF-8">
    <title> {{ trans('adminlte_lang::message.app_name') }} - @yield('htmlheader_title', 'Your title here') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <meta name="csrf_token" content="{{ csrf_token() }}" />
    
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset('/css/skins/skin-blue.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="{{ asset('/css/bootstrap-magnify.css')}}" rel="stylesheet" />
    <link href="{{ asset('/plugins/jQuery-File-Upload-9.12.5/css/blueimp-gallery.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('/plugins/jQuery-File-Upload-9.12.5/css/jquery.fileupload.css')}}" rel="stylesheet" />
    <link href="{{ asset('/plugins/jQuery-File-Upload-9.12.5/css/jquery.fileupload-ui.css') }}" rel="stylesheet" />

    <noscript>
        <link rel="stylesheet" href="{{  asset('/plugins/jQuery-File-Upload-9.12.5/css/jquery.fileupload-noscript.css')}}" />
        <link rel="stylesheet" href="{{  asset('/plugins/jQuery-File-Upload-9.12.5/css/jquery.fileupload-ui-noscript.css')}}" />
    </noscript>
<style type="text/css">
        /* Hide Angular JS elements before initializing */
    .ng-cloak {
        display: none;
    }
    </style>
</head>
