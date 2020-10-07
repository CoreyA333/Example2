<?php

/*
 * Author: Corey Anderson and ian hays
 * Date: 4/5/2018
 * Name: game_index.class.php
 * Description: game index page
 */


class GameIndex extends GameIndexView {
    /*
     * the display method accepts an array of game objects and displays
     * them in a grid.
     */

    public function display($games) {
        //display page header
        parent::displayHeader("List All Games");
        ?>
        <div id="main-header"> Games in the Library</div>

        <div class="grid-container">
            
            <?php
                    //print_r($games);
            ?>
            <?php
            if ($games === 0) {
                echo "No game was found.<br><br><br><br><br>";
            } else {
                //display games in a grid
                foreach ($games as $i => $game) {
                    $id = $game->getId();
                    $title = $game->getTitle();
                    $publisher = $game->getPublisher();
                    //$release_year = new \DateTime($game->getRelease_year());
                    $category = $game->getCategory();
                    $platform = $game->getPlatform();                               
                    $cover = $game->getCover();
                    if (strpos($cover, "http://") === false AND strpos($cover, "https://") === false) {
                        $cover = BASE_URL . "/" . GAME_IMG . $cover;
                    }
                    if ($i % 6 == 0) {
                        echo "<div class='row'>";
                    }

                    echo "<div class='col'><p><a href='", BASE_URL, "/game/detail/$id'><img src='" . $cover .
                    "'></a><span>$title<br>$category<br>" . "</span></p></div>";
                    ?>
                    <?php
                    if ($i % 6 == 5 || $i == count($games) - 1) {
                        echo "</div>";
                    }
                }
            }
            
            //$release_year->format('m-d-Y')
            ?>  
        </div>
       
        <?php
        //display page footer
        parent::displayFooter();
    } //end of display method
}
