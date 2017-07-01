<?php
require_once '/controllers/ccontent.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> <?=$content1['title']; ?></title>
    <meta name="description" content="<?=$content1['description']; ?>">
    <meta name="keywords" content="<?=$content1['keywords']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="site.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <script src="jquery-1.12.4.min.js"></script>
    <script>
        $(document).ready(function()
        {
            $("#wb_menu ul li a").click(function(event)
            {
                $("#wb_menu input").prop("checked", false);
            });
        });
    </script>
</head>
<body>
<div class="wrapper">
    <div class="content">
        <div id="wb_podmenu">
            <div id="podmenu">
                <div class="row">
                    <div class="col-1">
                        <div id="wb_menu" style="display:inline-block;width:100%;z-index:0;">
                            <label class="toggle" for="menu-submenu" id="menu-title"><span id="menu-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
                            <input type="checkbox" id="menu-submenu">
                            <ul class="menu" id="menu">
                                <?php
                                require_once '/controllers/cmenu.php';
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div id="wb_LayoutGrid1">
    <div id="LayoutGrid1">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text2">
                    <span style="color:#FFFFFF;font-family:'Roboto Medium';font-size:64px;">Php and mysqli</span>
                </div>
                <div id="wb_Text3">
                    <span style="color:#FFFFFF;font-family:'Roboto Light';font-size:13px;">Верисия 1.0</span>
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
<div id="wb_LayoutGrid2">
    <div id="LayoutGrid2">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
<div id="wb_LayoutGrid3">
    <div id="LayoutGrid3">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text1">
                    <span style="color:#FFFFFF;font-family:'Roboto Light';font-size:13px;">
                        <?=$content1['text']; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
</div> <!--Конец контента-->
<div class="footer">
    <div id="wb_LayoutGrid4">
        <div id="LayoutGrid4">
            <div class="row">
                <div class="col-1">
                    <div id="wb_Text4">
                        <span style="color:#FFFFFF;font-family:'Roboto Light';font-size:13px;">
                            <?php
                            // Вывод даты на русском
                            $monthes = array(
                                1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
                                5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
                                9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
                            );
                            echo(date('d ') . $monthes[(date('n'))] . date(' Y, H:i'));

                            // Вывод дня недели
                            echo('<br />');
                            $days = array(
                                'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
                                'Четверг', 'Пятница', 'Суббота'
                            );
                            echo($days[(date('w'))] . date(', H:i'));
                            ?> Версия движка 1.0</span>
                    </div>
                </div>
                <div class="col-2">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>







