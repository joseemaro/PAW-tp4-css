<?php

namespace App\models;

use App\Core\Model;
use App\Core\App;

class Appointment extends Model
{
    protected $table = 'appointments';
    protected $booleano = true;
    protected $imagen_pesada = false;
    public $msg = array();
    public $parametros = array();

    public function valid_nombre($valor) {
        $booleano = true;
        $name = trim($valor);
        if ($name !== '') {
            $pattern = '/^[a-zA-Z, ]*$/';
            if (!(preg_match($pattern, $name))) {
                $error = "El formato del nombre no es correcto";
                array_push($this->msg, $error);
                $booleano= false;
            }
            else {
                $this->parametros['nombre'] = $valor;
            }
        } elseif ($name == ''){
            $error = "El nombre es requerido";
            array_push($this->msg, $error);
            $booleano= false;
        }
        return $booleano;
    }

    function valid_email($valor) {
        $booleano = true;
        if(!filter_var($valor, FILTER_VALIDATE_EMAIL) || empty($valor) ){
            $error = "No se ha indicado email o el formato no es correcto";
            array_push($this->msg, $error);
            $booleano= false;
        } else {
            $this->parametros['email'] = $valor;
        }
        return $booleano;
    }

    function valid_telefono($valor) {
        $booleano = true;
        if(!filter_var($valor, FILTER_VALIDATE_INT) || empty($valor)){
            $error = "No se ha indicado telefono o el formato no es correcto";
            array_push($this->msg, $error);
            $booleano= false;
        } else {
            $this->parametros['telefono'] = $valor;
        }
        return $booleano;
    }

    function valid_edad($valor) {
        $booleano = true;
        if(!empty($valor) && (!filter_var($valor, FILTER_VALIDATE_INT) || $valor < 1 || $valor > 100)){
            $error = "El formato de la edad no es correcto";
            array_push($this->msg, $error);
            $booleano= false;
        } else {
            $this->parametros['edad'] = $valor;
        }
        return $booleano;
    }

    function valid_talla_calzado($valor) {
        $booleano = true;
        if(!empty($valor) && (!filter_var($valor, FILTER_VALIDATE_INT) || $valor > 60 || $valor < 20)){
            $error = "El formato de la talla del calzado no es correcto";
            array_push($this->msg, $error);
            $booleano= false;
        } else {
            $this->parametros['talla_calzado'] = $valor;
        }
        return $booleano;
    }

    function valid_altura($valor) {
        $booleano = true;
        if(!empty($valor) && (!filter_var($valor, FILTER_VALIDATE_INT) || $valor > 200 || $valor < 100)){
            $error = "El formato de la altura no es correcto";
            array_push($this->msg, $error);
            $booleano= false;
        } else {
            $this->parametros['altura'] = $valor;
        }
        return $booleano;
    }

    function valid_fecha_nacimiento($valor) {
        $booleano = true;
        if(empty($valor)){
            $error = "No se ha indicado la fecha de nacimiento o el formato no es correcto";
            array_push($this->msg, $error);
            $booleano= false;
        } else {
            $this->parametros['fecha_nacimiento'] = $valor;
        }
        return $booleano;
    }

    function valid_color_pelo($valor) {
        $booleano = true;
        if (!empty($valor) && ($valor != "morocho" && $valor != "rubio" && $valor != "colorado" && $valor != "castanio")){
            $error = "No se ha indicado color de pelo(morocho,rubio,colorado,casta&ntilde;o) o el formato no es correcto";
            array_push($this->msg, $error);
            $booleano= false;
        } else {
            $this->parametros['color_pelo'] = $valor;
        }
        return $booleano;
    }

    function valid_fecha_turno($valor) {
        $booleano = true;
        if(empty($valor)){
            $error = "No se ha indicado la fecha del turno o el formato no es correcto";
            array_push($this->msg, $error);
            $booleano= false;
        } else {
            $this->parametros['fecha_turno'] = $valor;
        }
        return $booleano;
    }

    function valid_horario_turno($valor) {
        $booleano = true;
        $pattern="/^([0][8-9]|[1][0-7])[\:]([0-5][0-9])$/";
        if (empty($valor) || !preg_match($pattern,$valor))
        {
            $error = "No se ha indicado el horario o el formato no es correcto";
            array_push($this->msg, $error);
            $booleano= false;
        } else {
            $row = $this->db->findturno($this->table, $this->parametros['fecha_turno'], $valor);
            if ($row['count'] > 0) {
                $error = "Ya existe un turno en esa fecha y horario";
                array_push($this->msg, $error);
                $booleano = false;
            }else {
                $this->parametros['horario_turno'] = $valor;
            }
        }
        return $booleano;
    }

    function valid_diagnostico($valor) {
        $booleano = true;
        if (!empty($valor["diagnostico"]["name"])) {
            $extension = $valor["diagnostico"]["type"];
            $extension = strtolower($extension);
            if ($extension != 'image/png' && $extension != 'image/jpg' && $extension != 'image/jpeg') {
                $error = "Solo se permite archivos con extensión JPG y PNG.";
                array_push($this->msg, $error);
                $booleano = false;
            }

            $size = $valor["diagnostico"]["size"];
            if ($size > 10000000) {
                $count = count($this->msg);
                if ($count != 0) {
                    $error = "Solo se permite archivos menores o iguales a 10 MB.";
                    array_push($this->msg, $error);
                    $booleano = false;
                } else {
                    $error = "Imagen Pesada";
                    array_push($this->msg, $error);
                    $booleano = false;
                    $this->imagen_pesada = true;
                }
            }

            if ($booleano){
                $this->parametros['diagnostico'] = file_get_contents($valor['diagnostico']['tmp_name']);
            }
        }
        return $booleano;
    }

    public function validarImagen($diagnostico) {
        return $this->valid_diagnostico($diagnostico);
    }

    public function validar($params)
    {
        if (empty($params)) {
            $this->booleano = false;
        } else {
            foreach ($params as $param => $valor) {
                $method_name = "valid_" . $param;
                $this->booleano = $this->booleano && self::$method_name($valor);
            }
        }
    }

    public function validarInsert($params) {
        $this->booleano = true;
        $this->validar($params);
        if ($this->booleano) {
            $this->db->insert($this->table, $this->parametros);
            $row = $this->db->findturno($this->table, $this->parametros['fecha_turno'], $this->parametros['horario_turno']);
            $logger = App::get('logger');
            //$logger->info("A", $this->db->find($this->table, $row['id']));
            $logger->info("A", $row);

            $error = "Correcto";
            array_push($this->msg, $error);

            return $this->msg;
        } else{
            if ($this->imagen_pesada) {
                array_push($this->msg, $this->parametros);
            }
            array_unshift($this->msg, "Incorrecto");
            return $this->msg;
        }
    }

    public function validarUpdate($params, $id) {
        $this->booleano = true;
        $this->validar($params);
        if ($this->booleano) {
            $this->db->update($this->table, $id, $params);
            $row = $this->db->find($this->table, $id);
            $logger = App::get('logger');
            $logger->info("M", $row);

            $error = "Correcto";
            array_push($this->msg, $error);

            return $this->msg;
        }else{

            array_unshift($this->msg, "Incorrecto");
            return $this->msg;
        }
    }

    public function findturno() {
        return $this->db->findturno($this->table, $this->parametros['fecha_turno'], $this->parametros['horario_turno']);
    }

    public function findid($id) {
        return $this->db->find($this->table, $id);
    }

    public function all() {
        return $this->db->selectAll($this->table);
    }

    public function delete($id) {
        $row = $this->findid($id);
        $logger = App::get('logger');
        $logger->info("B", $row);
        $this->db->delete($this->table, $id);
    }
}
