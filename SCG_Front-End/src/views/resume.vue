<template>
 <div class="resume">
  <article class="resume-wrapper text-center position-relative">
   <div class="resume-wrapper-inner mx-auto text-left bg-white shadow-lg">
    <header class="resume-header pt-4 pt-md-0">
     <div class="media flex-column flex-md-row">
      <img class="mr-3 mt-0 picture mx-auto" src="../assets/images/profile.png" alt />
      <div class="media-body p-4 d-flex flex-column flex-md-row mx-auto mx-lg-0">
       <div class="primary-info">
        <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">PENSIRI KUSALAPORN</h1>
        <div class="title mb-3">Web Developer</div>
        <ul class="list-unstyled">
         <li class="mb-2">
          <a href="#">
           <i class="far fa-envelope fa-fw mr-2" data-fa-transform="grow-3"></i>pensiri701e@gmail.com
          </a>
         </li>
         <li>
          <a href="#">
           <i class="fas fa-mobile-alt fa-fw mr-2" data-fa-transform="grow-6"></i>(+66) 956983268
          </a>
         </li>
        </ul>
       </div>
       <!--//primary-info-->
       <div class="secondary-info ml-md-auto mt-2">
        <ul class="resume-social list-unstyled">
         <li class="mb-3">
          <a href="#">
           <span class="fa-container text-center mr-2">
            <i class="fab fa-linkedin-in fa-fw"></i>
           </span>linkedin.com/in/pensiriK
          </a>
         </li>
         <li class="mb-3">
          <a href="#">
           <span class="fa-container text-center mr-2">
            <i class="fab fa-github-alt fa-fw"></i>
           </span>github.com/Pensirik
          </a>
         </li>
        </ul>
       </div>
       <!--//secondary-info-->
      </div>
      <!--//media-body-->
     </div>
     <!--//media-->
    </header>
    <div class="resume-body p-5">
     <section class="resume-section summary-section mb-5">
      <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Career Summary</h2>
      <div class="resume-section-content">
       <p
        class="mb-0"
       >11 years of Web Developer specializing in PHP, Laravel Framework, Wordpress and RESTful web services. Dedicated experience with front end development via Vue and React. Skill expansion and continuous improvement always inspire me to keep learning.</p>
      </div>
     </section>
     <!--//summary-section-->
     <div class="row">
      <Info />
      <Experience />

      <div class="col-lg-3">
       <Skills />
       <Certificate />
       <LanguageInterests />
      </div>
     </div>
     <!--//row-->
    </div>
    <!--//resume-body-->
   </div>
  </article>
 </div>
</template>

<script>
// @ is an alias to /src
import resume from "@/assets/css/resume.css";

import Skills from "@/components/Skills.vue";
import Certificate from "@/components/Certificate.vue";
import LanguageInterests from "@/components/Language&Interests.vue";
import Info from "@/components/Info.vue";

export default {
 components: {
  Skills,
  Certificate,
  Info,
  LanguageInterests
 }
};
</script>
