<?php

/* ApplicationApplicationBundle:Default:index.html.twig */
class __TwigTemplate_f0de0a49ce4243dfee7b5dd3dcb63b91b49f115c8773c64c43e986aabcae9ccd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ApplicationApplicationBundle::layout/template.html.twig");

        $this->blocks = array(
            'row' => array($this, 'block_row'),
            'box' => array($this, 'block_box'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ApplicationApplicationBundle::layout/template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_row($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row\">
        <div class=\"box\">

            <div class=\"col-lg-12\">
                <hr>
                <h2 class=\"intro-text text-center\">
                    <strong>L'Ilot Régal</strong>
                </h2>
                <hr>

                <div class=\"panel-group\" id=\"accordion\">
                    <div class=\"panel panel-warning\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\" id=\"flash\">
                                <a class=\"accordion-toggle\" id=\"link\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                                   href=\"#collapseOne\">
                                    ";
        // line 21
        if (($this->getAttribute((isset($context["menuOfday"]) ? $context["menuOfday"] : $this->getContext($context, "menuOfday")), "0", array(), "array") == "Menu d'aujourd'hui")) {
            // line 22
            echo "                                        <span class=\"glyphicon glyphicon-star\"></span>
                                    ";
        }
        // line 24
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menuOfday"]) ? $context["menuOfday"] : $this->getContext($context, "menuOfday")), "0", array(), "array"), "html", null, true);
        echo "
                                </a><i class=\"indicator glyphicon glyphicon-chevron-down  pull-right\"></i>
                            </h4>
                        </div>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
                            <div class=\"panel-body\">
                                <pre>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "0", array(), "array"), "html", null, true);
        echo "</pre>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-warning\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                                   href=\"#collapseTwo\">
                                    ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menuOfday"]) ? $context["menuOfday"] : $this->getContext($context, "menuOfday")), "1", array(), "array"), "html", null, true);
        echo "
                                </a><i class=\"indicator glyphicon glyphicon-chevron-down  pull-right\"></i>
                            </h4>
                        </div>
                        <div id=\"collapseTwo\" class=\"panel-collapse collapse in\">
                            <div class=\"panel-body\">
                                <pre>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "1", array(), "array"), "html", null, true);
        echo "</pre>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-warning\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                                   href=\"#collapseThree\">
                                    ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menuOfday"]) ? $context["menuOfday"] : $this->getContext($context, "menuOfday")), "2", array(), "array"), "html", null, true);
        echo "
                                </a><i class=\"indicator glyphicon glyphicon-chevron-down pull-right\"></i>
                            </h4>
                        </div>
                        <div id=\"collapseThree\" class=\"panel-collapse collapse in\">
                            <div class=\"panel-body\">
                                <pre>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "2", array(), "array"), "html", null, true);
        echo "</pre>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
    }

    // line 71
    public function block_box($context, array $blocks = array())
    {
        // line 72
        echo "     <div class=\"row\">
         <div class=\"box\">
             <div class=\"col-lg-12\">
                 <hr>
                 <h2 class=\"intro-text text-center\">
                     <strong>Régal du circuit</strong>
                 </h2>
                 <hr>
                 <div class=\"panel-group\" id=\"accordion2\">
                     <div class=\"panel panel-warning\">
                         <div class=\"panel-heading\">
                             <h4 class=\"panel-title\" id=\"flash2\">
                                 <a class=\"accordion-toggle\" id=\"link2\" data-toggle=\"collapse\" data-parent=\"#accordion2\"
                                    href=\"#collapse4\">
                                     ";
        // line 86
        if (($this->getAttribute((isset($context["mealOfday"]) ? $context["mealOfday"] : $this->getContext($context, "mealOfday")), "0", array(), "array") == "Repas d'aujourd'hui")) {
            // line 87
            echo "                                         <span class=\"glyphicon glyphicon-star\"></span>
                                     ";
        }
        // line 89
        echo "                                     ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mealOfday"]) ? $context["mealOfday"] : $this->getContext($context, "mealOfday")), "0", array(), "array"), "html", null, true);
        echo "

                                 </a><i class=\"indicator glyphicon glyphicon-chevron-down  pull-right\"></i>
                             </h4>
                         </div>
                         <div id=\"collapse4\" class=\"panel-collapse collapse in\">
                             <div class=\"panel-body\">
                                 <pre>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refine"]) ? $context["refine"] : $this->getContext($context, "refine")), "0", array(), "array"), "html", null, true);
        echo "</pre>
                             </div>
                         </div>
                     </div>
                     <div class=\"panel panel-warning\">
                         <div class=\"panel-heading\">
                             <h4 class=\"panel-title\">
                                 <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\"
                                    href=\"#collapse5\">
                                     ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mealOfday"]) ? $context["mealOfday"] : $this->getContext($context, "mealOfday")), "1", array(), "array"), "html", null, true);
        echo "
                                 </a><i class=\"indicator glyphicon glyphicon-chevron-down  pull-right\"></i>
                             </h4>
                         </div>
                         <div id=\"collapse5\" class=\"panel-collapse collapse in\">
                             <div class=\"panel-body\">
                                 <pre>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refine"]) ? $context["refine"] : $this->getContext($context, "refine")), "1", array(), "array"), "html", null, true);
        echo "</pre>
                             </div>
                         </div>
                     </div>
                     <div class=\"panel panel-warning\">
                         <div class=\"panel-heading\">
                             <h4 class=\"panel-title\">
                                 <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\"
                                    href=\"#collapse6\">
                                     ";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mealOfday"]) ? $context["mealOfday"] : $this->getContext($context, "mealOfday")), "2", array(), "array"), "html", null, true);
        echo "
                                 </a><i class=\"indicator glyphicon glyphicon-chevron-down pull-right\"></i>
                             </h4>
                         </div>
                         <div id=\"collapse6\" class=\"panel-collapse collapse in\">
                             <div class=\"panel-body\">
                                 <pre>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refine"]) ? $context["refine"] : $this->getContext($context, "refine")), "2", array(), "array"), "html", null, true);
        echo "</pre>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 ";
    }

    public function getTemplateName()
    {
        return "ApplicationApplicationBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 126,  192 => 120,  180 => 111,  171 => 105,  159 => 96,  148 => 89,  144 => 87,  142 => 86,  126 => 72,  123 => 71,  109 => 60,  100 => 54,  88 => 45,  79 => 39,  67 => 30,  57 => 24,  53 => 22,  51 => 21,  32 => 4,  29 => 3,);
    }
}
