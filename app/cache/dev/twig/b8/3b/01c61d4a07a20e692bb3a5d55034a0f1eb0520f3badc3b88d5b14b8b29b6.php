<?php

/* EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_b83b01c61d4a07a20e692bb3a5d55034a0f1eb0520f3badc3b88d5b14b8b29b6 extends Twig_Template
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
        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("rechercheProduits");
        echo "\" method=\"POST\" class=\"navbar-form form-search pull-right\">
    
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche"), 'widget');
        echo "
    
    <button type=\"submit\" class=\"btn\">Rechercher</button>
    
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  25 => 3,  19 => 1,  159 => 62,  154 => 29,  149 => 10,  143 => 5,  138 => 63,  136 => 62,  132 => 61,  128 => 60,  120 => 55,  111 => 49,  107 => 48,  99 => 43,  92 => 38,  90 => 37,  81 => 30,  79 => 29,  71 => 24,  66 => 22,  51 => 11,  45 => 9,  41 => 8,  33 => 6,  29 => 5,  23 => 1,  108 => 44,  104 => 42,  88 => 28,  77 => 23,  73 => 25,  69 => 21,  65 => 20,  60 => 18,  52 => 15,  49 => 10,  47 => 13,  39 => 9,  37 => 7,  31 => 4,  28 => 3,);
    }
}
