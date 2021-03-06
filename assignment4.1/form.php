<?php
include ("top.php");

$debug = false;

if (isset($_GET["debug"])) {
    $debug = true;
}

if ($debug)
    print "<p>DEBUG MODE IS ON</p>";
//default
$fullName = "Sierra Thibodeau";
$email = "sathibod@uvm.edu";
$gender = "Female";
$redSoxGame = "Yes";
$redSoxPlayer = "Mike Napoli";
$startingPitcher = true;
$reliefPitcher = false;
$closer = false;
$firstBase = false;
$secondBase = false;
$thirdBaser = false;
$shortStop = false;
$catcher = false;
$outfielder = false;
$desginatedHitter = false;
$basketball = true;
$cricket = false;
$football = true;
$hockey = false;
$rowing = false;
$swimming = false;
$futbol = false;
$tennis = true;

$yourURL = "https://www.uvm.edu/~sathibod/cs008/assignment4.1/form.php";

//errors
$fullNameERROR = false;
$emailERROR = false;
$genderERROR = false;
$redSoxGameERROR = false;
$redSoxPlayerERROR = false;
$startingPitcherERROR = false;
$reliefPitcherERROR = false;
$closerERROR = false;
$firstBaseERROR = false;
$secondBaseERROR = false;
$thirdBaserERROR = false;
$shortStopERROR = false;
$catcherERROR = false;
$outfielderERROR = false;
$desginatedHitterERROR = false;
$basketballERROR = false;
$cricketERROR = false;
$footballERROR = false;
$hockeyERROR = false;
$rowingERROR = false;
$swimmingERROR = false;
$futbolERROR = false;
$tennisERROR = false;

if (isset($_POST["btnSubmit"])) {

//******************************************************************
// is the refeering web page the one we want or is someone trying 
// to hack in. this is not 100% reliable but ok for our purposes   */
//
    // Security check block one, no changes needed
//check for errors
    include ("validation_functions.php"); // you need to create this file (see link in lecture notes)
    $errorMsg = array();

    $dataRecord = array();
//************************************************************
// we need to make sure there is no malicious code so we do 
// this for each element we pass in. Be sure your names match
// your objects
// 
// Security check block two
// 
// What this does is take things like <script> and replace it
// with &lt;script&gt; so that hackers cannot send malicous 
// code to you.
//   
//  
// */

    $fullName = htmlentities($_POST["txtFname"], ENT_QUOTES, "UTF-8");
    $email = htmlentities($_POST["txtEmail"], ENT_QUOTES, "UTF-8");

    if (isset($_POST["chkBasketball"])) {
        $basketball = true;
    } else {
        $basketball = false;
    }

    if (isset($_POST["chkCricket"])) {
        $cricket = true;
    } else {
        $cricket = false;
    }
    if (isset($_POST["chkFootball"])) {
        $football = true;
    } else {
        $football = false;
    }
    if (isset($_POST["chkHockey"])) {
        $hockey = true;
    } else {
        $hockey = false;
    }
    if (isset($_POST["chkRowing"])) {
        $rowing = true;
    } else {
        $rowing = false;
    }
    if (isset($_POST["chkSwimming"])) {
        $swimming = true;
    } else {
        $swimming = false;
    }
    if (isset($_POST["chkFutbol"])) {
        $futbol = true;
    } else {
        $futbol = false;
    }
    if (isset($_POST["chkTennis"])) {
        $tennis = true;
    } else {
        $tennis = false;
    }

    if (isset($_POST["chkStartingPitcher"])) {
        $startingPitcher = true;
    } else {
        $startingPitcher = false;
    }

    if (isset($_POST["chkReliefPitcher"])) {
        $reliefPitcher = true;
    } else {
        $reliefPitcher = false;
    }
    if (isset($_POST["chkCloser"])) {
        $closer = true;
    } else {
        $closer = false;
    }

    if (isset($_POST["chkFirstBase"])) {
        $firstBase = true;
    } else {
        $firstBase = false;
    }
    if (isset($_POST["chkSecondBase"])) {
        $secondBase = true;
    } else {
        $secondBase = false;
    }

    if (isset($_POST["chkThirdBase"])) {
        $thirdBase = true;
    } else {
        $thirdBase = false;
    }
    if (isset($_POST["chkShortStop"])) {
        $shortStop = true;
    } else {
        $shortStop = false;
    }

    if (isset($_POST["chkCatcher"])) {
        $catcher = true;
    } else {
        $catcher = false;
    }
    if (isset($_POST["chkOutfield"])) {
        $outfielder = true;
    } else {
        $outfielder = false;
    }

    if (isset($_POST["chkDesignatedHitter"])) {
        $designatedHitter = true;
    } else {
        $designatedHitter = false;
    }
    $gender = htmlentities($_POST["Gender"], ENT_QUOTES, "UTF-8");
    $redSoxGame= htmlentities($_POST["baseball"], ENT_QUOTES, "UTF-8");

    //testing for correct format and adding to array
    if ($fullName == "") {
        $errorMsg[] = "Please enter your full name";
        $fullNameERROR = true;
    } elseif (!preg_match('/^[a-zA-Z\s]+$/', $fullName)) {
        $errorMsg[] = "Your name appears to be incorrect.";
        $fullNameERROR = true;
    }
    $dataRecord[] = $fullName;

    if ($email == "") {
        $errorMsg[] = "Please enter your email address";
        $emailERROR = true;
    } elseif (!verifyEmail) {
        $errorMsg[] = "Your email address appears to be incorrect.";
        $emailERROR = true;
    }
    $dataRecord[] = $email;

    //add data to array
    $dataRecord[] = $gender;
    $dataRecord[] = $redSoxGamer;
    $dataRecord[] = $redSoxPlayer;
    $dataRecord[] = $startingPitcher;
    $dataRecord[] = $reliefPitcher;
    $dataRecord[] = $closer;
    $dataRecord[] = $firstBase;
    $dataRecord[] = $secondBase;
    $dataRecord[] = $thirdBase;
    $dataRecord[] = $shortStop;
    $dataRecord[] = $catcher;
    $dataRecord[] = $outfielder;
    $dataRecord[] = $designatedHitter;
    $dataRecord[] = $basketball;
    $dataRecord[] = $cricket;
    $dataRecord[] = $football;
    $dataRecord[] = $hockey;
    $dataRecord[] = $rowing;
    $dataRecord[] = $swimming;
    $dataRecord[] = $futbol;
    $dataRecord[] = $tennis;



    // our form data is valid at this point so we can process the data
    if (!$errorMsg) {
        if ($debug)
            print "<p>Form is valid</p>";
//########################################################
        // Begin processing data
        //########################################################
        // Save Forms data to a csv file on the cloud
        // NOTE: When you save the forms information to a file, the file 
        // permissions can cause problems
        //NOTE: my file is in a folder called data
        // Step one in netbeans create new file, name it formData.csv
        // Step two delete the contents of this csv file and save it
        // Step three use fugu or winscp to set the permissions on this
        //            file to 666 (rw-  for everyone)
        // Now try your form and see if it saves.

        $fileExt = ".csv";

        $myFileName = "registration";

        $filename = $myFileName . $fileExt;

        if ($debug)
            print "\n\n<p>filename is " . $filename;

        // now we just open the file for append
        $file = fopen($filename, 'a');

        // write the forms informations
        fputcsv($file, $dataRecord);

        // close the file
        fclose($file);

        //####################################################################
        $message = '<h2>Your information.</h2>';

        foreach ($_POST as $key => $value) {

            $message .= "<p>";

            $camelCase = preg_split('/(?=[A-Z])/', substr($key, 3));

            foreach ($camelCase as $one) {
                $message .= $one . " ";
            }
            $message .= " = " . htmlentities($value, ENT_QUOTES, "UTF-8") . "</p>";
        }
        include_once('mailMessage.php');
        $mailed = sendMail($email, $message);
    } // ends if form was submitted. We will be adding more information ABOVE this
}
?>


<?php
//*****************************************************************************
//
//  In this block  display the information that was submitted and do not 
//  display the form.
//  
//  NO CHANGES NEEDED
//
if (isset($_POST["btnSubmit"]) AND empty($errorMsg)) {  // closing of if marked with: end body submit
    print "<h1>Your Request has ";

    if (!$mailed) {
        echo "not ";
    }

    echo "been processed</h1>";

    print "<p>A copy of this message has ";
    if (!$mailed) {
        echo "not ";
    }
    print "been sent</p>";
    print "<p>To: " . $email . "</p>";
    print "<p>Mail Message:</p>";
    echo $message;
} else {
    print '<div id="errors">';

    if ($errorMsg) {
        echo "<ol>\n";
        foreach ($errorMsg as $err) {
            echo "<li>" . $err . "</li>\n";
        }
        echo "</ol>\n";
    }

    print '</div>';
    ?>
    <section id ="form">
        <form action="<? print $_SERVER['PHP_SELF']; ?>" 
              method="post" 
              id="frmRegister">
            <fieldset class ="wrapper">
                <legend>Register Today!</legend>
                <p>please fill out the following survey</p>

            <fieldset class = "name">               
                <label for="txtFname" class="required">Enter Your Full Name</label>
                <input type="text" id="txtFname" name="txtFname" value="" 
                       tabindex="100" maxlength="25" required placeholder="enter full name" 
                       autofocus onfocus="this.select()">
            </fieldset>

            <fieldset class = "email">               
                <label for="txtEmail" class="required">Please Enter Your E-mail Address</label>
                <input type="email" required id="txtEmail" name="txtEmail" value="" tabindex="261" placeholder="E-mail Address"
                       size="25" maxlength="45"  onfocus="this.select()">
            </fieldset>
            <fieldset class="radio">
                <legend>Please Select Your Gender:</legend>
                <label><input type="radio" id="Male" name="Gender" value="Male" 
                              tabindex="231" checked="checked">Male</label>
                <label><input type="radio" id="Female" name="Gender" value="Female" 
                              tabindex="233">Female</label>
            </fieldset>
            <fieldset class="radio">
                <legend>Have You Been To A Red Sox Game?</legend>
                <label><input type="radio" id="enjoysBaseball" name="baseball" value="yes" 
                              tabindex="231" checked="checked">Yes</label>
                <label><input type="radio" id="hatesBaseball" name="baseball" value="no" 
                              tabindex="233">No</label>
                <label><input type="radio" id="baseballNeutral" name="baseball" value="IDK" 
                              tabindex="233">I Can't Remember</label>
            </fieldset>

            <fieldset class = "lists">   
                <legend>Favorite Red Sox Player</legend>
                <select id="baseballPlayers" name="baseballPlayers" tabindex="300" size="10">
                    <option value="player1"  selected="selected" >Mike Napoli</option>
                    <option value="player2" >A.J. Pierzynski</option>
                    <option value="player3" >Dustin Pedroia</option>
                    <option value="player4" >Shane Victorino</option>
                    <option value="player5" >Will Middlebrooks</option>
                    <option value="player6" >David Ortiz</option>
                    <option value="player7" >Junichi Tazawa</option>
                    <option value="player8" >Jon Lester</option>
                    <option value="player9" >John Lackey</option>
                    <option value="player10" >Felix Doubront</option>
                    <option value="player11" >Clay Buchholz</option>
                    <option value="player12" >Mike Carp</option>
                    <option value="player13" >Jonny Gomes</option>
                    <option value="player14" >Grady Sizemore</option>
                </select>
            </fieldset>


            <fieldset class="checkbox">
                <legend> Favorite Baseball Position(s)(Select All That Apply):</legend>
                <label><input type="checkbox" id="chStartingPitcher" name="chkStartingPitcher" value="spitcher" 
                              tabindex="225"> Starting Pitcher (SP)</label>

                <label><input type="checkbox" id="chkReliefPitcher" name="chkReliefPitcher" value="rpitcher"
                              tabindex="225"> Relief Pitcher (RP)</label>

                <label><input type="checkbox" id="chkCloser" name="chkCloser" value="cpitcher"
                              tabindex="225"> Closer (RP)</label>

                <label><input type="checkbox" id="chkFirstBase" name="chkFirstBase" value="First"
                              tabindex="225"> 1st Base</label>

                <label><input type="checkbox" id="chkSecondBase" name="chkSecondBase" value="second"
                              tabindex="225"> 2nd Base</label>

                <label><input type="checkbox" id="chkThirdBase" name="chkThirdBase" value="third"
                              tabindex="225"> 3rd Base</label>

                <label><input type="checkbox" id="chkShortStop" name="chkShortStop" value="SS"
                              tabindex="225"> Short Stop (SS)</label>

                <label><input type="checkbox" id="chkCatcher" name="chkCatcher" value="Catcher"
                              tabindex="225"> Catcher (C)</label>

                <label><input type="checkbox" id="chkOutfielder" name="chkOutfielder" value="OF"
                              tabindex="225"> Outfield (OF)</label>

                <label><input type="checkbox" id="chkDesignatedHitter" name="chkDesignatedHitter" value="DH"
                              tabindex="225"> Designated Hitter (DH)</label>
            </fieldset>


            <fieldset class="checkbox">
                <legend>What Other Sports Do You Like(play or watch)? (Select all in preference):</legend>

                <label><input type="checkbox" id="chkBasketball" name="chkBasketball" value="basketball"
                              tabindex="225"> Basketball</label>

                <label><input type="checkbox" id="chkCricket" name="chkCricket" value="cricket"
                              tabindex="225"> Cricket</label>

                <label><input type="checkbox" id="chkFootball" name="chkFootball" value="football"
                              tabindex="225"> Football</label>

                <label><input type="checkbox" id="chkHockey" name="chkHockey" value="Hockey"
                              tabindex="225"> Hockey</label>

                <label><input type="checkbox" id="chkRowing" name="chkRowing" value="row"
                              tabindex="225"> Rowing</label>

                <label><input type="checkbox" id="chkSwimming" name="chkSwimming" value="swim"
                              tabindex="225"> Swimming</label>

                <label><input type="checkbox" id="chkFutbol" name="chkFutbol" value="futbol"
                              tabindex="225"> Soccer (Futbol)</label>

                <label><input type="checkbox" id="chkTennis" name="chkTennis" value="Tennis"
                              tabindex="225"> Tennis</label>
            </fieldset>


            <fieldset>               
                <input type="submit" id="btnSubmit" name="Submit" value="Submit" 
                       tabindex="1000" class="button">
            </fieldset>

            <fieldset>
                <input type="reset" id="btnReset" name="Reset" value="Reset The Form" 
                       tabindex="1000" class="button">
            </fieldset> 
            </fieldset>
        </form>  
    </section>

    
<br>
<?php
/* Sample code to open a plain text file and put the data into an array */

$debug = false;

if(isset($_GET["debug"])){
    $debug = true;
}

/* Data from: http://www.joespondvermont.com/iceout.php
 * the data file needs to be in plain text comma seperated, Mac users
 * sometimes have trouble creating these files
 * the file looks something like this:

Date, Time
1988-04-26, 12:31
1989-05-05, 9:05

*/

$fileExt=".csv";

$myFileName="registration";

$filename = $myFileName . $fileExt;

if ($debug) print "\n\n<p>filename is " . $filename;
/* have the file in the same folder as this file
 * be sure permissions are set properly
 * if it does work then it is the end of line mark in your csv file
 * check your code with my joe pond sample and see if it works
 * 
 */

$file=fopen($filename, "r");


/* the variable $file will be empty or false if the file does not open */
if($file){
    if($debug) print "<p>File Opened. Begin reading data into an array.</p>\n";

    /* This reads the first row which in our case is the column headers */
    $headers=fgetcsv($file);
    
    /* the while loop keeps exectuing until we reach the end of the file at
     * which point it stops. the resulting variable $records is an array with
     * all our data.
     */
    while(!feof($file)){
        $records[]=fgetcsv($file);
    }
    
    //closes the file
    fclose($file);
    if($debug) {
        print "<p>Finished reading. File closed.</p>\n";
        print "<p>Contents of my array<p><pre> "; print_r($records); print "</pre></p>";
    }
} else {
    if($debug) print "<p>File Opened Failed.</p>\n";
}
?>
<aside id="chart">
<table>

<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Been to a Red Sox Game</th>
    <th>Favorite Player</th>
    <th>Favorite Position</th>
    <th>Other Sports</th>
</tr>
<?php foreach ($records as $oneRecord):?> 
<tr>
     <td><?php echo $oneRecord[0] ?></td>
     <td><?php echo $oneRecord[1] ?></td>
     <td><?php echo $oneRecord[2] ?></td>
     <td><?php echo $oneRecord[3] ?></td>
     <td><?php echo $oneRecord[4] ?></td>
     <td><?php echo $oneRecord[5] ?></td>
     <td><?php echo $oneRecord[6] ?></td>
</tr>
<?php endforeach; ?>

</table>
    </aside>
<?php include ("footer.php"); ?>
    <?php
} // end body submit NO CHANGE NEEDED
if ($debug)
    print "<p>END OF PROCESSING</p>";
?>
</body>

</html>