<?php

/* BloggerGenBundle:Default:index.html.twig */
class __TwigTemplate_1c2687f54311ebe466e1b8b5f897ae6d80eed006756babe51e7ea2d33024d0cb extends Twig_Template
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
        echo "<html>
<head>
<title></title>
<link rel=\"stylesheet\" src=\"/css/bootstrap.css\" type=\"text/css\"/>
</head>
<body>
Hello ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "BloggerGenBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
