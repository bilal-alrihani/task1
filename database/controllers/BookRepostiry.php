<?php
class BookRepostiry
{
    private $pdo;
    public  function __construct()
    {
        $this->pdo = DBconnctions::dbfunc();
    }
    public  function find($id)
    {
        $quer = $this->pdo->prepare("SELECT * FROM BOOKS WHERE id={$id}");
        $quer->execute();
        return $quer->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAll()
    {
        $quer = $this->pdo->prepare('SELECT * FROM BOOKS ');
        $quer->execute();
        return $quer->fetchAll(PDO::FETCH_ASSOC);
    }
    public function insert($data, $table)
    {
        $columns = array_keys($data);
        $keys = implode(',', $columns);
        $vals = str_repeat('?', count($columns) - 1) . '?';
        $quer = $this->pdo->prepare("INSERT INTO {$table} ({$keys}) VALUES ({$vals})");
        $quer->execute(array_values($data));
        return 1;
    }
    public function update($data, $table, $id)
    {
        $columns = array_keys($data);
        $values = array_values($data);
        $arrfinal = implode('=?,', $columns) . '=?';
        $quer = $this->pdo->prepare("UPDATE {$table} SET  {$arrfinal} WHERE id={$id}");
        $quer->execute(array_values($data));
        return 1;
    }
    public function delete($table, $id, $col = 'id')
    {
        $qu = "DELETE FROM {$table} WHERE {$col}={$id}";
        $sta = $this->pdo->prepare($qu);
        $sta->execute();
        return 1;
    }
}

