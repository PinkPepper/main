<?php

/* base.html.twig */
class __TwigTemplate_e68c7607082e05825f2e4f7d2c6f0338902ff75180c8c5c118002f7402806d6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_861d8f21e7c10454bfeecf61389ca56332e6e1018f6f79d92ec534673d4a6258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861d8f21e7c10454bfeecf61389ca56332e6e1018f6f79d92ec534673d4a6258->enter($__internal_861d8f21e7c10454bfeecf61389ca56332e6e1018f6f79d92ec534673d4a6258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_861d8f21e7c10454bfeecf61389ca56332e6e1018f6f79d92ec534673d4a6258->leave($__internal_861d8f21e7c10454bfeecf61389ca56332e6e1018f6f79d92ec534673d4a6258_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32f38469186d474e66e51a947cb1d2aa449076f882dc138a4a184eca856f86f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f38469186d474e66e51a947cb1d2aa449076f882dc138a4a184eca856f86f3->enter($__internal_32f38469186d474e66e51a947cb1d2aa449076f882dc138a4a184eca856f86f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_32f38469186d474e66e51a947cb1d2aa449076f882dc138a4a184eca856f86f3->leave($__internal_32f38469186d474e66e51a947cb1d2aa449076f882dc138a4a184eca856f86f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_90423b21e6b031470156f9b9ad3689f80c67ca5e6be6376c5d8aed92f4394aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90423b21e6b031470156f9b9ad3689f80c67ca5e6be6376c5d8aed92f4394aff->enter($__internal_90423b21e6b031470156f9b9ad3689f80c67ca5e6be6376c5d8aed92f4394aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_90423b21e6b031470156f9b9ad3689f80c67ca5e6be6376c5d8aed92f4394aff->leave($__internal_90423b21e6b031470156f9b9ad3689f80c67ca5e6be6376c5d8aed92f4394aff_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_81e6584c6ce78c143932406845245b094557c342cb58c4d67093090123cd338b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e6584c6ce78c143932406845245b094557c342cb58c4d67093090123cd338b->enter($__internal_81e6584c6ce78c143932406845245b094557c342cb58c4d67093090123cd338b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_81e6584c6ce78c143932406845245b094557c342cb58c4d67093090123cd338b->leave($__internal_81e6584c6ce78c143932406845245b094557c342cb58c4d67093090123cd338b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_261e2c58d230e8755c4d1926785a2c8ca51625115904a89b13b48a42695c6fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261e2c58d230e8755c4d1926785a2c8ca51625115904a89b13b48a42695c6fb6->enter($__internal_261e2c58d230e8755c4d1926785a2c8ca51625115904a89b13b48a42695c6fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_261e2c58d230e8755c4d1926785a2c8ca51625115904a89b13b48a42695c6fb6->leave($__internal_261e2c58d230e8755c4d1926785a2c8ca51625115904a89b13b48a42695c6fb6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
