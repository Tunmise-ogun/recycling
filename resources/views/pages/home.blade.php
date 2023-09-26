@extends('layouts.main')

@section('content')
<main id="content" role="main">
    <!-- Hero -->
    <div class="position-relative bg-primary overflow-hidden">
      <div class="container position-relative zi-2 content-space-3 content-space-md-5">
        <div class="w-md-75 w-xl-65 text-center mx-md-auto">
          <!-- Heading -->
          <div class="mb-7">
            <h1 class="display-4 text-white text-capitalize mb-4">TOP POINT RECYCLERS</h1>
            <p class="lead text-white text-capitalize mb-4">Transforming Waste into Opportunity, Empowering Communities, and Shaping a Sustainable Future</p>
          </div>
          <!-- End Title & Description -->

          <div class="d-grid d-sm-flex justify-content-center gap-2">
            <a class="btn btn-light btn-transition px-6" href="{{ route('recyclables-pick-up') }}">Learn More</a>
            <a class="btn text-white" href="{{ route('contact') }}">Get in touch <i class="bi-chevron-right small ms-1"></i></a>
          </div>
        </div>
      </div>

      <!-- Background Shape -->
      <figure class="position-absolute top-0 start-0 w-65">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1246 1078">
          <g opacity=".4">
            <linearGradient id="doubleEllipseTopLeftID1" gradientUnits="userSpaceOnUse" x1="2073.5078" y1="1.7251" x2="2273.4375" y2="1135.5818" gradientTransform="matrix(-1 0 0 1 2600 0)">
              <stop offset="0.4976" style="stop-color:gulpLighten[#377dff,30]"/>
              <stop offset="1" style="stop-color:#377dff"/>
            </linearGradient>
            <polygon fill="url(#doubleEllipseTopLeftID1)" points="519.8,0.6 0,0.6 0,1078 863.4,1078   "/>
            <linearGradient id="doubleEllipseTopLeftID2" gradientUnits="userSpaceOnUse" x1="1717.1648" y1="3.779560e-05" x2="1717.1648" y2="644.0417" gradientTransform="matrix(-1 0 0 1 2600 0)">
              <stop offset="1.577052e-06" style="stop-color:gulpLighten[#377dff,30]"/>
              <stop offset="1" style="stop-color:#377dff"/>
            </linearGradient>
            <polygon fill="url(#doubleEllipseTopLeftID2)" points="519.7,0 1039.4,0.6 1246,639.1 725.2,644   "/>
          </g>
        </svg>
      </figure>
      <!-- End Background Shape -->

      <!-- Shape -->
      <div class="shape shape-bottom zi-1" style="margin-bottom: -.125rem">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
          <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
        </svg>
      </div>
      <!-- End Shape -->
    </div>
    <!-- End Hero -->

    <!-- Features -->
    <div class="container content-space-2 content-space-lg-3">
      <div class="row justify-content-lg-between align-items-lg-center">
        <div class="col-lg-5 mb-9 mb-lg-0">
          <div class="mb-3">
            <h2 class="h1">ABOUT US</h2>
          </div>

          <p style="color: black;">
          Top Point Recycling, founded in 2022, is a for-profit company with a purpose. Our journey began with a mission to redefine waste, transforming it from a burden into a valuable resource.
    </p>

    <h4 style="color: black;">Our Mission:</h4>
    <p style="color: black;">
        At Top Point Recycling, our mission is clear: to change the way society views waste. We don't just recycle; we innovate, turning garbage into products.
    </p>

    <h4 style="color: black;">Our Values:</h4>
    <p style="color: black;">
        Our values drive our actions:
    </p>
    <ul style="color: black;">
        <li>Sustainability: We reduce waste and minimize environmental impact.</li>
        <li>Social Responsibility: We create jobs and empower communities.</li>
        <li>Innovation: We're always finding new ways to improve recycling.</li>
        <li>Integrity: We maintain the highest ethical standards.</li>
    </ul>

          <div class="mt-4">
            <a class="btn btn-primary btn-transition px-5" href="#">Read More</a>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-lg-6 col-xl-5">
          <!-- SVG Element -->
          <div class="position-relative mx-auto" style="max-width: 28rem; min-height: 30rem;">
            <figure class="position-absolute top-0 end-0 zi-2 me-10" data-aos="fade-up">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 450 450" width="165" height="165">
                <g>
                  <defs>
                    <path id="circleImgID2" d="M225,448.7L225,448.7C101.4,448.7,1.3,348.5,1.3,225l0,0C1.2,101.4,101.4,1.3,225,1.3l0,0
                      c123.6,0,223.7,100.2,223.7,223.7l0,0C448.7,348.6,348.5,448.7,225,448.7z"/>
                  </defs>
                  <clipPath id="circleImgID1">
                    <use xlink:href="#circleImgID2"/>
                  </clipPath>
                  <g clip-path="url(#circleImgID1)">
                    <image width="450" height="450" xlink:href="./assets/img/450x450/img1.jpg" ></image>
                  </g>
                </g>
              </svg>
            </figure>

            <figure class="position-absolute top-0 start-0" data-aos="fade-up" data-aos-delay="300">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 335.2 335.2" width="120" height="120">
                <circle fill="none" stroke="#377dff" stroke-width="75" cx="167.6" cy="167.6" r="130.1"/>
              </svg>
            </figure>

            <figure class="d-none d-sm-block position-absolute top-0 start-0 mt-10" data-aos="fade-up" data-aos-delay="200">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 515 515" width="200" height="200">
                <g>
                  <defs>
                    <path id="circleImgID4" d="M260,515h-5C114.2,515,0,400.8,0,260v-5C0,114.2,114.2,0,255,0h5c140.8,0,255,114.2,255,255v5
                      C515,400.9,400.8,515,260,515z"/>
                  </defs>
                  <clipPath id="circleImgID3">
                    <use xlink:href="#circleImgID4"/>
                  </clipPath>
                  <g clip-path="url(#circleImgID3)">
                    <image width="515" height="515" xlink:href="./assets/img/515x515/img1.jpg" transform="matrix(1 0 0 1 1.639390e-02 2.880859e-02)"></image>
                  </g>
                </g>
              </svg>
            </figure>

            <figure class="position-absolute top-0 end-0" style="margin-top: 11rem; margin-right: 13rem;" data-aos="fade-up" data-aos-delay="250">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 67 67" width="25" height="25">
                <circle fill="#00C9A7" cx="33.5" cy="33.5" r="33.5"/>
              </svg>
            </figure>

            <figure class="position-absolute top-0 end-0 me-3" style="margin-top: 8rem;" data-aos="fade-up" data-aos-delay="350">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 141 141" width="50" height="50">
                <circle fill="#FFC107" cx="70.5" cy="70.5" r="70.5"/>
              </svg>
            </figure>

            <figure class="position-absolute bottom-0 end-0" data-aos="fade-up" data-aos-delay="400">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 770.4 770.4" width="280" height="280">
                <g>
                  <defs>
                    <path id="circleImgID6" d="M385.2,770.4L385.2,770.4c212.7,0,385.2-172.5,385.2-385.2l0,0C770.4,172.5,597.9,0,385.2,0l0,0
                      C172.5,0,0,172.5,0,385.2l0,0C0,597.9,172.4,770.4,385.2,770.4z"/>
                  </defs>
                  <clipPath id="circleImgID5">
                    <use xlink:href="#circleImgID6"/>
                  </clipPath>
                  <g clip-path="url(#circleImgID5)">
                    <image width="900" height="900" xlink:href="./assets/img/900x900/img2.jpg" transform="matrix(1 0 0 1 -64.8123 -64.8055)"></image>
                  </g>
                </g>
              </svg>
            </figure>
          </div>
          <!-- End SVG Element -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Features -->

<head>
    <title><span style="color: white;">Our Recycling Services</span></title>
    <style>
        .service-section {
            background-color: #214b99;
            color: #fff;
            padding: 40px;
            text-align: center;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            gap: 20px;
        }

        .service-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .service-item h3 {
            color: #214b99;
        }

        .service-item p {
            color: #444;
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        </style>
</head>
<body>
    <section class="service-section">
        <div class="container position-relative content-space-2 content-space-t-lg-3">
            <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                
                <h2>Our Recycling Services</h2>
            </div>
            <div class="service-grid">
                <div class="service-item">
                    <h3>Recycling Solutions</h3>
                    <p>Our core offering is comprehensive recycling solutions. We accept a wide range of recyclable materials and manage the entire process, from collection and transportation to sorting and processing. Our sustainable practices ensure that waste becomes a valuable resource.</p>
                </div>
                <div class="service-item">
                    <h3>Waste Management Consultation</h3>
                    <p>We provide customized waste reduction plans and sustainability assessments. Our experts guide you through regulatory compliance, helping your organization make environmentally responsible decisions.</p>
                </div>
                <div class="service-item">
                    <h3>E-Waste Recycling</h3>
                    <p>Safely disposing of electronic waste is crucial. We offer a secure electronic recycling process, including data security measures, to protect sensitive information and the environment.</p>
                </div>
                <div class="service-item">
                    <h3>Hazardous Waste Disposal</h3>
                    <p>Hazardous waste demands careful handling. We ensure safe disposal procedures and strict adherence to regulations, mitigating risks and environmental harm.</p>
                </div>
                <div class="service-item">
                    <h3>Sustainability Programs</h3>
                    <p>We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                </div>
                <div class="service-item">
                    <h3>Recyclables Pickup</h3>
                    <p>We offer convenient recyclables pickup services, making it easy for individuals, companies, and government entities to participate in recycling efforts. Simply schedule a pickup, and we'll handle the rest.</p>
                </div>
                </div>
    </section>
</body>
    <head>
    <title>Sustainability Section</title>
    <style>
        .sustainability-section {
            background-color: #f2f9fd; 
            padding: 40px;
            text-align: center;
        }
        .sustainability-heading {
            margin-bottom: 20px;
        }
        .section-heading {
            font-size: 28px;
            color: #000000 ;
        }
        .sustainability-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr); 
            gap: 20px;
        }
        .sustainability-item {
            background-color: #ffffff; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }
        .sub-heading {
            font-size: 20px;
            color: #214b99; 
            margin-bottom: 10px;
        }
        .description {
            color: Black;
        }
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #214b99;
            color: #fff; 
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }
        .cta-button:hover {
            background-color: #234d91; 
        }
    </style>
</head>
<body>
    <section class="sustainability-section">
        <div class="sustainability-heading">
            <h2 class="section-heading">Our Sustainability Commitment</h2>
        </div>
        <div class="sustainability-grid">
            <div class="sustainability-item">
                <h3 class="sub-heading">Reducing Environmental Impact</h3>
                <p class="description">We are dedicated to minimizing our carbon footprint, conserving valuable resources, and improving energy efficiency. Our recycling efforts significantly reduce waste sent to landfills, contributing to a cleaner, greener planet.</p>
            </div>
            <div class="sustainability-item">
                <h3 class="sub-heading">Promoting a Circular Economy</h3>
                <p class="description">Recycling is at the heart of the circular economy. We believe in recycling and reusing materials, extending product lifecycles, and closing the loop in the manufacturing process.</p>
            </div>
            <div class="sustainability-item">
                <h3 class="sub-heading">Driving Green Initiatives</h3>
                <p class="description">We actively engage in partnerships and collaborations to advance eco-friendly technologies and sustainable practices. Together, we work toward a more sustainable future.</p>
            </div>
            <div class="sustainability-item">
                <h3 class="sub-heading">Empowering Communities</h3>
                <p class="description">Sustainability isn't just about the environment; it's also about people. Through our initiatives, we empower communities by creating jobs and fostering a sense of responsibility toward our planet.</p>
            </div>
        <div class="learn-more-button">
            <a href="#" class="cta-button">Learn More</a>
        </div>
    </section>

      
        <!-- SVG Shape -->
        <figure class="position-absolute zi-n1" style="top: -35rem; left: 50rem; width: 62rem; height: 62rem;">
          <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 260 260">
            <circle fill="#e7eaf3" opacity=".7" cx="130" cy="130" r="130"></circle>
          </svg>
        </figure>
        <!-- End SVG Shape -->
      </div>
    </div>

    <!-- Card Grid -->
    <div class="container content-space-2 content-space-lg-3">
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2 class="h1">Read our latest news</h2>
        <p>We've helped some great companies brand, design and get to market.</p>
      </div>
      <!-- End Heading -->

      <div class="row gx-3 mb-5 mb-md-9">
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
          <!-- Card -->
          <a class="card card-transition h-100" href="#">
            <img class="card-img-top" src="./assets/img/500x280/img9.jpg" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-primary">Product</span>
              <h5 class="card-text lh-base">Better is when everything works together</h5>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
          <!-- Card -->
          <a class="card card-transition h-100" href="#">
            <img class="card-img-top" src="./assets/img/500x280/img10.jpg" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-primary">Business</span>
              <h5 class="card-text lh-base">What CFR really is about</h5>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0">
          <!-- Card -->
          <a class="card card-transition h-100" href="#">
            <img class="card-img-top" src="./assets/img/500x280/img11.jpg" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-primary">Business</span>
              <h5 class="card-text lh-base">Should Product Owners think like entrepreneurs?</h5>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-3">
          <!-- Card -->
          <a class="card card-transition h-100" href="#">
            <img class="card-img-top" src="./assets/img/500x280/img12.jpg" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-primary">Facilitate</span>
              <h5 class="card-text lh-base">Announcing Front Strategies: Ready-to-use rules</h5>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <!-- Card Info -->
      <div class="text-center">
        <div class="card card-info-link card-sm">
          <div class="card-body">
            Want to read more? <a class="card-link ms-2" href="#">Go here <span class="bi-chevron-right small ms-1"></span></a>
          </div>
        </div>
      </div>
      <!-- End Card Info -->
    </div>
    <!-- End Card Grid -->

    <!-- Mockup -->
    <div class="shape-container">
      <div class="container">
        <!-- Heading -->
        <div class="w-md-75 text-center mx-md-auto mb-5 mb-md-9">
          <h2 class="h1">Ready to grow your business?</h2>
          <p>Your website is fully responsive so visitors can view your content from their choice of device.</p>
        </div>
        <!-- End Heading -->

        <!-- Devices -->
        <div class="devices">
          <!-- Mobile Device -->
          <figure class="device-mobile rotated-3d-right">
            <div class="device-mobile-frame">
              <img class="device-mobile-img" src="./assets/img/407x867/img5.jpg" alt="Image Description">
            </div>
          </figure>
          <!-- End Mobile Device -->

          <!-- Browser Device -->
          <figure class="device-browser">
            <div class="device-browser-header">
              <div class="device-browser-header-btn-list">
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
                <span class="device-browser-header-btn-list-btn"></span>
              </div>
              <div class="device-browser-header-browser-bar">www.htmlstream.com/front/</div>
            </div>

            <div class="device-browser-frame">
              <img class="device-browser-img" src="./assets/img/1618x1010/img1.jpg" alt="Image Description">
            </div>
          </figure>
          <!-- End Browser Device -->
        </div>
        <!-- End Devices -->
      </div>

      <!-- Shape -->
      <div class="shape shape-bottom zi-3">
        <svg width="3000" height="500" viewBox="0 0 3000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 500H3000V0L0 500Z" fill="#fff"/>
        </svg>
      </div>
      <!-- End Shape -->
    </div>
    <!-- End Mockup -->

    <!-- Clients -->
    <div class="container content-space-2 content-space-b-lg-3">
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-6">
        <h2>Our Partners</h2>
      </div>
      <!-- End Heading -->

      <div class="row justify-content-center text-center">
        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/amazon-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/kaplan-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/google-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/airbnb-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/shopify-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/vidados-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/capsule-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/forbes-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/business-insider-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/hubspot-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col-4 col-sm-3 col-md-2 py-3">
          <img class="avatar avatar-lg avatar-4x3 avatar-centered" src="./assets/svg/brands/layar-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Clients -->
  </main>
@endsection
