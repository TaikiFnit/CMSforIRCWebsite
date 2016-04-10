# CMSforIRCWebsite
## Discription
このシステムは、CMS-on-PHP-v2 ( https://github.com/TaikiFnit/CMS-on-PHP-v2 ) をベースとして、情報研究部のホームページ ( http://www.irc.hira-tech.net/ ) にCMSを実際に組み込んだものです。
元のシステムと比べて、データのやり取りをJSONではなく、PHPのechoを直接使用しています。また、ユーザーの管理もデータベースを使用し、securityを高めています。(前回のシステムでは、phpファイルに直接ユーザー情報を記述. not secure.)

## How to use
1. config.phpを設定する。
dirctory内に、config.php.defaultが存在するので、これをコピーして、新たにファイルを配置し、データベースの情報をsettingします。
2. DBの作成, テーブルの作成を行う。
データベース名は任意、テーブルの構造は、/sql/setup.sqlに記述してあるSQL文を読み込むことにより、作成が完了します。
3. Apache等のウェブサーバーに配置。
PHP, MySQLが使えるウェブサーバーにすべてのディレクトリをUploadすることにより、このシステムが使えるようになります。

### テーブルの作成の仕方
#### コマンドラインを使用する方法
1. Terminal(cmd)で、sql dicretocryまで移動(cd)
2. mysqlにログイン (mysql -u user_name -p)
3. DBをuse (use database_name)
4. ファイルより、SQLを実行 (source ./setup.sql)

#### phpMyAdmin等を使用する方法
setup.sql内に書いてあるSQL文をコピーして、作成したデータベースでSQL文を実行する。

---

### Author
Taiki Fnit Watanabe (http://github.com/TaikiFnit)

### LICENCE
MIT