## ダウンロード方法

### ・git clone
git clone https://github.com/yuuugaaa/laravel_umarche.git

#### ブランチを指定する場合
git clone -b ブランチ名 https://github.com/yuuugaaa/laravel_umarche.git

### ・zipファイル
GitHub内の「Code」->「Download ZIP」よりダウンロードしてください。

## インストール方法

①cd laravel_umarche<br>
②composer install<br>
③npm install<br>
④npm run dev<br>

・.env.exampleをコピーして.envファイルを作成し、
下記をご利用の環境に合わせて変更してください。
<ul>
    <li>DB_CONNECTION=mysql</li>
    <li>DB_HOST=127.0.0.1</li>
    <li>DB_PORT=3306</li>
    <li>DB_DATABASE=laravel_umarche</li>
    <li>DB_USERNAME=umarche_user</li>
    <li>DB_PASSWORD=umarchepass</li>
</ul>

・XAMPP/MAMPまたは他の開発環境でDBを起動した後に<br>
php artisan migrate:fresh --seed
と実行してください。(データベーステーブルとダミーデータが追加されればOK)

・最後に php artisan key:generate と入力してキーを生成後、<br>
php artisan serve で簡易サーバーを立ち上げ、表示確認してください。

## インストール後の実施事項

### ダミーデータの表示
画像のダミーデータは、
public/imagesフォルダ内に、<br>
sample1.jpg 〜 sample6.jpgとして保存されています。

画像のダミーデータを表示するには、<br>
php artisan storage:link
を実行し、storageフォルダにシンボリックリンクを貼った後、

sample1.jpg 〜 sample6.jpgを、<br>
商品画像は、
storage/app/images/productsフォルダ内に、<br>
店舗画像は、
storage/app/images/shopsフォルダ内に、<br>
保存してください。

※products, shopsフォルダがない場合は作成して下さい。
