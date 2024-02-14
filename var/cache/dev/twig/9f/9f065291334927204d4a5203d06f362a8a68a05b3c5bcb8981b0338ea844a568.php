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

/* admin/admin.html.twig */
class __TwigTemplate_abe2e6e9b835593df0d9c55d5a88b9170a0d1ecc22a0a01c98f747db2b625029 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Welcome!</title>
                

            <!-- Google Fonts -->
            <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

            <!-- Vendor CSS Files -->
            <link href=\"/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
            <link href=\"/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
            <link href=\"/assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
            <link href=\"/assets/vendor/quill/quill.snow.css\" rel=\"stylesheet\">
            <link href=\"/assets/vendor/quill/quill.bubble.css\" rel=\"stylesheet\">
            <link href=\"/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
            <link href=\"/assets/vendor/simple-datatables/style.css\" rel=\"stylesheet\">

            <!-- Template Main CSS File -->
            <link href=\"/assets/css/style.css\" rel=\"stylesheet\">
        
        
            <!-- Vendor JS Files -->
            <script src=\"/assets/vendor/apexcharts/apexcharts.min.js\"></script>
            <script src=\"/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
            <script src=\"/assets/vendor/chart.js/chart.min.js\"></script>
            <script src=\"/assets/vendor/echarts/echarts.min.js\"></script>
            <script src=\"/assets/vendor/quill/quill.min.js\"></script>
            <script src=\"/assets/vendor/simple-datatables/simple-datatables.js\"></script>
            <script src=\"/assets/vendor/tinymce/tinymce.min.js\"></script>
            <script src=\"/assets/vendor/php-email-form/validate.js\"></script>

            <!-- Template Main JS File -->
            <script src=\"/assets/js/main.js\"></script>            </head>
    <body>

                    <!-- ======= Header ======= -->
            <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

                <div class=\"d-flex align-items-center justify-content-between\">
                    <a href=\"admin.html\" class=\"logo d-flex align-items-center\">
                        <img src=\"assets/img/logo.png\" alt=\"\">
                        <span class=\"d-none d-lg-block\">NiceAdmin</span>
                    </a>
                    <i class=\"bi bi-list toggle-sidebar-btn\"></i>
                </div><!-- End Logo -->

                <div class=\"search-bar\">
                    <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
                        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
                    </form>
                </div><!-- End Search Bar -->

                <nav class=\"header-nav ms-auto\">
                    <ul class=\"d-flex align-items-center\">

                        <li class=\"nav-item d-block d-lg-none\">
                            <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                                <i class=\"bi bi-search\"></i>
                            </a>
                        </li><!-- End Search Icon-->

                        <li class=\"nav-item dropdown\">

                            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"bi bi-bell\"></i>
                                <span class=\"badge bg-primary badge-number\">4</span>
                            </a><!-- End Notification Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                                <li class=\"dropdown-header\">
                                    You have 4 new notifications
                                    <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-exclamation-circle text-warning\"></i>
                                    <div>
                                        <h4>Lorem Ipsum</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>30 min. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-x-circle text-danger\"></i>
                                    <div>
                                        <h4>Atque rerum nesciunt</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>1 hr. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-check-circle text-success\"></i>
                                    <div>
                                        <h4>Sit rerum fuga</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>2 hrs. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-info-circle text-primary\"></i>
                                    <div>
                                        <h4>Dicta reprehenderit</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>4 hrs. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>
                                <li class=\"dropdown-footer\">
                                    <a href=\"#\">Show all notifications</a>
                                </li>

                            </ul><!-- End Notification Dropdown Items -->

                        </li><!-- End Notification Nav -->

                        <li class=\"nav-item dropdown\">

                            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"bi bi-chat-left-text\"></i>
                                <span class=\"badge bg-success badge-number\">3</span>
                            </a><!-- End Messages Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                                <li class=\"dropdown-header\">
                                    You have 3 new messages
                                    <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>Maria Hudson</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>4 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>Anna Nelson</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>6 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>David Muldon</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>8 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"dropdown-footer\">
                                    <a href=\"#\">Show all messages</a>
                                </li>

                            </ul><!-- End Messages Dropdown Items -->

                        </li><!-- End Messages Nav -->

                        <li class=\"nav-item dropdown pe-3\">

                            <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                                                         </a><!-- End Profile Iamge Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                <li class=\"dropdown-header\">
                                    <h6>Kevin Anderson</h6>
                                    <span>Web Designer</span>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-person\"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-gear\"></i>
                                        <span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                                        <i class=\"bi bi-question-circle\"></i>
                                        <span>Need Help?</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"/logout\">
                                        <i class=\"bi bi-box-arrow-right\"></i>
                                        <span>Sign Out</span>
                                    </a>
                                </li>

                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->

                    </ul>
                </nav><!-- End Icons Navigation -->

            </header><!-- End Header -->

        
                    <!-- ======= Sidebar ======= -->
            <aside id=\"sidebar\" class=\"sidebar\">

                <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"admin.html\">
                            <i class=\"bi bi-grid\"></i>
                            <span>Gestion des blogs</span>
                        </a>
                    </li><!-- End Dashboard Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-menu-button-wide\"></i><span>Gestion des proudits</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"components-alerts.html\">
                                    <i class=\"bi bi-circle\"></i><span>Alerts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-accordion.html\">
                                    <i class=\"bi bi-circle\"></i><span>Accordion</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-badges.html\">
                                    <i class=\"bi bi-circle\"></i><span>Badges</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-breadcrumbs.html\">
                                    <i class=\"bi bi-circle\"></i><span>Breadcrumbs</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-buttons.html\">
                                    <i class=\"bi bi-circle\"></i><span>Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-cards.html\">
                                    <i class=\"bi bi-circle\"></i><span>Cards</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-carousel.html\">
                                    <i class=\"bi bi-circle\"></i><span>Carousel</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-list-group.html\">
                                    <i class=\"bi bi-circle\"></i><span>List group</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-modal.html\">
                                    <i class=\"bi bi-circle\"></i><span>Modal</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-tabs.html\">
                                    <i class=\"bi bi-circle\"></i><span>Tabs</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-pagination.html\">
                                    <i class=\"bi bi-circle\"></i><span>Pagination</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-progress.html\">
                                    <i class=\"bi bi-circle\"></i><span>Progress</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-spinners.html\">
                                    <i class=\"bi bi-circle\"></i><span>Spinners</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-tooltips.html\">
                                    <i class=\"bi bi-circle\"></i><span>Tooltips</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Components Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-journal-text\"></i><span>Gestion des utilisateurs</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"forms-elements.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Elements</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"forms-layouts.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"forms-editors.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Editors</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"forms-validation.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Validation</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Forms Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"tables-general.html\">
                                    <i class=\"bi bi-circle\"></i><span>General Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"tables-data.html\">
                                    <i class=\"bi bi-circle\"></i><span>Data Tables</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Tables Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-bar-chart\"></i><span>Charts</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"charts-chartjs.html\">
                                    <i class=\"bi bi-circle\"></i><span>Chart.js</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"charts-apexcharts.html\">
                                    <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"charts-echarts.html\">
                                    <i class=\"bi bi-circle\"></i><span>ECharts</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Charts Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-gem\"></i><span>Icons</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"icons-bootstrap.html\">
                                    <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"icons-remix.html\">
                                    <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"icons-boxicons.html\">
                                    <i class=\"bi bi-circle\"></i><span>Boxicons</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Icons Nav -->

                    <li class=\"nav-heading\">Pages</li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>Profile</span>
                        </a>
                    </li><!-- End Profile Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
                            <i class=\"bi bi-question-circle\"></i>
                            <span>F.A.Q</span>
                        </a>
                    </li><!-- End F.A.Q Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
                            <i class=\"bi bi-envelope\"></i>
                            <span>Contact</span>
                        </a>
                    </li><!-- End Contact Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-register.html\">
                            <i class=\"bi bi-card-list\"></i>
                            <span>Register</span>
                        </a>
                    </li><!-- End Register Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
                            <i class=\"bi bi-box-arrow-in-right\"></i>
                            <span>Login</span>
                        </a>
                    </li><!-- End Login Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                            <i class=\"bi bi-dash-circle\"></i>
                            <span>Error 404</span>
                        </a>
                    </li><!-- End Error 404 Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                            <i class=\"bi bi-file-earmark\"></i>
                            <span>Blank</span>
                        </a>
                    </li><!-- End Blank Page Nav -->

                </ul>

            </aside><!-- End Sidebar-->
                
    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Dashboard</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class=\"section dashboard\">
            <div class=\"row\">

                <!-- Left side columns -->
                <div class=\"col-lg-8\">
                    <div class=\"row\">

                        <!-- Sales Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card sales-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-cart\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>145</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card revenue-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-currency-dollar\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>\$3,264</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">8%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class=\"col-xxl-4 col-xl-12\">

                            <div class=\"card info-card customers-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-people\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>1244</h6>
                                            <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Reports -->
                        <div class=\"col-12\">
                            <div class=\"card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Reports <span>/Today</span></h5>

                                    <!-- Line Chart -->
                                    <div id=\"reportsChart\"></div>

                                    <script>
                                        document.addEventListener(\"DOMContentLoaded\", () => {
                                            new ApexCharts(document.querySelector(\"#reportsChart\"), {
                                                series: [{
                                                    name: 'Sales',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'Revenue',
                                                    data: [11, 32, 45, 32, 34, 52, 41]
                                                }, {
                                                    name: 'Customers',
                                                    data: [15, 11, 32, 18, 9, 24, 11]
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                fill: {
                                                    type: \"gradient\",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: [\"2018-09-19T00:00:00.000Z\", \"2018-09-19T01:30:00.000Z\", \"2018-09-19T02:30:00.000Z\", \"2018-09-19T03:30:00.000Z\", \"2018-09-19T04:30:00.000Z\", \"2018-09-19T05:30:00.000Z\", \"2018-09-19T06:30:00.000Z\"]
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Line Chart -->

                                </div>

                            </div>
                        </div><!-- End Reports -->

                        <!-- Recent Sales -->
                        <div class=\"col-12\">
                            <div class=\"card recent-sales overflow-auto\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Recent Sales <span>| Today</span></h5>

                                    <table class=\"table table-borderless datatable\">
                                        <thead>
                                        <tr>
                                            <th scope=\"col\">#</th>
                                            <th scope=\"col\">Customer</th>
                                            <th scope=\"col\">Product</th>
                                            <th scope=\"col\">Price</th>
                                            <th scope=\"col\">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\">#2457</a></th>
                                            <td>Brandon Jacob</td>
                                            <td><a href=\"#\" class=\"text-primary\">At praesentium minu</a></td>
                                            <td>\$64</td>
                                            <td><span class=\"badge bg-success\">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\">#2147</a></th>
                                            <td>Bridie Kessler</td>
                                            <td><a href=\"#\" class=\"text-primary\">Blanditiis dolor omnis similique</a></td>
                                            <td>\$47</td>
                                            <td><span class=\"badge bg-warning\">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\">#2049</a></th>
                                            <td>Ashleigh Langosh</td>
                                            <td><a href=\"#\" class=\"text-primary\">At recusandae consectetur</a></td>
                                            <td>\$147</td>
                                            <td><span class=\"badge bg-success\">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\">#2644</a></th>
                                            <td>Angus Grady</td>
                                            <td><a href=\"#\" class=\"text-primar\">Ut voluptatem id earum et</a></td>
                                            <td>\$67</td>
                                            <td><span class=\"badge bg-danger\">Rejected</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\">#2644</a></th>
                                            <td>Raheem Lehner</td>
                                            <td><a href=\"#\" class=\"text-primary\">Sunt similique distinctio</a></td>
                                            <td>\$165</td>
                                            <td><span class=\"badge bg-success\">Approved</span></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class=\"col-12\">
                            <div class=\"card top-selling overflow-auto\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body pb-0\">
                                    <h5 class=\"card-title\">Top Selling <span>| Today</span></h5>

                                    <table class=\"table table-borderless\">
                                        <thead>
                                        <tr>
                                            <th scope=\"col\">Preview</th>
                                            <th scope=\"col\">Product</th>
                                            <th scope=\"col\">Price</th>
                                            <th scope=\"col\">Sold</th>
                                            <th scope=\"col\">Revenue</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-1.jpg\" alt=\"\"></a></th>
                                            <td><a href=\"#\" class=\"text-primary fw-bold\">Ut inventore ipsa voluptas nulla</a></td>
                                            <td>\$64</td>
                                            <td class=\"fw-bold\">124</td>
                                            <td>\$5,828</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-2.jpg\" alt=\"\"></a></th>
                                            <td><a href=\"#\" class=\"text-primary fw-bold\">Exercitationem similique doloremque</a></td>
                                            <td>\$46</td>
                                            <td class=\"fw-bold\">98</td>
                                            <td>\$4,508</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-3.jpg\" alt=\"\"></a></th>
                                            <td><a href=\"#\" class=\"text-primary fw-bold\">Doloribus nisi exercitationem</a></td>
                                            <td>\$59</td>
                                            <td class=\"fw-bold\">74</td>
                                            <td>\$4,366</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-4.jpg\" alt=\"\"></a></th>
                                            <td><a href=\"#\" class=\"text-primary fw-bold\">Officiis quaerat sint rerum error</a></td>
                                            <td>\$32</td>
                                            <td class=\"fw-bold\">63</td>
                                            <td>\$2,016</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-5.jpg\" alt=\"\"></a></th>
                                            <td><a href=\"#\" class=\"text-primary fw-bold\">Sit unde debitis delectus repellendus</a></td>
                                            <td>\$79</td>
                                            <td class=\"fw-bold\">41</td>
                                            <td>\$3,239</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class=\"col-lg-4\">

                    <!-- Recent Activity -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Recent Activity <span>| Today</span></h5>

                            <div class=\"activity\">

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">32 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Quia quae rerum <a href=\"#\" class=\"fw-bold text-dark\">explicabo officiis</a> beatae
                                    </div>
                                </div><!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">56 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Voluptatem blanditiis blanditiis eveniet
                                    </div>
                                </div><!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">2 hrs</div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Voluptates corrupti molestias voluptatem
                                    </div>
                                </div><!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">1 day</div>
                                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Tempore autem saepe <a href=\"#\" class=\"fw-bold text-dark\">occaecati voluptatem</a> tempore
                                    </div>
                                </div><!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">2 days</div>
                                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Est sit eum reiciendis exercitationem
                                    </div>
                                </div><!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">4 weeks</div>
                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                    </div>
                                </div><!-- End activity item-->

                            </div>

                        </div>
                    </div><!-- End Recent Activity -->

                    <!-- Budget Report -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body pb-0\">
                            <h5 class=\"card-title\">Budget Report <span>| This Month</span></h5>

                            <div id=\"budgetChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

                            <script>
                                document.addEventListener(\"DOMContentLoaded\", () => {
                                    var budgetChart = echarts.init(document.querySelector(\"#budgetChart\")).setOption({
                                        legend: {
                                            data: ['Allocated Budget', 'Actual Spending']
                                        },
                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                name: 'Sales',
                                                max: 6500
                                            },
                                                {
                                                    name: 'Administration',
                                                    max: 16000
                                                },
                                                {
                                                    name: 'Information Technology',
                                                    max: 30000
                                                },
                                                {
                                                    name: 'Customer Support',
                                                    max: 38000
                                                },
                                                {
                                                    name: 'Development',
                                                    max: 52000
                                                },
                                                {
                                                    name: 'Marketing',
                                                    max: 25000
                                                }
                                            ]
                                        },
                                        series: [{
                                            name: 'Budget vs spending',
                                            type: 'radar',
                                            data: [{
                                                value: [4200, 3000, 20000, 35000, 50000, 18000],
                                                name: 'Allocated Budget'
                                            },
                                                {
                                                    value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                    name: 'Actual Spending'
                                                }
                                            ]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div><!-- End Budget Report -->

                    <!-- Website Traffic -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body pb-0\">
                            <h5 class=\"card-title\">Website Traffic <span>| Today</span></h5>

                            <div id=\"trafficChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

                            <script>
                                document.addEventListener(\"DOMContentLoaded\", () => {
                                    echarts.init(document.querySelector(\"#trafficChart\")).setOption({
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '5%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'Access From',
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: 'center'
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    fontSize: '18',
                                                    fontWeight: 'bold'
                                                }
                                            },
                                            labelLine: {
                                                show: false
                                            },
                                            data: [{
                                                value: 1048,
                                                name: 'Search Engine'
                                            },
                                                {
                                                    value: 735,
                                                    name: 'Direct'
                                                },
                                                {
                                                    value: 580,
                                                    name: 'Email'
                                                },
                                                {
                                                    value: 484,
                                                    name: 'Union Ads'
                                                },
                                                {
                                                    value: 300,
                                                    name: 'Video Ads'
                                                }
                                            ]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div><!-- End Website Traffic -->

                    <!-- News & Updates Traffic -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body pb-0\">
                            <h5 class=\"card-title\">News &amp; Updates <span>| Today</span></h5>

                            <div class=\"news\">
                                <div class=\"post-item clearfix\">
                                    <img src=\"assets/img/news-1.jpg\" alt=\"\">
                                    <h4><a href=\"#\">Nihil blanditiis at in nihil autem</a></h4>
                                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"assets/img/news-2.jpg\" alt=\"\">
                                    <h4><a href=\"#\">Quidem autem et impedit</a></h4>
                                    <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"assets/img/news-3.jpg\" alt=\"\">
                                    <h4><a href=\"#\">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"assets/img/news-4.jpg\" alt=\"\">
                                    <h4><a href=\"#\">Laborum corporis quo dara net para</a></h4>
                                    <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"assets/img/news-5.jpg\" alt=\"\">
                                    <h4><a href=\"#\">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                                </div>

                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div><!-- End News & Updates -->

                </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->



            <!-- ======= Footer ======= -->
        <footer id=\"footer\" class=\"footer\">
            <div class=\"copyright\">
                &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
            </div>
            <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
            </div>
        </footer><!-- End Footer -->
        
<div id=\"sfwdtcabd2a\" class=\"sf-toolbar sf-display-none\" role=\"region\" aria-label=\"Symfony Web Debug Toolbar\"></div><script nonce=\"7737badafdcbfceee5321e4dbdf797c9\">/*<![CDATA[*/    if (typeof Sfjs === 'undefined' || typeof Sfjs.loadToolbar === 'undefined') {    Sfjs = (function() {        \"use strict\";        if ('classList' in document.documentElement) {            var hasClass = function (el, cssClass) { return el.classList.contains(cssClass); };            var removeClass = function(el, cssClass) { el.classList.remove(cssClass); };            var addClass = function(el, cssClass) { el.classList.add(cssClass); };            var toggleClass = function(el, cssClass) { el.classList.toggle(cssClass); };        } else {            var hasClass = function (el, cssClass) { return el.className.match(new RegExp('\\\\b' + cssClass + '\\\\b')); };            var removeClass = function(el, cssClass) { el.className = el.className.replace(new RegExp('\\\\b' + cssClass + '\\\\b'), ' '); };            var addClass = function(el, cssClass) { if (!hasClass(el, cssClass)) { el.className += \" \" + cssClass; } };            var toggleClass = function(el, cssClass) { hasClass(el, cssClass) ? removeClass(el, cssClass) : addClass(el, cssClass); };        }        var noop = function() {};        var profilerStorageKey = 'symfony/profiler/';        var addEventListener;        var el = document.createElement('div');        if (!('addEventListener' in el)) {            addEventListener = function (element, eventName, callback) {                element.attachEvent('on' + eventName, callback);            };        } else {            addEventListener = function (element, eventName, callback) {                element.addEventListener(eventName, callback, false);            };        }        var request = function(url, onSuccess, onError, payload, options) {            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');            options = options || {};            options.maxTries = options.maxTries || 0;            xhr.open(options.method || 'GET', url, true);            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');            xhr.onreadystatechange = function(state) {                if (4 !== xhr.readyState) {                    return null;                }                if (xhr.status == 404 && options.maxTries > 1) {                    setTimeout(function(){                        options.maxTries--;                        request(url, onSuccess, onError, payload, options);                    }, 1000);                    return null;                }                if (200 === xhr.status) {                    (onSuccess || noop)(xhr);                } else {                    (onError || noop)(xhr);                }            };            xhr.send(payload || '');        };        var getPreference = function(name) {            if (!window.localStorage) {                return null;            }            return localStorage.getItem(profilerStorageKey + name);        };        var setPreference = function(name, value) {            if (!window.localStorage) {                return null;            }            localStorage.setItem(profilerStorageKey + name, value);        };        var requestStack = [];        var extractHeaders = function(xhr, stackElement) {            /* Here we avoid to call xhr.getResponseHeader in order to */            /* prevent polluting the console with CORS security errors */            var allHeaders = xhr.getAllResponseHeaders();            var ret;            if (ret = allHeaders.match(/^x-debug-token:\\s+(.*)\$/im)) {                stackElement.profile = ret[1];            }            if (ret = allHeaders.match(/^x-debug-token-link:\\s+(.*)\$/im)) {                stackElement.profilerUrl = ret[1];            }            if (ret = allHeaders.match(/^Symfony-Debug-Toolbar-Replace:\\s+(.*)\$/im)) {                stackElement.toolbarReplaceFinished = false;                stackElement.toolbarReplace = '1' === ret[1];            }        };        var successStreak = 4;        var pendingRequests = 0;        var renderAjaxRequests = function() {            var requestCounter = document.querySelector('.sf-toolbar-ajax-request-counter');            if (!requestCounter) {                return;            }            requestCounter.textContent = requestStack.length;            var infoSpan = document.querySelector(\".sf-toolbar-ajax-info\");            if (infoSpan) {                infoSpan.textContent = requestStack.length + ' AJAX request' + (requestStack.length !== 1 ? 's' : '');            }            var ajaxToolbarPanel = document.querySelector('.sf-toolbar-block-ajax');            if (requestStack.length) {                ajaxToolbarPanel.style.display = 'block';            } else {                ajaxToolbarPanel.style.display = 'none';            }            if (pendingRequests > 0) {                addClass(ajaxToolbarPanel, 'sf-ajax-request-loading');            } else if (successStreak < 4) {                addClass(ajaxToolbarPanel, 'sf-toolbar-status-red');                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');            } else {                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');                removeClass(ajaxToolbarPanel, 'sf-toolbar-status-red');            }        };        var startAjaxRequest = function(admin) {            var tbody = document.querySelector('.sf-toolbar-ajax-request-list');            if (!tbody) {                return;            }            var nbOfAjaxRequest = tbody.rows.length;            if (nbOfAjaxRequest >= 100) {                tbody.deleteRow(0);            }            var request = requestStack[admin];            pendingRequests++;            var row = document.createElement('tr');            request.DOMNode = row;            var requestNumberCell = document.createElement('td');            requestNumberCell.textContent = admin + 1;            row.appendChild(requestNumberCell);            var profilerCell = document.createElement('td');            profilerCell.textContent = 'n/a';            row.appendChild(profilerCell);            var methodCell = document.createElement('td');            methodCell.textContent = request.method;            row.appendChild(methodCell);            var typeCell = document.createElement('td');            typeCell.textContent = request.type;            row.appendChild(typeCell);            var statusCodeCell = document.createElement('td');            var statusCode = document.createElement('span');            statusCode.textContent = 'n/a';            statusCodeCell.appendChild(statusCode);            row.appendChild(statusCodeCell);            var pathCell = document.createElement('td');            pathCell.className = 'sf-ajax-request-url';            if ('GET' === request.method) {                var pathLink = document.createElement('a');                pathLink.setAttribute('href', request.url);                pathLink.textContent = request.url;                pathCell.appendChild(pathLink);            } else {                pathCell.textContent = request.url;            }            pathCell.setAttribute('title', request.url);            row.appendChild(pathCell);            var durationCell = document.createElement('td');            durationCell.className = 'sf-ajax-request-duration';            durationCell.textContent = 'n/a';            row.appendChild(durationCell);            request.liveDurationHandle = setInterval(function() {                durationCell.textContent = (new Date() - request.start) + 'ms';            }, 100);            row.className = 'sf-ajax-request sf-ajax-request-loading';            tbody.insertBefore(row, null);            var toolbarInfo = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');            toolbarInfo.scrollTop = toolbarInfo.scrollHeight;            renderAjaxRequests();        };        var finishAjaxRequest = function(admin) {            var request = requestStack[admin];            clearInterval(request.liveDurationHandle);            if (!request.DOMNode) {                return;            }            if (request.toolbarReplace && !request.toolbarReplaceFinished && request.profile) {                /* Flag as complete because finishAjaxRequest can be called multiple times. */                request.toolbarReplaceFinished = true;                /* Search up through the DOM to find the toolbar's container ID. */                for (var elem = request.DOMNode; elem && elem !== document; elem = elem.parentNode) {                    if (elem.id.match(/^sfwdt/)) {                        Sfjs.loadToolbar(elem.id.replace(/^sfwdt/, ''), request.profile);                        break;                    }                }            }            pendingRequests--;            var row = request.DOMNode;            /* Unpack the children from the row */            var profilerCell = row.children[1];            var methodCell = row.children[2];            var statusCodeCell = row.children[4];            var statusCodeElem = statusCodeCell.children[0];            var durationCell = row.children[6];            if (request.error) {                row.className = 'sf-ajax-request sf-ajax-request-error';                methodCell.className = 'sf-ajax-request-error';                successStreak = 0;            } else {                row.className = 'sf-ajax-request sf-ajax-request-ok';                successStreak++;            }            if (request.statusCode) {                if (request.statusCode < 300) {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status');                } else if (request.statusCode < 400) {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-yellow');                } else {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');                }                statusCodeElem.textContent = request.statusCode;            } else {                statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');            }            if (request.duration) {                durationCell.textContent = request.duration + 'ms';            }            if (request.profilerUrl) {                profilerCell.textContent = '';                var profilerLink = document.createElement('a');                profilerLink.setAttribute('href', request.profilerUrl);                profilerLink.textContent = request.profile;                profilerCell.appendChild(profilerLink);            }            renderAjaxRequests();        };                    if (window.fetch && window.fetch.polyfill === undefined) {                var oldFetch = window.fetch;                window.fetch = function () {                    var promise = oldFetch.apply(this, arguments);                    var url = arguments[0];                    var params = arguments[1];                    var paramType = Object.prototype.toString.call(arguments[0]);                    if (paramType === '[object Request]') {                        url = arguments[0].url;                        params = {                            method: arguments[0].method,                            credentials: arguments[0].credentials,                            headers: arguments[0].headers,                            mode: arguments[0].mode,                            redirect: arguments[0].redirect                        };                    } else {                        url = String(url);                    }                    if (!url.match(new RegExp(\"^\\/((admin|app(_[\\\\w]+)?)\\\\.php\\/)?_wdt\"))) {                        var method = 'GET';                        if (params && params.method !== undefined) {                            method = params.method;                        }                        var stackElement = {                            error: false,                            url: url,                            method: method,                            type: 'fetch',                            start: new Date()                        };                        var idx = requestStack.push(stackElement) - 1;                        promise.then(function (r) {                            stackElement.duration = new Date() - stackElement.start;                            stackElement.error = r.status < 200 || r.status >= 400;                            stackElement.statusCode = r.status;                            stackElement.profile = r.headers.get('x-debug-token');                            stackElement.profilerUrl = r.headers.get('x-debug-token-link');                            stackElement.toolbarReplaceFinished = false;                            stackElement.toolbarReplace = '1' === r.headers.get('Symfony-Debug-Toolbar-Replace');                            finishAjaxRequest(idx);                        }, function (e){                            stackElement.error = true;                            finishAjaxRequest(idx);                        });                        startAjaxRequest(idx);                    }                    return promise;                };            }            if (window.XMLHttpRequest && XMLHttpRequest.prototype.addEventListener) {                var proxied = XMLHttpRequest.prototype.open;                XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {                    var self = this;                    /* prevent logging AJAX calls to static and inline files, like templates */                    var path = url;                    if (url.slice(0, 1) === '/') {                        if (0 === url.indexOf('')) {                            path = url.slice(0);                        }                    }                    else if (0 === url.indexOf('http\\u003A\\/\\/127.0.0.1\\u003A8001')) {                        path = url.slice(21);                    }                    if (!path.match(new RegExp(\"^\\/((index|app(_[\\\\w]+)?)\\\\.php\\/)?_wdt\"))) {                        var stackElement = {                            error: false,                            url: url,                            method: method,                            type: 'xhr',                            start: new Date()                        };                        var idx = requestStack.push(stackElement) - 1;                        this.addEventListener('readystatechange', function() {                            if (self.readyState == 4) {                                stackElement.duration = new Date() - stackElement.start;                                stackElement.error = self.status < 200 || self.status >= 400;                                stackElement.statusCode = self.status;                                extractHeaders(self, stackElement);                                finishAjaxRequest(idx);                            }                        }, false);                        startAjaxRequest(idx);                    }                    proxied.apply(this, Array.prototype.slice.call(arguments));                };            }                return {            hasClass: hasClass,            removeClass: removeClass,            addClass: addClass,            toggleClass: toggleClass,            getPreference: getPreference,            setPreference: setPreference,            addEventListener: addEventListener,            request: request,            renderAjaxRequests: renderAjaxRequests,            load: function(selector, url, onSuccess, onError, options) {                var el = document.getElementById(selector);                if (el && el.getAttribute('data-sfurl') !== url) {                    request(                        url,                        function(xhr) {                            el.innerHTML = xhr.responseText;                            el.setAttribute('data-sfurl', url);                            removeClass(el, 'loading');                            var pending = pendingRequests;                            for (var i = 0; i < requestStack.length; i++) {                                startAjaxRequest(i);                                if (requestStack[i].duration) {                                    finishAjaxRequest(i);                                }                            }                            /* Revert the pending state in case there was a start called without a finish above. */                            pendingRequests = pending;                            (onSuccess || noop)(xhr, el);                        },                        function(xhr) { (onError || noop)(xhr, el); },                        '',                        options                    );                }                return this;            },            loadToolbar: function(token, newToken) {                newToken = (newToken || token);                this.load(                    'sfwdt' + token,                    'http\\u003A\\/\\/127.0.0.1\\u003A8001\\/_wdt\\/xxxxxx'.replace(/xxxxxx/, newToken),                    function(xhr, el) {                        /* Do nothing in the edge case where the toolbar has already been replaced with a new one */                        if (!document.getElementById('sfToolbarMainContent-' + newToken)) {                            return;                        }                        /* Evaluate in global scope scripts embedded inside the toolbar */                        var i, scripts = [].slice.call(el.querySelectorAll('script'));                        for (i = 0; i < scripts.length; ++i) {                            eval.call({}, scripts[i].firstChild.nodeValue);                        }                        el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';                        if (el.style.display == 'none') {                            return;                        }                        if (getPreference('toolbar/displayState') == 'none') {                            document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'none';                            document.getElementById('sfToolbarClearer-' + newToken).style.display = 'none';                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'block';                        } else {                            document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'block';                            document.getElementById('sfToolbarClearer-' + newToken).style.display = 'block';                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'none';                        }                        /* Handle toolbar-info position */                        var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));                        for (i = 0; i < toolbarBlocks.length; ++i) {                            toolbarBlocks[i].onmouseover = function () {                                var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];                                var pageWidth = document.body.clientWidth;                                var elementWidth = toolbarInfo.offsetWidth;                                var leftValue = (elementWidth + this.offsetLeft) - pageWidth;                                var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;                                /* Reset right and left value, useful on window resize */                                toolbarInfo.style.right = '';                                toolbarInfo.style.left = '';                                if (elementWidth > pageWidth) {                                    toolbarInfo.style.left = 0;                                }                                else if (leftValue > 0 && rightValue > 0) {                                    toolbarInfo.style.right = (rightValue * -1) + 'px';                                } else if (leftValue < 0) {                                    toolbarInfo.style.left = 0;                                } else {                                    toolbarInfo.style.right = '0px';                                }                            };                        }                        addEventListener(document.getElementById('sfToolbarHideButton-' + newToken), 'click', function (event) {                            event.preventDefault();                            var p = this.parentNode;                            p.style.display = 'none';                            (p.previousElementSibling || p.previousSibling).style.display = 'none';                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'block';                            setPreference('toolbar/displayState', 'none');                        });                        addEventListener(document.getElementById('sfToolbarMiniToggler-' + newToken), 'click', function (event) {                            event.preventDefault();                            var elem = this.parentNode;                            if (elem.style.display == 'none') {                                document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'none';                                document.getElementById('sfToolbarClearer-' + newToken).style.display = 'none';                                elem.style.display = 'block';                            } else {                                document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'block';                                document.getElementById('sfToolbarClearer-' + newToken).style.display = 'block';                                elem.style.display = 'none'                            }                            setPreference('toolbar/displayState', 'block');                        });                        renderAjaxRequests();                        addEventListener(document.querySelector('.sf-toolbar-ajax-clear'), 'click', function() {                            requestStack = [];                            renderAjaxRequests();                            successStreak = 4;                            document.querySelector('.sf-toolbar-ajax-request-list').innerHTML = '';                        });                        addEventListener(document.querySelector('.sf-toolbar-block-ajax'), 'mouseenter', function (event) {                            var elem = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');                            elem.scrollTop = elem.scrollHeight;                        });                        addEventListener(document.querySelector('.sf-toolbar-block-ajax > .sf-toolbar-icon'), 'click', function (event) {                            event.preventDefault();                            toggleClass(this.parentNode, 'hover');                        });                        var dumpInfo = document.querySelector('.sf-toolbar-block-dump .sf-toolbar-info');                        if (null !== dumpInfo) {                            addEventListener(dumpInfo, 'sfbeforedumpcollapse', function () {                                dumpInfo.style.minHeight = dumpInfo.getBoundingClientRect().height+'px';                            });                            addEventListener(dumpInfo, 'mouseleave', function () {                                dumpInfo.style.minHeight = '';                            });                        }                    },                    function(xhr) {                        if (xhr.status !== 0) {                            var sfwdt = document.getElementById('sfwdt' + token);                            sfwdt.innerHTML = '\\                                <div class=\"sf-toolbarreset\">\\                                    <div class=\"sf-toolbar-icon\"><svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#FFFFFF\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg></div>\\                                    An error occurred while loading the web debug toolbar. <a href=\"http\\u003A\\/\\/127.0.0.1\\u003A8001\\/_profiler\\/' + newToken + '>Open the web profiler.</a>\\                                </div>\\                            ';                            sfwdt.setAttribute('class', 'sf-toolbar sf-error-toolbar');                        }                    },                    { maxTries: 5 }                );                return this;            },            toggle: function(selector, elOn, elOff) {                var tmp = elOn.style.display,                    el = document.getElementById(selector);                elOn.style.display = elOff.style.display;                elOff.style.display = tmp;                if (el) {                    el.style.display = 'none' === tmp ? 'none' : 'block';                }                return this;            },            createTabs: function() {                var tabGroups = document.querySelectorAll('.sf-tabs:not([data-processed=true])');                /* create the tab navigation for each group of tabs */                for (var i = 0; i < tabGroups.length; i++) {                    var tabs = tabGroups[i].querySelectorAll(':scope > .tab');                    var tabNavigation = document.createElement('ul');                    tabNavigation.className = 'tab-navigation';                    var selectedTabId = 'tab-' + i + '-0'; /* select the first tab by default */                    for (var j = 0; j < tabs.length; j++) {                        var tabId = 'tab-' + i + '-' + j;                        var tabTitle = tabs[j].querySelector('.tab-title').innerHTML;                        var tabNavigationItem = document.createElement('li');                        tabNavigationItem.setAttribute('data-tab-id', tabId);                        if (hasClass(tabs[j], 'active')) { selectedTabId = tabId; }                        if (hasClass(tabs[j], 'disabled')) { addClass(tabNavigationItem, 'disabled'); }                        tabNavigationItem.innerHTML = tabTitle;                        tabNavigation.appendChild(tabNavigationItem);                        var tabContent = tabs[j].querySelector('.tab-content');                        tabContent.parentElement.setAttribute('id', tabId);                    }                    tabGroups[i].insertBefore(tabNavigation, tabGroups[i].firstChild);                    addClass(document.querySelector('[data-tab-id=\"' + selectedTabId + '\"]'), 'active');                }                /* display the active tab and add the 'click' event listeners */                for (i = 0; i < tabGroups.length; i++) {                    tabNavigation = tabGroups[i].querySelectorAll(':scope > .tab-navigation li');                    for (j = 0; j < tabNavigation.length; j++) {                        tabId = tabNavigation[j].getAttribute('data-tab-id');                        document.getElementById(tabId).querySelector('.tab-title').className = 'hidden';                        if (hasClass(tabNavigation[j], 'active')) {                            document.getElementById(tabId).className = 'block';                        } else {                            document.getElementById(tabId).className = 'hidden';                        }                        tabNavigation[j].addEventListener('click', function(e) {                            var activeTab = e.target || e.srcElement;                            /* needed because when the tab contains HTML contents, user can click */                            /* on any of those elements instead of their parent '<li>' element */                            while (activeTab.tagName.toLowerCase() !== 'li') {                                activeTab = activeTab.parentNode;                            }                            /* get the full list of tabs through the parent of the active tab element */                            var tabNavigation = activeTab.parentNode.children;                            for (var k = 0; k < tabNavigation.length; k++) {                                var tabId = tabNavigation[k].getAttribute('data-tab-id');                                document.getElementById(tabId).className = 'hidden';                                removeClass(tabNavigation[k], 'active');                            }                            addClass(activeTab, 'active');                            var activeTabId = activeTab.getAttribute('data-tab-id');                            document.getElementById(activeTabId).className = 'block';                        });                    }                    tabGroups[i].setAttribute('data-processed', 'true');                }            },            createToggles: function() {                var toggles = document.querySelectorAll('.sf-toggle:not([data-processed=true])');                for (var i = 0; i < toggles.length; i++) {                    var elementSelector = toggles[i].getAttribute('data-toggle-selector');                    var element = document.querySelector(elementSelector);                    addClass(element, 'sf-toggle-content');                    if (toggles[i].hasAttribute('data-toggle-initial') && toggles[i].getAttribute('data-toggle-initial') == 'display') {                        addClass(toggles[i], 'sf-toggle-on');                        addClass(element, 'sf-toggle-visible');                    } else {                        addClass(toggles[i], 'sf-toggle-off');                        addClass(element, 'sf-toggle-hidden');                    }                    addEventListener(toggles[i], 'click', function(e) {                        e.preventDefault();                        if ('' !== window.getSelection().toString()) {                            /* Don't do anything on text selection */                            return;                        }                        var toggle = e.target || e.srcElement;                        /* needed because when the toggle contains HTML contents, user can click */                        /* on any of those elements instead of their parent '.sf-toggle' element */                        while (!hasClass(toggle, 'sf-toggle')) {                            toggle = toggle.parentNode;                        }                        var element = document.querySelector(toggle.getAttribute('data-toggle-selector'));                        toggleClass(toggle, 'sf-toggle-on');                        toggleClass(toggle, 'sf-toggle-off');                        toggleClass(element, 'sf-toggle-hidden');                        toggleClass(element, 'sf-toggle-visible');                        /* the toggle doesn't change its contents when clicking on it */                        if (!toggle.hasAttribute('data-toggle-alt-content')) {                            return;                        }                        if (!toggle.hasAttribute('data-toggle-original-content')) {                            toggle.setAttribute('data-toggle-original-content', toggle.innerHTML);                        }                        var currentContent = toggle.innerHTML;                        var originalContent = toggle.getAttribute('data-toggle-original-content');                        var altContent = toggle.getAttribute('data-toggle-alt-content');                        toggle.innerHTML = currentContent !== altContent ? altContent : originalContent;                    });                    /* Prevents from disallowing clicks on links inside toggles */                    var toggleLinks = toggles[i].querySelectorAll('a');                    for (var j = 0; j < toggleLinks.length; j++) {                        addEventListener(toggleLinks[j], 'click', function(e) {                            e.stopPropagation();                        });                    }                    toggles[i].setAttribute('data-processed', 'true');                }            },            createFilters: function() {                document.querySelectorAll('[data-filters] [data-filter]').forEach(function (filter) {                    var filters = filter.closest('[data-filters]'),                        type = 'choice',                        name = filter.dataset.filter,                        ucName = name.charAt(0).toUpperCase()+name.slice(1),                        list = document.createElement('ul'),                        values = filters.dataset['filter'+ucName] || filters.querySelectorAll('[data-filter-'+name+']'),                        labels = {},                        defaults = null,                        indexed = {},                        processed = {};                    if (typeof values === 'string') {                        type = 'level';                        labels = values.split(',');                        values = values.toLowerCase().split(',');                        defaults = values.length - 1;                    }                    addClass(list, 'filter-list');                    addClass(list, 'filter-list-'+type);                    values.forEach(function (value, i) {                        if (value instanceof HTMLElement) {                            value = value.dataset['filter'+ucName];                        }                        if (value in processed) {                            return;                        }                        var option = document.createElement('li'),                            label = i in labels ? labels[i] : value,                            active = false,                            matches;                        if ('' === label) {                            option.innerHTML = '<em>(none)</em>';                        } else {                            option.innerText = label;                        }                        option.dataset.filter = value;                        option.setAttribute('title', 1 === (matches = filters.querySelectorAll('[data-filter-'+name+'=\"'+value+'\"]').length) ? 'Matches 1 row' : 'Matches '+matches+' rows');                        indexed[value] = i;                        list.appendChild(option);                        addEventListener(option, 'click', function () {                            if ('choice' === type) {                                filters.querySelectorAll('[data-filter-'+name+']').forEach(function (row) {                                    if (option.dataset.filter === row.dataset['filter'+ucName]) {                                        toggleClass(row, 'filter-hidden-'+name);                                    }                                });                                toggleClass(option, 'active');                            } else if ('level' === type) {                                if (i === this.parentNode.querySelectorAll('.active').length - 1) {                                    return;                                }                                this.parentNode.querySelectorAll('li').forEach(function (currentOption, j) {                                    if (j <= i) {                                        addClass(currentOption, 'active');                                        if (i === j) {                                            addClass(currentOption, 'last-active');                                        } else {                                            removeClass(currentOption, 'last-active');                                        }                                    } else {                                        removeClass(currentOption, 'active');                                        removeClass(currentOption, 'last-active');                                    }                                });                                filters.querySelectorAll('[data-filter-'+name+']').forEach(function (row) {                                    if (i < indexed[row.dataset['filter'+ucName]]) {                                        addClass(row, 'filter-hidden-'+name);                                    } else {                                        removeClass(row, 'filter-hidden-'+name);                                    }                                });                            }                        });                        if ('choice' === type) {                            active = null === defaults || 0 <= defaults.indexOf(value);                        } else if ('level' === type) {                            active = i <= defaults;                            if (active && i === defaults) {                                addClass(option, 'last-active');                            }                        }                        if (active) {                            addClass(option, 'active');                        } else {                            filters.querySelectorAll('[data-filter-'+name+'=\"'+value+'\"]').forEach(function (row) {                                toggleClass(row, 'filter-hidden-'+name);                            });                        }                        processed[value] = true;                    });                    if (1 < list.childNodes.length) {                        filter.appendChild(list);                        filter.dataset.filtered = '';                    }                });            }        };    })();    Sfjs.addEventListener(document, 'DOMContentLoaded', function() {        Sfjs.createTabs();        Sfjs.createToggles();    });}/*]]>*/</script><style nonce=\"68b165f86bd9e03b5082121084e5050c\">    .sf-minitoolbar {    background-color: #222;    border-top-left-radius: 4px;    bottom: 0;    box-sizing: border-box;    display: none;    height: 36px;    padding: 6px;    position: fixed;    right: 0;    z-index: 99999;}.sf-minitoolbar a {    display: block;}.sf-minitoolbar svg,.sf-minitoolbar img {    max-height: 24px;    max-width: 24px;    display: inline;}.sf-toolbar-clearer {    clear: both;    height: 36px;}.sf-display-none {    display: none;}.sf-toolbarreset * {    box-sizing: content-box;    vertical-align: baseline;    letter-spacing: normal;    width: auto;}.sf-toolbarreset {    background-color: #222;    bottom: 0;    box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);    color: #EEE;    font: 11px Arial, sans-serif;    left: 0;    margin: 0;    padding: 0 36px 0 0;    position: fixed;    right: 0;    text-align: left;    text-transform: none;    z-index: 99999;    direction: ltr;    /* neutralize the aliasing defined by external CSS styles */    -webkit-font-smoothing: subpixel-antialiased;    -moz-osx-font-smoothing: auto;}.sf-toolbarreset abbr {    border: dashed #777;    border-width: 0 0 1px;}.sf-toolbarreset svg,.sf-toolbarreset img {    height: 20px;    width: 20px;    display: inline-block;}.sf-toolbarreset .hide-button {    background: #444;    display: block;    position: absolute;    top: 0;    right: 0;    width: 36px;    height: 36px;    cursor: pointer;    text-align: center;}.sf-toolbarreset .hide-button svg {    max-height: 18px;    margin-top: 10px;}.sf-toolbar-block {    cursor: default;    display: block;    float: left;    height: 36px;    margin-right: 0;    white-space: nowrap;    max-width: 15%;}.sf-toolbar-block > a,.sf-toolbar-block > a:hover {    display: block;    text-decoration: none;    background-color: transparent;    color: inherit;}.sf-toolbar-block span {    display: inline-block;}.sf-toolbar-block .sf-toolbar-value {    color: #F5F5F5;    font-size: 13px;    line-height: 36px;    padding: 0;}.sf-toolbar-block .sf-toolbar-label,.sf-toolbar-block .sf-toolbar-class-separator {    color: #AAA;    font-size: 12px;}.sf-toolbar-block .sf-toolbar-info {    border-collapse: collapse;    display: table;    z-index: 100000;}.sf-toolbar-block hr {    border-top: 1px solid #777;    margin: 4px 0;    padding-top: 4px;}.sf-toolbar-block .sf-toolbar-info-piece {    /* this 'border-bottom' trick is needed because 'margin-bottom' doesn't work for table rows */    border-bottom: solid transparent 3px;    display: table-row;}.sf-toolbar-block .sf-toolbar-info-piece-additional,.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {    display: none;}.sf-toolbar-block .sf-toolbar-info-group {    margin-bottom: 4px;    padding-bottom: 2px;    border-bottom: 1px solid #333333;}.sf-toolbar-block .sf-toolbar-info-group:last-child {    margin-bottom: 0;    padding-bottom: 0;    border-bottom: none;}.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {    padding: 2px 5px;    margin-bottom: 0;}.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status + .sf-toolbar-status {    margin-left: 4px;}.sf-toolbar-block .sf-toolbar-info-piece:last-child {    margin-bottom: 0;}div.sf-toolbar .sf-toolbar-block .sf-toolbar-info-piece a {    color: #99CDD8;    text-decoration: underline;}div.sf-toolbar .sf-toolbar-block a:hover {    text-decoration: none;}.sf-toolbar-block .sf-toolbar-info-piece b {    color: #AAA;    display: table-cell;    font-size: 11px;    padding: 4px 8px 4px 0;}.sf-toolbar-block:not(.sf-toolbar-block-dump) .sf-toolbar-info-piece span {    color: #F5F5F5;}.sf-toolbar-block .sf-toolbar-info-piece span {    font-size: 12px;}.sf-toolbar-block .sf-toolbar-info {    background-color: #444;    bottom: 36px;    color: #F5F5F5;    display: none;    padding: 9px 0;    position: absolute;}.sf-toolbar-block .sf-toolbar-info:empty {    visibility: hidden;}.sf-toolbar-block .sf-toolbar-status {    display: inline-block;    color: #FFF;    background-color: #666;    padding: 3px 6px;    margin-bottom: 2px;    vertical-align: middle;    min-width: 15px;    min-height: 13px;    text-align: center;}.sf-toolbar-block .sf-toolbar-status-green {    background-color: #4F805D;}.sf-toolbar-block .sf-toolbar-status-red {    background-color: #B0413E;}.sf-toolbar-block .sf-toolbar-status-yellow {    background-color: #A46A1F;}.sf-toolbar-block.sf-toolbar-status-green {    background-color: #4F805D;    color: #FFF;}.sf-toolbar-block.sf-toolbar-status-red {    background-color: #B0413E;    color: #FFF;}.sf-toolbar-block.sf-toolbar-status-yellow {    background-color: #A46A1F;    color: #FFF;}.sf-toolbar-block-request .sf-toolbar-status {    color: #FFF;    display: inline-block;    font-size: 14px;    height: 36px;    line-height: 36px;    padding: 0 10px;}.sf-toolbar-block-request .sf-toolbar-info-piece a {    background-color: transparent;    text-decoration: none;}.sf-toolbar-block-request .sf-toolbar-info-piece a:hover {    text-decoration: underline;}.sf-toolbar-block-request .sf-toolbar-redirection-status {    font-weight: normal;    padding: 2px 4px;    line-height: 18px;}.sf-toolbar-block-request .sf-toolbar-info-piece span.sf-toolbar-redirection-method {    font-size: 12px;    height: 17px;    line-height: 17px;    margin-right: 5px;}.sf-toolbar-block-ajax .sf-toolbar-icon {    cursor: pointer;}.sf-toolbar-status-green .sf-toolbar-label,.sf-toolbar-status-yellow .sf-toolbar-label,.sf-toolbar-status-red .sf-toolbar-label {    color: #FFF;}.sf-toolbar-status-green svg path,.sf-toolbar-status-green svg .sf-svg-path,.sf-toolbar-status-red svg path,.sf-toolbar-status-red svg .sf-svg-path,.sf-toolbar-status-yellow svg path,.sf-toolbar-status-yellow svg .sf-svg-path {    fill: #FFF;}.sf-toolbar-block-config svg path,.sf-toolbar-block-config svg .sf-svg-path {    fill: #FFF;}.sf-toolbar-block .sf-toolbar-icon {    display: block;    height: 36px;    padding: 0 7px;    overflow: hidden;    text-overflow: ellipsis;}.sf-toolbar-block-request .sf-toolbar-icon {    padding-left: 0;    padding-right: 0;}.sf-toolbar-block .sf-toolbar-icon img,.sf-toolbar-block .sf-toolbar-icon svg {    border-width: 0;    position: relative;    top: 8px;    vertical-align: baseline;}.sf-toolbar-block .sf-toolbar-icon img + span,.sf-toolbar-block .sf-toolbar-icon svg + span {    margin-left: 4px;}.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-value {    margin-left: 4px;}.sf-toolbar-block:hover,.sf-toolbar-block.hover {    position: relative;}.sf-toolbar-block:hover .sf-toolbar-icon,.sf-toolbar-block.hover .sf-toolbar-icon {    background-color: #444;    position: relative;    z-index: 10002;}.sf-toolbar-block-ajax.hover .sf-toolbar-info {    z-index: 10001;}.sf-toolbar-block:hover .sf-toolbar-info,.sf-toolbar-block.hover .sf-toolbar-info {    display: block;    padding: 10px;    max-width: 525px;    max-height: 480px;    word-wrap: break-word;    overflow: hidden;    overflow-y: auto;}.sf-toolbar-info-piece b.sf-toolbar-ajax-info {    color: #F5F5F5;}.sf-toolbar-ajax-requests {    table-layout: auto;    width: 100%;}.sf-toolbar-ajax-requests td {    background-color: #444;    border-bottom: 1px solid #777;    color: #F5F5F5;    font-size: 12px;    padding: 4px;}.sf-toolbar-ajax-requests tr:last-child td {    border-bottom: 0;}.sf-toolbar-ajax-requests th {    background-color: #222;    border-bottom: 0;    color: #AAA;    font-size: 11px;    padding: 4px;}.sf-ajax-request-url {    max-width: 250px;    line-height: 9px;    overflow: hidden;    text-overflow: ellipsis;}.sf-toolbar-ajax-requests .sf-ajax-request-url a {    text-decoration: none;}.sf-toolbar-ajax-requests .sf-ajax-request-url a:hover {    text-decoration: underline;}.sf-ajax-request-duration {    text-align: right;}.sf-ajax-request-loading {    animation: sf-blink .5s ease-in-out infinite;}@keyframes sf-blink {    0% { background: #222; }    50% { background: #444; }    100% { background: #222; }}.sf-toolbar-block.sf-toolbar-block-dump .sf-toolbar-info {    max-width: none;    width: 100%;    position: fixed;    box-sizing: border-box;    left: 0;}.sf-toolbar-block-dump pre.sf-dump {    background-color: #222;    border-color: #777;    border-radius: 0;    margin: 6px 0 12px 0;}.sf-toolbar-block-dump pre.sf-dump:last-child {    margin-bottom: 0;}.sf-toolbar-block-dump pre.sf-dump .sf-dump-search-wrapper {    margin-bottom: 5px;}.sf-toolbar-block-dump pre.sf-dump span.sf-dump-search-count {    color: #333;    font-size: 12px;}.sf-toolbar-block-dump .sf-toolbar-info-piece {    display: block;}.sf-toolbar-block-dump .sf-toolbar-info-piece .sf-toolbar-file-line {    color: #AAA;    margin-left: 4px;}.sf-toolbar-block-dump .sf-toolbar-info img {    display: none;}/* Responsive Design */.sf-toolbar-icon .sf-toolbar-label,.sf-toolbar-icon .sf-toolbar-value {    display: none;}.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label {    display: inline-block;}/* Legacy Design - these styles are maintained to make old panels look   a bit better on the new toolbar */.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {    color: #AAA;    font-size: 12px;}.sf-toolbar-status-green .sf-toolbar-info-piece-additional-detail,.sf-toolbar-status-yellow .sf-toolbar-info-piece-additional-detail,.sf-toolbar-status-red .sf-toolbar-info-piece-additional-detail {    color: #FFF;}@media (min-width: 768px) {    .sf-toolbar-icon .sf-toolbar-label,    .sf-toolbar-icon .sf-toolbar-value {        display: inline;    }    .sf-toolbar-block .sf-toolbar-icon img,    .sf-toolbar-block .sf-toolbar-icon svg {        top: 6px;    }    .sf-toolbar-block-time .sf-toolbar-icon svg,    .sf-toolbar-block-memory .sf-toolbar-icon svg {        display: none;    }    .sf-toolbar-block-time .sf-toolbar-icon svg + span,    .sf-toolbar-block-memory .sf-toolbar-icon svg + span {        margin-left: 0;    }    .sf-toolbar-block .sf-toolbar-icon {        padding: 0 10px;    }    .sf-toolbar-block-time .sf-toolbar-icon {        padding-right: 5px;    }    .sf-toolbar-block-memory .sf-toolbar-icon {        padding-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-icon {        padding-left: 0;        padding-right: 0;    }    .sf-toolbar-block-request .sf-toolbar-label {        margin-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-status + svg {        margin-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-icon svg + .sf-toolbar-label {        margin-left: 0;     }    .sf-toolbar-block-request .sf-toolbar-label + .sf-toolbar-value {        margin-right: 10px;    }    .sf-toolbar-block-request:hover .sf-toolbar-info {        max-width: none;    }    .sf-toolbar-block .sf-toolbar-info-piece b {        font-size: 12px;    }    .sf-toolbar-block .sf-toolbar-info-piece span {        font-size: 13px;    }    .sf-toolbar-block-right {        float: right;        margin-left: 0;        margin-right: 0;    }}@media (min-width: 1024px) {    .sf-toolbar-block .sf-toolbar-info-piece-additional,    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail {        display: inline;    }    .sf-toolbar-block .sf-toolbar-info-piece-additional:empty,    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail:empty {        display: none;    }}/***** Error Toolbar *****/.sf-error-toolbar .sf-toolbarreset {    background: #222;    color: #f5f5f5;    font: 13px/36px Arial, sans-serif;    height: 36px;    padding: 0 15px;    text-align: left;}.sf-error-toolbar .sf-toolbarreset svg {    height: auto;}.sf-error-toolbar .sf-toolbarreset a {    color: #99cdd8;    margin-left: 5px;    text-decoration: underline;}.sf-error-toolbar .sf-toolbarreset a:hover {    text-decoration: none;}.sf-error-toolbar .sf-toolbarreset .sf-toolbar-icon {    float: left;    padding: 5px 0;    margin-right: 10px;}/***** Media query print: Do not print the Toolbar. *****/@media print {    .sf-toolbar {        display: none !important;    }}</style><script nonce=\"7737badafdcbfceee5321e4dbdf797c9\">/*<![CDATA[*/    (function () {        Sfjs.loadToolbar('cabd2a');    })();/*]]>*/</script>
</body>
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
        return "admin/admin.html.twig";
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
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Welcome!</title>
                

            <!-- Google Fonts -->
            <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

            <!-- Vendor CSS Files -->
            <link href=\"/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
            <link href=\"/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
            <link href=\"/assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
            <link href=\"/assets/vendor/quill/quill.snow.css\" rel=\"stylesheet\">
            <link href=\"/assets/vendor/quill/quill.bubble.css\" rel=\"stylesheet\">
            <link href=\"/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
            <link href=\"/assets/vendor/simple-datatables/style.css\" rel=\"stylesheet\">

            <!-- Template Main CSS File -->
            <link href=\"/assets/css/style.css\" rel=\"stylesheet\">
        
        
            <!-- Vendor JS Files -->
            <script src=\"/assets/vendor/apexcharts/apexcharts.min.js\"></script>
            <script src=\"/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
            <script src=\"/assets/vendor/chart.js/chart.min.js\"></script>
            <script src=\"/assets/vendor/echarts/echarts.min.js\"></script>
            <script src=\"/assets/vendor/quill/quill.min.js\"></script>
            <script src=\"/assets/vendor/simple-datatables/simple-datatables.js\"></script>
            <script src=\"/assets/vendor/tinymce/tinymce.min.js\"></script>
            <script src=\"/assets/vendor/php-email-form/validate.js\"></script>

            <!-- Template Main JS File -->
            <script src=\"/assets/js/main.js\"></script>            </head>
    <body>

                    <!-- ======= Header ======= -->
            <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

                <div class=\"d-flex align-items-center justify-content-between\">
                    <a href=\"admin.html\" class=\"logo d-flex align-items-center\">
                        <img src=\"assets/img/logo.png\" alt=\"\">
                        <span class=\"d-none d-lg-block\">NiceAdmin</span>
                    </a>
                    <i class=\"bi bi-list toggle-sidebar-btn\"></i>
                </div><!-- End Logo -->

                <div class=\"search-bar\">
                    <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
                        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
                    </form>
                </div><!-- End Search Bar -->

                <nav class=\"header-nav ms-auto\">
                    <ul class=\"d-flex align-items-center\">

                        <li class=\"nav-item d-block d-lg-none\">
                            <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                                <i class=\"bi bi-search\"></i>
                            </a>
                        </li><!-- End Search Icon-->

                        <li class=\"nav-item dropdown\">

                            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"bi bi-bell\"></i>
                                <span class=\"badge bg-primary badge-number\">4</span>
                            </a><!-- End Notification Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                                <li class=\"dropdown-header\">
                                    You have 4 new notifications
                                    <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-exclamation-circle text-warning\"></i>
                                    <div>
                                        <h4>Lorem Ipsum</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>30 min. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-x-circle text-danger\"></i>
                                    <div>
                                        <h4>Atque rerum nesciunt</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>1 hr. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-check-circle text-success\"></i>
                                    <div>
                                        <h4>Sit rerum fuga</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>2 hrs. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-info-circle text-primary\"></i>
                                    <div>
                                        <h4>Dicta reprehenderit</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>4 hrs. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>
                                <li class=\"dropdown-footer\">
                                    <a href=\"#\">Show all notifications</a>
                                </li>

                            </ul><!-- End Notification Dropdown Items -->

                        </li><!-- End Notification Nav -->

                        <li class=\"nav-item dropdown\">

                            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"bi bi-chat-left-text\"></i>
                                <span class=\"badge bg-success badge-number\">3</span>
                            </a><!-- End Messages Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                                <li class=\"dropdown-header\">
                                    You have 3 new messages
                                    <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>Maria Hudson</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>4 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>Anna Nelson</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>6 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>David Muldon</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>8 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"dropdown-footer\">
                                    <a href=\"#\">Show all messages</a>
                                </li>

                            </ul><!-- End Messages Dropdown Items -->

                        </li><!-- End Messages Nav -->

                        <li class=\"nav-item dropdown pe-3\">

                            <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                                                         </a><!-- End Profile Iamge Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                <li class=\"dropdown-header\">
                                    <h6>Kevin Anderson</h6>
                                    <span>Web Designer</span>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-person\"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-gear\"></i>
                                        <span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                                        <i class=\"bi bi-question-circle\"></i>
                                        <span>Need Help?</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"/logout\">
                                        <i class=\"bi bi-box-arrow-right\"></i>
                                        <span>Sign Out</span>
                                    </a>
                                </li>

                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->

                    </ul>
                </nav><!-- End Icons Navigation -->

            </header><!-- End Header -->

        
                    <!-- ======= Sidebar ======= -->
            <aside id=\"sidebar\" class=\"sidebar\">

                <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"admin.html\">
                            <i class=\"bi bi-grid\"></i>
                            <span>Gestion des blogs</span>
                        </a>
                    </li><!-- End Dashboard Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-menu-button-wide\"></i><span>Gestion des proudits</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"components-alerts.html\">
                                    <i class=\"bi bi-circle\"></i><span>Alerts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-accordion.html\">
                                    <i class=\"bi bi-circle\"></i><span>Accordion</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-badges.html\">
                                    <i class=\"bi bi-circle\"></i><span>Badges</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-breadcrumbs.html\">
                                    <i class=\"bi bi-circle\"></i><span>Breadcrumbs</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-buttons.html\">
                                    <i class=\"bi bi-circle\"></i><span>Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-cards.html\">
                                    <i class=\"bi bi-circle\"></i><span>Cards</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-carousel.html\">
                                    <i class=\"bi bi-circle\"></i><span>Carousel</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-list-group.html\">
                                    <i class=\"bi bi-circle\"></i><span>List group</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-modal.html\">
                                    <i class=\"bi bi-circle\"></i><span>Modal</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-tabs.html\">
                                    <i class=\"bi bi-circle\"></i><span>Tabs</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-pagination.html\">
                                    <i class=\"bi bi-circle\"></i><span>Pagination</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-progress.html\">
                                    <i class=\"bi bi-circle\"></i><span>Progress</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-spinners.html\">
                                    <i class=\"bi bi-circle\"></i><span>Spinners</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-tooltips.html\">
                                    <i class=\"bi bi-circle\"></i><span>Tooltips</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Components Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-journal-text\"></i><span>Gestion des utilisateurs</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"forms-elements.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Elements</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"forms-layouts.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"forms-editors.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Editors</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"forms-validation.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Validation</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Forms Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"tables-general.html\">
                                    <i class=\"bi bi-circle\"></i><span>General Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"tables-data.html\">
                                    <i class=\"bi bi-circle\"></i><span>Data Tables</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Tables Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-bar-chart\"></i><span>Charts</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"charts-chartjs.html\">
                                    <i class=\"bi bi-circle\"></i><span>Chart.js</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"charts-apexcharts.html\">
                                    <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"charts-echarts.html\">
                                    <i class=\"bi bi-circle\"></i><span>ECharts</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Charts Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-gem\"></i><span>Icons</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"icons-bootstrap.html\">
                                    <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"icons-remix.html\">
                                    <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"icons-boxicons.html\">
                                    <i class=\"bi bi-circle\"></i><span>Boxicons</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Icons Nav -->

                    <li class=\"nav-heading\">Pages</li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>Profile</span>
                        </a>
                    </li><!-- End Profile Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
                            <i class=\"bi bi-question-circle\"></i>
                            <span>F.A.Q</span>
                        </a>
                    </li><!-- End F.A.Q Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
                            <i class=\"bi bi-envelope\"></i>
                            <span>Contact</span>
                        </a>
                    </li><!-- End Contact Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-register.html\">
                            <i class=\"bi bi-card-list\"></i>
                            <span>Register</span>
                        </a>
                    </li><!-- End Register Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
                            <i class=\"bi bi-box-arrow-in-right\"></i>
                            <span>Login</span>
                        </a>
                    </li><!-- End Login Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                            <i class=\"bi bi-dash-circle\"></i>
                            <span>Error 404</span>
                        </a>
                    </li><!-- End Error 404 Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                            <i class=\"bi bi-file-earmark\"></i>
                            <span>Blank</span>
                        </a>
                    </li><!-- End Blank Page Nav -->

                </ul>

            </aside><!-- End Sidebar-->
                
    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Dashboard</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class=\"section dashboard\">
            <div class=\"row\">

                <!-- Left side columns -->
                <div class=\"col-lg-8\">
                    <div class=\"row\">

                        <!-- Sales Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card sales-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-cart\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>145</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card revenue-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-currency-dollar\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>\$3,264</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">8%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class=\"col-xxl-4 col-xl-12\">

                            <div class=\"card info-card customers-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-people\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>1244</h6>
                                            <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Reports -->
                        <div class=\"col-12\">
                            <div class=\"card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Reports <span>/Today</span></h5>

                                    <!-- Line Chart -->
                                    <div id=\"reportsChart\"></div>

                                    <script>
                                        document.addEventListener(\"DOMContentLoaded\", () => {
                                            new ApexCharts(document.querySelector(\"#reportsChart\"), {
                                                series: [{
                                                    name: 'Sales',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'Revenue',
                                                    data: [11, 32, 45, 32, 34, 52, 41]
                                                }, {
                                                    name: 'Customers',
                                                    data: [15, 11, 32, 18, 9, 24, 11]
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                fill: {
                                                    type: \"gradient\",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: [\"2018-09-19T00:00:00.000Z\", \"2018-09-19T01:30:00.000Z\", \"2018-09-19T02:30:00.000Z\", \"2018-09-19T03:30:00.000Z\", \"2018-09-19T04:30:00.000Z\", \"2018-09-19T05:30:00.000Z\", \"2018-09-19T06:30:00.000Z\"]
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Line Chart -->

                                </div>

                            </div>
                        </div><!-- End Reports -->

                        <!-- Recent Sales -->
                        <div class=\"col-12\">
                            <div class=\"card recent-sales overflow-auto\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Recent Sales <span>| Today</span></h5>

                                    <table class=\"table table-borderless datatable\">
                                        <thead>
                                        <tr>
                                            <th scope=\"col\">#</th>
                                            <th scope=\"col\">Customer</th>
                                            <th scope=\"col\">Product</th>
                                            <th scope=\"col\">Price</th>
                                            <th scope=\"col\">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\">#2457</a></th>
                                            <td>Brandon Jacob</td>
                                            <td><a href=\"#\" class=\"text-primary\">At praesentium minu</a></td>
                                            <td>\$64</td>
                                            <td><span class=\"badge bg-success\">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\">#2147</a></th>
                                            <td>Bridie Kessler</td>
                                            <td><a href=\"#\" class=\"text-primary\">Blanditiis dolor omnis similique</a></td>
                                            <td>\$47</td>
                                            <td><span class=\"badge bg-warning\">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\">#2049</a></th>
                                            <td>Ashleigh Langosh</td>
                                            <td><a href=\"#\" class=\"text-primary\">At recusandae consectetur</a></td>
                                            <td>\$147</td>
                                            <td><span class=\"badge bg-success\">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\">#2644</a></th>
                                            <td>Angus Grady</td>
                                            <td><a href=\"#\" class=\"text-primar\">Ut voluptatem id earum et</a></td>
                                            <td>\$67</td>
                                            <td><span class=\"badge bg-danger\">Rejected</span></td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\">#2644</a></th>
                                            <td>Raheem Lehner</td>
                                            <td><a href=\"#\" class=\"text-primary\">Sunt similique distinctio</a></td>
                                            <td>\$165</td>
                                            <td><span class=\"badge bg-success\">Approved</span></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class=\"col-12\">
                            <div class=\"card top-selling overflow-auto\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body pb-0\">
                                    <h5 class=\"card-title\">Top Selling <span>| Today</span></h5>

                                    <table class=\"table table-borderless\">
                                        <thead>
                                        <tr>
                                            <th scope=\"col\">Preview</th>
                                            <th scope=\"col\">Product</th>
                                            <th scope=\"col\">Price</th>
                                            <th scope=\"col\">Sold</th>
                                            <th scope=\"col\">Revenue</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-1.jpg\" alt=\"\"></a></th>
                                            <td><a href=\"#\" class=\"text-primary fw-bold\">Ut inventore ipsa voluptas nulla</a></td>
                                            <td>\$64</td>
                                            <td class=\"fw-bold\">124</td>
                                            <td>\$5,828</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-2.jpg\" alt=\"\"></a></th>
                                            <td><a href=\"#\" class=\"text-primary fw-bold\">Exercitationem similique doloremque</a></td>
                                            <td>\$46</td>
                                            <td class=\"fw-bold\">98</td>
                                            <td>\$4,508</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-3.jpg\" alt=\"\"></a></th>
                                            <td><a href=\"#\" class=\"text-primary fw-bold\">Doloribus nisi exercitationem</a></td>
                                            <td>\$59</td>
                                            <td class=\"fw-bold\">74</td>
                                            <td>\$4,366</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-4.jpg\" alt=\"\"></a></th>
                                            <td><a href=\"#\" class=\"text-primary fw-bold\">Officiis quaerat sint rerum error</a></td>
                                            <td>\$32</td>
                                            <td class=\"fw-bold\">63</td>
                                            <td>\$2,016</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-5.jpg\" alt=\"\"></a></th>
                                            <td><a href=\"#\" class=\"text-primary fw-bold\">Sit unde debitis delectus repellendus</a></td>
                                            <td>\$79</td>
                                            <td class=\"fw-bold\">41</td>
                                            <td>\$3,239</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class=\"col-lg-4\">

                    <!-- Recent Activity -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Recent Activity <span>| Today</span></h5>

                            <div class=\"activity\">

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">32 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Quia quae rerum <a href=\"#\" class=\"fw-bold text-dark\">explicabo officiis</a> beatae
                                    </div>
                                </div><!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">56 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Voluptatem blanditiis blanditiis eveniet
                                    </div>
                                </div><!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">2 hrs</div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Voluptates corrupti molestias voluptatem
                                    </div>
                                </div><!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">1 day</div>
                                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Tempore autem saepe <a href=\"#\" class=\"fw-bold text-dark\">occaecati voluptatem</a> tempore
                                    </div>
                                </div><!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">2 days</div>
                                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Est sit eum reiciendis exercitationem
                                    </div>
                                </div><!-- End activity item-->

                                <div class=\"activity-item d-flex\">
                                    <div class=\"activite-label\">4 weeks</div>
                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                    <div class=\"activity-content\">
                                        Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                    </div>
                                </div><!-- End activity item-->

                            </div>

                        </div>
                    </div><!-- End Recent Activity -->

                    <!-- Budget Report -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body pb-0\">
                            <h5 class=\"card-title\">Budget Report <span>| This Month</span></h5>

                            <div id=\"budgetChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

                            <script>
                                document.addEventListener(\"DOMContentLoaded\", () => {
                                    var budgetChart = echarts.init(document.querySelector(\"#budgetChart\")).setOption({
                                        legend: {
                                            data: ['Allocated Budget', 'Actual Spending']
                                        },
                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                name: 'Sales',
                                                max: 6500
                                            },
                                                {
                                                    name: 'Administration',
                                                    max: 16000
                                                },
                                                {
                                                    name: 'Information Technology',
                                                    max: 30000
                                                },
                                                {
                                                    name: 'Customer Support',
                                                    max: 38000
                                                },
                                                {
                                                    name: 'Development',
                                                    max: 52000
                                                },
                                                {
                                                    name: 'Marketing',
                                                    max: 25000
                                                }
                                            ]
                                        },
                                        series: [{
                                            name: 'Budget vs spending',
                                            type: 'radar',
                                            data: [{
                                                value: [4200, 3000, 20000, 35000, 50000, 18000],
                                                name: 'Allocated Budget'
                                            },
                                                {
                                                    value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                    name: 'Actual Spending'
                                                }
                                            ]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div><!-- End Budget Report -->

                    <!-- Website Traffic -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body pb-0\">
                            <h5 class=\"card-title\">Website Traffic <span>| Today</span></h5>

                            <div id=\"trafficChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

                            <script>
                                document.addEventListener(\"DOMContentLoaded\", () => {
                                    echarts.init(document.querySelector(\"#trafficChart\")).setOption({
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '5%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'Access From',
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: 'center'
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    fontSize: '18',
                                                    fontWeight: 'bold'
                                                }
                                            },
                                            labelLine: {
                                                show: false
                                            },
                                            data: [{
                                                value: 1048,
                                                name: 'Search Engine'
                                            },
                                                {
                                                    value: 735,
                                                    name: 'Direct'
                                                },
                                                {
                                                    value: 580,
                                                    name: 'Email'
                                                },
                                                {
                                                    value: 484,
                                                    name: 'Union Ads'
                                                },
                                                {
                                                    value: 300,
                                                    name: 'Video Ads'
                                                }
                                            ]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div><!-- End Website Traffic -->

                    <!-- News & Updates Traffic -->
                    <div class=\"card\">
                        <div class=\"filter\">
                            <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                <li class=\"dropdown-header text-start\">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                            </ul>
                        </div>

                        <div class=\"card-body pb-0\">
                            <h5 class=\"card-title\">News &amp; Updates <span>| Today</span></h5>

                            <div class=\"news\">
                                <div class=\"post-item clearfix\">
                                    <img src=\"assets/img/news-1.jpg\" alt=\"\">
                                    <h4><a href=\"#\">Nihil blanditiis at in nihil autem</a></h4>
                                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"assets/img/news-2.jpg\" alt=\"\">
                                    <h4><a href=\"#\">Quidem autem et impedit</a></h4>
                                    <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"assets/img/news-3.jpg\" alt=\"\">
                                    <h4><a href=\"#\">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"assets/img/news-4.jpg\" alt=\"\">
                                    <h4><a href=\"#\">Laborum corporis quo dara net para</a></h4>
                                    <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                                </div>

                                <div class=\"post-item clearfix\">
                                    <img src=\"assets/img/news-5.jpg\" alt=\"\">
                                    <h4><a href=\"#\">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                                </div>

                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div><!-- End News & Updates -->

                </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->



            <!-- ======= Footer ======= -->
        <footer id=\"footer\" class=\"footer\">
            <div class=\"copyright\">
                &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
            </div>
            <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
            </div>
        </footer><!-- End Footer -->
        
<div id=\"sfwdtcabd2a\" class=\"sf-toolbar sf-display-none\" role=\"region\" aria-label=\"Symfony Web Debug Toolbar\"></div><script nonce=\"7737badafdcbfceee5321e4dbdf797c9\">/*<![CDATA[*/    if (typeof Sfjs === 'undefined' || typeof Sfjs.loadToolbar === 'undefined') {    Sfjs = (function() {        \"use strict\";        if ('classList' in document.documentElement) {            var hasClass = function (el, cssClass) { return el.classList.contains(cssClass); };            var removeClass = function(el, cssClass) { el.classList.remove(cssClass); };            var addClass = function(el, cssClass) { el.classList.add(cssClass); };            var toggleClass = function(el, cssClass) { el.classList.toggle(cssClass); };        } else {            var hasClass = function (el, cssClass) { return el.className.match(new RegExp('\\\\b' + cssClass + '\\\\b')); };            var removeClass = function(el, cssClass) { el.className = el.className.replace(new RegExp('\\\\b' + cssClass + '\\\\b'), ' '); };            var addClass = function(el, cssClass) { if (!hasClass(el, cssClass)) { el.className += \" \" + cssClass; } };            var toggleClass = function(el, cssClass) { hasClass(el, cssClass) ? removeClass(el, cssClass) : addClass(el, cssClass); };        }        var noop = function() {};        var profilerStorageKey = 'symfony/profiler/';        var addEventListener;        var el = document.createElement('div');        if (!('addEventListener' in el)) {            addEventListener = function (element, eventName, callback) {                element.attachEvent('on' + eventName, callback);            };        } else {            addEventListener = function (element, eventName, callback) {                element.addEventListener(eventName, callback, false);            };        }        var request = function(url, onSuccess, onError, payload, options) {            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');            options = options || {};            options.maxTries = options.maxTries || 0;            xhr.open(options.method || 'GET', url, true);            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');            xhr.onreadystatechange = function(state) {                if (4 !== xhr.readyState) {                    return null;                }                if (xhr.status == 404 && options.maxTries > 1) {                    setTimeout(function(){                        options.maxTries--;                        request(url, onSuccess, onError, payload, options);                    }, 1000);                    return null;                }                if (200 === xhr.status) {                    (onSuccess || noop)(xhr);                } else {                    (onError || noop)(xhr);                }            };            xhr.send(payload || '');        };        var getPreference = function(name) {            if (!window.localStorage) {                return null;            }            return localStorage.getItem(profilerStorageKey + name);        };        var setPreference = function(name, value) {            if (!window.localStorage) {                return null;            }            localStorage.setItem(profilerStorageKey + name, value);        };        var requestStack = [];        var extractHeaders = function(xhr, stackElement) {            /* Here we avoid to call xhr.getResponseHeader in order to */            /* prevent polluting the console with CORS security errors */            var allHeaders = xhr.getAllResponseHeaders();            var ret;            if (ret = allHeaders.match(/^x-debug-token:\\s+(.*)\$/im)) {                stackElement.profile = ret[1];            }            if (ret = allHeaders.match(/^x-debug-token-link:\\s+(.*)\$/im)) {                stackElement.profilerUrl = ret[1];            }            if (ret = allHeaders.match(/^Symfony-Debug-Toolbar-Replace:\\s+(.*)\$/im)) {                stackElement.toolbarReplaceFinished = false;                stackElement.toolbarReplace = '1' === ret[1];            }        };        var successStreak = 4;        var pendingRequests = 0;        var renderAjaxRequests = function() {            var requestCounter = document.querySelector('.sf-toolbar-ajax-request-counter');            if (!requestCounter) {                return;            }            requestCounter.textContent = requestStack.length;            var infoSpan = document.querySelector(\".sf-toolbar-ajax-info\");            if (infoSpan) {                infoSpan.textContent = requestStack.length + ' AJAX request' + (requestStack.length !== 1 ? 's' : '');            }            var ajaxToolbarPanel = document.querySelector('.sf-toolbar-block-ajax');            if (requestStack.length) {                ajaxToolbarPanel.style.display = 'block';            } else {                ajaxToolbarPanel.style.display = 'none';            }            if (pendingRequests > 0) {                addClass(ajaxToolbarPanel, 'sf-ajax-request-loading');            } else if (successStreak < 4) {                addClass(ajaxToolbarPanel, 'sf-toolbar-status-red');                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');            } else {                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');                removeClass(ajaxToolbarPanel, 'sf-toolbar-status-red');            }        };        var startAjaxRequest = function(admin) {            var tbody = document.querySelector('.sf-toolbar-ajax-request-list');            if (!tbody) {                return;            }            var nbOfAjaxRequest = tbody.rows.length;            if (nbOfAjaxRequest >= 100) {                tbody.deleteRow(0);            }            var request = requestStack[admin];            pendingRequests++;            var row = document.createElement('tr');            request.DOMNode = row;            var requestNumberCell = document.createElement('td');            requestNumberCell.textContent = admin + 1;            row.appendChild(requestNumberCell);            var profilerCell = document.createElement('td');            profilerCell.textContent = 'n/a';            row.appendChild(profilerCell);            var methodCell = document.createElement('td');            methodCell.textContent = request.method;            row.appendChild(methodCell);            var typeCell = document.createElement('td');            typeCell.textContent = request.type;            row.appendChild(typeCell);            var statusCodeCell = document.createElement('td');            var statusCode = document.createElement('span');            statusCode.textContent = 'n/a';            statusCodeCell.appendChild(statusCode);            row.appendChild(statusCodeCell);            var pathCell = document.createElement('td');            pathCell.className = 'sf-ajax-request-url';            if ('GET' === request.method) {                var pathLink = document.createElement('a');                pathLink.setAttribute('href', request.url);                pathLink.textContent = request.url;                pathCell.appendChild(pathLink);            } else {                pathCell.textContent = request.url;            }            pathCell.setAttribute('title', request.url);            row.appendChild(pathCell);            var durationCell = document.createElement('td');            durationCell.className = 'sf-ajax-request-duration';            durationCell.textContent = 'n/a';            row.appendChild(durationCell);            request.liveDurationHandle = setInterval(function() {                durationCell.textContent = (new Date() - request.start) + 'ms';            }, 100);            row.className = 'sf-ajax-request sf-ajax-request-loading';            tbody.insertBefore(row, null);            var toolbarInfo = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');            toolbarInfo.scrollTop = toolbarInfo.scrollHeight;            renderAjaxRequests();        };        var finishAjaxRequest = function(admin) {            var request = requestStack[admin];            clearInterval(request.liveDurationHandle);            if (!request.DOMNode) {                return;            }            if (request.toolbarReplace && !request.toolbarReplaceFinished && request.profile) {                /* Flag as complete because finishAjaxRequest can be called multiple times. */                request.toolbarReplaceFinished = true;                /* Search up through the DOM to find the toolbar's container ID. */                for (var elem = request.DOMNode; elem && elem !== document; elem = elem.parentNode) {                    if (elem.id.match(/^sfwdt/)) {                        Sfjs.loadToolbar(elem.id.replace(/^sfwdt/, ''), request.profile);                        break;                    }                }            }            pendingRequests--;            var row = request.DOMNode;            /* Unpack the children from the row */            var profilerCell = row.children[1];            var methodCell = row.children[2];            var statusCodeCell = row.children[4];            var statusCodeElem = statusCodeCell.children[0];            var durationCell = row.children[6];            if (request.error) {                row.className = 'sf-ajax-request sf-ajax-request-error';                methodCell.className = 'sf-ajax-request-error';                successStreak = 0;            } else {                row.className = 'sf-ajax-request sf-ajax-request-ok';                successStreak++;            }            if (request.statusCode) {                if (request.statusCode < 300) {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status');                } else if (request.statusCode < 400) {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-yellow');                } else {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');                }                statusCodeElem.textContent = request.statusCode;            } else {                statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');            }            if (request.duration) {                durationCell.textContent = request.duration + 'ms';            }            if (request.profilerUrl) {                profilerCell.textContent = '';                var profilerLink = document.createElement('a');                profilerLink.setAttribute('href', request.profilerUrl);                profilerLink.textContent = request.profile;                profilerCell.appendChild(profilerLink);            }            renderAjaxRequests();        };                    if (window.fetch && window.fetch.polyfill === undefined) {                var oldFetch = window.fetch;                window.fetch = function () {                    var promise = oldFetch.apply(this, arguments);                    var url = arguments[0];                    var params = arguments[1];                    var paramType = Object.prototype.toString.call(arguments[0]);                    if (paramType === '[object Request]') {                        url = arguments[0].url;                        params = {                            method: arguments[0].method,                            credentials: arguments[0].credentials,                            headers: arguments[0].headers,                            mode: arguments[0].mode,                            redirect: arguments[0].redirect                        };                    } else {                        url = String(url);                    }                    if (!url.match(new RegExp(\"^\\/((admin|app(_[\\\\w]+)?)\\\\.php\\/)?_wdt\"))) {                        var method = 'GET';                        if (params && params.method !== undefined) {                            method = params.method;                        }                        var stackElement = {                            error: false,                            url: url,                            method: method,                            type: 'fetch',                            start: new Date()                        };                        var idx = requestStack.push(stackElement) - 1;                        promise.then(function (r) {                            stackElement.duration = new Date() - stackElement.start;                            stackElement.error = r.status < 200 || r.status >= 400;                            stackElement.statusCode = r.status;                            stackElement.profile = r.headers.get('x-debug-token');                            stackElement.profilerUrl = r.headers.get('x-debug-token-link');                            stackElement.toolbarReplaceFinished = false;                            stackElement.toolbarReplace = '1' === r.headers.get('Symfony-Debug-Toolbar-Replace');                            finishAjaxRequest(idx);                        }, function (e){                            stackElement.error = true;                            finishAjaxRequest(idx);                        });                        startAjaxRequest(idx);                    }                    return promise;                };            }            if (window.XMLHttpRequest && XMLHttpRequest.prototype.addEventListener) {                var proxied = XMLHttpRequest.prototype.open;                XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {                    var self = this;                    /* prevent logging AJAX calls to static and inline files, like templates */                    var path = url;                    if (url.slice(0, 1) === '/') {                        if (0 === url.indexOf('')) {                            path = url.slice(0);                        }                    }                    else if (0 === url.indexOf('http\\u003A\\/\\/127.0.0.1\\u003A8001')) {                        path = url.slice(21);                    }                    if (!path.match(new RegExp(\"^\\/((index|app(_[\\\\w]+)?)\\\\.php\\/)?_wdt\"))) {                        var stackElement = {                            error: false,                            url: url,                            method: method,                            type: 'xhr',                            start: new Date()                        };                        var idx = requestStack.push(stackElement) - 1;                        this.addEventListener('readystatechange', function() {                            if (self.readyState == 4) {                                stackElement.duration = new Date() - stackElement.start;                                stackElement.error = self.status < 200 || self.status >= 400;                                stackElement.statusCode = self.status;                                extractHeaders(self, stackElement);                                finishAjaxRequest(idx);                            }                        }, false);                        startAjaxRequest(idx);                    }                    proxied.apply(this, Array.prototype.slice.call(arguments));                };            }                return {            hasClass: hasClass,            removeClass: removeClass,            addClass: addClass,            toggleClass: toggleClass,            getPreference: getPreference,            setPreference: setPreference,            addEventListener: addEventListener,            request: request,            renderAjaxRequests: renderAjaxRequests,            load: function(selector, url, onSuccess, onError, options) {                var el = document.getElementById(selector);                if (el && el.getAttribute('data-sfurl') !== url) {                    request(                        url,                        function(xhr) {                            el.innerHTML = xhr.responseText;                            el.setAttribute('data-sfurl', url);                            removeClass(el, 'loading');                            var pending = pendingRequests;                            for (var i = 0; i < requestStack.length; i++) {                                startAjaxRequest(i);                                if (requestStack[i].duration) {                                    finishAjaxRequest(i);                                }                            }                            /* Revert the pending state in case there was a start called without a finish above. */                            pendingRequests = pending;                            (onSuccess || noop)(xhr, el);                        },                        function(xhr) { (onError || noop)(xhr, el); },                        '',                        options                    );                }                return this;            },            loadToolbar: function(token, newToken) {                newToken = (newToken || token);                this.load(                    'sfwdt' + token,                    'http\\u003A\\/\\/127.0.0.1\\u003A8001\\/_wdt\\/xxxxxx'.replace(/xxxxxx/, newToken),                    function(xhr, el) {                        /* Do nothing in the edge case where the toolbar has already been replaced with a new one */                        if (!document.getElementById('sfToolbarMainContent-' + newToken)) {                            return;                        }                        /* Evaluate in global scope scripts embedded inside the toolbar */                        var i, scripts = [].slice.call(el.querySelectorAll('script'));                        for (i = 0; i < scripts.length; ++i) {                            eval.call({}, scripts[i].firstChild.nodeValue);                        }                        el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';                        if (el.style.display == 'none') {                            return;                        }                        if (getPreference('toolbar/displayState') == 'none') {                            document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'none';                            document.getElementById('sfToolbarClearer-' + newToken).style.display = 'none';                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'block';                        } else {                            document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'block';                            document.getElementById('sfToolbarClearer-' + newToken).style.display = 'block';                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'none';                        }                        /* Handle toolbar-info position */                        var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));                        for (i = 0; i < toolbarBlocks.length; ++i) {                            toolbarBlocks[i].onmouseover = function () {                                var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];                                var pageWidth = document.body.clientWidth;                                var elementWidth = toolbarInfo.offsetWidth;                                var leftValue = (elementWidth + this.offsetLeft) - pageWidth;                                var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;                                /* Reset right and left value, useful on window resize */                                toolbarInfo.style.right = '';                                toolbarInfo.style.left = '';                                if (elementWidth > pageWidth) {                                    toolbarInfo.style.left = 0;                                }                                else if (leftValue > 0 && rightValue > 0) {                                    toolbarInfo.style.right = (rightValue * -1) + 'px';                                } else if (leftValue < 0) {                                    toolbarInfo.style.left = 0;                                } else {                                    toolbarInfo.style.right = '0px';                                }                            };                        }                        addEventListener(document.getElementById('sfToolbarHideButton-' + newToken), 'click', function (event) {                            event.preventDefault();                            var p = this.parentNode;                            p.style.display = 'none';                            (p.previousElementSibling || p.previousSibling).style.display = 'none';                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'block';                            setPreference('toolbar/displayState', 'none');                        });                        addEventListener(document.getElementById('sfToolbarMiniToggler-' + newToken), 'click', function (event) {                            event.preventDefault();                            var elem = this.parentNode;                            if (elem.style.display == 'none') {                                document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'none';                                document.getElementById('sfToolbarClearer-' + newToken).style.display = 'none';                                elem.style.display = 'block';                            } else {                                document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'block';                                document.getElementById('sfToolbarClearer-' + newToken).style.display = 'block';                                elem.style.display = 'none'                            }                            setPreference('toolbar/displayState', 'block');                        });                        renderAjaxRequests();                        addEventListener(document.querySelector('.sf-toolbar-ajax-clear'), 'click', function() {                            requestStack = [];                            renderAjaxRequests();                            successStreak = 4;                            document.querySelector('.sf-toolbar-ajax-request-list').innerHTML = '';                        });                        addEventListener(document.querySelector('.sf-toolbar-block-ajax'), 'mouseenter', function (event) {                            var elem = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');                            elem.scrollTop = elem.scrollHeight;                        });                        addEventListener(document.querySelector('.sf-toolbar-block-ajax > .sf-toolbar-icon'), 'click', function (event) {                            event.preventDefault();                            toggleClass(this.parentNode, 'hover');                        });                        var dumpInfo = document.querySelector('.sf-toolbar-block-dump .sf-toolbar-info');                        if (null !== dumpInfo) {                            addEventListener(dumpInfo, 'sfbeforedumpcollapse', function () {                                dumpInfo.style.minHeight = dumpInfo.getBoundingClientRect().height+'px';                            });                            addEventListener(dumpInfo, 'mouseleave', function () {                                dumpInfo.style.minHeight = '';                            });                        }                    },                    function(xhr) {                        if (xhr.status !== 0) {                            var sfwdt = document.getElementById('sfwdt' + token);                            sfwdt.innerHTML = '\\                                <div class=\"sf-toolbarreset\">\\                                    <div class=\"sf-toolbar-icon\"><svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#FFFFFF\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg></div>\\                                    An error occurred while loading the web debug toolbar. <a href=\"http\\u003A\\/\\/127.0.0.1\\u003A8001\\/_profiler\\/' + newToken + '>Open the web profiler.</a>\\                                </div>\\                            ';                            sfwdt.setAttribute('class', 'sf-toolbar sf-error-toolbar');                        }                    },                    { maxTries: 5 }                );                return this;            },            toggle: function(selector, elOn, elOff) {                var tmp = elOn.style.display,                    el = document.getElementById(selector);                elOn.style.display = elOff.style.display;                elOff.style.display = tmp;                if (el) {                    el.style.display = 'none' === tmp ? 'none' : 'block';                }                return this;            },            createTabs: function() {                var tabGroups = document.querySelectorAll('.sf-tabs:not([data-processed=true])');                /* create the tab navigation for each group of tabs */                for (var i = 0; i < tabGroups.length; i++) {                    var tabs = tabGroups[i].querySelectorAll(':scope > .tab');                    var tabNavigation = document.createElement('ul');                    tabNavigation.className = 'tab-navigation';                    var selectedTabId = 'tab-' + i + '-0'; /* select the first tab by default */                    for (var j = 0; j < tabs.length; j++) {                        var tabId = 'tab-' + i + '-' + j;                        var tabTitle = tabs[j].querySelector('.tab-title').innerHTML;                        var tabNavigationItem = document.createElement('li');                        tabNavigationItem.setAttribute('data-tab-id', tabId);                        if (hasClass(tabs[j], 'active')) { selectedTabId = tabId; }                        if (hasClass(tabs[j], 'disabled')) { addClass(tabNavigationItem, 'disabled'); }                        tabNavigationItem.innerHTML = tabTitle;                        tabNavigation.appendChild(tabNavigationItem);                        var tabContent = tabs[j].querySelector('.tab-content');                        tabContent.parentElement.setAttribute('id', tabId);                    }                    tabGroups[i].insertBefore(tabNavigation, tabGroups[i].firstChild);                    addClass(document.querySelector('[data-tab-id=\"' + selectedTabId + '\"]'), 'active');                }                /* display the active tab and add the 'click' event listeners */                for (i = 0; i < tabGroups.length; i++) {                    tabNavigation = tabGroups[i].querySelectorAll(':scope > .tab-navigation li');                    for (j = 0; j < tabNavigation.length; j++) {                        tabId = tabNavigation[j].getAttribute('data-tab-id');                        document.getElementById(tabId).querySelector('.tab-title').className = 'hidden';                        if (hasClass(tabNavigation[j], 'active')) {                            document.getElementById(tabId).className = 'block';                        } else {                            document.getElementById(tabId).className = 'hidden';                        }                        tabNavigation[j].addEventListener('click', function(e) {                            var activeTab = e.target || e.srcElement;                            /* needed because when the tab contains HTML contents, user can click */                            /* on any of those elements instead of their parent '<li>' element */                            while (activeTab.tagName.toLowerCase() !== 'li') {                                activeTab = activeTab.parentNode;                            }                            /* get the full list of tabs through the parent of the active tab element */                            var tabNavigation = activeTab.parentNode.children;                            for (var k = 0; k < tabNavigation.length; k++) {                                var tabId = tabNavigation[k].getAttribute('data-tab-id');                                document.getElementById(tabId).className = 'hidden';                                removeClass(tabNavigation[k], 'active');                            }                            addClass(activeTab, 'active');                            var activeTabId = activeTab.getAttribute('data-tab-id');                            document.getElementById(activeTabId).className = 'block';                        });                    }                    tabGroups[i].setAttribute('data-processed', 'true');                }            },            createToggles: function() {                var toggles = document.querySelectorAll('.sf-toggle:not([data-processed=true])');                for (var i = 0; i < toggles.length; i++) {                    var elementSelector = toggles[i].getAttribute('data-toggle-selector');                    var element = document.querySelector(elementSelector);                    addClass(element, 'sf-toggle-content');                    if (toggles[i].hasAttribute('data-toggle-initial') && toggles[i].getAttribute('data-toggle-initial') == 'display') {                        addClass(toggles[i], 'sf-toggle-on');                        addClass(element, 'sf-toggle-visible');                    } else {                        addClass(toggles[i], 'sf-toggle-off');                        addClass(element, 'sf-toggle-hidden');                    }                    addEventListener(toggles[i], 'click', function(e) {                        e.preventDefault();                        if ('' !== window.getSelection().toString()) {                            /* Don't do anything on text selection */                            return;                        }                        var toggle = e.target || e.srcElement;                        /* needed because when the toggle contains HTML contents, user can click */                        /* on any of those elements instead of their parent '.sf-toggle' element */                        while (!hasClass(toggle, 'sf-toggle')) {                            toggle = toggle.parentNode;                        }                        var element = document.querySelector(toggle.getAttribute('data-toggle-selector'));                        toggleClass(toggle, 'sf-toggle-on');                        toggleClass(toggle, 'sf-toggle-off');                        toggleClass(element, 'sf-toggle-hidden');                        toggleClass(element, 'sf-toggle-visible');                        /* the toggle doesn't change its contents when clicking on it */                        if (!toggle.hasAttribute('data-toggle-alt-content')) {                            return;                        }                        if (!toggle.hasAttribute('data-toggle-original-content')) {                            toggle.setAttribute('data-toggle-original-content', toggle.innerHTML);                        }                        var currentContent = toggle.innerHTML;                        var originalContent = toggle.getAttribute('data-toggle-original-content');                        var altContent = toggle.getAttribute('data-toggle-alt-content');                        toggle.innerHTML = currentContent !== altContent ? altContent : originalContent;                    });                    /* Prevents from disallowing clicks on links inside toggles */                    var toggleLinks = toggles[i].querySelectorAll('a');                    for (var j = 0; j < toggleLinks.length; j++) {                        addEventListener(toggleLinks[j], 'click', function(e) {                            e.stopPropagation();                        });                    }                    toggles[i].setAttribute('data-processed', 'true');                }            },            createFilters: function() {                document.querySelectorAll('[data-filters] [data-filter]').forEach(function (filter) {                    var filters = filter.closest('[data-filters]'),                        type = 'choice',                        name = filter.dataset.filter,                        ucName = name.charAt(0).toUpperCase()+name.slice(1),                        list = document.createElement('ul'),                        values = filters.dataset['filter'+ucName] || filters.querySelectorAll('[data-filter-'+name+']'),                        labels = {},                        defaults = null,                        indexed = {},                        processed = {};                    if (typeof values === 'string') {                        type = 'level';                        labels = values.split(',');                        values = values.toLowerCase().split(',');                        defaults = values.length - 1;                    }                    addClass(list, 'filter-list');                    addClass(list, 'filter-list-'+type);                    values.forEach(function (value, i) {                        if (value instanceof HTMLElement) {                            value = value.dataset['filter'+ucName];                        }                        if (value in processed) {                            return;                        }                        var option = document.createElement('li'),                            label = i in labels ? labels[i] : value,                            active = false,                            matches;                        if ('' === label) {                            option.innerHTML = '<em>(none)</em>';                        } else {                            option.innerText = label;                        }                        option.dataset.filter = value;                        option.setAttribute('title', 1 === (matches = filters.querySelectorAll('[data-filter-'+name+'=\"'+value+'\"]').length) ? 'Matches 1 row' : 'Matches '+matches+' rows');                        indexed[value] = i;                        list.appendChild(option);                        addEventListener(option, 'click', function () {                            if ('choice' === type) {                                filters.querySelectorAll('[data-filter-'+name+']').forEach(function (row) {                                    if (option.dataset.filter === row.dataset['filter'+ucName]) {                                        toggleClass(row, 'filter-hidden-'+name);                                    }                                });                                toggleClass(option, 'active');                            } else if ('level' === type) {                                if (i === this.parentNode.querySelectorAll('.active').length - 1) {                                    return;                                }                                this.parentNode.querySelectorAll('li').forEach(function (currentOption, j) {                                    if (j <= i) {                                        addClass(currentOption, 'active');                                        if (i === j) {                                            addClass(currentOption, 'last-active');                                        } else {                                            removeClass(currentOption, 'last-active');                                        }                                    } else {                                        removeClass(currentOption, 'active');                                        removeClass(currentOption, 'last-active');                                    }                                });                                filters.querySelectorAll('[data-filter-'+name+']').forEach(function (row) {                                    if (i < indexed[row.dataset['filter'+ucName]]) {                                        addClass(row, 'filter-hidden-'+name);                                    } else {                                        removeClass(row, 'filter-hidden-'+name);                                    }                                });                            }                        });                        if ('choice' === type) {                            active = null === defaults || 0 <= defaults.indexOf(value);                        } else if ('level' === type) {                            active = i <= defaults;                            if (active && i === defaults) {                                addClass(option, 'last-active');                            }                        }                        if (active) {                            addClass(option, 'active');                        } else {                            filters.querySelectorAll('[data-filter-'+name+'=\"'+value+'\"]').forEach(function (row) {                                toggleClass(row, 'filter-hidden-'+name);                            });                        }                        processed[value] = true;                    });                    if (1 < list.childNodes.length) {                        filter.appendChild(list);                        filter.dataset.filtered = '';                    }                });            }        };    })();    Sfjs.addEventListener(document, 'DOMContentLoaded', function() {        Sfjs.createTabs();        Sfjs.createToggles();    });}/*]]>*/</script><style nonce=\"68b165f86bd9e03b5082121084e5050c\">    .sf-minitoolbar {    background-color: #222;    border-top-left-radius: 4px;    bottom: 0;    box-sizing: border-box;    display: none;    height: 36px;    padding: 6px;    position: fixed;    right: 0;    z-index: 99999;}.sf-minitoolbar a {    display: block;}.sf-minitoolbar svg,.sf-minitoolbar img {    max-height: 24px;    max-width: 24px;    display: inline;}.sf-toolbar-clearer {    clear: both;    height: 36px;}.sf-display-none {    display: none;}.sf-toolbarreset * {    box-sizing: content-box;    vertical-align: baseline;    letter-spacing: normal;    width: auto;}.sf-toolbarreset {    background-color: #222;    bottom: 0;    box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);    color: #EEE;    font: 11px Arial, sans-serif;    left: 0;    margin: 0;    padding: 0 36px 0 0;    position: fixed;    right: 0;    text-align: left;    text-transform: none;    z-index: 99999;    direction: ltr;    /* neutralize the aliasing defined by external CSS styles */    -webkit-font-smoothing: subpixel-antialiased;    -moz-osx-font-smoothing: auto;}.sf-toolbarreset abbr {    border: dashed #777;    border-width: 0 0 1px;}.sf-toolbarreset svg,.sf-toolbarreset img {    height: 20px;    width: 20px;    display: inline-block;}.sf-toolbarreset .hide-button {    background: #444;    display: block;    position: absolute;    top: 0;    right: 0;    width: 36px;    height: 36px;    cursor: pointer;    text-align: center;}.sf-toolbarreset .hide-button svg {    max-height: 18px;    margin-top: 10px;}.sf-toolbar-block {    cursor: default;    display: block;    float: left;    height: 36px;    margin-right: 0;    white-space: nowrap;    max-width: 15%;}.sf-toolbar-block > a,.sf-toolbar-block > a:hover {    display: block;    text-decoration: none;    background-color: transparent;    color: inherit;}.sf-toolbar-block span {    display: inline-block;}.sf-toolbar-block .sf-toolbar-value {    color: #F5F5F5;    font-size: 13px;    line-height: 36px;    padding: 0;}.sf-toolbar-block .sf-toolbar-label,.sf-toolbar-block .sf-toolbar-class-separator {    color: #AAA;    font-size: 12px;}.sf-toolbar-block .sf-toolbar-info {    border-collapse: collapse;    display: table;    z-index: 100000;}.sf-toolbar-block hr {    border-top: 1px solid #777;    margin: 4px 0;    padding-top: 4px;}.sf-toolbar-block .sf-toolbar-info-piece {    /* this 'border-bottom' trick is needed because 'margin-bottom' doesn't work for table rows */    border-bottom: solid transparent 3px;    display: table-row;}.sf-toolbar-block .sf-toolbar-info-piece-additional,.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {    display: none;}.sf-toolbar-block .sf-toolbar-info-group {    margin-bottom: 4px;    padding-bottom: 2px;    border-bottom: 1px solid #333333;}.sf-toolbar-block .sf-toolbar-info-group:last-child {    margin-bottom: 0;    padding-bottom: 0;    border-bottom: none;}.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {    padding: 2px 5px;    margin-bottom: 0;}.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status + .sf-toolbar-status {    margin-left: 4px;}.sf-toolbar-block .sf-toolbar-info-piece:last-child {    margin-bottom: 0;}div.sf-toolbar .sf-toolbar-block .sf-toolbar-info-piece a {    color: #99CDD8;    text-decoration: underline;}div.sf-toolbar .sf-toolbar-block a:hover {    text-decoration: none;}.sf-toolbar-block .sf-toolbar-info-piece b {    color: #AAA;    display: table-cell;    font-size: 11px;    padding: 4px 8px 4px 0;}.sf-toolbar-block:not(.sf-toolbar-block-dump) .sf-toolbar-info-piece span {    color: #F5F5F5;}.sf-toolbar-block .sf-toolbar-info-piece span {    font-size: 12px;}.sf-toolbar-block .sf-toolbar-info {    background-color: #444;    bottom: 36px;    color: #F5F5F5;    display: none;    padding: 9px 0;    position: absolute;}.sf-toolbar-block .sf-toolbar-info:empty {    visibility: hidden;}.sf-toolbar-block .sf-toolbar-status {    display: inline-block;    color: #FFF;    background-color: #666;    padding: 3px 6px;    margin-bottom: 2px;    vertical-align: middle;    min-width: 15px;    min-height: 13px;    text-align: center;}.sf-toolbar-block .sf-toolbar-status-green {    background-color: #4F805D;}.sf-toolbar-block .sf-toolbar-status-red {    background-color: #B0413E;}.sf-toolbar-block .sf-toolbar-status-yellow {    background-color: #A46A1F;}.sf-toolbar-block.sf-toolbar-status-green {    background-color: #4F805D;    color: #FFF;}.sf-toolbar-block.sf-toolbar-status-red {    background-color: #B0413E;    color: #FFF;}.sf-toolbar-block.sf-toolbar-status-yellow {    background-color: #A46A1F;    color: #FFF;}.sf-toolbar-block-request .sf-toolbar-status {    color: #FFF;    display: inline-block;    font-size: 14px;    height: 36px;    line-height: 36px;    padding: 0 10px;}.sf-toolbar-block-request .sf-toolbar-info-piece a {    background-color: transparent;    text-decoration: none;}.sf-toolbar-block-request .sf-toolbar-info-piece a:hover {    text-decoration: underline;}.sf-toolbar-block-request .sf-toolbar-redirection-status {    font-weight: normal;    padding: 2px 4px;    line-height: 18px;}.sf-toolbar-block-request .sf-toolbar-info-piece span.sf-toolbar-redirection-method {    font-size: 12px;    height: 17px;    line-height: 17px;    margin-right: 5px;}.sf-toolbar-block-ajax .sf-toolbar-icon {    cursor: pointer;}.sf-toolbar-status-green .sf-toolbar-label,.sf-toolbar-status-yellow .sf-toolbar-label,.sf-toolbar-status-red .sf-toolbar-label {    color: #FFF;}.sf-toolbar-status-green svg path,.sf-toolbar-status-green svg .sf-svg-path,.sf-toolbar-status-red svg path,.sf-toolbar-status-red svg .sf-svg-path,.sf-toolbar-status-yellow svg path,.sf-toolbar-status-yellow svg .sf-svg-path {    fill: #FFF;}.sf-toolbar-block-config svg path,.sf-toolbar-block-config svg .sf-svg-path {    fill: #FFF;}.sf-toolbar-block .sf-toolbar-icon {    display: block;    height: 36px;    padding: 0 7px;    overflow: hidden;    text-overflow: ellipsis;}.sf-toolbar-block-request .sf-toolbar-icon {    padding-left: 0;    padding-right: 0;}.sf-toolbar-block .sf-toolbar-icon img,.sf-toolbar-block .sf-toolbar-icon svg {    border-width: 0;    position: relative;    top: 8px;    vertical-align: baseline;}.sf-toolbar-block .sf-toolbar-icon img + span,.sf-toolbar-block .sf-toolbar-icon svg + span {    margin-left: 4px;}.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-value {    margin-left: 4px;}.sf-toolbar-block:hover,.sf-toolbar-block.hover {    position: relative;}.sf-toolbar-block:hover .sf-toolbar-icon,.sf-toolbar-block.hover .sf-toolbar-icon {    background-color: #444;    position: relative;    z-index: 10002;}.sf-toolbar-block-ajax.hover .sf-toolbar-info {    z-index: 10001;}.sf-toolbar-block:hover .sf-toolbar-info,.sf-toolbar-block.hover .sf-toolbar-info {    display: block;    padding: 10px;    max-width: 525px;    max-height: 480px;    word-wrap: break-word;    overflow: hidden;    overflow-y: auto;}.sf-toolbar-info-piece b.sf-toolbar-ajax-info {    color: #F5F5F5;}.sf-toolbar-ajax-requests {    table-layout: auto;    width: 100%;}.sf-toolbar-ajax-requests td {    background-color: #444;    border-bottom: 1px solid #777;    color: #F5F5F5;    font-size: 12px;    padding: 4px;}.sf-toolbar-ajax-requests tr:last-child td {    border-bottom: 0;}.sf-toolbar-ajax-requests th {    background-color: #222;    border-bottom: 0;    color: #AAA;    font-size: 11px;    padding: 4px;}.sf-ajax-request-url {    max-width: 250px;    line-height: 9px;    overflow: hidden;    text-overflow: ellipsis;}.sf-toolbar-ajax-requests .sf-ajax-request-url a {    text-decoration: none;}.sf-toolbar-ajax-requests .sf-ajax-request-url a:hover {    text-decoration: underline;}.sf-ajax-request-duration {    text-align: right;}.sf-ajax-request-loading {    animation: sf-blink .5s ease-in-out infinite;}@keyframes sf-blink {    0% { background: #222; }    50% { background: #444; }    100% { background: #222; }}.sf-toolbar-block.sf-toolbar-block-dump .sf-toolbar-info {    max-width: none;    width: 100%;    position: fixed;    box-sizing: border-box;    left: 0;}.sf-toolbar-block-dump pre.sf-dump {    background-color: #222;    border-color: #777;    border-radius: 0;    margin: 6px 0 12px 0;}.sf-toolbar-block-dump pre.sf-dump:last-child {    margin-bottom: 0;}.sf-toolbar-block-dump pre.sf-dump .sf-dump-search-wrapper {    margin-bottom: 5px;}.sf-toolbar-block-dump pre.sf-dump span.sf-dump-search-count {    color: #333;    font-size: 12px;}.sf-toolbar-block-dump .sf-toolbar-info-piece {    display: block;}.sf-toolbar-block-dump .sf-toolbar-info-piece .sf-toolbar-file-line {    color: #AAA;    margin-left: 4px;}.sf-toolbar-block-dump .sf-toolbar-info img {    display: none;}/* Responsive Design */.sf-toolbar-icon .sf-toolbar-label,.sf-toolbar-icon .sf-toolbar-value {    display: none;}.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label {    display: inline-block;}/* Legacy Design - these styles are maintained to make old panels look   a bit better on the new toolbar */.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {    color: #AAA;    font-size: 12px;}.sf-toolbar-status-green .sf-toolbar-info-piece-additional-detail,.sf-toolbar-status-yellow .sf-toolbar-info-piece-additional-detail,.sf-toolbar-status-red .sf-toolbar-info-piece-additional-detail {    color: #FFF;}@media (min-width: 768px) {    .sf-toolbar-icon .sf-toolbar-label,    .sf-toolbar-icon .sf-toolbar-value {        display: inline;    }    .sf-toolbar-block .sf-toolbar-icon img,    .sf-toolbar-block .sf-toolbar-icon svg {        top: 6px;    }    .sf-toolbar-block-time .sf-toolbar-icon svg,    .sf-toolbar-block-memory .sf-toolbar-icon svg {        display: none;    }    .sf-toolbar-block-time .sf-toolbar-icon svg + span,    .sf-toolbar-block-memory .sf-toolbar-icon svg + span {        margin-left: 0;    }    .sf-toolbar-block .sf-toolbar-icon {        padding: 0 10px;    }    .sf-toolbar-block-time .sf-toolbar-icon {        padding-right: 5px;    }    .sf-toolbar-block-memory .sf-toolbar-icon {        padding-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-icon {        padding-left: 0;        padding-right: 0;    }    .sf-toolbar-block-request .sf-toolbar-label {        margin-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-status + svg {        margin-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-icon svg + .sf-toolbar-label {        margin-left: 0;     }    .sf-toolbar-block-request .sf-toolbar-label + .sf-toolbar-value {        margin-right: 10px;    }    .sf-toolbar-block-request:hover .sf-toolbar-info {        max-width: none;    }    .sf-toolbar-block .sf-toolbar-info-piece b {        font-size: 12px;    }    .sf-toolbar-block .sf-toolbar-info-piece span {        font-size: 13px;    }    .sf-toolbar-block-right {        float: right;        margin-left: 0;        margin-right: 0;    }}@media (min-width: 1024px) {    .sf-toolbar-block .sf-toolbar-info-piece-additional,    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail {        display: inline;    }    .sf-toolbar-block .sf-toolbar-info-piece-additional:empty,    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail:empty {        display: none;    }}/***** Error Toolbar *****/.sf-error-toolbar .sf-toolbarreset {    background: #222;    color: #f5f5f5;    font: 13px/36px Arial, sans-serif;    height: 36px;    padding: 0 15px;    text-align: left;}.sf-error-toolbar .sf-toolbarreset svg {    height: auto;}.sf-error-toolbar .sf-toolbarreset a {    color: #99cdd8;    margin-left: 5px;    text-decoration: underline;}.sf-error-toolbar .sf-toolbarreset a:hover {    text-decoration: none;}.sf-error-toolbar .sf-toolbarreset .sf-toolbar-icon {    float: left;    padding: 5px 0;    margin-right: 10px;}/***** Media query print: Do not print the Toolbar. *****/@media print {    .sf-toolbar {        display: none !important;    }}</style><script nonce=\"7737badafdcbfceee5321e4dbdf797c9\">/*<![CDATA[*/    (function () {        Sfjs.loadToolbar('cabd2a');    })();/*]]>*/</script>
</body>
</html>
", "admin/admin.html.twig", "C:\\Users\\Yosser\\Eventeasy\\templates\\admin\\admin.html.twig");
    }
}
