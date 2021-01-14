<?php
//pour le sunburst (bd) , remplace les simple quote par deux simple quote
function replaceSimpleQuote(string $s)
{
    $res = '';

    for($i=0;$i<strlen($s);$i++)
    {
        if(substr($s,$i,1) == '\'')
        {
           $res .= '\'\'' ;
        }
        else
        {
            $res .= substr($s,$i,1);
        }
    }


    return $res;
}

//pour le sunburst (json) et perData remplace les double quote par des\"
function replaceDoubleQuote(string $s)
{
    $res = '';

    for($i=0;$i<strlen($s);$i++)
    {
        if(substr($s,$i,1) == '"')
        {
           $res .= '\\"' ;
        }
        else
        {
            $res .= substr($s,$i,1);
        }
    }

    return $res;

} 

// pour le PerData, remplace les " par &quot;
function replaceDoubleQuoteHTML(string $s)
{
    $res = '';

    for($i=0;$i<strlen($s);$i++)
    {
        if(substr($s,$i,1) == '"')
        {
           $res .= '&quot;' ;
        }
        else
        {
            $res .= substr($s,$i,1);
        }
    }

    return $res;

} 

//transforme \ en \\
function addAntiSlash(string $s)
{
    $res = '';

    for($i=0;$i<strlen($s);$i++)
    {
        if(substr($s,$i,1) == '\\')
        {
           $res .= '\\\\' ;
        }
        else
        {
            $res .= substr($s,$i,1);
        }
    }

    return $res;

} 




/*$oui = '"oui"';
$non = replaceDoubleQuoteHTML($oui);

echo $oui . '<br> '; echo $non; */

?>