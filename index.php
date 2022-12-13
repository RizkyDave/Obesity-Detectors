<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta property="og:type" content="website">
<meta property="og:site_name" content="Obesity Detector">
<meta property="og:title" content="Obesity Detector">
<meta property="og:description" content="want to know your ideal weight and do you want to know your weight is obese or not, here is the place">
<meta property="og:image" content="https://cdn.discordapp.com/attachments/964494147190939688/1047056737351512075/Obetect.gif">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@dappynet.id">
<meta name="twitter:creator" content="@RyzenX15">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/img/hero.svg" type="image/png" />

    <title>Obesity detector</title>

    <!-- Icon -->
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    
    <!-- Tailwind css -->
    <link rel="stylesheet" href="assets/css/tailwindcss.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  </head>
  <body>
    <!-- Header Area wrapper Starts -->
    <header id="header-wrap" class="relative">
      <!-- Navbar Start -->
      <div class="navigation fixed top-0 left-0 w-full z-30 duration-300">
        <div class="container px-4">
          <nav
            class="
              navbar
              py-2
              navbar-expand-lg
              flex
              justify-between
              items-center
              relative
              duration-300
            "
          >

<style>

.imgbf {
  display: block;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
}
</style>
            <a class="navbar-brand" href="index.html">
              <img src="assets/img/logo2.png" alt="Logo" /> 
            </a> 
            
            <div
              class="
                header-btn
                hidden
                sm:block sm:absolute sm:right-0 sm:mr-16
                lg:static lg:mr-0
              "
            >
              <a
                class="
                  text-blue-600
                  border border-blue-600
                  px-10
                  py-3
                  rounded-full
                  duration-300
                  hover:bg-blue-600 hover:text-white
                "
                href="https://trakteer.id/DappyNet"
              >
                Support :)</a
              >
            </div>
          </nav>
        </div>
      </div>
      <!-- Navbar End -->
    </header>
    <!-- Header Area wrapper End -->

    <!-- Hero Area Start -->
    
    <section id="hero-area" class="bg-blue-100 pt-48 pb-10">
       
      <br>
      <div class="container px-4">
        <div class="flex justify-between">
          <div class="w-full text-center">
            
            <h2 class="text-4xl font-bold leading-snug text-gray-700 mb-10">
              Obesity Detector <br class="hidden lg:block" />
              Check Your have A obesity or no?
            </h2>
           

               <!-- Subscribe Section Start -->
    <section id="Subscribes" class="text-center py-20 bg-blue-100">
      <div class="container px-4">
        <div class="flex justify-center mx-3">
          <div class="w-full sm:w-3/4 md:w-2/3 lg:w-1/2">
            <h4 class="mb-3 text-4xl text-gray-700 font-bold tracking-wide">
              Start Now
            </h4>
            <p class="mb-4 text-gray-600 leading-loose text-sm">
              Lets Go Calculate To Know<br>
              <?php
$filename = 'counter.txt';
 
function counter(){		
	global $filename;	
 
	if(file_exists($filename)){		
		$value = file_get_contents($filename);	
	}else{		
		$value = 0;		
	}
 
	file_put_contents($filename, ++$value);		
}
 
counter();	
 
echo ''.file_get_contents($filename).' User Has Click The Calculate Button' ;	
?>
              
            </p>
            <form action="" method="get">
              <div class="wow fadeInDown">
                
                <input type="number" class="
                    w-full
                    mb-5
                    bg-white
                    border border-blue-300
                    rounded-full
                    px-5
                    py-3
                    duration-300
                    focus:border-blue-600
                    outline-none
                  "
                  placeholder="Your Height" name="tb" required>
                
                
                <div class="wow fadeInDown">
                <input type="number" class="
                    w-full
                    mb-5
                    bg-white
                    border border-blue-300
                    rounded-full
                    px-5
                    py-3
                    duration-300
                    focus:border-blue-600
                    outline-none
                  "
                  placeholder="Your Weight" name="bb" required>
              </div>
            
          </div>
        </div>
      </div>
    </section>
             <div class="text-center mb-10">
              
               <button type="submit" name="proses" class="
                  text-white
                  bg-blue-600
                  px-10
                  py-3
                  rounded-full
                  duration-300
                  hover:bg-blue-500
                ">Calculate</button>
             </form>
<br>
      <br>
               

     <?php 
    if(isset($_GET['proses'])){
        $tbp = $_GET['tb'];
        $bb = $_GET['bb'];

        $tb = $tbp/100;
        $hitung = $bb / ($tb * $tb);
        if($hitung <= 18.4){
        echo'
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Height : '.$tbp.' Cm<br>
            Weight : '.$bb.' Kg<br>
            BMI         : '.number_format($hitung,1).'<br>
            Information : <strong class="less">less / thin</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
         </div>

<style>
.less{
color: #7ddb60;
}
</style>
         ';
        }elseif($hitung <= 25){
          echo'
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
              Height: '.$tbp.' Cm<br>
              Weight : '.$bb.' Kg<br>
              BMI         : '.number_format($hitung,1).'<br>
              Information : <strong class="normal">Normal</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
           </div>


<style>
.normal{
color: GREEN;
}
</style>
           ';
        }elseif($hitung <= 27){
            echo'
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Height: '.$tbp.' Cm<br>
                Weight : '.$bb.' Kg<br>
                BMI         : '.number_format($hitung,1).'<br>
                Information : <strong class="red">Fat</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

<style>
.red{
color: #e8836f;
}
</style>
            ';
        }elseif($hitung > 27 ){
            echo'
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Height : '.$tbp.' Cm<br>
                Weight : '.$bb.' Kg<br>
                BMI         : '.number_format($hitung,1).'<br>
                Information : <strong class=red>Obesity</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

<style>
.red{
color: RED;
}
</style>
            ';
        }
    }?>
               
               
              
    <!-- Subscribe Section End -->
              
            </div>
            <div class="text-center">
              <img class="img-fluid mx-auto" src="assets/img/hero.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Area End -->

    <!-- Services Section Start -->
    <section id="services" class="py-24">
      <div class="container px-4">
        <div class="text-center">
          <h2 class="mb-12 text-4xl text-gray-700 font-bold tracking-wide">
            Our Services
          </h2>
        </div>
        <div class="flex flex-wrap">
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4">
              <div class="mb-4 text-blue-600 text-5xl">
                <i class="lni lni-cog"> </i>
              </div>
              <div>
                <h3
                  class="
                    text-gray-800
                    font-semibold
                    text-lg
                    block
                    mb-3
                    uppercase
                  "
                >
                  Web Development
                </h3>
                <p class="text-gray-600">
                  We will definitely always make a website that is always useful for you...
                </p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4">
              <div class="mb-4 text-blue-600 text-5xl">
                <i class="lni lni-bar-chart"> </i>
              </div>
              <div>
                <h3
                  class="
                    text-gray-800
                    font-semibold
                    text-lg
                    block
                    mb-3
                    uppercase
                  "
                >
                  Useful Tools
                </h3>
                <p class="text-gray-600">
                 We have prepared tools that are always useful and easy for you to use...
                </p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4">
              <div class="mb-4 text-blue-600 text-5xl">
                <i class="lni lni-pencil-alt"> </i>
              </div>
              <div>
                <h3
                  class="
                    text-gray-800
                    font-semibold
                    text-lg
                    block
                    mb-3
                    uppercase
                  "
                >
                 Application programming interface
                </h3>
                <p class="text-gray-600">
                  we also always support developers by developing Technology through api
                </p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          
          <!-- Services item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4">
              <div class="mb-4 text-blue-600 text-5xl">
                <i class="lni lni-layers"> </i>
              </div>
              <div>
                <h3
                  class="
                    text-gray-800
                    font-semibold
                    text-lg
                    block
                    mb-3
                    uppercase
                  "
                >
                  Bot Development
                </h3>
                <p class="text-gray-600">
                  and we also always develop interesting ideas through social interaction, namely discord
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Feature Section Start -->
    <div id="feature" class="bg-blue-100 py-24">
      <div class="container px-4">
        <div class="flex flex-wrap items-center">
          <div class="w-full lg:w-1/2">
            <div class="mb-5 lg:mb-0">
              <h2 class="mb-12 text-4xl text-gray-700 font-bold tracking-wide">
                Learn More About Us
              </h2>

              <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 lg:w-1/2">
                  <div class="m-3">
                    <div class="icon text-4xl text-blue-600 mb-3">
                      <i class="lni lni-layers"> </i>
                    </div>
                    <div class="features-content">
                      <h4 class="text-gray-800 font-medium block mb-3">
                        Fast Response
                      </h4>
                      <p>
                        the application that we have certainly has a fast response to help you
                      </p>
                    </div>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/2">
                  <div class="m-3">
                    <div class="icon text-4xl text-blue-600 mb-3">
                      <i class="lni lni-gift"> </i>
                    </div>
                    <div class="features-content">
                      <h4 class="text-gray-800 font-medium block mb-3">
                        Free to Use
                      </h4>
                      <p>
                       everyone can use this application easily anywhere and anytime
                      </p>
                    </div>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/2">
                  <div class="m-3">
                    <div class="icon text-4xl text-blue-600 mb-3">
                      <i class="lni lni-laptop-phone"> </i>
                    </div>
                    <div class="features-content">
                      <h4 class="text-gray-800 font-medium block mb-3">
                        Fully Responsive
                      </h4>
                      <p>
                        Our applications are definitely all responsive and always easy to use

                      </p>
                    </div>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/2">
                  <div class="m-3">
                    <div class="icon text-4xl text-blue-600 mb-3">
                      <i class="lni lni-leaf"> </i>
                    </div>
                    <div class="features-content">
                      <h4 class="text-gray-800 font-medium block mb-3">
                        Easy to Use
                      </h4>
                      <p>
                        Our application is definitely made for everyone to get convenience and whenever and wherever it is
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-1/2">
            <div class="mx-3 lg:mr-0 lg:ml-3">
              <img src="assets/img/feature/img-1.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Section End -->

    <!-- Team Section Start -->
    <section id="team" class="py-24 text-center">
      <div class="container px-4">
        <div class="text-center">
          <h2 class="mb-12 text-4xl text-gray-700 font-bold tracking-wide">
            Our Team
          </h2>
        </div>
        <div class="flex flex-wrap justify-center">
          <!-- Team Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div
              class="
                m-3
                text-center
                bg-white
                shadow
                duration-300
                group
                hover:shadow-lg
              "
            >
              <div class="team-img relative">
                <img class="img-fluid" src="assets/img/team/img1.png" alt="" />
                <div
                  class="
                    w-full
                    h-full
                    flex
                    items-center
                    justify-center
                    absolute
                    top-0
                    left-0
                    bg-white bg-opacity-60
                    duration-300
                    opacity-0
                    group-hover:opacity-100
                  "
                >
                  <ul class="flex justify-center">
                    <li class="mx-1">
                      <a
                        href="https://www.facebook.com/profile.php?id=100081685233677"
                        class="social-link hover:bg-indigo-500"
                      >
                        <i class="lni lni-facebook-original" aria-hidden="true">
                        </i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a
                        href="https://twitter.com/Dappy_id13"
                        class="social-link hover:bg-blue-400"
                      >
                        <i class="lni lni-twitter-original" aria-hidden="true">
                        </i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a
                        href="https://www.instagram.com/dappynet.id/?hl=id"
                        class="social-link hover:bg-red-500"
                      >
                        <i class="lni lni-instagram-filled" aria-hidden="true">
                        </i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="text-center px-5 py-3">
                <h3 class="text-gray-800 font-bold uppercase text-lg my-2">
                  Rizky Daffy
                </h3>
                <p>Web And Applications Developer</p>
              </div>
            </div>
          </div>
          <!-- Team Item Ends -->
         
        </div>
      </div>
    </section>
    <!-- Team Section End -->

    <!-- Clients Section Start -->
   
    <!-- Clients Section End -->

    
    

    <!-- Contact Section Start -->
    <section id="contact" class="py-24">
      <div class="container px-4">
        <div class="text-center">
          <h2 class="mb-12 text-4xl text-gray-700 font-bold tracking-wide">
            Contact
          </h2>
        </div>

        <div class="flex flex-wrap contact-form-area">
          <div class="w-full md:w-1/2">
            <div class="contact">
              <h2 class="uppercase font-bold text-xl text-gray-700 mb-5 ml-3">
                Contact Form
              </h2>
              <form id="contactForm" action="#0" method="POST">
                <div class="flex flex-wrap">
                  <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                    <div class="mx-3">
                      <input
                        type="text"
                        class="form-input rounded-full"
                        id="name"
                        name="name"
                        placeholder="Name"
                        required
                        data-error="Please enter your name"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                    <div class="mx-3">
                      <input
                        type="text"
                        placeholder="Email"
                        id="email"
                        class="form-input rounded-full"
                        name="email"
                        required
                        data-error="Please enter your email"
                      />
                    </div>
                  </div>
                  <div class="w-full">
                    <div class="mx-3">
                      <input
                        type="text"
                        placeholder="Subject"
                        id="subject"
                        name="subject"
                        class="form-input rounded-full"
                        required
                        data-error="Please enter your subject"
                      />
                    </div>
                  </div>
                  <div class="w-full">
                    <div class="mx-3">
                      <textarea
                        class="form-input rounded-lg"
                        id="message"
                        name="message"
                        placeholder="Your Message"
                        rows="5"
                        data-error="Write your message"
                        required
                      >
                      </textarea>
                    </div>
                  </div>
                  <div class="w-full">
                    <div class="submit-button mx-3">
                      <button
                        class="
                          text-white
                          bg-blue-600
                          px-10
                          py-3
                          rounded-full
                          duration-300
                          hover:bg-blue-500
                        "
                        id="form-submit"
                        type="submit"
                      >
                        Send Message
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="w-full md:w-1/2">
            <div class="ml-3 md:ml-12 wow fadeIn">
              <h2 class="uppercase font-bold text-xl text-gray-700 mb-5">
                Get In Touch
              </h2>
              <div>
                <div class="flex flex-wrap mb-6 items-center">
                  <div
                    class="
                      w-10
                      h-10
                      flex
                      items-center
                      justify-center
                      bg-blue-600
                      text-xl text-white
                      rounded-full
                    "
                  >
                    <i class="lni lni-map-marker"> </i>
                  </div>
                  <p class="pl-3">Bekasi, Indonesia</p>
                </div>
                <div class="flex flex-wrap mb-6 items-center">
                  <div
                    class="
                      w-10
                      h-10
                      flex
                      items-center
                      justify-center
                      bg-blue-600
                      text-xl text-white
                      rounded-full
                    "
                  >
                    <i class="lni lni-envelope"> </i>
                  </div>
                  <p class="pl-3">
                    <a href="javascript:void(0)" class="block">
                      ryanzx0o0@gmail.com</a
                    >
                    <a href="javascript:void(0)" class="block">
                      dappynetwork13@gmail.com</a
                    >
                  </p>
                </div>
                
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Start -->
    <section id="google-map-area">
      <div class="mx-6 mb-6">
        <div class="flex">
          <div class="w-full">
            <object
              style="border: 0; height: 450px; width: 100%"
              data="https://maps.google.com/maps?q=smpn44kotabekasi&t=&z=11&ie=UTF8&iwloc=&output=embed"
            ></object>
          </div>
        </div>
      </div>
    </section>
    <!-- Map Section End -->

    <!-- Footer Section Start -->
    <footer id="footer" class="bg-gray-800 py-16">
      <div class="container px-4">
        <div class="flex flex-wrap">
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4">
            <div class="mx-3 mb-8">
              <div class="footer-logo mb-3">
                <img src="assets/img/logo2.png" alt="" />
              </div>
              <p class="text-gray-300">
                A website that can help you see that you are obese or not
              </p>
            </div>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4">
            <div class="mx-3 mb-8">
              <h3 class="font-bold text-xl text-white mb-5">Company</h3>
              <ul>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      leading-9
                      text-gray-100
                      duration-300
                      hover:text-blue-500
                    "
                  >
                    Press Releases
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      leading-9
                      text-gray-100
                      duration-300
                      hover:text-blue-500
                    "
                    >Mission</a
                  >
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      leading-9
                      text-gray-100
                      duration-300
                      hover:text-blue-500
                    "
                    >Strategy</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4">
            <div class="mx-3 mb-8">
              <h3 class="font-bold text-xl text-white mb-5">About</h3>
              <ul>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      leading-9
                      text-gray-100
                      duration-300
                      hover:text-blue-500
                    "
                  >
                    Career
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      leading-9
                      text-gray-100
                      duration-300
                      hover:text-blue-500
                    "
                    >Team</a
                  >
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      leading-9
                      text-gray-100
                      duration-300
                      hover:text-blue-500
                    "
                    >Clients</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4">
            <div class="mx-3 mb-8">
              <h3 class="font-bold text-xl text-white mb-5">Find us on</h3>

              <ul class="social-icons flex justify-start">
                <li class="mr-4">
                  <a
                    href="javascript:void(0)"
                    class="
                      flex
                      justify-center
                      items-center
                      w-8
                      h-8
                      bg-white
                      rounded-full
                      text-sm text-gray-700
                      duration-300
                      hover:text-white hover:bg-indigo-500
                    "
                  >
                    <i class="lni lni-facebook-filled" aria-hidden="true"> </i>
                  </a>
                </li>
                <li class="mr-4">
                  <a
                    href="javascript:void(0)"
                    class="
                      flex
                      justify-center
                      items-center
                      w-8
                      h-8
                      bg-white
                      rounded-full
                      text-sm text-gray-700
                      duration-300
                      hover:text-white hover:bg-blue-400
                    "
                  >
                    <i class="lni lni-twitter-filled" aria-hidden="true"> </i>
                  </a>
                </li>
                <li class="mr-4">
                  <a
                    href="javascript:void(0)"
                    class="
                      flex
                      justify-center
                      items-center
                      w-8
                      h-8
                      bg-white
                      rounded-full
                      text-sm text-gray-700
                      duration-300
                      hover:text-white hover:bg-red-500
                    "
                  >
                    <i class="lni lni-instagram-filled" aria-hidden="true"> </i>
                  </a>
                </li>
                <li class="mr-4">
                  <a
                    href="javascript:void(0)"
                    class="
                      flex
                      justify-center
                      items-center
                      w-8
                      h-8
                      bg-white
                      rounded-full
                      text-sm text-gray-700
                      duration-300
                      hover:text-white hover:bg-indigo-600
                    "
                  >
                    <i class="lni lni-linkedin-original" aria-hidden="true">
                    </i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <section class="bg-gray-800 py-6 border-t-2 border-gray-700 border-dotted">
      <div class="container px-4">
        <div class="flex flex-wrap">
          <div class="w-full text-center">
            <p class="text-white">
              Designed and Developed by UIdeck
            </p>
            <p class="text-white">
             Copyright © 2022 Obetect.ga - DappyNet All Right Reserved.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Go to Top Link -->
    <a
      href="#"
      class="
        back-to-top
        w-10
        h-10
        fixed
        bottom-0
        right-0
        mb-5
        mr-5
        flex
        items-center
        justify-center
        rounded-full
        bg-blue-600
        text-white text-lg
        z-20
        duration-300
        hover:bg-blue-400
      "
    >
      <i class="lni lni-chevron-up"> </i>
    </a>

    <!-- All js Here -->
    <script src="assets/js/main.js"></script>
              <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
