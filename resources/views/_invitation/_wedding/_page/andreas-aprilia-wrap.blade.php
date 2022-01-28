<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding._include.head-1')
        <?php
            $cdn_link   = "asset-wedding-bg/".$code."/";
            $version = "?var=".date("Ymd")."001";
        ?>
        <meta name="description" content="We are tying the knot!"/>
        <meta property="og:image" content="{{asset($cdn_link.'images/9.jpg')}}">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="250">
        <meta property="og:image:height" content="200">
        <link rel="image_src" href="{{asset($cdn_link.'images/9.jpg')}}">
        <link href="{{asset('asset-wedding-1/css/custom.css').$version}}" rel="stylesheet">
    </head>
    <body class="bg-navy">
        <iframe class="wrap-preview wrap-preview-mobile" width="100%" src="{{$url}}"></iframe>
    </body>
</html>