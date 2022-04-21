<?php get_header(); ?>
  <!-- HERO -->
  <div class="content">
    <div class="container mt-5">
      <div class="row hero-des">
        <div class="col-md-6 xs-12 ">
          <h1>A Simple Bookmark Manager</h1>
          <p class="mt-3"> A clean and simple interface to organize your favourite websites. Open a new
            browser tab and see your sites load instantly. Try it for free.</p>
          <div class="row">
            <div class="col">
              <button class="btn-blue">Get it on Chrome</button>
              <button class="btn-grey">Get it on Firefox</button>
            </div>
          </div>
        </div>
        <div class="col-md-6 xs-12">
        
          <img src="<?php echo get_template_directory_uri().'/assets/images/illustration-hero.svg';?>"  alt="" class="img-hero">
          <p id="rcorners2" class="mt-5"></p>
        </div>
      </div>
    </div>
  </div>

  <!-- FEATURES -->
  <div class="container ">
    <div class="row center">
      <div class="col mt-5 mb-5">
        <h2 class="mt-5">Features</h2>
        <p>Our aim is to make it quick and easy for you to access your favourite websites.
          Your bookmarks sync between your devices so you can access them on the go.</p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="tab">
          <button class="tablinks actives" onclick="openCity(event, 'Simple')"> Simple Bookmarking</button>
          <button class="tablinks " onclick="openCity(event, 'Speedy')"> Speedy Searching</button>
          <button class="tablinks " onclick="openCity(event, 'Easy')"> Easy Sharing</button>
        </div>
      </div>
    </div>
    <div id="Simple" class="tabcontent ">
      <div class="row">
        <div class="col-md-6 xs-12">
          <p id="rcorners3" class="mt-5"></p>
          <img src="<?php echo get_template_directory_uri().'/assets/images/illustration-features-tab-1.svg'?>" alt="" class="img-ilust">
        </div>
        <div class="col-md-6 xs-12 des-tab">
          <h2 class="mt-5">Bookmark in one click</h2>
          <p> Organize your bookmarks however you like. Our simple drag-and-drop interface
            gives you complete control over how you manage your favourite sites.</p>
          <button class="btn-blue"> More Info</button>
        </div>
      </div>
    </div>
    <div id="Speedy" class="tabcontent non-active">
      <div class="row">
        <div class="col-md-6 xs-12">
          <p id="rcorners3" class="mt-5"></p>
          <img src="<?php echo get_template_directory_uri().'/assets/images/illustration-features-tab-2.svg'?>" alt="" class="img-ilust">
        </div>
        <div class="col-md-6 xs-12 des-tab">
          <h2>Intelligent search</h2>
          <p>
            Our powerful search feature will help you find saved sites in no time at all.
            No need to trawl through all of your bookmarks.</p>
          <button class="btn-blue"> More Info</button>
        </div>
      </div>
    </div>
    <div id="Easy" class="tabcontent non-active">
      <div class="row">
        <div class="col-md-6 xs-12">
          <p id="rcorners3" class="mt-5"></p>
          <img src="<?php echo get_template_directory_uri().'/assets/images/illustration-features-tab-2.svg'?>" alt="" class="img-ilust">
        </div>
        <div class="col-md-6 xs-12">
          <h2> Share your bookmarks</h2>
          <p>
            Easily share your bookmarks and collections with others. Create a shareable
            link that you can send at the click of a button.</p>
          <button class="btn-blue"> More Info</button>
        </div>
      </div>
    </div>
  </div>

  <!-- DOWNLOAD -->
  <div class="container ">
    <div class="row center mt-5">
      <div class="col">
        <h2> Download the extension</h2>
        <p> We’ve got more browsers in the pipeline. Please do let us know if you’ve
          got a favourite you’d like us to prioritize.</p>
      </div>
    </div>
    <div class="download">
      <div class="row mt-5 ">
        <div class="col-md-4 xs-12 ">
          <div class="card-post">
            <img src="<?php echo get_template_directory_uri().'/assets/images/logo-chrome.svg';?>" alt="" class="img-logo">
            <h4 class="mt-4">Add to Chrome</h4>
            <p class="mini"> Minimum version 62</p>
            <img src="<?php echo get_template_directory_uri().'/assets/images/bg-dots.svg';?>" alt="">
            <button class="btn-blue">Add & Install Extension</button>
          </div>
        </div>
        <div class="col-md-4 xs-12 ">
          <div class="card-post margin-2">
            <img src="<?php echo get_template_directory_uri().'/assets/images/logo-firefox.svg';?>" alt="" class="img-logo">
            <h4 class="mt-4">Add to Firefox</h4>
            <p>Minimum version 55</p>
            <img src="<?php echo get_template_directory_uri().'/assets/images/bg-dots.svg';?>" alt="">
            <button class="btn-blue">Add & Install Extension</button>
          </div>
        </div>
        <div class="col-md-4 xs-12 ">
          <div class="card-post margin-3">
            <img src="<?php echo get_template_directory_uri().'/assets/images/logo-opera.svg';?>" alt="" class="img-logo">
            <h4 class="mt-4">Add to Opera</h4>
            <p> Minimum version 46</p>
            <img src="<?php echo get_template_directory_uri().'/assets/images/bg-dots.svg';?>" alt="">
            <button class="btn-blue">Add & Install Extension</button>
          </div>
        </div>
      </div>
    </div>
  </div>

     <!-- FAQ -->
     <div class="container mt-5">
      <div class="row center ">
        <div class="col">
          <h1> Frequently Asked Questions</h1>
          <p> Here are some of our FAQs. If you have any other questions you’d like
            answered please feel free to email us.</p>
          <div class="faq">
            <button class="accordion"> What is Bookmark?</button>
            <div class="panel">
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt
                justo eget ultricies fringilla. Phasellus blandit ipsum quis quam ornare mattis.</p>
            </div>

            <button class="accordion"> How can I request a new browser?</button>
            <div class="panel">
              <p> Sed consectetur quam id neque fermentum accumsan. Praesent luctus vestibulum dolor, ut condimentum
                urna vulputate eget. Cras in ligula quis est pharetra mattis sit amet pharetra purus. Sed
                sollicitudin ex et ultricies bibendum.
              </p>
            </div>

            <button class="accordion">What about other Chromium browsers?</button>
            <div class="panel">
              <p>Integer condimentum ipsum id imperdiet finibus. Vivamus in placerat mi, at euismod dui. Aliquam
                vitae neque eget nisl gravida pellentesque non ut velit.</p>
            </div>
          </div>

          <button class="btn-blue mt-5"> More Info</button>
        </div>
      </div>
    </div>
  </div>

 
  <!-- MAILING SUBS -->
  <div class="container-fluid mail">
    <div class="content mt-5">
      <div class="row  center">
        <div class="col">
          <p>35,000+ ALREADY JOINED</p>
          <h3 class="mt-4"> Stay up-to-date with what <br> we’re doing</h3>

          <div class="row mt-4 mb-4">
            <div class="col">
              <input type="email" placeholder="Enter your email address...">
              <button class="red-btn"> Contact Us </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <?php get_footer(); ?>
