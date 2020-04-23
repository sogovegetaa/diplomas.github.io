<?php ignore_user_abort(true); error_reporting(0);

include 'config.php';
$config = getConfig();
$error = false;
$phone = NULL;
foreach (["phone", "Phone", "mobile", "Mobile", "Телефон", "телефон"] as $field) {
  if (!empty($_POST[$field])) {
    $phone = preg_replace('/[^\d]/', '', $_POST[$field]);
    $_POST[$field] = $phone;
  }
}
include 'forms.php';
if ($phone) {
  try {
    processForm($config["integrations"]);
  } catch (Exception $e) {
    $error = true;
  }
}
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  exit(0);
}

$page = 'thankyou';
$upsellsEnabled = false;
foreach ($config["upsells"] as $upsell) {
  if ($upsell["enabled"]) {
    $upsellsEnabled = true;
    break;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <?php include "include-head.php" ?>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width,initial-scale=1'>
  <base href="admin/">
  <link rel="shortcut icon" href="assets/thankyou-favicon.ico">
  <title><?php echo !$error ? "Ваша заявка принята" : "Ошибка отправки заявки" ?></title>
  <style>
    body{margin: 0;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;line-height: 1.5;background-color: rgb(238, 241, 243);}
    .thankyou{overflow: hidden;box-sizing: border-box;min-height: 300px;background: url(assets/thankyou-bg.jpg) center bottom no-repeat #fdfdff;text-align: center;position: relative;padding: 10px;font-size: 16px;}
    .thankyou__title {color: rgb(63, 86, 196); font-size: 36px;}
    .thankyou__title--error{color: #da0000;}
    .thankyou__divider{max-width: 100%;}
    .thankyou__image{position: absolute;bottom: 0;left: 5%;}
    .thankyou__notice{font-size: 13px;}
    .thankyou--full{min-height: 100vh;}
    .button {background: transparent linear-gradient(to bottom, rgb(13, 57, 181) 0%, rgb(22, 0, 144) 100%) repeat scroll 0 0; border: none; border-bottom: 2px solid rgb(38, 21, 90); outline: 0 none; padding: 15px 25px; text-transform: uppercase; color: #fff;font-weight: bold; border-radius: 4px; cursor: pointer;}
    .button:hover{-webkit-transform: translateY(-1px);-moz-transform: translateY(-1px);-ms-transform: translateY(-1px);-o-transform: translateY(-1px);transform: translateY(-1px);}
    .button--added{background: transparent linear-gradient(to bottom, rgb(234, 179, 13) 0%, rgb(236, 129, 13) 100%) repeat scroll 0 0;border-bottom: 2px solid rgb(180, 80, 11);}
    .offer{text-transform: uppercase;background: url(assets/thankyou-offerbg.jpg) repeat;color: #fff;padding: 20px 10px;text-align: center;}
    .upsell{margin: 50px auto;width: 92%;max-width: 800px;display: flex;background-color: #fff;border-bottom: 2px solid rgb(222, 225, 227);border-radius: 2px;padding: 10px;color: rgba(0, 0, 0, .8);position: relative;}
    .upsell__text{flex-basis: 50%;max-width:50%;display: flex;flex-direction: column;justify-content: space-between;padding: 10px;}
    .upsell__title{margin: 0;font-weight: normal;font-size: 28px;line-height: 1.2;}
    .upsell__rating{display: block;margin: 10px 0;}
    .upsell__old-price{font-size: 20px;display: inline-block;margin-right: 10px;}
    .upsell__new-price{font-size: 32px;color: rgb(10, 161, 80);}
    .upsell__description{white-space: pre-wrap;word-wrap: break-word;}
    .upsell__image-container{flex-basis: 50%;padding: 10px;}
    .upsell__image{width: 100%;}
    .upsell__discount{background: url(assets/thankyou-sale.png) center no-repeat;width: 109px;height: 43px;position: absolute;left: -10px;top: 20px;color: #fff;font-weight: bold;font-size: 22px;box-sizing: border-box;display: block;padding-left: 10px;line-height: 34px;}
    @media all and (max-width: 600px) {
      .thankyou__title{font-size: 30px;}
      .upsell{flex-wrap: wrap;width: 87%;}
      .upsell__text{flex-basis: 100%; max-width:100%;}
      .upsell__title, .upsell__price {text-align: center;}
      .upsell__rating{margin-left: auto;margin-right: auto;}
      .upsell__image-container{flex-basis: 100%;}
      .upsell__button-container{text-align: center;}
      .thankyou__image{display: none;}
      .thankyou--full .thankyou__image{display: inline;}
    }
    @media all and (max-height: 500px) {
      .thankyou__image{width: 130px;height: auto;}
    }
  </style>
</head>
<body>
<?php include "include-body-start.php" ?>
<main>
  <div class='thankyou <?php if (!$upsellsEnabled || $error) echo 'thankyou--full' ?>'>

    <?php if (!$error): ?>
    <h1 class="thankyou__title">Спасибо, заявка принята!</h1>
    <p>
      Оператор свяжется с Вами в течение 15 минут <?php if (!empty($phone)) echo "по номеру <b>$phone</b>" ?>
    </p>
    <img class="thankyou__divider" src="assets/thankyou-divider.png">
    <p class="thankyou__notice">Если вы допустили ошибку, вернитесь на страницу заказа и отправьте форму еще раз</p>

    <?php else: ?>
    <h1 class="thankyou__title thankyou__title--error">Ошибка при отправке заявки</h1>
    <p class="thankyou__text">
      К сожалению, во время отправки заявки произошла ошибка, пропробуйте вернуться на страницу заказа и отправить
      форму еще раз.
    </p>
    <?php endif; ?>

    <button class=" button thankyou__button" onclick="history.go(-1);">Вернуться</button>
    <img class="thankyou__image" src="assets/thankyou-girl.png">
  </div>
  <?php if ($upsellsEnabled && !$error): ?>
  <div class="offer">
    <b>Для новых клиентов у нас есть эксклюзивное предложение!</b><br/>
    Вы можете добавить к заказу эти товары с индивидуальной скидкой:
  </div>
  <?php foreach ($config["upsells"] as $upsell): ?>
  <?php if ($upsell["enabled"]): ?>
  <div class="upsell">
    <div class="upsell__image-container">
      <img class="upsell__image" src='uploads/<?= $upsell["image"] ?>'>
    </div>
    <span class="upsell__discount"><?= $upsell["newPrice"] - $upsell["oldPrice"] ?>р.</span>
    <div class="upsell__text">
      <div>
        <h2 class="upsell__title"><?= $upsell["title"] ?></h2>
        <img class="upsell__rating" src="assets/thankyou-rating.png">
        <div class="upsell__price">
          <span class="upsell__old-price"><del><?= $upsell["oldPrice"] ?></del></span>
          <span class="upsell__new-price"><?= $upsell["newPrice"] ?></span> р.
        </div>
        <p class="upsell__description"><?= $upsell["description"] ?></p>
      </div>
      <div class="upsell__button-container">
        <button class="button">Добавить к заказу</button>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php endforeach; ?>
  <?php endif; ?>
</main>
<script>
  (function(){
    var phone = <?= $phone ?: "null" ?>;
    for (var i = 0, upsells = document.querySelectorAll('.upsell'); i < upsells.length; i++) {
      (function(upsell) {
        var title = upsell.querySelector('.upsell__title').innerHTML;
        var button = upsell.querySelector('.button');
        button.addEventListener('click', function () {
          button.disabled = true;
          button.innerHTML = 'Добавлено';
          button.classList.add('button--added');
          var xhr = new XMLHttpRequest();
          xhr.open('POST', window.location.href);
          xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
          xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
          phone && xhr.send('phone=' + phone + '&upsell=' + encodeURIComponent(title));
        });
      })(upsells[i]);
    }
  })();
</script>
<?php include "include-body-end.php" ?>
</body>
</html>