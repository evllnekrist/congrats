<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_main._include.head')
        @include('_main._include.asset-top')
        <style>
        .center {
            padding-top: 15%;
        }
        </style>
    </head>
    <body class="gla_middle_titles" id="home" style="margin-top:10vh">
        @if(isset($lost))
        <?php
            $photo_col = array('','1','2','3','4','5','6','7','8','9','10','s');
            $random_pick_key = array_rand($photo_col); 
        ?>
        <center>
            <img    src="{{asset('asset-main/images/ani/walk'.$photo_col[$random_pick_key].'.gif')}}" data-bottom-top="@src:{{asset('asset-main/images/ani/walk'.$photo_col[$random_pick_key].'.gif')}}; opacity:1" 
                    class="gla_animated_flower" height="100" alt=""><br><br><br>
            <h4>Hello there,</h4> 
            <br>looks like you're lost.<br>
            <br>Current link is incomplete, 
            <br>you may visit our main page 
            <a href="{{url('/')}}" style="color:green;font-weight:900">here</a>
        </center>
        @elseif(isset($broken))
        <center>
            <img    src="{{asset('asset-main/images/image/broken-link.png')}}" data-bottom-top="@src:{{asset('asset-main/images/image/broken-link.png')}}; opacity:1" 
                    class="gla_animated_flower" height="100" alt=""><br><br><br>
            <h4>Oops....</h4> 
            <br>Your unique link leads to nowhere
            <br>please inform the administrator 
            @if(isset($detail))
                <small style="color:red;">(note: {{$detail}})</small>
            @endif
            .<br>
            <br>Back to main page >>  
            <a href="{{url('/')}}" style="color:green;font-weight:900">here</a>
        </center>
        @endif
    </body>
</html>