<?php

/* vues/archives.html.twig */
class __TwigTemplate_42f7f3fb7b09f0ab31f743e86da940284dd072a9900791a904b336c8d80d8013 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/archives.html.twig", 1);
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
        $__internal_382b78bab05905b6f60dbb9063eeb1804b1fb8cb2f823d8c98e7f358f4420709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382b78bab05905b6f60dbb9063eeb1804b1fb8cb2f823d8c98e7f358f4420709->enter($__internal_382b78bab05905b6f60dbb9063eeb1804b1fb8cb2f823d8c98e7f358f4420709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/archives.html.twig"));

        $__internal_1f0a7d9cda6cabe3c094b8dc4dec987a65392543fd6ce575aa682e68756331d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0a7d9cda6cabe3c094b8dc4dec987a65392543fd6ce575aa682e68756331d7->enter($__internal_1f0a7d9cda6cabe3c094b8dc4dec987a65392543fd6ce575aa682e68756331d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382b78bab05905b6f60dbb9063eeb1804b1fb8cb2f823d8c98e7f358f4420709->leave($__internal_382b78bab05905b6f60dbb9063eeb1804b1fb8cb2f823d8c98e7f358f4420709_prof);

        
        $__internal_1f0a7d9cda6cabe3c094b8dc4dec987a65392543fd6ce575aa682e68756331d7->leave($__internal_1f0a7d9cda6cabe3c094b8dc4dec987a65392543fd6ce575aa682e68756331d7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9285a11a6e89bee031d222fdf921a821f8ec1ce67734f53940255e861d9ba62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9285a11a6e89bee031d222fdf921a821f8ec1ce67734f53940255e861d9ba62->enter($__internal_e9285a11a6e89bee031d222fdf921a821f8ec1ce67734f53940255e861d9ba62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b05d220f5f0986a096df89e3d2f1d9cf0f92052cfd8ef2c8acac569a17565e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05d220f5f0986a096df89e3d2f1d9cf0f92052cfd8ef2c8acac569a17565e7b->enter($__internal_b05d220f5f0986a096df89e3d2f1d9cf0f92052cfd8ef2c8acac569a17565e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

    <button class=\"btn btn-primary\" style=\"width: 800px; height: 100px\">
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bllist");
        echo "\">BONS DE LIVRAISON</a>
    </button>
    <button class=\"btn btn-primary\" style=\"width: 800px; height: 100px\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factlist");
        echo "\">FACTURES</a>
    </button>
    <button style=\"width: 800px; height: 100px\">
        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page1");
        echo "\">Revenir sur la page d'accueil</a>
    </button>

";
        
        $__internal_b05d220f5f0986a096df89e3d2f1d9cf0f92052cfd8ef2c8acac569a17565e7b->leave($__internal_b05d220f5f0986a096df89e3d2f1d9cf0f92052cfd8ef2c8acac569a17565e7b_prof);

        
        $__internal_e9285a11a6e89bee031d222fdf921a821f8ec1ce67734f53940255e861d9ba62->leave($__internal_e9285a11a6e89bee031d222fdf921a821f8ec1ce67734f53940255e861d9ba62_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa36c4a18176a45eed70f980f06384734b5987c6cfa49bfdfb503f2265baac3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa36c4a18176a45eed70f980f06384734b5987c6cfa49bfdfb503f2265baac3a->enter($__internal_fa36c4a18176a45eed70f980f06384734b5987c6cfa49bfdfb503f2265baac3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0396e132a1a1ba290621cb0e0db2c76e9532fd15a757a0b217c1ec1018e8d63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0396e132a1a1ba290621cb0e0db2c76e9532fd15a757a0b217c1ec1018e8d63a->enter($__internal_0396e132a1a1ba290621cb0e0db2c76e9532fd15a757a0b217c1ec1018e8d63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    <style>
        * {text-align:center;}
        button {
            margin-top: 80px;
        }
    </style>
";
        
        $__internal_0396e132a1a1ba290621cb0e0db2c76e9532fd15a757a0b217c1ec1018e8d63a->leave($__internal_0396e132a1a1ba290621cb0e0db2c76e9532fd15a757a0b217c1ec1018e8d63a_prof);

        
        $__internal_fa36c4a18176a45eed70f980f06384734b5987c6cfa49bfdfb503f2265baac3a->leave($__internal_fa36c4a18176a45eed70f980f06384734b5987c6cfa49bfdfb503f2265baac3a_prof);

    }

    public function getTemplateName()
    {
        return "vues/archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 18,  81 => 17,  67 => 12,  61 => 9,  55 => 6,  50 => 3,  41 => 2,  11 => 1,);
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


    <button class=\"btn btn-primary\" style=\"width: 800px; height: 100px\">
        <a href=\"{{ path('bllist') }}\">BONS DE LIVRAISON</a>
    </button>
    <button class=\"btn btn-primary\" style=\"width: 800px; height: 100px\">
        <a href=\"{{ path('factlist') }}\">FACTURES</a>
    </button>
    <button style=\"width: 800px; height: 100px\">
        <a href=\"{{ path('page1') }}\">Revenir sur la page d'accueil</a>
    </button>

{% endblock %}

{% block stylesheets %}
    <style>
        * {text-align:center;}
        button {
            margin-top: 80px;
        }
    </style>
{% endblock %}", "vues/archives.html.twig", "/Users/akoi-aka/lfb_projet_bl/app/Resources/views/vues/archives.html.twig");
    }
}
