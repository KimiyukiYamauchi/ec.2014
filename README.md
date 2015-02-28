1 EC-CUBEソース読み
	1. 「ec」ディレクトリにec-cubeを格納
	1. EC-CUBEのソースを読んで、わかったことを書いていく
	1. 最終的には改造できるようにする
	1. 商品管理 のページクラス<br />
	/ec/data/class/pages/admin/products/LC_Page_Admin_Products.php
		1. DB関連のヘルパークラス<br />
		/ec/data/class/helper/SC_Helper_DB.php<br />
		1. パラメーター管理クラス<br />
		/ec/data/class/SC_FormParam.php<br />
		1. 商品を扱うサービスクラス<br />
		/ec/data/class/SC_Product.php<br />
			1. DBに依存した処理を抽象化するファクトリークラス<br />
			/ec/data/class/db/SC_DB_DBFactory.php<br />
				1. 商品詳細の SQL の「from句」を取得する.<br />
				alldtlSQL<br />
				1. MySQL 固有の処理をするクラス.<br />
				SC_DB_DBFactory_MYSQL<br />
		1. SQLの構築・実行を行う<br />
		/ec/data/class/SC_Query.php<br />
