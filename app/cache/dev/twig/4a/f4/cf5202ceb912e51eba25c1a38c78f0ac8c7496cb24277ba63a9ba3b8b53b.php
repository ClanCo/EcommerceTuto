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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        
        <div class=\"span3\">
            ";
        // line 8
        $this->env->loadTemplate("::modulesUsed/navigation.html.twig")->display($context);
        // line 9
        echo "        </div>
        
        <div class=\"span9\">
            
            <h2>Valider mon parnier</h2>
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
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "produit"));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 25
            echo "                        <tr>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "reference"), "html", null, true);
            echo "</td>
                            <td>
                               ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "quantite"), "html", null, true);
            echo " 
                            </td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixHT"), "html", null, true);
            echo " \$</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixHT") * $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "quantite")), "html", null, true);
            echo " \$</td>
                            </form>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </tbody>
                </table>

            
                        
            <dl class=\"dl-horizontal pull-right\"> 
                <dt>Total HT :</dt><dd>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "prixHT"), "html", null, true);
        echo " \$</dd>

                ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "tva"));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 44
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
        // line 46
        echo "                <dt>Total:</dt><dd>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "prixTTC"), "html", null, true);
        echo " \$</dd>
            </dl>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de livraison</h4></dt>
                    <dt>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "livraison"), "prenom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "livraison"), "nom"), "html", null, true);
        echo " </dt>
                    <dt>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "livraison"), "adresse"), "html", null, true);
        echo " </dt>
                    <dt>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "livraison"), "cp"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "livraison"), "ville"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "livraison"), "pays"), "html", null, true);
        echo " </dt>
                </dl>
            </div>

            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de facturation</h4></dt>
                    <dt>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "facturation"), "prenom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "facturation"), "nom"), "html", null, true);
        echo " </dt>
                    <dt>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "facturation"), "adresse"), "html", null, true);
        echo " </dt>
                    <dt>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "facturation"), "cp"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "facturation"), "ville"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "facturation"), "pays"), "html", null, true);
        echo " </dt>
                </dl>
            </div>
            <div class=\"clearfix\"></div>
            
            <form action=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("validationCommande", array("id" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id"))), "html", null, true);
        echo "\" method=\"POST\" />
                <input name=\"token\" type=\"hidden\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "token"), "html", null, true);
        echo "\"/>
                <input name=\"prix\" type=\"hidden\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande"), "prixTTC"), "html", null, true);
        echo "\"/>
                <input name=\"date\" type=\"hidden\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "date"), "dmyhms"), "html", null, true);
        echo "\"/>
                <button type=\"submit\" class=\"btn btn-success pull-right\">Payer</button>
            </form>

            
            <a href=\"";
        // line 77
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
        return array (  192 => 77,  184 => 72,  180 => 71,  176 => 70,  172 => 69,  160 => 64,  156 => 63,  150 => 62,  135 => 54,  131 => 53,  125 => 52,  115 => 46,  104 => 44,  100 => 43,  95 => 41,  87 => 35,  77 => 31,  73 => 30,  68 => 28,  63 => 26,  60 => 25,  56 => 24,  39 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
