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

/* quiz/quiz.html.twig */
class __TwigTemplate_a8dc0e5b03f257e6ff930b1385b2ce1b89a60d5fac950d7ee2c9c3d4ed3dd9c1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/quiz.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/quiz.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quiz/quiz.html.twig", 1);
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

        echo " Quiz: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <div class=\"container-fluid\">

        <div style=\"background-color: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 8, $this->source); })()), "category", [], "any", false, false, false, 8), "color", [], "any", false, false, false, 8), "html", null, true);
        echo "\"  class=\"jumbotron jumbotron-fluid mt-5 rounded text-center\">
            <div  class=\"container d-flex justify-content-between\" >

                ";
        // line 11
        if ((array_key_exists("scoreRecorded", $context) &&  !(null === (isset($context["scoreRecorded"]) || array_key_exists("scoreRecorded", $context) ? $context["scoreRecorded"] : (function () { throw new RuntimeError('Variable "scoreRecorded" does not exist.', 11, $this->source); })())))) {
            // line 12
            echo "                    <div>
                        <h1 style=\"font-size: 3em;\" class=\"text-light custom-font\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</h1>
                        <h4 class=\"text-grey-custom\">Dernier score : ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["scoreRecorded"]) || array_key_exists("scoreRecorded", $context) ? $context["scoreRecorded"] : (function () { throw new RuntimeError('Variable "scoreRecorded" does not exist.', 14, $this->source); })()), "html", null, true);
            echo " %</h4>
                    </div>

                ";
        } else {
            // line 18
            echo "                    <div>
                        <h1 style=\"font-size: 3em;\" class=\"text-bold text-light custom-font\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</h1>
                    </div>

                ";
        }
        // line 23
        echo "                ";
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23))) {
            // line 24
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["cookies"] ?? null), "last_score", [], "any", true, true, false, 24)) {
                // line 25
                echo "                    <span style=\"height: 3em;width: 3em;line-height: 3em\" class=\"fa-stack\">
                <i class=\"fas fa-star fa-3x   text-warning\" aria-hidden=\"true\">
                    <strong class=\"fa-stack-2x text-light\" style=\"z-index: 200;font-size: 40%;position: absolute;bottom: 20%; margin: 2px\"> ";
                // line 27
                echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["cookies"]) || array_key_exists("cookies", $context) ? $context["cookies"] : (function () { throw new RuntimeError('Variable "cookies" does not exist.', 27, $this->source); })()), "last_score", [], "any", false, false, false, 27)), "html", null, true);
                echo "</strong>
                </i>
                </span>
                ";
            }
            // line 31
            echo "                ";
        } else {
            // line 32
            echo "
                ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, ($context["bestScore"] ?? null), "score", [], "any", true, true, false, 33)) {
                // line 34
                echo "                    <span style=\"height: 3em;width: 3em;line-height: 3em\" class=\"fa-stack\">
                <i class=\"fas fa-star fa-3x   text-warning\" aria-hidden=\"true\">
                    <strong class=\"fa-stack-2x text-light\" style=\"z-index: 200;font-size: 40%;position: absolute;bottom: 20%; margin: 2px\"> ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bestScore"]) || array_key_exists("bestScore", $context) ? $context["bestScore"] : (function () { throw new RuntimeError('Variable "bestScore" does not exist.', 36, $this->source); })()), "score", [], "any", false, false, false, 36), "html", null, true);
                echo "</strong>
                </i>
                </span>
                ";
            }
            // line 40
            echo "

                ";
        }
        // line 43
        echo "
            </div>
        </div>




        <form class=\"text-justify\" method=\"post\" action=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("start-quiz", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 50, $this->source); })()), "slug", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\">
            <div class=\"container \">
                <div class=\"row\">
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 53, $this->source); })()), "questions", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 54
            echo "
                <div class=\"col-12 text-justify p-3 rounded bg-light-custom m-2 p-1\">



                ";
            // line 59
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["question"], "status", [], "any", false, false, false, 59))) {
                // line 60
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["question"], "status", [], "any", false, false, false, 60) == "ok")) {
                    // line 61
                    echo "                    <h4 class=\"font-weight-bold text-success\"><i class=\"fa fa-check text-success\" aria-hidden=\"true\"></i>  ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 61), "html", null, true);
                    echo "</h4>
                ";
                } else {
                    // line 63
                    echo "                    <h4 class=\"font-weight-bold text-danger\"><i class=\"fa fa-times text-danger\" aria-hidden=\"true\"></i>  ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 63), "html", null, true);
                    echo "</h4>
                ";
                }
                // line 65
                echo "
                    ";
            } else {
                // line 67
                echo "                        <p class=\" h4 font-weight-bold custom-text-yellow text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 67), "html", null, true);
                echo "</p>
                ";
            }
            // line 69
            echo "                    <div class=\"mt-3\">



                ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "answers", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 74
                echo "                    <div class=\"form-check ml-5 mt-2\">
                        <input class=\"form-check-input\" required type=\"radio\" id=\"";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "id", [], "any", false, false, false, 75), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 75), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "expectedAnswerCrypt", [], "any", false, false, false, 75), "html", null, true);
                echo "\">
                        <label class=\"form-check-label h5 custom-text-blue-light\"  for=\"";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "id", [], "any", false, false, false, 76), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer", [], "any", false, false, false, 76), "html", null, true);
                echo "</label>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                    </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "            <div class=\"text-center m-4\">
                <button class=\"btn btn-lg btn-success\" type=\"submit\">Envoyer</button>
            </div>

                </div>

            </div>

        </form>


    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quiz/quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 83,  251 => 79,  240 => 76,  232 => 75,  229 => 74,  225 => 73,  219 => 69,  213 => 67,  209 => 65,  203 => 63,  197 => 61,  194 => 60,  192 => 59,  185 => 54,  181 => 53,  175 => 50,  166 => 43,  161 => 40,  154 => 36,  150 => 34,  148 => 33,  145 => 32,  142 => 31,  135 => 27,  131 => 25,  128 => 24,  125 => 23,  118 => 19,  115 => 18,  108 => 14,  104 => 13,  101 => 12,  99 => 11,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Quiz: {{ quiz.name }}{% endblock %}

{% block body %}
    <div class=\"container-fluid\">

        <div style=\"background-color: {{ quiz.category.color }}\"  class=\"jumbotron jumbotron-fluid mt-5 rounded text-center\">
            <div  class=\"container d-flex justify-content-between\" >

                {% if scoreRecorded is defined and  scoreRecorded is not null%}
                    <div>
                        <h1 style=\"font-size: 3em;\" class=\"text-light custom-font\">{{ quiz.name }}</h1>
                        <h4 class=\"text-grey-custom\">Dernier score : {{ scoreRecorded }} %</h4>
                    </div>

                {% else %}
                    <div>
                        <h1 style=\"font-size: 3em;\" class=\"text-bold text-light custom-font\">{{ quiz.name }}</h1>
                    </div>

                {% endif %}
                {% if app.user is  null %}
                {% if cookies.last_score is defined %}
                    <span style=\"height: 3em;width: 3em;line-height: 3em\" class=\"fa-stack\">
                <i class=\"fas fa-star fa-3x   text-warning\" aria-hidden=\"true\">
                    <strong class=\"fa-stack-2x text-light\" style=\"z-index: 200;font-size: 40%;position: absolute;bottom: 20%; margin: 2px\"> {{ cookies.last_score | round }}</strong>
                </i>
                </span>
                {% endif %}
                {% else %}

                {% if bestScore.score is defined %}
                    <span style=\"height: 3em;width: 3em;line-height: 3em\" class=\"fa-stack\">
                <i class=\"fas fa-star fa-3x   text-warning\" aria-hidden=\"true\">
                    <strong class=\"fa-stack-2x text-light\" style=\"z-index: 200;font-size: 40%;position: absolute;bottom: 20%; margin: 2px\"> {{ bestScore.score }}</strong>
                </i>
                </span>
                {% endif %}


                {% endif %}

            </div>
        </div>




        <form class=\"text-justify\" method=\"post\" action=\"{{ path('start-quiz',{'slug': quiz.slug}) }}\">
            <div class=\"container \">
                <div class=\"row\">
        {% for question in quiz.questions %}

                <div class=\"col-12 text-justify p-3 rounded bg-light-custom m-2 p-1\">



                {% if  question.status is not null  %}
                {% if question.status=='ok' %}
                    <h4 class=\"font-weight-bold text-success\"><i class=\"fa fa-check text-success\" aria-hidden=\"true\"></i>  {{ question.question }}</h4>
                {% else %}
                    <h4 class=\"font-weight-bold text-danger\"><i class=\"fa fa-times text-danger\" aria-hidden=\"true\"></i>  {{ question.question }}</h4>
                {% endif %}

                    {% else %}
                        <p class=\" h4 font-weight-bold custom-text-yellow text-center\">{{ question.question }}</p>
                {% endif %}
                    <div class=\"mt-3\">



                {% for answer in question.answers %}
                    <div class=\"form-check ml-5 mt-2\">
                        <input class=\"form-check-input\" required type=\"radio\" id=\"{{ answer.id }}\" name=\"{{ question.id }}\" value=\"{{ answer.expectedAnswerCrypt }}\">
                        <label class=\"form-check-label h5 custom-text-blue-light\"  for=\"{{ answer.id }}\">{{ answer.answer }}</label>
                    </div>
                {% endfor %}
                    </div>
            </div>

        {% endfor %}
            <div class=\"text-center m-4\">
                <button class=\"btn btn-lg btn-success\" type=\"submit\">Envoyer</button>
            </div>

                </div>

            </div>

        </form>


    </div>
{% endblock %}", "quiz/quiz.html.twig", "/home/profchen/Documents/Epitech/Semestre2/PHP/MyQuiz/templates/quiz/quiz.html.twig");
    }
}
