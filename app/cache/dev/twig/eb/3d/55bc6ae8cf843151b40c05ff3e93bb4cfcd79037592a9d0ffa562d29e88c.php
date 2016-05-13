<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_eb3d55bc6ae8cf843151b40c05ff3e93bb4cfcd79037592a9d0ffa562d29e88c extends Twig_Template
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
            <h2>Votre panier</h2>
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
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 24
            echo "                        <tr>
                            <form action=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\" method=\"get\">
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom"), "html", null, true);
            echo "</td>
                            <td>
                                <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 30
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" ";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo " >";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                                    </select>&nbsp;
                                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
            echo " \$</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix") * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"), array(), "array")), "html", null, true);
            echo " \$</td>
                            </form>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </tbody>
                </table>

            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt>
                <dd>799,99€</dd>

                <dt>TVA :</dt>
                <dd>200€</dd>

                <dt>Total:</dt>
                <dd>999,99€</dd>
            </dl>
            <div class=\"clearfix\"></div>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
            <a href=\"index.php\" class=\"btn btn-primary\">Continuer mes achats</a>
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 54,  113 => 40,  103 => 36,  99 => 35,  94 => 33,  91 => 32,  76 => 30,  72 => 29,  66 => 26,  62 => 25,  59 => 24,  55 => 23,  39 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
