<!DOCTYPE html>
<html>
<body>

<?php
class Revers
{
    public $string;
    function __construct($string)
    {
        $this->string = $string;
    }
    function revertCharacters()
    {
        $result = "";
        $words = explode(" ", $this->string);
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
}
$revers = new Revers("Hello! How are you?");
$revers->revertCharacters();
?>
</body>
</html>
