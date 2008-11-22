<?
defined('C5_EXECUTE') or die(_("Access Denied."));

class DashboardThemesMarketplaceController extends Controller {

	protected $helpers = array('html');

	public function view() {
		$themesHelper = Loader::helper('concrete/marketplace/themes'); 
		
		$availableThemes=$themesHelper->getPreviewableList();
		$subnav = array(
			array(View::url('/dashboard/themes/'), t('Current Themes'), 0),
			array(View::url('/dashboard/themes/marketplace'), t('Get More Themes'), 1)
		);
		$this->set('subnav', $subnav);
		$this->set('availableThemes', $availableThemes);
	}
	
}
	
?>