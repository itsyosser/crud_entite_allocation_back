<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* allocation/index.html.twig */
class __TwigTemplate_7d6abd28c7610ce0cc0ef5aba9e4813900acc54514fef128084315eb56687ce2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allocation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allocation/index.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

\t
<!-- Mirrored from jthemes.net/themes/html/harmony-event/event-2-without-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jan 2024 21:09:11 GMT -->
<head>

\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

\t\t<title>Harmoni - Event Grid</title>
\t\t<link rel=\"shortcut icon\" href=\"assets/images/favicon.png\">

\t\t<!-- fraimwork - css include -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/bootstrap.min.css\">

\t\t<!-- icon css include -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/fontawesome-all.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/flaticon.css\">

\t\t<!-- carousel css include -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/slick.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/slick-theme.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/animate.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/owl.carousel.min.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/owl.theme.default.min.css\">

\t\t<!-- others css include -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/magnific-popup.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/jquery.mCustomScrollbar.min.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/calendar.css\">

\t\t<!-- color switcher css include -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/colors/style-switcher.css\">
\t\t<link id=\"color_theme\" rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/colors/default.css\">

\t\t<!-- custom css include -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/style.css\">
\t\t

\t</head>


\t<body class=\"default-header-p\">




\t\t
\t\t<!-- backtotop - start -->
\t\t<div id=\"thetop\" class=\"thetop\"></div>
\t\t<div class='backtotop'>
\t\t\t<a href=\"#thetop\" class='scroll'>
\t\t\t\t<i class=\"fas fa-angle-double-up\"></i>
\t\t\t</a>
\t\t</div>
\t\t<!-- backtotop - end -->

\t\t<!-- preloader - start -->
\t\t<div id=\"preloader\"></div>
\t\t<!-- preloader - end -->




\t\t<!-- header-section - start
\t\t================================================== -->
\t\t<header id=\"header-section\" class=\"header-section default-header-section auto-hide-header clearfix\">

\t\t\t<!-- header-top - start -->
\t\t\t<div class=\"header-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<!-- basic-contact - start -->
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"basic-contact\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\tinfo@harmoni.com
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t\t100-2222-9999
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- basic-contact - end -->

\t\t\t\t\t\t<!-- register-login-group - start -->
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"register-login-group\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#register-modal\" class=\"register-modal-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\tRegister
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div id=\"register-modal\" class=\"reglog-modal-wrapper register-modal mfp-hide clearfix\" style=\"background-image: url(assets/images/login-modal-bg.jpg);\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-black clearfix\">

\t\t\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - start -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"leftside-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"site-logo-wrapper mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"logo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/2.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"register-login-link mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#!\">Register</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copyright-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">©2018 <a href=\"#!\" class=\"yellow-color\">Harmoni.com</a> all right reserved, made with <i class=\"fas fa-heart\"></i> by jThemes Studio </p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - end -->

\t\t\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - start -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rightside-content text-center\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"form-title title-large white-color\">Account <strong>Register</strong></h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-subtitle white-color\">Have an account? <strong>LOGIN NOW</strong></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"login-form text-center mb-50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"User Name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Repeat Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Email Address\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"human-verification text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"imnotarobot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"imnotarobot\">I'm not a robot</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"verification-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/iamnotrobot.png\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"login-btn\">login now</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bottom-text white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Denotes mandatory field.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">** At least one telephone number is required.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - end -->

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"popup-modal-dismiss\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#login-modal\" class=\"login-modal-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div id=\"login-modal\" class=\"reglog-modal-wrapper mfp-hide clearfix\" style=\"background-image: url(assets/images/login-modal-bg.jpg);\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-black clearfix\">

\t\t\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - start -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"leftside-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"site-logo-wrapper mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"logo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/2.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"register-login-link mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#!\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Register</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copyright-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">©2018 <a href=\"#!\" class=\"yellow-color\">Harmoni.com</a> all right reserved, made with <i class=\"fas fa-heart\"></i> by jThemes Studio </p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - end -->

\t\t\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - start -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rightside-content text-center\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"form-title title-large white-color\">Account <strong>Login</strong></h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-subtitle white-color\">Login to our website, or <strong>REGISTER</strong></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fb-login-btn mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tlogin with facebook
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"or-text mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>or sign in</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"login-form text-center mb-50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"example@gmail.com\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"login-btn\">login now</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bottom-text white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Denotes mandatory field.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">** At least one telephone number is required.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - end -->

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"popup-modal-dismiss\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- register-login-group - end -->
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- header-top - end -->

\t\t\t<!-- header-bottom - start -->
\t\t\t<div class=\"header-bottom\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<!-- site-logo-wrapper - start -->
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"site-logo-wrapper\">
\t\t\t\t\t\t\t\t<a href=\"admin-1.html\" class=\"logo\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/0.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- site-logo-wrapper - end -->

\t\t\t\t\t\t<!-- mainmenu-wrapper - start -->
\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t<div class=\"mainmenu-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t<!-- menu-item-list - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item-list ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">home</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='admin-1.html'>home v.1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.1.1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.1.2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.1.3</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.1.4</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='admin-2.html'>home v.2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.2.1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.2.2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.2.3</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='admin-3.html'>home v.3</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.3.1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.3.2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='admin-4.html'>home v.4</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.4.1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">about</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">about us</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href='service.html'>service</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href='faq.html'>FAQ</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">events</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='event-1.html'>event List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"event-1-without-sidebar.html\">list without sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"active\" href='event-2.html'>event Grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"active\" href=\"about.html\">grid without sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href='event-details.html'>event details</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href='booking.html'>event booking</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">blogs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href='blog.html'>blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href='blog-details.html'>blog details</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"gallery.html\">gallery</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"speaker.html\">speaker</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">contact</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">contact us</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href='404-error.html'>404 Error</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- menu-item-list - end -->

\t\t\t\t\t\t\t\t\t<!-- menu-item-list - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"user-search-btn-group ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"toggle-overlay search-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- search-body - start -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"search-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"search-form\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"search-input\" type=\"search\" placeholder=\"Search Here\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"outer-close toggle-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"search-close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- search-body - end -->
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- menu-item-list - end -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- mainmenu-wrapper - end -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- header-bottom - end -->

\t\t</header>
\t\t<!-- header-section - end
\t\t================================================== -->





\t\t<!-- altranative-header - start
\t\t================================================== -->
\t\t<div class=\"header-altranative\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"logo-area float-left\">
\t\t\t\t\t<a href=\"admin-1.html\">
\t\t\t\t\t\t<img src=\"assets/images/1.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<button type=\"button\" id=\"sidebarCollapse\" class=\"alt-menu-btn float-right\">
\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<!-- sidebar menu - start -->
\t\t\t<div class=\"sidebar-menu-wrapper\">
\t\t\t\t<div id=\"sidebar\" class=\"sidebar\">
\t\t\t\t\t<span id=\"sidebar-dismiss\" class=\"sidebar-dismiss\">
\t\t\t\t\t\t<i class=\"fas fa-arrow-left\"></i>
\t\t\t\t\t</span>

\t\t\t\t\t<div class=\"sidebar-header\">
\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t<img src=\"assets/images/2.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- sidebar-form - start -->
\t\t\t\t\t<div class=\"sidebar-form\">
\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t<input id=\"altmenu-sidebar-search\" type=\"search\" placeholder=\"Search\">
\t\t\t\t\t\t\t<label for=\"altmenu-sidebar-search\"><i class=\"fas fa-search\"></i></label>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- sidebar-form - end -->

\t\t\t\t\t<!-- main-pages-links - start -->
\t\t\t\t\t<div class=\"menu-link-list main-pages-links\">
\t\t\t\t\t\t<h2 class=\"menu-title\">all home pages</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"admin-1.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tHome V.1
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"admin-2.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tHome V.2
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"admin-3.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tHome v.3
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"admin-4.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tHome v.4
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- main-pages-links - end -->

\t\t\t\t\t<!-- other-pages-links - start -->
\t\t\t\t\t<div class=\"menu-link-list other-pages-links\">
\t\t\t\t\t\t<h2 class=\"menu-title\">all single pages</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"about.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tAbout Us
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"service.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tour Services
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"event-1.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tevent list
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"event-2.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tevent grid
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"event-1-without-sidebar.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tlist without sidebar
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t<a href=\"event-2-without-sidebar.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tgrid without sidebar
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tLatest blogs
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"gallery.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tour gallery
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"speaker.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tevent speakers
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"contact.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tcontact us
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- other-pages-links - end -->

\t\t\t\t\t<!-- inner-pages-links - start -->
\t\t\t\t\t<div class=\"menu-link-list inner-pages-links\">
\t\t\t\t\t\t<h2 class=\"menu-title\">all inner pages</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"booking.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tevent booking
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"event-details.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tevent details
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href='blog-details.html'>
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tblog details
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"faq.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tFrequently Ask Qusetion
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"404-error.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\t404 error
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- inner-pages-links - end -->

\t\t\t\t\t<!-- login-btn-group - start -->
\t\t\t\t\t<div class=\"login-btn-group\">
\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#alt-register-modal\" class=\"register-modal-btn\">
\t\t\t\t\t\t\t\t\tRegister
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div id=\"alt-register-modal\" class=\"reglog-modal-wrapper register-modal mfp-hide clearfix\" style=\"background-image: url(assets/images/login-modal-bg.jpg);\">
\t\t\t\t\t\t\t\t\t<div class=\"overlay-black clearfix\">

\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - start -->
\t\t\t\t\t\t\t\t\t\t<div class=\"leftside-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"site-logo-wrapper mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"logo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/2.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"register-login-link mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#!\">Register</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"copyright-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">©2018 <a href=\"#!\" class=\"yellow-color\">Harmoni.com</a> all right reserved, made with <i class=\"fas fa-heart\"></i> by jThemes Studio </p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - end -->

\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - start -->
\t\t\t\t\t\t\t\t\t\t<div class=\"rightside-content text-center\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"form-title title-large white-color\">Account <strong>Register</strong></h2>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-subtitle white-color\">Have an account? <strong>LOGIN NOW</strong></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"login-form text-center mb-50\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"User Name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Repeat Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Email Address\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"human-verification text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"alt-imnotarobot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"alt-imnotarobot\">I'm not a robot</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"verification-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/iamnotrobot.png\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"login-btn\">login now</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"bottom-text white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t* Denotes mandatory field.
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">** At least one telephone number is required.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - end -->

\t\t\t\t\t\t\t\t\t\t<a class=\"popup-modal-dismiss\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#alt-login-modal\" class=\"login-modal-btn\">
\t\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div id=\"alt-login-modal\" class=\"reglog-modal-wrapper mfp-hide clearfix\" style=\"background-image: url(assets/images/login-modal-bg.jpg);\">
\t\t\t\t\t\t\t\t\t<div class=\"overlay-black clearfix\">

\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - start -->
\t\t\t\t\t\t\t\t\t\t<div class=\"leftside-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"site-logo-wrapper mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"logo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/2.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"register-login-link mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#!\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Register</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"copyright-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">©2018 <a href=\"#!\" class=\"yellow-color\">Harmoni.com</a> all right reserved, made with <i class=\"fas fa-heart\"></i> by jThemes Studio </p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - end -->

\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - start -->
\t\t\t\t\t\t\t\t\t\t<div class=\"rightside-content text-center\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"form-title title-large white-color\">Account <strong>Login</strong></h2>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-subtitle white-color\">Login to our website, or <strong>REGISTER</strong></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"fb-login-btn mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\tlogin with facebook
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"or-text mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>or sign in</span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"login-form text-center mb-50\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"example@gmail.com\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"login-btn\">login now</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"bottom-text white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t* Denotes mandatory field.
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">** At least one telephone number is required.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - end -->

\t\t\t\t\t\t\t\t\t\t<a class=\"popup-modal-dismiss\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- login-btn-group - end -->

\t\t\t\t\t<!-- social-links - start -->
\t\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t\t<h2 class=\"menu-title\">get in touch</h2>
\t\t\t\t\t\t<div class=\"mb-15\">
\t\t\t\t\t\t\t<h3 class=\"contact-info\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-phone\"></i>
\t\t\t\t\t\t\t\t100-2222-9999
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<h3 class=\"contact-info\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t\tinfo@harmoni.com
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-twitch\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-google-plus-g\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"contact.html\" class=\"contact-btn\">contact us</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- social-links - end -->

\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- sidebar menu - end -->
\t\t</div>
\t\t<!-- altranative-header - end
\t\t================================================== -->





\t\t<!-- breadcrumb-section - start
\t\t================================================== -->
\t\t<section id=\"breadcrumb-section\" class=\"breadcrumb-section clearfix\">
\t\t\t<div class=\"jarallax\" style=\"background-image: url(assets/images/breadcrumb/0.breadcrumb-bg.jpg);\">
\t\t\t\t<div class=\"overlay-black\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-12 col-sm-12\">

\t\t\t\t\t\t\t\t<!-- breadcrumb-title - start -->
\t\t\t\t\t\t\t\t<div class=\"breadcrumb-title text-center mb-50\">
\t\t\t\t\t\t\t\t\t<span class=\"sub-title\">harmoni events</span>
\t\t\t\t\t\t\t\t\t<h2 class=\"big-title\">harmoni <strong>event</strong></h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- breadcrumb-title - end -->

\t\t\t\t\t\t\t\t<!-- breadcrumb-list - start -->
\t\t\t\t\t\t\t\t<div class=\"breadcrumb-list\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"admin-1.html\" class=\"breadcrumb-link\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">event grid</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- breadcrumb-list - end -->

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- breadcrumb-section - end
\t\t================================================== -->





\t\t<!-- event-search-section - start
\t\t================================================== -->
\t\t<section id=\"event-search-section\" class=\"event-search-section clearfix\" style=\"background-image: url(assets/images/special-offer-bg.png);\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<!-- section-title - start -->
\t\t\t\t\t<div class=\"col-lg-4 col-md-12 col-sm-12\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<small class=\"sub-title\">Find best event on Harmoni</small>
\t\t\t\t\t\t\t<h2 class=\"big-title\">event <strong>Search</strong></h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- section-title - end -->

\t\t\t\t\t<!-- search-form - start -->
\t\t\t\t\t<div class=\"col-lg-8 col-md-12 col-sm-12\">
\t\t\t\t\t\t<div class=\"search-form form-wrapper\">
\t\t\t\t\t\t\t<form action=\"#!\">

\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"title\">event keyword</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"search\" placeholder=\"Event name,location,etc\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"title\">event category</span>
\t\t\t\t\t\t\t\t\t\t<select id=\"event-category-select\">
\t\t\t\t\t\t\t\t\t\t\t<option selected=\"\">Conference</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Option 1</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Option 2</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Option 3</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"submit-btn\">search event now</button>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- search-form - end -->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- event-search-section - end
\t\t================================================== -->





\t\t<!-- event-section - start
\t\t================================================== -->
\t\t<section id=\"event-section\" class=\"event-section bg-gray-light sec-ptb-100 clearfix\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">

\t\t\t\t\t<!-- - start -->
\t\t\t\t\t<div class=\"col-lg-9 col-md-12 col-sm-12\">

\t\t\t\t\t\t<div class=\"search-result-form\">
\t\t\t\t\t\t\t<form action=\"#!\">
\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"result-text\">5 Search results from 20 events</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<label for=\"year-select\">Years:</label>
\t\t\t\t\t\t\t\t\t\t<select id=\"year-select\">
\t\t\t\t\t\t\t\t\t\t\t<option selected=\"\">2018</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">2019</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2020</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">2021</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<label for=\"munth-select\">Months:</label>
\t\t\t\t\t\t\t\t\t\t<select id=\"munth-select\">
\t\t\t\t\t\t\t\t\t\t\t<option selected=\"\">June</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">July</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">August</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t<ul class=\"nav event-layout-btngroup\">
\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#list-style\"><i class=\"fas fa-th-list\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"active\" data-toggle=\"tab\" href=\"#grid-style\"><i class=\"fas fa-th\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div id=\"list-style\" class=\"tab-pane fade\">

\t\t\t\t\t\t\t\t<!-- event-item - start -->
\t\t\t\t\t\t\t\t<div class=\"event-list-item clearfix\">

\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/event-1.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-15\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\tBarcelona <strong>Food truck Festival 2018</strong>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"discription-text mb-30\">
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"event-info-list ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-microphone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Speaker</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>jenny juis</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ticket-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Max Seats</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>2,250 seats</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-content - end -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- event-item - end -->

\t\t\t\t\t\t\t\t<!-- event-item - start -->
\t\t\t\t\t\t\t\t<div class=\"event-list-item clearfix\">

\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/event-2.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-15\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\tBarcelona <strong>Food truck Festival 2018</strong>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"discription-text mb-30\">
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"event-info-list ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-microphone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Speaker</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>jenny juis</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ticket-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Max Seats</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>2,250 seats</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-content - end -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- event-item - end -->

\t\t\t\t\t\t\t\t<!-- event-item - start -->
\t\t\t\t\t\t\t\t<div class=\"event-list-item clearfix\">

\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/event-3.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-15\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\tBarcelona <strong>Food truck Festival 2018</strong>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"discription-text mb-30\">
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"event-info-list ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-microphone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Speaker</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>jenny juis</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ticket-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Max Seats</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>2,250 seats</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-content - end -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- event-item - end -->

\t\t\t\t\t\t\t\t<!-- event-item - start -->
\t\t\t\t\t\t\t\t<div class=\"event-list-item clearfix\">

\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/event-4.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-15\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\tBarcelona <strong>Food truck Festival 2018</strong>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"discription-text mb-30\">
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"event-info-list ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-microphone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Speaker</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>jenny juis</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ticket-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Max Seats</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>2,250 seats</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-content - end -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- event-item - end -->

\t\t\t\t\t\t\t\t<!-- event-item - start -->
\t\t\t\t\t\t\t\t<div class=\"event-list-item clearfix\">

\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/event-5.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-15\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\tBarcelona <strong>Food truck Festival 2018</strong>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"discription-text mb-30\">
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"event-info-list ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-microphone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Speaker</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>jenny juis</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ticket-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Max Seats</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>2,250 seats</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-content - end -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- event-item - end -->

\t\t\t\t\t\t\t\t<div class=\"pagination ul-li clearfix\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"page-item prev-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#!\">Prev</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">01</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"page-item active\"><a class=\"page-link\" href=\"#!\">02</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">03</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">04</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">05</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"page-item next-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#!\">Next</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"grid-style\" class=\"tab-pane fade in active show\">
\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">

\t\t\t\t\t\t\t\t\t<!-- event-grid-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-grid-item\">
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/1.event-grid.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBarcelona Food Truck Festival 2018-2019
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-post-meta ul-li-block mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStart 20:00pm - 22:00pm
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tManhattan, New York
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - end -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-grid-item - end -->

\t\t\t\t\t\t\t\t\t<!-- event-grid-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-grid-item\">
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/2.event-grid.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBarcelona Food Truck Festival 2018-2019
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-post-meta ul-li-block mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStart 20:00pm - 22:00pm
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tManhattan, New York
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - end -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-grid-item - end -->

\t\t\t\t\t\t\t\t\t<!-- event-grid-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-grid-item\">
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/1.event-grid.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBarcelona Food Truck Festival 2018-2019
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-post-meta ul-li-block mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStart 20:00pm - 22:00pm
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tManhattan, New York
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - end -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-grid-item - end -->

\t\t\t\t\t\t\t\t\t<!-- event-grid-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-grid-item\">
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/2.event-grid.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBarcelona Food Truck Festival 2018-2019
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-post-meta ul-li-block mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStart 20:00pm - 22:00pm
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tManhattan, New York
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - end -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-grid-item - end -->

\t\t\t\t\t\t\t\t\t<!-- event-grid-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-grid-item\">
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/1.event-grid.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBarcelona Food Truck Festival 2018-2019
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-post-meta ul-li-block mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStart 20:00pm - 22:00pm
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tManhattan, New York
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - end -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-grid-item - end -->

\t\t\t\t\t\t\t\t\t<!-- event-grid-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-grid-item\">
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/2.event-grid.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBarcelona Food Truck Festival 2018-2019
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-post-meta ul-li-block mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStart 20:00pm - 22:00pm
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tManhattan, New York
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - end -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-grid-item - end -->

\t\t\t\t\t\t\t\t\t<!-- pagination - start -->
\t\t\t\t\t\t\t\t\t<div class=\"pagination ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item prev-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#!\">Prev</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">01</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item active\"><a class=\"page-link\" href=\"#!\">02</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">03</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">04</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">05</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item next-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#!\">Next</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- pagination - end -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<!-- - end -->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- event-section - end
\t\t================================================== -->





\t\t<!-- default-footer-section - start
\t\t================================================== -->
\t\t<footer id=\"footer-section\" class=\"footer-section default-footer-section clearfix\">

\t\t\t<!-- footer-top - start -->
\t\t\t<div class=\"footer-top sec-ptb-100 clearfix\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<!-- basic-info - start -->
\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-md-12\">
\t\t\t\t\t\t\t<div class=\"basic-info mb-50 clearfix\">
\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t<!-- basic-info-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"basic-info-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>100 highland ave,</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>california, united state</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- basic-info-item - end -->

\t\t\t\t\t\t\t\t\t<!-- basic-info-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"basic-info-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><a href=\"#!\">contact@pantero.com</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#!\">info@harmoni.com</a></h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- basic-info-item - end -->

\t\t\t\t\t\t\t\t\t<!-- basic-info-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"basic-info-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><a href=\"#!\">100 800 1234 5555</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#!\">100 800 1234 5555</a></h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- basic-info-item - end -->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- basic-info - end -->

\t\t\t\t\t\t<!-- about-wrapper - start -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"about-wrapper\">

\t\t\t\t\t\t\t\t<!-- site-logo-wrapper - start -->
\t\t\t\t\t\t\t\t<div class=\"site-logo-wrapper mb-30\">
\t\t\t\t\t\t\t\t\t<a href=\"admin-1.html\" class=\"logo\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/1.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- site-logo-wrapper - end -->

\t\t\t\t\t\t\t\t<p class=\"mb-30\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t<!-- social-links - start -->
\t\t\t\t\t\t\t\t<div class=\"social-links ul-li\">
\t\t\t\t\t\t\t\t\t<h3 class=\"social-title\">network</h3>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-twitch\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-google-plus-g\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- social-links - end -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- about-wrapper - end -->

\t\t\t\t\t\t<!-- usefullinks-wrapper - start -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"usefullinks-wrapper ul-li-block\">
\t\t\t\t\t\t\t\t<h3 class=\"footer-item-title\">
\t\t\t\t\t\t\t\t\tuseful <strong>links</strong>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Birthday Party</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Business meeting</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Conference</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Food Event</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Musical Event</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Wedding Party</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- usefullinks-wrapper - end -->

\t\t\t\t\t\t<!-- usefullinks-wrapper - start -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"usefullinks-wrapper ul-li-block\">
\t\t\t\t\t\t\t\t<h3 class=\"footer-item-title\">
\t\t\t\t\t\t\t\t\tuseful <strong>links</strong>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">About Harmoni</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Disclaimer</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Contact us</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Events Schedule</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Sponsors</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Venues</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- usefullinks-wrapper - end -->

\t\t\t\t\t\t<!-- instagram-wrapper - start -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"instagram-wrapper ul-li\">
\t\t\t\t\t\t\t\t<h3 class=\"footer-item-title\">
\t\t\t\t\t\t\t\t\tharmoni <strong>instagram</strong>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/instagram/img1.png\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/instagram/img2.png\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/instagram/img3.png\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/instagram/img4.png\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<h4 class=\"followus-link\">
\t\t\t\t\t\t\t\t\tFollow Our Instagram <a href=\"#!\">#Harmoni</a>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- instagram-wrapper - end -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- footer-top - end -->

\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<!-- copyright-text - start -->
\t\t\t\t\t\t<div class=\"col-lg-7 col-md-12 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"copyright-text\">
\t\t\t\t\t\t\t\t<p class=\"m-0\">©2018 <a href=\"#!\" class=\"site-link\">Harmoni.com</a> all right reserved, made with <i class=\"fas fa-heart\"></i> by <a href=\"#!\" class=\"author-link\"><strong>jThemes Studio</strong></a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- copyright-text - end -->

\t\t\t\t\t\t<!-- footer-menu - start -->
\t\t\t\t\t\t<div class=\"col-lg-5 col-md-12 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"footer-menu\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact us</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About us</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Site map</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Privacy policy</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- footer-menu - end -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</footer>
\t\t<!-- default-footer-section - end
\t\t================================================== -->










\t\t<!-- fraimwork - jquery include -->
\t\t<script src=\"assets/js/jquery-3.3.1.min.js\"></script>
\t\t<script src=\"assets/js/popper.min.js\"></script>
\t\t<script src=\"assets/js/bootstrap.min.js\"></script>

\t\t<!-- carousel jquery include -->
\t\t<script src=\"assets/js/slick.min.js\"></script>
\t\t<script src=\"assets/js/owl.carousel.min.js\"></script>

\t\t<!-- map jquery include -->
\t\t<script src=\"assets/js/gmap3.min.js\"></script>
\t\t<script src=\"http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA\"></script>

\t\t<!-- calendar jquery include -->
\t\t<script src=\"assets/js/atc.min.js\"></script>

\t\t<!-- others jquery include -->
\t\t<script src=\"assets/js/jquery.magnific-popup.min.js\"></script>
\t\t<script src=\"assets/js/isotope.pkgd.min.js\"></script>
\t\t<script src=\"assets/js/jarallax.min.js\"></script>
\t\t<script src=\"assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>

\t\t<!-- gallery img loaded - jqury include -->
\t\t<script src=\"assets/js/imagesloaded.pkgd.min.js\"></script>

\t\t<!-- multy count down - jqury include -->
\t\t<script src=\"assets/js/jquery.countdown.js\"></script>

\t\t<!-- color panal - jqury include -->
\t\t<script src=\"assets/js/style-switcher.js\"></script>

\t\t<!-- custom jquery include -->
\t\t<script src=\"assets/js/custom.js\"></script>





\t</body>

<!-- Mirrored from jthemes.net/themes/html/harmony-event/event-2-without-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jan 2024 21:09:11 GMT -->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "allocation/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

\t
<!-- Mirrored from jthemes.net/themes/html/harmony-event/event-2-without-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jan 2024 21:09:11 GMT -->
<head>

\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

\t\t<title>Harmoni - Event Grid</title>
\t\t<link rel=\"shortcut icon\" href=\"assets/images/favicon.png\">

\t\t<!-- fraimwork - css include -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/bootstrap.min.css\">

\t\t<!-- icon css include -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/fontawesome-all.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/flaticon.css\">

\t\t<!-- carousel css include -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/slick.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/slick-theme.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/animate.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/owl.carousel.min.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/owl.theme.default.min.css\">

\t\t<!-- others css include -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/magnific-popup.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/jquery.mCustomScrollbar.min.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/calendar.css\">

\t\t<!-- color switcher css include -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/colors/style-switcher.css\">
\t\t<link id=\"color_theme\" rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/colors/default.css\">

\t\t<!-- custom css include -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/style.css\">
\t\t

\t</head>


\t<body class=\"default-header-p\">




\t\t
\t\t<!-- backtotop - start -->
\t\t<div id=\"thetop\" class=\"thetop\"></div>
\t\t<div class='backtotop'>
\t\t\t<a href=\"#thetop\" class='scroll'>
\t\t\t\t<i class=\"fas fa-angle-double-up\"></i>
\t\t\t</a>
\t\t</div>
\t\t<!-- backtotop - end -->

\t\t<!-- preloader - start -->
\t\t<div id=\"preloader\"></div>
\t\t<!-- preloader - end -->




\t\t<!-- header-section - start
\t\t================================================== -->
\t\t<header id=\"header-section\" class=\"header-section default-header-section auto-hide-header clearfix\">

\t\t\t<!-- header-top - start -->
\t\t\t<div class=\"header-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<!-- basic-contact - start -->
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"basic-contact\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\tinfo@harmoni.com
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t\t100-2222-9999
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- basic-contact - end -->

\t\t\t\t\t\t<!-- register-login-group - start -->
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<div class=\"register-login-group\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#register-modal\" class=\"register-modal-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\tRegister
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div id=\"register-modal\" class=\"reglog-modal-wrapper register-modal mfp-hide clearfix\" style=\"background-image: url(assets/images/login-modal-bg.jpg);\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-black clearfix\">

\t\t\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - start -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"leftside-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"site-logo-wrapper mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"logo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/2.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"register-login-link mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#!\">Register</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copyright-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">©2018 <a href=\"#!\" class=\"yellow-color\">Harmoni.com</a> all right reserved, made with <i class=\"fas fa-heart\"></i> by jThemes Studio </p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - end -->

\t\t\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - start -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rightside-content text-center\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"form-title title-large white-color\">Account <strong>Register</strong></h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-subtitle white-color\">Have an account? <strong>LOGIN NOW</strong></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"login-form text-center mb-50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"User Name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Repeat Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Email Address\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"human-verification text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"imnotarobot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"imnotarobot\">I'm not a robot</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"verification-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/iamnotrobot.png\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"login-btn\">login now</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bottom-text white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Denotes mandatory field.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">** At least one telephone number is required.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - end -->

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"popup-modal-dismiss\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#login-modal\" class=\"login-modal-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div id=\"login-modal\" class=\"reglog-modal-wrapper mfp-hide clearfix\" style=\"background-image: url(assets/images/login-modal-bg.jpg);\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-black clearfix\">

\t\t\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - start -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"leftside-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"site-logo-wrapper mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"logo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/2.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"register-login-link mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#!\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Register</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"copyright-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">©2018 <a href=\"#!\" class=\"yellow-color\">Harmoni.com</a> all right reserved, made with <i class=\"fas fa-heart\"></i> by jThemes Studio </p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - end -->

\t\t\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - start -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rightside-content text-center\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"form-title title-large white-color\">Account <strong>Login</strong></h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-subtitle white-color\">Login to our website, or <strong>REGISTER</strong></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fb-login-btn mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tlogin with facebook
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"or-text mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>or sign in</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"login-form text-center mb-50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"example@gmail.com\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"login-btn\">login now</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bottom-text white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t* Denotes mandatory field.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">** At least one telephone number is required.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - end -->

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"popup-modal-dismiss\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- register-login-group - end -->
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- header-top - end -->

\t\t\t<!-- header-bottom - start -->
\t\t\t<div class=\"header-bottom\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<!-- site-logo-wrapper - start -->
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"site-logo-wrapper\">
\t\t\t\t\t\t\t\t<a href=\"admin-1.html\" class=\"logo\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/images/0.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- site-logo-wrapper - end -->

\t\t\t\t\t\t<!-- mainmenu-wrapper - start -->
\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t<div class=\"mainmenu-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t<!-- menu-item-list - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item-list ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">home</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='admin-1.html'>home v.1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.1.1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.1.2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.1.3</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.1.4</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='admin-2.html'>home v.2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.2.1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.2.2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.2.3</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='admin-3.html'>home v.3</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.3.1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.3.2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='admin-4.html'>home v.4</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='#'>example v.4.1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">about</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">about us</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href='service.html'>service</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href='faq.html'>FAQ</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">events</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='event-1.html'>event List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"event-1-without-sidebar.html\">list without sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"active\" href='event-2.html'>event Grid</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"active\" href=\"about.html\">grid without sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href='event-details.html'>event details</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href='booking.html'>event booking</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">blogs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href='blog.html'>blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href='blog-details.html'>blog details</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"gallery.html\">gallery</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"speaker.html\">speaker</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">contact</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">contact us</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href='404-error.html'>404 Error</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- menu-item-list - end -->

\t\t\t\t\t\t\t\t\t<!-- menu-item-list - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"user-search-btn-group ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"toggle-overlay search-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- search-body - start -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"search-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"search-form\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"search-input\" type=\"search\" placeholder=\"Search Here\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"outer-close toggle-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"search-close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- search-body - end -->
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- menu-item-list - end -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- mainmenu-wrapper - end -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- header-bottom - end -->

\t\t</header>
\t\t<!-- header-section - end
\t\t================================================== -->





\t\t<!-- altranative-header - start
\t\t================================================== -->
\t\t<div class=\"header-altranative\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"logo-area float-left\">
\t\t\t\t\t<a href=\"admin-1.html\">
\t\t\t\t\t\t<img src=\"assets/images/1.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<button type=\"button\" id=\"sidebarCollapse\" class=\"alt-menu-btn float-right\">
\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<!-- sidebar menu - start -->
\t\t\t<div class=\"sidebar-menu-wrapper\">
\t\t\t\t<div id=\"sidebar\" class=\"sidebar\">
\t\t\t\t\t<span id=\"sidebar-dismiss\" class=\"sidebar-dismiss\">
\t\t\t\t\t\t<i class=\"fas fa-arrow-left\"></i>
\t\t\t\t\t</span>

\t\t\t\t\t<div class=\"sidebar-header\">
\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t<img src=\"assets/images/2.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- sidebar-form - start -->
\t\t\t\t\t<div class=\"sidebar-form\">
\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t<input id=\"altmenu-sidebar-search\" type=\"search\" placeholder=\"Search\">
\t\t\t\t\t\t\t<label for=\"altmenu-sidebar-search\"><i class=\"fas fa-search\"></i></label>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- sidebar-form - end -->

\t\t\t\t\t<!-- main-pages-links - start -->
\t\t\t\t\t<div class=\"menu-link-list main-pages-links\">
\t\t\t\t\t\t<h2 class=\"menu-title\">all home pages</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"admin-1.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tHome V.1
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"admin-2.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tHome V.2
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"admin-3.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tHome v.3
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"admin-4.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tHome v.4
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- main-pages-links - end -->

\t\t\t\t\t<!-- other-pages-links - start -->
\t\t\t\t\t<div class=\"menu-link-list other-pages-links\">
\t\t\t\t\t\t<h2 class=\"menu-title\">all single pages</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"about.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tAbout Us
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"service.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tour Services
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"event-1.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tevent list
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"event-2.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tevent grid
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"event-1-without-sidebar.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tlist without sidebar
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t<a href=\"event-2-without-sidebar.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tgrid without sidebar
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"blog.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tLatest blogs
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"gallery.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tour gallery
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"speaker.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tevent speakers
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"contact.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tcontact us
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- other-pages-links - end -->

\t\t\t\t\t<!-- inner-pages-links - start -->
\t\t\t\t\t<div class=\"menu-link-list inner-pages-links\">
\t\t\t\t\t\t<h2 class=\"menu-title\">all inner pages</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"booking.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tevent booking
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"event-details.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tevent details
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href='blog-details.html'>
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tblog details
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"faq.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\tFrequently Ask Qusetion
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"404-error.html\">
\t\t\t\t\t\t\t\t\t<span class=\"icon\"><i class=\"fas fa-home\"></i></span>
\t\t\t\t\t\t\t\t\t404 error
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- inner-pages-links - end -->

\t\t\t\t\t<!-- login-btn-group - start -->
\t\t\t\t\t<div class=\"login-btn-group\">
\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#alt-register-modal\" class=\"register-modal-btn\">
\t\t\t\t\t\t\t\t\tRegister
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div id=\"alt-register-modal\" class=\"reglog-modal-wrapper register-modal mfp-hide clearfix\" style=\"background-image: url(assets/images/login-modal-bg.jpg);\">
\t\t\t\t\t\t\t\t\t<div class=\"overlay-black clearfix\">

\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - start -->
\t\t\t\t\t\t\t\t\t\t<div class=\"leftside-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"site-logo-wrapper mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"logo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/2.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"register-login-link mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#!\">Register</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"copyright-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">©2018 <a href=\"#!\" class=\"yellow-color\">Harmoni.com</a> all right reserved, made with <i class=\"fas fa-heart\"></i> by jThemes Studio </p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - end -->

\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - start -->
\t\t\t\t\t\t\t\t\t\t<div class=\"rightside-content text-center\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"form-title title-large white-color\">Account <strong>Register</strong></h2>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-subtitle white-color\">Have an account? <strong>LOGIN NOW</strong></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"login-form text-center mb-50\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"User Name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Repeat Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Email Address\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"human-verification text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"alt-imnotarobot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"alt-imnotarobot\">I'm not a robot</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"verification-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/iamnotrobot.png\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"login-btn\">login now</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"bottom-text white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t* Denotes mandatory field.
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">** At least one telephone number is required.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - end -->

\t\t\t\t\t\t\t\t\t\t<a class=\"popup-modal-dismiss\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#alt-login-modal\" class=\"login-modal-btn\">
\t\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div id=\"alt-login-modal\" class=\"reglog-modal-wrapper mfp-hide clearfix\" style=\"background-image: url(assets/images/login-modal-bg.jpg);\">
\t\t\t\t\t\t\t\t\t<div class=\"overlay-black clearfix\">

\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - start -->
\t\t\t\t\t\t\t\t\t\t<div class=\"leftside-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"site-logo-wrapper mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"logo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/2.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"register-login-link mb-80\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#!\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Register</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"copyright-text\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">©2018 <a href=\"#!\" class=\"yellow-color\">Harmoni.com</a> all right reserved, made with <i class=\"fas fa-heart\"></i> by jThemes Studio </p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- leftside-content - end -->

\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - start -->
\t\t\t\t\t\t\t\t\t\t<div class=\"rightside-content text-center\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"form-title title-large white-color\">Account <strong>Login</strong></h2>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-subtitle white-color\">Login to our website, or <strong>REGISTER</strong></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"fb-login-btn mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\tlogin with facebook
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"or-text mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>or sign in</span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"login-form text-center mb-50\">
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"example@gmail.com\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"login-btn\">login now</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"bottom-text white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t* Denotes mandatory field.
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">** At least one telephone number is required.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- rightside-content - end -->

\t\t\t\t\t\t\t\t\t\t<a class=\"popup-modal-dismiss\" href=\"#!\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- login-btn-group - end -->

\t\t\t\t\t<!-- social-links - start -->
\t\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t\t<h2 class=\"menu-title\">get in touch</h2>
\t\t\t\t\t\t<div class=\"mb-15\">
\t\t\t\t\t\t\t<h3 class=\"contact-info\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-phone\"></i>
\t\t\t\t\t\t\t\t100-2222-9999
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<h3 class=\"contact-info\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t\tinfo@harmoni.com
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-twitch\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-google-plus-g\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a href=\"contact.html\" class=\"contact-btn\">contact us</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- social-links - end -->

\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- sidebar menu - end -->
\t\t</div>
\t\t<!-- altranative-header - end
\t\t================================================== -->





\t\t<!-- breadcrumb-section - start
\t\t================================================== -->
\t\t<section id=\"breadcrumb-section\" class=\"breadcrumb-section clearfix\">
\t\t\t<div class=\"jarallax\" style=\"background-image: url(assets/images/breadcrumb/0.breadcrumb-bg.jpg);\">
\t\t\t\t<div class=\"overlay-black\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-12 col-sm-12\">

\t\t\t\t\t\t\t\t<!-- breadcrumb-title - start -->
\t\t\t\t\t\t\t\t<div class=\"breadcrumb-title text-center mb-50\">
\t\t\t\t\t\t\t\t\t<span class=\"sub-title\">harmoni events</span>
\t\t\t\t\t\t\t\t\t<h2 class=\"big-title\">harmoni <strong>event</strong></h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- breadcrumb-title - end -->

\t\t\t\t\t\t\t\t<!-- breadcrumb-list - start -->
\t\t\t\t\t\t\t\t<div class=\"breadcrumb-list\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"admin-1.html\" class=\"breadcrumb-link\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">event grid</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- breadcrumb-list - end -->

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- breadcrumb-section - end
\t\t================================================== -->





\t\t<!-- event-search-section - start
\t\t================================================== -->
\t\t<section id=\"event-search-section\" class=\"event-search-section clearfix\" style=\"background-image: url(assets/images/special-offer-bg.png);\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<!-- section-title - start -->
\t\t\t\t\t<div class=\"col-lg-4 col-md-12 col-sm-12\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<small class=\"sub-title\">Find best event on Harmoni</small>
\t\t\t\t\t\t\t<h2 class=\"big-title\">event <strong>Search</strong></h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- section-title - end -->

\t\t\t\t\t<!-- search-form - start -->
\t\t\t\t\t<div class=\"col-lg-8 col-md-12 col-sm-12\">
\t\t\t\t\t\t<div class=\"search-form form-wrapper\">
\t\t\t\t\t\t\t<form action=\"#!\">

\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"title\">event keyword</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-item\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"search\" placeholder=\"Event name,location,etc\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"title\">event category</span>
\t\t\t\t\t\t\t\t\t\t<select id=\"event-category-select\">
\t\t\t\t\t\t\t\t\t\t\t<option selected=\"\">Conference</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Option 1</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Option 2</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Option 3</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"submit-btn\">search event now</button>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- search-form - end -->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- event-search-section - end
\t\t================================================== -->





\t\t<!-- event-section - start
\t\t================================================== -->
\t\t<section id=\"event-section\" class=\"event-section bg-gray-light sec-ptb-100 clearfix\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">

\t\t\t\t\t<!-- - start -->
\t\t\t\t\t<div class=\"col-lg-9 col-md-12 col-sm-12\">

\t\t\t\t\t\t<div class=\"search-result-form\">
\t\t\t\t\t\t\t<form action=\"#!\">
\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"result-text\">5 Search results from 20 events</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<label for=\"year-select\">Years:</label>
\t\t\t\t\t\t\t\t\t\t<select id=\"year-select\">
\t\t\t\t\t\t\t\t\t\t\t<option selected=\"\">2018</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">2019</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2020</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">2021</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<label for=\"munth-select\">Months:</label>
\t\t\t\t\t\t\t\t\t\t<select id=\"munth-select\">
\t\t\t\t\t\t\t\t\t\t\t<option selected=\"\">June</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">July</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">August</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t<ul class=\"nav event-layout-btngroup\">
\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#list-style\"><i class=\"fas fa-th-list\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"active\" data-toggle=\"tab\" href=\"#grid-style\"><i class=\"fas fa-th\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div id=\"list-style\" class=\"tab-pane fade\">

\t\t\t\t\t\t\t\t<!-- event-item - start -->
\t\t\t\t\t\t\t\t<div class=\"event-list-item clearfix\">

\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/event-1.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-15\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\tBarcelona <strong>Food truck Festival 2018</strong>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"discription-text mb-30\">
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"event-info-list ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-microphone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Speaker</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>jenny juis</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ticket-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Max Seats</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>2,250 seats</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-content - end -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- event-item - end -->

\t\t\t\t\t\t\t\t<!-- event-item - start -->
\t\t\t\t\t\t\t\t<div class=\"event-list-item clearfix\">

\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/event-2.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-15\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\tBarcelona <strong>Food truck Festival 2018</strong>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"discription-text mb-30\">
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"event-info-list ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-microphone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Speaker</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>jenny juis</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ticket-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Max Seats</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>2,250 seats</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-content - end -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- event-item - end -->

\t\t\t\t\t\t\t\t<!-- event-item - start -->
\t\t\t\t\t\t\t\t<div class=\"event-list-item clearfix\">

\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/event-3.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-15\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\tBarcelona <strong>Food truck Festival 2018</strong>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"discription-text mb-30\">
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"event-info-list ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-microphone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Speaker</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>jenny juis</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ticket-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Max Seats</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>2,250 seats</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-content - end -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- event-item - end -->

\t\t\t\t\t\t\t\t<!-- event-item - start -->
\t\t\t\t\t\t\t\t<div class=\"event-list-item clearfix\">

\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/event-4.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-15\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\tBarcelona <strong>Food truck Festival 2018</strong>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"discription-text mb-30\">
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"event-info-list ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-microphone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Speaker</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>jenny juis</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ticket-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Max Seats</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>2,250 seats</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-content - end -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- event-item - end -->

\t\t\t\t\t\t\t\t<!-- event-item - start -->
\t\t\t\t\t\t\t\t<div class=\"event-list-item clearfix\">

\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/event-5.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-15\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\tBarcelona <strong>Food truck Festival 2018</strong>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"discription-text mb-30\">
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"event-info-list ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-microphone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Speaker</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>jenny juis</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ticket-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Max Seats</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>2,250 seats</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-content - end -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- event-item - end -->

\t\t\t\t\t\t\t\t<div class=\"pagination ul-li clearfix\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"page-item prev-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#!\">Prev</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">01</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"page-item active\"><a class=\"page-link\" href=\"#!\">02</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">03</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">04</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">05</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"page-item next-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#!\">Next</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"grid-style\" class=\"tab-pane fade in active show\">
\t\t\t\t\t\t\t\t<div class=\"row justify-content-center\">

\t\t\t\t\t\t\t\t\t<!-- event-grid-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-grid-item\">
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/1.event-grid.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBarcelona Food Truck Festival 2018-2019
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-post-meta ul-li-block mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStart 20:00pm - 22:00pm
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tManhattan, New York
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - end -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-grid-item - end -->

\t\t\t\t\t\t\t\t\t<!-- event-grid-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-grid-item\">
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/2.event-grid.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBarcelona Food Truck Festival 2018-2019
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-post-meta ul-li-block mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStart 20:00pm - 22:00pm
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tManhattan, New York
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - end -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-grid-item - end -->

\t\t\t\t\t\t\t\t\t<!-- event-grid-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-grid-item\">
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/1.event-grid.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBarcelona Food Truck Festival 2018-2019
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-post-meta ul-li-block mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStart 20:00pm - 22:00pm
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tManhattan, New York
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - end -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-grid-item - end -->

\t\t\t\t\t\t\t\t\t<!-- event-grid-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-grid-item\">
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/2.event-grid.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBarcelona Food Truck Festival 2018-2019
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-post-meta ul-li-block mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStart 20:00pm - 22:00pm
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tManhattan, New York
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - end -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-grid-item - end -->

\t\t\t\t\t\t\t\t\t<!-- event-grid-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-grid-item\">
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/1.event-grid.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBarcelona Food Truck Festival 2018-2019
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-post-meta ul-li-block mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStart 20:00pm - 22:00pm
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tManhattan, New York
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - end -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-grid-item - end -->

\t\t\t\t\t\t\t\t\t<!-- event-grid-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"event-grid-item\">
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">26</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"month\">june</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/2.event-grid.jpg\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-image - end -->

\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - start -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-title mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBarcelona Food Truck Festival 2018-2019
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-price yellow-color\">Tickets from \$52</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-post-meta ul-li-block mb-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStart 20:00pm - 22:00pm
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tManhattan, New York
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"tickets-details-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\ttickets & details
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- event-content - end -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- event-grid-item - end -->

\t\t\t\t\t\t\t\t\t<!-- pagination - start -->
\t\t\t\t\t\t\t\t\t<div class=\"pagination ul-li clearfix\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item prev-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#!\">Prev</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">01</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item active\"><a class=\"page-link\" href=\"#!\">02</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">03</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">04</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\"><a class=\"page-link\" href=\"#!\">05</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item next-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"#!\">Next</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- pagination - end -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<!-- - end -->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- event-section - end
\t\t================================================== -->





\t\t<!-- default-footer-section - start
\t\t================================================== -->
\t\t<footer id=\"footer-section\" class=\"footer-section default-footer-section clearfix\">

\t\t\t<!-- footer-top - start -->
\t\t\t<div class=\"footer-top sec-ptb-100 clearfix\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<!-- basic-info - start -->
\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-md-12\">
\t\t\t\t\t\t\t<div class=\"basic-info mb-50 clearfix\">
\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t<!-- basic-info-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"basic-info-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>100 highland ave,</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>california, united state</h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- basic-info-item - end -->

\t\t\t\t\t\t\t\t\t<!-- basic-info-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"basic-info-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><a href=\"#!\">contact@pantero.com</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#!\">info@harmoni.com</a></h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- basic-info-item - end -->

\t\t\t\t\t\t\t\t\t<!-- basic-info-item - start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"basic-info-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p><a href=\"#!\">100 800 1234 5555</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#!\">100 800 1234 5555</a></h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- basic-info-item - end -->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- basic-info - end -->

\t\t\t\t\t\t<!-- about-wrapper - start -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"about-wrapper\">

\t\t\t\t\t\t\t\t<!-- site-logo-wrapper - start -->
\t\t\t\t\t\t\t\t<div class=\"site-logo-wrapper mb-30\">
\t\t\t\t\t\t\t\t\t<a href=\"admin-1.html\" class=\"logo\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/1.site-logo.png\" alt=\"logo_not_found\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- site-logo-wrapper - end -->

\t\t\t\t\t\t\t\t<p class=\"mb-30\">
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t<!-- social-links - start -->
\t\t\t\t\t\t\t\t<div class=\"social-links ul-li\">
\t\t\t\t\t\t\t\t\t<h3 class=\"social-title\">network</h3>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-twitch\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-google-plus-g\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- social-links - end -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- about-wrapper - end -->

\t\t\t\t\t\t<!-- usefullinks-wrapper - start -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"usefullinks-wrapper ul-li-block\">
\t\t\t\t\t\t\t\t<h3 class=\"footer-item-title\">
\t\t\t\t\t\t\t\t\tuseful <strong>links</strong>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Birthday Party</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Business meeting</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Conference</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Food Event</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Musical Event</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Wedding Party</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- usefullinks-wrapper - end -->

\t\t\t\t\t\t<!-- usefullinks-wrapper - start -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"usefullinks-wrapper ul-li-block\">
\t\t\t\t\t\t\t\t<h3 class=\"footer-item-title\">
\t\t\t\t\t\t\t\t\tuseful <strong>links</strong>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">About Harmoni</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Disclaimer</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Contact us</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Events Schedule</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Sponsors</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Venues</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- usefullinks-wrapper - end -->

\t\t\t\t\t\t<!-- instagram-wrapper - start -->
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"instagram-wrapper ul-li\">
\t\t\t\t\t\t\t\t<h3 class=\"footer-item-title\">
\t\t\t\t\t\t\t\t\tharmoni <strong>instagram</strong>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/instagram/img1.png\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/instagram/img2.png\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/instagram/img3.png\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/footer/instagram/img4.png\" alt=\"Image_not_found\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#!\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<h4 class=\"followus-link\">
\t\t\t\t\t\t\t\t\tFollow Our Instagram <a href=\"#!\">#Harmoni</a>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- instagram-wrapper - end -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- footer-top - end -->

\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<!-- copyright-text - start -->
\t\t\t\t\t\t<div class=\"col-lg-7 col-md-12 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"copyright-text\">
\t\t\t\t\t\t\t\t<p class=\"m-0\">©2018 <a href=\"#!\" class=\"site-link\">Harmoni.com</a> all right reserved, made with <i class=\"fas fa-heart\"></i> by <a href=\"#!\" class=\"author-link\"><strong>jThemes Studio</strong></a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- copyright-text - end -->

\t\t\t\t\t\t<!-- footer-menu - start -->
\t\t\t\t\t\t<div class=\"col-lg-5 col-md-12 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"footer-menu\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact us</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About us</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Site map</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#!\">Privacy policy</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- footer-menu - end -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</footer>
\t\t<!-- default-footer-section - end
\t\t================================================== -->










\t\t<!-- fraimwork - jquery include -->
\t\t<script src=\"assets/js/jquery-3.3.1.min.js\"></script>
\t\t<script src=\"assets/js/popper.min.js\"></script>
\t\t<script src=\"assets/js/bootstrap.min.js\"></script>

\t\t<!-- carousel jquery include -->
\t\t<script src=\"assets/js/slick.min.js\"></script>
\t\t<script src=\"assets/js/owl.carousel.min.js\"></script>

\t\t<!-- map jquery include -->
\t\t<script src=\"assets/js/gmap3.min.js\"></script>
\t\t<script src=\"http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA\"></script>

\t\t<!-- calendar jquery include -->
\t\t<script src=\"assets/js/atc.min.js\"></script>

\t\t<!-- others jquery include -->
\t\t<script src=\"assets/js/jquery.magnific-popup.min.js\"></script>
\t\t<script src=\"assets/js/isotope.pkgd.min.js\"></script>
\t\t<script src=\"assets/js/jarallax.min.js\"></script>
\t\t<script src=\"assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>

\t\t<!-- gallery img loaded - jqury include -->
\t\t<script src=\"assets/js/imagesloaded.pkgd.min.js\"></script>

\t\t<!-- multy count down - jqury include -->
\t\t<script src=\"assets/js/jquery.countdown.js\"></script>

\t\t<!-- color panal - jqury include -->
\t\t<script src=\"assets/js/style-switcher.js\"></script>

\t\t<!-- custom jquery include -->
\t\t<script src=\"assets/js/custom.js\"></script>





\t</body>

<!-- Mirrored from jthemes.net/themes/html/harmony-event/event-2-without-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jan 2024 21:09:11 GMT -->
</html>
", "allocation/index.html.twig", "C:\\Users\\Yosser\\Eventeasy\\templates\\allocation\\index.html.twig");
    }
}
