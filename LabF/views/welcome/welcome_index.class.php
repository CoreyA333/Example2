<?php
/*
 * Author: Corey Anderson and Ian Hays
 * Date: April 6, 2018
 * Name: index.class.php
 * Description: This class defines the method display, then displays the home page
 */

class WelcomeIndex extends IndexView {

    public function display() {
        //display page header
        parent::displayHeader("CI Game and Movie Library Home");
        ?>    
        <div id="main-header" > Welcome to CI Game and Movie Website!</div>
<!--        <p>Here we like to focus on two things, Games and Movies. If you are not interested in either one of those things, you are on the wrong website my friend. </p>-->
        <br>
        <table style="border: none; width: 600px; margin: 5px auto">
            <tr>

        </table>

        <br>

        <div id="thumbnails" style="text-align: center; border: none">
            <p>Click an image below to explore a library. Click the logo in the banner to come back to this page.</p>

            <a href="<?= BASE_URL ?>/movie/index">
                <img src="<?= BASE_URL ?>/www/img/Moviebutton.png" title="Movie Library"/>
            </a>
            <a href="<?= BASE_URL ?>/game/index">
                <img src="<?= BASE_URL ?>/www/img/Gamepad.png" title="Game Library"/>
            </a>

        </div>
        <br>
<!--        <p style="text-align: center; color: red; font-weight: bold">Disclaimer</p>
        <p style="font-style: italic">Please enjoy yourself while on our website. We have a huge selection of movies and video games to choose from.</p><br>
        <p >Please email <a href="mailto:corjande@iupui.edu?Subject=Thank%20you">Corey Anderson</a> or call (317) 902-9051 for questions, comments, reporting bugs, or ideas on how we can improve our website. </p>-->

        <?php
        //display page footer
        parent::displayFooter();
    }

}
