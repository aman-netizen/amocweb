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
        <img src="../assets/stressbada1.png" alt="">
    </div>
    <div class="m-auto blog-post-content max-width-2 m-auto my-2">
        <h1 class="font1">Stress</h1>
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
         <h2 class="font1">What is stress?</h2> 
          <p  class="font1">
         We all know what it's like to feel stressed, but it's not easy to pin down exactly what stress means. When we say things like "this is stressful" or "I'm stressed", we might be talking about:
   
        
          <h4><li class="font1"> Situations or events that put pressure on us  </li>   </h4>    
           <p> for example, times where we have lots to do and think about, or don't have much control over what happens.</p>
        
        
        <h4><li class="font1">	Our reaction to being placed under pressure</li></h4>
            
          <p> the feelings we get when we have demands placed on us that we find difficult to cope with.</p> 
        
    <p  class="font1">
        "It's overwhelming. Sometimes you can't see beyond the thick fog of stress."
      There's no medical definition of stress, and health care professionals often disagree over whether stress is the cause of problems or the result of them. This can make it difficult for you to work out what causes your feelings of stress, or how to deal with them. But whatever your personal definition of stress is, it's likely that you can learn to manage your stress better by:
</p>
     <li class="font1">Managing external pressures, so stressful situations don't seem to happen to you quite so often</li>
     <li class="font1">Developing your emotional resilience, so you're better at coping with tough situations when they do happen and don't feel quite so stressed</li>
<h2 class="font1">
    Is stress a mental health problem?
</h2>

    <p class="font1">
        Being under pressure is a normal part of life. It can help you take action, feel more energised and get results. But if you often become overwhelmed by stress, these feelings could start to be a problem for you. 
        Stress isn't a psychiatric diagnosis, but it's closely linked to your mental health in two important ways:
    </p>
    <li class="font1">Stress can cause mental health problems, and make existing problems worse. For example, if you often struggle to manage feelings of stress, you might develop a mental health problem like anxiety or depression.</li>
    <li class="font1">Mental health problems can cause stress. You might find coping with the day-to-day symptoms of your mental health problem, as well as potentially needing to manage medication, heath care appointments or treatments, can become extra sources of stress.</li>

    <p class="font1">
        This can start to feel like a vicious circle, and it might be hard to see where stress ends and your mental health problem begins.</p>
        <p class="font1">"[When I'm stressed] I feel like I'm on the verge of a breakdown."</p>
      <h4 class="font1">Why does stress affect me physically?</h4>
    <p class="font1">You might find that your first clues about being stressed are physical signs, such as tiredness, headaches or an upset stomach.</p>
    <p class="font1">  There could be many reasons for this, as when we feel stressed we often find it hard to sleep or eat well, and poor diet and lack of sleep can both affect our physical health. This in turn can make us feel more stressed emotionally.</p>
        <p class="font1">Also, when we feel anxious, our bodies release hormones called cortisol and adrenaline. (This is the body's automatic way of preparing to respond to a threat, sometimes called the 'fight, flight or freeze' response). If you're often stressed then you're probably producing high levels of these hormones, which can make you feel physically unwell and could affect your health in the longer term.
</p>

<h2 class="font1">
    what are the signs of stress?
</h2>
<p class="font1">
    We all experience stress differently in different situations. Sometimes you might be able to tell right away when you're feeling under stress, but other times you might keep going without recognising the signs. Stress can affect you both emotionally and physically, and it can affect the way you behave.</p>
    <p class="font1">"My head is tight and all my thoughts are whizzing round in different directions and I can't catch them."</p>
<h3 class="font1">
    how you might feel 
</h3>
<li class="font1">irritable, aggressive, impatient or wound up</li>
<li class="font1">over-burdened</li>
<li class="font1">anxious, nervous or afraid</li>
<li class="font1">like your thoughts are racing and you can't switch off</li>
<li class="font1">unable to enjoy yourself</li>
<li class="font1">depressed</li>
<li class="font1">uninterested in life</li>
<li class="font1">like you've lost your sense of humour</li>
<li class="font1">a sense of dread</li>
<li class="font1">worried about your health</li>
<li class="font1">neglected or lonely.</li>
<p class="font1">
    Some people who experience severe stress can sometimes have suicidal feelings 
</p>

<h3 class="font1">
    how you might  behave
</h3>
<li class="font1">finding it hard to make decisions</li>
<li class="font1">constantly worrying</li>
<li class="font1">avoiding situations that are troubling you</li>
<li class="font1">snapping at people</li>
<li class="font1">biting your nails</li>
<li class="font1">picking at your skin</li>
<li class="font1">unable to concentrate</li>
<li class="font1">eating too much or too little</li>
<li class="font1">smoking or drinking alcohol more than usual</li>
<li class="font1">restless, like you can't sit still</li>
<li class="font1">being tearful or crying.</li>

<h3 class="font1">
   How you might be physically affected 
</h3>
<li class="font1">shallow breathing or hyperventilating</li>
<li class="font1">you might have a panic attack</li>
<li class="font1">muscle tension</li>
<li class="font1">blurred eyesight or sore eyes</li>
<li class="font1">problems getting to sleep, staying asleep or having nightmares</li>
<li class="font1">sexual problems, such as losing interest in sex or being unable to enjoy sex</li>
<li class="font1">tired all the time</li>
<li class="font1">grinding your teeth or clenching your jaw</li>
<li class="font1">headaches</li>
<li class="font1">chest pains</li>
<li class="font1">high blood pressure</li>
<li class="font1">indigestion or heartburn</li>
<li class="font1">constipation or diarrhoea</li>
<li class="font1">feeling sick, dizzy or fainting.</li>

<p class="font1">
    "[It feels like] the world is closing in on me, I can't breathe and I'm running out of time."
</p>

<h2 class="font1">
   How can I deal with pressure 
 </h2>
 <p class="font1">
    There are various steps you can take to cope with being under pressure. This page gives some tips that people have told us they find useful, but it's important to remember that different things work for different people. Only try what you feel comfortable with.
    <h3 class="font1">For example</h3>
<ul class="font1">

<li> Identify your triggers </li>
<li>Organise your time</li>
<li>Address some of the causes</li>
<li>Accept the things you can't change</li>

</ul> 
</p>
<h2 class="font1">
    How can I be more resilient?
</h2>
<p class="font1">
    Taking steps to look after your wellbeing can help you deal with pressure, and reduce the impact that stress has on your life. This is sometimes called developing emotional resilience. Resilience is not just your ability to bounce back, but also your capacity to adapt in the face of challenging circumstances, whilst maintaining a stable mental wellbeing. Resilience isn't a personality trait – it's something that we can all take steps to achieve.

</p>
<h2 class="font1">
    For example, you can:
</h2>
<ul class="font1">
<li>Make some lifestyle changes</li>
<li>Look after your physical health</li>
<li>Give yourself a break</li>
<li>Build your support network</li>
</ul>
<h2 class="font1">
    What treatements are there ?
</h2>
<p>

    Stress isn't a medical diagnosis, so there's no specific treatment for it. However, if you're finding it very hard to cope with things going on in your life and are experiencing lots of signs of stress, there are treatments available that could help. These include:
<ul class="font1">
<li>talking treatments</li>
<li>medication</li>
<li>medication</li>
<li>  complementary and alternative therapies</li>

</ul>
</p>
<h2 class="font1">Talking treatments</h2>
<p class="font1">
<ul class="font1">
<li> <h3> Cognitive behavioural therapy (CBT), </h3>     
    which helps you understand your thought patterns, recognise your trigger points and identify positive actions you can take.
</li>
<li> <h3>Mindfulness-based stress reduction (MBSR), </h3> 
    which combines mindfulness, meditation and yoga with a particular focus on reducing stress. See our page on learning mindfulness for more information
</li>
</ul>

</p>
<p class="font1">
    "Using mindfulness [helps me] to just allow some space to breathe and focus on the present moment."

</p>

<h2 class="font1">
Medication
</h2>
<p class="font1">
    Feelings of stress are a reaction to things happening in your life, not a mental health problem, so there's no specific medication for stress. However, there are various medications available which can help to reduce or manage some of the signs of stress.
<h3 class="font1">
    For example, your doctor might offer to prescribe:
</h3>
    <ul class="font1">
        <li><h3>sleeping pills or minor tranquillisers</h3>
            if you're having trouble sleeping
        
        </li>
        <li<h3>antidepressants </h3>>
        if you're experiencing depression or anxiety
    </li>
        <li> <h3>medication</h3> 
            to treat any physical symptoms of stress, such as irritable bowel syndrome (IBS), or high blood pressure
        
        </li>

    </ul>
</p>

<p class="font1">
    Before deciding to take any drug, it's important to make sure you have all the facts you need to make an informed choice. See our pages on things to consider before taking medication and your right to refuse medication for more information. Our pages on coming off medication give guidance on how to come off medication safely.

</p>

<h3 class="font1">
  ecotherapy  
</h3>
<p class="font1">
Ecotherapy is a way of improving your wellbeing and self-esteem by spending time in nature. This can include physical exercise in green spaces or taking part in a gardening or conservation project.
</p>
<h3 class="font">
    Complementary therapies

</h3>

<p class="font1">
You may find certain complementary therapies help you manage feelings of stress. These might include
<ul class="font1">
<li>yoga and meditation </li>
<li> acupuncture  </li>
<li>aromatherapy</li>
<li> massage</li>
</ul>
<h3>
How can other people 
</h3>
<p class="font1">
    This page is for friends and family of someone who is experiencing stress, who want to support them.
    If someone you're close to is feeling stressed there are lots of practical things you can do to support them – even though you probably can't change the situation they're in.
    
</p>
<ul class="font1">
<li><h3>Help them reflect on whether they are stressed</h3>  
    Often, people don't notice that some physical symptoms and behaviour (such as not being able to get to sleep, or drinking more than usual) are actually signs of stress. Sometimes you may be able to see it before they recognise it themselves. If you've noticed that someone seems particularly busy, anxious or unwell, you could gently let them know, and ask how you can help.
</li>

<li><h3>Listen to how they are feeling </h3>
    Having a chance to talk openly could help someone to feel calmer and more able to move forward. Just being there for them will probably help lots.
    "[My friends can help by] making me a cup of tea, holding me while I cry, making me laugh..."
    
</li>

<li><h3>Reassure them that stressful situations can pass</h3>
    For someone who is in the middle of a stressful time, it can be hard to see an end point. Let them know that situations change and can get better.

</li>
<li><h3>Help them identify their triggers. </h3>
    You can be specific about things you've observed, but try to stay open-minded and non-judgemental. Your perspective might be valuable, but your friend or family member could find this conversation stressful, and being patient will help.
"Not putting extra pressure on me... letting me know they're there but that I don't have to do anything."
</li>
</ul>
<p>
    "Not putting extra pressure on me... letting me know they're there but that I don't have to do anything."
</p>

<ul class="font1">
<li><h3>Help them learn and practise relaxation techniques</h3>
    You could help them research good relaxation techniques and find ways to practise them, such as a weekly yoga class, or setting aside time for breathing exercises
    at home. This might become something that you could do together.

</li>
<li><h3>Help them address some causes of stress,if you can </h3>
    You might be able to help your friend or family member look for support around issues like debt, housing problems or difficulties at work.
</li>

</ul>
<p class="font1">

    "[When I'm stressed I need friends to] hug me. It's amazing how good a single hug can feel."
</p>

<li class="font1">Support them to seek professional help. For example, you could help them contact their GP, go with them to an appointment or do some research on mental health and wellbeing (see our page on helping someone else seek help for lots more ideas).</li>
<li class="font1">Look after yourself. If someone around you is very stressed, you might become stressed too. If this happens, try to take a step back and look after your own wellbeing. Being calm and relaxed will make you more able to help someone else.</li>
<p class="font1">
    "[I want them to] understand that I may be irritable but I don't mean to hurt them in any way."
</p>
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
