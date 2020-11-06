<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Home Page</title>
     </head>
  <body class="container">
      
      <!-- Just an image -->
        <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">SCP</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
        <br>


    
    <?php
        $scp = json_decode(file_get_contents('data.json'));
    ?>
    
    <?php foreach($scp as $value=>$display):    ?>
    
    <div class="card" style="width: 95%;">
  <div class="card-body">
      <h4><?php echo $display->Page_Name; ?></h4>
      <h4><?php echo $display->Item_Name; ?></h4>
    <p class="card-text"><?php echo $display->Conatinment; ?></p>
    <p class="card-text" id="<?php echo $value?>"><?php echo $display->Desc; ?></p>
    <p >
    <button class="btn btn-dark"  type="button" onclick="TextToSpeech(<?php echo $value?>)">Text To Speech</button>
    </p>

  </div>
</div>
    
    
    
    
    
    

    
    <?php endforeach; ?>
    
    <script>
        function TextToSpeech(value){
            
        const speech = new SpeechSynthesisUtterance();
        let voices = speechSynthesis.getVoices();
        let convert = document.getElementById(value).textContent;
        speech.text = convert;
        speech.pitch = 1;
        speech.volume =1;
        speech.rate =1;
        speech.voice = voices[1];
        window.speechSynthesis.speak(speech);
        }
    </script>
    
    <!-- http://www.scpwiki.com/scp-1092-ru -->
    <!-- http://www.scpwiki.com/scp-1399-ru -->    
<!--    <h1>H<h1>Heading: <?php echo $display->Page; ?></h1>
        <h2>Heading: <?php echo $display->Heading_1; ?></h2>
        <h3>Heading: <?php echo $display->Heading_2; ?></h3>
        <p>Heading: <?php echo $display->Paragraph; ?></p>
    -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src ="app.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>