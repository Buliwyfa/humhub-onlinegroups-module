<?php

namespace humhub\modules\onlinegroups\models;

use Yii;

class ConfigureForm extends \yii\base\Model
{
    public $panelTitle;
    public $maxMembers;

    public function rules()
    {
        return [
            [['maxMembers', 'panelTitle'], 'required'],
            ['maxMembers', 'integer', 'min' => '0'],
        ];
    }
    public function attributeLabels()
    {
        return [
            'panelTitle' => Yii::t('base', 'The panel title for the dashboard widget.'),
            'maxMembers' => Yii::t('base', 'The number of max. Online Groups that will be shown.'),
        ];
    }
}