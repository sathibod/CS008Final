<!DOCTYPE html>
<html lang="en">
<head>
<title>Forms</title>
<meta charset="utf-8">
<meta name="author" content="Sierra Thibodeau, Emile Rivat, Cody Pettibone">
<meta name="description" content="Form Page of Final Project">

	
<link rel="stylesheet"
	  href="style5.css"
      media="screen">

</head>
<body id="form">
        <div id="errors">
                
    </div>
    <header>
	<h1>Forms</h1>        
</header>    <nav>
     <ol>
     	<li><a href="main.php">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="gameSchedule.php">Game Schedule</a></li>
        <li><a href="Roster.php">Roster</a></li>
        <li><a href="Statistics.php">Statistics</a></li>
     	<li><a href="form.php">Form</a></li>	
     </ol>
</nav>   

<form action="/~erivat/cs008/finalProject/form1.php" method="post" id="frmRegister" enctype="multipart/form-data">

<fieldset>               
   <label for="txtFname" class="required">Enter Your Full Name</label>
    <input type="text" id="txtFname" name="txtFname" value="" 
            tabindex="100" maxlength="25" required placeholder="enter full name" 
                                autofocus onfocus="this.select()">
</fieldset>
<br />
    
    <fieldset>               
   <label for="txtEmail" class="required">Please Enter Your E-mail Address</label>
   <input type="email" required id="txtEmail" name="txtEmail" value="" tabindex="261" placeholder="E-mail Address"
            size="25" maxlength="45"  onfocus="this.select()" />
</fieldset>
<br />
<fieldset class="radio">
   <legend>Please Select Your Gender:</legend>
   <label><input type="radio" id="Male" name="Gender" value="Male" 
                   tabindex="231" checked="checked" />Male</label>
   <label><input type="radio" id="Female" name="Gender" value="Female" 
                   tabindex="233" />Female</label>
</fieldset>
<br />
<fieldset class="radio">
   <legend>Have You Been To A Red Sox Game?</legend>
   <label><input type="radio" id="enjoysBaseball" name="baseball" value="yes" 
                   tabindex="231" checked="checked" />Yes</label>
   <label><input type="radio" id="hatesBaseball" name="baseball" value="no" 
                   tabindex="233" />No</label>
      <label><input type="radio" id="baseballNeutral" name="baseball" value="IDK" 
                   tabindex="233" />I Can't Remember</label>
</fieldset>
<br />

<fieldset>   
   <label for="baseballPlayers" class="required">Favorite Red Sox Player</label>
   <br />
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
    <br />

    <fieldset class="checkbox">
   <legend> Favorite Baseball Position(s)(Select All That Apply):</legend>
<label><input type="checkbox" id="sPitch" name="spitch" value="spitcher" 
                   tabindex="225" /> Starting Pitcher (SP)</label>
   <br />
   <label><input type="checkbox" id="rPitch" name="rpitch" value="rpitcher"
                   tabindex="225" /> Relief Pitcher (RP)</label>
   <br />
   <label><input type="checkbox" id="Closer" name="closer" value="cpitcher"
                   tabindex="225" /> Closer (RP)</label>
   <br />
   <label><input type="checkbox" id="firstBase" name="firstbase" value="First"
                   tabindex="225" /> 1st Base</label>
   <br />
   <label><input type="checkbox" id="secondBase" name="secondbase" value="second"
                   tabindex="225" /> 2nd Base</label>
    <br />
   <label><input type="checkbox" id="thirdBase" name="thirdbase" value="third"
                   tabindex="225" /> 3rd Base</label>
        <br />
   <label><input type="checkbox" id="shortStop" name="shortstop" value="SS"
                   tabindex="225" /> Short Stop (SS)</label>
        <br />
   <label><input type="checkbox" id="Catcher" name="catcher" value="Catcher"
                   tabindex="225" /> Catcher (C)</label>
            <br />
   <label><input type="checkbox" id="Outfielder" name="outfielder" value="OF"
                   tabindex="225" /> Outfield (OF)</label>
                <br />
   <label><input type="checkbox" id="designatedHitter" name="designatedhitter" value="DH"
                   tabindex="225" /> Designated Hitter (DH)</label>
</fieldset>
    
<br />
<fieldset class="checkbox">
   <legend>What Other Sports Do You Like(play or watch)? (Select all in preference):</legend>

   <label><input type="checkbox" id="basketball" name="basketball" value="basketball"
                   tabindex="225" /> Basketball</label>
   <br />
   <label><input type="checkbox" id="cricket" name="cricket" value="cricket"
                   tabindex="225" /> Cricket</label>
   <br />
   <label><input type="checkbox" id="football" name="football" value="football"
                   tabindex="225" /> Football</label>
   <br />
   <label><input type="checkbox" id="hockey" name="Hockey" value="Hockey"
                   tabindex="225" /> Hockey</label>
    <br />
   <label><input type="checkbox" id="rowing" name="row" value="row"
                   tabindex="225" /> Rowing</label>
    <br />
   <label><input type="checkbox" id="swimming" name="swim" value="swim"
                   tabindex="225" /> Swimming</label>
    <br />
   <label><input type="checkbox" id="futbol" name="futbol" value="futbol"
                   tabindex="225" /> Soccer (futbol)</label>
    <br />
   <label><input type="checkbox" id="Tennis" name="Tennis" value="Tennis"
                   tabindex="225" /> Tennis</label>
</fieldset>
<br />

    <fieldset>               
   <input type="submit" id="Submit" name="Submit" value="Submit" 
            tabindex="1000" class="button"/>
</fieldset>
    <br />
    <fieldset>
   <input type="reset" id="Reset" name="Reset" value="Reset The Form" 
            tabindex="1000" class="reset" />
</fieldset> 
</form>  
<br>
<p>* = required</p>
<footer>
	<p>Sierra Thibodeau, Emile Rivat, Cody Pettibone</p>
</footer>
</body>
</html>
