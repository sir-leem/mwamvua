<?php

use dosamigos\datepicker\DatePicker;
use dosamigos\datepicker\DateRangePicker;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReceivedDevicesReportSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="awaiting-receive-report-search">
    <?php $form = ActiveForm::begin([
        'action' => ['sales-trips/index'],
        'method' => 'get',

    ]);
    ?>
    <div class="panel panel-info" style="background: #EEE">
        <div class="panel panel-heading">
            <a data-toggle="collapse" href="#collapse_sales_trip_Report"> Data Search</a>
        </div>
        <div id="collapse_sales_trip_Report" class="panel-collapse collapse">
            <div class="panel panel-body" style="background: #EEE">
                <div class="row">

                    <div class="col-md-4">
                        <?= $form->field($model, 'serial_no')->textarea(['id'=>'serial','rows'=>10, 'placeholder'=>'Search serial number']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $form->field($model, 'tzl')->textInput() ?>
                        <?= $form->field($model, 'date_from')->widget(
                            DatePicker::className(), [
                            // inline too, not bad
                            'inline' => false,
                            // modify template for custom rendering
                            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                            'clientOptions' => [
                                'autoclose' => true,
                                'format' => 'yyyy-mm-dd',

                            ],
                            'options'=>['placeholder'=>'Date From']
                        ])->label(false);?>
                        <?=
                        $form->field($model, 'sales_person')->widget(Select2::classname(), [
                            'data' => \backend\models\User::getAllPortStaff(),
                            'options' => ['placeholder' => 'Select Sales Person '],
                            'pluginOptions' => [
                                'allowClear' => true,

                            ],
                        ]);
                        ?>
                        <?=
                        $form->field($model, 'customer_id')->widget(Select2::classname(), [
                            'data' => \backend\models\User::getCreditCustomer(),
                            'options' => ['placeholder' => 'Select Credit Company '],
                            'pluginOptions' => [
                                'allowClear' => true,

                            ],
                        ]);
                        ?>
                    </div>
                    <div class="col-md-4">
                        <?= $form->field($model, 'vehicle_number')->textInput() ?>
                        <?= $form->field($model, 'date_to')->widget(
                            DatePicker::className(), [
                            // inline too, not bad
                            'inline' => false,
                            // modify template for custom rendering
                            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                            'clientOptions' => [
                                'autoclose' => true,
                                'format' => 'yyyy-mm-dd',

                            ],
                            'options'=>['placeholder'=>'Date To']
                        ])->label(false);?>

                        <?=
                        $form->field($model, 'customer_type_id')->widget(Select2::classname(), [
                            'data' => \backend\models\SalesTrips::getArrayStatus(),
                            'options' => ['placeholder' => 'Select Payment'],
                            'pluginOptions' => [
                                'allowClear' => true,

                            ],
                        ]);
                        ?>
                    </div>

                    <div class="form-group">
                        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('<i class="fa fa-backward"> go Back</i>', ['sales-trips/index',], ['class' => 'btn btn-default']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
