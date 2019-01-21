<?php
require "header.php";
?>
<body>

<?php
$fb = new Facebook\Facebook([
  'app_id' => '{2434059456665209}', // Replace {app-id} with your app id
  'app_secret' => '{bac8f2db7c89cf9de2b8c51a5e36efe1}',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>

</body>
<?php
require "footer.php";
?>
