<?php
/*
 * Author: corey anderson and ian hays
 * Date: april 6, 2018
 * File: game_edit.class.php
 * Description: the display method in the class displays game details in a form.
 *
 */
class GameAdd extends GameIndexView {

    public function display($game) {
        //display page header
        parent::displayHeader("Add Game");

        //get game categories from a session variable
        if (isset($_SESSION['game_categories'])) {
            $categories = $_SESSION['game_categories'];
        }
        
        //retrieve game details by calling get methods
        $id = $game->getId();
        $title = $game->getTitle();
        $publisher = $game->getPublisher();
        $release_year = $game->getRelease_year();
        $category = $game->getCategory();
        $platform = $game->getPlatform();
        $cover = $game->getCover();
        $description = $game->getDescription();
        ?>

        <div id="main-header">Add Game Details</div>

        <!-- display game details in a form -->
        <form class="new-media"  action='<?= BASE_URL . "/game/update/" . $id ?>' method="post" style="border: 1px solid #bbb; margin-top: 10px; padding: 10px;">
          <input type="hidden" name="id" value="<?= $id ?>">
            <p><strong>Title</strong><br>
                <input name="title" type="text" size="100" value="<?= $title ?>" required autofocus></p>
            <p><strong>Category</strong>:
                <?php
                foreach ($categories as $m_category => $m_id) {
                    $checked = ($category == $m_category ) ? "checked" : "";
                    echo "<input type='radio' name='category' value='$m_id' $checked> $m_category &nbsp;&nbsp;";
                }
                ?>
            </p>
            <p><strong>Release Year</strong>: <input name="release_year" type="date" value="<?= $release_year ?>" required=""></p>
            <p><strong>Platform</strong>: Separate platforms with commas<br>
                <input name="platform" type="text" size="40" value="<?= $platform ?>" required=""></p>
            <p><strong>Cover</strong>: url (http:// or https://) or local file including path and file extension<br>
                <input name="cover" type="text" size="100" required value="<?= $cover ?>"></p>
            <p><strong>Description</strong>:<br>
                <textarea name="description" rows="8" cols="100"><?= $description ?></textarea></p>
            <input type="submit" name="action" value="Update Game">
            <input type="button" value="Cancel" onclick='window.location.href = "<?= BASE_URL . "/game/detail/" . $id ?>"'>  
        </form>
        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}