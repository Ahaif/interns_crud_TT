<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* intern/show.html.twig */
class __TwigTemplate_5847a16b77180727406e679426c33a05 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "intern/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "intern/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "intern/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Intern";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<main class=\"container py-4\">
    <h1 class=\"h3 mb-3 fw-normal\">Intern Details</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th scope=\"row\">Id</th>
                <td>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intern"]) || array_key_exists("intern", $context) ? $context["intern"] : (function () { throw new RuntimeError('Variable "intern" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th scope=\"row\">First Name</th>
                <td>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intern"]) || array_key_exists("intern", $context) ? $context["intern"] : (function () { throw new RuntimeError('Variable "intern" does not exist.', 17, $this->source); })()), "firstName", [], "any", false, false, false, 17), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th scope=\"row\">Last Name</th>
                <td>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intern"]) || array_key_exists("intern", $context) ? $context["intern"] : (function () { throw new RuntimeError('Variable "intern" does not exist.', 21, $this->source); })()), "lastName", [], "any", false, false, false, 21), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th scope=\"row\">Duration</th>
                <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intern"]) || array_key_exists("intern", $context) ? $context["intern"] : (function () { throw new RuntimeError('Variable "intern" does not exist.', 25, $this->source); })()), "duration", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th scope=\"row\">Subject</th>
                <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intern"]) || array_key_exists("intern", $context) ? $context["intern"] : (function () { throw new RuntimeError('Variable "intern" does not exist.', 29, $this->source); })()), "subject", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th scope=\"row\">Salary</th>
                <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intern"]) || array_key_exists("intern", $context) ? $context["intern"] : (function () { throw new RuntimeError('Variable "intern" does not exist.', 33, $this->source); })()), "salary", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th scope=\"row\">Eval</th>
                <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["intern"]) || array_key_exists("intern", $context) ? $context["intern"] : (function () { throw new RuntimeError('Variable "intern" does not exist.', 37, $this->source); })()), "eval", [], "any", false, false, false, 37), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"d-flex justify-content-start gap-2 my-3\">
        <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_intern_index");
        yield "\" class=\"btn btn-outline-primary\">Back to List</a>
        <a href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_intern_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["intern"]) || array_key_exists("intern", $context) ? $context["intern"] : (function () { throw new RuntimeError('Variable "intern" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">Edit</a>
        ";
        // line 45
        yield Twig\Extension\CoreExtension::include($this->env, $context, "intern/_delete_form.html.twig");
        yield "
        <a href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intern_export_single_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["intern"]) || array_key_exists("intern", $context) ? $context["intern"] : (function () { throw new RuntimeError('Variable "intern" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Download PDF</a>
    </div>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "intern/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  162 => 46,  158 => 45,  154 => 44,  150 => 43,  141 => 37,  134 => 33,  127 => 29,  120 => 25,  113 => 21,  106 => 17,  99 => 13,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Intern{% endblock %}

{% block body %}
<main class=\"container py-4\">
    <h1 class=\"h3 mb-3 fw-normal\">Intern Details</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th scope=\"row\">Id</th>
                <td>{{ intern.id }}</td>
            </tr>
            <tr>
                <th scope=\"row\">First Name</th>
                <td>{{ intern.firstName }}</td>
            </tr>
            <tr>
                <th scope=\"row\">Last Name</th>
                <td>{{ intern.lastName }}</td>
            </tr>
            <tr>
                <th scope=\"row\">Duration</th>
                <td>{{ intern.duration }}</td>
            </tr>
            <tr>
                <th scope=\"row\">Subject</th>
                <td>{{ intern.subject }}</td>
            </tr>
            <tr>
                <th scope=\"row\">Salary</th>
                <td>{{ intern.salary }}</td>
            </tr>
            <tr>
                <th scope=\"row\">Eval</th>
                <td>{{ intern.eval }}</td>
            </tr>
        </tbody>
    </table>

    <div class=\"d-flex justify-content-start gap-2 my-3\">
        <a href=\"{{ path('app_intern_index') }}\" class=\"btn btn-outline-primary\">Back to List</a>
        <a href=\"{{ path('app_intern_edit', {'id': intern.id}) }}\" class=\"btn btn-secondary\">Edit</a>
        {{ include('intern/_delete_form.html.twig') }}
        <a href=\"{{ path('intern_export_single_pdf', {'id': intern.id}) }}\" class=\"btn btn-primary\">Download PDF</a>
    </div>
</main>
{% endblock %}
", "intern/show.html.twig", "/home/user/Desktop/interns_crud_TT/templates/intern/show.html.twig");
    }
}
