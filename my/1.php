<?php

use Bitrix\Main\UserTable;

require ($_SERVER['DOCUMENT_ROOT']) . '/bitrix/header.php';

$user = UserTable::getById(1)->fetch();

var_dump($user);

require ($_SERVER['DOCUMENT_ROOT']) . '/bitrix/footer.php';
