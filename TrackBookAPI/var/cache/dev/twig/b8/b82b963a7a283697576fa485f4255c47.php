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

/* register/index.html.twig */
class __TwigTemplate_2509e75b45d3b154bbc10e733af1a6a8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "register/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello RegisterController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<form method=\"post\">
\t\t<div class=\"container\">
\t\t\t<div class=\"login-container\">
\t\t\t\t<input id=\"item-1\" type=\"radio\" name=\"item\" class=\"sign-in\" checked>
\t\t\t\t<label for=\"item-1\" class=\"item\">Sign In</label>

\t\t\t\t<input id=\"item-2\" type=\"radio\" name=\"item\" class=\"sign-up\">
\t\t\t\t<label for=\"item-2\" class=\"item\">Register</label>


\t\t\t\t<div class=\"login-form\">
\t\t\t\t\t<div class=\"sign-in-htm\">
\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input placeholder=\"Email\" type=\"email\" class=\"input\" name=\"email\" autocomplete=\"email\" autofocus>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input placeholder=\"Password\" name=\"password\" id=\"pass\" type=\"password\" class=\"input\" data-type=\"password\" autocomplete=\"current-password\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"button\" value=\"Sign In\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"hr\"></div>
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t<a href=\"#forgot\">Forgot Password?</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sign-up-htm\">
\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input placeholder=\"Username\" id=\"user1\" type=\"text\" class=\"input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input placeholder=\"avatar\" id=\"avatar\" type=\"text\" class=\"input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input placeholder=\"Email adress\" id=\"pass\" type=\"text\" class=\"input\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input placeholder=\"Password\" id=\"pass1\" type=\"password\" class=\"input\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"button\" value=\"Sign Up\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"hr\"></div>
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t<label for=\"item-1\">Already have an account?</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "register/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  74 => 8,  67 => 7,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello RegisterController!
{% endblock %}


{% block body %}
\t<form method=\"post\">
\t\t<div class=\"container\">
\t\t\t<div class=\"login-container\">
\t\t\t\t<input id=\"item-1\" type=\"radio\" name=\"item\" class=\"sign-in\" checked>
\t\t\t\t<label for=\"item-1\" class=\"item\">Sign In</label>

\t\t\t\t<input id=\"item-2\" type=\"radio\" name=\"item\" class=\"sign-up\">
\t\t\t\t<label for=\"item-2\" class=\"item\">Register</label>


\t\t\t\t<div class=\"login-form\">
\t\t\t\t\t<div class=\"sign-in-htm\">
\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input placeholder=\"Email\" type=\"email\" class=\"input\" name=\"email\" autocomplete=\"email\" autofocus>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input placeholder=\"Password\" name=\"password\" id=\"pass\" type=\"password\" class=\"input\" data-type=\"password\" autocomplete=\"current-password\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"button\" value=\"Sign In\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"hr\"></div>
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t<a href=\"#forgot\">Forgot Password?</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sign-up-htm\">
\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input placeholder=\"Username\" id=\"user1\" type=\"text\" class=\"input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input placeholder=\"avatar\" id=\"avatar\" type=\"text\" class=\"input\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input placeholder=\"Email adress\" id=\"pass\" type=\"text\" class=\"input\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input placeholder=\"Password\" id=\"pass1\" type=\"password\" class=\"input\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"group\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"button\" value=\"Sign Up\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"hr\"></div>
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t<label for=\"item-1\">Already have an account?</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t{% endblock %}
", "register/index.html.twig", "C:\\laragon\\www\\API_symfony_book\\TrackBookAPI\\templates\\register\\index.html.twig");
    }
}
