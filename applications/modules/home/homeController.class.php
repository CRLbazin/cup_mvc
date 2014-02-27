<?php
/**
* file for the home controller
* @author XXXXX
* @package YYYYY
* @copyright ZZZZZZ
* @filesource
*/
namespace applications\modules\home;

/**
* AAAAAAAAAAAA
* @version x.x
*/
class homeController extends \library\baseController
{

	/**
	* index of the home page
	*/
	public function indexAction()
	{
		// set layout
		$this->page->setLayout("front");
		
		//display result
		$this->page->addVar('var1', 'Hello World !');
		
	}
	
	/**
	* 404 action
	*/
	public function redirect404Action()
	{
	}
}

?>