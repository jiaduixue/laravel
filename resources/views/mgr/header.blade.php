<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title}}</title>
    <meta name="author" content="pampersdry.info">
    <meta name="description" content="Adminre is a clean and flat admin theme build with Slim framework and Twig template engine.">
    <link rel="shortcut icon" href="{{ URL::asset('global/image/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('mgr/icons/iconfont/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('mgr/css/library.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('mgr/css/custom.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('mgr/css/ourmall-mgr.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('mgr/js/library.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('mgr/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('mgr/js/ajaxfileupload.js?t=20170329') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('mgr/js/mamall.watcher.min.js?t=20170329') }}"></script>
    <!--[if IE]>
    <script type="text/javascript">(function(){var e="abbr,article,aside,audio,canvas,datalist,details,dialog,eventsource,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video".split(","),t=e.length;while(t--)document.createElement(e[t])})();</script>
    <![endif]-->
    <script type="text/javascript">

        function goUrl(url) { window.location.href = url; }
        function showInfo(message) {$.gritter.add({class_name:'gritter-success',text:message,time: 3000,sticky: false});}
        function showError(message) {$.gritter.add({class_name:'gritter-error',text:message,time: 3000,sticky: false});}
    </script>
</head>