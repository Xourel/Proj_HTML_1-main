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
  background: #1abc9c;
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
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {
  order: 1;
  flex: 50%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}
h1  {
    text-align: center;
}
h2  {
    text-align: center;
}
h3  {
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
  <h1>My Website</h1>
  <p>With a <b>flexible</b> layout.</p>
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
                        <div class="carousel-item active c-item">
                            <img src="<?php echo $img?>" onerror="this.onerror=null;this.src='https://placeimg.com/200/300/animals';"  class="d-block w-100 c-img" alt= <?php echo $PlateName?>>
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
  <h1> Ingredients :</h1><br>
  <p>
            <?php
                foreach($json->ingredients as $ing)
                {?>
                     <?php echo $ing->name_fr . ', ';?>
                <?php
                }
            ?></p>
    <br>
    <h2> Prix :</h2><br>
    <h3><?php echo  $Price . " €";?> <h3>
            
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