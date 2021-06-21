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

/* quiz/template.html.twig */
class __TwigTemplate_a0b936559c7122744f47573db42bd14e1acd4459399d06889a3c625cca6c747f extends Template
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
            'middle' => [$this, 'block_middle'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/template.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/template.html.twig", 1);
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

        echo "Quiz";
        
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

    <i class=\"fa fa-star-o fa-3x   text-warning\" aria-hidden=\"true\"></i>
    <div class=\"container-fluid text-center\">

        <div class=\"row\">
            <div class=\"col-5 col-lg-3 mt-4\">
                <ol class=\"list-group list-group-numbered\">
                    <li class=\"h3 list-group-item d-flex justify-content-between align-items-start bg-yellow-1 text-light\">
                        Catégories
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-start custom-li\">
                        <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz");
        echo "\"
                           class=\"fw-bold h5 ms-2 me-auto w-100 custom-a-yellow\">
                            Tous</a>
                        <span style=\"background-color: #cb7905\"
                              class=\" h5 p-2 badge text-light rounded-pill\">";
        // line 22
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 22, $this->source); })())), "html", null, true);
        echo "</span>
                    </li>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 25
            echo "                        <li class=\"list-group-item d-flex justify-content-between align-items-start custom-li\">
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\"
                               class=\"fw-bold h5 ms-2 me-auto w-100 custom-a-yellow\">
                                ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 28), "html", null, true);
            echo "</a>
                            <span style=\"background-color: ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 29), "html", null, true);
            echo "\"
                                  class=\" h5 p-2 badge text-light rounded-pill\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "quizzs", [], "any", false, false, false, 30), "count", [], "any", false, false, false, 30), "html", null, true);
            echo "</span>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </ol>
            </div>
            <div class=\"col-7 col-lg-6 mt-4\">
                ";
        // line 36
        $this->displayBlock('middle', $context, $blocks);
        // line 39
        echo "            </div>
            <div class=\"col-lg-3 mt-4\">
                ";
        // line 41
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41))) {
            // line 42
            echo "
                    ";
            // line 43
            $context["i"] = 0;
            // line 44
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["his"]) {
                // line 45
                echo "                        ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 45, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["his"], "score", [], "any", false, false, false, 45));
                // line 46
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['his'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                    ";
            $context["l"] = twig_length_filter($this->env, (isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 47, $this->source); })()));
            // line 48
            echo "                    ";
            $context["rank"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 48, $this->source); })()) / (isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 48, $this->source); })()));
            // line 49
            echo "                ";
        } else {
            // line 50
            echo "
                    ";
            // line 51
            $context["i"] = 0;
            // line 52
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["his"]) {
                // line 53
                echo "                        ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 53, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["his"], "score", [], "any", false, false, false, 53));
                // line 54
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['his'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                    ";
            $context["l"] = twig_length_filter($this->env, (isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 55, $this->source); })()));
            // line 56
            echo "                    ";
            $context["rank"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 56, $this->source); })()) / (isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 56, $this->source); })()));
            // line 57
            echo "

                ";
        }
        // line 60
        echo "                <ul class=\"list-group  sticky-top\">
                    <li class=\" list-group-item d-flex justify-content-between align-items-start bg-blue-1 text-light\">
                        <span class=\"h3\"> Rang</span>
                        <span style=\"height: 3em;width: 3em;line-height: 3em\" class=\"fa-stack\">
                                 <i class=\"fas fa-star fa-3x   text-warning\" aria-hidden=\"true\">
                                     <strong class=\"fa-stack-2x text-light\"
                                             style=\"z-index: 200;font-size: 40%;position: absolute;bottom: 20%; margin: 2px\"> ";
        // line 66
        echo twig_escape_filter($this->env, twig_round((isset($context["rank"]) || array_key_exists("rank", $context) ? $context["rank"] : (function () { throw new RuntimeError('Variable "rank" does not exist.', 66, $this->source); })())), "html", null, true);
        echo "</strong>
                                 </i>
                                </span>
                    </li>
                    <li class=\" list-group-item d-flex justify-content-between align-items-start bg-blue-1 text-light\">
                        <span class=\"font-weight-bold\"> Vos dernières 10 parties </span>
                    </li>
                    ";
        // line 73
        $context["i"] = 0;
        // line 74
        echo "                    ";
        if (twig_test_iterable((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 74, $this->source); })()))) {
            // line 75
            echo "
                        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 76, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 77
                echo "                            ";
                if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 77, $this->source); })()) < 10)) {
                    // line 78
                    echo "                                <li class=\"list-group-item d-flex justify-content-between align-items-start custom-li\">

                                    <a href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("start-quiz", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "quiz", [], "any", false, false, false, 80), "slug", [], "any", false, false, false, 80)]), "html", null, true);
                    echo "\"
                                       class=\"h5 ms-2 me-auto w-100 custom-a-yellow\">
                                        ";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "quiz", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
                    echo "
                                    </a>

                                    <span class=\"p-2 badge bg-warning text-light rounded-pill\">";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "score", [], "any", false, false, false, 85), "html", null, true);
                    echo "</span>
                                </li>
                            ";
                }
                // line 88
                echo "                            ";
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 88, $this->source); })()) + 1);
                // line 89
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                    ";
        }
        // line 91
        echo "                </ul>


            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_middle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "middle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "middle"));

        // line 37
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quiz/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 37,  298 => 36,  281 => 91,  278 => 90,  272 => 89,  269 => 88,  263 => 85,  257 => 82,  252 => 80,  248 => 78,  245 => 77,  241 => 76,  238 => 75,  235 => 74,  233 => 73,  223 => 66,  215 => 60,  210 => 57,  207 => 56,  204 => 55,  198 => 54,  195 => 53,  190 => 52,  188 => 51,  185 => 50,  182 => 49,  179 => 48,  176 => 47,  170 => 46,  167 => 45,  162 => 44,  160 => 43,  157 => 42,  155 => 41,  151 => 39,  149 => 36,  144 => 33,  135 => 30,  131 => 29,  127 => 28,  122 => 26,  119 => 25,  115 => 24,  110 => 22,  103 => 18,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quiz{% endblock %}

{% block body %}


    <i class=\"fa fa-star-o fa-3x   text-warning\" aria-hidden=\"true\"></i>
    <div class=\"container-fluid text-center\">

        <div class=\"row\">
            <div class=\"col-5 col-lg-3 mt-4\">
                <ol class=\"list-group list-group-numbered\">
                    <li class=\"h3 list-group-item d-flex justify-content-between align-items-start bg-yellow-1 text-light\">
                        Catégories
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-start custom-li\">
                        <a href=\"{{ path('quiz') }}\"
                           class=\"fw-bold h5 ms-2 me-auto w-100 custom-a-yellow\">
                            Tous</a>
                        <span style=\"background-color: #cb7905\"
                              class=\" h5 p-2 badge text-light rounded-pill\">{{ categories |length }}</span>
                    </li>
                    {% for category in categories %}
                        <li class=\"list-group-item d-flex justify-content-between align-items-start custom-li\">
                            <a href=\"{{ path('category',{'slug': category.slug}) }}\"
                               class=\"fw-bold h5 ms-2 me-auto w-100 custom-a-yellow\">
                                {{ category.category }}</a>
                            <span style=\"background-color: {{ category.color }}\"
                                  class=\" h5 p-2 badge text-light rounded-pill\">{{ category.quizzs.count }}</span>
                        </li>
                    {% endfor %}
                </ol>
            </div>
            <div class=\"col-7 col-lg-6 mt-4\">
                {% block middle %}

                {% endblock %}
            </div>
            <div class=\"col-lg-3 mt-4\">
                {% if app.user is  empty %}

                    {% set i=0 %}
                    {% for his in history %}
                        {% set i=i+his.score %}
                    {% endfor %}
                    {% set l= history | length %}
                    {% set rank=i/l %}
                {% else %}

                    {% set i=0 %}
                    {% for his in history %}
                        {% set i=i+his.score %}
                    {% endfor %}
                    {% set l= history | length %}
                    {% set rank=i/l %}


                {% endif %}
                <ul class=\"list-group  sticky-top\">
                    <li class=\" list-group-item d-flex justify-content-between align-items-start bg-blue-1 text-light\">
                        <span class=\"h3\"> Rang</span>
                        <span style=\"height: 3em;width: 3em;line-height: 3em\" class=\"fa-stack\">
                                 <i class=\"fas fa-star fa-3x   text-warning\" aria-hidden=\"true\">
                                     <strong class=\"fa-stack-2x text-light\"
                                             style=\"z-index: 200;font-size: 40%;position: absolute;bottom: 20%; margin: 2px\"> {{ rank|round }}</strong>
                                 </i>
                                </span>
                    </li>
                    <li class=\" list-group-item d-flex justify-content-between align-items-start bg-blue-1 text-light\">
                        <span class=\"font-weight-bold\"> Vos dernières 10 parties </span>
                    </li>
                    {% set i=0 %}
                    {% if history is iterable %}

                        {% for item in history %}
                            {% if i<10 %}
                                <li class=\"list-group-item d-flex justify-content-between align-items-start custom-li\">

                                    <a href=\"{{ path('start-quiz',{'slug': item.quiz.slug}) }}\"
                                       class=\"h5 ms-2 me-auto w-100 custom-a-yellow\">
                                        {{ item.quiz.name }}
                                    </a>

                                    <span class=\"p-2 badge bg-warning text-light rounded-pill\">{{ item.score }}</span>
                                </li>
                            {% endif %}
                            {% set i=i+1 %}
                        {% endfor %}
                    {% endif %}
                </ul>


            </div>

        </div>
    </div>
{% endblock %}
", "quiz/template.html.twig", "/home/profchen/Documents/Epitech/Semestre2/PHP/MyQuiz/templates/quiz/template.html.twig");
    }
}
