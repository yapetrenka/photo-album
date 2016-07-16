<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?=trim($PAGE['meta_title'])?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?if(!empty($PAGE['meta_keywords'])){?>
    <meta name="keywords" content="<?=$PAGE['meta_keywords']?>">
<?}?>
<?if(!empty($PAGE['meta_description'])){?>
    <meta name="description" content="<?=$PAGE['meta_description']?>">
<?}?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" sizes="180x180" href="./../assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="./../assets/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="./../assets/img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="./../assets/img/favicon/manifest.json">
    <link rel="mask-icon" href="./../assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="./../assets/img/favicon/favicon.ico">
    <meta name="msapplication-config" content="./../assets/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="./../assets/css/foundation.css">
    <link rel="stylesheet" href="./../assets/css/app.css">
</head>

<body>