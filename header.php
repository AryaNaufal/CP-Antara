<?php

use App\AssetService;

$assetService = new AssetService();

$assets = $assetService->getAssets();

$jsAssets = array_filter($assets, function ($asset) {
	return filterType('js', $asset);
});

$cssAssets = array_filter($assets, function ($asset) {
	return filterType('css', $asset);
});

function filterType($type, $var)
{
	return $var['type'] === $type;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ========== Favicon Icon ========== -->
	<link rel="shortcut icon" href="<?= SERVER_NAME ?>assets/img/antara/logo-antara.png" type="image/x-icon">
	<title><?= $title ?></title>
	<!-- ========== Start Stylesheet ========== -->

	<?php foreach ($cssAssets as $asset): ?>
		<link href="<?= SERVER_NAME . htmlspecialchars($asset['url']) ?>" rel="stylesheet" />
	<?php endforeach; ?>

	<!--==========End Stylesheet==========-->
</head>

<body>