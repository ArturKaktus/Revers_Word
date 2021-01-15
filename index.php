<!DOCTYPE html>
<html>
<body>

<?php
$string = revertCharacters("Привет! Давно не виделись.");

function revertCharacters($text)
{
    $result = "";
    $words = explode(" ", $text);
    for ($i = 0; $i < count($words); $i++)
    {
        if (preg_match('[!\.]', $words[$i])=== 0)
        {
            //если есть знак, то выводит в отдельную переменную
            $sign = substr($words[$i], -1);
            $word = substr($words[$i], 0, -1);
            //Реверс слова с сохранением Регистра и Занков
            $word = strrev($word);
            if (strtolower($word) != $word)
            {
                $word = ucfirst(strtolower($word));
            }
            $result = $result . $word . $sign . " ";
        }
        else
        {
            //Реверс слова с сохранением Регистра
            $word = strrev($words[$i]);
            if (strtolower($word) != $word)
            {
                $word = ucfirst(strtolower($word));
            }
            $result = $result . $word . " ";
        }
    }
echo $result;
}

echo $string;
?>
</body>
</html>
