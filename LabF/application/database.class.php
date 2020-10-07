<?php

/*
 * Author: corey anderson
 * Date: april 6, 2018
 * File: database,class.php
 * Description: Description: the Database class sets the database details.
 * 
 */

class Database {

    //define database parameters
    private $param = array(
        'host' => 'localhost',
        'login' => 'phpuser',
        'password' => 'phpuser',
        'database' => 'labf_db',
        'tblMovie' => 'movies',
        'tblGame' => 'games',
        'tblMovieRating' => 'movie_ratings',
        'tblGameCategory' => 'game_categories'
    );
    //define the database connection object
    private $objDBConnection = NULL;
    static private $_instance = NULL;

    //constructor
    private function __construct() {
        $this->objDBConnection = @new mysqli(
                $this->param['host'], $this->param['login'], $this->param['password'], $this->param['database']
        );
        if (mysqli_connect_errno() != 0) {
            $message = "Connecting database failed: " . mysqli_connect_error() . ".";
            include 'error.php';
            exit();
        }
    }

    //static method to ensure there is just one Database instance
    static public function getDatabase() {
        if (self::$_instance == NULL)
            self::$_instance = new Database();
        return self::$_instance;
    }

    //this function returns the database connection object
    public function getConnection() {
        return $this->objDBConnection;
    }

    //returns the name of the table that stores movies
    public function getMovieTable() {
        return $this->param['tblMovie'];
    }


    //returns the name of the table storing games
    public function getGameTable() {
        return $this->param['tblGame'];
    }

    //returns the name of the table storing movie ratings
    public function getMovieRatingTable() {
        return $this->param['tblMovieRating'];
    }

    //return the name of the table that stores game categories
    public function getGameCategoryTable() {
        return $this->param['tblGameCategory'];
    }

}
