<?php

// {{ requires
require_once(CLASS_REALDIR .
"pages/frontparts/bloc/LC_Page_FrontParts_Bloc_Product_Table.php");

/**
 * product_Listのページクラス(拡張).
 *
 * LC_Page_FrontParts_Bloc_Product_Tableをカスタマイズする場合は
 * このクラスで編集する．
 *
 */
class LC_Page_FrontParts_Bloc_Product_Table_Ex 
	extends LC_Page_FrontParts_Bloc_Product_Table{

	// }}}
	// {{{ functions

	/**
	 * Page を初期化する．
	 *
	 * @return void
	 */
	function init(){
		parent::init();
	}

	/**
	 * page のプロセス
	 *
	 * @return void
	 */
	function process(){
		parent::process();
	}

	/**
	 * デストラクタ．
	 *
	 * @return void
	 */
	function destroy(){
		parent::destroy();
	}
}

?>
