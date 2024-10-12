  <?php
  // $skill_1 = "80%";
  // $skill_2 = "90%";
  if($Skill_1 == array ()){
    echo "0";
  }else{
    foreach ($Skill_1 as $row_s1) {
        $Vid_skill_1 = $row_s1["id_skill"];
        $Vname_skill_1 = $row_s1["name_skill"];
        $Vrange_skill_1 = $row_s1["range_skill"];
    }
    $Skill_range_1 = $Vrange_skill_1.'%';
  }
  if($Skill_2 == array ()){
    echo "0";
  }else{
    foreach ($Skill_2 as $row_s2) {
        $Vid_skill_2 = $row_s2["id_skill"];
        $Vname_skill_2 = $row_s2["name_skill"];
        $Vrange_skill_2 = $row_s2["range_skill"];
    }
    $Skill_range_2 = $Vrange_skill_2.'%';
  }
  if($Skill_3 == array ()){
    echo "0";
  }else{
    foreach ($Skill_3 as $row_s3) {
        $Vid_skill_3 = $row_s3["id_skill"];
        $Vname_skill_3 = $row_s3["name_skill"];
        $Vrange_skill_3 = $row_s3["range_skill"];
    }
    $Skill_range_3 = $Vrange_skill_3.'%';
  }
  if($Skill_4 == array ()){
    echo "0";
  }else{
    foreach ($Skill_4 as $row_s4) {
        $Vid_skill_4 = $row_s4["id_skill"];
        $Vname_skill_4 = $row_s4["name_skill"];
        $Vrange_skill_4 = $row_s4["range_skill"];
    }
    $Skill_range_4 = $Vrange_skill_4.'%';
  }
  if($Skill_5 == array ()){
    echo "0";
  }else{
    foreach ($Skill_5 as $row_s5) {
        $Vid_skill_5 = $row_s5["id_skill"];
        $Vname_skill_5 = $row_s5["name_skill"];
        $Vrange_skill_5 = $row_s5["range_skill"];
    }
    $Skill_range_5 = $Vrange_skill_5.'%';
  }
  if($Skill_6 == array ()){
    echo "0";
  }else{
    foreach ($Skill_6 as $row_s6) {
        $Vid_skill_6 = $row_s6["id_skill"];
        $Vname_skill_6 = $row_s6["name_skill"];
        $Vrange_skill_6 = $row_s6["range_skill"];
    }
    $Skill_range_6 = $Vrange_skill_6.'%';
  }
  if($Skill_7 == array ()){
    echo "0";
  }else{
    foreach ($Skill_7 as $row_s7) {
        $Vid_skill_7 = $row_s7["id_skill"];
        $Vname_skill_7 = $row_s7["name_skill"];
        $Vrange_skill_7 = $row_s7["range_skill"];
    }
    $Skill_range_7 = $Vrange_skill_7.'%';
  }
  if($Skill_8 == array ()){
    echo "0";
  }else{
    foreach ($Skill_8 as $row_s8) {
        $Vid_skill_8 = $row_s8["id_skill"];
        $Vname_skill_8 = $row_s8["name_skill"];
        $Vrange_skill_8 = $row_s8["range_skill"];
    }
    $Skill_range_8 = $Vrange_skill_8.'%';
  }
  if($Skill_9 == array ()){
    echo "0";
  }else{
    foreach ($Skill_9 as $row_s9) {
        $Vid_skill_9 = $row_s9["id_skill"];
        $Vname_skill_9 = $row_s9["name_skill"];
        $Vrange_skill_9 = $row_s9["range_skill"];
    }
    $Skill_range_9 = $Vrange_skill_9.'%';
  }
  if($Skill_10 == array ()){
    echo "0";
  }else{
    foreach ($Skill_10 as $row_s10) {
        $Vid_skill_10 = $row_s10["id_skill"];
        $Vname_skill_10 = $row_s10["name_skill"];
        $Vrange_skill_10 = $row_s10["range_skill"];
    }
    $Skill_range_10 = $Vrange_skill_10.'%';
  }
  ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Resume</title>
  <meta name="viewport" content="width=device-width"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<!-- <link rel="stylesheet" href="./style1.css"> -->
<link href="<?php echo base_url(); ?>css_resume/style1.css" rel="stylesheet">
<style type="text/css">
  .section-wrapper .skill-percentage:nth-child(1)::before {
  width: <?= $Skill_range_1 ?>;
  -webkit-animation: skill_1 0.6s ease;
          animation: skill_1 0.6s ease;
  }
  .section-wrapper .skill-percentage:nth-child(2)::before {
    width: <?= $Skill_range_2 ?>;
    -webkit-animation: skill_2 0.6s ease;
            animation: skill_2 0.6s ease;
  }
  .section-wrapper .skill-percentage:nth-child(3)::before {
    width: <?= $Skill_range_3 ?>;
    -webkit-animation: skill_3 0.6s ease;
            animation: skill_3 0.6s ease;
  }
  .section-wrapper .skill-percentage:nth-child(4)::before {
    width: <?= $Skill_range_4 ?>;
    -webkit-animation: skill_4 0.6s ease;
            animation: skill_4 0.6s ease;
  }
  .section-wrapper .skill-percentage:nth-child(5)::before {
    width: <?= $Skill_range_5 ?>;
    -webkit-animation: skill_5 0.6s ease;
            animation: skill_5 0.6s ease;
  }
  .section-wrapper .skill-percentage:nth-child(6)::before {
    width: <?= $Skill_range_6 ?>;
    -webkit-animation: skill_6 0.6s ease;
            animation: skill_6 0.6s ease;
  }
  .section-wrapper .skill-percentage:nth-child(7)::before {
    width: <?= $Skill_range_7 ?>;
    -webkit-animation: skill_6 0.6s ease;
            animation: skill_6 0.6s ease;
  }
  .section-wrapper .skill-percentage:nth-child(8)::before {
    width: <?= $Skill_range_8 ?>;
    -webkit-animation: skill_6 0.6s ease;
            animation: skill_6 0.6s ease;
  }
  .section-wrapper .skill-percentage:nth-child(9)::before {
    width: <?= $Skill_range_9 ?>;
    -webkit-animation: skill_6 0.6s ease;
            animation: skill_6 0.6s ease;
  }
  .section-wrapper .skill-percentage:nth-child(10)::before {
    width: <?= $Skill_range_10 ?>;
    -webkit-animation: skill_6 0.6s ease;
            animation: skill_6 0.6s ease;
  }
</style>
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<div class="resume-wrapper">
	<section class="profile section-padding">
		<div class="container">
			<div class="picture-resume-wrapper">
        <div class="picture-resume">
        <span><img src="<?php echo base_url(); ?>css_resume/new/Foto_me.jpg" alt="" /></span>
        <svg version="1.1" viewBox="0 0 350 350">
  
  <defs>
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -9" result="cm" />
    </filter>
  </defs>
  
  
<g filter="url(#goo)" >  
  
  <circle id="main_circle" class="st0" cx="171.5" cy="175.6" r="130"/>
  
  <circle id="circle" class="bubble0 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble1 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble2 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble3 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble4 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble5 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble6 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble7 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble8 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble9 st1" cx="171.5" cy="175.6" r="122.7"/>
  <circle id="circle" class="bubble10 st1" cx="171.5" cy="175.6" r="122.7"/>

</g>  
</svg>
      </div>
         <div class="clearfix"></div>
 </div>
<?php
        foreach ($Profile as $row_profile) {
            $Vid = $row_profile["id_profile"];
            $Vnama = $row_profile["nama_lengkap"];
            $Vcall = $row_profile["call"];
            $Vmail = $row_profile["mail"];
            $Vweb = $row_profile["web"];
            $Vhome = $row_profile["home"];
            $Vdescribe = $row_profile["describe_yourself"];
            $Vtwitter = $row_profile["twitter"];
            $Vfacebook = $row_profile["facebook"];
            $Vinstagram = $row_profile["instagram"];
            $Vlinkedin = $row_profile["linkedin"];
            $Vhobbies = $row_profile["hobbies"];
        }
        foreach ($Education as $row_education) {
            $Vid = $row_education["id_education"];
            $Vuniversity = $row_education["University"];
            $Vhighschool = $row_education["Highschool"];
        }
?>
      <div class="name-wrapper">
        <h1><?= @$Vnama ?></h1><!-- YOUR NAME AND LAST NAME  -->
      </div>
      <div class="clearfix"></div>
      <div class="contact-info clearfix">
      	<ul class="list-titles">
      		<li>Call</li>
      		<li>Mail</li>
      		<li>Web</li>
      		<li>Home</li>
      	</ul>
        <ul class="list-content ">
        	<li><?= @$Vcall ?></li> <!-- YOUR PHONE NUMBER  -->
        	<li><?= @$Vmail ?></li> <!-- YOUR EMAIL -->
        	<li><a href="<?= @$Vweb ?>"><?= @$Vweb ?></a></li> <!-- YOUR WEBSITE  -->
        	<li><?= @$Vhome ?></li> <!-- YOUR STATE AND COUNTRY  -->
        </ul>
      </div>
      <div class="contact-presentation"> <!-- YOUR PRESENTATION RESUME  -->
      	<p><?= @$Vdescribe ?> </p>
      </div>
      <div class="contact-social clearfix">
      	<ul class="list-titles">
      		<li>Twitter</li>
      		<li>Facebook</li>
      		<li>Instagram</li>
          <li>Linkedin</li>
      	</ul>
        <ul class="list-content"> <!-- REMEMBER TO PUT THE URL ON THE HREF TAG  -->
      		<li><a href=""><?= @$Vtwitter ?></a></li> <!-- YOUR TWITTER USER  -->
          <li><a href=""><?= @$Vfacebook ?></a></li> <!-- YOUR DRIBBBLE USER  -->
      		<li><a href=""><?= @$Vinstagram ?></a></li> <!-- YOUR DRIBBBLE USER  -->
      		<li><a href=""><?= @$Vlinkedin ?></a></li> <!-- YOUR BEHANCE USER  -->
      	</ul>
      </div>
      <br/>
       <div class="contact-social clearfix">
      	<ul class="list-titles">
          <li><h3 class="experience-title">Education</h3></li>
      		<li style="height: 70px;">University </li>
      		<li>High School</li>
      	</ul>
        <ul class="list-content"> <!-- REMEMBER TO PUT THE URL ON THE HREF TAG  -->
          <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
      		<li><?= @$Vuniversity ?></li>
      		<li><?= @$Vhighschool ?></li>
      	</ul>
      </div>
		</div>
	</section>
  <div style="text-align: right; padding-right: 2%;">
    <h2 class="experience-title" style="font-size: 20px;">
      <a href="<?php echo base_url('Login')?>" title="Login Admin">
        Login
      </a>
    </h2>
  </div>
  <section class="experience section-padding">
  	<div class="container">
      
  		<h3 class="experience-title">Experience</h3>
        
      <div class="experience-wrapper">

      <?php
      if($Experience_1 == array ()){
        echo "";
      }else{
        foreach ($Experience_1 as $row_e1){
            $Vid_e1 = $row_e1["id_experience"];
            $Vcompany_1 = $row_e1["Company"];
            $Vdates_1 = $row_e1["Dates"];
            $Vposition_1 = $row_e1["Position"];
            $Vjobdesk_1 = $row_e1["Jobdesk"];
        }
      ?>
        <div class="company-wrapper clearfix">
          <div class="experience-title"><?= @$Vcompany_1 ?></div> <!-- NAME OF THE COMPANY YOUWORK WITH  -->
          <div class="time"><?= @$Vdates_1 ?></div> <!-- THE TIME YOU WORK WITH THE COMPANY  -->
        </div>
        
        <div class="job-wrapper clearfix">
          <div class="experience-title"><?= @$Vposition_1 ?> </div> <!-- JOB TITLE  -->
          <div class="company-description">
            <p><?= @$Vjobdesk_1 ?></p>  <!-- JOB DESCRIPTION  -->
          </div>
        </div>
      <?php
      }
      ?>

      <?php
      if($Experience_2 == array ()){
        echo "";
      }else{
        foreach ($Experience_2 as $row_e2){
            $Vid_e2 = $row_e2["id_experience"];
            $Vcompany_2 = $row_e2["Company"];
            $Vdates_2 = $row_e2["Dates"];
            $Vposition_2 = $row_e2["Position"];
            $Vjobdesk_2 = $row_e2["Jobdesk"];
        }
      ?>
        <div class="company-wrapper clearfix">
          <div class="experience-title"><?= @$Vcompany_2 ?></div> <!-- NAME OF THE COMPANY YOUWORK WITH  -->
          <div class="time"><?= @$Vdates_2 ?></div> <!-- THE TIME YOU WORK WITH THE COMPANY  -->
        </div>
        
        <div class="job-wrapper clearfix">
          <div class="experience-title"><?= @$Vposition_2 ?> </div> <!-- JOB TITLE  -->
          <div class="company-description">
            <p><?= @$Vjobdesk_2 ?></p>  <!-- JOB DESCRIPTION  -->
          </div>
        </div>
      <?php
      }
      ?>


      <?php
      if($Experience_3 == array ()){
        echo "";
      }else{
      foreach ($Experience_3 as $row_e3){
            $Vid_e3 = $row_e3["id_experience"];
            $Vcompany_3 = $row_e3["Company"];
            $Vdates_3 = $row_e3["Dates"];
            $Vposition_3 = $row_e3["Position"];
            $Vjobdesk_3 = $row_e3["Jobdesk"];
        }
      ?>
        <div class="company-wrapper clearfix">
          <div class="experience-title"><?= @$Vcompany_3 ?></div> <!-- NAME OF THE COMPANY YOUWORK WITH  -->
          <div class="time"><?= @$Vdates_3 ?></div> <!-- THE TIME YOU WORK WITH THE COMPANY  -->
        </div>
        
        <div class="job-wrapper clearfix">
          <div class="experience-title"><?= @$Vposition_3 ?> </div> <!-- JOB TITLE  -->
          <div class="company-description">
            <p><?= @$Vjobdesk_3 ?></p>  <!-- JOB DESCRIPTION  -->
          </div>
        </div>
      <?php
      }
      ?>
        
      </div><!--Skill experience-->
      
      <div class="section-wrapper clearfix">
      	<h3 class="section-title">Skills</h3>  <!-- YOUR SET OF SKILLS  -->
        	<ul>
            <?php
            if($Skill_1 == array ()){
              echo "";
            }else{
            ?>
            <li class="skill-percentage" style=""><?= @$Vname_skill_1 ?></li>
            <?php
            }
            ?>
            <?php
            if($Skill_2 == array ()){
              echo "";
            }else{
            ?>
            <li class="skill-percentage" style=""><?= @$Vname_skill_2 ?></li>
            <?php
            }
            ?>
            <?php
            if($Skill_3 == array ()){
              echo "";
            }else{
            ?>
            <li class="skill-percentage" style=""><?= @$Vname_skill_3 ?></li>
            <?php
            }
            ?>
            <?php
            if($Skill_4 == array ()){
              echo "";
            }else{
            ?>
            <li class="skill-percentage" style=""><?= @$Vname_skill_4 ?></li>
            <?php
            }
            ?>
            <?php
            if($Skill_5 == array ()){
              echo "";
            }else{
            ?>
            <li class="skill-percentage" style=""><?= @$Vname_skill_5 ?></li>
            <?php
            }
            ?>
            <?php
            if($Skill_6 == array ()){
              echo "";
            }else{
            ?>
            <li class="skill-percentage" style=""><?= @$Vname_skill_6 ?></li>
            <?php
            }
            ?>
            <?php
            if($Skill_7 == array ()){
              echo "";
            }else{
            ?>
            <li class="skill-percentage" style=""><?= @$Vname_skill_7 ?></li>
            <?php
            }
            ?>
            <?php
            if($Skill_8 == array ()){
              echo "";
            }else{
            ?>
            <li class="skill-percentage" style=""><?= @$Vname_skill_8 ?></li>
            <?php
            }
            ?>
            <?php
            if($Skill_9 == array ()){
              echo "";
            }else{
            ?>
            <li class="skill-percentage" style=""><?= @$Vname_skill_9 ?></li>
            <?php
            }
            ?>
            <?php
            if($Skill_10 == array ()){
              echo "";
            }else{
            ?>
            <li class="skill-percentage" style=""><?= @$Vname_skill_10 ?></li>
            <?php
            }
            ?>
        	</ul>
        
      </div>
      
      <div class="section-wrapper clearfix">
        <h3 class="section-title">Hobbies</h3>  <!-- DESCRIPTION OF YOUR HOBBIES -->
        <p><?= @$Vhobbies ?> </p>
      </div>
      
  	</div>

  </section>
  
  <div class="clearfix"></div>

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script>
  <!-- <script  src="./script.js"></script> -->
  <script src="<?php echo base_url(); ?>css_resume/script.js"></script>

</body>
</html>
