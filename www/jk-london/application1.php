<!doctype html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/screen.css">

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter39490315 = new Ya.Metrika({
                            id:39490315,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true,
                            webvisor:true,
                            trackHash:true
                        });
                    } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/39490315" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    </head>
    <body class="text-center">

        <div class="container-fluid s-1 s-1-thanks">
            <div class="container">
                <div class="row lang-row">
                    <ul class="text-center">
                        <li class="active"><a href="">ru</a></li>
                        <li><a href="">pl</a></li>
                        <li><a href="">eng</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <img src="img/logo_h.png" height="60" width="240" alt="">
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <p class="txt-top">Польская женская одежда Оптом от производителя с Бесплатной доставкой по СНГ</p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                        <div class="take-call">
                            <span>+38 095 87 419 42</span>
                            <button data-toggle="modal" data-target="#modal-1" class="btn">заказать звонок</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p class="text-center title-f big-t ">Дизайнерская женская одежда Оптом<br> по Евростандарту ISO.</p>
                </div>
                <!-- <div class="row">
                    <div class="col-md-6">
                        <img src="img/head-im.png" alt="" class="im-head">
                    </div>
                    <div class="col-md-6 text-right">
                        <p class="f-cl">Подсортировка размеров.<br>Средние и большие размеры 40(+6)-62(+6).<br> 30 лет в индустрии 7000 оптовых клиентов</p>
                        <form action="/thanks.php" method="post" class="contact-form text-center">
                            <p class="form-title">Получите доступ к оптовому каталогу<br><span>+ Скидку 30% на первый заказ</span></p>

                            <div class="rezult hide"></div>
                            <input type="hidden" class="popup-shower" name="title" value="">

                            <div class="input-group email">
                                <input name="email" placeholder="Введите Ваш Email" type="text" class="form-control">
                            </div>

                            <div class="input-group phone">
                                <input name="phone" placeholder="Введите Ваш телефон" type="text" class="form-control" required>
                            </div>

                            <input type="submit" value="перейти в каталог" class="btn btn-sbmt">
                            <p class="personal-data">* Ваши данные не будут переданы третьим лицам.</p>
                        </form>
                    </div>
                </div> -->
                <!-- <div class="scroll-link-wr text-center">
                    <div class="scroll-link">
                        <i class="glyphicon glyphicon-chevron-down"></i>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="container thanks-con">


<?php 
function show_form() 
{ 
?> 

<? 
} 
function complete_mail() {  

    $leadData = $_POST['DATA'];
    // Получаем данные из форм и сохраняем в массив
    $postData = array(
        'Имя:' => $leadData['NAME'],
        'Телефон' => $leadData['PHONE_WORK'],
        'Почта:' => $leadData['EMAIL_WORK'],
        'Комментарий:' => $leadData['COMMENTS'],
        'Оптовый покупатель:' => $leadData['Opt'],

    );
        $strPostData = '';
        foreach ($postData as $key => $value)
            $strPostData .= ($strPostData == '' ? '' : ' ').$key.' '.($value)."<br>";
            $str .= "<p><strong>Заявка:</strong> <br/> ".($strPostData)."</p>\r\n";
        require 'class.phpmailer.php'; //Дополнительный скрипт для отправки файла, можете не открывать, просто положите рядом с index.html и этим файлом.
        $mail = new PHPMailer(); 
        $mail->From = 'info@jk-london.com';      // от кого 
        $mail->FromName = 'J-London';   // от кого Имя
        $mail->AddAddress('info@jk-london.com', 'Имя'); // кому Ваша почта, Имя 
        $mail->IsHTML(true);        // формат письма HTML 
        $mail->Subject = "Заявка c Jk-london.com";  // тема письма 
        // если есть файл, то прикрепляем его к письму 
        if(isset($_FILES['upl'])) { 
                 if($_FILES['upl']['error'] == 0){ 
                    $mail->AddAttachment($_FILES['upl']['tmp_name'], $_FILES['upl']['name']); 
                 } 
        } 
        $mail->Body = $str; 
        // отправляем наше письмо 
        if (!$mail->Send()) die ('Mailer Error: '.$mail->ErrorInfo);     
} 

if (!empty($_POST['submit'])) complete_mail(); 
else show_form(); 
?> 

<?

define('CRM_HOST', 'jlondon.bitrix24.ru'); // Домен срм системы
define('CRM_PORT', '443'); 
define('CRM_PATH', '/crm/configs/import/lead.php'); 
define('CRM_LOGIN', 'info@jk-london.com');  // логин
define('CRM_PASSWORD', '89164607613london'); // пароль

/********************************************************************************************/

// POST processing
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $leadData = $_POST['DATA'];

    $metka = "Новая заявка"; // Название лида, обязательное условие
    // получаем данные из полей и задаем название лида
    $postData = array(
        'TITLE' => $metka, 
        'NAME' => $leadData['NAME'], 
        'PHONE_WORK' =>$leadData['PHONE_WORK'],
        'EMAIL_WORK' => $leadData['EMAIL_WORK'],
        'UF_CRM_1472647329' => $leadData['Opt'],
    );

    // var_dump($postData);

    // авторизация, проверка логина и пароля
    if (defined('CRM_AUTH'))
    {
        $postData['AUTH'] = CRM_AUTH;
    }
    else
    {
        $postData['LOGIN'] = CRM_LOGIN;
        $postData['PASSWORD'] = CRM_PASSWORD;
    }

    $fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
    if ($fp)
    {
        // формируем и шифруем строку с данными из формы
        $strPostData = '';
        foreach ($postData as $key => $value)
            $strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);
            $str = "POST ".CRM_PATH." HTTP/1.0\r\n";
            $str .= "Host: ".CRM_HOST."\r\n";
            $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $str .= "Content-Length: ".strlen($strPostData)."\r\n";
            $str .= "Connection: close\r\n\r\n";

        $str .= $strPostData;

        // отправляем запрос в срм систему
        fwrite($fp, $str );
        $result = '';
        while (!feof($fp))
        {
            $result .= fgets($fp, 128);
        }
        fclose($fp);

        $response = explode("\r\n\r\n", $result);
        $output = '<pre>'.print_r($response[1], 1).'</pre>';
    }
    else
    {
        echo 'Connection Failed! '.$errstr.' ('.$errno.')';
    }
}
else
{
    $output = '';
}

?>
<!-- То, что будет показываться на странице благодарности -->
<div id="thanks"><h2 class="thanks-ok">Спасибо, Ваша заявка принята.</h2><br><p class="thanks-ok">Наш менеджер получил вашу заявку, мы свяжется с вами в ближайшее время.</p>

            <a class="btn tmpl-btn thanks-button" href="http://jk-london.com/">Вернуться на сайт</a>
        </div></div>

        </div>

        <footer id="ex8">
            <div class="container">
                <div class="row r-1">
                    <div class="col-md-4 col-sm-4 col-xs-12 office">
                        <ul class="office-list">
                        <h2>Представительства:</h2>
                        <li>Россия. г.Москва, ТК "Садовод" МКАД 14 км, 
здание администрации, 4 эт., оф. 411</li>
                        <li>Украина. г.Николаев, ул. Чигрина 39</li>
                        <li>Польша. Lodz al.Pilsudskiego 135/1</li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <img src="img/logo_f.png" height="135" width="145" alt="">
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 contact">
                        <p>+7 495 134 24 82</p>
                        <p>+38 095 87 419 42    </p>
                        <p>info@jk-london.com</p>
                        <p>Skype: j.londonfw</p>
                        <button data-toggle="modal" data-target="#modal-1-1" >Заказать звонок</button>
                        <ul class="text-right lang-row">
                            <li class="active"><a href="">ru</a></li>
                            <li><a href="">pl</a></li>
                            <li><a href="">eng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row r-2">
                    <div class="col-md-9 col-sm-9 copy">
                    <div class="col-md-9 col-sm-9 col-xs-12 social">
                        <ul class="social-list">
                            <li class="i1"><a href="" target="_blank"></a></li>
                            <li class="i2"><a href="" target="_blank"></a></li>
                            <li class="i3"><a href="" target="_blank"></a></li>
                            <li class="i4"><a href="" target="_blank"></a></li>
                        </ul><span class="social-text">© 2016 “J-London - Производство женской одежды премиум класса”.</span>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-3 made-in">
                        <a href="http://www.lead-group.pro" target="_blank">
                            <span>Сделано в</span> Lead-Group
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        
        <div class="modal fade" id="modal-1">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">
                  <i class="glyphicon glyphicon-remove"></i>
                </button>
                <h2>Заказать звонок</h2>
              </div>
              <div class="modal-body text-center">
                
                <form action="/thanks.php" method="post" class="contact-form text-center">
                    <div class="rezult hide"></div>
                    <input type="hidden" class="popup-shower" name="title" value="">
                    
                            <p class="form-title">Получите доступ к оптовому каталогу<br><span>+ Скидку 30% на первый заказ</span></p>

                            <div class="input-group email">
                                <input name="email" placeholder="Введите Ваш Email" type="email" class="form-control">
                            </div>

                            <div class="input-group phone">
                                <input name="phone" placeholder="Введите Ваш телефон" type="text" class="form-control" required>
                            </div>

                            <input type="submit" value="перейти в каталог" class="btn btn-sbmt">
                            <p class="personal-data">* Ваши данные не будут переданы третьим лицам.</p>
                        </form>

              </div>
              <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
        </div>

        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M49S4X"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M49S4X');</script>
        <!-- End Google Tag Manager -->
    </body>
</html>