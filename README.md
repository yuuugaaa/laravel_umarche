## インストール後の実施事項

①画像のダミーデータは、
public/imagesフォルダ内に、
sample1.jpg 〜 sample6.jpgとして保存されています。

画像のダミーデータを表示するには、
php artisan storage:link
を実行し、storageフォルダにシンボリックリンクを貼った後、

sample1.jpg 〜 sample6.jpgを、
商品画像は、
storage/app/images/productsフォルダ内に、
店舗画像は、
storage/app/images/shopsフォルダ内に、
保存してください。

※products, shopsフォルダがない場合は作成して下さい。
