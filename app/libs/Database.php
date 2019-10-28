<?php
class Database extends PDO
{
    public function __construct()
    {
        parent::__construct(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    }

    public function insert($table, $data)
    {
        ksort($data);
        $keys = implode(",", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));
        $sth = $this->prepare("INSERT INTO `$table` ($keys) VALUES ($values) ");
        foreach ($data as $key => $value) {
            $sth->bindValue(":" . $key, $value);
        }
        if ($sth->execute()) {
            return "successful";
        } else {
            // throw new Exception("Error Processing Request", 1);
            $errors = $sth->errorInfo();
            return $errors[2];
        }
    }

    
    public function update($table, $data, $params)
    {
        ksort($data);
        $updateParams = '';
        foreach ($data as $key => $value) {
            $updateParams .= " $key = :$key,";
        }
        $updateParams = rtrim($updateParams, ',');
        $sth = $this->prepare("UPDATE `$table` SET $updateParams WHERE $params");
        foreach ($data as $key => $value) {
            $sth->bindValue(":" . $key, $value);
        }

        if ($sth->execute()) {
            return "successful";
        } else {
            // throw new Exception("Error Processing Request", 1);
            $errors = $sth->errorInfo();
            return $errors[2];
        }
    }

//fetch by values & [arams]
public function selectFeat($table, $values, $params)
    {
        $stmt     = $this->prepare("SELECT $values FROM `$table` WHERE $params");
        $stmt->execute();
        return $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

// fetch with params
    public function select($table, $params)
    {
        $stmt     = $this->prepare("SELECT * FROM `$table` WHERE $params");
        $stmt->execute();
        return $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

// fetch without params
    public function selectAll($table)
    {
        $stmt     = $this->prepare("SELECT * FROM `$table`");
        $stmt->execute();
        return $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // delete
    public function delete($table, $params)
    {
        $stmt = $this->prepare("DELETE FROM `$table` WHERE $params");
        if ($stmt->execute()) {
            return "successful";
        }else{
            return "failed";
        }
    }

    // joins
    public function join($table1, $table2, $join1, $join2, $params){
        $stmt     = $this->prepare("SELECT `$params` FROM `$table1` INNER JOIN `$table2` ON `$join1` = `$join2`");
        $stmt->execute();
        return $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}