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

/* category/index.html.twig */
class __TwigTemplate_2cdbc5f8cc58192d3475b2813c9fd313c4d6e1562aa2241114bc45c47f629286 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'middle' => [$this, 'block_middle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "quiz/template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("quiz/template.html.twig", "category/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_middle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "middle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "middle"));

        // line 4
        echo "
           ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 5, $this->source); })()), "quizzs", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5) == 0)) {
            // line 6
            echo "               <ol class=\"list-group list-group-numbered  sticky-top\">
                   <li style=\"background-color: ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 7, $this->source); })()), "color", [], "any", false, false, false, 7), "html", null, true);
            echo "\" class=\"h3 list-group-item d-flex justify-content-between align-items-start text-light\">
                       Quizs de la catégorie ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 8, $this->source); })()), "category", [], "any", false, false, false, 8), "html", null, true);
            echo "</li>

                   <li class=\"list-group-item d-flex justify-content-between align-items-start\" >
                       <div class=\"h5 ms-2 me-auto\">Aucun quizz dans cette catégorie pour le moment..
                       </div>
                   </li>

               </ol>
           ";
        } else {
            // line 17
            echo "               <ol class=\"list-group list-group-numbered  sticky-top\">
                   <li style=\"background-color: ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 18, $this->source); })()), "color", [], "any", false, false, false, 18), "html", null, true);
            echo "\" class=\"h3 list-group-item d-flex justify-content-between align-items-start text-light\">
                       Quizs de la catégorie ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 19, $this->source); })()), "category", [], "any", false, false, false, 19), "html", null, true);
            echo "</li>
                   ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
                // line 21
                echo "                       <li class=\"list-group-item d-flex justify-content-between align-items-start custom-li\">
                           <div class=\"w-100 d-flex justify-content-between\">
                               <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("start-quiz", ["slug" => twig_get_attribute($this->env, $this->source, $context["quiz"], "slug", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\" class=\"fw-bold h5 custom-a-yellow\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "name", [], "any", false, false, false, 23), "html", null, true);
                echo "</a>
                               <a style=\"color: ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 24, $this->source); })()), "color", [], "any", false, false, false, 24), "html", null, true);
                echo "\" class=\"custom-a-yellow\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["quiz"], "category", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]), "html", null, true);
                echo "\">
                                   <i  class=\"";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["quiz"], "category", [], "any", false, false, false, 25), "icon", [], "any", false, false, false, 25), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                                   ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["quiz"], "category", [], "any", false, false, false, 26), "category", [], "any", false, false, false, 26), "html", null, true);
                echo "</a>
                           </div>

                       </li>


                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
                   ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, (isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 34, $this->source); })()), "totalItemCount", [], "any", false, false, false, 34) > twig_get_attribute($this->env, $this->source, (isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 34, $this->source); })()), "itemNumberPerPage", [], "any", false, false, false, 34))) {
                // line 35
                echo "                   <li class=\"list-group-item custom-li\">
                       <div style=\"display: ruby\">
                           ";
                // line 37
                echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 37, $this->source); })()));
                echo "
                       </div>
                   </li>
               </ol>
               ";
            }
            // line 42
            echo "

           ";
        }
        // line 45
        echo "


       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 45,  157 => 42,  149 => 37,  145 => 35,  143 => 34,  140 => 33,  127 => 26,  123 => 25,  117 => 24,  111 => 23,  107 => 21,  103 => 20,  99 => 19,  95 => 18,  92 => 17,  80 => 8,  76 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'quiz/template.html.twig' %}

       {% block middle %}

           {% if category.quizzs.count==0 %}
               <ol class=\"list-group list-group-numbered  sticky-top\">
                   <li style=\"background-color: {{ category.color }}\" class=\"h3 list-group-item d-flex justify-content-between align-items-start text-light\">
                       Quizs de la catégorie {{ category.category }}</li>

                   <li class=\"list-group-item d-flex justify-content-between align-items-start\" >
                       <div class=\"h5 ms-2 me-auto\">Aucun quizz dans cette catégorie pour le moment..
                       </div>
                   </li>

               </ol>
           {% else %}
               <ol class=\"list-group list-group-numbered  sticky-top\">
                   <li style=\"background-color: {{ category.color }}\" class=\"h3 list-group-item d-flex justify-content-between align-items-start text-light\">
                       Quizs de la catégorie {{ category.category }}</li>
                   {% for quiz in quizs %}
                       <li class=\"list-group-item d-flex justify-content-between align-items-start custom-li\">
                           <div class=\"w-100 d-flex justify-content-between\">
                               <a href=\"{{ path('start-quiz',{'slug': quiz.slug}) }}\" class=\"fw-bold h5 custom-a-yellow\">{{ quiz.name }}</a>
                               <a style=\"color: {{ category.color }}\" class=\"custom-a-yellow\" href=\"{{ path('category',{'slug': quiz.category.id}) }}\">
                                   <i  class=\"{{ quiz.category.icon }}\" aria-hidden=\"true\"></i>
                                   {{ quiz.category.category }}</a>
                           </div>

                       </li>


                   {% endfor %}

                   {% if quizs.totalItemCount>quizs.itemNumberPerPage %}
                   <li class=\"list-group-item custom-li\">
                       <div style=\"display: ruby\">
                           {{ knp_pagination_render(quizs) }}
                       </div>
                   </li>
               </ol>
               {% endif %}


           {% endif %}



       {% endblock %}
", "category/index.html.twig", "/home/profchen/Documents/Epitech/Semestre2/PHP/MyQuiz/templates/category/index.html.twig");
    }
}
