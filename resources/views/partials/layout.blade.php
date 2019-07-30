<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WWF</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   {{-- include styles --}}
          @include("partials.css")
</head>

<body class="hold-transition skin-blue sidebar-mini">

  {{-- include header --}}
        @include("partials.header")


        {{-- include sidebar --}}
              @include("partials.sidebar")

              {{-- content dynamic --}}
     @section("content")
             @show

             {{-- include scripts --}}
                     @include("partials.js")
</body>

</html>

