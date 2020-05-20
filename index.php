<?php
    session_start();

    //ログイン済みかを確認
    if (isset($_SESSION['USER'])) {
        header('Location: home.html');
        exit;
    }

    //ログイン機能
    $message = '';
    if((isset($_POST['userName'])) && (isset($_POST['password']))){
        if ($_POST['userName'] == 'test' && $_POST['password'] == 'test'){
            $_SESSION["USER"] = 'test';
            header("Location: home.html");
            exit;
        }
        else{
            $message = 'ユーザーネームかパスワードが間違っています。';
        }
    }
?>

<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .jumbotron {
          background:url(images/bookshelf.jpg) center no-repeat; background-size: cover;
        }
        .field {
            background-color: rgba(255,255,255,0.8);
        }
    </style>
    <title>蔵書管理｜トップ</title>
  </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">蔵書管理</a>
        </nav>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <div class="field">
                    <h1 class="mt-5"><strong>本を管理しよう</strong></h1>
                    <p>本屋でいい本を見つけたが同じ本を買ってたかもしれないと思ったとき、確認したい人に…</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-6 border border-dark rounded" style="padding: 10px;">
                    <h2>ログイン</h2>
                    <form method="post">
                        <fieldset calss="form-group">
                            <div class="form-group">
                                <legend>ユーザーネーム</legend>
                                <input type="text" minlength="4" class="form-control" name="userName">
                            </div>
                            <div class="form-group">
                                <legend>パスワード</legend>
                                <input type="password" minlength="4" class="form-control" name="password">
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">ログイン</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="col-6  border border-dark rounded" style="padding: 10px;">
                    <h2>新規登録</h2>
                    <form>
                        <fieldset calss="form-group">
                            <div class="form-group">
                                <legend>ユーザーネーム</legend>
                                <input type="text" minlength="4" class="form-control">
                            </div>
                            <div class="form-group">
                                <legend>パスワード</legend>
                                <input type="password" minlength="4" class="form-control">
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">ログイン</button>
                            </div>
                        </fieldset>
                      </form>
                </div>
            </div>
        </div>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>