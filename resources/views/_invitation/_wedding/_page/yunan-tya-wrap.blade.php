<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_invitation._wedding._include.head-1')
        <?php
            $cdn_link   = "asset-wedding-bg/".$code."/";
            $version = "?var=".date("Ymd")."001";
            $add_url = "";
            if(isset($_GET['i'])){
                if(isset($_GET['qty'])){
                    $add_url .= "&qty=".$_GET['qty'];
                }
                if(isset($_GET['s'])){
                    $add_url .= "&seat=".$_GET['s'];
                }
            }
        ?>
        <meta name="description" content="Are getting married!"/>
        <link href="{{asset('asset-wedding-1/css/custom.css').$version}}" rel="stylesheet">
    </head>
    <body class="bg-navy">
        <iframe class="wrap-preview wrap-preview-mobile" width="100%" src="{{$url.$add_url}}"></iframe>
    </body>
</html>