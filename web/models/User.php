<?php

/**
 *
 * @package    Material Dashboard Yii2
 * @author     CodersEden <hello@coderseden.com>
 * @link       https://www.coderseden.com
 * @copyright  2020 Material Dashboard Yii2 (https://www.coderseden.com)
 * @license    MIT - https://www.coderseden.com
 * @since      1.0
 */

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $user_id
 * @property int|null $group_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $auth_key
 * @property string|null $access_token
 * @property string|null $password
 * @property string|null $password_reset_key
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
	/**
	 * @var
	 */
	public $passwd = '';

	/**
	 * Constants
	 */
	const SCENARIO_CREATE = 'create';
	const SCENARIO_UPDATE = 'update';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    public function behaviors() {
	    $behaviors = parent::behaviors();

	    // auto fill timestamp columns.
	    if ($this->hasAttribute('created_at') || $this->hasAttribute('updated_at')) {
		    $behavior = [
			    'class' => TimestampBehavior::class,
			    'value' => new Expression('NOW()'),
		    ];
		    if ($this->hasAttribute('created_at')) {
			    $behavior['createdAtAttribute'] = 'created_at';
		    } else {
			    $behavior['createdAtAttribute'] = null;
		    }
		    if ($this->hasAttribute('updated_at')) {
			    $behavior['updatedAtAttribute'] = 'updated_at';
		    } else {
			    $behavior['updatedAtAttribute'] = null;
		    }
		    $behaviors[] = $behavior;
	    }
	    return $behaviors;
    }

	/**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
	        [['email', 'first_name', 'last_name'], 'trim'],
	        ['email', 'unique'],
	        ['email', 'email'],
	        [['first_name', 'last_name', 'email'], 'string', 'max' => 100],
	        [['passwd'], 'string', 'length' => [6, 100]],
	        [['group_id'], 'integer'],
	        [['first_name', 'last_name', 'email','passwd'], 'required', 'on' => self::SCENARIO_CREATE],
	        [['first_name', 'last_name', 'email'], 'required', 'on' => self::SCENARIO_UPDATE],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'group_id' => 'Group ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
            'password' => 'Password',
	        'passwd'   => 'Password',
            'password_reset_key' => 'Password Reset Key',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

	public function attributeHints() {
		return [
			'first_name'        => \Yii::t('app', 'Enter your First Name'),
			'last_name'         => \Yii::t('app', 'Enter your Last Name'),
			'email'             => \Yii::t('app', 'Enter your Email'),
			'passwd'            => \Yii::t('app', 'Pick your  Password'),
			'group_id'          => \Yii::t('app', 'Pick a Group for this user'),
			'status'            => \Yii::t('app', 'Pick a status for this user'),
		];
	}

	/**
	 * @param bool $insert
	 *
	 * @return bool
	 * @throws \yii\base\Exception
	 */
	public function beforeSave($insert)
	{
		if (!parent::beforeSave($insert)) {
			return false;
		}

		if (!empty($this->passwd)) {
			$this->password = static::hashPassword($this->passwd);
		}
		return true;
	}

	public function getStatusesList()
	{
		return [
			'inactive' => \Yii::t('app', 'Inactive'),
			'active'   => \Yii::t('app', 'Active'),
		];
	}

	/**
	 * @param int|string $user_id
	 *
	 * @return User|IdentityInterface|null
	 */
	public static function findIdentity($user_id)
	{
		return static::findOne($user_id);
	}

	/**
	 * @param mixed $token
	 * @param null $type
	 *
	 * @return User|IdentityInterface|null
	 */
	public static function findIdentityByAccessToken($token, $type = null)
	{
		return static::findOne(['access_token' => $token, 'status' => 'active']);
	}

	/**
	 * @param $email
	 *
	 * @return User|null
	 */
	public static function findByEmail($email)
	{
		return static::findOne(['email' => $email]);
	}

	/**
	 * @param $key
	 *
	 * @return User|null
	 */
	public static function findByPasswordResetKey($key)
	{
		return static::findOne(['password_reset_key' => $key, 'status' => 'active']);
	}

	/**
	 * @return int|string
	 */
	public function getId()
	{
		return $this->user_id;
	}

	/**
	 * @return string|null
	 */
	public function getAuthKey()
	{
		return $this->auth_key;
	}

	/**
	 * @param string $authKey
	 *
	 * @return bool
	 */
	public function validateAuthKey($authKey)
	{
		return $this->getAuthKey() === $authKey;
	}

	/**
	 * @param $password
	 *
	 * @return bool
	 */
	public function validatePassword($password)
	{
		return \Yii::$app->security->validatePassword($password, $this->password);
	}

	/**
	 * @param $password
	 *
	 * @return string
	 * @throws \yii\base\Exception
	 */
	public static function hashPassword($password)
	{
		return \Yii::$app->security->generatePasswordHash($password);
	}

	/**
	 * @return string
	 */
	public function getFullName()
	{
		return trim(sprintf('%s %s', $this->first_name, $this->last_name));
	}
}
