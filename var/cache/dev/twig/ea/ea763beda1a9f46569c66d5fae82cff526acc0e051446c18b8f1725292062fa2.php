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

/* base.html.twig */
class __TwigTemplate_5a87368832110b63fee8c5c2c593b2cb54c62d59ba111be9136c12166d79c9c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'head_css' => [$this, 'block_head_css'],
            'head_js' => [$this, 'block_head_js'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "


    ";
        // line 18
        $this->displayBlock('head_css', $context, $blocks);
        // line 29
        echo "    ";
        $this->displayBlock('head_js', $context, $blocks);
        // line 40
        echo "
</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark p-4\">
        <div class=\"navbar-collapse collapse  order-0 order-md-0 dual-collapse2\">

            <a class=\"navbar-brand\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz");
        echo "\"><img class=\"rounded-circle\" width=\"30%\"
                                                  src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Logo\"></a>

        </div>

        <div class=\"mx-order order-0 \">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\"
                    aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
        </div>


        <div class=\" mx-auto order-md-0 w-100 order-1 collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item \">
                    <a class=\"nav-link h4\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz");
        echo "\">
                        <i class=\"fa fa-question mr-1 fa-lg\" aria-hidden=\"true\"></i>Quiz
                        <span class=\"sr-only\">(current)</span>
                    </a>
                </li>

                ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70)) {
            // line 71
            echo "
                    <li class=\"nav-item \">
                        <a class=\"nav-link h4\" href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-quiz");
            echo "\">
                            <i class=\"fas fa-plus-circle mr-1 fa-lg\"></i>Créer un quiz
                            <span class=\"sr-only\">(current)</span>
                        </a>
                    </li>
                ";
        }
        // line 79
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 79), "roles", [], "any", true, true, false, 79)) {
            // line 80
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "roles", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 81
                echo "                        ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 82
                    echo "                            <li class=\"nav-item \">
                                <a class=\"nav-link h4\" href=\"";
                    // line 83
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                    echo "\">
                                    <i class=\"fas fa-users-cog fa-lg\"></i>Admin
                                    <span class=\"sr-only\">(current)</span>
                                </a>
                            </li>
                        ";
                }
                // line 89
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                ";
        }
        // line 91
        echo "            </ul>
            ";
        // line 96
        echo "        </div>
        <div style=\"\" class=\"order-3\">
            <ul class=\"navbar-nav ml-auto\">
                ";
        // line 99
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99)) {
            // line 100
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link h4\" href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">

                            <i class=\"fas fa-sign-in-alt mr-1 fa-lg text-success\" aria-hidden=\"true\"
                               data-toggle=\"tooltip\" data-placement=\"top\" title=\"Se connecter\"></i>
                            <span class=\"sr-only\">(current)</span>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link h4\" href=\"";
            // line 110
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\">
                            <i class=\"fa fa-user-plus text-primary\" aria-hidden=\"true\"
                               data-toggle=\"tooltip\" data-placement=\"top\" title=\"S'inscrire\"></i>
                            <span class=\"sr-only\">(current)</span>
                        </a>
                    </li>
                ";
        } else {
            // line 117
            echo "


                    <li style=\"z-index: 3000\" class=\"nav-item dropdown\">

                        <a class=\"nav-link dropdown-toggle h3 text-center\" id=\"navbarDropdownMenuLink\" href=\"";
            // line 122
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-user-circle fa-lg\" aria-hidden=\"true\"></i>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123), "username", [], "any", false, false, false, 123), "html", null, true);
            echo "
                            <span class=\"sr-only\">(current)</span>

                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"nav-link h5 text-dark\" href=\"";
            // line 128
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\">
                                <i class=\"fas fa-user-ninja  btn fa-lg\" aria-hidden=\"true\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Profile\"></i>
                                <span class=\"sr-only\">(current)</span>

                                Profile
                            </a>
                            <a class=\"nav-link h5 text-dark\" href=\"";
            // line 134
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">
                                <i class=\"fas fa-sign-out-alt btn fa-lg text-danger\" aria-hidden=\"true\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Se déconnecter\"></i>
                                <span class=\"sr-only\">(current)</span>
                                Logout
                            </a>

                        </div>
                    </li>
                ";
        }
        // line 143
        echo "

            </ul>
        </div>
    </nav>
</header>

";
        // line 150
        $this->displayBlock('body', $context, $blocks);
        // line 151
        echo "
<footer class=\"text-center text-white bg-dark mt-5 footer\">
    <!-- Grid container -->
    <div class=\"container p-4 pb-0\">
        <!-- Section: Social media -->
        <section class=\"mb-4\">

            <!-- Twitter -->
            <a
                    class=\"btn btn-success btn-floating m-1 rounded-circle\"
                    style=\"background-color: #55acee;\"
                    href=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz");
        echo "\"
                    role=\"button\"
            ><i class=\"fab fa-twitter\"></i
                ></a>

            <!-- Google -->
            <a
                    class=\"btn btn-success btn-floating m-1 rounded-circle\"
                    style=\"background-color: #dd4b39;\"
                    href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz");
        echo "\"
                    role=\"button\"
            ><i class=\"fab fa-google\"></i
                ></a>

            <!-- Instagram -->
            <a
                    class=\"btn btn-success btn-floating m-1 rounded-circle\"
                    style=\"background-color: #ac2bac;\"
                    href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz");
        echo "\"
                    role=\"button\"
            ><i class=\"fab fa-instagram\"></i
                ></a>

            <!-- Linkedin -->
            <a
                    class=\"btn btn-success btn-floating m-1 rounded-circle\"
                    style=\"background-color: #0082ca;\"
                    href=\"https://www.linkedin.com/in/heifara-buval-b1662914a/\"
                    role=\"button\"
            ><i class=\"fab fa-linkedin-in\"></i
                ></a>
            <!-- Github -->
            <a
                    class=\"btn btn-success btn-floating m-1 rounded-circle\"
                    style=\"background-color: #333333;\"
                    href=\"https://github.com/Heifarabuval\"
                    role=\"button\"
            ><i class=\"fab fa-github\"></i
                ></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class=\"text-center p-3 rounded\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
        © 2021 Copyright:
        <a class=\"text-white\" href=\"";
        // line 209
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz");
        echo "\">Quiz.com</a>
    </div>
    <!-- Copyright -->
</footer>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        ";
        // line 10
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "        ";
        // line 14
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_css"));

        // line 19
        echo "        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
              integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app/app.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome-free-5.15.3-web/css/fontawesome.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome-free-5.15.3-web/css/brands.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome-free-5.15.3-web/css/solid.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_head_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_js"));

        // line 30
        echo "        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
                integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
                integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
                integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
                crossorigin=\"anonymous\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 150
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 150,  452 => 30,  442 => 29,  430 => 27,  426 => 26,  421 => 24,  416 => 22,  411 => 19,  401 => 18,  391 => 14,  389 => 13,  379 => 12,  369 => 10,  367 => 9,  357 => 8,  338 => 5,  320 => 209,  288 => 180,  276 => 171,  264 => 162,  251 => 151,  249 => 150,  240 => 143,  228 => 134,  219 => 128,  211 => 123,  207 => 122,  200 => 117,  190 => 110,  178 => 101,  175 => 100,  173 => 99,  168 => 96,  165 => 91,  162 => 90,  156 => 89,  147 => 83,  144 => 82,  141 => 81,  136 => 80,  133 => 79,  124 => 73,  120 => 71,  118 => 70,  109 => 64,  90 => 48,  86 => 47,  77 => 40,  74 => 29,  72 => 18,  67 => 15,  65 => 12,  62 => 11,  59 => 8,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
    {% block stylesheets %}
        {# {{ encore_entry_link_tags('app') }} #}
    {% endblock %}

    {% block javascripts %}
        {# {{ encore_entry_script_tags('app') }} #}
    {% endblock %}



    {% block head_css %}
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
              integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/app/app.css') }}\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/fontawesome-free-5.15.3-web/css/fontawesome.css') }}\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/fontawesome-free-5.15.3-web/css/brands.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/fontawesome-free-5.15.3-web/css/solid.css') }}\">
    {% endblock %}
    {% block head_js %}
        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
                integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
                integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
                integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
                crossorigin=\"anonymous\"></script>
    {% endblock %}

</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark p-4\">
        <div class=\"navbar-collapse collapse  order-0 order-md-0 dual-collapse2\">

            <a class=\"navbar-brand\" href=\"{{ path('quiz') }}\"><img class=\"rounded-circle\" width=\"30%\"
                                                  src=\"{{ asset('images/logo.jpg') }}\" alt=\"Logo\"></a>

        </div>

        <div class=\"mx-order order-0 \">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\"
                    aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
        </div>


        <div class=\" mx-auto order-md-0 w-100 order-1 collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item \">
                    <a class=\"nav-link h4\" href=\"{{ path('quiz') }}\">
                        <i class=\"fa fa-question mr-1 fa-lg\" aria-hidden=\"true\"></i>Quiz
                        <span class=\"sr-only\">(current)</span>
                    </a>
                </li>

                {% if  app.user %}

                    <li class=\"nav-item \">
                        <a class=\"nav-link h4\" href=\"{{ path('add-quiz') }}\">
                            <i class=\"fas fa-plus-circle mr-1 fa-lg\"></i>Créer un quiz
                            <span class=\"sr-only\">(current)</span>
                        </a>
                    </li>
                {% endif %}
                {% if app.user.roles is defined %}
                    {% for role in app.user.roles %}
                        {% if role == 'ROLE_ADMIN' %}
                            <li class=\"nav-item \">
                                <a class=\"nav-link h4\" href=\"{{ path('admin') }}\">
                                    <i class=\"fas fa-users-cog fa-lg\"></i>Admin
                                    <span class=\"sr-only\">(current)</span>
                                </a>
                            </li>
                        {% endif %}
                    {% endfor %}
                {% endif %}
            </ul>
            {# <form class=\"form-inline my-2 my-lg-0\">
                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
                <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
            </form> #}
        </div>
        <div style=\"\" class=\"order-3\">
            <ul class=\"navbar-nav ml-auto\">
                {% if not app.user %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link h4\" href=\"{{ path('security_login') }}\">

                            <i class=\"fas fa-sign-in-alt mr-1 fa-lg text-success\" aria-hidden=\"true\"
                               data-toggle=\"tooltip\" data-placement=\"top\" title=\"Se connecter\"></i>
                            <span class=\"sr-only\">(current)</span>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link h4\" href=\"{{ path('security_registration') }}\">
                            <i class=\"fa fa-user-plus text-primary\" aria-hidden=\"true\"
                               data-toggle=\"tooltip\" data-placement=\"top\" title=\"S'inscrire\"></i>
                            <span class=\"sr-only\">(current)</span>
                        </a>
                    </li>
                {% else %}



                    <li style=\"z-index: 3000\" class=\"nav-item dropdown\">

                        <a class=\"nav-link dropdown-toggle h3 text-center\" id=\"navbarDropdownMenuLink\" href=\"{{ path('profile') }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-user-circle fa-lg\" aria-hidden=\"true\"></i>{{ app.user.username }}
                            <span class=\"sr-only\">(current)</span>

                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"nav-link h5 text-dark\" href=\"{{ path('profile') }}\">
                                <i class=\"fas fa-user-ninja  btn fa-lg\" aria-hidden=\"true\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Profile\"></i>
                                <span class=\"sr-only\">(current)</span>

                                Profile
                            </a>
                            <a class=\"nav-link h5 text-dark\" href=\"{{ path('security_logout') }}\">
                                <i class=\"fas fa-sign-out-alt btn fa-lg text-danger\" aria-hidden=\"true\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Se déconnecter\"></i>
                                <span class=\"sr-only\">(current)</span>
                                Logout
                            </a>

                        </div>
                    </li>
                {% endif %}


            </ul>
        </div>
    </nav>
</header>

{% block body %}{% endblock %}

<footer class=\"text-center text-white bg-dark mt-5 footer\">
    <!-- Grid container -->
    <div class=\"container p-4 pb-0\">
        <!-- Section: Social media -->
        <section class=\"mb-4\">

            <!-- Twitter -->
            <a
                    class=\"btn btn-success btn-floating m-1 rounded-circle\"
                    style=\"background-color: #55acee;\"
                    href=\"{{path('quiz')}}\"
                    role=\"button\"
            ><i class=\"fab fa-twitter\"></i
                ></a>

            <!-- Google -->
            <a
                    class=\"btn btn-success btn-floating m-1 rounded-circle\"
                    style=\"background-color: #dd4b39;\"
                    href=\"{{path('quiz')}}\"
                    role=\"button\"
            ><i class=\"fab fa-google\"></i
                ></a>

            <!-- Instagram -->
            <a
                    class=\"btn btn-success btn-floating m-1 rounded-circle\"
                    style=\"background-color: #ac2bac;\"
                    href=\"{{path('quiz')}}\"
                    role=\"button\"
            ><i class=\"fab fa-instagram\"></i
                ></a>

            <!-- Linkedin -->
            <a
                    class=\"btn btn-success btn-floating m-1 rounded-circle\"
                    style=\"background-color: #0082ca;\"
                    href=\"https://www.linkedin.com/in/heifara-buval-b1662914a/\"
                    role=\"button\"
            ><i class=\"fab fa-linkedin-in\"></i
                ></a>
            <!-- Github -->
            <a
                    class=\"btn btn-success btn-floating m-1 rounded-circle\"
                    style=\"background-color: #333333;\"
                    href=\"https://github.com/Heifarabuval\"
                    role=\"button\"
            ><i class=\"fab fa-github\"></i
                ></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class=\"text-center p-3 rounded\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
        © 2021 Copyright:
        <a class=\"text-white\" href=\"{{ path('quiz') }}\">Quiz.com</a>
    </div>
    <!-- Copyright -->
</footer>

</body>
</html>
", "base.html.twig", "/home/profchen/Documents/Epitech/Semestre2/PHP/MyQuiz/templates/base.html.twig");
    }
}
