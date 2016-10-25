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
        $__internal_2f0e9c8bf078725ef1a6ba5b189bb4666b07a8cf967f802e72d0f401223f61a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0e9c8bf078725ef1a6ba5b189bb4666b07a8cf967f802e72d0f401223f61a5->enter($__internal_2f0e9c8bf078725ef1a6ba5b189bb4666b07a8cf967f802e72d0f401223f61a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f0e9c8bf078725ef1a6ba5b189bb4666b07a8cf967f802e72d0f401223f61a5->leave($__internal_2f0e9c8bf078725ef1a6ba5b189bb4666b07a8cf967f802e72d0f401223f61a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b14cdb7cf4f0048243816d3ddb4053f44f2e585f726a77f3ec6495b62f8b3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b14cdb7cf4f0048243816d3ddb4053f44f2e585f726a77f3ec6495b62f8b3f5->enter($__internal_9b14cdb7cf4f0048243816d3ddb4053f44f2e585f726a77f3ec6495b62f8b3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        <h1>Bonjour ceci est la première page de notre site !</h1>
    </div>
";
        
        $__internal_9b14cdb7cf4f0048243816d3ddb4053f44f2e585f726a77f3ec6495b62f8b3f5->leave($__internal_9b14cdb7cf4f0048243816d3ddb4053f44f2e585f726a77f3ec6495b62f8b3f5_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_762b346f2003a5e42f4411b9b1ac062c620f73de3da4043a3defa3e643af8f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762b346f2003a5e42f4411b9b1ac062c620f73de3da4043a3defa3e643af8f43->enter($__internal_762b346f2003a5e42f4411b9b1ac062c620f73de3da4043a3defa3e643af8f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
";
        
        $__internal_762b346f2003a5e42f4411b9b1ac062c620f73de3da4043a3defa3e643af8f43->leave($__internal_762b346f2003a5e42f4411b9b1ac062c620f73de3da4043a3defa3e643af8f43_prof);

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
        <h1>Bonjour ceci est la première page de notre site !</h1>
    </div>
{% endblock %}

{% block stylesheets %}

{% endblock %}
";
    }
}
