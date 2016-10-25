<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cbaa4617ce41a07b3f78e5209fae0c3985868d5d6a2a8bdae01837ea050f7d6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca766620f47479d2fd98a859b30ca5beec3de37f8d4eee4875ed736eaad0a66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca766620f47479d2fd98a859b30ca5beec3de37f8d4eee4875ed736eaad0a66b->enter($__internal_ca766620f47479d2fd98a859b30ca5beec3de37f8d4eee4875ed736eaad0a66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca766620f47479d2fd98a859b30ca5beec3de37f8d4eee4875ed736eaad0a66b->leave($__internal_ca766620f47479d2fd98a859b30ca5beec3de37f8d4eee4875ed736eaad0a66b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2437bd25851701b085846eb34022c156d5188bb50e8b124fe17ae1745989e5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2437bd25851701b085846eb34022c156d5188bb50e8b124fe17ae1745989e5e7->enter($__internal_2437bd25851701b085846eb34022c156d5188bb50e8b124fe17ae1745989e5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2437bd25851701b085846eb34022c156d5188bb50e8b124fe17ae1745989e5e7->leave($__internal_2437bd25851701b085846eb34022c156d5188bb50e8b124fe17ae1745989e5e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db8310fb4eaffb8618d4eb3de355ceab81a197580e925c74e566ece0c3e8a892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8310fb4eaffb8618d4eb3de355ceab81a197580e925c74e566ece0c3e8a892->enter($__internal_db8310fb4eaffb8618d4eb3de355ceab81a197580e925c74e566ece0c3e8a892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_db8310fb4eaffb8618d4eb3de355ceab81a197580e925c74e566ece0c3e8a892->leave($__internal_db8310fb4eaffb8618d4eb3de355ceab81a197580e925c74e566ece0c3e8a892_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3eb288f2e3b2fb27a722fdba273110c96af1e6148a19e2c7eb447d19fee26992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb288f2e3b2fb27a722fdba273110c96af1e6148a19e2c7eb447d19fee26992->enter($__internal_3eb288f2e3b2fb27a722fdba273110c96af1e6148a19e2c7eb447d19fee26992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3eb288f2e3b2fb27a722fdba273110c96af1e6148a19e2c7eb447d19fee26992->leave($__internal_3eb288f2e3b2fb27a722fdba273110c96af1e6148a19e2c7eb447d19fee26992_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
