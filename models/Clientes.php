<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $id
 * @property string $Nombre
 * @property string $Direccion
 * @property string|null $RFC
 * @property string $Telefono
 * @property string $Correo
 */
class Clientes extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['RFC'], 'default', 'value' => null],
            [['Nombre', 'Direccion', 'Telefono', 'Correo'], 'required'],
            [['Nombre'], 'string', 'max' => 15],
            [['Direccion'], 'string', 'max' => 100],
            [['RFC'], 'string', 'max' => 13],
            [['Telefono'], 'string', 'max' => 10],
            [['Correo'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'Direccion' => 'Direccion',
            'RFC' => 'Rfc',
            'Telefono' => 'Telefono',
            'Correo' => 'Correo',
        ];
    }

}
