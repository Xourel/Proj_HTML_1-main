<?php
          
            $json = json_decode(urldecode($_GET['item'])) ; //decoder notre string en un objet réel 

            ob_start();
      
      
               //var_dump($json->data[0]->items[0]->ingredients);
                
                    $PlateName = $json->name_fr ;
                    //$firstImg = $json->data[1]->items[0]->images[2];
                    $Price = $json->prices[0]->price ;

ob_start();
?>


<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 60px;
  text-align: center;
  background: #9AC8EB ;
  color: white;
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
    order:2;
  flex: 30%;
  background-color: #F4CFDF;
  padding: 20px;
}

/* Main column */
.main {
  order: 1;
  flex: 40%;
  background-color: #F7F6CF;
  padding: 20px;
}

/* Fake image, just for this example */
.c-img {
  height: 500px;
  object-fit: cover;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
}
h1  {
    text-align: center;
}
h2  {
    text-align: center;
}
h5  {
    text-align: center;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row, .navbar {   
    flex-direction: column;
  }
}
</style>

<!-- Header -->
<div class="header">
  <h1> <?php echo $PlateName?></h1>
</div>

<!-- The flexible grid (content) -->
<div class="row">
  <div class="main">
  <div id="PlateCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <?php
                    foreach($json->images as $img)
                        {?>
                        <!-- Full-width images with number and caption text -->
                        <div class="carousel-item active c-img">
                            <img src="<?php echo $img?>" onerror="this.onerror=null;this.src='../../res/img/imageNontrouvé';"  class="d-block w-100 c-img" alt= <?php echo $PlateName?>>
                        </div>
                        <?php
                        }
                        ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#PlateCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#PlateCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
    </div>
  </div>
  <div class="side">
    <br><br>
  <h1> Ingredients :</h1><br>
  <h5>
            <?php
                foreach($json->ingredients as $ing)
                {?>
                     <?php echo $ing->name_fr . ', ';?>
                <?php
                }
            ?></h5>
    <br>
    <h2> Prix :</h2><br>
    <h5><?php echo  $Price . " €";?> <h5>
            
  </div>
</div>

<!-- Footer -->
<div class="footer">
  <h2>Footer</h2>
</div>



<?php
            $content = ob_get_clean();
            require_once("template.php");
            ?>