<?php

/* vues/blpreviewprint.html.twig */
class __TwigTemplate_ef59f90d1c0a7918a5cdb026bffe0c64c90455bade89058f02e64cf55ff77414 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/blpreviewprint.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23c79d35f6f97911049ff79d3636f8ca3e7135c1e590d4bcd7e1ec7f0f61491e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c79d35f6f97911049ff79d3636f8ca3e7135c1e590d4bcd7e1ec7f0f61491e->enter($__internal_23c79d35f6f97911049ff79d3636f8ca3e7135c1e590d4bcd7e1ec7f0f61491e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/blpreviewprint.html.twig"));

        $__internal_1038390b46e20480b8759bce8de223a20bf1fc364cb8c685f1145c79b4e473fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1038390b46e20480b8759bce8de223a20bf1fc364cb8c685f1145c79b4e473fe->enter($__internal_1038390b46e20480b8759bce8de223a20bf1fc364cb8c685f1145c79b4e473fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/blpreviewprint.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23c79d35f6f97911049ff79d3636f8ca3e7135c1e590d4bcd7e1ec7f0f61491e->leave($__internal_23c79d35f6f97911049ff79d3636f8ca3e7135c1e590d4bcd7e1ec7f0f61491e_prof);

        
        $__internal_1038390b46e20480b8759bce8de223a20bf1fc364cb8c685f1145c79b4e473fe->leave($__internal_1038390b46e20480b8759bce8de223a20bf1fc364cb8c685f1145c79b4e473fe_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_7f66395c4050002b38a7c8e6603f90aed1b6049a711d4d7457f391325685204c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f66395c4050002b38a7c8e6603f90aed1b6049a711d4d7457f391325685204c->enter($__internal_7f66395c4050002b38a7c8e6603f90aed1b6049a711d4d7457f391325685204c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_19fbe64b87e50a6ae95079dbf19bd9cf0e446d5c75294f6873d82589d410c9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19fbe64b87e50a6ae95079dbf19bd9cf0e446d5c75294f6873d82589d410c9e1->enter($__internal_19fbe64b87e50a6ae95079dbf19bd9cf0e446d5c75294f6873d82589d410c9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    <div class=\"en-tete\">
        <img>LOGO LFB</img>
        <button><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page1");
        echo "\">Annuler</a></button>
    </div>
";
        
        $__internal_19fbe64b87e50a6ae95079dbf19bd9cf0e446d5c75294f6873d82589d410c9e1->leave($__internal_19fbe64b87e50a6ae95079dbf19bd9cf0e446d5c75294f6873d82589d410c9e1_prof);

        
        $__internal_7f66395c4050002b38a7c8e6603f90aed1b6049a711d4d7457f391325685204c->leave($__internal_7f66395c4050002b38a7c8e6603f90aed1b6049a711d4d7457f391325685204c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_03a7a17c05a2fd244aaaa10419316da17750e638e937e76935047d02b4ebea82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a7a17c05a2fd244aaaa10419316da17750e638e937e76935047d02b4ebea82->enter($__internal_03a7a17c05a2fd244aaaa10419316da17750e638e937e76935047d02b4ebea82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec8eab60ee1cf05a0f8296eeff0525bdceb38e44f027db088c238c3cf8b3fe65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8eab60ee1cf05a0f8296eeff0525bdceb38e44f027db088c238c3cf8b3fe65->enter($__internal_ec8eab60ee1cf05a0f8296eeff0525bdceb38e44f027db088c238c3cf8b3fe65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec8eab60ee1cf05a0f8296eeff0525bdceb38e44f027db088c238c3cf8b3fe65->leave($__internal_ec8eab60ee1cf05a0f8296eeff0525bdceb38e44f027db088c238c3cf8b3fe65_prof);

        
        $__internal_03a7a17c05a2fd244aaaa10419316da17750e638e937e76935047d02b4ebea82->leave($__internal_03a7a17c05a2fd244aaaa10419316da17750e638e937e76935047d02b4ebea82_prof);

    }

    public function getTemplateName()
    {
        return "vues/blpreviewprint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
{% block header %}
    <div class=\"en-tete\">
        <img>LOGO LFB</img>
        <button><a href=\"{{ path('page1') }}\">Annuler</a></button>
    </div>
{% endblock %}

{% block body %}
{% endblock %}
", "vues/blpreviewprint.html.twig", "/Applications/MAMP/htdocs/symphony/LFB-Projet-BL/app/Resources/views/vues/blpreviewprint.html.twig");
    }
}
