<div class="col-md-9 content">
    <?php
 
    if (isset($_GET['tab']))
    {
        $tab = trim(addslashes(htmlspecialchars($_GET['tab'])));

        switch ($tab) {
            case 'profile':
                include_once('templates/profile.php');
                break;
            
            case 'posts':
                include_once ('templates/posts.php');
                break;

            case 'photos':
                include_once ('templates/photos.php');
                break;

            case 'categories':
                include_once ('templates/categories.php');
                break;    

            case 'setting':
                include_once ('templates/setting.php');
                break;     

            default:
                include_once ('templates/dashboard.php');
                break;
        }
    } else {
        include_once ('templates/dashboard.php');
    }

    ?>
</div><!-- div.content -->