<?php
# Regex Match
{
    $matches = [];
    $result = (bool)preg_match_all("/ari|ardit|awan/i", "Arief Karditya Hermawan", $matches);

    var_dump($result);
    var_dump($matches);
}

# Regex Replace
{
    $result = preg_replace("/anjing|bangsat|tolol/i", "***", "dasar lu anjing, bangsat. jadi orang tolol banget");

    var_dump($result);
}

# Regex Split
{
    $result = preg_split("/[\s,-]/", "Terry Andrew Davis, Programmer, Terkenal-Rasis");

    var_dump($result);
}
