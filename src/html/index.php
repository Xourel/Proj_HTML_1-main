
  <style>
    .joli-image {
      display: flex;
      justify-content: center;
      margin-top: 5%;
    }

    .header {
      margin-top: 5%;
    }

    h1 {
      text-align: center;
    }

    .container {
      display: flex;
      justify-content: start;
      align-items: center;
      margin-top: 20px;
      background-color: #5784BA;
      margin-top: 2%;
      color:#9AC8EB;
    }

    .container.menu-txt {
      order: 2;
      flex-grow: 7;
      width: 40%;
      ;
    }

    .container.menu-img {
      order: 2;
      justify-items: end;
      flex-grow: 1;
    }

    /* Footer */
    .footer {
      padding: 20px;
      text-align: center;
      margin-top: 2%;
      background-color: #5784BA;
      color: #B6D8F2;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }

    .footer a {
      text-decoration: none;
      color: #B6D8F2;
    }

    .footer a:hover {
      text-decoration: underline;
    }

    p{
      font-size:large;
    }
    @media screen and (max-width:700px) {
      .header {
        margin-top: 10%;
      }
    }
  </style>
  <?php
  ob_start();
  ?>
  <div class="header">
    <h1>Bienvenue !</h1>
  </div>
  <div class="joli-image">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="..\..\res\img\index\windows.jpg" alt="Image 1" height="300">
        </div>
        <div class="carousel-item">
          <img src="..\..\res\img\index\cooking.jpg" alt="Image 2" height="300">
        </div>
        <div class="carousel-item">
          <img src="..\..\res\img\index\plate.jpg" alt="Image 3" height="300">
        </div>
        <div class="carousel-item">
          <img src="..\..\res\img\index\eating.jpg" alt="Image 4" height="300">
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="container">
    <div class="menu-txt">
      <h2 style="text-align:center;margin-top:10px">Qui sommes-nous</h2>
      <p>Bienvenue chez Chicken Deep, votre nouveau restaurant de référence pour une expérience culinaire inoubliable ! Nous sommes fiers de vous offrir des plats savoureux qui vous feront voyager gustativement parlant.</p>
      <p>Notre équipe de cuisiniers expérimentés met tout son savoir-faire et sa passion dans chaque assiette pour vous proposer des mets délicieux, préparés avec des ingrédients frais et de qualité.</p>
      <p>Que vous soyez un amateur de poulet ou que vous souhaitiez découvrir de nouvelles saveurs, nous sommes là pour satisfaire vos papilles. Notre menu est conçu pour offrir une variété de plats, allant des classiques traditionnels aux créations audacieuses et uniques.</p>
      <p>En tant que nouveau restaurant, nous apportons une approche innovante à la cuisine du poulet. Nous nous inspirons des cuisines du monde entier pour créer des plats qui marient les saveurs, les épices et les techniques culinaires dans une harmonie parfaite.</p>
      <p>Notre mission est de vous offrir bien plus qu'un simple repas. Nous voulons vous offrir une expérience culinaire qui éveille vos sens et vous transporte dans un voyage gustatif mémorable. Découvrez notre menu varié, notre ambiance chaleureuse et notre service attentif qui font de Chicken Deep une destination culinaire incontournable.</p>
    </div>
    <div class="menu-img" style="margin-left:10px ">
      <img src="..\..\res\img\index\nous.jpg" alt="nous" width="300px" height="300px">
    </div>
  </div>
  <div class="container">
    <div>
      <h2>Notre engagement</h2>
      <p>Chez Chicken Deep, nous nous engageons à vous offrir une expérience gastronomique unique. Nous croyons que la cuisine est un art et nous nous efforçons de créer des plats qui éveilleront vos papilles.</p>
      <p>En tant que nouveau restaurant, nous sommes déterminés à vous surprendre avec notre menu varié et nos saveurs audacieuses. Notre équipe est constamment à la recherche de nouvelles inspirations culinaires pour vous offrir des créations originales et délicieuses.</p>
      <p>Que vous soyez un amateur de poulet ou que vous souhaitiez découvrir de nouvelles saveurs, nous avons des options pour satisfaire tous les palais. Rejoignez-nous et laissez-nous vous emmener dans un voyage gustatif dont vous vous souviendrez.</p>
    </div>
  </div>
  <div class="container">
    <div>
      <h2>Notre Menu</h2>
      <p>Explorez notre menu diversifié et laissez-vous tenter par une sélection alléchante de plats à base de poulet. Du poulet croustillant et savoureux aux délicieux plats grillés, en passant par les recettes exotiques, nous avons de quoi satisfaire toutes vos envies.</p>
      <p>Nos chefs talentueux ont créé des combinaisons de saveurs uniques, en utilisant des épices et des ingrédients soigneusement sélectionnés pour vous offrir une expérience gustative incomparable. Que vous soyez un fan de poulet frit traditionnel, de spécialités épicées ou de plats plus légers, vous trouverez votre bonheur chez Chicken Deep.</p>
      <p>Accompagnez votre repas avec nos délicieuses sauces maison et nos côtés savoureux. Nous veillons à ce que chaque bouchée soit une explosion de saveurs et nous nous engageons à vous offrir une expérience culinaire mémorable.</p>
    </div>
  </div>
  <div class="container">
    <div class="menu-img">
      <img src="..\..\res\img\index\couple.jpg" alt="love" weight="300" width="300px">
    </div>
    <div class="menu-txt" style="margin-left:20px">
      <h2 style="margin-top:10px">Notre Ambiance</h2>
      <p>Chicken Deep ne se limite pas seulement à une expérience gustative exceptionnelle, nous mettons également l'accent sur une ambiance chaleureuse et conviviale. Notre restaurant est conçu pour vous offrir un espace confortable où vous pourrez profiter de votre repas en bonne compagnie.</p>
      <p>Nous avons créé une atmosphère accueillante avec une décoration moderne et des accents de poulet qui ajoutent une touche ludique à l'ensemble. Que ce soit pour un dîner en famille, un déjeuner entre amis ou une soirée romantique, nous avons l'endroit idéal pour vous.</p>
      <p>Nos équipes attentionnées sont là pour vous servir avec le sourire et vous offrir un service exceptionnel. Nous voulons que chaque visite chez Chicken Deep soit une expérience agréable et mémorable pour nos précieux clients.</p>
    </div>

  </div>

  <div class="container">
    <div class="menu-txt" style="margin-left:20px">
     <h2>Notre Localisation</h2>
    <p>Situé à proximité des célèbres Champs-Élysées, notre restaurant Chicken Deep bénéficie d'un emplacement idéal au cœur de la ville. Nous sommes ravis de vous accueillir dans notre établissement facilement accessible et bien desservi par les transports en commun.</p>
    <p>Que vous soyez un habitant local ou un visiteur de passage, vous pourrez facilement nous trouver et profiter de notre délicieuse cuisine. L'adresse de notre restaurant est :</p>
    <p>rue saint-Dominique, Paris 75007</p>
    <p>Pour vous aider à nous localiser plus facilement, vous pouvez consulter la carte interactive ci-dessous :</p>
    </div>
    <div class="menu-img">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.380394006403!2d2.301489264127351!3d48.85692238680739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fd79a073abf%3A0xf7ddc00d16c4028c!2sRue%20Saint-Dominique%2C%2075007%20Paris!5e0!3m2!1sfr!2sfr!4v1685223716708!5m2!1sfr!2sfr" 
              width="300" 
              height="300" 
              style="margin-top:10px; margin-bottom :10px;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">

    <h4>
      <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0">Notre Instagram</a>
    </h4>
    <h2>Bon appétit</h2>
    <h4>
      Notre téléphone: <a href="https://www.youtube.com/watch?v=VGrVlrIAQz4">06.11.84.34.56</a>
    </h4>
  </div>

  <?php
  $content = ob_get_clean();
  require_once("template.php");
  ?>