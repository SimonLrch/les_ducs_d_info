<?php

//pour le sunburst
function replaceSimpleQuote(string $s)
{
    $res = '';

    for($i=0;$i<strlen($s);$i++)
    {
        if(substr($s,$i,1) == '\'')
        {
           $res .= '"' ;
        }
        else
        {
            $res .= substr($s,$i,1);
        }
    }


    return $res;
}

function replaceDoubleQuote(string $s)
{
    $res = '';

    for($i=0;$i<strlen($s);$i++)
    {
        if(substr($s,$i,1) == '"')
        {
           $res .= '\'' ;
        }
        else
        {
            $res .= substr($s,$i,1);
        }
    }

    return $res;

} 

/*


function replaceQuote(string $s)
{
    $a = replaceDoubleQuote($s);
    $res = replaceSimpleQuote($a);

    return $res;

} */




/*$var ='\'oui\'' ;
$var2 ='"oui"' ;

//$a = replaceQuote($var);
$b = replaceQuote($var2);
$c = replaceSimpleQuote($b);
//echo $var . '<br/>';
//echo $a . '<br/>' ; 

echo $var2 . '<br/>';
echo $b . '<br/>' ; 
echo $c . '<br/>' ;  */

?>