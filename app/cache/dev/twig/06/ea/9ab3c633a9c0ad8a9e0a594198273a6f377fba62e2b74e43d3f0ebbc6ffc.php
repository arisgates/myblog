<?php

/* ArisgatesBlogBundle:Default:index.html.twig */
class __TwigTemplate_06ea9ab3c633a9c0ad8a9e0a594198273a6f377fba62e2b74e43d3f0ebbc6ffc extends Twig_Template
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
        echo "<body>
Hello ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!    
    
</body>

";
    }

    public function getTemplateName()
    {
        return "ArisgatesBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
