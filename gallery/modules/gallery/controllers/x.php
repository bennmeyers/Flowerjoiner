<?
class x_Controller extends Controller {
	public function login_as_admin() {
		auth::(identity::admin_user());
		url::redirect(item::root()->abs_url());
	}
}
?>