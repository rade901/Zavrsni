<?php

class CC_GF_SuperClass extends CC_Utility {

	/** @var GF_Constant_Contact */
	private $loader = null;

	/** @var CC_List */
	private $CC_List = null;

	/** @var CC_Contact */
	private $CC_Contact = null;

	/** @var CC_Utility */
	private $CC_Utility = null;

	/** @var CC_Campaign */
	private $CC_Campaign = null;

	/** @var string API path for server calls */
	public $apiPath = 'https://api.constantcontact.com/ws/customers/';

	static $instance = null;

	/**
	 * @param string $user
	 * @param string $password
	 * @param GF_Constant_Contact $loader
	 *
	 * @return CC_GF_SuperClass
	 */
	static public function get_instance( $user = '', $password = '', $loader = null ) {

		if ( ! self::$instance ) {
			self::$instance = new self( $user, $password, $loader );
		}

		return self::$instance;
	}

	/**
	 * CC_GF_SuperClass constructor.
	 *
	 * @param null $user
	 * @param null $password
	 * @param GF_Constant_Contact $loader
	 */
	public function __construct( $user = null, $password=null, $loader = null ) {

		$this->login = $user;
		$this->password = $password;
		$this->loader = $loader;

		/**
		 * @param string $actionBy Who is creating the entries? If the business and not the customer, "ACTION_BY_CONTACT". Otherwise, "ACTION_BY_CUSTOMER".
		 */
		$actionBy = apply_filters('gravity_forms_constant_contact_action_by', 'ACTION_BY_CONTACT');

		if($actionBy === 'ACTION_BY_CONTACT' || $actionBy === 'ACTION_BY_CUSTOMER') {
			$this->actionBy = $actionBy;
		} else {
			$this->actionBy = 'ACTION_BY_CUSTOMER';
		}

		$this->curl_debug = isset($_GET['debug']) && ( function_exists('current_user_can') && current_user_can( 'manage_options' ) );

		$this->CC_List = $this->get_object( 'CC_List' );
		$this->CC_Contact = $this->get_object( 'CC_Contact' );
		$this->CC_Campaign = $this->get_object( 'CC_Campaign' );
		$this->CC_Utility = $this->get_object( 'CC_Utility' );

		parent::__construct();
	}

	/**
	 * @return array|false
	 */
	public function lists() {

		$dont_cache = isset( $_GET['cache'] ) && GFCommon::current_user_can_any( 'manage_options' );

		if( ! $dont_cache && $lists = get_transient( 'gf_ctct_lists_' . $this->login ) ) {
			return $lists;
		}

		unset( $_GET['cache'] );

		$lists = $this->CC_List()->getLists();

		if ( $lists ) {
			set_transient( 'gf_ctct_lists_' . $this->login, $lists, HOUR_IN_SECONDS );
		}

		return $lists;
	}

	/**
	 * Check whether a subscriber exists at $email
	 *
	 * @param string $email
	 *
	 * @return bool|string False if not found; string numeric ID if found
	 */
	public function subscriber_exists( $email = '' ) {

		if ( GFCommon::is_invalid_or_empty_email( $email ) ) {
			return false;
		}

		return $this->CC_Contact()->subscriberExists( $email );
	}

	/**
	 * @param string $email
	 *
	 * @return array|false False if invalid email or contact not found. Array of contact details if found.
	 */
	public function get_subscriber_details( $email = '' ) {

		if ( GFCommon::is_invalid_or_empty_email( $email ) ) {
			return false;
		}

		return $this->CC_Contact()->getSubscriberDetails( $email );
	}

	/**
	 * Search by email address
	 *
	 * @param string $email
	 *
	 * @return array|bool
	 */
	public function search( $email = '' ) {

		if ( GFCommon::is_invalid_or_empty_email( $email ) ) {
			return false;
		}

		return $this->CC_Contact()->getSubscribers( $email );
	}

	/**
	 * @param null $user
	 * @param null $password
	 *
	 * @return bool
	 */
	public function is_valid_login(){

		$api = $this->CC_List();

		ob_start();
		$lists = $api->getAccountLists();
		$warnings = ob_get_clean();

		update_option('gravity_forms_cc_valid_api', !empty($lists));

		return empty($lists) ? false : true;
	}

	/**
	 * Factory for fetching and populating CC_Utility objects
	 *
	 * The CC_Utility objects need to have login and password set.
	 *
	 * @param string $class_name The class name
	 *
	 * @return CC_Contact|CC_List|CC_Utility|CC_Campaign|false
	 */
	public function get_object( $class_name = 'CC_List' ) {

		// The object has already been created
		if ( ! empty( $this->{$class_name} ) ) {
			return $this->{$class_name};
		}

		// How the heck did this happen?
		if ( ! class_exists( $class_name ) ) {
			return false;
		}

		$object = new $class_name();

		$object->login    = $this->login;
		$object->password = $this->password;

		if ( isset( $object->apiPath ) ) {
			// The API path has already been generated by the class; there's no overriding it, so we regenerate it instead
			$object->apiPath = str_replace( 'USERNAME', '', (string) $this->apiPath ) . trim( $this->login );
		}

		$object->actionBy   = $this->actionBy;
		$object->curl_debug = $this->curl_debug;

		if ( isset( $object->apikey ) ) {
			$object->requestLogin = $this->apikey . '%' . $this->login . ':' . $this->password;
		}

		return $object;
	}

	/**
	 * @return CC_List
	 */
	public function CC_List() {
		return $this->get_object('CC_List');
	}

	/**
	 * @return CC_Campaign
	 */
	public function CC_Campaign() {
		return $this->get_object('CC_Campaign');
	}

	/**
	 * @return CC_Utility
	 */
	public function CC_Utility() {
		return $this->get_object('CC_Utility');
	}

	/**
	 * @return CC_Contact
	 */
	public function CC_Contact() {
		return $this->get_object('CC_Contact');
	}

}