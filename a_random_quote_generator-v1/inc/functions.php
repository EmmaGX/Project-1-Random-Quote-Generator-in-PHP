<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
$quotes = array(); //creates array

// Each inner array element should be an associative array
$quotes[] = [
'quote' => 'The greatest glory in living lies not in never falling, but in rising every time we fall.',
'source' => 'Nelson Mandela',
'citation' => 'blog.hubspot.com',
'year' => ''
];

$quotes[] = [
'quote' => 'Get busy living or get busy dying.',
'source' => 'Stephen King',
'citation' => 'keepinspiring.me',
'year' => ''
];

$quotes[] = [
'quote' => 'Every moment is a fresh beginning',
'source' => 'T.S Eliot',
'citation' => 'codeofliving.com',
'year' => 1949
];

$quotes[] = [
'quote' => 'I could agree with you but then we’d both be wrong.',
'source' => 'Harvey Specter',
'citation' => 'Suits',
'year' => 2015
];

$quotes[] = [
'quote' => 'Dream as if you’ll live forever, live as if you’ll die today.',
'source' => 'James Dean',
'citation' => 'codeofliving.com',
'year' => ''
];

$quotes[] = [
    'quote' => 'Nobody owes you a job.',
    'source' => 'Steven H Haas',
    'citation' => '',
    'year' => '2020'
];


// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote($arr){
    $randomNumber = rand(0,sizeof($arr)-1);
    return $arr[$randomNumber];
}

// Create the printQuote function and name it printQuote

function printQuote ($arr) {
    $randomQuote = getRandomQuote($arr);

    $combinedQuote = "<p class=\"quote\">" . $randomQuote['quote'] . "</p>" .
                         "<p class=\"source\">" .  $randomQuote['source'];


   if (!empty($randomQuote['citation'])) {
        $combinedQuote = $combinedQuote . "<span class=\"citation\">" . $randomQuote['citation'] . "</span>";
    }

    if (!empty($randomQuote['year'])) {
        $combinedQuote = $combinedQuote . "<span class=\"year\">" . $randomQuote['year'] . "</span>";
    }

    return $combinedQuote . "</p>" ;

}
