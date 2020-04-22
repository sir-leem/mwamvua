<?php
/**
 * Created by PhpStorm.
 * User: adotech
 * Date: 5/16/18
 * Time: 3:29 PM
 */

namespace backend\models;


class Receipt
{

    public $receipt;
    public $receipt_bill;

    public static function findCash()
    {

        $model = SalesTrips::find()->all();

        if ($model != null) {
            $receipt =date('HdmY').'CASH'.sprintf("%06d", count($model) + 1);
            return $receipt;
        }
        else {

            $receipt =date('HdmY').'CASH'.'000001';
            return $receipt;

        }

    }

    public static function findBill()
    {

        $model = SalesTrips::find()->all();

        if ($model != null) {
            $receipt =date('HdmY').'BILL'.sprintf("%06d", count($model) + 1);
            return $receipt;
        }
        else {

            $receipt =date('HdmY').'BILL'.'000001';
            return $receipt;

        }

    }

    public static function findAutomationCode()
    {

        $model = AutomationSettings::find()->all();

        if ($model != null) {
            $receipt ='RT/'.date('Y').'/'.sprintf("%04d", count($model) + 1);
            return $receipt;
        }
        else {

            $receipt ='RT/'.date('Y').'/0001';
            return $receipt;

        }

    }



}