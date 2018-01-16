<?php

/* vues/factures.html.twig */
class __TwigTemplate_3e770c9edd8c0df8add6d889d4db17825d3eb3988c8ccc0577fce5b74f26d686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/factures.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77d6ac34d88ae8f8ab4b49da4b33ff3b6fdd2af8133cd9a920acf21d96ef56ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77d6ac34d88ae8f8ab4b49da4b33ff3b6fdd2af8133cd9a920acf21d96ef56ce->enter($__internal_77d6ac34d88ae8f8ab4b49da4b33ff3b6fdd2af8133cd9a920acf21d96ef56ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/factures.html.twig"));

        $__internal_3740eaa771274139801ea028b274104522dc47fa93811ae24aea4397e92f85d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3740eaa771274139801ea028b274104522dc47fa93811ae24aea4397e92f85d7->enter($__internal_3740eaa771274139801ea028b274104522dc47fa93811ae24aea4397e92f85d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/factures.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77d6ac34d88ae8f8ab4b49da4b33ff3b6fdd2af8133cd9a920acf21d96ef56ce->leave($__internal_77d6ac34d88ae8f8ab4b49da4b33ff3b6fdd2af8133cd9a920acf21d96ef56ce_prof);

        
        $__internal_3740eaa771274139801ea028b274104522dc47fa93811ae24aea4397e92f85d7->leave($__internal_3740eaa771274139801ea028b274104522dc47fa93811ae24aea4397e92f85d7_prof);

    }

    public function getTemplateName()
    {
        return "vues/factures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
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
", "vues/factures.html.twig", "/Users/akoi-aka/lfb_projet_bl/app/Resources/views/vues/factures.html.twig");
    }
}
