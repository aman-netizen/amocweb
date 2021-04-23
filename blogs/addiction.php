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
        <img src="../assets/addictionbada1.jpg" alt="">
    </div>
    <div class="m-auto blog-post-content max-width-2 m-auto my-2 font1">
        <h1 class="font1">Addiction</h1>
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
         <h2 class="font1">What is addiction?</h2>
        <p>Addiction is a psychological and physical inability to stop consuming a chemical, drug, activity, or substance, even though it is causing psychological and physical harm.</p>
        <p>The term addiction does not only refer to dependence on substances such as heroin or cocaine. A person who cannot stop taking a particular drug or chemical has a substance dependence.</p>
        <p>Some addictions also involve an inability to stop partaking in activities, such as gambling, eating, or working. In these circumstances, a person has a behavioral addiction.</p>
        <p>Addiction is a chronic disease that can also result from taking medications. The overuse of prescribed opioid painkillers, for example, causes 115 deaths every day in the United States.</p>
        <p>When a person experiences addiction, they cannot control how they use a substance or partake in an activity, and they become dependent on it to cope with daily life.</p>
        <p>Every year, addiction to alcohol, tobacco, illicit drugs, and prescription opioids costs the U.S. economy upward of $740 billion in treatment costs, lost work, and the effects of crime.</p>
        <p>Most people start using a drug or first engage in an activity voluntarily. However, addiction can take over and reduce self-control.</p>
      <h2>Addiction vs. misuse</h2>
      <p>Not everyone that misuses a substance has an addiction.
    Drug addiction and drug misuse are different.
    Misuse refers to the incorrect, excessive, or non-therapeutic use of body- and mind-altering substances.
    However, not everybody that misuses a substance has an addiction. Addiction is the long-term inability to moderate or cease intake.
    For example, a person who drinks alcohol heavily on a night out may experience both the euphoric and harmful effects of the substance.
    However, this does not qualify as an addiction until the person feels the need to consume this amount of alcohol regularly, alone, or at times of day when the alcohol will likely impair regular activities, such as in the morning.
    A person who has not yet developed an addiction may be put off further use by the harmful side effects of substance abuse. For example, vomiting or waking up with a hangover after drinking too much alcohol may deter some people from drinking that amount anytime soon.
    Someone with an addiction will continue to misuse the substance in spite of the harmful effects.
     </p>
        <h2>Symptoms</h2>
        <li>uncontrollably seeking drugs</li>
        <li>uncontrollably engaging in harmful levels of habit-forming behavior</li>
        <li>neglecting or losing interest in activities that do not involve the harmful substance or behavior</li>
        <li>relationship difficulties, which often involve lashing out at people who identify the dependency</li>
        <li>an inability to stop using a drug, though it may be causing health problems or personal problems, such as issues with employment or relationships</li>
        <li>hiding substances or behaviors and otherwise exercising secrecy, for example, by refusing to explain injuries that occurred while under the influence</li>
        <li>profound changes in appearance, including a noticeable abandonment of hygiene</li>
        <li>increased risk-taking, both to access the substance or activity and while using it or engaging in it</li>
        <h2>Withdrawal</h2>
        <p>PinterestStopping the use of a drug can lead to anxiety.
            When a person has an addiction, and they stop taking the substance or engaging in the behavior, they may experience certain symptoms.
            </p>
            <p>These symptoms include:</p>
            <li>Anxiety</li>
            <li>Irritability</li>
            <li>Tremors and Shaking</li>
            <li>Nausea</li>
            <li>Vomiting</li>
            <li>Fatigue</li>
            <li>A loss of appetite</li>
            <p>If a person has regularly used alcohol or benzodiazepines, and they stop suddenly or without medical supervision, withdrawal can be fatal.</p>
        <h2>Treatments</h2>
        <p>PinterestSupport groups and rehabilitation programs can be vital to recovery.
            Medicinal advances and progress in diagnosing have helped the medical community develop various ways to manage and resolve addiction.
            </p>
            <p>Methods Include:</p>
            <li>behavioral therapy and counseling</li>
            <li>medication and drug-based treatment</li>
            <li>medical devices to treat withdrawal</li>
            <li>treating related psychological factors, such as depression</li>
            <li>ongoing care to reduce the risk of relapse</li>
            <p>Addiction treatment is highly personalized and often requires the support of the individual’s community or family.
                Treatment can take a long time and may be complicated. Addiction is a chronic condition with a range of psychological and physical effects. Each substance or behavior may require different management.
                </p>
                <div>Takeaway</div>
                <p>Addiction is a serious, chronic dependence on a substance or activity. The prevalence of addiction costs the U.S. economy hundreds of billions of dollars every year.
                    A person with an addiction is unable to stop taking a substance or engaging in a behavior, though it has harmful effects on daily living.
                    Misuse is different from addiction. Substance misuse does not always lead to addiction, while addiction involves regular misuse of substances or engagement in harmful behavior.
                    Symptoms of addiction often include declining physical health, irritation, fatigue, and an inability to cease using a substance or engaging in a behavior. Addiction can lead to behavior that strains relationships and inhibits daily activities.
                    Ceasing to use the substance or engage in the behavior often leads to withdrawal symptoms, including nausea and shaking. Do not attempt to suddenly stop using alcohol or benzodiazepines without medical supervision.
                    Addiction treatment can be difficult, but it is effective. The best form of treatment depends on the substance and the presentation of the addiction, which varies from person to person. However, treatment often involves counseling, medication, and community support
                    </p>
         </div>
         </p>
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