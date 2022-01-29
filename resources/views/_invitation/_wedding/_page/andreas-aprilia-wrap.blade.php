<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding._include.head-1')
        <?php
            $cdn_link   = "asset-wedding-bg/".$code."/";
            $version = "?var=".date("Ymd")."001";
        ?>
        <meta name="description" content="We are tying the knot!"/>
        <link href="{{asset('asset-wedding-1/css/custom.css').$version}}" rel="stylesheet">
    </head>
    <body class="bg-navy">
        <iframe class="wrap-preview wrap-preview-mobile" width="100%" src="{{$url}}"></iframe>
    </body>
</html>