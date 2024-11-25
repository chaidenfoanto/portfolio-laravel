@extends('layouts.app')

@section('title', "Chaiden's Portfolio")

@section('meta')
    <meta name="description" content="Free HTML5 Template plus Photoshop design">
    <meta name="keywords" content="free html template, portfolio, html5, sass, jquery">
    <meta name="author" content="Bucky Maler">
@endsection

@section('content')
    <!-- SECTION: Splashscreen -->
    <div class="splashscreen">
        <div class="preloader">
            <span class="preloader__text">Loading</span>
        </div>
    </div>
    <!-- END SECTION: Splashscreen -->

    <!-- SECTION: Navigation -->
    <div id="top" class="navigation">
        <div class="navigation__wrapper wrapper--large">
            <a class="navigation__logo logo" href="#0">CF</a>
            <nav class="navigation__container">
                <ul class="navigation__list">
                    <li><a href="#0">Home</a></li>
                    <li><a href="#work">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <a class="navigation__cta button" href="#0">Get A Quote</a>
            <div class="navigation__burger">
                <span class="navigation__burger-el navigation__burger-el--top"></span>
                <span class="navigation__burger-el navigation__burger-el--middle"></span>
                <span class="navigation__burger-el navigation__burger-el--bottom"></span>
            </div>
        </div>
    </div>
    <!-- END SECTION: Navigation -->

    <!-- SECTION: Intro -->
    <header class="header">
        <div class="introduction">
            <h1 class="introduction__content">
                <span class="introduction__content-el introduction__content-el--name">Chaiden Foanto</span>
                <span class="introduction__content-el introduction__content-el--description" style="color: #5D6CF0FF">Portfolio</span>
                <span class="introduction__content-el introduction__content-el--job">Professional</span>
            </h1>
            <!-- SVG Arrow -->
        </div>
    </header>
    <!-- END SECTION: Intro -->

    <main role="main">
        <!-- SECTION: About -->
        <section class="about">
            <div class="about__wrapper wrapper--small">
                <div class="about__content">
                    <div class="about__content-blurb blurb blurb--framed">
                        <h2 class="blurb__heading">Nothing is<br>impossible</h2>
                        <p class="blurb__copy no-margin">If you just work hard enough at it</p>
                    </div>
                    <p class="about__content-signature">Chaiden Foanto</p>
                </div>
                <img class="about__visual" style="height: 570px;width:auto" src="{{ secure_asset('img/about-visual.png') }}" alt="Chaiden Foanto">
            </div>
        </section>
        <!-- END SECTION: About -->

        <!-- SECTION: App Design -->
        <section class="app-design">
            <div class="app-design__wrapper wrapper--large">
                <div class="app-design__content blurb">
                    <h2 class="blurb__heading">UC Hub <br>Design</h2>
                    <p class="blurb__copy blurb__copy--tight">App design for UC Hub, an awesome library application for Ciputra University.</p>
                    <a class="transform-link" href="https://www.figma.com/design/x8avJPWrgpU5cIGZAqHD9q/UC-Hub?node-id=0-1&t=DdqwIwrvoOaeNHa3-1">Check it out</a>
                </div>
            </div>
            <figure class="app-design__visual"></figure>
        </section>
        <!-- END SECTION: App Design -->

        <!-- SECTION: Web Design -->
        <section class="web-design">
            <div class="web-design__wrapper wrapper--small">
                <div class="web-design__content blurb">
                    <h2 class="blurb__heading">First Web <br>Design</h2>
                    <p class="blurb__copy blurb__copy--tight">Web I made for my first portfolio, it is a memorable website for me.</p>
                    <a class="transform-link" href="https://chaidenfoanto.github.io/First-Resume/">Check it out</a>
                </div>
            </div>
            <figure class="web-design__visual"></figure>
        </section>
        <!-- END SECTION: Web Design -->

        <!-- SECTION: Work -->
        <section id="work" class="work">
            <h2 class="work__heading title">Latest Projects</h2>
            <div class="work__wrapper wrapper--large">
                <ul class="work__list">
                    <li class="work__list-el work__list-el--is-active">
                        <div class="work__content">
                            <div class="work__content-blurb blurb blurb--framed">
                                <h3 class="blurb__heading">CF COMPANY<br>Web Design</h3>
                                <p class="blurb__copy">The awesome atmosphere at CF Holding Company were superb to work with because they knew their goals exactly.</p>
                            </div>
                            <a class="transform-link" href="#0">See full project</a>
                        </div>
                        <div class="work__visual">
                            <img src="{{ secure_asset('img/CF-Company.png') }}" alt="CF Holding Company">
                        </div>
                    </li>
                    <li class="work__list-el">
                        <div class="work__content">
                            <div class="work__content-blurb blurb blurb--framed">
                                <h3 class="blurb__heading">NPLC<br>UI Design</h3>
                                <p class="blurb__copy">NPLC website is created to showcase the National Programming and Logic Competition organized by Ciputra University, focusing on innovation, competitive programming, and logical problem-solving skills.</p>
                            </div>
                            <a class="transform-link" href="#0">See full project</a>
                        </div>
                        <div class="work__visual">
                            <img src="{{ secure_asset('img/NPLC.png') }}" alt="NPLC Mockup UI">
                        </div>
                    </li>
                    <li class="work__list-el">
                        <div class="work__content">
                            <div class="work__content-blurb blurb blurb--framed">
                                <h3 class="blurb__heading">CF University<br>Web Design</h3>
                                <p class="blurb__copy">CF University Form allows you to apply as a student through this easy-to-use registration form.</p>
                            </div>
                            <a class="transform-link" href="https://chaidenfoanto.github.io/Chaiden---0806022310023---Form-Registration/">See full project</a>
                        </div>
                        <div class="work__visual">
                            <img src="{{ secure_asset('img/CF-Univ.png') }}" alt="CF University Form Web Design">
                        </div>
                    </li>
                </ul>
                <ul class="work__navigation">
                    <li class="work__navigation-el work__navigation-el--is-active"></li>
                    <li class="work__navigation-el"></li>
                    <li class="work__navigation-el"></li>
                </ul>
            </div>
        </section>
        <!-- END SECTION: Work -->

        <!-- SECTION: Contact -->
        <section id="contact" class="contact">
            <h2 class="contact__heading title">Contact Me</h2>
            <div class="contact__wrapper wrapper--large">
                <div class="contact__visual">
                    <img src="{{ secure_asset('img/contact-visual.png') }}" alt="Chaiden Foanto's location">
                </div>
                <form class="contact__form">
                    <input class="contact__form-el contact__form-el--name" type="text" placeholder="Your Name" spellcheck="false">
                    <input class="contact__form-el contact__form-el--email" type="email" placeholder="Your Email" spellcheck="false">
                    <textarea class="contact__form-el contact__form-el--message" placeholder="Your Message"></textarea>
                    <input class="contact__form-el contact__form-el--submit" type="submit" value="Send">
                </form>
            </div>
        </section>
        <!-- END SECTION: Contact -->
    </main>

    <!-- SECTION: Footer -->
    <footer class="footer">
        <div class="footer__wrapper wrapper--large">
            <p>&copy; {{ date('Y') }} Chaiden Foanto. All rights reserved.</p>
        </div>
    </footer>
    <!-- END SECTION: Footer -->
@endsection
