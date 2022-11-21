## インストール後の実施事項

①画像のダミーデータは、
public/imagesフォルダ内に
sample1.jpg 〜 sample6.jpgとして保存されています。

画像のダミーデータを表示するには、
php artisan storage:link
を実行し、storageフォルダにシンボリックリンクを貼った後、

storage/app/images/productsフォルダ内に
sample1.jpg 〜 sample6.jpgを保存してください。

※productsフォルダがない場合は作成して下さい。