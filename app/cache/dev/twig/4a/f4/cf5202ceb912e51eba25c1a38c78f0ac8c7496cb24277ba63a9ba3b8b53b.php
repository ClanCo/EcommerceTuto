<?php

/* EcommerceBundle:Default:panier/layout/validation.html.twig */
class __TwigTemplate_4af4cf5202ceb912e51eba25c1a38c78f0ac8c7496cb24277ba63a9ba3b8b53b extends Twig_Template
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
        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 8
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva"), "val")) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"container\">
    <div class=\"row\">
        
        <div class=\"span3\">
            ";
        // line 16
        $this->env->loadTemplate("::modulesUsed/navigation.html.twig")->display($context);
        // line 17
        echo "        </div>
        
        <div class=\"span9\">
            
            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            <h2>Valider mon parnier</h2>
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>Références</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Total HT</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 38
            echo "                            <tr>
                                <td colspan=\"4\"><center> Aucun article dans votre panier </center> </td>
                            </tr>
                            
                            ";
        }
        // line 43
        echo "                            
                        ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 45
            echo "                        <tr>
                            <form action=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\" method=\"get\">
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom"), "html", null, true);
            echo "</td>
                            <td>
                               ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"), array(), "array"), "html", null, true);
            echo " 
                            </td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
            echo " \$</td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix") * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"), array(), "array")), "html", null, true);
            echo " \$</td>
                            </form>
                        </tr>
                        
                        ";
            // line 56
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix") * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"), array(), "array")));
            // line 57
            echo "                        ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('tva_extension')->calculTva(($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix") * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"), array(), "array")), $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva"), "multiplicate")));
            // line 58
            echo "                        ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva"), "val")) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva"), "val")), array(), "array") + $this->env->getExtension('montant_tva_extension')->montantTva(($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix") * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"), array(), "array")), $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva"), "multiplicate")))));
            // line 59
            echo "                        
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    </tbody>
                </table>

            
                        
            <dl class=\"dl-horizontal pull-right\"> 
                <dt>Total HT :</dt><dd>";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
        echo " \$</dd>

                ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 70
            echo "                <dt>TVA ";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo " :</dt><dd>";
            echo twig_escape_filter($this->env, (isset($context["tva"]) ? $context["tva"] : $this->getContext($context, "tva")), "html", null, true);
            echo "</dd>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                <dt>Total:</dt><dd>";
        echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
        echo " \$</dd>
            </dl>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de livraison</h4></dt>
                    <dt>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "prenom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "nom"), "html", null, true);
        echo " </dt>
                    <dt>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "adresse"), "html", null, true);
        echo " </dt>
                    <dt>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "cp"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "ville"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "pays"), "html", null, true);
        echo " </dt>
                </dl>
            </div>

            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de facturation</h4></dt>
                    <dt>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturation"]) ? $context["facturation"] : $this->getContext($context, "facturation")), "prenom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturation"]) ? $context["facturation"] : $this->getContext($context, "facturation")), "nom"), "html", null, true);
        echo " </dt>
                    <dt>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturation"]) ? $context["facturation"] : $this->getContext($context, "facturation")), "adresse"), "html", null, true);
        echo " </dt>
                    <dt>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturation"]) ? $context["facturation"] : $this->getContext($context, "facturation")), "cp"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturation"]) ? $context["facturation"] : $this->getContext($context, "facturation")), "ville"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturation"]) ? $context["facturation"] : $this->getContext($context, "facturation")), "pays"), "html", null, true);
        echo " </dt>
                </dl>
            </div>
            <div class=\"clearfix\"></div>
            
            <a href=\"#\" class=\"btn btn-success pull-right\">Payer</a>
            <a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-primary\">retour</a>
            
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 96,  222 => 90,  218 => 89,  212 => 88,  197 => 80,  193 => 79,  187 => 78,  177 => 72,  166 => 70,  162 => 69,  157 => 67,  149 => 61,  142 => 59,  139 => 58,  136 => 57,  134 => 56,  127 => 52,  123 => 51,  118 => 49,  113 => 47,  109 => 46,  106 => 45,  102 => 44,  99 => 43,  92 => 38,  90 => 37,  77 => 26,  68 => 23,  65 => 22,  61 => 21,  55 => 17,  53 => 16,  47 => 12,  44 => 11,  35 => 8,  31 => 7,  29 => 5,  27 => 4,  25 => 3,);
    }
}
