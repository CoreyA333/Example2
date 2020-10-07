<?php
/*
 * Author: corey anderson and ian hays
 * Date: april 6, 2018
 * Name: game_index_view.class.php
 * Description: the parent class that displays a search box. The search form is commented out here since the search feature is not implemented. 
 */

class GameIndexView extends IndexView {

    public static function displayHeader($title) {
        parent::displayHeader($title)
        ?>
        <script>
            //the media type
            var media = "game";
        </script>
        <!--create the search bar -->
        
        <div id="searchbar">
            <form method="get" action="<?= BASE_URL ?>/game/search">
                <input type="text" name="query-terms" id="searchtextbox" placeholder="Search games by title" autocomplete="off">
                <input type="submit" value="Go"/>
            </form>
            <div id="suggestionDiv"></div>
        </div> 
        <?php
    }

    public static function displayFooter() {
        parent::displayFooter();
    }
}