<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />    
  <link href="{{asset('/css/app.css')}}" rel="stylesheet" type="text/css">  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">  
  <script src="//unpkg.com/alpinejs" defer></script>
   <title>Netwrix Partner Locator | Test task:Solobuto Alex</title>
  </head>
  <body class="mb-48 bg-gray-50">
      <nav id="nav_b">
          <a href="/"><img  id="nw-image" src="/images/netwrix.png" alt="" /></a>
      </nav>

  <main>
    {{$slot}}
  </main>
  

  <x-flash-message />
</body>

</html>