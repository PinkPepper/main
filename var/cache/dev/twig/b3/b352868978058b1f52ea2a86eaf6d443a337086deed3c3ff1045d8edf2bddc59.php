<?php

/* default/index.html.twig */
class __TwigTemplate_af1ecaf0c50a5ce5fcd04d71336f7daa56408ede3882ebacc6eb02e171cfcd41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f511acb96002366f4f18715f03949345c18dbb28a8756e4c03037dc8f166c4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f511acb96002366f4f18715f03949345c18dbb28a8756e4c03037dc8f166c4b2->enter($__internal_f511acb96002366f4f18715f03949345c18dbb28a8756e4c03037dc8f166c4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f511acb96002366f4f18715f03949345c18dbb28a8756e4c03037dc8f166c4b2->leave($__internal_f511acb96002366f4f18715f03949345c18dbb28a8756e4c03037dc8f166c4b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_220d78c8b35db7c082887809328f400837afadaad6cac055cf21fefb4ad06314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220d78c8b35db7c082887809328f400837afadaad6cac055cf21fefb4ad06314->enter($__internal_220d78c8b35db7c082887809328f400837afadaad6cac055cf21fefb4ad06314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        <h1>Bonjour ceci est la première page de notre site</h1>
    </div>
";
        
        $__internal_220d78c8b35db7c082887809328f400837afadaad6cac055cf21fefb4ad06314->leave($__internal_220d78c8b35db7c082887809328f400837afadaad6cac055cf21fefb4ad06314_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_679af03117e66cf17613764260c1cd796191343a3167d1f7bbfc53f1a508cb11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679af03117e66cf17613764260c1cd796191343a3167d1f7bbfc53f1a508cb11->enter($__internal_679af03117e66cf17613764260c1cd796191343a3167d1f7bbfc53f1a508cb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
";
        
        $__internal_679af03117e66cf17613764260c1cd796191343a3167d1f7bbfc53f1a508cb11->leave($__internal_679af03117e66cf17613764260c1cd796191343a3167d1f7bbfc53f1a508cb11_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <div>
        <h1>Bonjour ceci est la première page de notre site</h1>
    </div>
{% endblock %}

{% block stylesheets %}

{% endblock %}
";
    }
}
