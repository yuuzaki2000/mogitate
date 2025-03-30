# mogitate

##　環境構築
　Dockerビルド
 1. git clone git@github.com:yuuzaki2000/mogitate.git
 2. Dockerデスクトップを立ち上げる
 3. docker-compose up -d --build
 4. .envに以下の環境変数を追加
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

 6. アプリケーションキーの作成　　php artisan key:generate
 7. マイグレーションの実行      php artisan migrate
 8. シーディングの実行      php artisan db:seed
##使用技術
・PHP　7.4.9
・Laravel 8.83.29
・MySQL  8.0.26
・nginx  1.21.1
##ER図![mogitate](https://github.com/user-attachments/assets/4e5a0f2b-b90c-4a43-a41d-5d4590e37df4)



## URL
  開発環境： http://localhost/products/
  phpMyAdmin : http://localhost:8080/
