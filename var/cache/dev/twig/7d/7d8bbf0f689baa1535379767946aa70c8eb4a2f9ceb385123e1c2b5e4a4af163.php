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

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_11e949f2921725f8c7c484324ff657587494e4a42b6a1bcdc94196af5d97e51e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@EasyAdmin/crud/form_theme.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_widget' => [$this, 'block_collection_entry_widget'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_section_row' => [$this, 'block_ea_section_row'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/form_theme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/form_theme.html.twig"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('form_start', $context, $blocks);
        // line 13
        echo "
";
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('date_widget', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('time_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('file_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('form_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('collection_row', $context, $blocks);
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('collection_entry_widget', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('button_row', $context, $blocks);
        // line 159
        echo "
";
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 206
        echo "
";
        // line 207
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 212
        echo "
";
        // line 213
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 257
        echo "
";
        // line 258
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 262
        echo "
";
        // line 263
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('ea_crud_rest', $context, $blocks);
        // line 321
        echo "
";
        // line 323
        $this->displayBlock('ea_crud_widget', $context, $blocks);
        // line 363
        echo "
";
        // line 364
        $this->displayBlock('ea_crud_widget_panels', $context, $blocks);
        // line 414
        echo "
";
        // line 416
        $this->displayBlock('ea_autocomplete_widget', $context, $blocks);
        // line 419
        echo "
";
        // line 420
        $this->displayBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 424
        echo "
";
        // line 426
        $this->displayBlock('ea_code_editor_widget', $context, $blocks);
        // line 443
        echo "
";
        // line 445
        $this->displayBlock('ea_text_editor_widget', $context, $blocks);
        // line 463
        echo "
";
        // line 465
        $this->displayBlock('ea_section_row', $context, $blocks);
        // line 477
        echo "
";
        // line 479
        $this->displayBlock('ea_filters_widget', $context, $blocks);
        // line 528
        echo "
";
        // line 529
        $this->displayBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 545
        echo "
";
        // line 546
        $this->displayBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 549
        echo "
";
        // line 550
        $this->displayBlock('ea_fileupload_widget', $context, $blocks);
        // line 611
        echo "
";
        // line 612
        $this->displayBlock('ea_slug_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 5
        echo "    ";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)) > 0) && twig_in_filter("ea_crud", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", false, false, false, 5), [])) : ([]))))) {
            // line 6
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'errors');
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "

    <input type=\"hidden\" name=\"referrer\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", [0 => "referrer"], "method", false, false, false, 11), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 17
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 17, $this->source); })()), [0 => "file", 1 => "hidden"]))) {
            // line 18
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 18, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 18), "")) : ("")))]);
        }
        // line 20
        if ((array_key_exists("type", $context) && (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 20, $this->source); })()) == "range") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 20, $this->source); })()) == "color")))) {
            // line 21
            echo "        ";
            // line 22
            $context["required"] = false;
        }
        // line 24
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 28
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 29
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 30
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 34
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 35
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 36
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        // line 40
        if (((array_key_exists("vich", $context)) ? (_twig_default_filter((isset($context["vich"]) || array_key_exists("vich", $context) ? $context["vich"] : (function () { throw new RuntimeError('Variable "vich" does not exist.', 40, $this->source); })()), false)) : (false))) {
            // line 41
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 41, $this->source); })()), "file")) : ("file"));
            // line 42
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 44
            $this->displayParentBlock("file_widget", $context, $blocks);
            // line 46
            echo "<script>
            document.querySelector('#";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "').addEventListener('change', function() {
                const fileName = this.value.replace('C:\\\\fakepath\\\\', '');
                const customInputFileLabel = document.querySelector('#";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })()), "html", null, true);
            echo " ~ .custom-file-label');
                customInputFileLabel.classList.add('selected');
                customInputFileLabel.innerHTML = fileName;
            });
        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 60
        echo "    ";
        $context["row_attr"] = twig_array_merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 60, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 61
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 61), "")) : ("")) . " form-group")]);
        // line 63
        echo "
    <div ";
        // line 64
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["attr" => (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 64, $this->source); })())];
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 64, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        echo ">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'label');
        // line 66
        echo "<div class=\"form-widget\">
            ";
        // line 67
        $context["has_prepend_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 67), "prepend_html", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 67), "prepend_html", [], "any", false, false, false, 67), null)) : (null)));
        // line 68
        echo "            ";
        $context["has_append_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 68), "append_html", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 68), "append_html", [], "any", false, false, false, 68), null)) : (null)));
        // line 69
        echo "            ";
        $context["has_input_groups"] = ((isset($context["has_prepend_html"]) || array_key_exists("has_prepend_html", $context) ? $context["has_prepend_html"] : (function () { throw new RuntimeError('Variable "has_prepend_html" does not exist.', 69, $this->source); })()) || (isset($context["has_append_html"]) || array_key_exists("has_append_html", $context) ? $context["has_append_html"] : (function () { throw new RuntimeError('Variable "has_append_html" does not exist.', 69, $this->source); })()));
        // line 70
        echo "
            ";
        // line 71
        if ((isset($context["has_input_groups"]) || array_key_exists("has_input_groups", $context) ? $context["has_input_groups"] : (function () { throw new RuntimeError('Variable "has_input_groups" does not exist.', 71, $this->source); })())) {
            echo "<div class=\"input-group\">";
        }
        // line 72
        echo "                ";
        if ((isset($context["has_prepend_html"]) || array_key_exists("has_prepend_html", $context) ? $context["has_prepend_html"] : (function () { throw new RuntimeError('Variable "has_prepend_html" does not exist.', 72, $this->source); })())) {
            // line 73
            echo "                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">";
            // line 74
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 74, $this->source); })()), "field", [], "any", false, false, false, 74), "prepend_html", [], "any", false, false, false, 74);
            echo "</span>
                    </div>
                ";
        }
        // line 77
        echo "
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'widget');
        echo "

                ";
        // line 80
        if ((isset($context["has_append_html"]) || array_key_exists("has_append_html", $context) ? $context["has_append_html"] : (function () { throw new RuntimeError('Variable "has_append_html" does not exist.', 80, $this->source); })())) {
            // line 81
            echo "                    <div class=\"input-group-append\">
                        <span class=\"input-group-text\">";
            // line 82
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 82, $this->source); })()), "field", [], "any", false, false, false, 82), "append_html", [], "any", false, false, false, 82);
            echo "</span>
                    </div>
                ";
        }
        // line 85
        echo "                ";
        if ((isset($context["has_input_groups"]) || array_key_exists("has_input_groups", $context) ? $context["has_input_groups"] : (function () { throw new RuntimeError('Variable "has_input_groups" does not exist.', 85, $this->source); })())) {
            echo "</div>";
        }
        // line 86
        echo "
            ";
        // line 87
        $context["nullable_fields_fqcn"] = [0 => "EasyCorpBundleEasyAdminBundleFieldDateTimeField", 1 => "EasyCorpBundleEasyAdminBundleFieldDateField", 2 => "EasyCorpBundleEasyAdminBundleFieldTimeField"];
        // line 92
        echo "            ";
        if ((twig_in_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 92), "ea_crud_form", [], "any", false, true, false, 92), "ea_field", [], "any", false, true, false, 92), "fieldFqcn", [], "any", true, true, false, 92)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 92), "ea_crud_form", [], "any", false, true, false, 92), "ea_field", [], "any", false, true, false, 92), "fieldFqcn", [], "any", false, false, false, 92), false)) : (false)), (isset($context["nullable_fields_fqcn"]) || array_key_exists("nullable_fields_fqcn", $context) ? $context["nullable_fields_fqcn"] : (function () { throw new RuntimeError('Variable "nullable_fields_fqcn" does not exist.', 92, $this->source); })())) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 92), "nullable", [], "any", true, true, false, 92)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 92), "nullable", [], "any", false, false, false, 92), false)) : (false)))) {
            // line 93
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 95
            if ((null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 95, $this->source); })()))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", [], "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 100
        echo "
            ";
        // line 101
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 101), "help", [], "any", true, true, false, 101)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 101), "help", [], "any", false, false, false, 101), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "vars", [], "any", false, false, false, 101), "help", [], "any", false, false, false, 101))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "vars", [], "any", false, false, false, 101), "help", [], "any", false, false, false, 101))) != "")) {
            // line 102
            echo "                <small class=\"form-help\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 102), "help", [], "any", true, true, false, 102)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 102), "help", [], "any", false, false, false, 102), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "vars", [], "any", false, false, false, 102), "help", [], "any", false, false, false, 102))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "vars", [], "any", false, false, false, 102), "help", [], "any", false, false, false, 102)));
            echo "</small>
            ";
        }
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'errors');
        // line 106
        echo "</div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        // line 111
        echo "    ";
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 111, $this->source); })()), "rendered", [], "any", false, false, false, 111))) {
            // line 112
            echo "        ";
            $context["row_attr"] = twig_array_merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 112, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 112, $this->source); })()), 'row')]);
            // line 113
            echo "    ";
        }
        // line 114
        echo "
    ";
        // line 115
        $context["row_attr"] = twig_array_merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 115, $this->source); })()), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 117
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "vars", [], "any", false, false, false, 117), "ea_crud_form", [], "any", false, false, false, 117), "ea_field", [], "any", false, false, false, 117) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "vars", [], "any", false, false, false, 117), "ea_crud_form", [], "any", false, false, false, 117), "ea_field", [], "any", false, false, false, 117), "customOptions", [], "any", false, false, false, 117), "get", [0 => "entryIsComplex"], "method", false, false, false, 117))) ? ("true") : ("false")), "data-allow-add" => ((        // line 118
(isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 118, $this->source); })())) ? ("true") : ("false")), "data-allow-delete" => ((        // line 119
(isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 119, $this->source); })())) ? ("true") : ("false")), "data-num-items" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 120
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "children", [], "any", false, false, false, 120)), "data-form-type-name-placeholder" => ((        // line 121
array_key_exists("prototype", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 121, $this->source); })()), "vars", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121)) : (""))]);
        // line 123
        echo "
    ";
        // line 124
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 127
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 128
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "

    ";
        // line 130
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 130, $this->source); })()), false)) : (false))) {
            // line 131
            echo "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            ";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
        </button>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_collection_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_entry_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_entry_widget"));

        // line 139
        echo "    ";
        $context["is_complex"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })())), "vars", [], "any", false, true, false, 139), "ea_crud_form", [], "any", false, true, false, 139), "ea_field", [], "any", false, true, false, 139), "customOptions", [], "any", false, true, false, 139), "get", [0 => "entryIsComplex"], "method", true, true, false, 139) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })())), "vars", [], "any", false, true, false, 139), "ea_crud_form", [], "any", false, true, false, 139), "ea_field", [], "any", false, true, false, 139), "customOptions", [], "any", false, true, false, 139), "get", [0 => "entryIsComplex"], "method", false, false, false, 139)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })())), "vars", [], "any", false, true, false, 139), "ea_crud_form", [], "any", false, true, false, 139), "ea_field", [], "any", false, true, false, 139), "customOptions", [], "any", false, true, false, 139), "get", [0 => "entryIsComplex"], "method", false, false, false, 139)) : (false));
        // line 140
        echo "
    <div class=\"field-collection-item ";
        // line 141
        echo (((isset($context["is_complex"]) || array_key_exists("is_complex", $context) ? $context["is_complex"] : (function () { throw new RuntimeError('Variable "is_complex" does not exist.', 141, $this->source); })())) ? ("field-collection-item-complex") : (""));
        echo "\">
        ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), 'widget');
        echo "

        ";
        // line 144
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })())), "vars", [], "any", false, true, false, 144), "allow_delete", [], "any", true, true, false, 144)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })())), "vars", [], "any", false, true, false, 144), "allow_delete", [], "any", false, false, false, 144), false)) : (false))) {
            // line 145
            echo "            <button type=\"button\" class=\"btn btn-link field-collection-delete-button\"
                    title=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            echo "\"
                    onclick=\"this.closest('.form-group').remove(); return false;\">
                <i class=\"fas fa-times\"></i>
            </button>
        ";
        }
        // line 151
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 155
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 155, $this->source); })()),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 155), "css_class", [], "any", true, true, false, 155)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 155), "css_class", [], "any", false, false, false, 155), "")) : ("")), "html", null, true);
        echo "\">";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), 'widget');
        // line 157
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 162
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 163
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 163, $this->source); })()) === false)) {
            // line 164
            if ((array_key_exists("compound", $context) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 164, $this->source); })()))) {
                // line 165
                $context["element"] = "legend";
                // line 166
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 166, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 166)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 166), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 168
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 168, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 168, $this->source); })()), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 168)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 168), "")) : ("")) . " form-control-label"))]);
            }
            // line 170
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 170, $this->source); })())) {
                // line 171
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 171, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 171)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 171), "")) : ("")) . " required"))]);
            }
            // line 173
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 173, $this->source); })()))) {
                // line 174
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 174, $this->source); })()))) {
                    // line 175
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 175, $this->source); })()), ["%name%" =>                     // line 176
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 176, $this->source); })()), "%id%" =>                     // line 177
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 177, $this->source); })())]);
                } else {
                    // line 180
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 180, $this->source); })()));
                }
            }
            // line 183
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 183, $this->source); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 183, $this->source); })())) {
                $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context;
                $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ["attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 183, $this->source); })())];
                if (!twig_test_iterable($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 183, $this->getSourceContext());
                }
                $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_to_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b;
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 183, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 183, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 183, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 183, $this->source); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 183, $this->source); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 189
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 190
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 191
        if (twig_in_filter("collection", (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 191, $this->source); })()))) {
            // line 192
            echo "            ";
            // line 194
            echo "            ";
            $context["isEmptyCollection"] = ((null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 194, $this->source); })())) || (twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 194, $this->source); })())) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 194, $this->source); })()))));
            // line 195
            echo "            ";
            if ((isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 195, $this->source); })())) {
                // line 196
                echo "                ";
                $this->displayBlock("empty_collection", $context, $blocks);
                echo "
            ";
            }
            // line 198
            echo "            ";
            if (((isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 198, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 198), "prototype", [], "any", true, true, false, 198))) {
                // line 199
                echo "                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 199, $this->source); })()), ["data-empty-collection" =>                 $this->renderBlock("empty_collection", $context, $blocks)]);
                // line 200
                echo "            ";
            }
            // line 201
            echo "        ";
        }
        // line 202
        echo "
        ";
        // line 203
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 207
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 208
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 209
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 209, $this->source); })()), "templatePath", [0 => "label/empty"], "method", false, false, false, 209));
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 213
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 214
        echo "    ";
        $context["force_error"] = true;
        // line 215
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 219
        echo "    <div class=\"ea-vich-file\">
        ";
        // line 220
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 220, $this->source); })()), "")) : ("")))) {
            // line 221
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 221, $this->source); })()), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 221, $this->source); })()), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle")));
            // line 222
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 222, $this->source); })()), "."));
            // line 223
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 230
            echo "            <a class=\"ea-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 230, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 230, $this->source); })()))) : ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 230, $this->source); })()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ";
            // line 231
            (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), (isset($context["file_extension"]) || array_key_exists("file_extension", $context) ? $context["file_extension"] : (function () { throw new RuntimeError('Variable "file_extension" does not exist.', 231, $this->source); })()), [], "array", true, true, false, 231) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), (isset($context["file_extension"]) || array_key_exists("file_extension", $context) ? $context["file_extension"] : (function () { throw new RuntimeError('Variable "file_extension" does not exist.', 231, $this->source); })()), [], "array", false, false, false, 231)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), (isset($context["file_extension"]) || array_key_exists("file_extension", $context) ? $context["file_extension"] : (function () { throw new RuntimeError('Variable "file_extension" does not exist.', 231, $this->source); })()), [], "array", false, false, false, 231), "html", null, true))) : (print ("fa-file-o")));
            echo "\"></i>
                ";
            // line 232
            echo twig_escape_filter($this->env, (isset($context["download_title"]) || array_key_exists("download_title", $context) ? $context["download_title"] : (function () { throw new RuntimeError('Variable "download_title" does not exist.', 232, $this->source); })()), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 235
        echo "
        ";
        // line 236
        ob_start();
        // line 237
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "file", [], "any", false, false, false, 237), "vars", [], "any", false, false, false, 237), "id", [], "any", false, false, false, 237), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "file", [], "any", false, false, false, 240), "vars", [], "any", false, false, false, 240), "id", [], "any", false, false, false, 240), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 242
        echo "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 245
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "file", [], "any", false, false, false, 247), 'widget', ["attr" => ["onchange" => (isset($context["file_upload_js"]) || array_key_exists("file_upload_js", $context) ? $context["file_upload_js"] : (function () { throw new RuntimeError('Variable "file_upload_js" does not exist.', 247, $this->source); })())], "vich" => true]);
        echo "
            </div>

            ";
        // line 250
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 250)) {
            // line 251
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "delete", [], "any", false, false, false, 251), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 253
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 254
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "file", [], "any", false, false, false, 254), "vars", [], "any", false, false, false, 254), "id", [], "any", false, false, false, 254), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 258
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 259
        echo "    ";
        $context["force_error"] = true;
        // line 260
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 263
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 264
        echo "    ";
        $context["formTypeOptions"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 264), "formTypeOptions", [], "any", true, true, false, 264)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 264), "formTypeOptions", [], "any", false, false, false, 264), "")) : (""));
        // line 265
        echo "    <div class=\"ea-vich-image\">
        ";
        // line 266
        if ( !twig_test_empty(((array_key_exists("image_uri", $context)) ? (_twig_default_filter((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 266, $this->source); })()), "")) : ("")))) {
            // line 267
            echo "            ";
            if (twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 267, $this->source); })()), "")) : ("")))) {
                // line 268
                echo "                <div class=\"ea-lightbox-thumbnail\">
                    ";
                // line 269
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 269) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 269, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 269)))) {
                    // line 270
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 270, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 270, $this->source); })()))) : ((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 270, $this->source); })()))), "imagine_filter", twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 270, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 270)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 272
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 272, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 272, $this->source); })()))) : ((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 272, $this->source); })()))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 274
                echo "                </div>
            ";
            } else {
                // line 276
                echo "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 276, $this->source); })()));
                // line 277
                echo "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-featherlight=\"#";
                // line 278
                echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new RuntimeError('Variable "_lightbox_id" does not exist.', 278, $this->source); })()), "html", null, true);
                echo "\" data-featherlight-close-on-click=\"anywhere\">
                    ";
                // line 279
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 279) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 279, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 279)))) {
                    // line 280
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 280, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 280, $this->source); })()))) : ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 280, $this->source); })()))), "imagine_filter", twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 280, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 280)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 282
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 282, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 282, $this->source); })()))) : ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 282, $this->source); })()))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 284
                echo "                </a>

                <div id=\"";
                // line 286
                echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new RuntimeError('Variable "_lightbox_id" does not exist.', 286, $this->source); })()), "html", null, true);
                echo "\" class=\"ea-lightbox\">
                    ";
                // line 287
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 287) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 287, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 287)))) {
                    // line 288
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 288, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 288, $this->source); })()))) : ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 288, $this->source); })()))), "imagine_filter", twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 288, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 288)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 290
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 290, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 290, $this->source); })()))) : ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 290, $this->source); })()))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 292
                echo "                </div>
            ";
            }
            // line 294
            echo "        ";
        }
        // line 295
        echo "
        ";
        // line 296
        ob_start();
        // line 297
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 297, $this->source); })()), "file", [], "any", false, false, false, 297), "vars", [], "any", false, false, false, 297), "id", [], "any", false, false, false, 297), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 300
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), "file", [], "any", false, false, false, 300), "vars", [], "any", false, false, false, 300), "id", [], "any", false, false, false, 300), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 302
        echo "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 305
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 307
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 307, $this->source); })()), "file", [], "any", false, false, false, 307), 'widget', ["attr" => ["onchange" => (isset($context["file_upload_js"]) || array_key_exists("file_upload_js", $context) ? $context["file_upload_js"] : (function () { throw new RuntimeError('Variable "file_upload_js" does not exist.', 307, $this->source); })())], "vich" => true]);
        echo "
            </div>

            ";
        // line 310
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 310)) {
            // line 311
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "delete", [], "any", false, false, false, 311), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 313
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 314
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 314, $this->source); })()), "file", [], "any", false, false, false, 314), "vars", [], "any", false, false, false, 314), "id", [], "any", false, false, false, 314), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 318
    public function block_ea_crud_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_rest"));

        // line 319
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), 'rest');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 323
    public function block_ea_crud_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget"));

        // line 324
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ea_crud_form"]) || array_key_exists("ea_crud_form", $context) ? $context["ea_crud_form"] : (function () { throw new RuntimeError('Variable "ea_crud_form" does not exist.', 324, $this->source); })()), "form_tabs", [], "any", false, false, false, 324)) > 0)) {
            // line 325
            echo "        <div class=\"col-12\">
            <div class=\"nav-tabs-custom form-tabs\">
                <ul class=\"nav nav-tabs\">
                    ";
            // line 328
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ea_form_tabs"]) || array_key_exists("ea_form_tabs", $context) ? $context["ea_form_tabs"] : (function () { throw new RuntimeError('Variable "ea_form_tabs" does not exist.', 328, $this->source); })()));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 329
                echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 330
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 330)) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "id", [], "array", false, false, false, 330), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "id", [], "array", false, false, false, 330), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">";
                // line 331
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", true, true, false, 331)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 331), false)) : (false))) {
                    // line 332
                    echo "<i class=\"fa fa-fw fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 332), "html", null, true);
                    echo "\"></i>";
                }
                // line 334
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab_config"], "label", [], "array", false, false, false, 334), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 334, $this->source); })()), "i18n", [], "any", false, false, false, 334), "translationDomain", [], "any", false, false, false, 334)), "html", null, true);
                // line 335
                if ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 335) > 0)) {
                    // line 336
                    echo "<span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 336)], "EasyAdminBundle"), "html", null, true);
                    echo "\">";
                    // line 337
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 337), "html", null, true);
                    // line 338
                    echo "</span>";
                }
                // line 340
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            echo "                </ul>
                <div class=\"tab-content\">
                    ";
            // line 345
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ea_form_tabs"]) || array_key_exists("ea_form_tabs", $context) ? $context["ea_form_tabs"] : (function () { throw new RuntimeError('Variable "ea_form_tabs" does not exist.', 345, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 346
                echo "                        <div id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "id", [], "array", false, false, false, 346), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 346)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", true, true, false, 346)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", false, false, false, 346), "")) : ("")), "html", null, true);
                echo "\">
                            ";
                // line 347
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", true, true, false, 347)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", false, false, false, 347), false)) : (false))) {
                    // line 348
                    echo "                                <div class=\"content-header-help tab-help\">
                                    ";
                    // line 349
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", false, false, false, 349), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 349, $this->source); })()), "i18n", [], "any", false, false, false, 349), "translationDomain", [], "any", false, false, false, 349));
                    echo "
                                </div>
                            ";
                }
                // line 352
                echo "
                            ";
                // line 353
                $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
                echo "
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 356
            echo "                </div>
            </div>
        </div>
    ";
        } else {
            // line 360
            echo "        ";
            $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 364
    public function block_ea_crud_widget_panels($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget_panels"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget_panels"));

        // line 365
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ea_crud_form"]) || array_key_exists("ea_crud_form", $context) ? $context["ea_crud_form"] : (function () { throw new RuntimeError('Variable "ea_crud_form" does not exist.', 365, $this->source); })()), "form_panels", [], "any", false, false, false, 365), function ($__panel_config__) use ($context, $macros) { $context["panel_config"] = $__panel_config__; return ( !twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 365) || (twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 365) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new RuntimeError('Variable "tab_name" does not exist.', 365, $this->source); })()))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["panel_name"] => $context["panel_config"]) {
            // line 366
            echo "        ";
            $context["panel_has_header"] = (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", true, true, false, 366)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 366), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 366)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 366), false)) : (false)));
            // line 367
            echo "
        ";
            // line 368
            $context["collapsible"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsible", [], "any", false, false, false, 368);
            // line 369
            echo "        ";
            $context["collapsed"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsed", [], "any", false, false, false, 369);
            // line 370
            echo "
        <div class=\"";
            // line 371
            (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", true, true, false, 371) &&  !(null === twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 371)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 371), "html", null, true))) : (print ("")));
            echo "\">
            <div class=\"content-panel\">
                ";
            // line 373
            if ((isset($context["panel_has_header"]) || array_key_exists("panel_has_header", $context) ? $context["panel_has_header"] : (function () { throw new RuntimeError('Variable "panel_has_header" does not exist.', 373, $this->source); })())) {
                // line 374
                echo "                    <div class=\"content-panel-header ";
                echo (((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 374, $this->source); })())) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 374)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 374), false)) : (false)))) ? ("with-help") : (""));
                echo "\">
                        ";
                // line 375
                if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 375, $this->source); })())) {
                    // line 376
                    echo "                            <a href=\"#content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\" data-toggle=\"collapse\" class=\"content-panel-collapse ";
                    echo (((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 376, $this->source); })())) ? ("collapsed") : (""));
                    echo "\" aria-expanded=\"";
                    echo (((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 376, $this->source); })())) ? ("false") : ("true"));
                    echo "\" aria-controls=\"content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\">
                                <i class=\"fas fw fa-chevron-right collapse-icon\"></i>
                        ";
                }
                // line 379
                echo "
                            ";
                // line 380
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 380)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 380), false)) : (false))) {
                    // line 381
                    echo "                                <i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 381), "html", null, true);
                    echo "\"></i>
                            ";
                }
                // line 383
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 383);
                echo "

                        ";
                // line 385
                if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 385, $this->source); })())) {
                    // line 386
                    echo "                            </a>
                        ";
                }
                // line 388
                echo "
                        ";
                // line 389
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 389)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 389), false)) : (false))) {
                    // line 390
                    echo "                            <div class=\"content-panel-header-help\">";
                    echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 390);
                    echo "</div>
                        ";
                }
                // line 392
                echo "                    </div>
                ";
            }
            // line 394
            echo "
                <div id=\"content-";
            // line 395
            echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
            echo "\" class=\"content-panel-body with-background ";
            echo (( !(isset($context["panel_has_header"]) || array_key_exists("panel_has_header", $context) ? $context["panel_has_header"] : (function () { throw new RuntimeError('Variable "panel_has_header" does not exist.', 395, $this->source); })())) ? ("without-header") : (""));
            echo " without-footer ";
            echo (((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 395, $this->source); })())) ? ("collapse") : (""));
            echo " ";
            echo (( !(isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 395, $this->source); })())) ? ("show") : (""));
            echo "\">
                    ";
            // line 396
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 396), "block_prefixes", [], "any", false, false, false, 396)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 396), "ea_crud_form", [], "any", false, false, false, 396), "form_panel", [], "any", false, false, false, 396) == $context["panel_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 397
                echo "                        ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 397), "ea_crud_form", [], "any", false, false, false, 397), "form_tab", [], "any", false, false, false, 397) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 397), "ea_crud_form", [], "any", false, false, false, 397), "form_tab", [], "any", false, false, false, 397) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new RuntimeError('Variable "tab_name" does not exist.', 397, $this->source); })())))) {
                    // line 398
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                        ";
                }
                // line 400
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 401
            echo "                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 405
            echo "        <div class=\"content-panel\">
            <div class=\"content-panel-body with-background without-header without-footer\">
                ";
            // line 407
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 407, $this->source); })()), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 407), "block_prefixes", [], "any", false, false, false, 407)) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 407), "ea_crud_form", [], "any", false, false, false, 407), "form_tab", [], "any", false, false, false, 407) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 407), "ea_crud_form", [], "any", false, false, false, 407), "form_tab", [], "any", false, false, false, 407) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new RuntimeError('Variable "tab_name" does not exist.', 407, $this->source); })())))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 408
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 410
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['panel_name'], $context['panel_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 416
    public function block_ea_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_widget"));

        // line 417
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 417, $this->source); })()), "autocomplete", [], "any", false, false, false, 417), 'widget', ["attr" => twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 417, $this->source); })()), ["required" => (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 417, $this->source); })())])]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 420
    public function block_ea_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_inner_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_inner_label"));

        // line 421
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 421, $this->source); })())), "vars", [], "any", false, false, false, 421), "name", [], "any", false, false, false, 421);
        // line 422
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 426
    public function block_ea_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_code_editor_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_code_editor_widget"));

        // line 427
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 427, $this->source); })()), 'widget', ["attr" => twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 427, $this->source); })()), ["data-ea-code-editor-field" => "true", "data-language" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 429
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 429, $this->source); })()), "vars", [], "any", false, false, false, 429), "ea_crud_form", [], "any", false, false, false, 429), "ea_field", [], "any", false, false, false, 429), "customOptions", [], "any", false, false, false, 429), "get", [0 => "language"], "method", false, false, false, 429), "data-tab-size" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 430
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 430, $this->source); })()), "vars", [], "any", false, false, false, 430), "ea_crud_form", [], "any", false, false, false, 430), "ea_field", [], "any", false, false, false, 430), "customOptions", [], "any", false, false, false, 430), "get", [0 => "tabSize"], "method", false, false, false, 430), "data-indent-with-tabs" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 431
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 431, $this->source); })()), "vars", [], "any", false, false, false, 431), "ea_crud_form", [], "any", false, false, false, 431), "ea_field", [], "any", false, false, false, 431), "customOptions", [], "any", false, false, false, 431), "get", [0 => "indentWithTabs"], "method", false, false, false, 431)) ? ("true") : ("false")), "data-show-line-numbers" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 432
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 432, $this->source); })()), "vars", [], "any", false, false, false, 432), "ea_crud_form", [], "any", false, false, false, 432), "ea_field", [], "any", false, false, false, 432), "customOptions", [], "any", false, false, false, 432), "get", [0 => "showLineNumbers"], "method", false, false, false, 432)) ? ("true") : ("false"))])]);
        // line 433
        echo "

    ";
        // line 435
        $context["numOfRows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 435, $this->source); })()), "vars", [], "any", false, false, false, 435), "ea_crud_form", [], "any", false, false, false, 435), "ea_field", [], "any", false, false, false, 435), "customOptions", [], "any", false, false, false, 435), "get", [0 => "numOfRows"], "method", false, false, false, 435);
        // line 436
        echo "    ";
        if ( !(null === (isset($context["numOfRows"]) || array_key_exists("numOfRows", $context) ? $context["numOfRows"] : (function () { throw new RuntimeError('Variable "numOfRows" does not exist.', 436, $this->source); })()))) {
            // line 437
            echo "        <style type=\"text/css\">
            ";
            // line 439
            echo "            #";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 439, $this->source); })()), "html", null, true);
            echo " + .CodeMirror { height: ";
            echo twig_escape_filter($this->env, twig_round((21 * (isset($context["numOfRows"]) || array_key_exists("numOfRows", $context) ? $context["numOfRows"] : (function () { throw new RuntimeError('Variable "numOfRows" does not exist.', 439, $this->source); })()))), "html", null, true);
            echo "px !important; max-height: none; }
        </style>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 445
    public function block_ea_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_text_editor_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_text_editor_widget"));

        // line 446
        echo "    ";
        $context["numOfRows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 446, $this->source); })()), "vars", [], "any", false, false, false, 446), "ea_crud_form", [], "any", false, false, false, 446), "ea_field", [], "any", false, false, false, 446), "customOptions", [], "any", false, false, false, 446), "get", [0 => "numOfRows"], "method", false, false, false, 446);
        // line 447
        echo "
    ";
        // line 448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 448, $this->source); })()), 'widget', ["attr" => twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 448, $this->source); })()), ["style" => "display: none", "class" => "ea-text-editor-content"])]);
        echo "

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 451
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 451, $this->source); })()), "html", null, true);
        echo "\" class=\"trix-content\"></trix-editor>
    </div>

    ";
        // line 454
        if ((isset($context["numOfRows"]) || array_key_exists("numOfRows", $context) ? $context["numOfRows"] : (function () { throw new RuntimeError('Variable "numOfRows" does not exist.', 454, $this->source); })())) {
            // line 455
            echo "        <style type=\"text/css\">
            trix-editor[input=";
            // line 456
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 456, $this->source); })()), "html", null, true);
            echo "].trix-content {
                ";
            // line 458
            echo "                min-height: ";
            echo twig_escape_filter($this->env, twig_round(((isset($context["numOfRows"]) || array_key_exists("numOfRows", $context) ? $context["numOfRows"] : (function () { throw new RuntimeError('Variable "numOfRows" does not exist.', 458, $this->source); })()) * 21)), "html", null, true);
            echo "px;
            }
        </style>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 465
    public function block_ea_section_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_section_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_section_row"));

        // line 466
        echo "    <div class=\"form-section ";
        echo ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 466), "icon", [], "any", true, true, false, 466)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 466), "icon", [], "any", false, false, false, 466), false)) : (false)) == false) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 466), "label", [], "any", true, true, false, 466)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 466), "label", [], "any", false, false, false, 466), false)) : (false)) == false))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 466), "css_class", [], "any", true, true, false, 466)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 466), "css_class", [], "any", false, false, false, 466), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 468
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 468), "icon", [], "any", true, true, false, 468)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 468), "icon", [], "any", false, false, false, 468), false)) : (false))) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 468, $this->source); })()), "field", [], "any", false, false, false, 468), "icon", [], "any", false, false, false, 468), "html", null, true);
            echo "\"></i>";
        }
        // line 469
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 469), "label", [], "any", true, true, false, 469)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 469), "label", [], "any", false, false, false, 469), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 469), "label", [], "any", true, true, false, 469)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 469), "label", [], "any", false, false, false, 469), "")) : ("")), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 469, $this->source); })()), "i18n", [], "any", false, false, false, 469), "translationDomain", [], "any", false, false, false, 469));
        }
        echo "</span>
        </h2>

        ";
        // line 472
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 472), "help", [], "any", true, true, false, 472)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 472), "help", [], "any", false, false, false, 472), false)) : (false))) {
            // line 473
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 473, $this->source); })()), "field", [], "any", false, false, false, 473), "help", [], "any", false, false, false, 473), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 473, $this->source); })()), "i18n", [], "any", false, false, false, 473), "translationDomain", [], "any", false, false, false, 473));
            echo "</p>
        ";
        }
        // line 475
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 479
    public function block_ea_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_filters_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_filters_widget"));

        // line 480
        echo "    ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 480), "query", [], "any", false, true, false, 480), "get", [0 => "filters"], "method", true, true, false, 480)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 480), "query", [], "any", false, true, false, 480), "get", [0 => "filters"], "method", false, false, false, 480), [])) : ([])));
        // line 481
        echo "
    ";
        // line 482
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 482, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 483
            echo "        <div class=\"filter-field ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 483)) {
                echo "border-bottom";
            }
            echo " py-1 px-3 ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 483)) {
                echo "pb-2";
            }
            echo "\" data-filter-property=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 483), "name", [], "any", false, false, false, 483), "html", null, true);
            echo "\">
            <div class=\"filter-heading\" id=\"filter-heading-";
            // line 484
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 484), "html", null, true);
            echo "\">
                <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 485
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 485), "name", [], "any", false, false, false, 485), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 485, $this->source); })()))) {
                echo "checked";
            }
            echo ">
                <a data-toggle=\"collapse\" href=\"#filter-content-";
            // line 486
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 486), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 486), "name", [], "any", false, false, false, 486), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 486, $this->source); })()))) ? ("true") : ("false"));
            echo "\" aria-controls=\"filter-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 486), "html", null, true);
            echo "\">
                    ";
            // line 487
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 487), "label", [], "any", true, true, false, 487)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 487), "label", [], "any", false, false, false, 487), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 487), "name", [], "any", false, false, false, 487)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 487), "name", [], "any", false, false, false, 487)))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 487, $this->source); })()), "i18n", [], "any", false, false, false, 487), "translationDomain", [], "any", false, false, false, 487)), "html", null, true);
            echo "
                </a>
            </div>
            <div id=\"filter-content-";
            // line 490
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 490), "html", null, true);
            echo "\" class=\"filter-content collapse ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 490), "name", [], "any", false, false, false, 490), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 490, $this->source); })()))) {
                echo "show";
            }
            echo "\" aria-labelledby=\"filter-heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 490), "html", null, true);
            echo "\">
                <div class=\"form-widget my-2\">
                    ";
            // line 492
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
                </div>
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 497
        echo "
    <script>
        document.querySelectorAll('.filter-checkbox').forEach(filterCheckbox => {
            filterCheckbox.addEventListener('change', function () {
                const filterToggleLink = filterCheckbox.nextElementSibling;
                const filterExpandedAttribute = filterCheckbox.nextElementSibling.getAttribute('aria-expanded');

                if ((filterCheckbox.checked && 'false' === filterExpandedAttribute) || (!filterCheckbox.checked && 'true' === filterExpandedAttribute)) {
                    filterToggleLink.click();
                }
            });
        });

        // we can't use -> \"document.querySelector('form#filters').addEventListener('change', ...);\"
        // because it doesn't work with Select2 elements changes
        // TODO: when using the native datepicker, 'change' isn't fired (either in plain JavaScript
        // or jQuery) unless you input the entire date + time information
        \$(document).on('change', 'form#";
        // line 514
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 514, $this->source); })()), "vars", [], "any", false, false, false, 514), "id", [], "any", false, false, false, 514), "html", null, true);
        echo "', function (event) {
            if (event.target.classList.contains('filter-checkbox')) {
                return;
            }

            let filterCheckbox = event.target.closest('.filter-field').querySelector('.filter-checkbox');
            if (!filterCheckbox.checked) {
                filterCheckbox.checked = true;
            }
        });
    </script>

    ";
        // line 526
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 529
    public function block_ea_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_numeric_filter_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_numeric_filter_widget"));

        // line 530
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 531
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 531, $this->source); })()), "comparison", [], "any", false, false, false, 531), 'row');
        echo "
        ";
        // line 532
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 532, $this->source); })()), "value", [], "any", false, false, false, 532), 'row');
        echo "
        <div id=\"wrapper_";
        // line 533
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 533, $this->source); })()), "value2", [], "any", false, false, false, 533), "vars", [], "any", false, false, false, 533), "id", [], "any", false, false, false, 533), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 533, $this->source); })()), "comparison", [], "any", false, false, false, 533), "vars", [], "any", false, false, false, 533), "value", [], "any", false, false, false, 533) != "between")) {
            echo "style=\"display: none\"";
        }
        echo ">
            ";
        // line 534
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 534, $this->source); })()), "value2", [], "any", false, false, false, 534), 'row');
        echo "
        </div>
        <script>
            document.querySelector('#";
        // line 537
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 537, $this->source); })()), "comparison", [], "any", false, false, false, 537), "vars", [], "any", false, false, false, 537), "id", [], "any", false, false, false, 537), "html", null, true);
        echo "').addEventListener('change', function(event) {
                const input = document.querySelector('#wrapper_";
        // line 538
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 538, $this->source); })()), "value2", [], "any", false, false, false, 538), "vars", [], "any", false, false, false, 538), "id", [], "any", false, false, false, 538), "html", null, true);
        echo "');
                input.style.display = event.currentTarget.value === 'between' ? '' : 'none';
            });
        </script>
    </div>";
        // line 543
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 543, $this->source); })()), 'errors');
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 546
    public function block_ea_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_datetime_filter_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_datetime_filter_widget"));

        // line 547
        echo "    ";
        $this->displayBlock("ea_numeric_filter_widget", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 550
    public function block_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_fileupload_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_fileupload_widget"));

        // line 551
        echo "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 553
        $context["placeholder"] = "";
        // line 554
        echo "            ";
        $context["title"] = "";
        // line 555
        echo "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 556
        echo "            ";
        if ((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 556, $this->source); })())) {
            // line 557
            echo "                ";
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 557, $this->source); })())) {
                // line 558
                echo "                    ";
                $context["placeholder"] = ((twig_length_filter($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 558, $this->source); })())) . " ") . (isset($context["filesLabel"]) || array_key_exists("filesLabel", $context) ? $context["filesLabel"] : (function () { throw new RuntimeError('Variable "filesLabel" does not exist.', 558, $this->source); })()));
                // line 559
                echo "                ";
            } else {
                // line 560
                echo "                    ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 560, $this->source); })())), "filename", [], "any", false, false, false, 560);
                // line 561
                echo "                    ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 561, $this->source); })())), "mTime", [], "any", false, false, false, 561));
                // line 562
                echo "                ";
            }
            // line 563
            echo "            ";
        }
        // line 564
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 564, $this->source); })()), "file", [], "any", false, false, false, 564), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 564, $this->source); })()), "file", [], "any", false, false, false, 564), "vars", [], "any", false, false, false, 564), "attr", [], "any", false, false, false, 564), ["placeholder" => (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 564, $this->source); })()), "title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 564, $this->source); })()), "data-files-label" => (isset($context["filesLabel"]) || array_key_exists("filesLabel", $context) ? $context["filesLabel"] : (function () { throw new RuntimeError('Variable "filesLabel" does not exist.', 564, $this->source); })())])]);
        echo "
            <div class=\"input-group-append\">
                <span class=\"input-group-text\" ";
        // line 566
        if (twig_test_empty((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 566, $this->source); })()))) {
            echo "style=\"display: none\"";
        }
        echo ">";
        // line 567
        if ((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 567, $this->source); })())) {
            // line 568
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 568, $this->source); })())) {
                // line 569
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 569, $this->source); })()), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 569, $this->source); })()) + twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 569, $this->source); })()), "size", [], "any", false, false, false, 569)); })), "html", null, true);
                echo "
                        ";
            } else {
                // line 571
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 571, $this->source); })())), "size", [], "any", false, false, false, 571)), "html", null, true);
                echo "
                        ";
            }
        }
        // line 574
        echo "</span>
                ";
        // line 575
        if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 575, $this->source); })())) {
            // line 576
            echo "                    <label class=\"btn ea-fileupload-delete-btn\" ";
            if (twig_test_empty((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 576, $this->source); })()))) {
                echo "style=\"display: none\"";
            }
            echo " for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 576, $this->source); })()), "delete", [], "any", false, false, false, 576), "vars", [], "any", false, false, false, 576), "id", [], "any", false, false, false, 576), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                ";
        }
        // line 580
        echo "                <label class=\"btn\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 580, $this->source); })()), "file", [], "any", false, false, false, 580), "vars", [], "any", false, false, false, 580), "id", [], "any", false, false, false, 580), "html", null, true);
        echo "\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        ";
        // line 585
        if (((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 585, $this->source); })()) && (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 585, $this->source); })()))) {
            // line 586
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 589
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 589, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 590
                echo "                        <tr>
                            <td>
                                ";
                // line 592
                if ((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 592, $this->source); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 592, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 592))), "html", null, true);
                    echo "\">";
                }
                // line 593
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 593)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 594
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 594), "html", null, true);
                echo "
                                    </span>
                                    ";
                // line 596
                if ((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 596, $this->source); })())) {
                    echo "</a>";
                }
                // line 597
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 598
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 598)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 601
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 605
        echo "        ";
        if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 605, $this->source); })())) {
            // line 606
            echo "            <div style=\"display: none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 606, $this->source); })()), "delete", [], "any", false, false, false, 606), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 608
        echo "    </div>
    ";
        // line 609
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 609, $this->source); })()), "file", [], "any", false, false, false, 609), 'errors');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 612
    public function block_ea_slug_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_slug_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_slug_widget"));

        // line 613
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 613, $this->source); })()), ["data-ea-slug-field" => "", "data-target" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 615
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 615, $this->source); })()), "parent", [], "any", false, false, false, 615), "children", [], "any", false, false, false, 615), (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 615, $this->source); })()), [], "array", false, false, false, 615), "vars", [], "any", false, false, false, 615), "id", [], "any", false, false, false, 615)]);
        // line 617
        echo "
    <div class=\"input-group\">
        ";
        // line 619
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        <div class=\"input-group-append\">
            <button class=\"btn btn-outline-secondary\" type=\"button\">
                <i class=\"fas fa-lock fa-fw\"></i>
            </button>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2120 => 619,  2116 => 617,  2114 => 615,  2112 => 613,  2102 => 612,  2090 => 609,  2087 => 608,  2081 => 606,  2078 => 605,  2072 => 601,  2063 => 598,  2060 => 597,  2056 => 596,  2051 => 594,  2046 => 593,  2040 => 592,  2036 => 590,  2032 => 589,  2027 => 586,  2025 => 585,  2016 => 580,  2004 => 576,  2002 => 575,  1999 => 574,  1992 => 571,  1986 => 569,  1984 => 568,  1982 => 567,  1977 => 566,  1971 => 564,  1968 => 563,  1965 => 562,  1962 => 561,  1959 => 560,  1956 => 559,  1953 => 558,  1950 => 557,  1947 => 556,  1944 => 555,  1941 => 554,  1939 => 553,  1935 => 551,  1925 => 550,  1912 => 547,  1902 => 546,  1892 => 543,  1885 => 538,  1881 => 537,  1875 => 534,  1867 => 533,  1863 => 532,  1859 => 531,  1856 => 530,  1846 => 529,  1834 => 526,  1819 => 514,  1800 => 497,  1781 => 492,  1770 => 490,  1764 => 487,  1756 => 486,  1750 => 485,  1746 => 484,  1733 => 483,  1716 => 482,  1713 => 481,  1710 => 480,  1700 => 479,  1689 => 475,  1683 => 473,  1681 => 472,  1672 => 469,  1666 => 468,  1658 => 466,  1648 => 465,  1632 => 458,  1628 => 456,  1625 => 455,  1623 => 454,  1617 => 451,  1611 => 448,  1608 => 447,  1605 => 446,  1595 => 445,  1578 => 439,  1575 => 437,  1572 => 436,  1570 => 435,  1566 => 433,  1564 => 432,  1563 => 431,  1562 => 430,  1561 => 429,  1559 => 427,  1549 => 426,  1536 => 422,  1533 => 421,  1523 => 420,  1510 => 417,  1500 => 416,  1484 => 410,  1475 => 408,  1471 => 407,  1467 => 405,  1459 => 401,  1453 => 400,  1447 => 398,  1444 => 397,  1440 => 396,  1430 => 395,  1427 => 394,  1423 => 392,  1417 => 390,  1415 => 389,  1412 => 388,  1408 => 386,  1406 => 385,  1400 => 383,  1394 => 381,  1392 => 380,  1389 => 379,  1376 => 376,  1374 => 375,  1367 => 374,  1365 => 373,  1360 => 371,  1357 => 370,  1354 => 369,  1352 => 368,  1349 => 367,  1346 => 366,  1340 => 365,  1330 => 364,  1316 => 360,  1310 => 356,  1293 => 353,  1290 => 352,  1284 => 349,  1281 => 348,  1279 => 347,  1268 => 346,  1251 => 345,  1247 => 343,  1239 => 340,  1236 => 338,  1234 => 337,  1230 => 336,  1228 => 335,  1226 => 334,  1221 => 332,  1219 => 331,  1210 => 330,  1207 => 329,  1203 => 328,  1198 => 325,  1195 => 324,  1185 => 323,  1172 => 319,  1162 => 318,  1149 => 314,  1146 => 313,  1140 => 311,  1138 => 310,  1132 => 307,  1128 => 306,  1125 => 305,  1121 => 302,  1116 => 300,  1109 => 297,  1107 => 296,  1104 => 295,  1101 => 294,  1097 => 292,  1091 => 290,  1085 => 288,  1083 => 287,  1079 => 286,  1075 => 284,  1069 => 282,  1063 => 280,  1061 => 279,  1057 => 278,  1054 => 277,  1051 => 276,  1047 => 274,  1041 => 272,  1035 => 270,  1033 => 269,  1030 => 268,  1027 => 267,  1025 => 266,  1022 => 265,  1019 => 264,  1009 => 263,  996 => 260,  993 => 259,  983 => 258,  970 => 254,  967 => 253,  961 => 251,  959 => 250,  953 => 247,  949 => 246,  946 => 245,  942 => 242,  937 => 240,  930 => 237,  928 => 236,  925 => 235,  919 => 232,  915 => 231,  910 => 230,  907 => 223,  904 => 222,  901 => 221,  899 => 220,  896 => 219,  886 => 218,  873 => 215,  870 => 214,  860 => 213,  847 => 209,  844 => 208,  834 => 207,  821 => 203,  818 => 202,  815 => 201,  812 => 200,  809 => 199,  806 => 198,  800 => 196,  797 => 195,  794 => 194,  792 => 192,  790 => 191,  787 => 190,  777 => 189,  749 => 183,  745 => 180,  742 => 177,  741 => 176,  740 => 175,  738 => 174,  736 => 173,  733 => 171,  731 => 170,  728 => 168,  725 => 166,  723 => 165,  721 => 164,  719 => 163,  709 => 162,  699 => 157,  697 => 156,  691 => 155,  681 => 154,  670 => 151,  662 => 146,  659 => 145,  657 => 144,  652 => 142,  648 => 141,  645 => 140,  642 => 139,  632 => 138,  618 => 133,  614 => 131,  612 => 130,  606 => 128,  596 => 127,  584 => 124,  581 => 123,  579 => 121,  578 => 120,  577 => 119,  576 => 118,  575 => 117,  574 => 115,  571 => 114,  568 => 113,  565 => 112,  562 => 111,  552 => 110,  540 => 106,  538 => 105,  532 => 102,  530 => 101,  527 => 100,  520 => 96,  514 => 95,  510 => 93,  507 => 92,  505 => 87,  502 => 86,  497 => 85,  491 => 82,  488 => 81,  486 => 80,  481 => 78,  478 => 77,  472 => 74,  469 => 73,  466 => 72,  462 => 71,  459 => 70,  456 => 69,  453 => 68,  451 => 67,  448 => 66,  446 => 65,  435 => 64,  432 => 63,  430 => 61,  428 => 60,  418 => 59,  401 => 49,  396 => 47,  393 => 46,  391 => 44,  388 => 42,  386 => 41,  384 => 40,  374 => 39,  364 => 36,  362 => 35,  360 => 34,  350 => 33,  340 => 30,  338 => 29,  336 => 28,  326 => 27,  316 => 24,  313 => 22,  311 => 21,  309 => 20,  306 => 18,  304 => 17,  294 => 16,  282 => 11,  277 => 9,  274 => 8,  268 => 6,  265 => 5,  255 => 4,  245 => 612,  242 => 611,  240 => 550,  237 => 549,  235 => 546,  232 => 545,  230 => 529,  227 => 528,  225 => 479,  222 => 477,  220 => 465,  217 => 463,  215 => 445,  212 => 443,  210 => 426,  207 => 424,  205 => 420,  202 => 419,  200 => 416,  197 => 414,  195 => 364,  192 => 363,  190 => 323,  187 => 321,  185 => 318,  182 => 317,  180 => 263,  177 => 262,  175 => 258,  172 => 257,  170 => 218,  167 => 217,  165 => 213,  162 => 212,  160 => 207,  157 => 206,  155 => 189,  152 => 188,  149 => 186,  147 => 162,  144 => 161,  141 => 159,  139 => 154,  136 => 153,  134 => 138,  131 => 137,  129 => 127,  126 => 126,  124 => 110,  121 => 109,  119 => 59,  116 => 58,  113 => 56,  111 => 39,  108 => 38,  106 => 33,  103 => 32,  101 => 27,  98 => 26,  96 => 16,  93 => 15,  90 => 13,  88 => 4,  85 => 3,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% use 'bootstrap_4_layout.html.twig' %}

{% block form_start %}
    {% if form.vars.errors|length > 0 and 'ea_crud' in form.vars.block_prefixes|default([]) %}
        {{ form_errors(form) }}
    {% endif %}

    {{ parent() }}

    <input type=\"hidden\" name=\"referrer\" value=\"{{ ea.request.query.get('referrer') }}\">
{% endblock form_start %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default(''))|trim}) -%}
    {% endif %}
    {%- if type is defined and (type == 'range' or type == 'color') %}
        {# Attribute \"required\" is not supported #}
        {%- set required = false -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block date_widget -%}
    <div class=\"datetime-widget datetime-widget-date\">
        {{- parent() -}}
    </div>
{%- endblock date_widget %}

{% block time_widget -%}
    <div class=\"datetime-widget datetime-widget-time\">
        {{- parent() -}}
    </div>
{%- endblock time_widget %}

{% block file_widget -%}
    {% if vich|default(false) %}
        {%- set type = type|default('file') -%}
        {{- block('form_widget_simple') -}}
    {% else %}
        {{- parent() -}}

        <script>
            document.querySelector('#{{ id }}').addEventListener('change', function() {
                const fileName = this.value.replace('C:\\\\fakepath\\\\', '');
                const customInputFileLabel = document.querySelector('#{{ id }} ~ .custom-file-label');
                customInputFileLabel.classList.add('selected');
                customInputFileLabel.innerHTML = fileName;
            });
        </script>
    {% endif %}
{%- endblock %}

{# Rows #}

{% block form_row %}
    {% set row_attr = row_attr|merge({
        class: row_attr.class|default('') ~ ' form-group'
    }) %}

    <div {% with { attr: row_attr } %}{{ block('attributes') }}{% endwith %}>
        {{- form_label(form) -}}
        <div class=\"form-widget\">
            {% set has_prepend_html = ea.field.prepend_html|default(null) is not null %}
            {% set has_append_html = ea.field.append_html|default(null) is not null %}
            {% set has_input_groups = has_prepend_html or has_append_html %}

            {% if has_input_groups %}<div class=\"input-group\">{% endif %}
                {% if has_prepend_html %}
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">{{ ea.field.prepend_html|raw }}</span>
                    </div>
                {% endif %}

                {{ form_widget(form) }}

                {% if has_append_html %}
                    <div class=\"input-group-append\">
                        <span class=\"input-group-text\">{{ ea.field.append_html|raw }}</span>
                    </div>
                {% endif %}
                {% if has_input_groups %}</div>{% endif %}

            {% set nullable_fields_fqcn = [
                'EasyCorp\\Bundle\\EasyAdminBundle\\Field\\DateTimeField',
                'EasyCorp\\Bundle\\EasyAdminBundle\\Field\\DateField',
                'EasyCorp\\Bundle\\EasyAdminBundle\\Field\\TimeField',
            ] %}
            {% if form.vars.ea_crud_form.ea_field.fieldFqcn|default(false) in nullable_fields_fqcn and ea.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {% if ea.field.help|default(form.vars.help) != '' %}
                <small class=\"form-help\">{{ ea.field.help|default(form.vars.help)|raw }}</small>
            {% endif %}

            {{- form_errors(form) -}}
        </div>
    </div>
{% endblock form_row %}

{% block collection_row %}
    {% if prototype is defined and not prototype.rendered %}
        {% set row_attr = row_attr|merge({ 'data-prototype': form_row(prototype) }) %}
    {% endif %}

    {% set row_attr = row_attr|merge({
        'data-ea-collection-field': 'true',
        'data-entry-is-complex': form.vars.ea_crud_form.ea_field and form.vars.ea_crud_form.ea_field.customOptions.get('entryIsComplex') ? 'true' : 'false',
        'data-allow-add': allow_add ? 'true' : 'false',
        'data-allow-delete': allow_delete ? 'true' : 'false',
        'data-num-items': form.children|length,
        'data-form-type-name-placeholder': prototype is defined ? prototype.vars.name : '',
    }) %}

    {{ block('form_row') }}
{% endblock collection_row %}

{% block collection_widget %}
    {{ block('form_widget') }}

    {% if allow_add|default(false) %}
        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            {{ 'action.add_new_item'|trans({}, 'EasyAdminBundle') }}
        </button>
    {% endif %}
{% endblock collection_widget %}

{% block collection_entry_widget %}
    {% set is_complex = form_parent(form).vars.ea_crud_form.ea_field.customOptions.get('entryIsComplex') ?? false %}

    <div class=\"field-collection-item {{ is_complex ? 'field-collection-item-complex' }}\">
        {{ form_widget(form) }}

        {% if form_parent(form).vars.allow_delete|default(false) %}
            <button type=\"button\" class=\"btn btn-link field-collection-delete-button\"
                    title=\"{{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}\"
                    onclick=\"this.closest('.form-group').remove(); return false;\">
                <i class=\"fas fa-times\"></i>
            </button>
        {% endif %}
    </div>
{% endblock collection_entry_widget %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ ea.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{# Labels #}

{% block form_label -%}
    {% if label is not same as(false) -%}
        {%- if compound is defined and compound -%}
            {%- set element = 'legend' -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- else -%}
            {%- set label_attr = label_attr|merge({for: id, class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label %}

{# Errors #}

{% block form_widget_compound %}
    <div class=\"form-widget-compound\">
        {% if 'collection' in block_prefixes %}
            {# the \"is iterable\" check is needed because if an object implements __toString() and
               returns an empty string, \"is empty\" returns true even if it's not a collection #}
            {% set isEmptyCollection = value is null or (value is iterable and value is empty) %}
            {% if isEmptyCollection %}
                {{ block('empty_collection') }}
            {% endif %}
            {% if isEmptyCollection or form.vars.prototype is defined %}
                {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
            {% endif %}
        {% endif %}

        {{ parent() }}
    </div>
{% endblock form_widget_compound %}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(ea.templatePath('label/empty')) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
    <div class=\"ea-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            {% set file_extension = download_uri|split('.')|last %}
            {% set extension_icons = {
                'gif': 'fa-file-image-o',
                'jpg': 'fa-file-image-o',
                'pdf': 'fa-file-pdf-o',
                'png': 'fa-file-image-o',
                'zip': 'fa-file-archive-o'
            } %}
            <a class=\"ea-vich-file-name\" href=\"{{ asset_helper is same as(true) ? asset(download_uri) : download_uri }}\">
                <i class=\"fa fa-fw {{ extension_icons[file_extension] ?? 'fa-file-o' }}\"></i>
                {{ download_title }}
            </a>
        {% endif %}

        {% set file_upload_js %}
            var newFile = document.getElementById('{{ form.file.vars.id }}').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('{{ form.file.vars.id }}_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        {% endset %}

        <div class=\"ea-vich-file-actions\">
            {# the container element is needed to allow customizing the <input type=\"file\" /> #}
            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> {{ 'action.choose_file'|trans({}, 'EasyAdminBundle') }}
                {{ form_widget(form.file, { 'attr': { 'onchange': file_upload_js }, vich: true}) }}
            </div>

            {% if form.delete is defined %}
                {{ form_row(form.delete, { label: 'form.label.delete'|trans({}, 'VichUploaderBundle') }) }}
            {% endif %}
        </div>
        <div class=\"small\" id=\"{{ form.file.vars.id }}_new_file_name\"></div>
    </div>
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
    {% set formTypeOptions = ea_crud_form.ea_field.formTypeOptions|default('') %}
    <div class=\"ea-vich-image\">
        {% if image_uri|default('') is not empty %}
            {% if download_uri|default('') is empty %}
                <div class=\"ea-lightbox-thumbnail\">
                    {% if formTypeOptions.imagine_pattern is defined and formTypeOptions.imagine_pattern is not empty %}
                        <img style=\"cursor: initial\" src=\"{{ (asset_helper is same as(true) ? asset(image_uri) : image_uri)|ea_apply_filter_if_exists('imagine_filter', formTypeOptions.imagine_pattern) }}\">
                    {% else %}
                        <img style=\"cursor: initial\" src=\"{{ asset_helper is same as(true) ? asset(image_uri) : image_uri }}\">
                    {% endif %}
                </div>
            {% else %}
                {% set _lightbox_id = 'ea-lightbox-' ~ id %}

                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                    {% if formTypeOptions.imagine_pattern is defined and formTypeOptions.imagine_pattern is not empty %}
                        <img src=\"{{ (asset_helper is same as(true) ? asset(download_uri) : download_uri)|ea_apply_filter_if_exists('imagine_filter', formTypeOptions.imagine_pattern) }}\">
                    {% else %}
                        <img src=\"{{ asset_helper is same as(true) ? asset(download_uri) : download_uri }}\">
                    {% endif %}
                </a>

                <div id=\"{{ _lightbox_id }}\" class=\"ea-lightbox\">
                    {% if formTypeOptions.imagine_pattern is defined and formTypeOptions.imagine_pattern is not empty %}
                        <img src=\"{{ (asset_helper is same as(true) ? asset(download_uri) : download_uri)|ea_apply_filter_if_exists('imagine_filter', formTypeOptions.imagine_pattern) }}\">
                    {% else %}
                        <img src=\"{{ asset_helper is same as(true) ? asset(download_uri) : download_uri }}\">
                    {% endif %}
                </div>
            {% endif %}
        {% endif %}

        {% set file_upload_js %}
            var newFile = document.getElementById('{{ form.file.vars.id }}').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('{{ form.file.vars.id }}_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        {% endset %}

        <div class=\"ea-vich-image-actions\">
            {# the container element is needed to allow customizing the <input type=\"file\" /> #}
            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> {{ 'action.choose_file'|trans({}, 'EasyAdminBundle') }}
                {{ form_widget(form.file, { 'attr': { 'onchange': file_upload_js }, vich: true}) }}
            </div>

            {% if form.delete is defined %}
                {{ form_row(form.delete, { label: 'form.label.delete'|trans({}, 'VichUploaderBundle') }) }}
            {% endif %}
        </div>
        <div class=\"small\" id=\"{{ form.file.vars.id }}_new_file_name\"></div>
    </div>
{% endblock %}

{% block ea_crud_rest %}
    {{ form_rest(form) }}
{% endblock ea_crud_rest %}

{# EasyAdmin form type #}
{% block ea_crud_widget %}
    {% if ea_crud_form.form_tabs|length > 0 %}
        <div class=\"col-12\">
            <div class=\"nav-tabs-custom form-tabs\">
                <ul class=\"nav nav-tabs\">
                    {% for tab_name, tab_config in ea_form_tabs %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if tab_config.active %}active{% endif %}\" href=\"#{{ tab_config['id'] }}\" id=\"{{ tab_config['id'] }}-tab\" data-toggle=\"tab\">
                                {%- if tab_config.icon|default(false) -%}
                                    <i class=\"fa fa-fw fa-{{ tab_config.icon }}\"></i>
                                {%- endif -%}
                                {{ tab_config['label']|trans(domain = ea.i18n.translationDomain) }}
                                {%- if tab_config.errors > 0 -%}
                                    <span class=\"badge badge-danger\" title=\"{{ 'form.tab.error_badge_title'|trans({'%count%': tab_config.errors}, 'EasyAdminBundle') }}\">
                                        {{- tab_config.errors -}}
                                    </span>
                                {%- endif -%}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
                <div class=\"tab-content\">
                    {% for tab_name, tab_config in ea_form_tabs %}
                        <div id=\"{{ tab_config['id'] }}\" class=\"tab-pane {% if tab_config.active %}active{% endif %} {{ tab_config['css_class']|default('') }}\">
                            {% if tab_config['help']|default(false) %}
                                <div class=\"content-header-help tab-help\">
                                    {{ tab_config['help']|trans(domain = ea.i18n.translationDomain)|raw }}
                                </div>
                            {% endif %}

                            {{ block('ea_crud_widget_panels') }}
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    {% else %}
        {{ block('ea_crud_widget_panels') }}
    {% endif %}
{% endblock ea_crud_widget %}

{% block ea_crud_widget_panels %}
    {% for panel_name, panel_config in ea_crud_form.form_panels|filter(panel_config => not panel_config.form_tab or panel_config.form_tab == tab_name) %}
        {% set panel_has_header = panel_config.label|default(false) or panel_config.icon|default(false) %}

        {% set collapsible = panel_config.collapsible %}
        {% set collapsed = panel_config.collapsed %}

        <div class=\"{{ panel_config.css_class ?? '' }}\">
            <div class=\"content-panel\">
                {% if panel_has_header %}
                    <div class=\"content-panel-header {{ collapsible ? 'collapsible' }} {{ panel_config.help|default(false) is not empty ? 'with-help' }}\">
                        {% if collapsible %}
                            <a href=\"#content-{{ panel_name }}\" data-toggle=\"collapse\" class=\"content-panel-collapse {{ collapsed ? 'collapsed' }}\" aria-expanded=\"{{ collapsed ? 'false' : 'true' }}\" aria-controls=\"content-{{ panel_name }}\">
                                <i class=\"fas fw fa-chevron-right collapse-icon\"></i>
                        {% endif %}

                            {% if panel_config.icon|default(false) %}
                                <i class=\"{{ panel_config.icon }}\"></i>
                            {% endif %}
                            {{ panel_config.label|raw }}

                        {% if collapsible %}
                            </a>
                        {% endif %}

                        {% if panel_config.help|default(false) %}
                            <div class=\"content-panel-header-help\">{{ panel_config.help|raw }}</div>
                        {% endif %}
                    </div>
                {% endif %}

                <div id=\"content-{{ panel_name }}\" class=\"content-panel-body with-background {{ not panel_has_header ? 'without-header' }} without-footer {{ collapsible ? 'collapse' }} {{ not collapsed ? 'show'}}\">
                    {% for field in form|filter(field => 'hidden' not in field.vars.block_prefixes and field.vars.ea_crud_form.form_panel == panel_name) %}
                        {% if not field.vars.ea_crud_form.form_tab or field.vars.ea_crud_form.form_tab == tab_name %}
                            {{ form_row(field) }}
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
    {% else %}
        <div class=\"content-panel\">
            <div class=\"content-panel-body with-background without-header without-footer\">
                {% for field in form|filter(field => 'hidden' not in field.vars.block_prefixes and (not field.vars.ea_crud_form.form_tab or field.vars.ea_crud_form.form_tab == tab_name)) %}
                    {{ form_row(field) }}
                {% endfor %}
            </div>
        </div>
    {% endfor %}
{% endblock ea_crud_widget_panels %}

{# EasyAdminAutocomplete form type #}
{% block ea_autocomplete_widget %}
    {{ form_widget(form.autocomplete, { attr: attr|merge({ required: required }) }) }}
{% endblock ea_autocomplete_widget %}

{% block ea_autocomplete_inner_label %}
    {% set name = form_parent(form).vars.name %}
    {{ block('form_label') }}
{% endblock ea_autocomplete_inner_label %}

{# EasyAdmin's CodeEditor form type #}
{% block ea_code_editor_widget %}
    {{ form_widget(form, { attr: attr|merge({
        'data-ea-code-editor-field': 'true',
        'data-language': form.vars.ea_crud_form.ea_field.customOptions.get('language'),
        'data-tab-size': form.vars.ea_crud_form.ea_field.customOptions.get('tabSize'),
        'data-indent-with-tabs': form.vars.ea_crud_form.ea_field.customOptions.get('indentWithTabs') ? 'true' : 'false',
        'data-show-line-numbers': form.vars.ea_crud_form.ea_field.customOptions.get('showLineNumbers') ? 'true' : 'false',
    }) }) }}

    {% set numOfRows = form.vars.ea_crud_form.ea_field.customOptions.get('numOfRows') %}
    {% if numOfRows is not null %}
        <style type=\"text/css\">
            {# here we consider 21px as the average line height #}
            #{{ id }} + .CodeMirror { height: {{ (21 * numOfRows)|round }}px !important; max-height: none; }
        </style>
    {% endif %}
{% endblock ea_code_editor_widget %}

{# EasyAdmin's TextEditor form type #}
{% block ea_text_editor_widget %}
    {% set numOfRows = form.vars.ea_crud_form.ea_field.customOptions.get('numOfRows') %}

    {{ form_widget(form, { attr: attr|merge({ style: 'display: none', class: 'ea-text-editor-content' }) }) }}

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"{{ id }}\" class=\"trix-content\"></trix-editor>
    </div>

    {% if numOfRows %}
        <style type=\"text/css\">
            trix-editor[input={{ id }}].trix-content {
                {# here we consider 21px as the average line height #}
                min-height: {{ (numOfRows * 21)|round }}px;
            }
        </style>
    {% endif %}
{% endblock ea_text_editor_widget %}

{# EasyAdminSection form type #}
{% block ea_section_row %}
    <div class=\"form-section {{ ea.field.icon|default(false) == false and ea.field.label|default(false) == false ? 'form-section-empty' }} {{ ea.field.css_class|default('') }}\">
        <h2>
            {% if ea.field.icon|default(false) %}<i class=\"fa fa-fw fa-{{ ea.field.icon }}\"></i>{% endif %}
            <span>{% if ea.field.label|default(false) %}{{ ea.field.label|default('')|trans(domain = ea.i18n.translationDomain)|raw }}{% endif %}</span>
        </h2>

        {% if ea.field.help|default(false) %}
            <p class=\"form-section-help\">{{ ea.field.help|trans(domain = ea.i18n.translationDomain)|raw }}</p>
        {% endif %}
    </div>
{% endblock ea_section_row %}

{# EasyAdminFilters form type #}
{% block ea_filters_widget %}
    {% set applied_filters = ea.request.query.get('filters')|default([])|keys %}

    {% for field in form %}
        <div class=\"filter-field {% if not loop.last %}border-bottom{% endif %} py-1 px-3 {% if loop.last %}pb-2{% endif %}\" data-filter-property=\"{{ field.vars.name }}\">
            <div class=\"filter-heading\" id=\"filter-heading-{{ loop.index }}\">
                <input type=\"checkbox\" class=\"filter-checkbox\" {% if field.vars.name in applied_filters %}checked{% endif %}>
                <a data-toggle=\"collapse\" href=\"#filter-content-{{ loop.index }}\" aria-expanded=\"{{ field.vars.name in applied_filters ? 'true' : 'false' }}\" aria-controls=\"filter-content-{{ loop.index }}\">
                    {{ field.vars.label|default(field.vars.name|humanize)|trans(domain = ea.i18n.translationDomain) }}
                </a>
            </div>
            <div id=\"filter-content-{{ loop.index }}\" class=\"filter-content collapse {% if field.vars.name in applied_filters %}show{% endif %}\" aria-labelledby=\"filter-heading-{{ loop.index }}\">
                <div class=\"form-widget my-2\">
                    {{ form_widget(field) }}
                </div>
            </div>
        </div>
    {% endfor %}

    <script>
        document.querySelectorAll('.filter-checkbox').forEach(filterCheckbox => {
            filterCheckbox.addEventListener('change', function () {
                const filterToggleLink = filterCheckbox.nextElementSibling;
                const filterExpandedAttribute = filterCheckbox.nextElementSibling.getAttribute('aria-expanded');

                if ((filterCheckbox.checked && 'false' === filterExpandedAttribute) || (!filterCheckbox.checked && 'true' === filterExpandedAttribute)) {
                    filterToggleLink.click();
                }
            });
        });

        // we can't use -> \"document.querySelector('form#filters').addEventListener('change', ...);\"
        // because it doesn't work with Select2 elements changes
        // TODO: when using the native datepicker, 'change' isn't fired (either in plain JavaScript
        // or jQuery) unless you input the entire date + time information
        \$(document).on('change', 'form#{{ form.vars.id }}', function (event) {
            if (event.target.classList.contains('filter-checkbox')) {
                return;
            }

            let filterCheckbox = event.target.closest('.filter-field').querySelector('.filter-checkbox');
            if (!filterCheckbox.checked) {
                filterCheckbox.checked = true;
            }
        });
    </script>

    {{ include('@EasyAdmin/crud/includes/_select2_widget.html.twig') }}
{% endblock ea_filters_widget %}

{% block ea_numeric_filter_widget %}
    <div class=\"form-widget-compound\">
        {{ form_row(form.comparison) }}
        {{ form_row(form.value) }}
        <div id=\"wrapper_{{ form.value2.vars.id }}\" {% if form.comparison.vars.value != 'between' %}style=\"display: none\"{% endif %}>
            {{ form_row(form.value2) }}
        </div>
        <script>
            document.querySelector('#{{ form.comparison.vars.id }}').addEventListener('change', function(event) {
                const input = document.querySelector('#wrapper_{{ form.value2.vars.id }}');
                input.style.display = event.currentTarget.value === 'between' ? '' : 'none';
            });
        </script>
    </div>
    {{- form_errors(form) -}}
{% endblock ea_numeric_filter_widget %}

{% block ea_datetime_filter_widget %}
    {{ block('ea_numeric_filter_widget') }}
{% endblock ea_datetime_filter_widget %}

{% block ea_fileupload_widget %}
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            {% set placeholder = '' %}
            {% set title = '' %}
            {% set filesLabel = 'files'|trans({}, 'EasyAdminBundle') %}
            {% if currentFiles %}
                {% if multiple %}
                    {% set placeholder = currentFiles|length ~ ' ' ~ filesLabel %}
                {% else %}
                    {% set placeholder = (currentFiles|first).filename %}
                    {% set title = (currentFiles|first).mTime|date %}
                {% endif %}
            {% endif %}
            {{ form_widget(form.file, { attr: form.file.vars.attr|merge({ placeholder: placeholder, title: title, 'data-files-label': filesLabel }) }) }}
            <div class=\"input-group-append\">
                <span class=\"input-group-text\" {% if currentFiles is empty %}style=\"display: none\"{% endif %}>
                    {%- if currentFiles -%}
                        {% if multiple %}
                            {{ (currentFiles|reduce((carry, file) => carry + file.size))|ea_filesize }}
                        {% else %}
                            {{ (currentFiles|first).size|ea_filesize }}
                        {% endif %}
                    {%- endif -%}
                </span>
                {% if allow_delete %}
                    <label class=\"btn ea-fileupload-delete-btn\" {% if currentFiles is empty %}style=\"display: none\"{% endif %} for=\"{{ form.delete.vars.id }}\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                {% endif %}
                <label class=\"btn\" for=\"{{ form.file.vars.id }}\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        {% if multiple and currentFiles %}
            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    {% for file in currentFiles %}
                        <tr>
                            <td>
                                {% if download_path %}<a href=\"{{ asset(download_path ~ file.filename) }}\">{% endif %}
                                    <span title=\"{{ file.mTime|date }}\">
                                        <i class=\"fa fa-file-o\"></i> {{ file.filename }}
                                    </span>
                                    {% if download_path %}</a>{% endif %}
                            </td>
                            <td class=\"text-right file-size\">{{ file.size|ea_filesize }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
        {% if allow_delete %}
            <div style=\"display: none\">{{ form_widget(form.delete, { label: false }) }}</div>
        {% endif %}
    </div>
    {{ form_errors(form.file) }}
{% endblock %}

{% block ea_slug_widget %}
    {% set attr = attr|merge({
        'data-ea-slug-field': '',
        'data-target': form.parent.children[target].vars.id
    }) %}

    <div class=\"input-group\">
        {{ block('form_widget') }}
        <div class=\"input-group-append\">
            <button class=\"btn btn-outline-secondary\" type=\"button\">
                <i class=\"fas fa-lock fa-fw\"></i>
            </button>
        </div>
    </div>
{% endblock %}
", "@EasyAdmin/crud/form_theme.html.twig", "/home/profchen/Documents/Epitech/Semestre2/PHP/MyQuiz/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/form_theme.html.twig");
    }
}
