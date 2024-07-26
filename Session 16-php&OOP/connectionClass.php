<?php class db {
    private $connection;
    public function __construct()
    {
        $this->connection = new mysqli('localhost', 'root', '', 'php_iti');
    }
    public function select($table,$condition=1)
    {
        $sql = "SELECT * FROM $table WHERE $condition";
        $result = $this->connection->prepare($sql);
        $result->execute();
        return $result->get_result();
    }
    public function insert($table,$data)
    {
        $keys=array_keys($data);
        $values=array_values($data);
        $keys=implode(",",$keys);
        $values="'".implode("','",$values)."'";
        $sql = "INSERT INTO $table ($keys) VALUES ($values)";
        $result = $this->connection->prepare($sql);
        $result->execute();
        return $result->get_result();
    }
    public function delete($table,$condition)
    {
        $sql = "DELETE FROM $table WHERE $condition";
        $result = $this->connection->prepare($sql);
        $result->execute();
        return $result->get_result();
    }
    public function update($table,$data,$condition)
    {
        foreach($data as $key => $value){
            $data[$key]="$key='$value'";
        }
        $data=implode(",",$data);
        $sql = "UPDATE $table SET $data  WHERE $condition";
        var_dump($sql);
        $result = $this->connection->prepare($sql);
        $result->execute();
        return $result->get_result();
    }
}
?>