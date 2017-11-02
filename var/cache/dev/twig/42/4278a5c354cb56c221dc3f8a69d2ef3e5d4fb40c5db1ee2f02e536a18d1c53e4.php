<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9f78952cac0f06f836bef76a076f48afb0514ecc489dab37a42fd5e69371b77 extends Twig_Template
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
        $__internal_4a7ae6fd226522efbb7114db14a6577690f4877e20a8e7a0198ab898f5fc9c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7ae6fd226522efbb7114db14a6577690f4877e20a8e7a0198ab898f5fc9c65->enter($__internal_4a7ae6fd226522efbb7114db14a6577690f4877e20a8e7a0198ab898f5fc9c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_271a8864c75647addf1efe5643dceba4e7d28344704d6e11d9e09e6265af27ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271a8864c75647addf1efe5643dceba4e7d28344704d6e11d9e09e6265af27ef->enter($__internal_271a8864c75647addf1efe5643dceba4e7d28344704d6e11d9e09e6265af27ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_4a7ae6fd226522efbb7114db14a6577690f4877e20a8e7a0198ab898f5fc9c65->leave($__internal_4a7ae6fd226522efbb7114db14a6577690f4877e20a8e7a0198ab898f5fc9c65_prof);

        
        $__internal_271a8864c75647addf1efe5643dceba4e7d28344704d6e11d9e09e6265af27ef->leave($__internal_271a8864c75647addf1efe5643dceba4e7d28344704d6e11d9e09e6265af27ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c9c82c1369720421fd19438650990d2fa88bb5d86257ce18d06685055350744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9c82c1369720421fd19438650990d2fa88bb5d86257ce18d06685055350744->enter($__internal_5c9c82c1369720421fd19438650990d2fa88bb5d86257ce18d06685055350744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7061973ed307616843466311a0331b112ef3937ec98ab0397f6e49319f74cdd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7061973ed307616843466311a0331b112ef3937ec98ab0397f6e49319f74cdd7->enter($__internal_7061973ed307616843466311a0331b112ef3937ec98ab0397f6e49319f74cdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7061973ed307616843466311a0331b112ef3937ec98ab0397f6e49319f74cdd7->leave($__internal_7061973ed307616843466311a0331b112ef3937ec98ab0397f6e49319f74cdd7_prof);

        
        $__internal_5c9c82c1369720421fd19438650990d2fa88bb5d86257ce18d06685055350744->leave($__internal_5c9c82c1369720421fd19438650990d2fa88bb5d86257ce18d06685055350744_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6539a674cd7bf611b3cfdc51a7684d920a3c7e50505a32d55286be0a38358c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6539a674cd7bf611b3cfdc51a7684d920a3c7e50505a32d55286be0a38358c1->enter($__internal_d6539a674cd7bf611b3cfdc51a7684d920a3c7e50505a32d55286be0a38358c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_677a3dafb1a685e92bf86b7275c18093136ecc3c1003b22edf81fddd89053d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677a3dafb1a685e92bf86b7275c18093136ecc3c1003b22edf81fddd89053d4f->enter($__internal_677a3dafb1a685e92bf86b7275c18093136ecc3c1003b22edf81fddd89053d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_677a3dafb1a685e92bf86b7275c18093136ecc3c1003b22edf81fddd89053d4f->leave($__internal_677a3dafb1a685e92bf86b7275c18093136ecc3c1003b22edf81fddd89053d4f_prof);

        
        $__internal_d6539a674cd7bf611b3cfdc51a7684d920a3c7e50505a32d55286be0a38358c1->leave($__internal_d6539a674cd7bf611b3cfdc51a7684d920a3c7e50505a32d55286be0a38358c1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d272d2327fb1e03fa9284f38a8222bd389e4cf1ff6ef1395e2d79a5d4f2a3b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d272d2327fb1e03fa9284f38a8222bd389e4cf1ff6ef1395e2d79a5d4f2a3b02->enter($__internal_d272d2327fb1e03fa9284f38a8222bd389e4cf1ff6ef1395e2d79a5d4f2a3b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dcb2f907bee6c5e5ad78b9057087f71eda007430834a37caaeea5a02faea449f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb2f907bee6c5e5ad78b9057087f71eda007430834a37caaeea5a02faea449f->enter($__internal_dcb2f907bee6c5e5ad78b9057087f71eda007430834a37caaeea5a02faea449f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dcb2f907bee6c5e5ad78b9057087f71eda007430834a37caaeea5a02faea449f->leave($__internal_dcb2f907bee6c5e5ad78b9057087f71eda007430834a37caaeea5a02faea449f_prof);

        
        $__internal_d272d2327fb1e03fa9284f38a8222bd389e4cf1ff6ef1395e2d79a5d4f2a3b02->leave($__internal_d272d2327fb1e03fa9284f38a8222bd389e4cf1ff6ef1395e2d79a5d4f2a3b02_prof);

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
", "@Twig/layout.html.twig", "C:\\Users\\abiga\\PhpstormProjects\\plat\\Intelligeat\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
