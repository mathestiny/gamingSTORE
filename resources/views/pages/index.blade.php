@extends('layouts.app') 


@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
<h1>Bienvenue chez GamingSTORE, inscrivez-vous pour voir nos offres. </h1>


 <br><br>
 <h1 class="vh1">Streaming Live!</h1>
 <html>
    <body>
      <div id="twitch-embed"></div>
      <script src="https://embed.twitch.tv/embed/v1.js"></script>  
      <script type="text/javascript">
        new Twitch.Embed("twitch-embed", {
          width: 800,
          height: 500,
          channel: "teevycorp",
         
        });
      </script>
    </body>
  </html>
@endsection