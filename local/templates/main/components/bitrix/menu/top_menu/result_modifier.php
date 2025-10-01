<?php
$arPrepItems = [];
$parents = [];

if (!empty($arResult)) {
    foreach ($arResult as $item) {
        $level = (int)$item['DEPTH_LEVEL'];

        if ($level === 1) {
            $arPrepItems[] = $item;
            $parents[$level] = &$arPrepItems[array_key_last($arPrepItems)];
        } else {
            if (!empty($parents[$level - 1])) {
                $parent = &$parents[$level - 1];
                $parent['subitems'][] = $item;

                $parents[$level] = &$parent['subitems'][array_key_last($parent['subitems'])];
            }
        }
    }
}

$arResult = $arPrepItems;