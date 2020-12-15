<html lang="en-US">
<head>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script>
    <script type="text/javascript" src="{{asset('assets/jquery.fullscreen.min.js')}}"> </script>
    <script type="text/javascript">
        $(function() {
            $('.open').click(function() {
                $('body').fullscreen();
                return false;
            });
            $('.close').click(function() {
                $.fullscreen.exit();
                return false;
            });
        });
    </script>

</head>
<body>

<p>
    <a href="#" class="open">Open Fullscreen</a> / <a href="#" class="close">Exit fullscreen</a>
</p>
</body>
</html>
{{--<!DOCTYPE HTML>--}}
{{--<html lang="en-US">--}}
{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<title>jQuery.fullscreen example</title>--}}
    {{--<link rel="stylesheet" href="{{asset('assets/app/custom/styles.css')}}" type="text/css" media="screen">--}}
    {{--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--}}
    {{--<script type="text/javascript" src="{{asset('assets/app/jquery.fullscreen.min.js')}}"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="main">--}}
    {{--<h1>jQuery.fullscreen</h1>--}}
    {{--<div class="example">--}}
        {{--<p>--}}
            {{--jQuery.fullscreen allows you to open any element on the page in fullscreen mode without using Flash in all--}}
            {{--modern browsers (Firefox, Chrome, Safari, Opera, Internet Explorer). If this feature is not supported by the--}}
            {{--browser then element will be just stretched to fill the screen without switching to fullscreen.--}}
        {{--</p>--}}

        {{--<div id="fullscreen">--}}
            {{--<h2>Example</h2>--}}
            {{--<p>Your browser <span id="support">doesn't support</span> FullScreen API.</p>--}}
            {{--<p>This block is <span id="state">not</span> in fullscreen mode. <a href="#" class="requestfullscreen">Click--}}
                    {{--to open it in fullscreen</a><a href="#" class="exitfullscreen" style="display: none">Click to exit--}}
                    {{--fullscreen</a>.</p>--}}
        {{--</div>--}}
        {{--<h3>Source code:</h3>--}}
        {{--<code>--}}
        {{--</code>--}}
        {{--<script type="text/javascript">--}}
            {{--$(function () {--}}
                {{--// check native support--}}
                {{--$('#support').text($.fullscreen.isNativelySupported() ? 'supports' : 'doesn\'t support');--}}
                {{--// open in fullscreen--}}
                {{--$('#fullscreen .requestfullscreen').click(function () {--}}
                    {{--$('#fullscreen').fullscreen();--}}
                    {{--return false;--}}
                {{--});--}}
                {{--// exit fullscreen--}}
                {{--$('#fullscreen .exitfullscreen').click(function () {--}}
                    {{--$.fullscreen.exit();--}}
                    {{--return false;--}}
                {{--});--}}
                {{--// document's event--}}
                {{--$(document).bind('fscreenchange', function (e, state, elem) {--}}
                    {{--// if we currently in fullscreen mode--}}
                    {{--if ($.fullscreen.isFullScreen()) {--}}
                        {{--$('#fullscreen .requestfullscreen').hide();--}}
                        {{--$('#fullscreen .exitfullscreen').show();--}}
                    {{--} else {--}}
                        {{--$('#fullscreen .requestfullscreen').show();--}}
                        {{--$('#fullscreen .exitfullscreen').hide();--}}
                    {{--}--}}
                    {{--$('#state').text($.fullscreen.isFullScreen() ? '' : 'not');--}}
                {{--});--}}
            {{--});--}}
        {{--</script>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
{{--<script type="text/javascript">--}}
    {{--$(function() {--}}
        {{--$('.open').click(function() {--}}
            {{--$('body').fullscreen();--}}
            {{--return false;--}}
        {{--});--}}
        {{--$('.close').click(function() {--}}
            {{--$.fullscreen.exit();--}}
            {{--return false;--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
<div id="main" style="margin-top:150px;">
    <h1>jQuery Fullscreen example</h1>
    <div class="example">
        <p>
            jQuery.fullscreen allows you to open any element on the page in fullscreen mode without using Flash in all modern browsers (Firefox, Chrome, Safari, Opera). If this feature is not supported by the browser then element will be just stretched to fill the screen without switching to fullscreen.
        </p>

        <div id="fullscreen">
            <h2>Example</h2>
            <p>Your browser <span id="support">doesn't support</span> FullScreen API.</p>
            <p>This block is <span id="state">not</span> in fullscreen mode. <a href="#" class="requestfullscreen">Click to open it in fullscreen</a><a href="#" class="exitfullscreen" style="display: none">Click to exit fullscreen</a>.</p>
        </div>
<script>
    $(function() {
        // check native support
        $('#support').text($.fullscreen.isNativelySupported() ? 'supports' : 'doesn\'t support');
        // open in fullscreen
        $(document).ready(function() {
            $('#fullscreen').fullscreen();
            return false;
        });
        // exit fullscreen
        $('#fullscreen .exitfullscreen').click(function() {
            $.fullscreen.exit();
            return false;
        });
        // document's event
        $(document).bind('fscreenchange', function(e, state, elem) {
            // if we currently in fullscreen mode
            if ($.fullscreen.isFullScreen()) {
                $('#fullscreen .requestfullscreen').hide();
                $('#fullscreen .exitfullscreen').show();
            } else {
                $('#fullscreen .requestfullscreen').show();
                $('#fullscreen .exitfullscreen').hide();
            }
            $('#state').text($.fullscreen.isFullScreen() ? '' : 'not');
        });
    });
</script>