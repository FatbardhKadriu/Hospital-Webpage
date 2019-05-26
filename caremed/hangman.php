<?php 

	session_start(); // Start the browser session, so it can save what letters you choose every time
	
	// Set of words that the game randomly chooses for you to guess
	$words = array("shkolla","fakullteti","librat","lapsi");
	
	// These are the variables that need to be saved the entire session
	$word = (!isset($_SESSION['word'])) ? $words[rand(0, count($words))] : $_SESSION['word'];
	$hangman = (!isset($_SESSION['hangman'])) ? 0 : $_SESSION['hangman'];
	$guessLength = (!isset($_SESSION['guessLength'])) ? 0 : $_SESSION['guessLength'];
	$alreadyGuessed = (!isset($_SESSION['alreadyGuessed'])) ? array() : $_SESSION['alreadyGuessed'];
	$message="you lost";
    $isGuessed="";
	$hangmanImage = array('&nbsp;&nbsp;O<br />', '--', '|', '--<br />', '&nbsp;&nbsp;/', '\\<br />');
	
 	if (!isset($_SESSION['display'])){
		$display = array();
		
		while (count($display) < strlen($word)) {
			$display[] = '_';
		}
	} else { 
		$display = $_SESSION['display'];
	}

	if ($guessLength < strlen($word) && $hangman < 6) { // If the game's still going...
		$message = "The game's not over yet...";
		$match = false;
		$guess = isset($_POST['guess']) ? $_POST['guess'][0] : '';

		$positions = array();
		
		// Makes sure the letter isn't one you already guessed
		if (in_array(strtolower($guess), $alreadyGuessed)) {
			$message = "You already guessed '" . $guess . "'!";
			$isGuessed = true;
		}
		
		if (!$isGuessed && $guess != null) {
			$alreadyGuessed[] = strtolower($guess);
		
			for ($j = 0; $j < strlen($word); $j++) { // For every letter in the word to be guessed...
				if (strcasecmp(substr($word, $j, 1), $guess) == 0) { // ...see if the guess is the same as that letter...
					$match = true; // ...and if it is, then it's a match!
					$positions[] = $j; // And you want to save what position the correct letter is in.
				}
			}
			if ($match == true) { // So if it's a match...
				foreach ($positions as $k => $position) { // ...for every saved position...
					if (strcmp($display[$position], '_') == 0) { // ...if it's a blank position, then fill it in with the right letter
						$display[$position] = $guess;
						$guessLength++;	
						if ($guessLength == strlen($word)) {
							$message = "Game over, you win!";
						}
					}
				}
			} else {
				$hangman++; // But if it isn't a match, your hangman gets another limb.
				if ($hangman == 6) {
					$message = "You lost, game over.";
				}
			}
		}
	}
	
	// Saves the variables throughout the session
	$_SESSION['word'] = $word;
	$_SESSION['display'] = $display;
	$_SESSION['hangman'] = $hangman;
	$_SESSION['guessLength'] = $guessLength;
	$_SESSION['alreadyGuessed'] = $alreadyGuessed;

	// Now you're just printing things out to display on the browser
	echo $hangman . ' bad guesses.<br />';

	foreach ($display as $l => $letter) {
		echo $letter . ' ';
	}

	echo '<br />' . $message . '<br />'; 
	echo 'You have already guessed: ' . implode(', ', $alreadyGuessed);

	// If you want a new game, then this ends the old session, so all the old stuff isn't saved anymore.  You start fresh.
	if (isset($_POST["restart"]))
{
	if ($_POST['restart'] === "New Game") {
		session_destroy();	
		header("Location: hangman.php");
	}}

// Next is the super duper simple HTML code that just creates your form.  I didn't even bother with a doctype declaration, it's that simple.
// Note the method="post" for the form.  This is how you get the $guess variable up in your PHP code.
// The input tags are pretty obvious.  Name is how you refer to them in your PHP.  maxlength="1" is just to say you can only enter one letter at a time.
?>

<form method="post">
	Pick a letter... <input type="text" name="guess" maxlength="1" />
	<input type="submit" value="Guess!" />
	<input type="submit" value="New Game" name="restart" />
</form>

<?php
// Here's where you print out the hangman
for ($i = 0; $i < $hangman; $i++) {
	echo $hangmanImage[$i];
}

// And you're done!  Now wasn't that easy?
?>