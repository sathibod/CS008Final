<nav>
     <ol>
         <?php
        if ($path_parts['filename'] == "home") {
            print '<li class="activePage">Home</li>';
        } else {
             print '<li><a href="main.php">Home</a></li>';
        }
         if ($path_parts['filename'] == "gallery") {
             print '<li class="activePage">Gallery</li>';
         } else {
             print '<li><a href="gallery.php">Gallery</a></li>';
         }
         if ($path_parts['filename'] == "gameSchedule") {
             print '<li class="activePage">Game Schedule</li>';
         } else {
             print '<li><a href="gameSchedule.php">Game Schedule</a></li>';
         }
         if ($path_parts['filename'] == "Roster") {
             print '<li class="activePage">Roster</li>';
         } else {
             print '<li><a href="Roster.php">Roster</a></li>';
         }
         if ($path_parts['filename'] == "Statistics") {
             print '<li class="activePage">Statistics</li>';
         } else {
             print '<li><a href="Statistics.php">Statisitcs</a></li>';
         }
         if ($path_parts['filename'] == "form") {
             print '<li class="activePage">Form</li>';
         } else {
             print '<li><a href="form.php">Form</a></li>';
         }
        ?>
     </ol>
 </nav>