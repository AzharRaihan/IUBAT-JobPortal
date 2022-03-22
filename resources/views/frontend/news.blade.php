@extends('layouts.frontend.frontend-layouts')
@section('page-title', 'News')
@push('page-css')
  <style>
  </style>
@endpush
@section('page-content')
<main class="main-container">
    <!-- Jon Basil -->
    @include('layouts.frontend.partials.join-basil')
    <section class="news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="news-items-latest">
                        <div class="section-img">
                            <img src="{{ asset('assets/frontend/img/news-img.png') }}" alt="">
                        </div>
                        <div class="section-contant">
                            <div class="news-publish-info">
                                <div class="author-name">
                                    <p> <strong> Author: </strong> <span> Nahid Hassan </span></p>
                                </div>
                                <div class="date-and-time">
                                    <p> <strong> Publish Date: </strong> <span> <i class='bx bx-calendar'></i>
                                            06-02-2022 </span></p>
                                </div>
                                <div class="social-share">
                                    <ul>
                                        <li><a href="#"> <i class='bx bxl-facebook'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-instagram'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-twitter'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-linkedin'></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-heading">
                                <h4> Q1 2022 Barometer: Review of Global Sourcing for 2021: Is there an end in sight? </h4>
                            </div>
                            <div class="news-contant">
                                <article>
                                    <p> A tumultuous 2021 saw promising recovery trends falter with the resurgence of COVID-19 outbreaks, China's 
                                        power crunch and ongoing logistics chaos. A tumultuous 2021 saw promising recovery trends falter with the resurgence of COVID-19 outbreaks, China's 
                                        power crunch and ongoing logistics chaos. A tumultuous 2021 saw promising recovery trends falter with the resurgence of COVID-19 outbreaks, China's 
                                        power crunch and ongoing logistics chaos.</p>
                                </article>
                                <div class="redmore-social-share">
                                    <div class="redmore-btn">
                                        <div class="Basil-btn">
                                            <a href="news-details.html" class="btn btn-sm"> <span> Read the full article </span> <i class='bx bx-chevrons-right'></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-items">
                        <div class="news-img">
                            <img src="{{ asset('assets/frontend/img/news-img.png') }}" alt="">
                            <div class="date-and-time">
                                <p> <strong> Publish Date: </strong> <span> <i class='bx bx-calendar'></i>
                                        06-02-2022 </span></p>
                            </div>
                        </div>
                        <div class="news-contant">
                            <div class="news-heading">
                                <h4> Q1 2022 Barometer: Review of Global Sourcing for 2021: Is there an end in sight? </h4>
                            </div>
                            <article>
                                <p> A tumultuous 2021 saw promising recovery trends falter with the resurgence of COVID-19 outbreaks, China's power 
                                    crunch and ongoing logistics chaos. </p>
                            </article>
                            <div class="redmore-social-share">
                                <div class="Basil-btn">
                                    <a href="news-details.html" class="btn btn-sm"> <span> Read the full article </span> <i class='bx bx-chevrons-right'></i> </a>
                                </div>
                                <div class="social-share">
                                    <ul>
                                        <li><a href="#"> <i class='bx bxl-facebook'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-instagram'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-twitter'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-linkedin'></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-items">
                        <div class="news-img">
                            <img src="{{ asset('assets/frontend/img/news-img.png') }}" alt="">
                            <div class="date-and-time">
                                <p> <strong> Publish Date: </strong> <span> <i class='bx bx-calendar'></i>
                                        06-02-2022 </span></p>
                            </div>
                        </div>
                        <div class="news-contant">
                            <div class="news-heading">
                                <h4> Q1 2022 Barometer: Review of Global Sourcing for 2021: Is there an end in sight? </h4>
                            </div>
                            <article>
                                <p> A tumultuous 2021 saw promising recovery trends falter with the resurgence of COVID-19 outbreaks, China's power 
                                    crunch and ongoing logistics chaos. </p>
                            </article>
                            <div class="redmore-social-share">
                                <div class="Basil-btn">
                                    <a href="news-details.html" class="btn btn-sm"> <span> Read the full article </span> <i class='bx bx-chevrons-right'></i> </a>
                                </div>
                                <div class="social-share">
                                    <ul>
                                        <li><a href="#"> <i class='bx bxl-facebook'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-instagram'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-twitter'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-linkedin'></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-items">
                        <div class="news-img">
                            <img src="{{ asset('assets/frontend/img/news-img.png') }}" alt="">
                            <div class="date-and-time">
                                <p> <strong> Publish Date: </strong> <span> <i class='bx bx-calendar'></i>
                                        06-02-2022 </span></p>
                            </div>
                        </div>
                        <div class="news-contant">
                            <div class="news-heading">
                                <h4> Q1 2022 Barometer: Review of Global Sourcing for 2021: Is there an end in sight? </h4>
                            </div>
                            <article>
                                <p> A tumultuous 2021 saw promising recovery trends falter with the resurgence of COVID-19 outbreaks, China's power 
                                    crunch and ongoing logistics chaos. </p>
                            </article>
                            <div class="redmore-social-share">
                                <div class="Basil-btn">
                                    <a href="news-details.html" class="btn btn-sm"> <span> Read the full article </span> <i class='bx bx-chevrons-right'></i> </a>
                                </div>
                                <div class="social-share">
                                    <ul>
                                        <li><a href="#"> <i class='bx bxl-facebook'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-instagram'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-twitter'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-linkedin'></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-items">
                        <div class="news-img">
                            <img src="{{ asset('assets/frontend/img/news-img.png') }}" alt="">
                            <div class="date-and-time">
                                <p> <strong> Publish Date: </strong> <span> <i class='bx bx-calendar'></i>
                                        06-02-2022 </span></p>
                            </div>
                        </div>
                        <div class="news-contant">
                            <div class="news-heading">
                                <h4> Q1 2022 Barometer: Review of Global Sourcing for 2021: Is there an end in sight? </h4>
                            </div>
                            <article>
                                <p> A tumultuous 2021 saw promising recovery trends falter with the resurgence of COVID-19 outbreaks, China's power 
                                    crunch and ongoing logistics chaos. </p>
                            </article>
                            <div class="redmore-social-share">
                                <div class="Basil-btn">
                                    <a href="news-details.html" class="btn btn-sm"> <span> Read the full article </span> <i class='bx bx-chevrons-right'></i> </a>
                                </div>
                                <div class="social-share">
                                    <ul>
                                        <li><a href="#"> <i class='bx bxl-facebook'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-instagram'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-twitter'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-linkedin'></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-items">
                        <div class="news-img">
                            <img src="{{ asset('assets/frontend/img/news-img.png') }}" alt="">
                            <div class="date-and-time">
                                <p> <strong> Publish Date: </strong> <span> <i class='bx bx-calendar'></i>
                                        06-02-2022 </span></p>
                            </div>
                        </div>
                        <div class="news-contant">
                            <div class="news-heading">
                                <h4> Q1 2022 Barometer: Review of Global Sourcing for 2021: Is there an end in sight? </h4>
                            </div>
                            <article>
                                <p> A tumultuous 2021 saw promising recovery trends falter with the resurgence of COVID-19 outbreaks, China's power 
                                    crunch and ongoing logistics chaos. </p>
                            </article>
                            <div class="redmore-social-share">
                                <div class="Basil-btn">
                                    <a href="news-details.html" class="btn btn-sm"> <span> Read the full article </span> <i class='bx bx-chevrons-right'></i> </a>
                                </div>
                                <div class="social-share">
                                    <ul>
                                        <li><a href="#"> <i class='bx bxl-facebook'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-instagram'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-twitter'></i> </a></li>
                                        <li><a href="#"> <i class='bx bxl-linkedin'></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-section">
                        <ul class="pagination">
                            <li class="left-etc"><a href="#">&laquo;</a></li>
                            <li><a href="">1</a></li>
                            <li class="active">
                                <span>
                                    2
                                </span>
                            </li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">5</a></li>
                            <li><a href="">6</a></li>
                            <li><a href="">7</a></li>
                            <li><a href="">8</a></li>
                            <li><a href="">9</a></li>
                            <li><a href="">10</a></li>
                            <li><a href="">11</a></li>
                            <li><a href="">12</a></li>
                            <li><a href="">13</a></li>
                            <li><a href="">14</a></li>
                            <li><a href="">15</a></li>
                            <li><a href="">16</a></li>
                            <li><a href="">17</a></li>
                            <li><a href="">18</a></li>
                            <li><a href="">19</a></li>
                            <li><a href="">20</a></li>
                            <li><a href="">21</a></li>
                            <li><a href="">22</a></li>
                            <li><a href="">23</a></li>
                            <li><a href="">24</a></li>
                            <li><a href="">25</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <aside class="sidebar-news-section">
                        <div class="sidebar-news-item">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="sidebar-news">
                                                <div class="section-img">
                                                    <img src="{{ asset('assets/frontend/img/news-img.png') }}" alt="">
                                                    <div class="date-and-time">
                                                        <p> <strong> Publish Date: </strong> <span> <i class='bx bx-calendar'></i>
                                                                06-02-2022 </span></p>
                                                    </div>
                                                </div>
                                                <div class="section-contant">
                                                    <div class="news-heading">
                                                        <h4> USA Today </h4>
                                                    </div>
                                                    <article>
                                                        <p> Biden says running LA ports 24/7 will help save Christmas shopping. It's not that simple,
                                                            experts warn.</p>
                                                    </article>
                                                    <div class="Basil-btn">
                                                        <a href="news-details.html" class="btn btn-sm"> <span> Read the full article </span> <i class='bx bx-chevrons-right'></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="sidebar-news">
                                                <div class="section-img">
                                                    <img src="{{ asset('assets/frontend/img/news-img.png') }}" alt="">
                                                    <div class="date-and-time">
                                                        <p> <strong> Publish Date: </strong> <span> <i class='bx bx-calendar'></i>
                                                                06-02-2022 </span></p>
                                                    </div>
                                                </div>
                                                <div class="section-contant">
                                                    <div class="news-heading">
                                                        <h4> USA Today </h4>
                                                    </div>
                                                    <article>
                                                        <p> Biden says running LA ports 24/7 will help save Christmas shopping. It's not that simple,
                                                            experts warn.</p>
                                                    </article>
                                                    <div class="Basil-btn">
                                                        <a href="news-details.html" class="btn btn-sm"> <span> Read the full article </span> <i class='bx bx-chevrons-right'></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="sidebar-news">
                                                <div class="section-img">
                                                    <img src="{{ asset('assets/frontend/img/news-img.png') }}" alt="">
                                                    <div class="date-and-time">
                                                        <p> <strong> Publish Date: </strong> <span> <i class='bx bx-calendar'></i>
                                                                06-02-2022 </span></p>
                                                    </div>
                                                </div>
                                                <div class="section-contant">
                                                    <div class="news-heading">
                                                        <h4> USA Today </h4>
                                                    </div>
                                                    <article>
                                                        <p> Biden says running LA ports 24/7 will help save Christmas shopping. It's not that simple,
                                                            experts warn.</p>
                                                    </article>
                                                    <div class="Basil-btn">
                                                        <a href="news-details.html" class="btn btn-sm"> <span> Read the full article </span> <i class='bx bx-chevrons-right'></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="sidebar-news">
                                                <div class="section-img">
                                                    <img src="{{ asset('assets/frontend/img/news-img.png') }}" alt="">
                                                    <div class="date-and-time">
                                                        <p> <strong> Publish Date: </strong> <span> <i class='bx bx-calendar'></i>
                                                                06-02-2022 </span></p>
                                                    </div>
                                                </div>
                                                <div class="section-contant">
                                                    <div class="news-heading">
                                                        <h4> USA Today </h4>
                                                    </div>
                                                    <article>
                                                        <p> Biden says running LA ports 24/7 will help save Christmas shopping. It's not that simple,
                                                            experts warn.</p>
                                                    </article>
                                                    <div class="Basil-btn">
                                                        <a href="news-details.html" class="btn btn-sm"> <span> Read the full article </span> <i class='bx bx-chevrons-right'></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@push('page-script')
@endpush