<?php
/*
 * Author: corey anderson and ian hays
 * Date: april 6, 2018
 * Name: game.class.php
 * Description: the Game class models a real-world game.
 */

class Game {
    
    //private properties of a Game object
    private $id, $title, $publisher, $release_year, $category, $platform ,$cover, $description;
    
    //the constructor that initializes all properties
    public function __construct($title, $publisher, $release_year, $category, $platform, $cover, $description) {
        $this->title = $title;
        $this->publisher = $publisher;
        $this->release_year = $release_year;
        $this->category = $category;
        $this->platform = $platform;
        $this->cover = $cover;                
        $this->description = $description;
    }
    
    //get the id of a game
    public function getId() {
        return $this->id;
    }
	
	//get the title of a game
    public function getTitle() {
        return $this->title;
    }
    
    	//get the publisher of a game
    public function getPublisher() {
        return $this->publisher;
    }
    
    	//get the release year of a game
    public function getRelease_year() {
        return $this->release_year;
    }

	//get the category of a game
    public function getCategory() {
        return $this->category;
    }
    
    	//get the platform of a game
    public function getPlatform() {
        return $this->platform;
    }

	//get the cover file name of a game
    public function getCover() {
        return $this->cover;
    }

	//get the description of a game
    public function getDescription() {
        return $this->description;
    }

    //set game id
    public function setId($id) {
        $this->id = $id;
    }

}
