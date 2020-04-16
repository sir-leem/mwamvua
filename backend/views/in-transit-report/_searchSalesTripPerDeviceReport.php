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
        'action' => ['sales-trips/device'],
        'method' => 'get',

    ]);
    //  $model = new \backend\models\ReceivedDevicesSearch()

    ?>
    <div class="panel panel-info" style="background: #EEE">
        <div class="panel panel-heading">
            <a data-toggle="collapse" href="#collapse_sales_trip_per_Device_Report"> Data Search</a>
        </div>
        <div id="collapse_sales_trip_per_Device_Report" class="panel-collapse collapse">
            <div class="panel panel-body" style="background: #EEE">
                <div class="row">

                    <div class="row">
                        <div class="row">
                            <div class="col-md-3">
                                <?= $form->field($model, 'serial_no')->textarea(['id' => 'serialTripPerSaleReport', 'rows' => 10, 'placeholder' => 'Search serial number']) ?>
                            </div>
                            <div class="col-sm-9 no-padding">
                                <div class="col-sm-12" style="padding-top: 3%">
                                    <p>Total Numbers: <span id="totalTripPerSaleReport"></span></p>
                                    <p>Duplicate Numbers: <span id="duplicateTripPerSaleReport"></span></p>
                                    <p>Valid Numbers: <span id="validTripPerSaleReport"></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding-top: 20px">
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
                        </div>
                        <div class="col-md-4" style="padding-top: 20px">
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
                        </div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        validateNumbers();
        $('#serialTripPerSaleReport').keyup(function () {
            if (/\D/g.test(this.value)) {
                this.value = this.value.replace(/\D/g, '');
            }
            this.value = this.value
                .replace(/[\n\r]+/g, "")
                .replace(/(.{6})/g, "$1\n");
            validateNumbers();
        });

        function validateNumbers() {
            var value = $("#serialTripPerSaleReport").val();
            var numbersArray = value.split('\n');
            var validNumbers = [];
            var duplicateNumbers = [];
            var inValidNumbers = [];

            // remove empty elements
            var index = numbersArray.indexOf("");
            while (index !== -1) {
                numbersArray.splice(index, 1);
                index = numbersArray.indexOf("");
            }

            for (var $i = 0; $i < numbersArray.length; $i++) {
                var number = numbersArray[$i];
                if (validNumbers.indexOf(number) !== -1 || inValidNumbers.indexOf(number) !== -1) {
                    duplicateNumbers.push(number);
                } else if (number.match(/\d{6}/)) {
                    validNumbers.push(number);
                } else {
                    inValidNumbers.push(number);
                }
            }
            $("#totalTripPerSaleReport").text(numbersArray.length);
            $("#duplicateTripPerSaleReport").text(duplicateNumbers.length);
            $("#validTripPerSaleReport").text(validNumbers.length);
            $("#invalidTripPerSaleReport").text(inValidNumbers.length);
        }
    });
</script>