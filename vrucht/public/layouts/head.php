<?php
function get_meta_data() {
    include $_SERVER['DOCUMENT_ROOT'] . '/public/functions/seo.php';
    $current_page = basename($_SERVER['PHP_SELF'], '.php');
    return isset($meta_pages[$current_page]) ? $meta_pages[$current_page] : $base_meta;
}
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" href="/public/img/logo.png">
<link rel="stylesheet" href="/public/css/navbar.css">
<link rel="stylesheet" href="/public/css/style.css">
<link rel="stylesheet" href="/public/css/footer.css">

<?php 
$meta_data = get_meta_data();
?>

<title><?php echo $meta_data['page_title']; ?> </title>
<?php foreach ($meta_data['meta'] as $name => $content): ?>
<meta name="<?php echo $name; ?>" content="<?php echo $content; ?>">
<?php endforeach; ?>
<?php foreach ($meta_data['open_graph'] as $property => $content): ?>
<meta property="<?php echo $property; ?>" content="<?php echo $content; ?>">
<?php endforeach; ?>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/navbar.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/functions/namen.php';?>
