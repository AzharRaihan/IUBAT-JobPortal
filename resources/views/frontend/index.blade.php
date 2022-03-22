@extends('layouts.users.app-layouts')
@section('page-content')
<main class="main-container">
  <section class="slider-section">
      <div class="container">
          <div class="slider-content">
              <div class="company-slogan">
                  <h1> Smart Solutions to Make Products Consumers Can Trust </h1>
              </div>
          </div>
          <div class="slider-items">
              <div class="slider-items-active">
                  <div>
                      <img src="{{ asset('assets/users/img/slider-1.png') }}" alt="">
                  </div>
                  <div>
                      <img src="{{ asset('assets/users/img/slider-2.png') }}" alt="">
                  </div>
                  <div>
                      <img src="{{ asset('assets/users/img/slider-3.png') }}" alt="">
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="featured-about-section">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <div class="single-about">
                      <div class="about-header">
                          <div class="about-image">
                              <img src="{{ asset('assets/users/img/about-1.png') }}" alt="">
                          </div>
                          <div class="about-title">
                              <h4> Improve Your Supply Chain Globally </h4>
                          </div>
                      </div>
                      <div class="about-contant">
                          <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit optio nobis facilis voluptatibus? Consectetur debitis 
                              earum ducimus nulla similique amet totam doloribus magni, ab, animi officia quasi reprehenderit eum. Doloremque.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="single-about">
                      <div class="about-header">
                          <div class="about-image">
                              <img src="{{ asset('assets/users/img/about-3.png') }}" alt="">
                          </div>
                          <div class="about-title">
                              <h4> Intelligent Platform for Quality </h4>
                          </div>
                      </div>
                      <div class="about-contant">
                          <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit optio nobis facilis voluptatibus? Consectetur debitis 
                              earum ducimus nulla similique amet totam doloribus magni, ab, animi officia quasi reprehenderit eum. Doloremque.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="single-about">
                      <div class="about-header">
                          <div class="about-image">
                              <img src="{{ asset('assets/img/about-2.png') }}" alt="">
                          </div>
                          <div class="about-title">
                              <h4> The Basil Difference </h4>
                          </div>
                      </div>
                      <div class="about-contant">
                          <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit optio nobis facilis voluptatibus? Consectetur debitis 
                              earum ducimus nulla similique amet totam doloribus magni, ab, animi officia quasi reprehenderit eum. Doloremque.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="online-advantage" style="background-image: url({{ asset('assets/img/advantage.png') }});">
      <div class="advantage-bg-image">
          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                      
                  </div>
                  <div class="col-md-8">
                      <div class="online-advantage-contant">
                          <div class="section-title">
                              <h4> The Online Advantage </h4>
                          </div>
                          <div class="section-contant">
                              <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita eveniet aliquam quas eum ratione culpa earum amet?
                                  Explicabo veritatis temporibus vel rem illo tempore consequuntur perspiciatis, fuga eos, debitis ipsa. </p>
                              <ul>
                                  <li> Book orders in minutes </li>
                                  <li> Review, share, approve & reject reports with your suppliers </li>
                                  <li> Get your dashboard of quality and supplier KPI's, benchmark within your industry </li>
                                  <li> Manage your quality documentation online </li>
                                  <li> Get instant support from Basil, 24/7/365 via our chat interface </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="service-section">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-title">
                      <h4> Services for Your Industry </h4>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                  <div class="service-box">
                      <div class="service-img">
                          <img src="{{ asset('assets/img/service-2.png') }}" alt="">
                      </div>
                      <div class="service-contant">
                          <div class="service-title">
                              <h4> <a href="category-page.html"> Softlines </a> </h4>
                          </div>
                          <ul>
                              <li> <a href="product-inspection.html"> <i class='bx bx-link-alt'></i> <span> Garments & Apparel </span> </a> </li>
                              <li> <a href="product-inspection.html"> <i class='bx bx-link-alt'></i> <span> Textiles & Fabrics </span> </a> </li>
                              <li> <a href="product-inspection.html"> <i class='bx bx-link-alt'></i> <span> Footwear </span> </a> </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="service-box">
                      <div class="service-img">
                          <img src="{{ asset('assets/img/service-1.png') }}" alt="">
                      </div>
                      <div class="service-contant">
                          <div class="service-title">
                              <h4> <a href="category-page.html"> Hardlines </a> </h4>
                          </div>
                          <ul>
                              <li> <a href="product-inspection.html"> <i class='bx bx-link-alt'></i> <span> Cosmetics </span> </a> </li>
                              <li> <a href="product-inspection.html"> <i class='bx bx-link-alt'></i> <span> Electrical & Electronics </span> </a> </li>
                              <li> <a href="product-inspection.html"> <i class='bx bx-link-alt'></i> <span> Eyewear </span> </a> </li>
                              <li> <a href="product-inspection.html"> <i class='bx bx-link-alt'></i> <span> Jewelry </span> </a> </li>
                              <li> <a href="product-inspection.html"> <i class='bx bx-link-alt'></i> <span> Promotional Products </span> </a> </li>
                              <li> <a href="product-inspection.html"> <i class='bx bx-link-alt'></i> <span> Toys & Recreational </span> </a> </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="service-box">
                      <div class="service-img">
                          <img src="{{ asset('assets/img/service.png') }}" alt="">
                      </div>
                      <div class="service-contant">
                          <div class="service-title">
                              <h4> <a href="category-page.html"> Food </a> </h4>
                          </div>
                          <ul>
                              <li> <a href="product-inspection.html"> <i class='bx bx-link-alt'></i> <span> Fresh Produce </span> </a> </li>
                              <li> <a href="product-inspection.html"> <i class='bx bx-link-alt'></i> <span> Processed Foods </span> </a> </li>
                              <li> <a href="product-inspection.html"> <i class='bx bx-link-alt'></i> <span> Seafood </span> </a> </li>
                              <li> <a href="product-inspection.html"> <i class='bx bx-link-alt'></i> <span> Meat and Poultry </span> </a> </li>
                              <li> <a href="product-inspection.html"> <i class='bx bx-link-alt'></i> <span> Beverages </span> </a> </li>
                              <li> <a href="product-inspection.html"> <i class='bx bx-link-alt'></i> <span> Food Packaging & Containers </span> </a> </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="compliance-management-section" style="background-image: url(./assets/img/compliance-management.jpg);">
      <div class="compliance-bg-overlay">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <div class="compliance-images">
                          <div class="get-starated">
                              <div class="video-play">
                                  <a class="get-starated-video venobox" data-maxwidth="100vh"  data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/embed/HiaN4m4hiQw"> 
                                      <div class="play-now">
                                          <i class="fas fa-play-circle"></i>
                                      </div>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="compliance-contant">
                          <div class="section-title">
                              <h4> Basil : our SaaS Platform for Quality and Compliance Management </h4>
                          </div>
                          <ul>
                              <li> Equip your own inspectors and suppliers with our cloud-based inspection software </li>
                              <li> Basil gives you visibility, agility and control to improve your quality performance </li>
                              <li> Basil gives you visibility, agility and control to improve your quality performance </li>
                          </ul>
                          <div class="Basil-btn">
                              <a href="#" class="btn btn-sm"> <span> Learn more about Basil </span> <i class='bx bx-chevrons-right'></i> </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="supply-chain-section">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-title">
                      <h4>Our Latest Supply Chain Insights</h4>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                  <div class="supply-chain-box">
                      <div class="section-img">
                          <img src="{{ asset('assets/img/supply.png') }}" alt="">
                      </div>
                      <div class="section-contant">
                          <h4> Basil BAROMETER </h4>
                          <p> Q1 2022 Barometer: Review of Global Sourcing for 2021: Is there an end in sight? </p>
                      </div>
                      <div class="Basil-btn">
                          <a href="product-inspection.html" class="btn btn-sm"> <span> View Now  </span> <i class='bx bx-chevrons-right'></i> </a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="supply-chain-box">
                      <div class="section-img">
                          <img src="{{ asset('assets/img/supply.png') }}" alt="">
                      </div>
                      <div class="section-contant">
                          <h4> Basil BAROMETER </h4>
                          <p> Q1 2022 Barometer: Review of Global Sourcing for 2021: Is there an end in sight? </p>
                      </div>
                      <div class="Basil-btn">
                          <a href="product-inspection.html" class="btn btn-sm"> <span> View Now  </span> <i class='bx bx-chevrons-right'></i> </a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="supply-chain-box">
                      <div class="section-img">
                          <img src="{{ asset('assets/img/supply.png') }}" alt="">
                      </div>
                      <div class="section-contant">
                          <h4> Basil BAROMETER </h4>
                          <p> Q1 2022 Barometer: Review of Global Sourcing for 2021: Is there an end in sight? </p>
                      </div>
                      <div class="Basil-btn">
                          <a href="product-inspection.html" class="btn btn-sm"> <span> Download Now  </span> <i class='bx bx-chevrons-right'></i> </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="quality-improvement">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-title">
                      <h4>End-to-end Solutions for Quality Improvement</h4>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="quality-improvement-items">
                      <div class="quality-slider-active">
                          <div>
                              <div class="quality-contant">
                                  <div class="section-title">
                                      <h4> Product Quality Improvement </h4>
                                  </div>
                                  <article>
                                      <p> Optimizing supplier performance is a key success factor for today's supply chains. Basil can help 
                                          roll out action-driven capacity building programs, from onsite audits to corrective action planning, 
                                          training and improvement.</p>
                                  </article>
                                  <ul>
                                      <li> Manufacturing Audits </li>
                                      <li> Structural Integrity Audits </li>
                                      <li> Supplier training </li>
                                      <li> Environmental Audits </li>
                                  </ul>
                                  <a href="category-page.html"> More on Responsible Sourcing </a>
                                  <div class="Basil-btn">
                                      <a href="contact.html" class="btn btn-sm"> <span> Contact Us </span> <i class='bx bxs-contact'></i> </a>
                                  </div>
                              </div>
                          </div>
                          <div>
                              <div class="quality-contant">
                                  <div class="section-title">
                                      <h4> Supplier Performance Optimization </h4>
                                  </div>
                                  <article>
                                      <p> Optimizing supplier performance is a key success factor for today's supply chains. Basil can help 
                                          roll out action-driven capacity building programs, from onsite audits to corrective action planning, 
                                          training and improvement.</p>
                                  </article>
                                  <ul>
                                      <li> Manufacturing Audits </li>
                                      <li> Structural Integrity Audits </li>
                                      <li> Supplier training </li>
                                      <li> Environmental Audits </li>
                                  </ul>
                                  <a href="category-page.html"> More on Responsible Sourcing </a>
                                  <div class="Basil-btn">
                                      <a href="contact.html" class="btn btn-sm"> <span> Contact Us </span> <i class='bx bxs-contact'></i> </a>
                                  </div>
                              </div>
                          </div>
                          <div>
                              <div class="quality-contant">
                                  <div class="section-title">
                                      <h4> Responsible Sourcing </h4>
                                  </div>
                                  <article>
                                      <p> Optimizing supplier performance is a key success factor for today's supply chains. Basil can help 
                                          roll out action-driven capacity building programs, from onsite audits to corrective action planning, 
                                          training and improvement.</p>
                                  </article>
                                  <ul>
                                      <li> Manufacturing Audits </li>
                                      <li> Structural Integrity Audits </li>
                                      <li> Supplier training </li>
                                      <li> Environmental Audits </li>
                                  </ul>
                                  <a href="category-page.html"> More on Responsible Sourcing </a>
                                  <div class="Basil-btn">
                                      <a href="contact.html" class="btn btn-sm"> <span> Contact Us </span> <i class='bx bxs-contact'></i> </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="webinars-section" style="background-image: url({{ asset('assets/users/img/webinars.png') }});">
      <div class="webinars-bg-color">
          <div class="container">
              <div class="row">
                  <div class="col-md-5">
                      <div class="webinars-contant">
                          <div class="section-title">
                              <h4> Basil Webinars </h4>
                          </div>
                          <div class="section-contant">
                              <p> Check out our coming webinars and sign up to hear from our experts on supply chain, quality and compliance topics. </p>
                          </div>
                          <div class="Basil-btn">
                              <a href="#" class="btn btn-sm"> <span> View Now  </span> <i class='bx bx-chevrons-right'></i> </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-7">

                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="webinars-item-box">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <div class="webinars-box">
                      <div class="section-img">
                          <img src="{{ asset('assets/users/img/webiners-items.jpg') }}" alt="">
                      </div>
                      <div class="section-contant">
                          <div class="date-title">
                              <span> February 15th, 2022 </span>
                          </div>
                          <p> Social Compliance: A Fireside Chat with Rona Starr from APSCA </p>
                      </div>
                      <div class="Basil-btn">
                          <a href="#" class="btn btn-sm"> <span> Learn more  </span> <i class='bx bx-chevrons-right'></i> </a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="webinars-box">
                      <div class="section-img">
                          <img src="{{ asset('assets/users/img/webiners-items.jpg') }}" alt="">
                      </div>
                      <div class="section-contant">
                          <div class="date-title">
                              <span> February 15th, 2022 </span>
                          </div>
                          <p> Social Compliance: A Fireside Chat with Rona Starr from APSCA </p>
                      </div>
                      <div class="Basil-btn">
                          <a href="#" class="btn btn-sm"> <span> Learn more  </span> <i class='bx bx-chevrons-right'></i> </a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="webinars-box">
                      <div class="section-img">
                          <img src="{{ asset('assets/users/img/webiners-items.jpg') }}" alt="">
                      </div>
                      <div class="section-contant">
                          <div class="date-title">
                              <span> February 15th, 2022 </span>
                          </div>
                          <p> Social Compliance: A Fireside Chat with Rona Starr from APSCA </p>
                      </div>
                      <div class="Basil-btn">
                          <a href="#" class="btn btn-sm"> <span> Learn more  </span> <i class='bx bx-chevrons-right'></i> </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="team-featured-section">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-title">
                      <h4>Our Team</h4>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="team-iteam">
                      <div class="owl-carousel owl-theme team-slider">
                          <div class="item">
                              <div class="team-box">
                                  <div class="social-media">
                                      <ul>
                                          <li><a href="#"> <i class='bx bxl-facebook'></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-instagram' ></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-twitter' ></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-linkedin' ></i> </a></li>
                                      </ul>
  
                                      <div class="team-img">
                                          <img src="{{ asset('assets/users/img/team.jpg') }}" alt="">
                                      </div>
                                  </div>
                                  
                                  <div class="team-info">
                                      <div class="team-info-box">
                                          <div class="name">
                                              <h4> Nahid Hassan </h4>
                                          </div>
                                          <div class="designation">
                                              <p> Frontend Developer </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <div class="team-box">
                                  <div class="social-media">
                                      <ul>
                                          <li><a href="#"> <i class='bx bxl-facebook'></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-instagram' ></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-twitter' ></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-linkedin' ></i> </a></li>
                                      </ul>
  
                                      <div class="team-img">
                                          <img src="{{ asset('assets/users/img/team.jpg') }}" alt="">
                                      </div>
                                  </div>
                                  
                                  <div class="team-info">
                                      <div class="team-info-box">
                                          <div class="name">
                                              <h4> Nahid Hassan </h4>
                                          </div>
                                          <div class="designation">
                                              <p> Frontend Developer </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <div class="team-box">
                                  <div class="social-media">
                                      <ul>
                                          <li><a href="#"> <i class='bx bxl-facebook'></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-instagram' ></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-twitter' ></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-linkedin' ></i> </a></li>
                                      </ul>
  
                                      <div class="team-img">
                                          <img src="{{ asset('assets/users/img/team.jpg') }}" alt="">
                                      </div>
                                  </div>
                                  
                                  <div class="team-info">
                                      <div class="team-info-box">
                                          <div class="name">
                                              <h4> Nahid Hassan </h4>
                                          </div>
                                          <div class="designation">
                                              <p> Frontend Developer </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <div class="team-box">
                                  <div class="social-media">
                                      <ul>
                                          <li><a href="#"> <i class='bx bxl-facebook'></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-instagram' ></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-twitter' ></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-linkedin' ></i> </a></li>
                                      </ul>
  
                                      <div class="team-img">
                                          <img src="{{ asset('assets/users/img/team.jpg') }}" alt="">
                                      </div>
                                  </div>
                                  
                                  <div class="team-info">
                                      <div class="team-info-box">
                                          <div class="name">
                                              <h4> Nahid Hassan </h4>
                                          </div>
                                          <div class="designation">
                                              <p> Frontend Developer </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <div class="team-box">
                                  <div class="social-media">
                                      <ul>
                                          <li><a href="#"> <i class='bx bxl-facebook'></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-instagram' ></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-twitter' ></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-linkedin' ></i> </a></li>
                                      </ul>
  
                                      <div class="team-img">
                                          <img src="{{ asset('assets/users/img/team.jpg') }}" alt="">
                                      </div>
                                  </div>
                                  
                                  <div class="team-info">
                                      <div class="team-info-box">
                                          <div class="name">
                                              <h4> Nahid Hassan </h4>
                                          </div>
                                          <div class="designation">
                                              <p> Frontend Developer </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <div class="team-box">
                                  <div class="social-media">
                                      <ul>
                                          <li><a href="#"> <i class='bx bxl-facebook'></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-instagram' ></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-twitter' ></i> </a></li>
                                          <li><a href="#"> <i class='bx bxl-linkedin' ></i> </a></li>
                                      </ul>
  
                                      <div class="team-img">
                                          <img src="{{ asset('assets/users/img/team.jpg') }}" alt="">
                                      </div>
                                  </div>
                                  
                                  <div class="team-info">
                                      <div class="team-info-box">
                                          <div class="name">
                                              <h4> Nahid Hassan </h4>
                                          </div>
                                          <div class="designation">
                                              <p> Frontend Developer </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="case-studies-section">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-title">
                      <h4> Case Studies </h4>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                  <div class="case-studies-box">
                      <div class="section-img">
                          <img src="{{ asset('assets/users/img/case_study.jpg') }}" alt="">
                      </div>
                      <div class="section-contant">
                          <p> Improving Bulk Production Quality by Establishing a Supplier Improvement Program </p>
                      </div>
                      <div class="Basil-btn">
                          <a href="product-inspection.html" class="btn btn-sm"> <span> Read Now </span> <i class='bx bx-chevrons-right'></i> </a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="case-studies-box">
                      <div class="section-img">
                          <img src="{{ asset('assets/users/img/case_study.jpg') }}" alt="">
                      </div>
                      <div class="section-contant">
                          <p> Improving Bulk Production Quality by Establishing a Supplier Improvement Program </p>
                      </div>
                      <div class="Basil-btn">
                          <a href="product-inspection.html" class="btn btn-sm"> <span> Read Now </span> <i class='bx bx-chevrons-right'></i> </a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="case-studies-box">
                      <div class="section-img">
                          <img src="{{ asset('assets/users/img/case_study.jpg') }}" alt="">
                      </div>
                      <div class="section-contant">
                          <p> Improving Bulk Production Quality by Establishing a Supplier Improvement Program </p>
                      </div>
                      <div class="Basil-btn">
                          <a href="product-inspection.html" class="btn btn-sm"> <span> Read Now </span> <i class='bx bx-chevrons-right'></i> </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
</main>
@endsection