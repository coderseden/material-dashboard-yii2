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

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m200216_223841_create_user_table extends Migration
{
	/**
	 * @inheritdoc
	 */
	public function up()
	{
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%user}}', [
			'user_id'               => $this->primaryKey(),
			'group_id'              => $this->integer()->defaultValue(null),
			'first_name'            => $this->string(100),
			'last_name'             => $this->string(100),
			'email'                 => $this->string(150),
			'auth_key'              => $this->string(64),
			'access_token'          => $this->string(64),
			'password'              => $this->string(64),
			'password_reset_key'    => $this->string(32)->defaultValue(null),
			'status'                => $this->char(15)->notNull()->defaultValue('inactive'),
			'created_at'            => $this->dateTime()->notNull(),
			'updated_at'            => $this->dateTime()->notNull(),
		], $tableOptions);

		$user = new \app\models\User();
		$user->first_name       = 'CodersEden';
		$user->last_name        = 'Team';
		$user->email            = 'hello@coderseden.com';
		$user->passwd           = 'admin123';
		$user->status           = 'active';
		$user->save();

		$user = new \app\models\User();
		$user->first_name       = 'John';
		$user->last_name        = 'Doe';
		$user->email            = 'john@mail.com';
		$user->passwd           = 'admin123';
		$user->status           = 'active';
		$user->save();

		$user = new \app\models\User();
		$user->first_name       = 'Mike';
		$user->last_name        = 'Harrison';
		$user->email            = 'mike@mail.com';
		$user->passwd           = 'admin123';
		$user->status           = 'active';
		$user->save();
	}

	/**
	 * @inheritdoc
	 */
	public function down()
	{
		$this->getDb()->createCommand('SET FOREIGN_KEY_CHECKS = 0')->execute();

		$this->dropTable('{{%user}}');

		$this->getDb()->createCommand('SET FOREIGN_KEY_CHECKS = 1')->execute();
	}
}
