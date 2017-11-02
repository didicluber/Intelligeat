<?php

/* plat/new.html.twig */
class __TwigTemplate_fa9ce1f33fc92a04b2e23791ec68e9e018abc0e18775a715dc76f038707a6647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "plat/new.html.twig", 1);
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
        $__internal_6400422e4c8f4d9a3d3d753e5fccad30220efca46988d34c048c2b2721f6aaef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6400422e4c8f4d9a3d3d753e5fccad30220efca46988d34c048c2b2721f6aaef->enter($__internal_6400422e4c8f4d9a3d3d753e5fccad30220efca46988d34c048c2b2721f6aaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "plat/new.html.twig"));

        $__internal_c65ac616681d4261534705076652f6b0990b14556f857bfb543f505105403c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65ac616681d4261534705076652f6b0990b14556f857bfb543f505105403c4c->enter($__internal_c65ac616681d4261534705076652f6b0990b14556f857bfb543f505105403c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "plat/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6400422e4c8f4d9a3d3d753e5fccad30220efca46988d34c048c2b2721f6aaef->leave($__internal_6400422e4c8f4d9a3d3d753e5fccad30220efca46988d34c048c2b2721f6aaef_prof);

        
        $__internal_c65ac616681d4261534705076652f6b0990b14556f857bfb543f505105403c4c->leave($__internal_c65ac616681d4261534705076652f6b0990b14556f857bfb543f505105403c4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a937a29389f5fb80e8a4d71813741d3d0c531236ad39681b8ad85fc52c0886dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a937a29389f5fb80e8a4d71813741d3d0c531236ad39681b8ad85fc52c0886dc->enter($__internal_a937a29389f5fb80e8a4d71813741d3d0c531236ad39681b8ad85fc52c0886dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b72438c3ec039591d0032fbb6ca1943ec6b7b01b9eec3fca10d3de2cb38e6ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72438c3ec039591d0032fbb6ca1943ec6b7b01b9eec3fca10d3de2cb38e6ac7->enter($__internal_b72438c3ec039591d0032fbb6ca1943ec6b7b01b9eec3fca10d3de2cb38e6ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Plat creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plat_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b72438c3ec039591d0032fbb6ca1943ec6b7b01b9eec3fca10d3de2cb38e6ac7->leave($__internal_b72438c3ec039591d0032fbb6ca1943ec6b7b01b9eec3fca10d3de2cb38e6ac7_prof);

        
        $__internal_a937a29389f5fb80e8a4d71813741d3d0c531236ad39681b8ad85fc52c0886dc->leave($__internal_a937a29389f5fb80e8a4d71813741d3d0c531236ad39681b8ad85fc52c0886dc_prof);

    }

    public function getTemplateName()
    {
        return "plat/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Plat creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('plat_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "plat/new.html.twig", "C:\\Users\\abiga\\PhpstormProjects\\plat\\Intelligeat\\app\\Resources\\views\\plat\\new.html.twig");
    }
}
