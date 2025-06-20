<?php
class Juegos
{
    private $title;
    private $platforms;
    private $category;
    private $cover;
    private $year;
    public function __construct($title, $platforms, $category, $cover, $year)
    {
        $this->title = $title;
        $this->platforms = $platforms;
        $this->category = $category;
        $this->cover = $cover;
        $this->year = $year;
    }
    public function obtenerTitle()
    {
        return $this->title;
    }
    public function obtenerPlatform()
    {
        return $this->platforms;
    }
    public function obtenerCategory()
    {
        return $this->category;
    }
    public function obtenerCover()
    {
        return $this->cover;
    }
    public function obtenerYear()
    {
        return $this->year;
    }

}