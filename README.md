1. EC-CUBEソース読み<br />
	1. 「ec」ディレクトリにec-cubeを格納
	1. EC-CUBEのソースを読んで、わかったことを書いていく
	1. 最終的には改造できるようにする
	1. 商品管理 のページクラス<br />
	/ec/data/class/pages/admin/products/LC_Page_Admin_Products.php<br />
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
1. 改造箇所
	1. /ec/html/frontparts/bloc/product_table.php を新規作成
	1. /ec/data/class_extends/page_extends/frontparts/bloc/LC_Page_FrontParts_Bloc_Product_Table.php を新規作成
	1. /ec/data/class/pages/frontparts/bloc/LC_Page_FrontParts_Bloc_Product_Table.php を新規作成
	1. /ec/data/Smarty/templates/default/frontparts/bloc/product_table.tpl を新規作成
	1. insert into dtb_bloc values(10,11,'product_table','product_table.tpl','product_table',now(),now(),'frontparts/bloc/product_table.php',0, null);
1. サンプルの動作確認
