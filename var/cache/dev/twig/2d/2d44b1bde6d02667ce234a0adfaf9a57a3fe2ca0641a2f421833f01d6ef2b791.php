<?php

/* plat/index.html.twig */
class __TwigTemplate_7b50d5a194e6b859a15dfaec69b346042d3e470b5c4b32b490dd74bc9d676c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "plat/index.html.twig", 1);
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
        $__internal_9496d6e9bcfab0b5c335fd364ed23a9dd0c3167404df67b289689d07f6173dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9496d6e9bcfab0b5c335fd364ed23a9dd0c3167404df67b289689d07f6173dc0->enter($__internal_9496d6e9bcfab0b5c335fd364ed23a9dd0c3167404df67b289689d07f6173dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "plat/index.html.twig"));

        $__internal_84d739bb5f89bddf14effc66e9d3c28fc8e5d42c8dbeed75803ef1550b377b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d739bb5f89bddf14effc66e9d3c28fc8e5d42c8dbeed75803ef1550b377b97->enter($__internal_84d739bb5f89bddf14effc66e9d3c28fc8e5d42c8dbeed75803ef1550b377b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "plat/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9496d6e9bcfab0b5c335fd364ed23a9dd0c3167404df67b289689d07f6173dc0->leave($__internal_9496d6e9bcfab0b5c335fd364ed23a9dd0c3167404df67b289689d07f6173dc0_prof);

        
        $__internal_84d739bb5f89bddf14effc66e9d3c28fc8e5d42c8dbeed75803ef1550b377b97->leave($__internal_84d739bb5f89bddf14effc66e9d3c28fc8e5d42c8dbeed75803ef1550b377b97_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e97f12c11095e30693a6bda74211e731e5c60e116505ee7a6f5a695e28baf2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e97f12c11095e30693a6bda74211e731e5c60e116505ee7a6f5a695e28baf2b->enter($__internal_9e97f12c11095e30693a6bda74211e731e5c60e116505ee7a6f5a695e28baf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3464ed4d6eacdfbdfe6e75f354aec470df1074441ebf355088fdbcfccfb1b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3464ed4d6eacdfbdfe6e75f354aec470df1074441ebf355088fdbcfccfb1b93->enter($__internal_f3464ed4d6eacdfbdfe6e75f354aec470df1074441ebf355088fdbcfccfb1b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Plats list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Prix</th>
                <th>Nbpersonne</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plats"] ?? $this->getContext($context, "plats")));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plat_show", array("id" => $this->getAttribute($context["plat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "nbpersonne", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plat_show", array("id" => $this->getAttribute($context["plat"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plat_edit", array("id" => $this->getAttribute($context["plat"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plat_new");
        echo "\">Create a new plat</a>
        </li>
    </ul>
";
        
        $__internal_f3464ed4d6eacdfbdfe6e75f354aec470df1074441ebf355088fdbcfccfb1b93->leave($__internal_f3464ed4d6eacdfbdfe6e75f354aec470df1074441ebf355088fdbcfccfb1b93_prof);

        
        $__internal_9e97f12c11095e30693a6bda74211e731e5c60e116505ee7a6f5a695e28baf2b->leave($__internal_9e97f12c11095e30693a6bda74211e731e5c60e116505ee7a6f5a695e28baf2b_prof);

    }

    public function getTemplateName()
    {
        return "plat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Plats list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Prix</th>
                <th>Nbpersonne</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for plat in plats %}
            <tr>
                <td><a href=\"{{ path('plat_show', { 'id': plat.id }) }}\">{{ plat.id }}</a></td>
                <td>{{ plat.titre }}</td>
                <td>{{ plat.prix }}</td>
                <td>{{ plat.nbpersonne }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('plat_show', { 'id': plat.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('plat_edit', { 'id': plat.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('plat_new') }}\">Create a new plat</a>
        </li>
    </ul>
{% endblock %}
", "plat/index.html.twig", "C:\\Users\\abiga\\PhpstormProjects\\plat\\Intelligeat\\app\\Resources\\views\\plat\\index.html.twig");
    }
}
