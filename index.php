<html>
  <body>
    <ul>
      <?php 
        $data = file_get_contents("https://api.thecatapi.com/v1/breeds?limit=10"); 
        $dataj = json_decode($data);
      ?>
      <?php foreach ($dataj as $i => $value) : ?>
        <?php 
          $urlstring = "https://api.thecatapi.com/v1/images/search?breed_id=" . $dataj[$i]->id;
          $cats = json_decode(file_get_contents($urlstring));
        ?>
        <li>
          <a href="<?php echo "/breed.php?name=" . $cats[0]->breeds[0]->name; ?>">
            <div>
              <?php echo $dataj[$i]->name; ?>
              <img src="<?php echo $cats[0]->url?>" width="100", height="100"> </img>
            </div>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </body>
</html>