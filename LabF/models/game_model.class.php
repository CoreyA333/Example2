<?php

/*
 * Author: Corey Anderson and ian hays  
 * Date: 4/5/2018
 * Name: game_model.class.php
 * Description: game model 
 */

class GameModel {

    //private data members
    private $db;
    private $dbConnection;
    static private $_instance = NULL;
    private $tblGame;
    private $tblGameCategory;

    //private constructor 
    private function __construct() {
        $this->db = Database::getDatabase();
        $this->dbConnection = $this->db->getConnection();
        $this->tblGame = $this->db->getGameTable();
        $this->tblGameCategory = $this->db->getGameCategoryTable();

        // This stops SQL inject in POST vars. 
        foreach ($_POST as $key => $value) {
            $_POST[$key] = $this->dbConnection->real_escape_string($value);
        }

        //This stops SQL Injection in GET vars 
        foreach ($_GET as $key => $value) {
            $_GET[$key] = $this->dbConnection->real_escape_string($value);
        }

        //pull game categories
        if (!isset($_SESSION['game_categories'])) {
            $categories = $this->get_game_categories();
            $_SESSION['game_categories'] = $categories;
        }
    }

    //static method to ensure there is just one GameModel 
    public static function getGameModel() {
        if (self::$_instance == NULL) {
            self::$_instance = new GameModel();
        }
        return self::$_instance;
    }

    public function list_game() {
        $sql = "SELECT * FROM " . $this->tblGame . "," . $this->tblGameCategory .
                " WHERE " . $this->tblGame . ".category=" . $this->tblGameCategory . ".category_id";

        echo $sql;

        //execute the query
        $query = $this->dbConnection->query($sql);

        // if the query failed, return false. 
        if (!$query)
            return false;

        //if the query succeeded, but no game was found.
        if ($query->num_rows == 0)
            return 0;

        //create an array to store all games
        $games = array();

        //loop through all rows in the returned recordsets
        while ($obj = $query->fetch_object()) {
            $game = new Game(stripslashes($obj->title), stripslashes($obj->publisher), stripslashes($obj->release_year), stripslashes($obj->category), stripslashes($obj->platform), stripslashes($obj->cover), stripslashes($obj->description));

            //set the id for the game
            $game->setId($obj->id);

            //add the game into the array
            $games[] = $game;
        }
        return $games;
    }

    public function view_game($id) {
        //the select ssql statement
        $sql = "SELECT * FROM " . $this->tblGame . "," . $this->tblGameCategory .
                " WHERE " . $this->tblGame . ".category=" . $this->tblGameCategory . ".category_id" .
                " AND " . $this->tblGame . ".id='$id'";

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            $obj = $query->fetch_object();

            //create a game instance
            $game = new Game(($obj->title), stripslashes($obj->publisher), stripslashes($obj->release_year), stripslashes($obj->category), stripslashes($obj->platform), stripslashes($obj->cover), stripslashes($obj->description));

            //set the id for the game
            $game->setId($obj->id);

            return $game;
        }

        return false;
    }

//get all game ratings from the database
    private function get_game_categories() {
        $sql = "SELECT * FROM " . $this->tblGameCategory;

        //execute the query
        $query = $this->dbConnection->query($sql);

        if (!$query) {
            return false;
        }

        //loop through all rows
        $categories = array();
        while ($obj = $query->fetch_object()) {
            $categories[$obj->category] = $obj->category_id;
        }
        return $categories;
    }


 //search the database for games that match words in titles. Return an array of games if succeed; false otherwise.
    public function search_game($terms) {
        $terms = explode(" ", $terms); //explode multiple terms into an array
        //select statement for AND serach
        $sql = "SELECT * FROM " . $this->tblGame;

        foreach ($terms as $term) {
            $sql .= " WHERE title LIKE '%" . $term . "%'";
        }

        $sql .= ")";

        //execute the query
        $query = $this->dbConnection->query($sql);

        // the search failed, return false. 
        if (!$query)
            return false;

        //search succeeded, but no game was found.
        if ($query->num_rows == 0)
            return 0;

        //search succeeded, and found at least 1 game found.
        //create an array to store all the returned games
        $games = array();

        //loop through all rows in the returned recordsets
        while ($obj = $query->fetch_object()) {
             $game = new Game(($obj->title), stripslashes($obj->publisher), stripslashes($obj->release_year), stripslashes($obj->category), stripslashes($obj->platform), stripslashes($obj->cover), stripslashes($obj->description));
            

            //set the id for the game
            $game->setId($obj->id);

            //add the game into the array
            $games[] = $game;
        }
        return $games;
    }
}



