<div class="container">
  
  <div class="col">

<?php 

$texts = ["Yakuniy nazorat o'tkazish qoidalari
haqida o'rganib chiqing","Eslatma!!!
To‘lov kontrakt muddati!","NASA Finds Ancient Organic Material, Mysterious Methane on Mars"];

foreach($texts as $text){?>


    <div class="card-container">
      <div class="overlay"></div>
      <div class="overlay"></div>
      <div class="overlay"></div>
      <div class="overlay"></div>
      <div class="card">
        <p> <?= $text; ?>
 <span> 13:01:2024 </span></p>
        <span class"chev">&rsaquo;</span>
      </div>
    </div>

<?php }?>


  </div>
  


  <div class="col">

<?php 
$texts = ['NASA to Host Live Discussion on New Mars Science Results','20 Years of Earth Data Now at Your Fingertips','Astronomers Spot a Distant and Lonely Neutron Star'];

foreach($texts as $text){?>

    <div class="card-container">
      <div class="overlay"></div>
      <div class="overlay"></div>
      <div class="overlay"></div>
      <div class="overlay"></div>
      <div class="card">
        <h4><?= $text ?></h4>
        <span class"chev">&rsaquo;</span>
      </div>
    </div>
 <?php } ?>

   
  </div>


  
  <div class="col">

<?php 
$texts = ['Astronauts Safely in Orbit Following Launch to International Space Station',"As Solar Wind Blows, Our Heliosphere Balloons","Tiny Asteroid Discovered Saturday Disintegrates Hours Later Over Southern Africa"];

foreach($texts as $text):
?>


    <div class="card-container">
      <div class="overlay"></div>
      <div class="overlay"></div>
      <div class="overlay"></div>
      <div class="overlay"></div>
      <div class="card">
        <h4><?= $text; ?></h4>
        <span class"chev">&rsaquo;</span>
      </div>
    </div>
<?php endforeach; ?>


    
  </div>
  
</div>
