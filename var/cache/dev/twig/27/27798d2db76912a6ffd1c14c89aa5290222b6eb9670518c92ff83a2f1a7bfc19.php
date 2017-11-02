<?php

/* plat/edit.html.twig */
class __TwigTemplate_c52c8acd677b651c8504571eddb8ccdff211c9e1597db66b5fe12ac55d64604b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "plat/edit.html.twig", 1);
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
        $__internal_a00f54ff6d29ad2058526304e8848d7024c94d93cce0656b5e36986b64d729ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00f54ff6d29ad2058526304e8848d7024c94d93cce0656b5e36986b64d729ce->enter($__internal_a00f54ff6d29ad2058526304e8848d7024c94d93cce0656b5e36986b64d729ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "plat/edit.html.twig"));

        $__internal_afcbf549d501876a4408c7fb4134057e21717c5676b55565a1bda0031c95cf6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcbf549d501876a4408c7fb4134057e21717c5676b55565a1bda0031c95cf6a->enter($__internal_afcbf549d501876a4408c7fb4134057e21717c5676b55565a1bda0031c95cf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "plat/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a00f54ff6d29ad2058526304e8848d7024c94d93cce0656b5e36986b64d729ce->leave($__internal_a00f54ff6d29ad2058526304e8848d7024c94d93cce0656b5e36986b64d729ce_prof);

        
        $__internal_afcbf549d501876a4408c7fb4134057e21717c5676b55565a1bda0031c95cf6a->leave($__internal_afcbf549d501876a4408c7fb4134057e21717c5676b55565a1bda0031c95cf6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b75875f8b74ab0ffe93a3dfcf0b9b7202cfd1873713370b31127fe74b859a534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b75875f8b74ab0ffe93a3dfcf0b9b7202cfd1873713370b31127fe74b859a534->enter($__internal_b75875f8b74ab0ffe93a3dfcf0b9b7202cfd1873713370b31127fe74b859a534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ef729c1c067c8162d63c7feb307820e5ca8fece8fed9279ac26c42324d9ab66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef729c1c067c8162d63c7feb307820e5ca8fece8fed9279ac26c42324d9ab66->enter($__internal_8ef729c1c067c8162d63c7feb307820e5ca8fece8fed9279ac26c42324d9ab66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Plat edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plat_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8ef729c1c067c8162d63c7feb307820e5ca8fece8fed9279ac26c42324d9ab66->leave($__internal_8ef729c1c067c8162d63c7feb307820e5ca8fece8fed9279ac26c42324d9ab66_prof);

        
        $__internal_b75875f8b74ab0ffe93a3dfcf0b9b7202cfd1873713370b31127fe74b859a534->leave($__internal_b75875f8b74ab0ffe93a3dfcf0b9b7202cfd1873713370b31127fe74b859a534_prof);

    }

    public function getTemplateName()
    {
        return "plat/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Plat edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('plat_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "plat/edit.html.twig", "C:\\Users\\abiga\\PhpstormProjects\\plat\\Intelligeat\\app\\Resources\\views\\plat\\edit.html.twig");
    }
}
