<?php $title = 'Phrase 言葉からはじめる作品探し'; ?>

<?php ob_start() ?>
<body id="main">



    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">編集ページ</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->


    <h3>言葉からはじめる作品探し</h3>
<div class="title1">Phrase

<img src="img/phrase_logo.png"></div>

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="dialoguefield">
            <fieldset>
                <legend><h2>あなたの魂を震わせたセリフを入れてみよう！</h2></legend>
                <img src="img/kuririn.jpg"><br>
                <label>セリフ<br><textArea name="dialogue" rows="4" cols="50"></textArea></label><br>
                <label>セリフの元画像（任意）<br><input type="file" name="img"></label><br>
                <label>マンガのタイトル<br><input type="text" name="mangatitle" size="54"></label><br>
                <label>作者名<br><input type="text" name="author"></label><br>
                <label>出典・巻数<br><input type="text" name="source" size="24"></label><br>
                <label>コメント<br><textArea name="comment" rows="2" cols="50"></textArea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


    <!-- Main[Start] -->
    <div class="container jumbotron">
            <a href="detail.php"></a>
<?= $view ?>
</div>
<!-- Main[End] -->

</body>
<?php $content = ob_get_clean() ?>

<?php require_once 'layout.php' ?>