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

/* add_quiz/index.html.twig */
class __TwigTemplate_82f5618006448f3011e5d7345adbf02839c65c95f638c9b36c350516c2dd3d66 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add_quiz/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add_quiz/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "add_quiz/index.html.twig", 1);
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

        echo "Créer un nouveau quiz";
        
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
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                echo "            <div class=\"text-center alert alert-success\" role=\"alert\">
                ";
                // line 11
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "



    <div class=\"text-center container\">
        <div class=\"jumbotron jumbotron-fluid bg-dark mt-5 rounded text-center\">
            <div style=\"justify-content: space-evenly\" class=\"container d-flex\">
                <h1 class=\"text-light\">Créer un quiz</h1>

            </div>
        </div>
        <div class=\"container rounded mt-5 p-3\">
            <form action=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-quiz");
        echo "\" method=\"post\">
                <div class=\"p-3 border rounded\">
                    <h2 class=\"mt-2 p-2 text-light bg-dark\">Informations principales</h2>
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), 'row', ["label" => "Titre du quiz"]);
        echo "
                   ";
        // line 36
        echo "                    <div class=\"form-group\">
                        <label for=\"category\">Categorie</label>
                        <select class=\"form-control\" id=\"category\" name=\"category\">
                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 40
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 40), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        </select>
                    </div>
                </div>
                <div class=\"mt-5 p-3 border rounded \">
                    <h3 class=\"mt-2 p-2 text-light bg-dark\">Questions & Réponses</h3>
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 48
            echo "                    <div class=\"form-group mx-auto mt-5\">
                        <label for=\"question-";
            // line 49
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" class=\"h4\">Question ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo " </label>
                        <input class=\"form-control\" id=\"question-";
            // line 50
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" type=\"text\" name=\"question-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" required>
                        <div class=\"container mt-5\">
                            <div class=\"row  pb-3 \">
                                <div class=\"col-12 m-2\">
                                    <label for=\"question-";
            // line 54
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "/answer-1\">Bonne réponse </label>
                                    <input style=\"background-color: rgba(50,251,15,0.16)\" class=\"form-control\" id=\"question-";
            // line 55
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "/answer-1\" type=\"text\" name=\"question-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "/answer-1\" required>
                                </div>
                                <div class=\"col-6\">
                                    <label for=\"question-";
            // line 58
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "/answer-2\">Réponse 2 </label>
                                    <input class=\"form-control\" id=\"question-";
            // line 59
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "/answer-2\" type=\"text\" name=\"question-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "/answer-2\" required>
                                </div>
                                <div class=\"col-6\">
                                    <label for=\"question-";
            // line 62
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "/answer-3\">Réponse 3 </label>
                                    <input class=\"form-control\" id=\"question-";
            // line 63
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "//answer-3\" type=\"text\" name=\"question-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "/answer-3\" required>
                                </div>
                            </div>
                        </div>
                    </div>
                        <br>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
                </div>


                <button type=\"submit\" class=\" mt-4 btn btn-success btn-lg\">Créer !</button>
            </form>


        </div>


    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "add_quiz/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 70,  221 => 63,  217 => 62,  209 => 59,  205 => 58,  197 => 55,  193 => 54,  184 => 50,  178 => 49,  175 => 48,  171 => 47,  164 => 42,  153 => 40,  149 => 39,  144 => 36,  140 => 31,  134 => 28,  120 => 16,  114 => 15,  104 => 11,  101 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un nouveau quiz{% endblock %}

{% block body %}


    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"text-center alert alert-success\" role=\"alert\">
                {{ message }}
            </div>

        {% endfor %}
    {% endfor %}




    <div class=\"text-center container\">
        <div class=\"jumbotron jumbotron-fluid bg-dark mt-5 rounded text-center\">
            <div style=\"justify-content: space-evenly\" class=\"container d-flex\">
                <h1 class=\"text-light\">Créer un quiz</h1>

            </div>
        </div>
        <div class=\"container rounded mt-5 p-3\">
            <form action=\"{{ path('add-quiz') }}\" method=\"post\">
                <div class=\"p-3 border rounded\">
                    <h2 class=\"mt-2 p-2 text-light bg-dark\">Informations principales</h2>
                    {{ form_row(form.name,{ 'label': 'Titre du quiz' }) }}
                   {# <div class=\"form-group\">
                        <label for=\"title\">Titre du quiz</label>
                        <input class=\"form-control\" id=\"title\" type=\"text\" name=\"title\" required>
                    </div>#}
                    <div class=\"form-group\">
                        <label for=\"category\">Categorie</label>
                        <select class=\"form-control\" id=\"category\" name=\"category\">
                            {% for category in categories %}
                                <option value=\"{{ category.id }}\">{{ category.category }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"mt-5 p-3 border rounded \">
                    <h3 class=\"mt-2 p-2 text-light bg-dark\">Questions & Réponses</h3>
                    {% for i in 1..10 %}
                    <div class=\"form-group mx-auto mt-5\">
                        <label for=\"question-{{ i }}\" class=\"h4\">Question {{ i}} </label>
                        <input class=\"form-control\" id=\"question-{{ i }}\" type=\"text\" name=\"question-{{ i }}\" required>
                        <div class=\"container mt-5\">
                            <div class=\"row  pb-3 \">
                                <div class=\"col-12 m-2\">
                                    <label for=\"question-{{ i }}/answer-1\">Bonne réponse </label>
                                    <input style=\"background-color: rgba(50,251,15,0.16)\" class=\"form-control\" id=\"question-{{ i }}/answer-1\" type=\"text\" name=\"question-{{ i }}/answer-1\" required>
                                </div>
                                <div class=\"col-6\">
                                    <label for=\"question-{{ i }}/answer-2\">Réponse 2 </label>
                                    <input class=\"form-control\" id=\"question-{{ i }}/answer-2\" type=\"text\" name=\"question-{{ i }}/answer-2\" required>
                                </div>
                                <div class=\"col-6\">
                                    <label for=\"question-{{ i }}/answer-3\">Réponse 3 </label>
                                    <input class=\"form-control\" id=\"question-{{ i }}//answer-3\" type=\"text\" name=\"question-{{ i }}/answer-3\" required>
                                </div>
                            </div>
                        </div>
                    </div>
                        <br>
                    {% endfor %}

                </div>


                <button type=\"submit\" class=\" mt-4 btn btn-success btn-lg\">Créer !</button>
            </form>


        </div>


    </div>
{% endblock %}
", "add_quiz/index.html.twig", "/home/profchen/Documents/Epitech/Semestre2/PHP/MyQuiz/templates/add_quiz/index.html.twig");
    }
}
