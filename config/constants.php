<?php

$filePath = public_path() . '/files/';

if (!is_dir($filePath)) {
    @mkdir($filePath, 0777, true);
}

return [
    "abn" => "67 228 375 716",
    "info_email" => "info@oaastudy.com",
    "biz_name" => "OAA Africa",
    "biz_name_full" => "OAA Africa",
    "biz_address" => "Office 9, 281-285 Parramatta Road",
    "biz_city" => "Broadway NSW 2007",
    "biz_country" => "Australia",
    "biz_phone" => " (+61) 2 8970 0696",
    'filepath' => $filePath,
    'pay_pal_address' => '#',
    'vat_percent' => 0.025,
];