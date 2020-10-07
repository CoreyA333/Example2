<?php
/*
 * Author: Corey Anderson and ian hays
 * Date: 4/5/2018
 * Name: game_detail.class.php
 * Description: game details
 */

class GameDetail extends GameIndexView {

    public function display($game, $confirm = "") {
        //display page header
        parent::displayHeader("Game Details");

        //retrieve movie details by calling get methods
        $id = $game->getId();
        $title = $game->getTitle();
        $publisher = $game->getPublisher();
        $release_year = new \DateTime($game->getRelease_year());
        $category = $game->getCategory();
        $platform = $game->getPlatform();
        $cover = $game->getCover();
        $description = $game->getDescription();


        if (strpos($cover, "http://") === false AND strpos($cover, "https://") === false) {
            $cover = BASE_URL . '/' . BOOK_IMG . $cover;
        }
        ?>

        <div id="main-header">Game Details</div>
        <hr>
        <!-- display movie details in a table -->
        <table id="detail">
            <tr>
                <td style="width: 150px;">
                    <img src="<?= $cover ?>" alt="<?= $title ?>" />
                </td>
                <td style="width: 150px;">
                    <p><strong>Title:</strong></p>
                    <p><strong>platform:</strong></p>
                    <p><strong>Category:</strong></p>
                    <p><strong>Release Year:</strong></p>
                    <p><strong>Publisher:</strong></p>
                    <p><strong>Description:</strong></p>
                </td>
                <td>
                    <p><?= $title ?></p>
                    <p><?= $publisher ?></p>
                    <p><?= $category ?></p>
                    <p><?= $release_year->format('Y') ?></p>
                    <p><?= $platform ?></p>
                    <p class="media-description"><?= $description ?></p>
                    <div id="confirm-message"><?= $confirm ?></div>
                </td>
            </tr>
        </table>
        <a href="<?= BASE_URL ?>/game/index">Go to game list</a>

        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}
