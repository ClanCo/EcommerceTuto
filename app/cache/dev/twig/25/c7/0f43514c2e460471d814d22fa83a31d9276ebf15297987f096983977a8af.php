<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_25c70f43514c2e460471d814d22fa83a31d9276ebf15297987f096983977a8af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout/layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 10
        $this->env->loadTemplate("::modulesUsed/navigation.html.twig")->display($context);
        // line 11
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 12
            echo "            ";
            $this->env->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig")->display($context);
            echo " 
            ";
        } else {
            // line 14
            echo "            ";
            $this->env->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig")->display($context);
            echo " 
            ";
        }
        // line 16
        echo "        </div>
        
        <div class=\"span9\">
            ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 20
            echo "            <ul class=\"thumbnails\">
                ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                echo "         
                <li class=\"span3\">
                    <div class=\"thumbnail\">
                        <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image"), "path"), "html", null, true);
                echo "\" alt=\"DevAndClick\" width=\"300\" height=\"200\">
                        <div class=\"caption\">
                            <h4>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom"), "html", null, true);
                echo "</h4>
                            <p>";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva"), "multiplicate")), "html", null, true);
                echo " \$</p>
                            <a class=\"btn btn-primary\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
                echo "\">Plus d'infos</a>
                            <a class=\"btn btn-success\" href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
                echo "\">Ajouter au panier</a>
                        </div>
                    </div>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            </ul>

            <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
            </div>
            ";
        } else {
            // line 48
            echo "                Aucun produit !
                ";
        }
        // line 50
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 50,  116 => 48,  100 => 34,  89 => 29,  85 => 28,  81 => 27,  77 => 26,  72 => 24,  64 => 21,  61 => 20,  59 => 19,  54 => 16,  48 => 14,  42 => 12,  39 => 11,  37 => 10,  31 => 6,  28 => 5,);
    }
}
