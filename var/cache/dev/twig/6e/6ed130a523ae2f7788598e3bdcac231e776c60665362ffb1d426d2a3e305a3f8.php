<?php

/* plat/show.html.twig */
class __TwigTemplate_9990a22613714023dc82f55552341ce1d79b4890483eaadae8a5f2fc40fbf779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "plat/show.html.twig", 1);
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
        $__internal_ddc965a226061df5fa4fc41f40de6eb91a920dd72e6adc4af01a13e560718fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc965a226061df5fa4fc41f40de6eb91a920dd72e6adc4af01a13e560718fe9->enter($__internal_ddc965a226061df5fa4fc41f40de6eb91a920dd72e6adc4af01a13e560718fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "plat/show.html.twig"));

        $__internal_95f37c9f647c4961bd6224f49ee97397b9a7184f50f5ebd8fc1d6b26088d64a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f37c9f647c4961bd6224f49ee97397b9a7184f50f5ebd8fc1d6b26088d64a1->enter($__internal_95f37c9f647c4961bd6224f49ee97397b9a7184f50f5ebd8fc1d6b26088d64a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "plat/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddc965a226061df5fa4fc41f40de6eb91a920dd72e6adc4af01a13e560718fe9->leave($__internal_ddc965a226061df5fa4fc41f40de6eb91a920dd72e6adc4af01a13e560718fe9_prof);

        
        $__internal_95f37c9f647c4961bd6224f49ee97397b9a7184f50f5ebd8fc1d6b26088d64a1->leave($__internal_95f37c9f647c4961bd6224f49ee97397b9a7184f50f5ebd8fc1d6b26088d64a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c79646c4813d433714a1547f28bf8e0f4f654b153e8904947dfc72779a6a408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c79646c4813d433714a1547f28bf8e0f4f654b153e8904947dfc72779a6a408->enter($__internal_3c79646c4813d433714a1547f28bf8e0f4f654b153e8904947dfc72779a6a408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4dc2470be05ef1bc17337107429f5308f24642886cbe2f8e6bc750ec8f39800a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc2470be05ef1bc17337107429f5308f24642886cbe2f8e6bc750ec8f39800a->enter($__internal_4dc2470be05ef1bc17337107429f5308f24642886cbe2f8e6bc750ec8f39800a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Plat</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plat"] ?? $this->getContext($context, "plat")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plat"] ?? $this->getContext($context, "plat")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plat"] ?? $this->getContext($context, "plat")), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbpersonne</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plat"] ?? $this->getContext($context, "plat")), "nbpersonne", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plat_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plat_edit", array("id" => $this->getAttribute(($context["plat"] ?? $this->getContext($context, "plat")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4dc2470be05ef1bc17337107429f5308f24642886cbe2f8e6bc750ec8f39800a->leave($__internal_4dc2470be05ef1bc17337107429f5308f24642886cbe2f8e6bc750ec8f39800a_prof);

        
        $__internal_3c79646c4813d433714a1547f28bf8e0f4f654b153e8904947dfc72779a6a408->leave($__internal_3c79646c4813d433714a1547f28bf8e0f4f654b153e8904947dfc72779a6a408_prof);

    }

    public function getTemplateName()
    {
        return "plat/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Plat</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ plat.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ plat.titre }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ plat.prix }}</td>
            </tr>
            <tr>
                <th>Nbpersonne</th>
                <td>{{ plat.nbpersonne }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('plat_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('plat_edit', { 'id': plat.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "plat/show.html.twig", "C:\\Users\\abiga\\PhpstormProjects\\plat\\Intelligeat\\app\\Resources\\views\\plat\\show.html.twig");
    }
}
