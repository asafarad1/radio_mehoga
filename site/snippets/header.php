<html lang="he" dir="rtl" id="top">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <style>
  .material-symbols-outlined {
    font-variation-settings:
    'FILL' 0,
    'wght' 400,
    'GRAD' 0,
    'opsz' 24
  }
  </style>
  <title><?= $site->title() ?></title>
  
  <?= css('assets/css/styles.css?v=04') ?>

</head>
<body>
  <div class="page_bg"></div>
  <header>
    <div class="header_top">
      <div class="header_main">
        <a class="logo" href="/home/#top">
          <img src="/assets/images/logotype_white.svg">
        </a>
        <div class="search_container">
          <form action="" method="get">
            <input type="text" id="search" name="search" value="" placeholder="חיפוש">
            <input type="submit" value="&#x1F50D">
          </form>
        </div>
      </div>
      <div class="header_menu">
        <div class="archive_button menu_object marked" onclick="swich_page('1')">
          <p>[ארכיון]</p>
        </div>
        <div class="program_button menu_object" onclick="swich_page('2')">
          <p>[תוכניה שבועית]</p>
        </div>
        <div class="about_button menu_object" onclick="swich_page('3')">
          <p>[אודות]</p>
        </div>
      </div>
    </div>
    <div class="live_container play-live">
      <div class="live_strip">  
        <p><i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i></p>
      </div>
      <div class="live_mid">
        <div class="live_info">
          <p>עכשיו</p>
          <p href="https://cast1.asurahosting.com:2199/tunein/hamehug1.pls" class="cc_streaminfo" data-type="song" data-username="hamehug1">רק רגע...</p>
        </div>
        <div class="play_button btn-play-live">
          <img src="/assets/images/play.gif">
        </div>
        <button class="play_button btn-pause">
          <img src="/assets/images/pause.gif">
        </button>
        <audio src="https://cast1.my-control-panel.com/proxy/hamehug1/stream"></audio>
      </div>
      <div class="live_strip">
        <p> חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i> שידור חי <i>&#x25CF;</i></p>
      </div>
    </div>
  </div>
</header>