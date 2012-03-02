<?php

require_once LIB . 'User.php';
require_once LIB . 'DBA.php';

/*
 * @author Martin Buckley - MBuckley@gmail.com
 * A base class for all pages
 */
class Page {

	/*
	 * Page name
	 * Printed in page title and used to link to this page
	 */
	const PAGE_NAME = '';

	protected $user;
	protected $db;

	private $headers = array(
		'Accept: application/xml',
		'Content-Type: application/xml',
	);

	/*
	 * Page constructor
	 * Calls constructor on Page
	 */
	public function __construct(){
		if( ! isset($_COOKIE[ini_get('session.name')]) ){
			session_start();
		}
		$this->db = new Database();
		$this->db->connect();
		$this->user = new User($this->db);
	}

	/*
	 * Passes a refference to smarty to use to load templates
	 * @param Smarty instance
	 */
	public function setSmarty($smarty){
		$this->smarty = $smarty;
	}

	/*
	 * Get request on page
	 * @param Array of parameters
	 */
	public function get($data){}

	/*
	 * Post request on page
	 * @param Array of parameters
	 */
	public function post($data){}

	/*
	 * Standard page visit
	 * Displays a list of activities
	 */
	public function visit(){}

	/*
	 * Checks if a passed argument is set
	 * @param String
	 * @return Boolean True if valid
	 */
	protected function valid_arg($arg){
		if( isset($arg) && strlen($arg) > 0 )
			return True;
		return False;
	}

	/*
	 * Checks if the user is logged in or not and displays the apropriate sub menu
	 * @return String the menu
	 */
	protected function userMenu(){
		if( $this->user->isLoggedIn() ){
			$menu = $this->smarty->createTemplate('menu.tpl');
		}else{		
			$menu = $this->smarty->createTemplate('login.tpl');
			$menu->assign('action', 'login');
			$menu->assign('reffer', $this::PAGE_NAME);			
		}
		return $menu;
	}

	/*
	 * Performs a GET request on the specified URI
	 * @param String the resource address
	 * @return Array response
	 */
	protected function xmlGET($uri){
		$ch = curl_init($uri . '.xml' );
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$xmlstr = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		return array(	'code' => $httpCode, 
				'body' => $xmlstr
			 );
	}

	/*
	 * Performs a POST request on the specified URI
	 * @param String the resource address
	 * @param String the document to POST
	 * @return Array response
	 */
	protected function xmlPOST($uri, $xml_send_str){
		$ch = curl_init($uri . '.xml' );
		curl_setopt($ch, CURLOPT_POSTFIELDS,  $xml_send_str);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);		
		$xmlstr = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		return array(	'code' => $httpCode, 
				'body' => $xmlstr
			 );
	}
	
	/*
	 * Performs a PUT request on the specified URI
	 * @param String the resource address
	 * @param String the document to PUT
	 * @return Array response
	 */
	protected function xmlPUT($uri, $xml_send_str){
		$ch = curl_init($uri . '.xml' );
		curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		$user = $this->user->user_id;
		$pass = $this->user->api_key;
		curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_send_str);		
		$xmlstr = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		return array(	'code' => $httpCode, 
				'body' => $xmlstr
			 );
	}

	/*
	 * Performs a DELETE request on the specified URI
	 * @param String the resource address
	 * @return Array response
	 */
	protected function xmlDELETE($uri){
		$ch = curl_init($uri . '.xml' );
		curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		$user = $this->user->user_id;
		$pass = $this->user->api_key;
		curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");		
		$xmlstr = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		return array(	'code' => $httpCode, 
				'body' => $xmlstr
			 );
	}
}

?>
