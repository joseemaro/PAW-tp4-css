<?php

namespace App\Core\Database;

use PDO;
use Exception;

class QueryBuilder
{
    /**
     * The PDO instance.
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * Create a new QueryBuilder instance.
     *
     * @param PDO $pdo
     */
    public function __construct($pdo, $logger = null)
    {
        $this->pdo = $pdo;
        $this->logger = ($logger) ? $logger : null;
    }

    /**
     * Select all records from a database table.
     *
     * @param string $table
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Finds a record into a table.
     *
     * @param string $table
     * @param integer $id
     * @return array
     */
    public function find($table, $id)
    {
        $sql = "select * from $table where id = :id;";
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            $this->sendToLog($e);
        }
    }

    /**
     * Finds a record into a table.
     *
     * @param string $table
     * @param integer $id
     * @return array
     */
    public function findturno($table, $fecha_turno, $horario_turno)
    {
        try {
            $statement = $this->pdo->prepare("select *, count(*) from $table where fecha_turno = :fecha_turno and horario_turno = :horario_turno");
            $statement->bindValue(":fecha_turno", $fecha_turno);
            $statement->bindValue(":horario_turno", $horario_turno);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            $this->sendToLog($e);
        }
    }

    /**
     * Destroys a record from a table.
     *
     * @param string $table
     * @param integer $id
     */
    public function delete($table, $id)
    {
        $sql = "delete from $table where id = :id;";
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();
        } catch (Exception $e) {
            $this->sendToLog($e);
        }
    }

    /**
     * Insert a record into a table.
     *
     * @param  string $table
     * @param  array  $parameters
     */
    public function insert($table, $parameters)
    {
        $parameters = $this->cleanParameterName($parameters);
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            $this->sendToLog($e);
        }
    }

    /**
     * Insert a record into a table.
     *
     * @param string $table
     * @param $id
     * @param array $parameters
     */
    public function update($table, $id, $parameters)
    {
        foreach ($parameters as $key => $value) {
            $sql = sprintf(
                "UPDATE %s SET %s=%s WHERE id=%s;",
                $table,
                $key,
                ':'.$key,
                $id
            );
            try {
                $statement = $this->pdo->prepare($sql);
                $statement->execute(array($key => $value));
            } catch (Exception $e) {
                $this->sendToLog($e);
            }
        }
    }

    private function sendToLog(Exception $e)
    {
        if ($this->logger) {
            $this->logger->error('Error', ["Error" => $e]);
        }
    }

    /**
     * Limpia guiones - que puedan venir en los nombre de los parametros
     * ya que esto no funciona con PDO
     *
     * Ver: http://php.net/manual/en/pdo.prepared-statements.php#97162
     */
    private function cleanParameterName($parameters)
    {
        $cleaned_params = [];
        foreach ($parameters as $name => $value) {
            $cleaned_params[str_replace('-', '', $name)] = $value ;
        }
        return $cleaned_params;
    }
}
