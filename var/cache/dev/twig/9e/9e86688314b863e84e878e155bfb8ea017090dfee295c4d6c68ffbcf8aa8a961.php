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

/* profile/index.html.twig */
class __TwigTemplate_ce8c1fef0a08ada4003ba2a42a76b180b8ce3543a1e7a86875e6e4ad97a61dc7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Profile";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 9
                echo "            <div class=\"text-center alert alert-success\" role=\"alert\">
                ";
                // line 10
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
<div class=\"text-center container\">

    <div  class=\"jumbotron jumbotron-fluid bg-dark mt-5 rounded text-center\">
        <div style=\"justify-content: space-evenly\" class=\"container d-flex\" >

            <h1 class=\"text-light\">Bienvenue sur ton profil ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "username", [], "any", false, false, false, 21), "html", null, true);
        echo "  !</h1>
            ";
        // line 22
        if ( !twig_test_empty((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "            ";
            $context["i"] = 0;
            // line 24
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["his"]) {
                // line 25
                echo "                ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 25, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["his"], "score", [], "any", false, false, false, 25));
                // line 26
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['his'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            ";
            $context["l"] = twig_length_filter($this->env, (isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 27, $this->source); })()));
            // line 28
            echo "            ";
            $context["rank"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 28, $this->source); })()) / (isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 28, $this->source); })()));
            // line 29
            echo "                <span style=\"height: 3em;width: 3em;line-height: 3em\" class=\"fa-stack\">
                <i class=\"fas fa-star fa-3x   text-warning\" aria-hidden=\"true\">
                    <strong class=\"fa-stack-2x text-light\" style=\"z-index: 200;font-size: 40%;position: absolute;bottom: 20%; margin: 2px\"> ";
            // line 31
            echo twig_escape_filter($this->env, twig_round((isset($context["rank"]) || array_key_exists("rank", $context) ? $context["rank"] : (function () { throw new RuntimeError('Variable "rank" does not exist.', 31, $this->source); })())), "html", null, true);
            echo "</strong>
                </i>
                </span>
            ";
        }
        // line 35
        echo "
        </div>
    </div>
    <div class=\"container border border-primary rounded mt-5\">
        <h3 class=\"mt-3 mb-3 \">Modifier mes informations personnelles</h3>
        <div class=\"row p-4\">
            <div class=\"col\">
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start');
        echo "
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "username", [], "any", false, false, false, 43), 'row', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "username", [], "any", false, false, false, 43)]]);
        echo "
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'row', ["attr" => ["value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44)]]);
        echo "
                <button type=\"submit\" class=\"btn btn-success\">Modifier</button>
                ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
            </div>
            <div class=\"col\">
                <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_password");
        echo "\" class=\"btn btn-lg btn-warning\">
                    <span>Changer mon mot de passe</span>
                    <i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i>
                </a>
            </div>

        </div>


    </div>




<div class=\"container mt-5 p-3 \">
    <!-- Button to Open the Modal -->
    <button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
        Historique de jeu
    </button>
    <div class=\"row\">
        <div class=\"col\">
            <!-- The Modal -->
            <div class=\"modal\" id=\"myModal\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">

                        <!-- Modal Header -->
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class=\"modal-body\">
                            <table class=\"table\">
                                <thead>
                                <h1>Historique de jeu</h1>
                                <tr>
                                    <th scope=\"col\">Quiz</th>
                                    <th scope=\"col\">Score</th>
                                    <th scope=\"col\">Date</th>
                                </tr>
                                </thead>
                                <tbody>

                                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "histories", [], "any", false, false, false, 93));
        foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
            // line 94
            echo "                                    <tr>
                                        <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["history"], "quiz", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
                                        <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["history"], "score", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                                        <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["history"], "createdAt", [], "any", false, false, false, 97), "d/m/Y"), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
                                </tbody>
                            </table>
                        </div>

                        <!-- Modal footer -->
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 100,  257 => 97,  253 => 96,  249 => 95,  246 => 94,  242 => 93,  195 => 49,  189 => 46,  184 => 44,  180 => 43,  176 => 42,  167 => 35,  160 => 31,  156 => 29,  153 => 28,  150 => 27,  144 => 26,  141 => 25,  136 => 24,  133 => 23,  131 => 22,  127 => 21,  119 => 15,  113 => 14,  103 => 10,  100 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile{% endblock %}

{% block body %}

    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"text-center alert alert-success\" role=\"alert\">
                {{ message }}
            </div>

        {% endfor %}
    {% endfor %}

<div class=\"text-center container\">

    <div  class=\"jumbotron jumbotron-fluid bg-dark mt-5 rounded text-center\">
        <div style=\"justify-content: space-evenly\" class=\"container d-flex\" >

            <h1 class=\"text-light\">Bienvenue sur ton profil {{ user.username }}  !</h1>
            {% if history is not empty %}
            {% set i=0 %}
            {% for his in history %}
                {% set i=i+his.score %}
            {% endfor %}
            {%  set l= history | length %}
            {% set rank=i/l %}
                <span style=\"height: 3em;width: 3em;line-height: 3em\" class=\"fa-stack\">
                <i class=\"fas fa-star fa-3x   text-warning\" aria-hidden=\"true\">
                    <strong class=\"fa-stack-2x text-light\" style=\"z-index: 200;font-size: 40%;position: absolute;bottom: 20%; margin: 2px\"> {{ rank|round }}</strong>
                </i>
                </span>
            {% endif %}

        </div>
    </div>
    <div class=\"container border border-primary rounded mt-5\">
        <h3 class=\"mt-3 mb-3 \">Modifier mes informations personnelles</h3>
        <div class=\"row p-4\">
            <div class=\"col\">
                {{ form_start(form) }}
                {{ form_row(form.username,{'attr':{'value':user.username}}) }}
                {{ form_row(form.email,{'attr':{'value':user.email}}) }}
                <button type=\"submit\" class=\"btn btn-success\">Modifier</button>
                {{ form_end(form) }}
            </div>
            <div class=\"col\">
                <a href=\"{{ path('update_password') }}\" class=\"btn btn-lg btn-warning\">
                    <span>Changer mon mot de passe</span>
                    <i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i>
                </a>
            </div>

        </div>


    </div>




<div class=\"container mt-5 p-3 \">
    <!-- Button to Open the Modal -->
    <button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
        Historique de jeu
    </button>
    <div class=\"row\">
        <div class=\"col\">
            <!-- The Modal -->
            <div class=\"modal\" id=\"myModal\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">

                        <!-- Modal Header -->
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class=\"modal-body\">
                            <table class=\"table\">
                                <thead>
                                <h1>Historique de jeu</h1>
                                <tr>
                                    <th scope=\"col\">Quiz</th>
                                    <th scope=\"col\">Score</th>
                                    <th scope=\"col\">Date</th>
                                </tr>
                                </thead>
                                <tbody>

                                {% for history in user.histories %}
                                    <tr>
                                        <td>{{ history.quiz.name }}</td>
                                        <td>{{ history.score }}</td>
                                        <td>{{ history.createdAt | date('d/m/Y') }}</td>
                                    </tr>
                                {% endfor %}

                                </tbody>
                            </table>
                        </div>

                        <!-- Modal footer -->
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{% endblock %}
", "profile/index.html.twig", "/home/profchen/Documents/Epitech/Semestre2/PHP/MyQuiz/templates/profile/index.html.twig");
    }
}
