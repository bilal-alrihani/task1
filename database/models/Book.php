<?php
class BokkModel
{
    private $id;
    private $title;
    private $author;
    private $isbn;
    private $published_date;
    private $price;

    // setters fun
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setAuth($auth)
    {
        $this->author = $auth;
    }
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }
    public function setPublish($publish)
    {
        $this->published_date = $publish;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    // getter fun
    public function getID()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getAuth()
    {
        return $this->author;
    }
    public function getIsbn()
    {
        return $this->isbn;
    }
    public function getPublish()
    {
        return $this->published_date;
    }
    public function getPrice()
    {
        return $this->price;
    }
}
