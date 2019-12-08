<html>
  <body>
  <header>
    <a href='/'>Home</a>
  </header>
    <?php 
      $urlstring = "https://api.thecatapi.com/v1/breeds/search?q=" . str_replace(' ', '%20', $_GET["name"]);
      $data = file_get_contents($urlstring); 
      $dataj = json_decode($data);
    ?>

    
    <h1> <?php echo $dataj[0] -> name; ?> </h1>
    <h2> <?php echo $dataj[0] -> origin; ?> </h2>
    <h3> <?php echo $dataj[0] -> description ?> </h3>
  </body>
</html>
