<?php

/* views.appointment.html */
class __TwigTemplate_c1d096cf5259a1772e8f51641dc15f8ba1711808b8070a26f0cdcece58e736a1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "views.appointment.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_title($context, array $blocks = array())
    {
        echo "View Appointment";
    }

    public function block_header($context, array $blocks = array())
    {
        echo twig_include($this->env, $context, "nav.views.html");
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/style.css\">";
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<meta name=\"keywords\" content=\"PAW,2020,Templates,PHP\">";
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "<form class=\"general-form\">
    <label><b>Nombre: </b><input type=\"text\" name=\"nombre\" readonly value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "nombre", array()), "html", null, true);
        echo "\"></label><br>
    <label><b>Email: </b><input type=\"email\" name=\"email\" readonly value=";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "email", array()), "html", null, true);
        echo "></label><br>
    <label><b>Telefono: </b><input type=\"tel\" name=\"telefono\" readonly value=";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "telefono", array()), "html", null, true);
        echo "></label><br>
    <label><b>Edad: </b><input type=\"text\" name=\"edad\" readonly value=";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "edad", array()), "html", null, true);
        echo "></label><br>
    <label><b>Talla de calzado: </b><input type=\"text\" name=\"talla_calzado\" readonly value=";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "talla_calzado", array()), "html", null, true);
        echo "></label><br>
    <label><b>Altura: </b><input type=\"text\" name=\"altura\" readonly value=";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "altura", array()), "html", null, true);
        echo "></label><br>
    <label><b>Fecha de nacimiento: </b><input type=\"date\" name=\"fecha_nacimiento\" readonly value=";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "fecha_nacimiento", array()), "html", null, true);
        echo "></label><br>
    <label><b>Color de pelo: </b><input type=\"text\" name=\"color_pelo\" readonly value=";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "color_pelo", array()), "html", null, true);
        echo "></label><br>
    <label><b>Fecha de turno: </b><input type=\"date\" name=\"fecha_turno\" readonly value=";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "fecha_turno", array()), "html", null, true);
        echo "></label><br>
    <label><b>Horario de turno(hh:min): </b><input type=\"time\" name=\"horario_turno\" readonly value=";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "horario_turno", array()), "html", null, true);
        echo "></label><br>";
        if (twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "diagnostico", array())) {
            // line 15
            echo "    <label><b>Diagnostico</b></label><br>
    <img width=\"40%\" src=\"data:image/png;base64,";
            // line 16
            echo twig_escape_filter($this->env, ($context["diagnostico64"] ?? null), "html", null, true);
            echo " \" />";
        }
        // line 17
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "views.appointment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 17,  104 => 16,  101 => 15,  97 => 14,  93 => 13,  89 => 12,  85 => 11,  81 => 10,  77 => 9,  73 => 8,  69 => 7,  65 => 6,  61 => 5,  58 => 4,  55 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %} {% block title %}View Appointment{% endblock %} {% block header %} {{ include('nav.views.html') }}
<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/style.css\"> {% endblock %} {% block head %} {{ parent() }}
<meta name=\"keywords\" content=\"PAW,2020,Templates,PHP\"> {% endblock %} {% block main %}
<form class=\"general-form\">
    <label><b>Nombre: </b><input type=\"text\" name=\"nombre\" readonly value=\"{{ ap.nombre }}\"></label><br>
    <label><b>Email: </b><input type=\"email\" name=\"email\" readonly value={{ ap.email }}></label><br>
    <label><b>Telefono: </b><input type=\"tel\" name=\"telefono\" readonly value={{ ap.telefono }}></label><br>
    <label><b>Edad: </b><input type=\"text\" name=\"edad\" readonly value={{ ap.edad }}></label><br>
    <label><b>Talla de calzado: </b><input type=\"text\" name=\"talla_calzado\" readonly value={{ ap.talla_calzado }}></label><br>
    <label><b>Altura: </b><input type=\"text\" name=\"altura\" readonly value={{ ap.altura }}></label><br>
    <label><b>Fecha de nacimiento: </b><input type=\"date\" name=\"fecha_nacimiento\" readonly value={{ ap.fecha_nacimiento }}></label><br>
    <label><b>Color de pelo: </b><input type=\"text\" name=\"color_pelo\" readonly value={{ ap.color_pelo }}></label><br>
    <label><b>Fecha de turno: </b><input type=\"date\" name=\"fecha_turno\" readonly value={{ ap.fecha_turno }}></label><br>
    <label><b>Horario de turno(hh:min): </b><input type=\"time\" name=\"horario_turno\" readonly value={{ ap.horario_turno }}></label><br> {% if (ap.diagnostico) %}
    <label><b>Diagnostico</b></label><br>
    <img width=\"40%\" src=\"data:image/png;base64, {{diagnostico64}} \" /> {% endif %}
</form>
{% endblock %}", "views.appointment.html", "C:\\Users\\josee\\Desktop\\PROGRAMACION WEB\\repos\\TRABAJO4-CSS\\PAW-tp4-css-2\\VeraMédica\\app\\views\\views.appointment.html");
    }
}
