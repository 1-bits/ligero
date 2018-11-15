<?php 
/* * 
 *
 * @author      Cesar Darinel Ortiz
 */
defined('APP_DIR') OR exit('-_- no eres Humano ?');
class Model {

    private $connection;

    public function __construct() {
        global $config;

        $this->connection = mysqli_connect($config['db_host'], $config['db_username'], $config['db_password'], $config['db_name']);
    }

    public function escapeString($string) {
        return mysql_real_escape_string($string);
    }

    public function escapeArray($array) {
        array_walk_recursive($array, create_function('&$v', '$v = mysql_real_escape_string($v);'));
        return $array;
    }

    public function to_bool($val) {
        return !!$val;
    }

    public function to_date($val) {
        return date('Y-m-d', $val);
    }

    public function to_time($val) {
        return date('H:i:s', $val);
    }

    public function to_datetime($val) {
        return date('Y-m-d H:i:s', $val);
    }

    public function query($qry) {
        $result = mysqli_query($this->connection, $qry);
        $resultObjects = array();
        while ($row = mysqli_fetch_object($result)) {
            $resultObjects[] = $row;
        }
        return $resultObjects;
    }

    public function execute($qry) {
        $exec = mysqli_query($this->connection, $qry);
        return $exec;
    }
}
