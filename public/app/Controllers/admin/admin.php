<?php namespace controllers\admin;

use \helpers\session,
	\helpers\url,
	\core\view;

class admin extends \core\controller
{

	private $_adminObct;

	public function __construct()
	{

		$this->_adminObct = new \models\obct();

		if(!Session::get('loggedin')){
			Url::redirect('admin/login');
		}

	}

	public function index()
	{

		$data['title'] = 'Admin';

		$obctContact = $this->_adminObct->getContact();
		$data['contact'] = $obctContact;

		$obctMessageQueue = $this->_adminObct->getMessageQueue();
		$data['messages'] = $obctMessageQueue;

		$whatsNew = $this->_adminObct->getWhatsNew();
		$data['whatsNew'] = $whatsNew;

		$url = $this->_adminObct->getPages();
		$data['url'] = $url;

		View::renderadmintemplate('header',$data);
		View::render('admin/admin', $data);
		View::renderadmintemplate('footer',$data);

	}

	public function about()
	{
		$data['title'] = 'About Us';

		$about = $this->_adminObct->getAbout();
		$data['about'] = $about;

		View::rendertemplate('header', $data);
		View::render('admin/about', $data);
		View::renderadmintemplate('footer');

	}

	public function classes()
	{
		$data['title'] = 'Edit Classes';

		$obctClasses = $this->_adminObct->getClasses();
		$data['classes'] = $obctClasses;

		View::renderadmintemplate('header',$data);
		View::render('admin/classes', $data);
		View::renderadmintemplate('footer');
	}

	public function auditions()
	{
		$data['title'] = 'Auditions';

		View::renderadmintemplate('header', $data);
		View::render('admin/auditions');
		View::renderadmintemplate('footer');
	}

	public function currentShow()
	{
		$data['title'] = 'Current Show';

		$currentShow = $this->_adminObct->getCurrentShow();
		$data['currentShow'] = $currentShow;


		View::renderadmintemplate('header', $data);
		View::render('admin/currentshow', $data);
		View::renderadmintemplate('footer');
	}

	public function pages()
	{
		$data['title'] = 'Page URLs';

		$url = $this->_adminObct->getUrls();
		$data['url'] = $url;

		View::renderadmintemplate('header', $data);
		View::render('admin/url', $data);
		View::renderadmintemplate('footer', $data);
	}

	public function questions()
	{
		$data['title'] = 'FAQ | Questions';

		$faq = $this->_adminObct->getFaq();
		$data['faq'] = $faq;

		View::renderadmintemplate('header', $data);
		View::render('admin/faq', $data);
		View::renderadmintemplate('footer');
	}

	public function messages()
	{
		$data['title'] = 'Message Queue';

		View::renderadmintemplate('header', $data);
		View::render('admin/message');
		View::renderadmintemplate('footer');
	}

}
