<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  <header>
    <ul>
      <li>
        <a href="/about">Chi siamo</a>
      </li>
      <li>
        <a href="/blog">Blog</a>
      </li>
    </ul>
  </header>

  <h1>Ciao {{ $name }}, sono la pagina Home che parla.</h1>


  @if ($isLoggedIn)
      <p>Bentornato {{ $name }}!</p>
  @else
      <a href="">Crea un account.</a>
  @endif
</body>
</html>

<style>
  li {
    display: inline;
    margin-right: 1rem;
  }
</style>