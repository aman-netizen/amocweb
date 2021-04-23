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
        <img src="../assets/anexitybada1.jpg" alt="">
    </div>
    <div class="m-auto blog-post-content max-width-2 m-auto my-2">
        <h1 class="font1">Anxiety</h1>
        <div class="blogpost-meta">
            <div class="author-info">
                <div>
                <b>
                  Author - Kushagra 
                </b>
                </div>
                <div>15 April</div>
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
          <p class="font1">Anxiety is your body’s natural response to stress. It’s a feeling of fear or apprehension about what’s to come. The first day of school, going to a job interview, or giving a speech may cause most people to feel fearful and nervous.</p>
          </p> 
          <p class="font1">But if your feelings of anxiety are extreme, last for longer than six months, and are interfering with your life, you may have an anxiety disorder.</p>   
          <h2 class="font1">What are anxiety disorders?</h2>
          <p class="font1">It’s normal to feel anxious about moving to a new place, starting a new job, or taking a test. This type of anxiety is unpleasant, but it may motivate you to work harder and to do a better job. Ordinary anxiety is a feeling that comes and goes, but does not interfere with your everyday life.</p> 
          <p class="font1">In the case of an anxiety disorder, the feeling of fear may be with you all the time. It is intense and sometimes debilitating.</p>
          <p class="font1">This type of anxiety may cause you to stop doing things you enjoy. In extreme cases, it may prevent you from entering an elevator, crossing the street, or even leaving your home. If left untreated, the anxiety will keep getting worse.</p>
          <h2 class="font1">What are the types of anxiety disorders?</h2>
          <p class="font1">Anxiety is a key part of several different disorders. These include:</p>
          <li class="font1">Panic disorder: experiencing recurring panic attacks at unexpected times. A person with panic disorder may live in fear of the next panic attack.</li>
          <li class="font1">Phobia: excessive fear of a specific object, situation, or activity</li>
          <li class="font1">Social anxiety disorder: extreme fear of being judged by others in social situations</li>
          <li class="font1">Obsessive-compulsive disorder: recurring irrational thoughts that lead you to perform specific, repeated behaviors</li>
          <li class="font1">Separation anxiety disorder: fear of being away from home or loved ones</li>
          <li class="font1">Illness anxiety disorder: anxiety about your health (formerly called hypochondria)</li>
          <h2 class="font1">What are the symptoms of anxiety?</h2>
          <p class="font1">Anxiety feels different depending on the person experiencing it. Feelings can range from butterflies in your stomach to a racing heart. You might feel out of control, like there’s a disconnect between your mind and body.</p>
          <p class="font1">Other ways people experience anxiety include nightmares, panic attacks, and painful thoughts or memories that you can’t control. You may have a general feeling of fear and worry, or you may fear a specific place or event.</p>
          <p class="font1">Symptoms of general anxiety include:</p>
          <li class="font1">increased heart rate</li>
          <li class="font1">rapid breathing</li>
          <li class="font1">trouble concentrating</li>
          <li class="font1">difficulty falling asleep</li>
          <li class="font1">restlessness</li>
          <p class="font1">Your anxiety symptoms might be totally different from someone else’s. </p>

          <h2 class="font1">What is an anxiety attack?</h2>
          <p class="font1">An anxiety attack is a feeling of overwhelming apprehension, worry, distress, or fear. For many people, an anxiety attack builds slowly. It may worsen as a stressful event approaches.</p>
          <p class="font1">Anxiety attacks can vary greatly, and symptoms may differ among individuals. That’s because the many symptoms of anxiety don’t happen to everyone, and they can change over time.</p>
          <p class="font1">Common symptoms of an anxiety attack include:</p>
          <li class="font1">feeling faint or dizzy</li>
          <li class="font1">shortness of breath</li>
          <li class="font1">dry mouth</li>
          <li class="font1">sweating</li>
          <li class="font1">chills or hot flashes</li>
          <li class="font1">apprehension and worry</li>
          <li class="font1">restlessness</li>
          <li class="font1">distress</li>
          <li class="font1">fear</li>
          <li class="font1">numbness or tingling</li>
          <p class="font1">A panic attack and an anxiety attack share some common symptoms, but they’re not the same.  </p>

          <h2 class="font1">What causes anxiety?</h2>
          <p class="font1">Researchers are not sure of the exact cause of anxiety. But, it’s likely a combination of factors play a role. These include genetic and environmental factors, as well as brain chemistry.</p>
          <p class="font1">In addition, researchers believe that the areas of the brain responsible for controlling fear may be impacted.</p>
          <p class="font1">Current research of anxiety is taking a deeper look at the parts of the brain that are involved with anxiety</p>
          <h2 class="font1">Are there tests that diagnose anxiety?</h2>
          <p class="font1">A single test can’t diagnose anxiety. Instead, an anxiety diagnosis requires a lengthy process of physical examinations, mental health evaluations, and psychological questionnaires.</p>
          <p class="font1">Some doctors may conduct a physical exam, including blood or urine tests to rule out underlying medical conditions that could contribute to symptoms you’re experiencing.</p>
          <p class="font1">Several anxiety tests and scales are also used to help your doctor assess the level of anxiety you’re experiencing.  </p>
          <h2 class="font1">What are treatments for anxiety?</h2>
          <h2 class="font1">What natural remedies are used for anxiety?</h2>
          <p class="font1">Lifestyle changes can be an effective way to relive some of the stress and anxiety you may cope with every day. Most of the natural “remedies” consist of caring for your body, participating in healthy activities, and eliminating unhealthy ones.</p>
          <p class="font1" >These include:</p>
          <li class="font1" >getting enough sleep</li>
          <li class="font1" >meditating</li>
          <li class="font1" >staying active and exercising</li>
          <li class="font1" >eating a healthy diet</li>
          <li class="font1" >staying active and working out</li>
          <li class="font1" >avoiding alcohol</li>
          <li class="font1" >avoiding caffeine</li>
          <li class="font1" >quitting smoking cigarettes</li>
          <h2 class="font1" >Anxiety and depression</h2>
          <p class="font1" >If you have an anxiety disorder, you may also be depressed. While anxiety and depression can occur separately, it’s not unusual for these to mental health disorders to happen together.</p>
          <p class="font1" >Anxiety can be a symptom of clinical or major depression. Likewise, worsening symptoms of depression can be triggered by an anxiety disorder.</p>
          <p class="font1" >Symptoms of both conditions can be managed with many of the same treatments: psychotherapy (counseling), medications, and lifestyle changes.</p>
          <h2 class="font1" >How to help children with anxiety</h2>
          <p class="font1" >Anxiety in children is natural and common. In fact, one in eight children will experience anxiety. As children grow up and learn from their parents, friends, and caretakers, they typically develop the skills to calm themselves and cope with feelings of anxiety.</p>
          <p class="font1">But, anxiety in children can also become chronic and persistent, developing into an anxiety disorder. Uncontrolled anxiety may begin to interfere with daily activities, and children may avoid interacting with their peers or family members.</p>
          <p class="font1">Symptoms of an anxiety disorder might include:</p>
          <li class="font1">jitteriness</li>
          <li class="font1" >irritability</li>
          <li class="font1" >sleeplessness</li>
          <li class="font1" >feelings of fear</li>
          <li class="font1" >shame</li>
          <li class="font1" >feelings of isolation</li>
          <p class="font1"  >Anxiety treatment for children includes cognitive behavioral therapy (talk therapy) and medications</p>
          <h2 class="font1"  >How to help teens with anxiety</h2>
          <p class="font1" >Teenagers may have many reasons to be anxious. Tests, college visits, and first dates all pop up in these important years. But teenagers who feel anxious or experience symptoms of anxiety frequently may have an anxiety disorder.</p>
          <p class="font1" >Symptoms of anxiety in teenagers may include nervousness, shyness, isolationist behaviors, and avoidance. Likewise, anxiety in teens may lead to unusual behaviors. They may act out, perform poorly in school, skip social events, and even engage in substance or alcohol use.</p>
          <p class="font1" >For some teens, depression may accompany anxiety. Diagnosing both conditions is important so that treatment can address the underlying issues and help relieve symptoms.</p>
          <p class="font1" >The most common treatments for anxiety in teenagers are talk therapy and medication. These treatments also help address depression symptoms.</p>
          <h2 class="font1" >Anxiety and stress</h2>
          <p class="font1" >Stress and anxiety are two sides of the same coin. Stress is the result of demands on your brain or body. It can be the caused by an event or activity that makes you nervous or worrisome. Anxiety is that same worry, fear, or unease.</p>
          <p class="font1" >Anxiety can be a reaction to your stress, but it can also occur in people who have no obvious stressors.<>Both anxiety and stress cause physical and mental symptoms. These include:</>headache</l>fast heartbeat</l>stomachache</l>sweating</l>dizziness</l>jitteriness</l>muscle tension</l>rapid breathing</l>nervousness</l>difficulty concentrating</li>
          <li class="font1" >irrational anger or irritability</li>
          <p class="font1">Neither stress nor anxiety is always bad. Both can actually provide you with a bit of a boost or incentive to accomplish the task or challenge before you. However, if they become persistent, they can begin to interfere with your daily life. In that case, it’s important to seek treatment.</p>
          <p class="font1">The long-term outlook for untreated depression and anxiety includes chronic health issues, such as heart disease</p>
          <h2 class="font1">Anxiety and alcohol</h2>
          <p class="font1">If you’re anxious frequently, you may decide you’d like a drink to calm your nerves. After all, alcohol is a sedative. It can depress the activity of your central nervous system, which may help you feel more relaxed.</p>
          <p class="font1">In a social setting, that may feel like just the answer you need to let down your guard. Ultimately, it may not be the best solution.</p>
          <p class="font1">Some people with anxiety disorders end up abusing alcohol or other drugs in an effort to feel better regularly. This can create a dependency and addiction.</p>
          <p class="font1">It may be necessary to treat an alcohol or drug problem before the anxiety can be addressed. Chronic or long-term use can ultimately make the condition worse, too.  </p>
          <h2 class="font1">Can foods treat anxiety?</h2>
          <p class="font1">Medication and talk therapy are commonly used to treat anxiety. Lifestyle changes, like getting enough sleep and regular exercise, can also help. In addition, some research suggests the foods you eat may have a beneficial impact on your brain if you frequently experience anxiety.</p>
          <p class="font1">These foods include:</p>
          <li class="font1">salmon</li>
          <li class="font1">chamomile</li>
          <li class="font1">turmeric</li>
          <li class="font1">dark chocolate</li>
          <li class="font1">yogurt</li>
          <li class="font1">green tea</li>
          <h2 class="font1">Outlook</h2>
          <p class="font1">Anxiety disorders can be treated with medication, psychotherapy, or a combination of the two. Some people who have a mild anxiety disorder, or a fear of something they can easily avoid, decide to live with the condition and to not seek treatment.</p>
          <p class="font1">It’s important to understand that anxiety disorders can be treated, even in severe cases. Although, anxiety usually doesn’t go away, you can learn to manage it and live a happy, healthy life.</p>
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
