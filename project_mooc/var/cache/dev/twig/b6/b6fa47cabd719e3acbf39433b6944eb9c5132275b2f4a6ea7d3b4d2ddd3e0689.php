<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_4c7ed901ee7c6117a67a4ca6e371897222c3a19775373d5716628f7c32faa1b1 extends Twig_Template
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
        $__internal_d2c90933519d6cc58de6bf330d29f75aa78b1ba9772f1b3de0938e7e63784581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c90933519d6cc58de6bf330d29f75aa78b1ba9772f1b3de0938e7e63784581->enter($__internal_d2c90933519d6cc58de6bf330d29f75aa78b1ba9772f1b3de0938e7e63784581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c39abf748c061386103a7a5bb103e917d45fc4a558281dce3c387f97a1bc8024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39abf748c061386103a7a5bb103e917d45fc4a558281dce3c387f97a1bc8024->enter($__internal_c39abf748c061386103a7a5bb103e917d45fc4a558281dce3c387f97a1bc8024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_d2c90933519d6cc58de6bf330d29f75aa78b1ba9772f1b3de0938e7e63784581->leave($__internal_d2c90933519d6cc58de6bf330d29f75aa78b1ba9772f1b3de0938e7e63784581_prof);

        
        $__internal_c39abf748c061386103a7a5bb103e917d45fc4a558281dce3c387f97a1bc8024->leave($__internal_c39abf748c061386103a7a5bb103e917d45fc4a558281dce3c387f97a1bc8024_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/quentin/Desktop/mooc/project_mooc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
