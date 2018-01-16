<?php

/* vues/bllist.html.twig */
class __TwigTemplate_94c374d21af464d60e216b27088a3a22f8a3d1f754688cb76c0f6d34e4615919 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/bllist.html.twig", 1);
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
        $__internal_c7a996ed441fb4feb7cc3e44ae188ba60e9b651661e45dcddf92c507cac3bb41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a996ed441fb4feb7cc3e44ae188ba60e9b651661e45dcddf92c507cac3bb41->enter($__internal_c7a996ed441fb4feb7cc3e44ae188ba60e9b651661e45dcddf92c507cac3bb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/bllist.html.twig"));

        $__internal_61f5f694adfaad35c59aa6560e4fafbd0f8c96b97a9341a2dec1ed5d98553f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f5f694adfaad35c59aa6560e4fafbd0f8c96b97a9341a2dec1ed5d98553f40->enter($__internal_61f5f694adfaad35c59aa6560e4fafbd0f8c96b97a9341a2dec1ed5d98553f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/bllist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7a996ed441fb4feb7cc3e44ae188ba60e9b651661e45dcddf92c507cac3bb41->leave($__internal_c7a996ed441fb4feb7cc3e44ae188ba60e9b651661e45dcddf92c507cac3bb41_prof);

        
        $__internal_61f5f694adfaad35c59aa6560e4fafbd0f8c96b97a9341a2dec1ed5d98553f40->leave($__internal_61f5f694adfaad35c59aa6560e4fafbd0f8c96b97a9341a2dec1ed5d98553f40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4df32cd404911dcfb049253ff9ac210e57338700560156f6b261a1ea78849b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df32cd404911dcfb049253ff9ac210e57338700560156f6b261a1ea78849b47->enter($__internal_4df32cd404911dcfb049253ff9ac210e57338700560156f6b261a1ea78849b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1d2207b8e61fc85231285a5128691eadcceac8fd530d71e897ff8d227233243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d2207b8e61fc85231285a5128691eadcceac8fd530d71e897ff8d227233243->enter($__internal_a1d2207b8e61fc85231285a5128691eadcceac8fd530d71e897ff8d227233243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>PAGE EN CONSTRUCTION</h1>
    <button style=\"width: 800px; height: 100px\">
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page1");
        echo "\">Revenir sur la page d'accueil</a>
    </button>
";
        
        $__internal_a1d2207b8e61fc85231285a5128691eadcceac8fd530d71e897ff8d227233243->leave($__internal_a1d2207b8e61fc85231285a5128691eadcceac8fd530d71e897ff8d227233243_prof);

        
        $__internal_4df32cd404911dcfb049253ff9ac210e57338700560156f6b261a1ea78849b47->leave($__internal_4df32cd404911dcfb049253ff9ac210e57338700560156f6b261a1ea78849b47_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32b1ccd9b0c12d53cddf3a54aa7b62c4b968dc949bda334b8594f5c604d3a4bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b1ccd9b0c12d53cddf3a54aa7b62c4b968dc949bda334b8594f5c604d3a4bc->enter($__internal_32b1ccd9b0c12d53cddf3a54aa7b62c4b968dc949bda334b8594f5c604d3a4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8a3e183531ddb0ac7d9a7c848787f65c2c85600c61f4ef03510ddf9e9f2a68f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3e183531ddb0ac7d9a7c848787f65c2c85600c61f4ef03510ddf9e9f2a68f0->enter($__internal_8a3e183531ddb0ac7d9a7c848787f65c2c85600c61f4ef03510ddf9e9f2a68f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <style>
        * {text-align:center;}
        button {
            margin-top: 40px;
        }
    </style>
";
        
        $__internal_8a3e183531ddb0ac7d9a7c848787f65c2c85600c61f4ef03510ddf9e9f2a68f0->leave($__internal_8a3e183531ddb0ac7d9a7c848787f65c2c85600c61f4ef03510ddf9e9f2a68f0_prof);

        
        $__internal_32b1ccd9b0c12d53cddf3a54aa7b62c4b968dc949bda334b8594f5c604d3a4bc->leave($__internal_32b1ccd9b0c12d53cddf3a54aa7b62c4b968dc949bda334b8594f5c604d3a4bc_prof);

    }

    public function getTemplateName()
    {
        return "vues/bllist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 11,  67 => 10,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>PAGE EN CONSTRUCTION</h1>
    <button style=\"width: 800px; height: 100px\">
        <a href=\"{{ path('page1') }}\">Revenir sur la page d'accueil</a>
    </button>
{% endblock %}

{% block stylesheets %}
    <style>
        * {text-align:center;}
        button {
            margin-top: 40px;
        }
    </style>
{% endblock %}", "vues/bllist.html.twig", "/Users/akoi-aka/lfb_projet_bl/app/Resources/views/vues/bllist.html.twig");
    }
}
