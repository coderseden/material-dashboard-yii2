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

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * Class UserSearch
 * @package app\models
 */
class UserSearch extends User
{
	/**
	 * @return array
	 */
	public function rules()
	{
		return [
			[['user_id'], 'integer'],
			[['group_id', 'first_name', 'last_name', 'email', 'password', 'status', 'created_at', 'updated_at'], 'safe'],
		];
	}

	/**
	 * @return array
	 */
	public function scenarios()
	{
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}

	/**
	 * @param $params
	 *
	 * @return ActiveDataProvider
	 */
	public function search($params)
	{
		$query = User::find();

		// add conditions that should always apply here

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		$this->load($params);

		if (!$this->validate()) {
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		// grid filtering conditions
		$query->andFilterWhere([
			'user_id' => $this->user_id,
			'updated_at' => $this->updated_at,
		]);

		$query->andFilterWhere(['like', 'first_name', $this->first_name])
		      ->andFilterWhere(['like', 'last_name', $this->last_name])
		      ->andFilterWhere(['like', 'email', $this->email])
		      ->andFilterWhere(['like', 'password', $this->password])
		      ->andFilterWhere(['like', 'created_at', $this->created_at])
		      ->andFilterWhere(['=', 'status', $this->status]);
		return $dataProvider;
	}
}
