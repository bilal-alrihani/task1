<?php

require 'database/controllers/ManagSql.php';

class BookController implements Users {
    private  $p;
    public  function __construct()
    {
        $this->p=new BookRepostiry();
    }

    public function ViewBooks(){
        return $this->p->getAll();
    }
    public function AddBook($data){
        $this->p->insert($data,'books');
        return 1;
    }
    public function UpdateBook($data,$id){
        return $this->p->update($data,'books',$id);
    }
    public function DeleteBook($id){
        $this->p->delete('books',$id);
        return 1;
    }

}