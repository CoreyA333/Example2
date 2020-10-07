<?php
/*
 * Author: Corey Anderson and Ian Hays
 * Date: April 6, 2018
 * Name: search.class.php
 * Description: this script defines the SearchGame class. The class contains a method named display, which
 *     accepts an array of Game objects and displays them in a grid.
 */

class GameSearch extends GameIndexView {
    /*
     * the displays accepts an array of game objects and displays
     * them in a grid.
     */

     public function display($terms, $games) {
        //display page header
        parent::displayHeader("Search Results");
        ?>
        <div id="main-header"> Search Results for <i>////<?= $terms ?></i></div>
        <span class="rcd-numbers">
            <?php
            echo ((!is_array($games)) ? "( 0 - 0 )" : "( 1 - " . count($games) . " )");
            ?>
        </span>
        <hr>

       <!-- display all records in a grid -->
               <div class="grid-container">
            <?php
            if ($games === 0) {
                echo "No game was found.<br><br><br><br><br>";
            } else {
                //display games in a grid; six games per row
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

                    echo "<div class='col'><p><a href='" . BASE_URL . "/game/detail/$id'><img src='" . $cover .
                    "'></a><span>$title<br>Rated $rating<br>" . $release_year->format('m-d-Y') . "</span></p></div>";
                    ?>
                    <?php
                    if ($i % 6 == 5 || $i == count($games) - 1) {
                        echo "</div>";
                    }
                }
            }
            ?>  
        </div>
        <a href="////<?= BASE_URL ?>/game/index">Go to game list</a>
        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}