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
        <img src="../assets/bipolardiorderbada.jpg" alt="">
    </div>
    <div class="m-auto blog-post-content max-width-2 m-auto my-2">
        <h1 class="font1">Bipolar Disorder</h1>
        <!-- <div class="blogpost-meta"> -->
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
    <div class="font1">
 <h2>What Is Bipolar Disorder?</h2>

<p class="font1">Bipolar disorder, also known as manic depression, is a mental illness that brings severe high and low moods and changes in sleep, energy, thinking, and behavior.
People who have bipolar disorder can have periods in which they feel overly happy and energized and other periods of feeling very sad, hopeless, and sluggish. In between those periods, they usually feel normal. You can think of the highs and the lows as two "poles" of mood, which is why it's called "bipolar" disorder.
The word "manic" describes the times when someone with bipolar disorder feels overly excited and confident. These feelings can also involve irritability and impulsive or reckless decision-making. About half of people during mania can also have delusions (believing things that aren't true and that they can't be talked out of) or hallucinations (seeing or hearing things that aren't there).
"Hypomania" describes milder symptoms of mania, in which someone does not have delusions or hallucinations, and their high symptoms do not interfere with their everyday life.
</p>
<p class="font1">The word "depressive" describes the times when the person feels very sad or depressed. Those symptoms are the same as those described in major depressive disorder or "clinical depression," a condition in which someone never has manic or hypomanic episodes.
Most people with bipolar disorder spend more time with depressive symptoms than manic or hypomanic symptoms.
Bipolar Disorder Types
</p>
<p>
<h3 class="font1">
There are a few types of bipolar disorder, including:
</h3> 

<li>Bipolar I disorder: With this type, you have extreme erratic behavior, with manic “up” periods that last at least a week or are so severe that you need medical care. There are also usually extreme “down” periods that last at least 2 weeks. </li>
<li>Bipolar II disorder: With this type, you also have erratic highs and lows, but it isn’t as extreme as bipolar I.
Cyclothymic disorder: This type involves periods of manic and depressive behavior that last at least 2 years in adults or 1 year in children and teens. The symptoms aren’t as intense as bipolar disorder I or bipolar disorder II.
With any type of bipolar disorder, misuse of drugs and alcohol use can lead to more episodes. Having bipolar disorder and alcohol use disorder, known as “dual diagnosis,” requires help from a specialist who can address both issues. 
</li>
</p>
<h3 class="font1">What to know about bipolar disorder</h3>
<li>What is bipolar disorder?</li>
<li>Symptoms</li>
<li>Types</li>
<li>Diagnosis</li>
<li>Treatment</li>
<li>Causes</li>
<li>Outlook</li>
<p class="font1">
A person with bipolar disorder will experience changes in mood, energy, and activity levels that can make day-to-day living difficult.
Bipolar disorder can cause severe disruption to a person’s life, but the impact varies between individuals. With appropriate treatment and support, many people with this condition live a full and productive life.
According to the National Alliance on Mental Illness (NAMI), bipolar disorder affects over 10 million people in the United States or around 2.8% of the population.
On average, a person will receive a diagnosis around the age of 25 years, but symptoms can appear during the teenage years or later in life. It affects males and females equally.
</p>
<p>
<h2 class="font1">What is bipolar disorder?</h2>
Share on PinterestA person with bipolar disorder may experience “highs” and “lows” in quick succession.
The National Institute of Mental Health describe the main symptoms of bipolar disorder as alternating episodes of high and low mood. Changes in energy levels, sleep patterns, ability to focus, and other features can dramatically impact a person’s behavior, work, relationships, and other aspects of life.
Most people experience mood changes at some time, but those related to bipolar disorder are more intense than regular mood changes, and other symptoms can occur. Some people experience psychosis, which can include delusions, hallucinations, and paranoia.
Between episodes, the person’s mood may be stable for months or years, especially if they are following a treatment plan.
Treatment enables many people with bipolar disorder to work, study, and live a full and productive life. However, when treatment helps a person feel better, they may stop taking their medication. Then, the symptoms can return.
Some aspects of bipolar disorder can make a person feel good. During an elevated mood, they may find they are more sociable, talkative, and creativeTrusted Source.
However, an elevated mood is unlikely to persist. Even if it does, it may be hard to sustain attention or follow through with plans. This can make it difficult to follow a project through to the end.
</p>
<h2 class="font1">Symptoms</h2>
<p class="font1">
According to the International Bipolar Association, symptoms vary between individuals. For some people, an episode can last for several months or years. Others may experience “highs” and “lows” at the same time or in quick succession.
In “rapid cycling” bipolar disorder, the person will have four or more episodes within a year.
Mania or hypomania
Hypomania and mania are elevated moods. Mania is more intense than hypomania.
</p>
<h3 class="font1">
Symptoms can include:
</h3>
<li>impaired judgment</li>
<li>feeing wired</li>
<li>sleeping little but not feeling tired</li>
<li>a sense of distraction or boredom</li>
<li>missing work or school</li>
<li>underperforming at work or school</li>
<li>feeling able to do anything</li>
<li>being sociable and forthcoming, sometimes aggressively so</li>
<li>engaging in risky behavior</li>
<li>increased libido</li>
<li>feeling exhilarated or euphoric</li>
<li>having high levels of self-confidence, self-esteem, and self-importance</li>
<li>talking a lot and rapidly</li>
<li>jumping from one topic to another in conversation</li>
<li>having “racing” thoughts that come and go quickly, and bizarre ideas that the person may act upon</li>
<li>denying or not realizing that anything is wrong</li>
<h4>
Some people with bipolar disorder may spend a lot of money, use recreational drugs, consume alcohol, and participate in dangerous and inappropriate activities.
</h4 class="font1">

<h3 class="font1">
Depressive symptoms</h3>
<h3 class="font1">During an episode of bipolar depression, a person may experience:</h3>
<li>a feeling of gloom, despair, and hopelessness</li>
<li>extreme sadness</li>
<li>insomnia and sleeping problems</li>
<li>anxiety about minor issues</li>
<li>pain or physical problems that do not respond to treatment</li>
<li>a sense of guilt, which may be misplaced</li>
<li>eating more or eating less</li>
<li>weight loss or weight gain</li>
<li>extreme tiredness, fatigue, and listlessness</li>
<li>an inability to enjoy activities or interests that usually give pleasure</li>
<li>difficulty focusing and remembering</li>
<li>irritability</li>
<li>sensitivity to noises, smells, and other things that others may not notice</li>
<li>an inability to face going to work or school, possibly leading to underperformance</li>
In severe cases, the individual may think about ending their life, and they may act on those thoughts.</li>
Psychosis
If a “high” or “low” episode is very intense, the person may experience psychosis. They may have trouble differentiating between fantasy and reality.
According to the International Bipolar Foundation, psychosis symptoms during a high include hallucinations, which involve hearing or seeing things that are not there and delusions, which are false but strongly felt beliefs. A person who experiences delusions may believe they are famous, have high-ranking social connections, or have special powers.
During a depressive or “low” episode, they may believe they have committed a crime or are ruined and penniless.
It is possible to manage all these symptoms with appropriate treatment.

<h2 class="font1">Types of bipolar disorder</h2>
A person may receive a diagnosis of one of three broad types of bipolar disorder. According to NAMI, symptoms occur on a spectrum, and the distinction between the types is not always clear-cut.
Bipolar I disorder
<h3 class="font1">For a diagnosis of bipolar I disorder:</h3>
<li>The individual must have experienced at least one manic episode.
<li>The person may have had a previous major depressive episode.
<li>The doctor must rule out other disorders, such as schizophrenia and delusional disorder.
Bipolar II disorder
Bipolar II disorder involves periods of hypomania, but depression is often the dominant state.
<h3 class="font1">For a diagnosis of bipolar II disorder, a person must have had:</h3>
<li>one or more episodes of depression
<li>at least one hypomanic episode
<li>no other diagnosis to explain the mood shifts
<p>
A person with hypomania may feel good and function well, but their mood will not be stable, and there is a risk that depression will follow.
People sometimes think of bipolar II disorder as a milder version. For many, however, it is simply different. As NAMI indicate, people with bipolar II disorder may experience more frequent episodes of depression than people with bipolar I disorder.
Cyclothymia
The National Health Service (NHS) in the United Kingdom note that cyclothymia has similar features to bipolar disorder, but the Diagnostic and Statistical Manual of Mental Disorders, 5th Edition (DSM-5) classifies it separately. It involves hypomania and depression, but the changes are less intense.
Nevertheless, cyclothymia can impact a person’s daily life, and a doctor can provide treatment.
Diagnosis
</p>
<p>
A medical professional will diagnose bipolar disorder using criteria set out in the DSM-5.
The National Institue of Mental Health (NIMH) explain that in order to receive a diagnosis of bipolar I disorder, a person must have had symptoms for at least 7 days, or less if symptoms were severe enough to need hospitalization. They may also have had a depressive episode lasting at least 2 weeks.
To receive a diagnosis of bipolar II, a person will have experienced at least one cycle of hypomania and depression.
</p>
<p>
A doctor may carry out a physical examination and some diagnostic tests, including blood and urine tests, to help rule out other causes.
It can be challenging for a doctor to diagnose bipolar disorder, as people are more likely to seek help with a low mood than a high mood. As a result, it can be hard for them to distinguish it from depression.
If the person has psychosis, a doctor may misdiagnose their condition as schizophrenia.
</p>
<h3 class="font1">Other complications that may occur with bipolar disorder are:</h3>
<li>use of drugs or alcohol to cope with symptoms</li>
<li>post-traumatic stress disorder (PTSD)</li>
<li>anxiety disorder</li>
<li>attention-deficit hyperactivity disorder (ADHD)</li>
NIMH urge healthcare providers to look for signs of mania in the person’s history, to prevent misdiagnosis. Some antidepressants can trigger mania in susceptible people.
A person who receives a diagnosis of bipolar disorder has a lifelong diagnosis. They may enjoy long periods of stability, but they will always live with the condition.
Learn more here about bipolar disorder versus schizophrenia.
MEDICAL NEWS TODAY NEWSLETTER
Knowledge is power. Get our free daily newsletter.
Dig deeper into the health topics you care about most. Subscribe to our facts-first newsletter today.
Enter your email
SIGN UP NOW
Your privacy is important to us
<h3 class="font1">
Treatment
Treatment aims to stabilize the person’s mood and reduce the severity of symptoms. The goal is to help the person function effectively in daily life.</h3>
Treatment involves a combination of therapies, including:
<li>medication</li>
<li>counseling</li>
<li>physical intervention</li>
<li>lifestyle remedies</li>
<p>
It can take time to get a correct diagnosis and find a suitable treatment, as individuals react differently, and symptoms vary widely.
Managing bipolar disorder during the COVID-19 pandemic may be challenging. Here, get some tips on how to cope.
</p>
<h2>
Drug treatment</h2>
<h3 class="font1">Drug treatments can help stabilize mood and manage symptoms. A doctor will often prescribe a combination of:</h3>
<li>mood stabilizers, such as lithium</li>
<li>antidepressants</li>
<li>second-generation antipsychotics (SGAs)</li>
<li>anticonvulsants, to relieve mania</li>
<li>medication to help with sleep or anxiety</li>
The doctor may need to adjust the medication over time. Some drugs have side effects, and they can affect individuals differently. If an individual has concerns about their drug treatment, they should talk to their doctor.
<h3 class="font1">A person must:</h3>
<li>tell the doctor about any other mediations they are using, to reduce the risk of interactions and adverse effects</li>
<li>follow the doctor’s instructions regarding medication and treatment</li>
<li>discuss any concerns about adverse effects, and if they feel the treatment is working</li>
<li>continue taking medication unless the doctor says it is safe to stop</li>
<li>bear in mind that the drugs can take time to work</li>
If the person discontinues their treatment, symptoms may worsen.</li>
<h2 class="font1">Psychotherapy and counseling</h2>


<h4>Psychotherapy can help relieve symptoms and equip a person to manage bipolar disorder.</h4>
<h3 class="font1">Through cognitive-behavior therapy (CBT) and other approaches, the individual can learn to:</h3>
<li>recognize and take steps to manage key triggers, such as stress</li>
<li>identify early symptoms of an episode and take steps to manage it</li>
<li>work on factors that help maintain a stable mood for as long as possible</li>
<li>engage the help of family members, teachers, and colleagues</li>
<p class="font1">
These steps can help a person maintain positive relationships at home and work. For children and teens with bipolar disorder, a doctor may recommend family therapy.
Find out more about treatments for bipolar depression.
Hospital treatment
Some people may need to spend time in the hospital if there is a risk of them harming themselves or others.
If other treatments have not helped, a doctor may prescribe electroconvulsive therapy (ECT).
Lifestyle remedies
</p>
<h3 class="font1">Some lifestyle choices can help maintain a stable mood and manage symptoms. They include:</h3>
<li>maintaining a regular routine</li>
<li>following a healthful and varied diet</li>
<li>establishing a regular sleep pattern and taking steps to prevent sleep disturbance</li>
<li>getting regular exercise</li>

<p class="font1">
Some people use supplements, but it is essential to discuss this with a doctor first. Some alternative remedies can interact with the drugs used for bipolar disorder. They may make symptoms worse.
Get some tips here on taking care of a parent with bipolar disorder.
</p>
<h2 class="font1">
Causes</h2>
<p class="font1">
Bipolar disorder appears to result from a combination of factors.
Genetic factors: Bipolar disorder is more common in those who have a family member with the condition. A number of genetic features may be involved.
Biological traits: Research suggests that imbalances in neurotransmitters or hormones that affect the brain may play a role.
Environmental factors: Life events, such as abuse, mental stress, a “significant loss,” or another traumatic event, may trigger an initial episode in a susceptible person.
Outlook
Bipolar disorder is a relatively common but serious mental health condition that involves changes in mood, energy levels, and attention, alongside other symptoms.
It can severely disrupt a person’s life, but treatment can drastically improve the outlook.
Treatment may not eliminate mood changes entirely, but working closely with a doctor can make symptoms more manageable and maximize quality of life.
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
