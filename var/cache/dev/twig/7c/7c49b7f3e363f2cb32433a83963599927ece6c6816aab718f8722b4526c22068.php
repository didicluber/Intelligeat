<?php

/* PlatBundle:Default:index.html.twig */
class __TwigTemplate_0e9e659cdf84928b20490c82b734a74f8b2390b8f69753ea0a7006071b8017a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dd66e727501dcd166d970aa803534c3fca1f6f16e48cfe85f510eef9b0261fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd66e727501dcd166d970aa803534c3fca1f6f16e48cfe85f510eef9b0261fe->enter($__internal_9dd66e727501dcd166d970aa803534c3fca1f6f16e48cfe85f510eef9b0261fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PlatBundle:Default:index.html.twig"));

        $__internal_be7fdf2d765e971efa6b0f0a1fa45a1698d104e643805dd2ccca95a95fd34de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7fdf2d765e971efa6b0f0a1fa45a1698d104e643805dd2ccca95a95fd34de7->enter($__internal_be7fdf2d765e971efa6b0f0a1fa45a1698d104e643805dd2ccca95a95fd34de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PlatBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_9dd66e727501dcd166d970aa803534c3fca1f6f16e48cfe85f510eef9b0261fe->leave($__internal_9dd66e727501dcd166d970aa803534c3fca1f6f16e48cfe85f510eef9b0261fe_prof);

        
        $__internal_be7fdf2d765e971efa6b0f0a1fa45a1698d104e643805dd2ccca95a95fd34de7->leave($__internal_be7fdf2d765e971efa6b0f0a1fa45a1698d104e643805dd2ccca95a95fd34de7_prof);

    }

    public function getTemplateName()
    {
        return "PlatBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "PlatBundle:Default:index.html.twig", "C:\\Users\\abiga\\PhpstormProjects\\plat\\Intelligeat\\src\\Plat\\PlatBundle/Resources/views/Default/index.html.twig");
    }
}
