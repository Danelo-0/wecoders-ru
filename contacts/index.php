<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "Контакты | We Coders");
$APPLICATION->SetPageProperty("keywords", "контакты, контакты компании, контакты we coders, сайты");
$APPLICATION->SetPageProperty("description", "Контакты нашей компании");
$APPLICATION->SetTitle("Контакты");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurPage());
?>

<!-- Контакты + ФОС -->
<div class="contact-form pt-90 pb-30">
   <div class="container">
      <div class="row">
         <div class="section-heading text-center mb-70">
            <h2>Нужен классный сайт?</h2>
            <p>Оставьте заявку в форме ниже и мы всё сделаем!</p>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4">
            <div class="contact-info">
               <address>
                  <ul>
                     <li>
                        <i aria-hidden="true" class="fa fa-map-marker brand-color"></i>
                        <div class="address">
                           Мы находимся по адресу:
                           <hr>
                           <p>г. Тюмень, ул. Республики 94, офис 23</p>
                        </div>
                     </li>
                     <li>
                        <i aria-hidden="true" class="fa fa-phone brand-color"></i>
                        <div class="phone">
                           <p>8-123-456-7899</p>
                        </div>
                     </li>
                     <li>
                        <i class="fa fa-envelope brand-color"></i>
                        <div class="mail">
                           <p>
                              <a href="mailto:#">wecoders@wecodres.com</a>
                           </p>
                        </div>
                     </li>
                     <li></li>
                  </ul>
               </address>
            </div>
         </div>

         <? $APPLICATION->IncludeComponent(
            "wecoder:main.feedback",
            "contactsPageForm",
            array(
               "EMAIL_TO" => "CBERX-ALFA@yandex.ru",
               "EVENT_MESSAGE_ID" => array(
                  0 => "7",
               ),
               "OK_TEXT" => "Спасибо, ваше сообщение принято.",
               "REQUIRED_FIELDS" => array(
                  0 => "NAME",
                  1 => "EMAIL",
               ),
               "USE_CAPTCHA" => "N",
               "COMPONENT_TEMPLATE" => "contactsPageForm",
               "AJAX_MODE" => "Y"
            ),
            false
         ); ?>

      </div>
   </div>
</div>

<!-- Карта -->
<div class="map-area">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div id="map" class="mtb-90" style="width: 100%; height: 400px"></div>
         </div>
      </div>
   </div>
</div>


<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>