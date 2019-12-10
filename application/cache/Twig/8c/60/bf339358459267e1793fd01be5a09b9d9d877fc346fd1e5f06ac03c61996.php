<?php

/* pages/authentication/lost.twig */
class __TwigTemplate_8c60bf339358459267e1793fd01be5a09b9d9d877fc346fd1e5f06ac03c61996 extends Twig_Template
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
        // line 6
        $context["title"] = "Забыли пароль";
        // line 7
        $this->env->loadTemplate("templates/simple_header.twig")->display($context);
        // line 8
        echo "
";
        // line 9
        echo form_open("login/lost");
        echo "
\t<div class=\"box login\">

\t\t<div class=\"judge_logo\">
\t\t\t<a href=\"";
        // line 13
        echo site_url();
        echo "\"><img src=\"";
        echo base_url("assets/images/banner.png");
        echo "\"/></a>
\t\t</div>

\t\t<div class=\"login_form\">
\t\t\t<div class=\"login1\">
\t\t\t\t<p>
\t\t\t\t\t<label for=\"form_email\">Email</label><br/>
\t\t\t\t\t<input id=\"form_email\" type=\"email\" name=\"email\" class=\"sharif_input\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, set_value("email"), "html", null, true);
        echo "\"/>
\t\t\t\t\t";
        // line 21
        echo form_error("email", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t\t</p>
\t\t\t\t";
        // line 23
        if ((isset($context["sent"]) ? $context["sent"] : null)) {
            // line 24
            echo "\t\t\t\t\t<div class=\"shj_ok\">Мы отправили на вашу почту письмо для сброса пароля.</div>
\t\t\t\t";
        }
        // line 26
        echo "\t\t\t</div>
\t\t\t<div class=\"login2\">
\t\t\t\t<p style=\"margin:0;\">
\t\t\t\t\t<a href=\"";
        // line 29
        echo site_url("login");
        echo "\">Войти</a>
\t\t\t\t\t<input type=\"submit\" value=\"Сбросить пароль\" id=\"sharif_submit\"/>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t</div>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/authentication/lost.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 29,  60 => 26,  56 => 24,  54 => 23,  49 => 21,  45 => 20,  33 => 13,  26 => 9,  23 => 8,  21 => 7,  19 => 6,);
    }
}
