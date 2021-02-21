<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="portforio.css">
  <title>Document</title>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(function(){
      // #で始まるリンクをクリックしたら実行されます
      $('a[href^="#"]').click(function() {
        // スクロールの速度
        var speed = 400; // ミリ秒で記述
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
      });
    });
  </script>

</head>
<body>
  <header>
    <input id="menu" type="checkbox"/>
    <label for="menu" class="open"><img src="images/bars_24.png" alt="ハンバーガーアイコン" width="50px"></label>
    <label for="menu" class="back"></label>
    
    <aside>
      <label for="menu" class="close">x</label>
        <nav>
          <ul>
            <li><a href="#1">Home</a></li>
            <li><a href="#2">About</a></li>
            <li><a href="#3">Portforio</a></li>
            <li><a href="#4">Skills</a></li>
            <li><a href="#5">contact</a></li>
        </ul>
    </nav>
  </header>

    <div class="cover-img">
      <div class="cover-text text-center">
        <p>Shogo's portforio</p>
      </div>
    </div>

    <nav class="pc_nav under-margin">
      <ul> 
        <li>
            <a href="#1" class="Btn">
              <span class="Btn-Text">Home</span>
            </a>
        </li>
        <li>
          <a href="#2" class="Btn">
            <span class="Btn-Text">About</span>
          </a>
      </li>
      <li>
        <a href="#3" class="Btn">
          <span class="Btn-Text">Portforio</span>
        </a>
      </li>
      <li>
        <a href="#4" class="Btn">
          <span class="Btn-Text">Skills</span>
        </a>
      </li>
      <li>
        <a href="#5" class="Btn">
          <span class="Btn-Text">contact</span>
        </a>
      </li>
      </ul>
    </nav>


  <main>
    <div class="about_area">
      <h1 class="txtm  under-margin fade-in" id="2" >AboutMe</h1>
      
      <img src="images/download.jpg" alt=ビジネスマン>
      <p>名前：中山将吾</p>
      <p>経歴：鹿児島県生まれ
      高校卒業後、<br>組み立て業務、通信建設の営業事務を経て
      プログラミングと<br>WEBデザインの勉強を始める。
      UI/UXを意識したデザインの設計からモダンなフロントエンド開発ができるエンジニアを目指し日々勉強中です。</p>
    </div>

    <div class="portforio_aria ">
      <h1 class="txtm under-margin"  id="3">Portfolio</h2>

      <p>これまで制作した開発アプリ</p>
  
      <img src="images/dummy-images-0001.jpg" alt="">
      <img src="images/dummy-images-0001.jpg" alt="">
      <img src="images/dummy-images-0001.jpg" alt="">
    </div>

  <div class="skill_araa ">
    <h1 class="txtm under-margin"  id="4">SKILL</h1>

    
    <div class="skill_araa_container">
      <div class="box">
        <div class="item">
          <ul class="front_end">
            <h3>フロントエンド</h3>
            <li><img src="images/html5.png" alt="">HTML5</li>
            <li><img src="images/css3.png" alt="">css</li>
            <li><img src="images/javascript.png" alt="">JavaScript</li>
            <li><img src="images/php.png" alt="">PHP</li>
          </ul>
        </div>
        <div class="item">
          <ul class="framework">
            <h3>フレームワーク</h3>
            <li><img src="images/jquery.png" alt="">jQuery</li>
            <li><img src="images/bootstrap.png" alt="">BOOTSTRAP</li>
          </ul>
        </div>
        <div class="item">
          <ul class="web_design">
            <h3>WEBデザイン</h3>
            <li><img src="images/photoshop.png" alt="">Adobe Photoshop</li>
            <li><img src="images/Illustrator.png" alt="">Adobe Illustrator</li>
          </ul>
        </div>
      </div>
      
    </div>

    </div><!--skill_araa-->

        <!-- お問合せフォーム画面 -->
        <div class="container">
          <form action="" method="POST" novalidate>
              <p>お問い合わせ</p>
              <div class="form-group">
                  <div class="row">
                      <div class="col-2">
                          <label for="inputName">お名前</label>
                      </div>
                      <div class="col-2">
                          <p class="require_item">必須</p>
                      </div>
                      <div class="col-md-8">
                          <input type="text" name="name" id="inputName" class="form-control" value="<?php echo htmlspecialchars($post['name']); ?>" required autofocus>
                          <?php if ($error['name'] === 'blank'): ?>
                              <p class="error_msg">※お名前をご記入下さい</p>
                          <?php endif; ?>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="row">
                      <div class="col-2">
                          <label for="inputEmail">メールアドレス</label>
                      </div>
                      <div class="col-2">
                          <p class="require_item">必須</p>
                      </div>
                      <div class="col-8">
                          <input type="email" name="email" id="inputEmail" class="form-control" value="<?php echo htmlspecialchars($post['email']); ?>" required>
                          <?php if ($error['email'] === 'blank'): ?>
                              <p class="error_msg">※メールアドレスをご記入下さい</p>
                          <?php endif; ?>
                          <?php if ($error['email'] === 'email'): ?>
                              <p class="error_msg">※メールアドレスを正しくご記入ください</p>
                          <?php endif; ?>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="row">
                      <div class="col-2">
                          <label for="inputContent">お問い合わせ内容</label>
                      </div>
                      <div class="col-2">
                          <p class="require_item">必須</p>
                      </div>
                      <div class="col-8">
                          <textarea name="contact" id="inputContent" rows="10" class="form-control" required><?php echo htmlspecialchars($post['contact']); ?></textarea>
                          <?php if ($error['contact'] === 'blank'): ?>
                              <p class="error_msg">※お問い合わせ内容をご記入下さい</p>
                          <?php endif; ?>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-8 offset-4">
                      <button type="submit">確認画面へ</button>
                  </div>
              </div>
          </form>
      </div>

  </main>    
  
</body>


</html>