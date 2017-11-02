<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
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
        $__internal_1928ee888c8e196e3029938a3eaec4197f93e7afe0efb1450aa328c2fe8eb745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1928ee888c8e196e3029938a3eaec4197f93e7afe0efb1450aa328c2fe8eb745->enter($__internal_1928ee888c8e196e3029938a3eaec4197f93e7afe0efb1450aa328c2fe8eb745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5cd67b44fc6a5aaa4d27821290eca63911d47986f5e0d8ea36684c38643432cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd67b44fc6a5aaa4d27821290eca63911d47986f5e0d8ea36684c38643432cf->enter($__internal_5cd67b44fc6a5aaa4d27821290eca63911d47986f5e0d8ea36684c38643432cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1928ee888c8e196e3029938a3eaec4197f93e7afe0efb1450aa328c2fe8eb745->leave($__internal_1928ee888c8e196e3029938a3eaec4197f93e7afe0efb1450aa328c2fe8eb745_prof);

        
        $__internal_5cd67b44fc6a5aaa4d27821290eca63911d47986f5e0d8ea36684c38643432cf->leave($__internal_5cd67b44fc6a5aaa4d27821290eca63911d47986f5e0d8ea36684c38643432cf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_25da697934217a0c39d0fe3366ba8587fae2822c82d7b91b19162a06d13a8725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25da697934217a0c39d0fe3366ba8587fae2822c82d7b91b19162a06d13a8725->enter($__internal_25da697934217a0c39d0fe3366ba8587fae2822c82d7b91b19162a06d13a8725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a3fdb0614b939192b1f77e10871e2fcda1c47813d3c10e097ebfa212de8ed42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3fdb0614b939192b1f77e10871e2fcda1c47813d3c10e097ebfa212de8ed42->enter($__internal_8a3fdb0614b939192b1f77e10871e2fcda1c47813d3c10e097ebfa212de8ed42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8a3fdb0614b939192b1f77e10871e2fcda1c47813d3c10e097ebfa212de8ed42->leave($__internal_8a3fdb0614b939192b1f77e10871e2fcda1c47813d3c10e097ebfa212de8ed42_prof);

        
        $__internal_25da697934217a0c39d0fe3366ba8587fae2822c82d7b91b19162a06d13a8725->leave($__internal_25da697934217a0c39d0fe3366ba8587fae2822c82d7b91b19162a06d13a8725_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0cc3faa0f85719d8fb08048e4131281f853a0d1aed7d3d71d47f977d456f7c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc3faa0f85719d8fb08048e4131281f853a0d1aed7d3d71d47f977d456f7c52->enter($__internal_0cc3faa0f85719d8fb08048e4131281f853a0d1aed7d3d71d47f977d456f7c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d2a8711bd4a450bea3a4b394a8cdbca7ec5afb0240c9de9da8b8f5640b70a9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a8711bd4a450bea3a4b394a8cdbca7ec5afb0240c9de9da8b8f5640b70a9ac->enter($__internal_d2a8711bd4a450bea3a4b394a8cdbca7ec5afb0240c9de9da8b8f5640b70a9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d2a8711bd4a450bea3a4b394a8cdbca7ec5afb0240c9de9da8b8f5640b70a9ac->leave($__internal_d2a8711bd4a450bea3a4b394a8cdbca7ec5afb0240c9de9da8b8f5640b70a9ac_prof);

        
        $__internal_0cc3faa0f85719d8fb08048e4131281f853a0d1aed7d3d71d47f977d456f7c52->leave($__internal_0cc3faa0f85719d8fb08048e4131281f853a0d1aed7d3d71d47f977d456f7c52_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a18da4c27eb54f3af597a921afba75de84e05158f4f8a5caa0930b2d1484bf38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a18da4c27eb54f3af597a921afba75de84e05158f4f8a5caa0930b2d1484bf38->enter($__internal_a18da4c27eb54f3af597a921afba75de84e05158f4f8a5caa0930b2d1484bf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c756246e1afd364fdfeaafde520d75884e626765d213e7c9c68a306e0221537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c756246e1afd364fdfeaafde520d75884e626765d213e7c9c68a306e0221537->enter($__internal_9c756246e1afd364fdfeaafde520d75884e626765d213e7c9c68a306e0221537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c756246e1afd364fdfeaafde520d75884e626765d213e7c9c68a306e0221537->leave($__internal_9c756246e1afd364fdfeaafde520d75884e626765d213e7c9c68a306e0221537_prof);

        
        $__internal_a18da4c27eb54f3af597a921afba75de84e05158f4f8a5caa0930b2d1484bf38->leave($__internal_a18da4c27eb54f3af597a921afba75de84e05158f4f8a5caa0930b2d1484bf38_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f578261a38807f0699fb0fdde0fcec6389661a663738fc3163922a6e3ff0e4d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f578261a38807f0699fb0fdde0fcec6389661a663738fc3163922a6e3ff0e4d7->enter($__internal_f578261a38807f0699fb0fdde0fcec6389661a663738fc3163922a6e3ff0e4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_65b174f7698ffec979000b41a30de8f50903f0a78613fcfc906b7d21a5d8acb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b174f7698ffec979000b41a30de8f50903f0a78613fcfc906b7d21a5d8acb6->enter($__internal_65b174f7698ffec979000b41a30de8f50903f0a78613fcfc906b7d21a5d8acb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_65b174f7698ffec979000b41a30de8f50903f0a78613fcfc906b7d21a5d8acb6->leave($__internal_65b174f7698ffec979000b41a30de8f50903f0a78613fcfc906b7d21a5d8acb6_prof);

        
        $__internal_f578261a38807f0699fb0fdde0fcec6389661a663738fc3163922a6e3ff0e4d7->leave($__internal_f578261a38807f0699fb0fdde0fcec6389661a663738fc3163922a6e3ff0e4d7_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
", "base.html.twig", "C:\\Users\\abiga\\PhpstormProjects\\plat\\Intelligeat\\app\\Resources\\views\\base.html.twig");
    }
}
