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
        echo "    <div class=\"row\">
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
                            <h4 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">
                                    Menu #1
                                </a><i class=\"indicator glyphicon glyphicon-chevron-down  pull-right\"></i>
                            </h4>
                        </div>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
                            <div class=\"panel-body\">

                                    ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "0", array(), "array"), "html", null, true);
        echo "

                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">
                                    Menu #2
                                </a><i class=\"indicator glyphicon glyphicon-chevron-down  pull-right\"></i>
                            </h4>
                        </div>
                        <div id=\"collapseTwo\" class=\"panel-collapse collapse in\">
                            <div class=\"panel-body\">
                                ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "1", array(), "array"), "html", null, true);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\">
                                    Menu #3
                                </a><i class=\"indicator glyphicon glyphicon-chevron-down pull-right\"></i>
                            </h4>
                        </div>
                        <div id=\"collapseThree\" class=\"panel-collapse collapse in\">
                            <div class=\"panel-body\">
                                ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "2", array(), "array"), "html", null, true);
        echo "
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
    }

    // line 65
    public function block_box($context, array $blocks = array())
    {
        // line 66
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
                         <h4 class=\"panel-title\">
                             <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse4\">
                                 Menu #1
                             </a><i class=\"indicator glyphicon glyphicon-chevron-down  pull-right\"></i>
                         </h4>
                     </div>
                     <div id=\"collapse4\" class=\"panel-collapse collapse in\">
                         <div class=\"panel-body\">
                          ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refine"]) ? $context["refine"] : $this->getContext($context, "refine")), "0", array(), "array"), "html", null, true);
        echo "
                         </div>
                     </div>
                 </div>
                 <div class=\"panel panel-default\">
                     <div class=\"panel-heading\">
                         <h4 class=\"panel-title\">
                             <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse5\">
                                 Menu #2
                             </a><i class=\"indicator glyphicon glyphicon-chevron-down  pull-right\"></i>
                         </h4>
                     </div>
                     <div id=\"collapse5\" class=\"panel-collapse collapse in\">
                         <div class=\"panel-body\">
                             ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refine"]) ? $context["refine"] : $this->getContext($context, "refine")), "1", array(), "array"), "html", null, true);
        echo "
                         </div>
                     </div>
                 </div>
                 <div class=\"panel panel-default\">
                     <div class=\"panel-heading\">
                         <h4 class=\"panel-title\">
                             <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse6\">
                                 Menu #3
                             </a><i class=\"indicator glyphicon glyphicon-chevron-down pull-right\"></i>
                         </h4>
                     </div>
                     <div id=\"collapse6\" class=\"panel-collapse collapse in\">
                         <div class=\"panel-body\">
                             ";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refine"]) ? $context["refine"] : $this->getContext($context, "refine")), "2", array(), "array"), "html", null, true);
        echo "
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
        return array (  162 => 113,  145 => 99,  128 => 85,  107 => 66,  104 => 65,  90 => 54,  73 => 40,  55 => 25,  32 => 4,  29 => 3,);
    }
}
