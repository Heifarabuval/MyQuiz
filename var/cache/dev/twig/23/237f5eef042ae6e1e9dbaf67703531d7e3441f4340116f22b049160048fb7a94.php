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

/* quiz/index.html.twig */
class __TwigTemplate_ada38fb24614215c31c8decd7baddaa30e036de455c0183dd2a2674554ac0b9c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/index.html.twig"));

        $this->parent = $this->loadTemplate("quiz/template.html.twig", "quiz/index.html.twig", 1);
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
           <ol class=\"list-group list-group-numbered  sticky-top\">
               <li class=\"h3 list-group-item d-flex justify-content-between align-items-start bg-yellow-2 text-light\">
                   Quizs
               </li>
               ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 10
            echo "
                   <li class=\"list-group-item d-flex justify-content-between align-items-start custom-li\">
                       <div class=\"w-100 d-flex justify-content-between\">
                           <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("start-quiz", ["slug" => twig_get_attribute($this->env, $this->source, $context["quiz"], "slug", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\"
                              class=\"fw-bold h5 custom-a-yellow\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</a>
                           <a style=\"color: ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["quiz"], "category", [], "any", false, false, false, 15), "color", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"anchors\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["quiz"], "category", [], "any", false, false, false, 15), "slug", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">
                               <i  class=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["quiz"], "category", [], "any", false, false, false, 16), "icon", [], "any", false, false, false, 16), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
                               ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["quiz"], "category", [], "any", false, false, false, 17), "category", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>
                       </div>
                   </li>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "               <li class=\"list-group-item \">
                   <div class=\"d-flex justify-content-center\">
                       ";
        // line 23
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 23, $this->source); })()));
        echo "
                   </div>
               </li>
           </ol>

       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quiz/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 23,  112 => 21,  102 => 17,  98 => 16,  92 => 15,  88 => 14,  84 => 13,  79 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'quiz/template.html.twig' %}

       {% block middle %}

           <ol class=\"list-group list-group-numbered  sticky-top\">
               <li class=\"h3 list-group-item d-flex justify-content-between align-items-start bg-yellow-2 text-light\">
                   Quizs
               </li>
               {% for quiz in quizs %}

                   <li class=\"list-group-item d-flex justify-content-between align-items-start custom-li\">
                       <div class=\"w-100 d-flex justify-content-between\">
                           <a href=\"{{ path('start-quiz',{'slug': quiz.slug}) }}\"
                              class=\"fw-bold h5 custom-a-yellow\">{{ quiz.name }}</a>
                           <a style=\"color: {{ quiz.category.color }}\" class=\"anchors\" href=\"{{ path('category',{'slug': quiz.category.slug}) }}\">
                               <i  class=\"{{ quiz.category.icon }}\" aria-hidden=\"true\"></i>
                               {{ quiz.category.category }}</a>
                       </div>
                   </li>
               {% endfor %}
               <li class=\"list-group-item \">
                   <div class=\"d-flex justify-content-center\">
                       {{ knp_pagination_render(quizs) }}
                   </div>
               </li>
           </ol>

       {% endblock %}
", "quiz/index.html.twig", "/home/profchen/Documents/Epitech/Semestre2/PHP/MyQuiz/templates/quiz/index.html.twig");
    }
}
