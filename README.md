## ダウンロード方法

### git clone
git clone https://github.com/yuuugaaa/laravel_umarche.git

#### ブランチを指定する場合
git clone -b ブランチ名 https://github.com/yuuugaaa/laravel_umarche.git

### zipファイル
GitHub内の「Code」->「Download ZIP」よりダウンロード。

## インストール方法

cd laravel_umarche
composer install
npm install
npm run dev

.env.exampleをコピーして.envファイルを作成し、
下記をご利用の環境に合わせて変更。
<ul>
    <li>DB_CONNECTION=mysql</li>
    <li>DB_HOST=127.0.0.1</li>
    <li>DB_PORT=3306</li>
    <li>DB_DATABASE=laravel_umarche</li>
    <li>DB_USERNAME=umarche_user</li>
    <li>DB_PASSWORD=umarchepass</li>
</ul>

XAMPP/MAMPまたは他の開発環境でDBを起動した後に
php artisan migrate:fresh --seed
と実行してください。(データベーステーブルとダミーデータが追加されればOK)

最後に php artisan key:generate と入力してキーを生成後、
php artisan serve で簡易サーバーを立ち上げ、表示確認してください。

## インストール後の実施事項

### ダミーデータの表示
<P>画像のダミーデータは、<br>
public/imagesフォルダ内に、<br>
sample1.jpg 〜 sample6.jpgとして保存されています。</P>

<P>画像のダミーデータを表示するには、<br>
php artisan storage:link<br>
を実行し、storageフォルダにシンボリックリンクを貼った後、</P>

<P>sample1.jpg 〜 sample6.jpgを、<br>
商品画像は、<br>
storage/app/images/productsフォルダ内に、<br>
店舗画像は、<br>
storage/app/images/shopsフォルダ内に、<br>
保存してください。</P>

<P>※products, shopsフォルダがない場合は作成して下さい。</P>
