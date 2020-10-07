<?php
/*
 * Author: Corey Anderson and Ian Hays
 * Date: April 6, 2018
 * Name: index_view.class.php
 * Description: the parent class for all view classes. The two functions display page header and footer.
 */

class IndexView {

    //this method displays the header
    static public function displayHeader($page_title) {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title> <?php echo $page_title ?> </title>
                <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                <link rel='shortcut icon' href='<?= BASE_URL ?>/www/img/HomeBanner.jpg' type='image/x-icon' />
                <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/www/css/my_style.css' />
                <script>
                    //create the JavaScript variable for the base url
                    var base_url = "<?= BASE_URL ?>";
                </script>
            </head>
            <body>
                <div id="top"></div>
                <div id='wrapper'>
                    <div id="banner">
                        <a href="<?= BASE_URL ?>/index.php" style="text-decoration: none" title="CI Game and Movie Library">
                            <div id="left">
                                <img src='<?= BASE_URL ?>/www/img/HomeBanner.jpg' style="width: 400px; border: none" />
                                
                                
                            </div>
                        </a>
                        <div id="right">
                            <span style='color: #000; font-size: 36pt; font-weight: bold; vertical-align: top'>
                              Welcome !
                              
                            </span>
                            <div style='color: #FF000; font-size: 14pt; font-weight: bold'>CI Game and Movie Library</div>
                        </div>
                    </div>
                    <?php
                }//end of displayHeader function
                
                //this method displays the page footer
                public static function displayFooter() {
                    ?>
                    <br><br><br>
                    <div id="push"></div>
                </div>
                <div id="footer"><br>&copy 2018 CI Game and Movie Library. No Rights Reserved.</div>
                <script type="text/javascript" src="<?= BASE_URL ?>/www/js/ajax_autosuggestion.js"></script>
            </body>
        </html>
        <?php
    } //end of displayFooter function
}
