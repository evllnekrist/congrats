<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <meta name="description" content="Digital Wedding Invitation by beritabaik.info"> -->
<meta name="keywords" content="digital, wedding, invitation, beritabaik.info">
<meta name="author" content="beritabaik.info">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ isset($event)? $event:'Berita Baik' }}</title>
<link rel="icon" href="{{@$thumbnail_icon?asset($thumbnail_icon):asset('asset-main/images/logo/logo-v2-fill.png')}}" type="image/png">