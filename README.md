* EC-CUBEソース読み
	- 「ec」ディレクトリにec-cubeを格納
	- EC-CUBEのソースを読んで、わかったことを書いていく
	- 最終的には改造できるようにする
	1.商品管理 のページクラス
	 /ec/data/class/pages/admin/products/LC_Page_Admin_Products.php
		1.商品を扱うサービスクラス 
			SC_Product_Ex extends SC_Product
		 /ec/data/class/SC_Product.php
			1.DBに依存した処理を抽象化するファクトリークラス
		 	SC_DB_DBFactory
			/ec/data/class/db/SC_DB_DBFactory.php
