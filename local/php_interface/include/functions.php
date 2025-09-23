<?php
use Bitrix\Main\Loader;
use Bitrix\Iblock\IblockTable;

function getIblockIdByCodeD7($code, $type = "")
{
    if (!Loader::includeModule("iblock")) {
        return false;
    }

    $filter = ["=CODE" => $code];
    if ($type !== "") {
        $filter["=IBLOCK_TYPE_ID"] = $type;
    }

    $iblock = IblockTable::getList([
        "filter" => $filter,
        "select" => ["ID"],
        "limit" => 1
    ])->fetch();

    return $iblock ? (int)$iblock["ID"] : false;
}
