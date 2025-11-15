# contact-form11
git cloneしたらやること  
docker-compose up -d --build  
docker-compose exec php bash  
composer install  
.env ファイルの作成(コンテナ上で)  
cp .env.example .env  
テキストを参照
データベースが存在しているかを確認  
画面表示する前にテーブル作成しマイグレーションしておくこと  
php artisan key:generate  
## データベースを保存する  
モデル作成  
