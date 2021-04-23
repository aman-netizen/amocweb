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
        <img src="../assets/pesonalitydisorderbada1.jpg" alt="">
    </div>
    <div class="m-auto blog-post-content max-width-2 m-auto my-2">
        <h1 class="font1">Personality Disorder</h1>
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
    <h2>What Is a Personality Disorder?</h2>
    <div>
        <p>Personality disorders are a group of mental health conditions that are characterized by inflexible and unhealthy patterns of thinking, feeling, and behaving. These inner experiences and behaviors often differ from the expectations of the culture in which someone lives.</p>
        <p>People with personality disorders usually have a hard time getting along with others and dealing with everyday problems in the ways that are expected by a cultural group. They commonly believe that their way of thinking and behaving is completely normal. However, they tend to have a view of the world that is quite different than others. As a result, they may find it difficult to participate in social, educational, and family activities. They also place blame on others for their challenges. These behaviors and attitudes often cause problems and limitations in relationships, social encounters, and work or school settings. They may also make people with personality disorders feel isolated, which can contribute to depression and anxiety.        </p>
        <p>The cause of personality disorders isn’t known. However, it is believed that they may be triggered by genetic and environmental influences, most prominently childhood trauma.</p>
        <p>Personality disorders tend to emerge in the teenage years or early adulthood. The symptoms vary depending on the specific type of personality disorder. Treatment typically includes talk therapy and medication.</p>

    </div>
    <div>
        <h2>What Are the Different Types of Personality Disorders?</h2>
        <p>There are numerous different types of personality disorders. They are grouped into three clusters based on similar characteristics and symptoms. Some people may have signs and symptoms of multiple personality disorders.</p>
        <h3>Cluster A: Suspicious</h3>
        <li>Paranoid personality disorder: People with paranoid personality disorder are very distrustful of others and suspicious of their motives. They also tend to hold grudges.</li>
        <li>Schizoid personality disorder: People with this type of disorder display little interest in forming personal relationships or partaking in social interactions. They usually don’t pick up on normal social cues, so they can seem emotionally cold.</li>
        <li>Schizotypal personality disorder: In schizotypal personality disorder, people believe they can influence other people or events with their thoughts. They often misinterpret behaviors. This causes them to have inappropriate emotional responses. They may consistently avoid having intimate relationships.</li>
        <h3>Cluster B: Emotional and Impulsive</h3>
        <li>Antisocial personality disorder: People with antisocial personality disorder tend to manipulate or treat others harshly without expressing remorse for their actions. They may lie, steal, or abuse alcohol or drugs.</li>
        <li>Borderline personality disorder: People with this type of disorder often feel empty and abandoned, regardless of family or community support. They may have difficulty dealing with stressful events. They may have episodes of paranoia. They also tend to engage in risky and impulsive behavior, such as unsafe sex, binge drinking, and gambling.</li>
        <li>Histrionic personality disorder: In histrionic personality disorder, people frequently try to gain more attention by being overly dramatic or sexually provocative. They are easily influenced by other people and are extremely sensitive to criticism or disapproval.</li>
        <li>Narcissistic personality disorder: People with narcissistic personality disorder believe that they are more important than others. They tend to exaggerate their achievements and may brag about their attractiveness or success. They have a deep need for admiration, but lack empathy for other people.</li>
        <h3>Cluster C: Anxious</h3>
        <li>Avoidant personality disorder: People with this type of disorder often experience feelings of inadequacy, inferiority or unattractiveness. They usually dwell on criticism from others and avoid participating in new activities or making new friends.</li>
        <li>Dependent personality disorder: In dependent personality disorder, people heavily depend on other people to meet their emotional and physical needs. They usually avoid being alone. They regularly need reassurance when making decisions. They may also be likely to tolerate physical and verbal abuse.</li>
        <li>Obsessive-compulsive personality disorder: People with obsessive-compulsive personality disorder have an overwhelming need for order. They strongly adhere to rules and regulations. They feel extremely uncomfortable when perfection isn’t achieved. They may even neglect personal relationships to focus on making a project perfect.</li>

    </div>
    <div>
        <h2>How Is a Personality Disorder Diagnosed?</h2>
        <p>The Diagnostic and Statistical Manual of Mental Disorders, Fifth Edition (DSM-5), is a reference doctors and mental health professionals use to help diagnose mental health conditions. Each personality disorder has criteria that must be met for a diagnosis. A primary care or mental health provider will ask you questions based on these criteria to determine the type of personality disorder. In order for a diagnosis to be made, the behaviors and feelings must be consistent across many life circumstances. </p>
        <p>They should also cause significant distress and impairment in at least two of the following areas:</p>
        <li>The way you perceive or interpret yourself and other people</li>
        <li>The way you act when dealing with other people</li>
        <li>The appropriateness of your emotional responses</li>
        <li>How well you can control your impulses</li>
        <p>In some cases, your primary care or mental health provider may perform blood tests to determine whether a medical problem is causing your symptoms. </p>
    </div>
    <div>
        <h2>How Is a Personality Disorder Treated?</h2>
        <p>Treatment can vary depending on the type and severity of your personality disorder. It may include psychotherapy and medications.</p>
        <h3>Psychotherapy</h3>
        <p>Psychotherapy, or talk therapy, may help in managing personality disorders. During psychotherapy, you and a therapist can discuss your condition, as well as your feelings and thoughts. This can provide you with insight on how to manage your symptoms and behaviors that interfere with your daily life.</p>
        <p>There are many different types of psychotherapy. Dialectical behavior therapy can include group and individual sessions where people learn how to tolerate stress and improve relationships. Cognitive behavioral therapy aims to teach people how to change negative thinking patterns so they can better cope with everyday challenges.</p>
        <h3>Medication</h3>
        <p>There aren’t any drugs approved for the treatment of personality disorders. However, certain types of prescription medications might be helpful in reducing various personality disorder symptoms:</p>
        <li>Antidepressants, which can help improve a depressed mood, anger, or impulsivity</li>
        <li>Mood stabilizers, which prevent mood swings and reduce irritability and aggression</li>
        <li>Antipsychotic medications, also known as neuroleptics, which may be beneficial for people who often lose touch with reality</li>
        <li>Anti-anxiety medications, which help relieve anxiety, agitation, and insomnia</li>
    </div>
    <div>
        <h2>What Is the Outlook for Someone with a Personality Disorder?</h2>
        <p>The most important aspect of treating a personality disorder is the recognition that the problem exists in the first place. People with these types of disorders believe that their personality traits are normal, so they can become quite upset when someone suggests that they may have a personality disorder.</p>
        <p>If someone recognizes that they have a personality disorder and engages in treatment, they should see an improvement in their symptoms. It’s beneficial for friends or family members to be involved in their therapy sessions as well. It’s also important for someone with a personality disorder to avoid drinking alcohol and using illicit drugs. These substances can have a negative impact on emotions and interfere with treatment.</p>
    </div>
    <div>
        <h2>How to Help Someone with a Personality Disorder</h2>
        <p>If you are close to someone you suspect might have a personality disorder, you should encourage them to seek help. They may get angry or defensive, but it’s important to avoid arguing with them. Instead, focus on expressing your feelings and voicing your concerns about their behaviors.</p>
        <p>Call 911 if you ever feel that the other person intends to cause harm to themselves or others. It is also beneficial to tell your friend or loved one about the National Suicide Prevention Lifeline. This free, 24-hour phone line takes calls from anyone feeling depressed or anxious. A friendly, supportive voice can help them work through a difficult time or crisis.</p>

    </div>
    <div>
        <h2>What is passive-aggressive behavior?</h2>
        <p>People with passive-aggressive behavior express their negative feelings subtly through their actions instead of handling them directly. This creates a separation between what they say and what they do.</p>
        <p>For example, say someone proposes a plan at work. A person with passive-aggressive behavior may oppose the plan, but instead of voicing their opinion, they say that they agree with it. Since they’re actually against the plan, however, they resist following it. They may purposely miss deadlines, turn up late to meetings, and undermine the plan in other ways.</p>
        <p>Here’s another example: A woman is studying with her boyfriend in the same room. She is upset with him, but instead of telling him that she is mad at him, she blasts the music on their laptop to bother him.</p>
        <p>Some common signs of passive-aggressive behavior include:</p>
        <li>Bitterness and hostility toward other peoples’ requests</li>
        <li>Intentionally delaying or making mistakes when dealing with other peoples’ requests</li>
        <li>Having a cynical, pessimistic, or aggressive demeanor</li>
        <li>Frequently complaining about feeling underappreciated or deceived</li>
        <p>Passive-aggressive behavior can be a symptom of several mental disorders, but it’s not considered to be a distinct mental health condition. This type of behavior can affect a person’s ability to create and maintain healthy relationships, and can cause problems at work.</p>
        <p>However, there are ways to manage passive-aggressive behavior so that it doesn’t have a negative impact on someone’s quality of life.</p>
    </div>
    <div>
        <h2>Signs of passive-aggressive behavior</h2>
        <p>There is usually some disconnect between what a person with passive-aggressive behavior says and what they do. Their behavior often angers family members, friends, and co-workers. However, the person may not be aware of their passive-aggressive behavior.</p>
        <p>Examples of this behavior include:</p>
        <li>Frequently criticizing or protesting</li>
        <li>Being disagreeable or irritable</li>
        <li>Procrastinating or being forgetful</li>
        <li>Performing tasks inefficiently</li>
        <li>Acting hostile or cynical</li>
        <li>Acting stubborn</li>
        <li>Blaming others</li>
        <li>Complaining about being unappreciated</li>
        <li>Displaying resentment over the demands of others</li>
    </div>
    <div>
        <h2>
            Causes of passive-aggressive behavior
        </h2>
        <p>The exact cause of passive-aggressive behavior isn’t known. However, both biological and environmental factors may contribute to the development of passive-aggressive behavior.</p>
        <p>Researchers believe people who exhibit passive-aggressive behaviors begin doing so in childhood. Parenting style, family dynamics, and other childhood influences may be contributing factors.</p>
        <P>Child abuse, neglect, and harsh punishment can also cause a person to develop passive-aggressive behaviors. Substance abuse and low self-esteem are also thought to lead to this type of behavior.</P>
        <p>Underlying health conditions may result in behaviors that appear similar to passive-aggressive behavior. Some mental health conditions may have symptoms that are misinterpreted as passive-aggressive behavior. These conditions include:</p>
        <li>Attention deficit hyperactivity disorder (ADHD)</li>
        <li>Stress</li>
        <li>anxiety disorders</li>
        <li>Depression</li>
        <li>Conduct disorder</li>
        <li>Oppositional defiant disorder</li>
        <li>Bipolar disorder</li>
        <li>Schizotypal personality disorder</li>
        <li>Schizophrenia</li>
        <li>Alcohol abuse</li>
        <li>Cocaine withdrawal</li>
    </div>
    <div>
        <h2>Identifying passive-aggressive behavior</h2>
        <p>Passive-aggressive behavior isn’t a medical disorder, so a doctor can’t diagnose it. However, a trained mental health professional can help you identify a behavioral problem that requires treatment.</p>
        <p>They will ask questions about your symptoms and behaviors, including when they began and the effects they have on your life, work, and relationships.</p>
        <p>If you suspect that you may be exhibiting passive-aggressive behavior, schedule an appointment with a psychologist. The psychologist will ask you several questions about your symptoms, thoughts, and personal history.</p>
        <p>The doctor will also ask you questions about your childhood and the experiences that evoke symptoms. Once they identify possible environmental triggers for your passive-aggressive behaviors, they can help you work through them.</p>
        <p>A psychologist may also refer you to a psychiatrist if they believe you may have a condition requiring medication. If the psychiatrist suspects the behavior is caused by a non-psychiatric medical condition, they may refer you to a primary care physician.</p>
        <p>A doctor will perform a physical exam and may order neurological tests to determine whether a medical condition is contributing to your passive-aggressive behavior. Diagnostic testing may consist of blood tests, a neurological examination, and imaging tests.</p>
        <p>If you notice passive-aggressive behavior in a spouse or family member, you may want to suggest they see a psychologist. It can be difficult to be in a relationship with a person who acts passive aggressively, so it’s important to address.</p>
    </div>
    <div>
        <h2>Treatment for passive-aggressive behavior</h2>
        <p>You may be referred to a therapist or other mental health professional for counseling. A therapist can help you identify passive-aggressive behavior and teach you how to change your behavior.</p>
        <p>They can also help you work through anger, resentment, or low self-esteem issues that may be contributing to your passive-aggressive behavior. They may even teach you effective coping strategies, including how to look at a situation objectively and how to solve problems in a healthy way.</p>
        <p>Assertiveness training can also help you manage passive-aggressive behavior. These courses teach you how to express your thoughts and concerns effectively. This can help reduce negative behaviors caused by underlying anger and frustration.</p>
        <p>There are also some easy things you can do everyday to eliminate your passive-aggressive behavior. These include:</p>
        <li>Being aware of your behavior</li>
        <li>Identifying possible reasons for your passive-aggressive behavior</li>
        <li>Thinking clearly before you act</li>
        <li>Taking a break before reacting to situations that make you upset</li>
        <li>Staying optimistic</li>
        <li>Being honest with others and expressing your feelings in a healthy way</li>
        <h2>Dealing with passive-aggressive behavior</h2>
        <p>While it can be challenging to eliminate passive-aggressive behavior, especially if you developed the behaviors in childhood, you can work through it.</p>
        <p>Seeing a therapist for counseling can be helpful, as can changing the way you think every day. Remember that you are in charge of your behavior and you can change it at any time.</p>
    </div>
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
