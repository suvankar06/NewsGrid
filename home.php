<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      media="screen and (max-width: 768px)"
      href="css/mobile.css"
    />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css"
    />
    <title>NewsGrid | Latest News</title>
  </head>
  <body>
    <nav id="main-nav">
      <div class="container">
        <img src="img/image_resources/logo.png" alt="NewsGrid" class="logo" />
        <div class="social">
          <a href="http://facebook.com" target="_blank">
            <i class="ion-social-facebook"></i>
          </a>
          <a href="http://twitter.com" target="_blank">
            <i class="ion-social-twitter"></i>
          </a>
          <a href="http://instagram.com" target="_blank">
            <i class="ion-social-instagram"></i>
          </a>
          <a href="http://youtube.com" target="_blank">
            <i class="ion-social-youtube"></i>
          </a>
        </div>
        <ul>
          <li><a class="current" href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="logout.php">logout</a></li>
        </ul>
  </ul>
  </div>
      </div>
    </nav>
    <header id="showcase">
      <div class="container">
        <div class="showcase-container">
          <div class="showcase-content">
            <div class="category-sports">Sports</div>
            <h1><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
              minima laborum consectetur beatae. Possimus repellat quis rem
              repudiandae quisquam, dolore non commodi consequuntur, ipsa
              molestias exercitationem placeat consequatur mollitia totam!
            </p>
          </div>
        </div>
      </div>
    </header>
    <section id="home-articles" class="py-2">
      <div class="container">
        <h2>Editor Picks</h2>
        <div class="article-container">
          <article class="card">
            <img src="img/image_resources/articles/ent1.jpg" alt="" />
            <div>
              <div class="category-ent">Entertainment</div>
              <h3>
                <a href="article.html">Lorem ipsum dolor sit amet</a>
              </h3>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Repellendus iusto maiores neque! Nemo quisquam nisi maiores
                quidem dolor, delectus dignissimos!
              </p>
            </div>
          </article>
          <article class="card bg-dark">
            <div class="category category-sports">Sports</div>
            <h3>
              <a href="article.html">Lorem ipsum dolor sit amet</a>
            </h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Repellendus iusto maiores neque! Nemo quisquam nisi maiores quidem
              dolor, delectus dignissimos!
            </p>
          </article>
          <article class="card">
            <img src="img/image_resources/articles/tech1.jpg" alt="" />
            <div class="category category-tech">Technology</div>
            <h3>
              <a href="article.html">Lorem ipsum dolor sit amet </a>
            </h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Repellendus iusto maiores neque! Nemo quisquam nisi maiores quidem
              dolor, delectus dignissimos!
            </p>
          </article>
          <article class="card">
            <div class="category category-sports">Sports</div>
            <h3>
              <a href="article.html">Lorem ipsum dolor sit amet </a>
            </h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Repellendus iusto maiores neque! Nemo quisquam nisi maiores quidem
              dolor, delectus dignissimos!
            </p>
            <img src="img/image_resources/articles/sports1.jpg" alt="" />
          </article>
          <article class="card">
            <img src="img/image_resources/articles/tech2.jpg" alt="" />
            <div class="category category-tech">Technology</div>
            <h3>
              <a href="article.html">Lorem ipsum dolor sit amet </a>
            </h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Repellendus iusto maiores neque! Nemo quisquam nisi maiores quidem
              dolor, delectus dignissimos!
            </p>
          </article>
          <article class="card bg-primary">
            <div class="category category-sports">Sports</div>
            <h3>
              <a href="article.html">Lorem ipsum dolor sit amet </a>
            </h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Repellendus iusto maiores neque! Nemo quisquam nisi maiores quidem
              dolor, delectus dignissimos!
            </p>
          </article>
          <article class="card">
            <div>
              <div class="category-ent">Entertainment</div>
              <h3>
                <a href="article.html">Lorem ipsum dolor sit amet</a>
              </h3>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Repellendus iusto maiores neque! Nemo quisquam nisi maiores
                quidem dolor, delectus dignissimos!
              </p>
            </div>
            <img src="img/image_resources/articles/ent2.jpg" alt="" />
          </article>
        </div>
      </div>
    </section>
    <footer id="main-footer" class="py-2">
      <div class="container footer-container">
        <div>
          <img src="img/image_resources/logo_light.png" alt="NewsGrid" />
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci
            officia dignissimos illum deserunt recusandae animi facere
            molestiae, voluptatibus quidem maiores!
          </p>
        </div>
        <div>
          <h3>Email Newsletter</h3>
          <p>Lorem ipsum dolor sit amet consectetur.</p>
          <form>
            <input type="email" placeholder="Enter Email..." />
            <input type="submit" value="subscribe" class="btn btn-primary" />
          </form>
        </div>
        <div>
          <h3>Site Links</h3>
            <ul class="list">
              <li><a href="#">Help & Support</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div>
          <h2>Join our Club</h2>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste,
              officia
            </p>
            <a href="#" class="btn btn-secondary">Join Now</a>
          </div>
          <div>
            <p>
              copyright &copy; 2020, All Rights Reserved
            </p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
