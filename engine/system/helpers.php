<?

function to_bytes($size)
{

    $iec = array('б', 'Кб', 'Мб', 'Гб', 'Тб', 'Пб', 'Эб');

    $i = 0;

    while (($size / 1024) > 1)
    {
        $size = $size / 1024;
        $i++;
    }

    $sizes = explode(".", $size);
    $size_1 = $sizes[0];
    if (isset($sizes[1]) && strlen($sizes[1]) > 0)
    {
        $size_2 = round($sizes[1] / (pow(10, strlen($sizes[1]) - 2)));
        $size_2 = "." . $size_2;
    }
    else
    {
        $size_2 = "";
    }

    $size = $size_1 . $size_2;

    $echo = $size . ' ' . $iec[$i]; //Формируем вывод

    return $echo;
}

?>