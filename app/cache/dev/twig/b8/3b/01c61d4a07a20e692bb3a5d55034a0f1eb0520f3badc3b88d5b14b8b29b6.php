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
        return array (  32 => 7,  19 => 1,  182 => 65,  177 => 32,  172 => 13,  166 => 7,  160 => 6,  154 => 5,  149 => 66,  143 => 64,  139 => 63,  122 => 52,  118 => 51,  103 => 41,  101 => 40,  90 => 32,  84 => 28,  77 => 25,  62 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  39 => 7,  174 => 65,  167 => 62,  156 => 60,  152 => 59,  147 => 65,  141 => 53,  134 => 51,  131 => 58,  128 => 49,  126 => 48,  119 => 44,  115 => 43,  110 => 46,  107 => 40,  92 => 33,  88 => 37,  82 => 27,  78 => 33,  75 => 32,  71 => 31,  55 => 17,  53 => 16,  47 => 12,  44 => 9,  35 => 6,  31 => 5,  29 => 5,  27 => 4,  25 => 3,);
    }
}
