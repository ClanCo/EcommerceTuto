<?php

/* EcommerceBundle:Default:panier/layout/livraison.html.twig */
class __TwigTemplate_0838eb7b7e6e731a45efa1c45144156fcdc9c97b3046600c75d76f1ba81f517e extends Twig_Template
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
        <div class=\"span12\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        ";
        // line 11
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses")) != 0)) {
            // line 12
            echo "                        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("validation");
            echo "\" method=\"POST\">
                            <h4>Adresse de livraison</h4>
                            ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 15
                echo "                            
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"livraison\"  value=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0") == 0)) {
                    echo " checked=\"checked\" ";
                }
                echo " >
                                ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "adresse"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "cp"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "ville")), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "pays")), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livraisonAdresseSuppression", array("id" => $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                <br />";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "prenom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "nom")), "html", null, true);
                echo "
                            </label>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                            
                            <br/> <br/>
                            
                            <h4>Adresse de facturation</h4>
                            ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 27
                echo "                            
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"facturation\" value=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0") == 0)) {
                    echo " checked=\"checked\" ";
                }
                echo " >
                                ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "adresse"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "cp"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "ville")), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "pays")), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livraisonAdresseSuppression", array("id" => $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "id"))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                <br />";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "prenom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "nom")), "html", null, true);
                echo "
                            </label>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                            
                            <button class=\"btn btn-primary\">Valider mon adresse de livraison</button>
                        </form>
                            ";
        }
        // line 38
        echo "                    </div>


                    <div class=\"span4 offset2\">
                        <h4>Ajouter une nouvelle adresse</h4>
                        <form action=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\"  method=\"POST\" >
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                         <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 44,  187 => 43,  180 => 38,  174 => 34,  155 => 31,  143 => 30,  135 => 29,  131 => 27,  114 => 26,  108 => 22,  89 => 19,  77 => 18,  69 => 17,  65 => 15,  48 => 14,  42 => 12,  40 => 11,  31 => 4,  28 => 3,);
    }
}
