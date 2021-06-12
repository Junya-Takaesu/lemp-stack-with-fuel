# LEMP stack 

## TODOs
* [ ] db 接続設定ファイルを gitignore する
  * see: https://stackoverflow.com/questions/25436312/gitignore-not-working
* [ ] session の保存に redis を使うようにする(lemp stack に追加する)

## LEMP stack (docker, docker-compose) について
* 参考記事
  * https://tech.osteel.me/posts/docker-for-local-web-development-part-1-a-basic-lemp-stack

### 環境変数
* `.env.sample` を `.env` に改名する
* 中に `KEY=VALUE` の形式で環境変数を定義する
* docker-compose.yml 内で、${MYSQL_ROOT_PASSWORD} のように使うことができる

### mysql のサービスについて
* 公式の mysql イメージの機能で、マイグレーションができる
  * マイグレーション用の sql を docker-compose.yml の `volumes` を使って、mysql サービスの`/docker-entrypoint-initdb.d`　ディレクトリにマウントすれば、マイグレーションが行われる
    * `/docker-entrypoint-initdb.d` に置かれた sql はサービス起動時に実行される
    * ※sqlファイルは、ファイル名のアルファベット順で実行される
    * 詳細: https://hub.docker.com/_/mysql

### コマンド
#### コンテナ（サービス）を強制的に作り直す
```
docker-compose up --force-recreate
```
* <span style="color:orange">`^` + `z` で docker-comose から離れて、ターミナルに戻れる（docker-compose は裏で動いている）</span>

#### サービスを終了する
```
docker-compose down -v
```
* `-v` をつけることで、ボリュームも完全に削除してくれる

#### 背後で動いている docker-compose のログを見る
```
docker-compose logs -f
```
* `^` + `z`　したときや、`-d` フラグをつけて docker-compose up したときに使える。

## fuelphp について
### Tutorial
* part1
  * https://www.youtube.com/watch?v=B0ZG3Mhzml4&t=139s
* part2
  * https://www.youtube.com/watch?v=isEI4ENBzdc

### DB 接続設定
#### docker-compose によるホスト名の名前解決
* mysql のサービスは `mysql` というサービスで docker-compose に定義されているので、`mysql` というホスト名で名前解決ができる。
* よって、mysql のデータベースに接続するときは、`mysql` というホスト名(hostname)でアクセスする

#### 接続情報
* `myblog/fuel/app/config/db.php` のファイルを、下記環境毎のディレクトリにコピーして、環境毎の DB 接続設定を行う
  * `myblog/fuel/app/config/`
    * `development`
    * `production`
    * `staging`

### ルーティング
* `example.com/controller/action` が基本
  * `controller` と `action` の内容によって、ルーティング先が変わる
* 参考:
  * https://www.bnote.net/php/fuelphp/fuelphp05.shtml
  
#### 例: `http://myblog.com:9090/posts/view/1`
* ルーティングにマッチするファイル:
  * `myblog/fuel/app/classes/controller/posts.php`
* クラス名:
  * `class Controller_Posts extends Controller_Template`
* アクション(メソッド):
  ```php=
  public function action_view($id)
  {        
      $post = Model_Post::find("first", array(
          "where" => array(
              "id" => $id
          )
      ));

      $data = array("post" => $post);
      $this->template->title = $post->title ;
      $this->template->content = View::forge('posts/view', $data, false);
  }
  ```
  * `action_view` の引数 `$id` は url の最後のセグメント(数字の1)
    * `$category, $id, $someOtherWeirdSegment`　のように引数を増やして、url のセグメントのパラメータを増やすことができる。
    * 必須引数にしたときに、その部分の url のセグメントがないと、エラーになる