<?php

/* vues/modifarticle.html.twig */
class __TwigTemplate_ab7f851244f8ccfdf9345d7047730f9ce50ee81ef077e12ab7f3e0204922643e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vues/modifarticle.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d1bec9f33466dfbc51bcd55c0b4ab32aed43f9e4a22dd05fc88adee27978ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1bec9f33466dfbc51bcd55c0b4ab32aed43f9e4a22dd05fc88adee27978ca0->enter($__internal_5d1bec9f33466dfbc51bcd55c0b4ab32aed43f9e4a22dd05fc88adee27978ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/modifarticle.html.twig"));

        $__internal_2a9c9c9800f174e916c740fef7d2fe8b543088c9db58b939aa640ae875b6e04a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9c9c9800f174e916c740fef7d2fe8b543088c9db58b939aa640ae875b6e04a->enter($__internal_2a9c9c9800f174e916c740fef7d2fe8b543088c9db58b939aa640ae875b6e04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vues/modifarticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d1bec9f33466dfbc51bcd55c0b4ab32aed43f9e4a22dd05fc88adee27978ca0->leave($__internal_5d1bec9f33466dfbc51bcd55c0b4ab32aed43f9e4a22dd05fc88adee27978ca0_prof);

        
        $__internal_2a9c9c9800f174e916c740fef7d2fe8b543088c9db58b939aa640ae875b6e04a->leave($__internal_2a9c9c9800f174e916c740fef7d2fe8b543088c9db58b939aa640ae875b6e04a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5fa9c00608a07a9e6df442213ee3005691c62a608dba599ec420905465d6e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5fa9c00608a07a9e6df442213ee3005691c62a608dba599ec420905465d6e79->enter($__internal_e5fa9c00608a07a9e6df442213ee3005691c62a608dba599ec420905465d6e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8184cec96a794dca6023a6eae3acff71bfa696ea99907d4171a3d24272c75f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8184cec96a794dca6023a6eae3acff71bfa696ea99907d4171a3d24272c75f3->enter($__internal_a8184cec96a794dca6023a6eae3acff71bfa696ea99907d4171a3d24272c75f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"jumbotron\">
    <span>Code Article</span><div class=\"well\" name=\"codeart\"></div>
    <span>Dénomination</span><div class=\"well\" name=\"denart\"></div>
    <span>Famille</span><div class=\"well\" name=\"famart\"></div>
    <span>Prix HT</span><div class=\"well\" name=\"htart\"></div>
    <span>Prix TTC</span><div class=\"well\" name=\"ttcart\"></div>
    <span>Quantité</span><div class=\"well\" name=\"qtart\"></div>
    <button class=\"btn btn-success\" name=\"modifarticlebtn\">CONFIRMER</button>
</div>
<div class=\"row\">
    <div class=\"col-lg-6\"></div>
    <button class=\"col-lg-6\"><a href=\"listearticles.html.twig\">ANNULER</button>
    <div class=\"col-lg-6\"></div>
    <button class=\"col-lg-6\"><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page1");
        echo "\">Revenir sur la page d'accueil</a></button>
</div>
";
        
        $__internal_a8184cec96a794dca6023a6eae3acff71bfa696ea99907d4171a3d24272c75f3->leave($__internal_a8184cec96a794dca6023a6eae3acff71bfa696ea99907d4171a3d24272c75f3_prof);

        
        $__internal_e5fa9c00608a07a9e6df442213ee3005691c62a608dba599ec420905465d6e79->leave($__internal_e5fa9c00608a07a9e6df442213ee3005691c62a608dba599ec420905465d6e79_prof);

    }

    public function getTemplateName()
    {
        return "vues/modifarticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  49 => 3,  40 => 2,  11 => 1,);
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
{% block body%}
<div class=\"jumbotron\">
    <span>Code Article</span><div class=\"well\" name=\"codeart\"></div>
    <span>Dénomination</span><div class=\"well\" name=\"denart\"></div>
    <span>Famille</span><div class=\"well\" name=\"famart\"></div>
    <span>Prix HT</span><div class=\"well\" name=\"htart\"></div>
    <span>Prix TTC</span><div class=\"well\" name=\"ttcart\"></div>
    <span>Quantité</span><div class=\"well\" name=\"qtart\"></div>
    <button class=\"btn btn-success\" name=\"modifarticlebtn\">CONFIRMER</button>
</div>
<div class=\"row\">
    <div class=\"col-lg-6\"></div>
    <button class=\"col-lg-6\"><a href=\"listearticles.html.twig\">ANNULER</button>
    <div class=\"col-lg-6\"></div>
    <button class=\"col-lg-6\"><a href=\"{{ path('page1') }}\">Revenir sur la page d'accueil</a></button>
</div>
{% endblock %}", "vues/modifarticle.html.twig", "/Users/akoi-aka/lfb_projet_bl/app/Resources/views/vues/modifarticle.html.twig");
    }
}
