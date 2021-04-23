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
    <title>Anxiety blog</title>
    <link rel="stylesheet" href="./style1.css" />
    <link rel="stylesheet" href="./utilsis1.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="./blogpost.css" />
    
  </head>
  <body>
    <nav class="nav">
      <div class="nav-menu flex-row">
        <div class="nav-brand">
          <a href="../welcome.php" class="text-gray">Declutter</a>
        </div>
        <div class="toggle-collapse">
          <div class="toggle-icons">
            <i class="fas fa-bars"></i>
          </div>
        </div>
        <div>
          <ul class="nav-items">
            <li class="nav-link">
              <a href="../welcome.php">Home</a>
            </li>
            <li class="nav-link">
              <a href="#">Articles</a>
            </li>
            <li class="nav-link">
              <a href="../contact.php">Contact Us</a>
            </li>
            <li class="nav-link">
              <a href="../aboutus.php">About Us</a>
            </li>
          </ul>
        </div>
        <div class="social text-gray">
          <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </nav>

    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="post-img">
        <img src="../assets/ptsdbada.png" alt="">
    </div>
    <div class="m-auto blog-post-content max-width-2 m-auto my-2">
        <h1 class="font1">Post-traumatic stress disorder</h1>
        <div class="blogpost-meta">
            <div class="author-info">
                <div>
                <b>
                  Author - Bill Gates (CEO Microtek)
                </b>
                </div>
                <div>04 January</div>
            </div>
            <div class="social">
                <svg width="29" height="29" class="hk"><path d="M22.05 7.54a4.47 4.47 0 0 0-3.3-1.46 4.53 4.53 0 0 0-4.53 4.53c0 .35.04.7.08 1.05A12.9 12.9 0 0 1 5 6.89a5.1 5.1 0 0 0-.65 2.26c.03 1.6.83 2.99 2.02 3.79a4.3 4.3 0 0 1-2.02-.57v.08a4.55 4.55 0 0 0 3.63 4.44c-.4.08-.8.13-1.21.16l-.81-.08a4.54 4.54 0 0 0 4.2 3.15 9.56 9.56 0 0 1-5.66 1.94l-1.05-.08c2 1.27 4.38 2.02 6.94 2.02 8.3 0 12.86-6.9 12.84-12.85.02-.24 0-.43 0-.65a8.68 8.68 0 0 0 2.26-2.34c-.82.38-1.7.62-2.6.72a4.37 4.37 0 0 0 1.95-2.51c-.84.53-1.81.9-2.83 1.13z"></path></svg>

                <svg style="background: black;
                border-radius: 21px;" width="29" height="29" viewBox="0 0 29 29" fill="none" class="hk"><path d="M5 6.36C5 5.61 5.63 5 6.4 5h16.2c.77 0 1.4.61 1.4 1.36v16.28c0 .75-.63 1.36-1.4 1.36H6.4c-.77 0-1.4-.6-1.4-1.36V6.36z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.76 20.9v-8.57H7.89v8.58h2.87zm-1.44-9.75c1 0 1.63-.65 1.63-1.48-.02-.84-.62-1.48-1.6-1.48-.99 0-1.63.64-1.63 1.48 0 .83.62 1.48 1.59 1.48h.01zM12.35 20.9h2.87v-4.79c0-.25.02-.5.1-.7.2-.5.67-1.04 1.46-1.04 1.04 0 1.46.8 1.46 1.95v4.59h2.87v-4.92c0-2.64-1.42-3.87-3.3-3.87-1.55 0-2.23.86-2.61 1.45h.02v-1.24h-2.87c.04.8 0 8.58 0 8.58z" fill="#fff"></path></svg>

                <svg width="29" height="29" class="hk"><path d="M23.2 5H5.8a.8.8 0 0 0-.8.8V23.2c0 .44.35.8.8.8h9.3v-7.13h-2.38V13.9h2.38v-2.38c0-2.45 1.55-3.66 3.74-3.66 1.05 0 1.95.08 2.2.11v2.57h-1.5c-1.2 0-1.48.57-1.48 1.4v1.96h2.97l-.6 2.97h-2.37l.05 7.12h5.1a.8.8 0 0 0 .79-.8V5.8a.8.8 0 0 0-.8-.79"></path></svg>

            </div>
        </div class="font1">
         <p class="font1">
         <h2 class="font1">Overview</h2> 
          <p class="font1">Post-traumatic stress disorder (PTSD) is a mental health condition that's triggered by a terrifying event — either experiencing it or witnessing it. Symptoms may include flashbacks, nightmares and severe anxiety, as well as uncontrollable thoughts about the event.</p>
          <p class="font1">Most people who go through traumatic events may have temporary difficulty adjusting and coping, but with time and good self-care, they usually get better. If the symptoms get worse, last for months or even years, and interfere with your day-to-day functioning, you may have PTSD.</p>   
          <p class="font1">Getting effective treatment after PTSD symptoms develop can be critical to reduce symptoms and improve function.</p>   
          <h2 class="font1">Symptoms</h2>
          <p class="font1">Post-traumatic stress disorder symptoms may start within one month of a traumatic event, but sometimes symptoms may not appear until years after the event. These symptoms cause significant problems in social or work situations and in relationships. They can also interfere with your ability to go about your normal daily tasks.</p>
          <p class="font1">PTSD symptoms are generally grouped into four types: intrusive memories, avoidance, negative changes in thinking and mood, and changes in physical and emotional reactions. Symptoms can vary over time or vary from person to person.</p>
          <h2 class="font1">Intrusive memories</h2>
          <p class="font1">Symptoms of intrusive memories may include:</p>
          <li class="font1">Recurrent, unwanted distressing memories of the traumatic event</li>
          <li class="font1">Reliving the traumatic event as if it were happening again (flashbacks)</li>
          <li class="font1">Upsetting dreams or nightmares about the traumatic event</li>
          <li class="font1">Severe emotional distress or physical reactions to something that reminds you of the traumatic event</li>
          <h2 class="font1">Avoidance</h2>
          <li class="font1">Trying to avoid thinking or talking about the traumatic event</li>
          <li class="font1">Avoiding places, activities or people that remind you of the traumatic event</li>


          <h2 class="font1">Negative changes in thinking and mood</h2>
          <p class="font1">Symptoms of negative changes in thinking and mood may include:</p>
          <li class="font1">Negative thoughts about yourself, other people or the world</li>
          <li class="font1">Hopelessness about the future</li>
          <li class="font1">Memory problems, including not remembering important aspects of the traumatic event</li>
          <li class="font1">Difficulty maintaining close relationships</li>
          <li class="font1">Feeling detached from family and friends</li>
          <li class="font1">Lack of interest in activities you once enjoyed</li>
          <li class="font1">Difficulty experiencing positive emotions</li>
          <li class="font1">Feeling emotionally numb</li>
         
          <h2 class="font1">Changes in physical and emotional reactions</h2>
          <p class="font1">Symptoms of changes in physical and emotional reactions (also called arousal symptoms) may include:</p>
          <li class="font1" >Being easily startled or frightened</li>
          <li class="font1" >Always being on guard for danger</li>
          <li class="font1" >Self-destructive behavior, such as drinking too much or driving too fast</li>
          <li class="font1" >Trouble sleeping</li>
          <li class="font1" >Trouble concentrating</li>
          <li class="font1" >Irritability, angry outbursts or aggressive behavior</li>
          <li class="font1" >Overwhelming guilt or shame</li>
          <p class="font1">For children 6 years old and younger, signs and symptoms may also include:</p>
          <li class="font1" >Re-enacting the traumatic event or aspects of the traumatic event through play</li>
          <li class="font1" >Frightening dreams that may or may not include aspects of the traumatic event</li>
          <h2 class="font1" >Intensity of symptoms</h2>
          <p class="font1" >PTSD symptoms can vary in intensity over time. You may have more PTSD symptoms when you're stressed in general, or when you come across reminders of what you went through. For example, you may hear a car backfire and relive combat experiences. Or you may see a report on the news about a sexual assault and feel overcome by memories of your own assault.</p>
          
          <h2 class="font1" >When to see a doctor</h2>
          <p class="font1" >If you have disturbing thoughts and feelings about a traumatic event for more than a month, if they're severe, or if you feel you're having trouble getting your life back under control, talk to your doctor or a mental health professional. Getting treatment as soon as possible can help prevent PTSD symptoms from getting worse.</p>
          <h2 class="font1">If you have suicidal thoughts</h2>
          <p class="font1">If you or someone you know has suicidal thoughts, get help right away through one or more of these resources:</p>
          <li class="font1">Reach out to a close friend or loved one.</li>
          <li class="font1" >Contact a minister, a spiritual leader or someone in your faith community.</li>
          <li class="font1" >Make an appointment with your doctor or a mental health professional.</li>
          <h2 class="font1">When to get emergency help</h2>
          <p class="font1"  >If you think you may hurt yourself or attempt suicide, call 911 or your local emergency number immediately.If you know someone who's in danger of attempting suicide or has made a suicide attempt, make sure someone stays with that person to keep him or her safe. Call 911 or your local emergency number immediately. Or, if you can do so safely, take the person to the nearest hospital emergency room.</p>
          <h2 class="font1"  >Causes</h2>
          <p class="font1" >You can develop post-traumatic stress disorder when you go through, see or learn about an event involving actual or threatened death, serious injury or sexual violation.</p>
          <p class="font1" >Doctors aren't sure why some people get PTSD. As with most mental health problems, PTSD is probably caused by a complex mix of:</p>
          <li class="font1" >Stressful experiences, including the amount and severity of trauma you've gone through in your life</li>
          <li class="font1" >Inherited mental health risks, such as a family history of anxiety and depression</li>
          <li class="font1" >Inherited features of your personality — often called your temperament</p>
          <li class="font1" >The way your brain regulates the chemicals and hormones your body releases in response to stress</p>
          
          <h2 class="font1">Risk factors</h2>
          <p class="font1">People of all ages can have post-traumatic stress disorder. However, some factors may make you more likely to develop PTSD after a traumatic event, such as:</p>
        
          <li class="font1">Experiencing intense or long-lasting trauma</li>
          <li class="font1">Having experienced other trauma earlier in life, such as childhood abuse</li>
          <li class="font1">Having a job that increases your risk of being exposed to traumatic events, such as military personnel and first responders</li>
          <li class="font1">Having other mental health problems, such as anxiety or depression</li>
          <li class="font1">Having problems with substance misuse, such as excess drinking or drug use</li>
          <li class="font1">Having problems with substance misuse, such as excess drinking or drug use</li>
          <li class="font1">Having blood relatives with mental health problems, including anxiety or depression</li>
          <h2 class="font1">Complications</h2>
          <p class="font1">Post-traumatic stress disorder can disrupt your whole life ― your job, your relationships, your health and your enjoyment of everyday activities.</p>
          <p class="font1">Having PTSD may also increase your risk of other mental health problems, such as:</p>
          <li>Depression and anxiety</li>
          <li>Issues with drugs or alcohol use</li>
          <li>Eating disorders</li>
          <li>Suicidal thoughts and actions</li>
          <h2 class="font1">Prevention</h2>
          <p class="font1">After surviving a traumatic event, many people have PTSD-like symptoms at first, such as being unable to stop thinking about what's happened. Fear, anxiety, anger, depression, guilt — all are common reactions to trauma. However, the majority of people exposed to trauma do not develop long-term post-traumatic stress disorder.</p>
          <p class="font1">Getting timely help and support may prevent normal stress reactions from getting worse and developing into PTSD. This may mean turning to family and friends who will listen and offer comfort. It may mean seeking out a mental health professional for a brief course of therapy. Some people may also find it helpful to turn to their faith community.</p>
          <p class="font1">Support from others also may help prevent you from turning to unhealthy coping methods, such as misuse of alcohol or drugs.</p>
        </div>


    <div class="max-width-1 m-auto"><hr></div>
    <div class="comment-form">
        
      <h3 class="text-center display-1 secondary-title py-2 fs">Leave Comment</h3>

      <div class="d-flex justify-content-between flex-wrap">
          <input type="text" class="form-control" placeholder="Name">
          <input type="email" class="form-control" placeholder="Email">
      </div>

      <textarea class="form-control mt-3" placeholder="Message" rows="10"></textarea>
      <div class="text-center">
          <button class="btd btd-primary display-2 text-light mt-2 bgu">Submit</button>
      </div>
  </div>
</div>

</div>
    <footer class="background">
      <p class="text-footer">
        Copyright &copy; 2021 Declutter - All right reserverd
      </p> 
    </footer>
    <script src="../js/jquery3.6.0.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
