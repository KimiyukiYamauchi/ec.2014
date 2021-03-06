<?php

// {{{ requires
require_once CLASS_REALDIR . 'pages/frontparts/bloc/LC_Page_FrontParts_Bloc.php';

/**
 *
 * @package Page
 */
class LC_Page_FrontParts_Bloc_Product_Table extends LC_Page_FrontParts_Bloc{

	// }}}
	// {{{ functions
	
	/**
	 * Page を初期化する．
	 *
	 * @return void
	 */
	function init(){
		parent::init();
		$bloc_file = 'product_table.tpl';
		$this->setTplMainpage($bloc_file);
	}

	/**
	 * Page のプロセス．
	 *
	 * @return void
	 */
	function process(){
		if(define("MOBILE_SITE") && MOBILE_SITE){
			$objView = new SC_MobileView();
		}else{
			$objView = new SC_SiteView();
		}

		$objQuery = new SC_Query_Ex();
		$objProduct = new SC_Product_Ex();

	//	$this->arrProducts = $objProduct->lists($objQuery);
		$productId = 1;
		$classes = $objProduct->getProductsClassFullByProductId($productId);
		//var_dump($class);
		print "<ul>\n";
		foreach($classes as $class){
			print '<li>' . $class['classcategory_name1'] . '/' . 
				$class['classcategory_name2'] . ': '. $class['price01'] . "</li>\n";
		}
		print "</ul>\n";


//		$objView->assignobj($this);
//		$objView->display($this->tpl_mainpage);

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
