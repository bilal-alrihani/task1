<?php
interface Users
{
    public function ViewBooks();
    public function AddBook($data);
    public function UpdateBook($data,$id);
    public function DeleteBook($id);
}