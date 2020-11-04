<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>

<?php
echo
'
            <form method="post" action="index.php">
                <p>Введите URL:<input name="URL"></p>
                <p>Введите Description:<input name="Description"></p>
                <p>Введите Cost:<input name="Cost"></p>
                <p>Введите Date:<input name="Date"></p>
                <p>Введите Adress:<input name="Adress"></p>
                <p>Введите isTop:<input name="isTop" max="1" min="0"></p>
                <input type="submit">
            </form>
        ';
if
(isset
    ($_POST['URL']) &&
    ($_POST['Description']) &&
    ($_POST['Cost']) &&
    ($_POST['Date']) &&
    ($_POST['Adress']) &&
    ($_POST['isTop'])
)
{
    echo
        '
            <table style="background: ghostwhite" align="center" width="31%">
                <tr>
                    <td rowspan="5"><img align="right" width="150px" height="150px" alt="OLX_Img_1" src="' . $_POST['URL'] . '"</td>
                    <td style="background: lightgoldenrodyellow">' . $_POST['Description'] . '</td>
                </tr>
                <tr>
                    <td style="background: lightgoldenrodyellow">' . $_POST['Cost'] . '</td>
                    </tr>
                <tr>
                    <td style="background: lightgoldenrodyellow">' . $_POST['Date'] . '</td>
                </tr>
                <tr>
                    <td style="background: lightgoldenrodyellow">' . $_POST['Adress'] . '</td>
                </tr>
                <tr>
                    <td style="background: lightgoldenrodyellow">' . $_POST['isTop'] . '</td>
                </tr>
            </table>
        ';
}
?>

<form method="get" action="index.php">
    <?php
    $asoc=
        [
            0 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/u7rxfuvhyucm2-UA/image;s=644x461",
                "Description" => "Защитное стекло на айфон х,11Pro/11Pro Max,6,7,8+,Хr,5,5s,se",
                "Cost" => 69,
                "Date" => "12:49, 20 октября 2020",
                "Adress" => "Ирпень, Киевская область",
                "isTop" => true],
            1 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/05eq552mcbic3-UA/image;s=1000x700",
                "Description" => "Новые. iPhone 6 16/64gb Sp. Gray/Gold/Silver айфон new 5 7 Х +",
                "Cost" => 3999,
                "Date" => "17:35, 20 октября 2020",
                "Adress" => "Николаев, Николаевская область, Центральный",
                "isTop" => true],
            2 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/z8l7n1h0n5pp3-UA/image;s=1000x700",
                "Description" => "• Запаковані Нові • iPhone X 64 Айфон Х 7 8+ plus Xr Xs max 32 128 256",
                "Cost" => 14199,
                "Date" => "15:45, 19 октября 2020",
                "Adress" => "Киев, Киевская область, Днепровский",
                "isTop" => true],
            3 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/05eq552mcbic3-UA/image;s=1000x700",
                "Description" => "Новые. iPhone 6 16/64gb Sp. Gray/Gold/Silver айфон new 5 7 Х +",
                "Cost" => 3999,
                "Date" => "17:35, 20 октября 2020",
                "Adress" => "Николаев, Николаевская область, Центральный",
                "isTop" => true],
            4 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/05eq552mcbic3-UA/image;s=1000x700",
                "Description" => "Новые. iPhone 6 16/64gb Sp. Gray/Gold/Silver айфон new 5 7 Х +",
                "Cost" => 3999,
                "Date" => "17:35, 20 октября 2020",
                "Adress" => "Николаев, Николаевская область, Центральный",
                "isTop" => true],
            5 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/05eq552mcbic3-UA/image;s=1000x700",
                "Description" => "Новые. iPhone 6 16/64gb Sp. Gray/Gold/Silver айфон new 5 7 Х +",
                "Cost" => 3999,
                "Date" => "17:35, 20 октября 2020",
                "Adress" => "Николаев, Николаевская область, Центральный",
                "isTop" => true],
            6 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/u7rxfuvhyucm2-UA/image;s=644x461",
                "Description" => "Защитное стекло на айфон х,11Pro/11Pro Max,6,7,8+,Хr,5,5s,se",
                "Cost" => 69,
                "Date" => "12:49, 20 октября 2020",
                "Adress" => "Ирпень, Киевская область",
                "isTop" => true],
            7 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/05eq552mcbic3-UA/image;s=1000x700",
                "Description" => "Новые. iPhone 6 16/64gb Sp. Gray/Gold/Silver айфон new 5 7 Х +",
                "Cost" => 3999,
                "Date" => "17:35, 20 октября 2020",
                "Adress" => "Николаев, Николаевская область, Центральный",
                "isTop" => true],
            8 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/z8l7n1h0n5pp3-UA/image;s=1000x700",
                "Description" => "• Запаковані Нові • iPhone X 64 Айфон Х 7 8+ plus Xr Xs max 32 128 256",
                "Cost" => 14199,
                "Date" => "15:45, 19 октября 2020",
                "Adress" => "Киев, Киевская область, Днепровский",
                "isTop" => true],
            9 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/05eq552mcbic3-UA/image;s=1000x700",
                "Description" => "Новые. iPhone 6 16/64gb Sp. Gray/Gold/Silver айфон new 5 7 Х +",
                "Cost" => 3999,
                "Date" => "17:35, 20 октября 2020",
                "Adress" => "Николаев, Николаевская область, Центральный",
                "isTop" => true],
            10 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/05eq552mcbic3-UA/image;s=1000x700",
                "Description" => "Новые. iPhone 6 16/64gb Sp. Gray/Gold/Silver айфон new 5 7 Х +",
                "Cost" => 3999,
                "Date" => "17:35, 20 октября 2020",
                "Adress" => "Николаев, Николаевская область, Центральный",
                "isTop" => true],
            11 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/05eq552mcbic3-UA/image;s=1000x700",
                "Description" => "Новые. iPhone 6 16/64gb Sp. Gray/Gold/Silver айфон new 5 7 Х +",
                "Cost" => 3999,
                "Date" => "17:35, 20 октября 2020",
                "Adress" => "Николаев, Николаевская область, Центральный",
                "isTop" => true],
            12 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/z8l7n1h0n5pp3-UA/image;s=1000x700",
                "Description" => "• Запаковані Нові • iPhone X 64 Айфон Х 7 8+ plus Xr Xs max 32 128 256",
                "Cost" => 14199,
                "Date" => "15:45, 19 октября 2020",
                "Adress" => "Киев, Киевская область, Днепровский",
                "isTop" => true],
            13 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/05eq552mcbic3-UA/image;s=1000x700",
                "Description" => "Новые. iPhone 6 16/64gb Sp. Gray/Gold/Silver айфон new 5 7 Х +",
                "Cost" => 3999,
                "Date" => "17:35, 20 октября 2020",
                "Adress" => "Николаев, Николаевская область, Центральный",
                "isTop" => true],
            14 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/05eq552mcbic3-UA/image;s=1000x700",
                "Description" => "Новые. iPhone 6 16/64gb Sp. Gray/Gold/Silver айфон new 5 7 Х +",
                "Cost" => 3999,
                "Date" => "17:35, 20 октября 2020",
                "Adress" => "Николаев, Николаевская область, Центральный",
                "isTop" => true],
            15 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/05eq552mcbic3-UA/image;s=1000x700",
                "Description" => "Новые. iPhone 6 16/64gb Sp. Gray/Gold/Silver айфон new 5 7 Х +",
                "Cost" => 3999,
                "Date" => "17:35, 20 октября 2020",
                "Adress" => "Николаев, Николаевская область, Центральный",
                "isTop" => true],
            16 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/u7rxfuvhyucm2-UA/image;s=644x461",
                "Description" => "Защитное стекло на айфон х,11Pro/11Pro Max,6,7,8+,Хr,5,5s,se",
                "Cost" => 69,
                "Date" => "12:49, 20 октября 2020",
                "Adress" => "Ирпень, Киевская область",
                "isTop" => true],
            17 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/05eq552mcbic3-UA/image;s=1000x700",
                "Description" => "Новые. iPhone 6 16/64gb Sp. Gray/Gold/Silver айфон new 5 7 Х +",
                "Cost" => 3999,
                "Date" => "17:35, 20 октября 2020",
                "Adress" => "Николаев, Николаевская область, Центральный",
                "isTop" => true],
            18 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/z8l7n1h0n5pp3-UA/image;s=1000x700",
                "Description" => "• Запаковані Нові • iPhone X 64 Айфон Х 7 8+ plus Xr Xs max 32 128 256",
                "Cost" => 14199,
                "Date" => "15:45, 19 октября 2020",
                "Adress" => "Киев, Киевская область, Днепровский",
                "isTop" => true],
            19 => [
                "URL" => "https://ireland.apollo.olxcdn.com/v1/files/05eq552mcbic3-UA/image;s=1000x700",
                "Description" => "Новые. iPhone 6 16/64gb Sp. Gray/Gold/Silver айфон new 5 7 Х +",
                "Cost" => 3999,
                "Date" => "17:35, 20 октября 2020",
                "Adress" => "Николаев, Николаевская область, Центральный",
                "isTop" => true],
        ];

    function loadNext($indpg,$asocs)
    {
        $numberpage = 5;
        if($indpg*$numberpage>=count($asocs)+$numberpage)
        {
            die("<div id='error'>Ошибка</div>");
        }
        else
        {
            $tmpstrt = $indpg-1;
            if($tmpstrt>=0)
            {
                $tmpfin=$indpg;
                if ($tmpfin * $numberpage > count($asocs))
                {
                    $tmpfin = count($asocs);
                }
                else
                {
                    $tmpfin = $tmpfin * $numberpage;
                }
                for ($k=$tmpstrt*$numberpage;$k<$tmpfin;$k++)
                {
                    echo generate_dom($asocs[$k]);
                }

                $tmpcp=intval(count($asocs)/$numberpage);
                if(count($asocs)%$numberpage>0)
                {
                    $tmpcp++;
                }
                for($cp=0;$cp<$tmpcp;$cp++)
                {
                    echo '<button name="Page" value="' . ($cp + 1) . '">' . ($cp + 1) . '</button>';
                }
                echo '<input type="number" name="LastSeen" value="' . $indpg . '"/>';
            }
            else
            {
                die("<div id='error'>Ошибка</div>");
            }
        }
    }

    function generate_dom($currentE1)
    {
        return
            '
            <table style="background: ghostwhite" align="center" width="31%">
                <tr>
                    <td rowspan="5"><img align="right" width="150px" height="150px" alt="OLX_Img_1" src="' . $currentE1["URL"] . '"</td>
                    <td style="background: lightgoldenrodyellow">' . $currentE1["Description"] . '</td>
                </tr>
                <tr>
                    <td style="background: lightgoldenrodyellow">' . $currentE1["Cost"] . '</td>
                    </tr>
                <tr>
                    <td style="background: lightgoldenrodyellow">' . $currentE1["Date"] . '</td>
                </tr>
                <tr>
                    <td style="background: lightgoldenrodyellow">' . $currentE1["Adress"] . '</td>
                </tr>
                <tr>
                    <td style="background: lightgoldenrodyellow">' . $currentE1["isTop"] . '</td>
                </tr>
            </table>
        ';
    }
    if(isset($_GET['Page']))
    {
        loadNext($_GET['Page'], $asoc);
    }
    else
    {
        loadNext(1,$asoc);
    }

    ?>
</form>
</body>
</html>