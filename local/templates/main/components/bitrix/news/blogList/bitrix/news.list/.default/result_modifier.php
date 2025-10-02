<?
foreach ($arResult["ITEMS"] as &$item) {
    $item["DATE_CREATE"] = FormatDate("j F", MakeTimeStamp($item["DATE_CREATE"]));
}

echo "<pre>";
print_r($arResult["ITEMS"]);
echo "</pre>";
?>