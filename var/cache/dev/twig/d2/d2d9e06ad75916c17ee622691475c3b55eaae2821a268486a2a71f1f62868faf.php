<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d53c5086159fe5a49688cf64d3ab072be7a7e7a47c3e56920a31c877e13687f5 extends Twig_Template
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
        $__internal_61fb138de02886509606ca325772db16dabdb2dcbd92261248e73c53f0f6f321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61fb138de02886509606ca325772db16dabdb2dcbd92261248e73c53f0f6f321->enter($__internal_61fb138de02886509606ca325772db16dabdb2dcbd92261248e73c53f0f6f321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0e8ad3a24c48cb71401a3c8939601a84c4a54e3026fd0733e3e91f63eb0985dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8ad3a24c48cb71401a3c8939601a84c4a54e3026fd0733e3e91f63eb0985dc->enter($__internal_0e8ad3a24c48cb71401a3c8939601a84c4a54e3026fd0733e3e91f63eb0985dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61fb138de02886509606ca325772db16dabdb2dcbd92261248e73c53f0f6f321->leave($__internal_61fb138de02886509606ca325772db16dabdb2dcbd92261248e73c53f0f6f321_prof);

        
        $__internal_0e8ad3a24c48cb71401a3c8939601a84c4a54e3026fd0733e3e91f63eb0985dc->leave($__internal_0e8ad3a24c48cb71401a3c8939601a84c4a54e3026fd0733e3e91f63eb0985dc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e05959a6ab65fb714356124a9087d41b605d02f39b0d418d524d3f88b43cee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e05959a6ab65fb714356124a9087d41b605d02f39b0d418d524d3f88b43cee1->enter($__internal_8e05959a6ab65fb714356124a9087d41b605d02f39b0d418d524d3f88b43cee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1cde2017850de439b2a094a79fdfe8f1c769831048a09d6d6d04c49aa54922ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cde2017850de439b2a094a79fdfe8f1c769831048a09d6d6d04c49aa54922ba->enter($__internal_1cde2017850de439b2a094a79fdfe8f1c769831048a09d6d6d04c49aa54922ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1cde2017850de439b2a094a79fdfe8f1c769831048a09d6d6d04c49aa54922ba->leave($__internal_1cde2017850de439b2a094a79fdfe8f1c769831048a09d6d6d04c49aa54922ba_prof);

        
        $__internal_8e05959a6ab65fb714356124a9087d41b605d02f39b0d418d524d3f88b43cee1->leave($__internal_8e05959a6ab65fb714356124a9087d41b605d02f39b0d418d524d3f88b43cee1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc238fcb0928ff10b61167f7f45132bd93691289622acb0766d6b19b6b3174e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc238fcb0928ff10b61167f7f45132bd93691289622acb0766d6b19b6b3174e4->enter($__internal_dc238fcb0928ff10b61167f7f45132bd93691289622acb0766d6b19b6b3174e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_489549f5004bff0217f8b3d994f7c0a9925a7b2c85c6ee6846692d89c9fdc4cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489549f5004bff0217f8b3d994f7c0a9925a7b2c85c6ee6846692d89c9fdc4cd->enter($__internal_489549f5004bff0217f8b3d994f7c0a9925a7b2c85c6ee6846692d89c9fdc4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_489549f5004bff0217f8b3d994f7c0a9925a7b2c85c6ee6846692d89c9fdc4cd->leave($__internal_489549f5004bff0217f8b3d994f7c0a9925a7b2c85c6ee6846692d89c9fdc4cd_prof);

        
        $__internal_dc238fcb0928ff10b61167f7f45132bd93691289622acb0766d6b19b6b3174e4->leave($__internal_dc238fcb0928ff10b61167f7f45132bd93691289622acb0766d6b19b6b3174e4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_466dbf57715fb30661e4dc03f32291dc7708c9c24880228bac03c504fd639f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466dbf57715fb30661e4dc03f32291dc7708c9c24880228bac03c504fd639f8b->enter($__internal_466dbf57715fb30661e4dc03f32291dc7708c9c24880228bac03c504fd639f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5900de733267f19d69b2d76810e95933606999034897d3a0eeecd7cbc4006600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5900de733267f19d69b2d76810e95933606999034897d3a0eeecd7cbc4006600->enter($__internal_5900de733267f19d69b2d76810e95933606999034897d3a0eeecd7cbc4006600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5900de733267f19d69b2d76810e95933606999034897d3a0eeecd7cbc4006600->leave($__internal_5900de733267f19d69b2d76810e95933606999034897d3a0eeecd7cbc4006600_prof);

        
        $__internal_466dbf57715fb30661e4dc03f32291dc7708c9c24880228bac03c504fd639f8b->leave($__internal_466dbf57715fb30661e4dc03f32291dc7708c9c24880228bac03c504fd639f8b_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/router.html.twig", "/Users/akoi-aka/lfb_projet_bl/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
