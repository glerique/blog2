<?php

namespace models;

use Src\Entity\Entity;

class Post extends Entity
{

    private $id;
    private $title;
    private $standfirst;
    private $content;
    private $author;
    private $creationDate;
    private $updateDate;
    private $published;
    private $userId;


    //GETTERS    
    
    public function getTitle()
    {
        return $this->title;
    }

    public function getStandfirst()
    {
        return $this->standfirst;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function getupdateDate()
    {
        return $this->updateDate;
    }

    public function getPublished()
    {
        return $this->published;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    //SETTERS

        public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setStandfirst($standfirst)
    {
        $this->standfirst = $standfirst;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    public function setupdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
    }

    public function setPublished($published)
    {
        $this->published = $published;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
}