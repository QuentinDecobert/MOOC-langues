<?php

/* base.html.twig */
class __TwigTemplate_c6b56aef91f99a389e1a6f47f71cf0ca91dfaf9399112057d815c56c69b075fb extends Twig_Template
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
        $__internal_a932f1969f2a91c8f818f05ec006de5d0b5ab21b0128768432009e6cb9adb1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a932f1969f2a91c8f818f05ec006de5d0b5ab21b0128768432009e6cb9adb1ed->enter($__internal_a932f1969f2a91c8f818f05ec006de5d0b5ab21b0128768432009e6cb9adb1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a09229e400f50917b62fbf69a67881fe491b1028a278f3b914309c30365720bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09229e400f50917b62fbf69a67881fe491b1028a278f3b914309c30365720bc->enter($__internal_a09229e400f50917b62fbf69a67881fe491b1028a278f3b914309c30365720bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a932f1969f2a91c8f818f05ec006de5d0b5ab21b0128768432009e6cb9adb1ed->leave($__internal_a932f1969f2a91c8f818f05ec006de5d0b5ab21b0128768432009e6cb9adb1ed_prof);

        
        $__internal_a09229e400f50917b62fbf69a67881fe491b1028a278f3b914309c30365720bc->leave($__internal_a09229e400f50917b62fbf69a67881fe491b1028a278f3b914309c30365720bc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d2d8dc67dadfffe57597202974177a545e5477526c757ca0fcab06cd1a54a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2d8dc67dadfffe57597202974177a545e5477526c757ca0fcab06cd1a54a09->enter($__internal_3d2d8dc67dadfffe57597202974177a545e5477526c757ca0fcab06cd1a54a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1dbe030e6ff05f500b299be7d4a5e568e9783ea21a03d000f708608f2c181d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dbe030e6ff05f500b299be7d4a5e568e9783ea21a03d000f708608f2c181d28->enter($__internal_1dbe030e6ff05f500b299be7d4a5e568e9783ea21a03d000f708608f2c181d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1dbe030e6ff05f500b299be7d4a5e568e9783ea21a03d000f708608f2c181d28->leave($__internal_1dbe030e6ff05f500b299be7d4a5e568e9783ea21a03d000f708608f2c181d28_prof);

        
        $__internal_3d2d8dc67dadfffe57597202974177a545e5477526c757ca0fcab06cd1a54a09->leave($__internal_3d2d8dc67dadfffe57597202974177a545e5477526c757ca0fcab06cd1a54a09_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_175e88910b89f4ebccafbce327f75b45380012ba85ab154668b0eece1d5f57f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175e88910b89f4ebccafbce327f75b45380012ba85ab154668b0eece1d5f57f0->enter($__internal_175e88910b89f4ebccafbce327f75b45380012ba85ab154668b0eece1d5f57f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1c4b06db5c8919fbfb087c4499fd2f0bf6106404a1342960bf853f913f521574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4b06db5c8919fbfb087c4499fd2f0bf6106404a1342960bf853f913f521574->enter($__internal_1c4b06db5c8919fbfb087c4499fd2f0bf6106404a1342960bf853f913f521574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1c4b06db5c8919fbfb087c4499fd2f0bf6106404a1342960bf853f913f521574->leave($__internal_1c4b06db5c8919fbfb087c4499fd2f0bf6106404a1342960bf853f913f521574_prof);

        
        $__internal_175e88910b89f4ebccafbce327f75b45380012ba85ab154668b0eece1d5f57f0->leave($__internal_175e88910b89f4ebccafbce327f75b45380012ba85ab154668b0eece1d5f57f0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c515cd8f8a0ecbacde312cb7ae14ac28b907010443c1584dbfcfa76b77a41c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c515cd8f8a0ecbacde312cb7ae14ac28b907010443c1584dbfcfa76b77a41c59->enter($__internal_c515cd8f8a0ecbacde312cb7ae14ac28b907010443c1584dbfcfa76b77a41c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8f359f04d3b00845d9c58a41b38663b90f1903a568a4254db2552e515a48dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f359f04d3b00845d9c58a41b38663b90f1903a568a4254db2552e515a48dda->enter($__internal_c8f359f04d3b00845d9c58a41b38663b90f1903a568a4254db2552e515a48dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c8f359f04d3b00845d9c58a41b38663b90f1903a568a4254db2552e515a48dda->leave($__internal_c8f359f04d3b00845d9c58a41b38663b90f1903a568a4254db2552e515a48dda_prof);

        
        $__internal_c515cd8f8a0ecbacde312cb7ae14ac28b907010443c1584dbfcfa76b77a41c59->leave($__internal_c515cd8f8a0ecbacde312cb7ae14ac28b907010443c1584dbfcfa76b77a41c59_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f496f3203c975a33706da3a903cb55dd8adc43378a5a772f9bef8a386703fb92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f496f3203c975a33706da3a903cb55dd8adc43378a5a772f9bef8a386703fb92->enter($__internal_f496f3203c975a33706da3a903cb55dd8adc43378a5a772f9bef8a386703fb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_85064533d745907d7c1120012aca868145aabe7388130a0167a82d3cf3ffb47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85064533d745907d7c1120012aca868145aabe7388130a0167a82d3cf3ffb47d->enter($__internal_85064533d745907d7c1120012aca868145aabe7388130a0167a82d3cf3ffb47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_85064533d745907d7c1120012aca868145aabe7388130a0167a82d3cf3ffb47d->leave($__internal_85064533d745907d7c1120012aca868145aabe7388130a0167a82d3cf3ffb47d_prof);

        
        $__internal_f496f3203c975a33706da3a903cb55dd8adc43378a5a772f9bef8a386703fb92->leave($__internal_f496f3203c975a33706da3a903cb55dd8adc43378a5a772f9bef8a386703fb92_prof);

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
", "base.html.twig", "/Users/quentin/Desktop/mooc/project_mooc/app/Resources/views/base.html.twig");
    }
}
