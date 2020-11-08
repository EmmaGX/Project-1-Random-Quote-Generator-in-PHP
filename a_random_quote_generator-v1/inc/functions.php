<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/styles.css">
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


// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote(){
    $q = rand(0,4);
    return $q;
}



// Create the printQuote function and name it printQuote

function printQuote ($arr) {
    $r = $arr;
    $randNum = getRandomQuote();
    $combinedQuote;
    if (is_array($r)) {
        $combinedQuote =  $r[$randNum]['quote'] . "\n" . $r[$randNum]['source'] . "\n" . $r[$randNum]['citation'] . "\n";
        if (!empty($r[$randNum]['year'])){
          $combinedQuote = $combinedQuote . $r[$randNum]['year'];
        }
      
      
        echo $combinedQuote;
       // echo $r[$randNum]['source'] . "\n";
       // echo $r[$randNum]['citation'] . "\n";
        //echo $r[$randNum]['year'];

       //echo $combinedQuote = "<p class="quote">" . $r[$randNum]['quote'] . "</p>";
    }
}


