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
			* SC_Queryインスタンスに設定された検索条件を元に並び替え済みの検索結果商品IDの配列を取得する(findProductIdsOrder)
			* SC_Queryインスタンスに設定された検索条件をもとに対象商品数を取得する(findProductCount)
			* SC_Queryインスタンスに設定された検索条件をもとに商品一覧の配列を取得する(lists)
			* 商品IDを指定し、商品一覧を取得する(getListByProductIds)
			* 商品詳細を取得する(getDetail)
			* 商品詳細情報と商品規格を取得する(getDetailAndProductsClass)
			* 商品IDに紐づく商品規格を自分自身に設定する(setProductsClassByProductIds)
			* SC_Query インスタンスに設定された検索条件を使用して商品規格を取得する(getProductsClassByQuery)
			* 商品規格IDから商品規格を取得する(getProductsClass)
			* 複数の商品IDに紐づいた, 商品規格を取得する(getProductsClassByProductIds)
			* 商品IDに紐づいた, 商品規格を全ての組み合わせごとに取得する(getProductsClassFullByProductId)
			* 商品IDをキーにした, 商品ステータスIDの配列を取得する(getProductStatus)
			* 商品ステータスを設定する(setProductStatus)
			* 商品詳細の結果から, 販売制限数を取得する(getBuyLimit)
			* 在庫を減少させる(reduceStock)
			* 商品情報の配列に, 税込金額を設定して返す(setPriceTaxTo)
			* 商品情報の配列に税込金額を設定する(setIncTaxToProducts)
				* 商品情報の配列に税込金額を設定する(setIncTaxToProduct)
			* 商品詳細の SQL を取得する(alldtlSQL)
			* 商品規格詳細の SQL を取得する(prdclsSQL)
			* データの表示状態(？)の設定(getProductDispConditions)
			* 商品が属しているカテゴリーIDを取得する(getCategoryIds)
			* 有効な商品IDかチェックする(isValidProductId)
			1. DBに依存した処理を抽象化するファクトリークラス<br />
			/ec/data/class/db/SC_DB_DBFactory.php<br />
				* 商品詳細の SQL の「from句」を取得する(alldtlSQL)
				1. MySQL 固有の処理をするクラス.<br />
				SC_DB_DBFactory_MYSQL<br />
		1. SQLの構築・実行を行う<br />
		/ec/data/class/SC_Query.php<br />
1. サンプル動作確認
1. 改造箇所
	1. /ec/html/frontparts/bloc/product_table.php を新規作成
	1. /ec/data/class_extends/page_extends/frontparts/bloc/LC_Page_FrontParts_Bloc_Product_Table_Ex.php を新規作成
	1. /ec/data/class/pages/frontparts/bloc/LC_Page_FrontParts_Bloc_Product_Table.php を新規作成
	1. /ec/data/Smarty/templates/default/frontparts/bloc/product_table.tpl を新規作成
	1. insert into dtb_bloc values(10,11,'product_table','product_table.tpl','product_table',now(),now(),'frontparts/bloc/product_table.php',0, null);
