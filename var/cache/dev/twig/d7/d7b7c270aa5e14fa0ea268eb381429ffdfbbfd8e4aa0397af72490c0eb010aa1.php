<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4ab0d1599d6fabc4058bc359f1f626bef78779911e18157e59cabab6d769661f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71387c4e05e2a1039421fd20d2c99fbcf92047548c5d5400ca4b410986e24d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71387c4e05e2a1039421fd20d2c99fbcf92047548c5d5400ca4b410986e24d59->enter($__internal_71387c4e05e2a1039421fd20d2c99fbcf92047548c5d5400ca4b410986e24d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b54442fdcdac5922fce4ec1d777d145b999135164171f56b4e83e372f2bda43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54442fdcdac5922fce4ec1d777d145b999135164171f56b4e83e372f2bda43a->enter($__internal_b54442fdcdac5922fce4ec1d777d145b999135164171f56b4e83e372f2bda43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_71387c4e05e2a1039421fd20d2c99fbcf92047548c5d5400ca4b410986e24d59->leave($__internal_71387c4e05e2a1039421fd20d2c99fbcf92047548c5d5400ca4b410986e24d59_prof);

        
        $__internal_b54442fdcdac5922fce4ec1d777d145b999135164171f56b4e83e372f2bda43a->leave($__internal_b54442fdcdac5922fce4ec1d777d145b999135164171f56b4e83e372f2bda43a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_97dbe1a74da9cc89824a17f4a6a3b006b32828e8d314824f79d8b894ecbea510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97dbe1a74da9cc89824a17f4a6a3b006b32828e8d314824f79d8b894ecbea510->enter($__internal_97dbe1a74da9cc89824a17f4a6a3b006b32828e8d314824f79d8b894ecbea510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c38f95c1792f429b8e561ed1f52e10ddd1f3c8815d7af6bd4f34bd879e0fab7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38f95c1792f429b8e561ed1f52e10ddd1f3c8815d7af6bd4f34bd879e0fab7b->enter($__internal_c38f95c1792f429b8e561ed1f52e10ddd1f3c8815d7af6bd4f34bd879e0fab7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c38f95c1792f429b8e561ed1f52e10ddd1f3c8815d7af6bd4f34bd879e0fab7b->leave($__internal_c38f95c1792f429b8e561ed1f52e10ddd1f3c8815d7af6bd4f34bd879e0fab7b_prof);

        
        $__internal_97dbe1a74da9cc89824a17f4a6a3b006b32828e8d314824f79d8b894ecbea510->leave($__internal_97dbe1a74da9cc89824a17f4a6a3b006b32828e8d314824f79d8b894ecbea510_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9a002d33010fa744dfad238a63960a550b32a0899bd3f512e325f52ab9215e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a002d33010fa744dfad238a63960a550b32a0899bd3f512e325f52ab9215e0->enter($__internal_f9a002d33010fa744dfad238a63960a550b32a0899bd3f512e325f52ab9215e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_58128581cc0aca490507c122108371ebdefd4628dc4abc3098bab15dcc0c09ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58128581cc0aca490507c122108371ebdefd4628dc4abc3098bab15dcc0c09ac->enter($__internal_58128581cc0aca490507c122108371ebdefd4628dc4abc3098bab15dcc0c09ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_58128581cc0aca490507c122108371ebdefd4628dc4abc3098bab15dcc0c09ac->leave($__internal_58128581cc0aca490507c122108371ebdefd4628dc4abc3098bab15dcc0c09ac_prof);

        
        $__internal_f9a002d33010fa744dfad238a63960a550b32a0899bd3f512e325f52ab9215e0->leave($__internal_f9a002d33010fa744dfad238a63960a550b32a0899bd3f512e325f52ab9215e0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff09c9ac6dfb5dd2a206c476d315b5f6d6c6e6d3594257331e3b1c95d129f1d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff09c9ac6dfb5dd2a206c476d315b5f6d6c6e6d3594257331e3b1c95d129f1d2->enter($__internal_ff09c9ac6dfb5dd2a206c476d315b5f6d6c6e6d3594257331e3b1c95d129f1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f440beea18eb1cdc13bdec9627e9d800c4ccc842e7c2590302c17a966a27dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f440beea18eb1cdc13bdec9627e9d800c4ccc842e7c2590302c17a966a27dfa->enter($__internal_8f440beea18eb1cdc13bdec9627e9d800c4ccc842e7c2590302c17a966a27dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8f440beea18eb1cdc13bdec9627e9d800c4ccc842e7c2590302c17a966a27dfa->leave($__internal_8f440beea18eb1cdc13bdec9627e9d800c4ccc842e7c2590302c17a966a27dfa_prof);

        
        $__internal_ff09c9ac6dfb5dd2a206c476d315b5f6d6c6e6d3594257331e3b1c95d129f1d2->leave($__internal_ff09c9ac6dfb5dd2a206c476d315b5f6d6c6e6d3594257331e3b1c95d129f1d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/akoi-aka/lfb_projet_bl/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
