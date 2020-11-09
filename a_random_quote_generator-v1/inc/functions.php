<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
$quotes = array(); //creates array

// Each inner array element should be an associative array
$quotes[] = [
'quote' => 'The greatest glory in living lies not in never falling, but in rising every time we fall.',
'source' => 'Nelson Mandela',
'citation' => 'blog.hubspot.com',
'year' => '',
'hashtag' => ''
];

$quotes[] = [
'quote' => 'Get busy living or get busy dying.',
'source' => 'Stephen King',
'citation' => 'keepinspiring.me',
'year' => '',
'hashtag' => ''
];

$quotes[] = [
'quote' => 'Every moment is a fresh beginning',
'source' => 'T.S Eliot',
'citation' => 'codeofliving.com',
'year' => 1949,
'hashtag' => ''
];

$quotes[] = [
'quote' => 'I could agree with you but then we’d both be wrong.',
'source' => 'Harvey Specter',
'citation' => 'Suits',
'year' => 2015,
'hashtag' => ''
];

$quotes[] = [
'quote' => 'Dream as if you’ll live forever, live as if you’ll die today.',
'source' => 'James Dean',
'citation' => 'codeofliving.com',
'year' => '',
'hashtag' => ''
];

$quotes[] = [
'quote' => 'Nobody owes you a job.',
'source' => 'Steven H Haas',
'citation' => '',
'year' => '2020',
'hashtag' => '#myhusband'
];


// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote($quotesArray){
    $randomNumber = rand(0,sizeof($quotesArray)-1);
    return $quotesArray[$randomNumber];
}

// Create the printQuote function and name it printQuote

function printQuote ($quotesArray) {
    $randomQuote = getRandomQuote($quotesArray);

    $combinedQuote = "<p class=\"quote\">" . $randomQuote['quote'] . "</p>" .
                         "<p class=\"source\">" .  $randomQuote['source'];


   if (!empty($randomQuote['citation'])) {
        $combinedQuote = $combinedQuote . "<span class=\"citation\">" . $randomQuote['citation'] . "</span>";
    }

    if (!empty($randomQuote['year'])) {
        $combinedQuote = $combinedQuote . "<span class=\"year\">" . $randomQuote['year'] . "</span>";
    }
    if (!empty($randomQuote['hashtag'])) {
        $combinedQuote = $combinedQuote . "<span class=\"hashtag\">" . $randomQuote['hashtag'] . "</span>";
    }

    return $combinedQuote . "</p>" ;

}

//function randomColor() {
//$rand = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f'];
//$color = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(
//        0, 15)] . $rand[rand(0, 15)];
//        return $color;
//}

