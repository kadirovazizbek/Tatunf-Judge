<?php

/* pages/authentication/register.twig */
class __TwigTemplate_836e31adde011feef430b183f9b6efa0009c432459359d65852f3250b7e98b94 extends Twig_Template
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
        $context["title"] = "Регистрация на сайте";
        // line 7
        $this->env->loadTemplate("templates/simple_header.twig")->display($context);
        // line 8
        echo "
";
        // line 9
        echo form_open("login/register");
        echo "
<div class=\"box register\">

\t<div class=\"judge_logo\">
\t\t<a href=\"";
        // line 13
        echo site_url();
        echo "\"><img src=\"";
        echo base_url("assets/images/banner.png");
        echo "\"/></a>
\t</div>

\t<div class=\"login_form\">
\t\t<div class=\"login1\">
\t\t\t";
        // line 18
        if ((isset($context["registration_code_required"]) ? $context["registration_code_required"] : null)) {
            // line 19
            echo "\t\t\t<p>
\t\t\t\t<label for=\"form_reg_code\">Регистрационный код</label><br/>
\t\t\t\t<input id=\"form_reg_code\" type=\"text\" name=\"registration_code\" required=\"required\" autofocus=\"autofocus\" class=\"sharif_input\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, set_value("registration_code"), "html", null, true);
            echo "\"/>
\t\t\t\t";
            // line 22
            echo form_error("registration_code", "<div class=\"shj_error\">", "</div>");
            echo "
\t\t\t</p>
\t\t\t";
        }
        // line 25
        echo "\t\t\t<p>
\t\t\t\t<label for=\"form_username\">Логин</label><br/>
\t\t\t\t<input id=\"form_username\" type=\"text\" name=\"username\" required=\"required\" pattern=\"[0-9A-Za-z]{3,20}\" title=\"Поле Логин должно содержать от 3 до 20 символов, и содержать только символы в нижнем регистре и цифры\" class=\"sharif_input\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
        echo "\"/>
\t\t\t\t";
        // line 28
        echo form_error("username", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<label for=\"form_email\">Email</label><br/>
\t\t\t\t<input id=\"form_email\" type=\"email\" autocomplete=\"off\" name=\"email\" required=\"required\" class=\"sharif_input\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, set_value("email"), "html", null, true);
        echo "\"/>
\t\t\t\t";
        // line 33
        echo form_error("email", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<label for=\"form_password\">Пароль</label><br/>
\t\t\t\t<input id=\"form_password\" type=\"password\" name=\"password\" required=\"required\" pattern=\".{6,200}\" title=\"Пароль должен содержать как минимум 6 символов\" class=\"sharif_input\"/>
\t\t\t\t";
        // line 38
        echo form_error("password", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<label for=\"form_password_2\">Повторите Пароль</label><br/>
\t\t\t\t<input id=\"form_password_2\" type=\"password\" name=\"password_again\" required=\"required\" pattern=\".{6,200}\" title=\"Поле Повторите Пароль должен содержать как минимум 6 символов\" class=\"sharif_input\"/>
\t\t\t\t";
        // line 43
        echo form_error("password_again", "<div class=\"shj_error\">", "</div>");
        echo "
\t\t\t</p>
\t\t</div>
\t\t<div class=\"login2\">
\t\t\t<p style=\"margin:0;\">
\t\t\t\t<a href=\"";
        // line 48
        echo site_url("login");
        echo "\">Войти</a>
\t\t\t\t<input type=\"submit\" value=\"Зарегистрироваться\" id=\"sharif_submit\"/>
\t\t\t</p>
\t\t</div>
\t</div>

</div>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pages/authentication/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 48,  94 => 43,  86 => 38,  78 => 33,  74 => 32,  67 => 28,  63 => 27,  59 => 25,  53 => 22,  49 => 21,  45 => 19,  43 => 18,  33 => 13,  26 => 9,  23 => 8,  21 => 7,  19 => 6,);
    }
}
