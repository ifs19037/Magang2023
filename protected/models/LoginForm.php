<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $username;
	public $password;
	public $rememberMe;

	private $_identity;
	public $errorMessage;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username, password', 'required'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('password', 'authenticate'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe'=>'Remember me next time',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 * @param string $attribute the name of the attribute to be validated.
	 * @param array $params additional parameters passed with rule when being executed.
	 */
	public function authenticate($attribute,$params)
	{
		if (!$this->hasErrors()) {
			$role = Yii::app()->db->createCommand()
				->select('*')
				->from('role')
				->where('username=:username', array(':username' => $this->username))
				->queryRow();

			if ($role === false || !password_verify($this->password, $role['password'])) {
				$this->addError($attribute, 'Incorrect username or password.');
			}
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if ($this->_identity === null) {
			$role = Yii::app()->db->createCommand()
				->select('*')
				->from('role')
				->where('username=:username', array(':username' => $this->username))
				->queryRow();

			if ($role === false || !password_verify($this->password, $role['password'])) {
				$this->errorMessage = 'Incorrect username or password.';
				return false;
			}

			$this->_identity = new UserIdentity($role['username'], $role['password']);
			$this->_identity->id_role = $role['id_role'];
			$this->_identity->role = $role['role'];
			$this->_identity->authenticate();
		}
		if ($this->_identity->errorCode === UserIdentity::ERROR_NONE) {
			$duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
			Yii::app()->role->login($this->_identity, $duration);
			if ($this->_identity->role === 'admin') {
				Yii::app()->controller->redirect(Yii::app()->createUrl('site/index'));
			} else {
				Yii::app()->controller->redirect(Yii::app()->createUrl('site/index'));
			}
			return true;
		} else {
			$this->errorMessage = 'Login failed.';
			return false;
		}
	}
	public function getIdentity(){
		return $this->_identity;
	}

	public function setIdentity($value){
		$this->_identity = $value;
	}

	public function getErrorMessage(){
		return $this->errorMessage;
	}
}
