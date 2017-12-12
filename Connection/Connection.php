<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 24/11/2017
 * Time: 21:14
 */

class Connection extends PDO
{
    private $prepareur;

    public function __construct($dsn,$username,$password)  {
        parent::__construct($dsn,$username,$password);
        $this ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function executeQuery($query, $parameters){
        $this ->prepareur = parent::prepare($query);
        $i=1;
        echo "parameters";
        var_dump($parameters);
        foreach ($parameters as $val1 => $val2)
        {
            $this ->prepareur ->bindValue($i, $val1, $val2);
            $i++;
        }
        return $this ->prepareur ->execute();
    }

    public function getResults()
    {
        return $this ->prepareur ->fetchall();
    }

    public function displayResults($res){
        foreach ($res as $line){
            $i=0;
            foreach ($line as $arg){
                $i++;
            }
            for($j=0;$j<($i/2);$j++){
                print "$line[$j]";
                echo "<br/>";
            }
            echo "<br/>";
        }
    }
}