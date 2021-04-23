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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Declutter</title>

    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css/owl.carousel.css" />
    <link rel="stylesheet" href="./css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="./css/aos.css" />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <nav class="nav">
      <div class="nav-menu flex-row">
        <div class="nav-brand">
       
          <a href="./welcome.php" class="text-gray">Declutter</a>
        </div>
        <div class="toggle-collapse">
          <div class="toggle-icons">
            <i class="fas fa-bars"></i>
          </div>
        </div>
        <div>
          <ul class="nav-items">
            <li class="nav-link">
              <a href="./welcome.php">Home</a>
            </li>
            <li class="nav-link">
              <a href="#article">Articles</a>
            </li>
            <li class="nav-link">
              <a href="./contact.php">Contact Us</a>
            </li>
            <li class="nav-link">
              <a href="./aboutus.php">About Us</a>
            </li>
          </ul>
        </div>
        <div class="social text-gray">
          <a href="https://www.facebook.com/"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a href="https://www.instagram.com/"
            ><i class="fab fa-instagram"></i
          ></a>
          <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </nav>

    <main>
      <section class="site-title">
        <div class="site-background" data-aos="fade-up" data-aos-delay="100">
          <h1>
            "Each Generation will reap what the former generation has sown."
          </h1>
          <h3>
            The world of stresses and worries and errands and projects and noise
            that we must all endure inflicts upon us a mind full of clutter and
            chaos. A mind that sometimes cannot find the calm that we so
            desperately seek.
          </h3>
          <a href="./register.php"
            ><button class="btn">Log In</button></a
          >
          <a href="./register.php"
            ><button class="btn">Sign Up</button></a
          >
        </div>
      </section>

      <section>
        <div class="blog">
          <div class="container">
            <div class="owl-carousel owl-theme blog-post">
              <div
                class="blog-content"
                data-aos="fade-right"
                data-aos-delay="200"
              >
                <!-- <img src="./assets/3.png" alt="post-1" /> -->
                <div class="blog-title">
                    <h2>Inception</h2>
                  <p>
                    Our universe began with an explosion of space itself - the
                    Big Bang. Starting from extremely high density and
                    temperature, space expanded, the universe cooled, and the
                    simplest elements formed. Gravity gradually drew matter
                    together to form the first stars and the first galaxies. But
                    doesn’t it sounds amazing that among millions of
                    possibilities in the whole damn universe we are the ones to
                    witness life. Infact the way we evolve is very astonishing,
                    nobody would have even thought among Homo Habilis that what
                    they could be. From discovering shelter, fire to flying
                    helicopter on Mars the thing that drives us is the habit of
                    searching something new. This is very phenomenal and we even
                    don’t know that where in the etrnity it would take us.
                  </p>
                  <!-- <button class="btn btn-blog">Fashion</button>
                            <span>2 minutes</span> -->
                </div>
              </div>
              <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                <!-- <img src="./assets/4.jpg" alt="post-1" /> -->
                <div class="blog-title">
                    <h2>Contemporary</h2>
                  <p>
                    Today our life has totally changed. Technology is growing
                    fast like never before. We are living in a world where
                    priority of people is to achieve, we constantly push
                    ourselves to grow more. We have developed a culture where
                    people have to work forcefully yet willingly to achieve
                    something. World keeps high expectations from an individual
                    and in order to prove themselves people are under extreme
                    pressure and have developed very strange kind of lifestyles
                    and habits. They are experiencing a lot of things that are
                    affecting their health, both physically and mentally. And
                    that is totally not fine. The consequences of these
                    experiences leads to mental illness like depression, anxiety
                    etc and dependence on technology is making us inefficient
                    physically. Living such as busy life meaningless if we are
                    unaware of what happening to us.
                  </p>
                  <!-- <button class="btn btn-blog">Fashion</button>
                            <span>2 minutes</span> -->
                </div>
              </div>
              <div
                class="blog-content"
                data-aos="fade-left"
                data-aos-delay="200"
              >
                <!-- <img src="./assets/5.jpg" alt="post-1" /> -->
                <div class="blog-title">
                  <h2>"Survival of the fittest"</h2>
                  <p>
                    A visionary, intellectual and smart mind can be a torch
                    bearer to the entire world. It can sense the circumstances
                    and lead the world on the right way. Remember, “Everything
                    have some circumstances.” At this point of life it is very
                    important to be aware of the things like mental illness and
                    harmful technology because it is not just going to decay us
                    in present but also if we don’t get rid of them then we will
                    end up passing it further it to our generations. And such
                    technological advances are worthlessly bane if we are not
                    physically and mentally fit and strong. So lets join our
                    hands make our people aware and stop humans to deviate in
                    wrong direction. We dream of a world where people are happy,
                    strong and blissful in addition to being technically gaints.
                  </p>
                  <!-- <button class="btn btn-blog">Fashion</button>
                            <span>2 minutes</span> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="container" id="article">
        <div class="site-content">
          <div class="posts">
            <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
              <div class="post-image">
                <div>
                  <img src="./assets/anexitybada1.jpg" class="img" alt="blog1" />
                </div>
                <div class="post-info flex-row">
                  <span
                    ><i class="fas fa-user text-gray"></i
                    >&nbsp;&nbsp;Kushagra</span
                  >
                  <span
                    ><i class="fas fa-calendar-alt text-gray"></i
                    >&nbsp;&nbsp;April 15, 2021</span
                  >
                  <span>2 Commets</span>
                </div>
              </div>
              <div class="post-title">
                <a href="./blogs/anixety.php">Everything you need to know about Anxiety</a>
                <p>
                  Anxiety is your body’s natural response to stress. It’s a
                  feeling of fear or apprehension about what’s to come. The
                  first day of school, going to a job interview, or giving a
                  speech may cause most people to feel fearful and nervous.
                </p>
                <a href="./blogs/anixety.php"><button class="btn post-btn">
                  Read More &nbsp; <i class="fas fa-arrow-right"></i>
                </button></a>
              </div>
            </div>
            <hr />
            <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
              <div class="post-image">
                <div>
                  <img src="./assets/stressbada1.png" class="img" alt="blog1" />
                </div>
                <div class="post-info flex-row">
                  <span
                    ><i class="fas fa-user text-gray"></i
                    >&nbsp;&nbsp;Harshiv</span
                  >
                  <span
                    ><i class="fas fa-calendar-alt text-gray"></i
                    >&nbsp;&nbsp;April 15, 2021</span
                  >
                  <span>7 Commets</span>
                </div>
              </div>
              <div class="post-title">
                <a href="./blogs/stress.php">Everything you need to know about Stress</a>
                <p>
                    There's no medical definition of stress, and health care professionals often disagree over whether stress is the cause of problems or the result of them. This can make it difficult for you to work out what causes your feelings of stress, or how to deal with them. But whatever your personal definition of stress 
                </p>
               <a href="./blogs/stress.php"> <button class="btn post-btn">
                  Read More &nbsp; <i class="fas fa-arrow-right"></i>
                </button></a>
              </div>
            </div>
            <hr />
            <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
              <div class="post-image">
                <div>
                  <img src="./assets/ptsdbada.png" class="img" alt="blog1" />
                </div>
                <div class="post-info flex-row">
                  <span
                    ><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Aman</span
                  >
                  <span
                    ><i class="fas fa-calendar-alt text-gray"></i
                    >&nbsp;&nbsp;April 15, 2021</span
                  >
                  <span>5 Commets</span>
                </div>
              </div>
              <div class="post-title">
                <a href="./blogs/PTSD.php"
                  >Everything you need to know about Post-traumatic stress disorder (PTSD)</a
                >
                <p>
                    Post-traumatic stress disorder (PTSD) is a mental health condition that's triggered by a terrifying event — either experiencing it or witnessing it. Symptoms may include flashbacks, nightmares and severe anxiety, as well as uncontrollable thoughts about the event
                </p>
                <a href="./blogs/PTSD.php"><button class="btn post-btn">
                  Read More &nbsp; <i class="fas fa-arrow-right"></i>
                </button></a>
              </div>
            </div>
            <hr />
            <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
              <div class="post-image">
                <div>
                  <img
                    
                    src="./assets/addictionbada1.jpg"
                    class="img"
                    alt="blog1"
                  />
                </div>
                ;
                <div class="post-info flex-row">
                  <span
                    ><i class="fas fa-user text-gray"></i
                    >&nbsp;&nbsp;Kushagra</span
                  >
                  <span
                    ><i class="fas fa-calendar-alt text-gray"></i
                    >&nbsp;&nbsp;April 15, 2021</span
                  >
                  <span>12 Commets</span>
                </div>
              </div>
              <div class="post-title">
                <a href="./blogs/addiction.php"
                  >Everything you need to know about Addiction</a
                >
                <p>
                    The term addiction does not only refer to dependence on substances such as heroin or cocaine. A person who cannot stop taking a particular drug or chemical has a substance dependence.
                    Some addictions also involve an inability to stop 
                </p>
                <a href="./blogs/addiction.php"><button class="btn post-btn">
                  Read More &nbsp; <i class="fas fa-arrow-right"></i>
                </button></a>
              </div>
            </div>
          </div>
          <aside class="sidebar">
            <div class="category">
              <h2>Category</h2>
              <ul class="category-list">
                <li
                  class="list-items"
                  data-aos="fade-left"
                  data-aos-delay="100"
                >
                  <a href="./blogs/anixety.php">Anxiety</a>
                  <span>(05)</span>
                </li>
                <li
                  class="list-items"
                  data-aos="fade-left"
                  data-aos-delay="200"
                >
                  <a href="./blogs/PTSD.php">Post-traumatic stress disorder</a>
                  <span>(02)</span>
                </li>
                <li
                  class="list-items"
                  data-aos="fade-left"
                  data-aos-delay="300"
                >
                  <a href="./blogs/addiction.php">Addiction</a>
                  <span>(07)</span>
                </li>
                <li
                  class="list-items"
                  data-aos="fade-left"
                  data-aos-delay="400"
                >
                  <a href="./blogs/stress.php">Stress</a>
                  <span>(01)</span>
                </li>
                <li
                  class="list-items"
                  data-aos="fade-left"
                  data-aos-delay="500"
                >
                  <a href="./blogs/personalitydisorder.php">Personality Disorder</a>
                  <span>(08)</span>
                </li>
                <li
                  class="list-items"
                  data-aos="fade-left"
                  data-aos-delay="500"
                >
                  <a href="./blogs/bipolardisorder.php">Bipolar Disorder</a>
                  <span>(08)</span>
                </li>
              </ul>
            </div>
            <div class="popular-post">
              <h2>Popular Post</h2>
              <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                <div class="post-image">
                  <div>
                    <img src="./assets/personalitydisorderchota.jpg" class="img" alt="blog1" />
                  </div>
                  <div class="post-info flex-row">
                    <span
                      ><i class="fas fa-calendar-alt text-gray"></i
                      >&nbsp;&nbsp;April 15, 2021</span
                    >
                    <span>2 Commets</span>
                  </div>
                </div>
                <div class="post-title">
                  <a href="./blogs/personalitydisorder.php"
                    >What is Personality Disorder?</a
                  >
                </div>
              </div>
              <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                <div class="post-image">
                  <div>
                    <img src="./assets/bipolardiorderchota.jpg" class="img" alt="blog1" />
                  </div>
                  <div class="post-info flex-row">
                    <span
                      ><i class="fas fa-calendar-alt text-gray"></i
                      >&nbsp;&nbsp;April 15, 2021</span
                    >
                    <span>2 Commets</span>
                  </div>
                </div>
                <div class="post-title">
                  <a href="./blogs/bipolardisorder.php"
                    >Do you know about Bipolar Disorder</a
                  >
                </div>
              </div>
              <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                <div class="post-image">
                  <div>
                    <img src="./assets/addictionchota.jpg" class="img" alt="blog1" />
                  </div>
                  <div class="post-info flex-row">
                    <span
                      ><i class="fas fa-calendar-alt text-gray"></i
                      >&nbsp;&nbsp;April 15, 2021</span
                    >
                    <span>2 Commets</span>
                  </div>
                </div>
                <div class="post-title">
                  <a href="./blogs/addiction.php"
                    >What is the actual meaning of Addiction</a
                  >
                </div>
              </div>
              <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                <div class="post-image">
                  <div>
                    <img src="./assets/anixetychota.jpg" class="img" alt="blog1" />
                  </div>
                  <div class="post-info flex-row">
                    <span
                      ><i class="fas fa-calendar-alt text-gray"></i
                      >&nbsp;&nbsp;April 15, 2021</span
                    >
                    <span>2 Commets</span>
                  </div>
                </div>
                <div class="post-title">
                  <a href="./blogs/anixety.php"
                    >Let's read very interesting facts about Anixety</a
                  >
                </div>
              </div>
              <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                <div class="post-image">
                  <div>
                    <img src="./assets/ptsdchota.jpg" class="img" alt="blog1" />
                  </div>
                  <div class="post-info flex-row">
                    <span
                      ><i class="fas fa-calendar-alt text-gray"></i
                      >&nbsp;&nbsp;April 15, 2021</span
                    >
                    <span>2 Commets</span>
                  </div>
                </div>
                <div class="post-title">
                  <a href="./blogs/PTSD.php"
                    >Do you know what is full form of PTSD let's read this</a
                  >
                </div>
              </div>
            </div>
            <div class="popular-tags">
              <h2>Popular Tags</h2>
              <div class="tags flex-row">
                <span class="tag" data-aos="flip-up" data-aos-delay="100"
                  >Blissful</span
                >
                <span class="tag" data-aos="flip-up" data-aos-delay="200"
                  >Concentration</span
                >
                <span class="tag" data-aos="flip-up" data-aos-delay="300"
                  >Mindfulness</span
                >
                <span class="tag" data-aos="flip-up" data-aos-delay="400"
                  >Strength</span
                >
                <span class="tag" data-aos="flip-up" data-aos-delay="500"
                  >Willpower</span
                >
                <span class="tag" data-aos="flip-up" data-aos-delay="600"
                  >Determination</span
                >
                <span class="tag" data-aos="flip-up" data-aos-delay="700"
                  >Love</span
                >
                <span class="tag" data-aos="flip-up" data-aos-delay="800"
                  >Courage</span
                >
              </div>
            </div>
          </aside>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="container">
        <div class="follow" data-aos="fade-left" data-aos-delay="200">
          <h2>Follow us</h2>
          <p>Let us be Social</p>
          <div>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
      <div class="rights flex-row">
        <h4 class="text-gray">Copyright ©2021 Declutter - All right reserverd</h4>
      </div>
      <div class="move-up">
        <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
      </div>
    </footer>
    <script src="./js/jquery3.6.0.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/aos.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>

