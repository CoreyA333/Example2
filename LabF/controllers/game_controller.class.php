<?php

/*
 * Author: Corey Anderson and ian hays 
 * Date: 4/5/2018
 * Name: game_controller.class.php
 * Description: game controller 
 */

class GameController {

    private $game_model;

    //default constructor
    public function __construct() {
        //create an instance of the GameModel class
        $this->game_model = GameModel::getGameModel();
    }

    //index action that displays all games
    public function index() {
        //retrieve all games and store them in an array
        $games = $this->game_model->list_game();

        if (!$games) {
            //display an error
            $message = "There was a problem displaying games.";
            $this->error($message);
            return;
        }

        // display all games
        $view = new GameIndex();
        $view->display($games);
    }

    //show details of a game
    public function detail($id) {
        //retrieve the specific game
        $game = $this->game_model->view_game($id);

        if (!$game) {
            //display an error
            $message = "There was a problem displaying the game id='" . $id . "'.";
            $this->error($message);
            return;
        }

        //display game details
        $view = new GameDetail();
        $view->display($game);
    }

    //handle an error
    public function error($message) {
        //create an object of the Error class
        $error = new GameError();

        //display the error page
        $error->display($message);
    }
//search games
    public function search() {
        //retrieve query terms from search form
        $query_terms = trim($_GET['query-terms']);

        //if search term is empty, list all games
        if ($query_terms == "") {
            $this->index();
        }

        //search the database for matching games
        $games = $this->game_model->search_game($query_terms);

        if ($games === false) {
            //handle error
            $message = "An error has occurred.";
            $this->error($message);
            return;
        }
        //display matched games
        $search = new GameSearch();
        $search->display($query_terms, $games);
    }

//autosuggestion
    public function suggest($terms) {
        //retrieve query terms
        $query_terms = urldecode(trim($terms));
        $games = $this->game_model->search_game($query_terms);

        //retrieve all game titles and store them in an array
        $titles = array();
        if ($games) {
            foreach ($games as $game) {
                $titles[] = $game->getTitle();
            }
        }

        echo json_encode($titles);
    }
}