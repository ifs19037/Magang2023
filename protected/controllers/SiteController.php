<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if (isset($_POST['LoginForm'])) {
            $username = $_POST['LoginForm']['username'];
            $password = $_POST['LoginForm']['password'];
            $duration = 3600 * 24 * 1;

            // Check in the "role" table
            $role = Yii::app()->db->createCommand()
                ->select('*')
                ->from('role')
                ->where('username=:username', array(':username' => $username))
                ->queryRow();

            if ($role !== false && password_verify($password, $role['password'])) {
                // Yii::app()->user->login($role['user_id'], $duration);
                $this->redirect(Yii::app()->createUrl('site/index'));
            } else {
                $model->errorMessage = 'Username or password is incorrect.';
            }
            // else {
            //     // Check in the "user" table
            //     $user = Yii::app()->db->createCommand()
            //         ->select('*')
            //         ->from('user')
            //         ->where('username=:username', array(':username' => $username))
            //         ->queryRow();

            //     if ($user !== false && password_verify($password, $user['password'])) {
            //         Yii::app()->user->login($user['id'], 'user');
            //         $this->redirect(Yii::app()->createUrl('site/index'));
            //     }
            // }
        }
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}