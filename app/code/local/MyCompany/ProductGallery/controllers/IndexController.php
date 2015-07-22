<?php
/*
* Controller class has to be inherited from Mage_Core_Controller_action
*/
class MyCompany_ProductGallery_IndexController extends Mage_Core_Controller_Front_Action
{
	
	public function indexAction()
	{
		$this->loadLayout();
		$this->renderLayout();
	}
}
?>