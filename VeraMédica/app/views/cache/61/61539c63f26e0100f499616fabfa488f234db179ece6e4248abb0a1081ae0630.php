<?php

/* edit.appointment.html */
class __TwigTemplate_8f32be53c4a57852acaa44e4d366c475ff60c0c481e472f644b299427ca08b76 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "edit.appointment.html", 1);
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
        echo "Edit Appointment";
    }

    public function block_header($context, array $blocks = array())
    {
        echo twig_include($this->env, $context, "nav.views.html");
    }

    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<meta name=\"keywords\" content=\"PAW,2020,Templates,PHP\">";
    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "<form class=\"general-form\" action=\"/upt_appointment\" method=\"post\" enctype=\"multipart/form-data\">
    <input type=\"id\" name=\"id\" readonly value=";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "id", array()), "html", null, true);
        echo " style=\"display: none\">
    <label><b>Nombre: </b><input type=\"text\" name=\"nombre\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "nombre", array()), "html", null, true);
        echo "\"></label><br>
    <label><b>Email: </b><input type=\"email\" name=\"email\" value=";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "email", array()), "html", null, true);
        echo "></label><br>
    <label><b>Telefono: </b><input type=\"tel\" name=\"telefono\" value=";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "telefono", array()), "html", null, true);
        echo "></label><br>
    <label><b>Edad: </b><input type=\"text\" name=\"edad\" maxlength=\"2\" max=\"99\" value=";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "edad", array()), "html", null, true);
        echo "></label><br>
    <label><b>Talla de calzado: </b><input type=\"text\" name=\"talla_calzado\" maxlength=\"2\" value=";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "talla_calzado", array()), "html", null, true);
        echo "></label><br>
    <label><b>Altura: </b><input type=\"range\" name=\"altura\" min=\"100\" max=\"200\" step=\"10\" value=";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "altura", array()), "html", null, true);
        echo " list=\"tickmarks\">
        <datalist id=\"tickmarks\">
            <option value=\"100\" label=\"1mts\">
            <option value=\"110\">
            <option value=\"120\">
            <option value=\"130\">
            <option value=\"140\">
            <option value=\"150\" label=\"1,50\">
            <option value=\"160\">
            <option value=\"170\">
            <option value=\"180\">
            <option value=\"190\">
            <option value=\"200\" label=\"2mts\">
        </datalist></label><br>
    <label><b>Fecha de nacimiento: </b><input type=\"date\" name=\"fecha_nacimiento\" value=";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "fecha_nacimiento", array()), "html", null, true);
        echo "></label><br>
    <label><b>Color de pelo: </b><select required name=\"color_pelo\">
        <option value=\"\" selected disabled>seleccione el color</option>
        <option>morocho</option>
        <option>rubio</option>
        <option>colorado</option>
        <option>castanio</option>
    </select></label><br>
    <label><b>Fecha de turno: </b><input type=\"date\" name=\"fecha_turno\" value=";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "fecha_turno", array()), "html", null, true);
        echo "></label><br>
    <label><b>Horario de turno(hh:min): </b><input type=\"time\" min=\"08:00\" max=\"17:00\" step=\"900\" name=\"horario_turno\" value=";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "horario_turno", array()), "html", null, true);
        echo "></label><br>";
        if (twig_get_attribute($this->env, $this->source, ($context["ap"] ?? null), "diagnostico", array())) {
            // line 34
            echo "    <label><b>Diagnostico</b></label><br>
    <img width=\"40%\" src=\"data:diagnostico/png;base64,";
            // line 35
            echo twig_escape_filter($this->env, ($context["diagnostico64"] ?? null), "html", null, true);
            echo "\" />";
        }
        // line 36
        echo "
    <br><input type=\"submit\" value=\"Enviar\" />
    <button type=\"button\" onclick=\"location.href='list_appointments'\">Cancelar</button>
</form>";
    }

    public function getTemplateName()
    {
        return "edit.appointment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 36,  121 => 35,  118 => 34,  114 => 33,  110 => 32,  99 => 24,  82 => 10,  78 => 9,  74 => 8,  70 => 7,  66 => 6,  62 => 5,  58 => 4,  55 => 3,  52 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %} {% block title %}Edit Appointment{% endblock %} {% block header %} {{ include('nav.views.html') }} {% endblock %} {% block head %} {{ parent() }}
<meta name=\"keywords\" content=\"PAW,2020,Templates,PHP\"> {% endblock %} {% block main %}
<form class=\"general-form\" action=\"/upt_appointment\" method=\"post\" enctype=\"multipart/form-data\">
    <input type=\"id\" name=\"id\" readonly value={{ ap.id }} style=\"display: none\">
    <label><b>Nombre: </b><input type=\"text\" name=\"nombre\" value=\"{{ ap.nombre }}\"></label><br>
    <label><b>Email: </b><input type=\"email\" name=\"email\" value={{ ap.email }}></label><br>
    <label><b>Telefono: </b><input type=\"tel\" name=\"telefono\" value={{ ap.telefono }}></label><br>
    <label><b>Edad: </b><input type=\"text\" name=\"edad\" maxlength=\"2\" max=\"99\" value={{ ap.edad }}></label><br>
    <label><b>Talla de calzado: </b><input type=\"text\" name=\"talla_calzado\" maxlength=\"2\" value={{ ap.talla_calzado }}></label><br>
    <label><b>Altura: </b><input type=\"range\" name=\"altura\" min=\"100\" max=\"200\" step=\"10\" value={{ ap.altura }} list=\"tickmarks\">
        <datalist id=\"tickmarks\">
            <option value=\"100\" label=\"1mts\">
            <option value=\"110\">
            <option value=\"120\">
            <option value=\"130\">
            <option value=\"140\">
            <option value=\"150\" label=\"1,50\">
            <option value=\"160\">
            <option value=\"170\">
            <option value=\"180\">
            <option value=\"190\">
            <option value=\"200\" label=\"2mts\">
        </datalist></label><br>
    <label><b>Fecha de nacimiento: </b><input type=\"date\" name=\"fecha_nacimiento\" value={{ ap.fecha_nacimiento }}></label><br>
    <label><b>Color de pelo: </b><select required name=\"color_pelo\">
        <option value=\"\" selected disabled>seleccione el color</option>
        <option>morocho</option>
        <option>rubio</option>
        <option>colorado</option>
        <option>castanio</option>
    </select></label><br>
    <label><b>Fecha de turno: </b><input type=\"date\" name=\"fecha_turno\" value={{ ap.fecha_turno }}></label><br>
    <label><b>Horario de turno(hh:min): </b><input type=\"time\" min=\"08:00\" max=\"17:00\" step=\"900\" name=\"horario_turno\" value={{ ap.horario_turno }}></label><br> {% if (ap.diagnostico) %}
    <label><b>Diagnostico</b></label><br>
    <img width=\"40%\" src=\"data:diagnostico/png;base64,{{ diagnostico64 }}\" /> {% endif %}

    <br><input type=\"submit\" value=\"Enviar\" />
    <button type=\"button\" onclick=\"location.href='list_appointments'\">Cancelar</button>
</form>
{% endblock %}", "edit.appointment.html", "C:\\Users\\josee\\Desktop\\PROGRAMACION WEB\\repos\\TRABAJO4-CSS\\PAW-tp4-css-2\\VeraMédica\\app\\views\\edit.appointment.html");
    }
}
