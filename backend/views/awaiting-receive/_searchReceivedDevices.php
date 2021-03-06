<?php

use dosamigos\datepicker\DateRangePicker;
use kartik\select2\Select2;
use yii\helpers\Html;
use backend\models\location;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReceivedDevicesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="application-search">

    <?php $form = ActiveForm::begin([
        'action' => ['received-devices/index'],
        'method' => 'get',

    ]);
    //  $model = new \backend\models\ReceivedDevicesSearch()

    ?>
    <div class="panel panel-warning" style="background: #EEE">
        <div class="panel panel-heading">
            <a data-toggle="collapse" href="#collapse1"> Data Search</a>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
            <div class="panel panel-body" style="background: #EEE">
                <div class="row">
                    <div class="col-md-3">
                        <?= $form->field($model, 'serial_no')->textarea(['id' => 'serialReceivedDevices', 'rows' => 10, 'placeholder'=>'Search serial number']) ?>
                    </div>
                    <div class="col-sm-9 no-padding">
                        <div class="col-sm-12" style="padding-top: 3%">
                            <p>Total Numbers: <span id="totalReceivedDevices"></span></p>
                            <p>Duplicate Numbers: <span id="duplicateReceivedDevices"></span></p>
                            <p>Valid Numbers: <span id="validReceivedDevices"></span></p>
                        </div>
                    </div>


                    <div class="col-md-3">

                        <?= $form->field($model, 'border_port')->widget(Select2::classname(), [
                            'data' => \backend\models\BorderPort::getBordersPorts(),
                            'options' => ['placeholder' => '-- select border port --'],
                            'pluginOptions' => [
                                'allowClear' => true,

                            ],
                        ]);
                        ?>
                    </div>
                    <div class="col-md-3">

                        <?= $form->field($model, 'received_from')->widget(Select2::classname(), [
                            // 'data' =>location::getLocation(),
                            //  'data' => \backend\models\Location::getLocation(),
                            'options' => ['placeholder' => '-- select location  --'],
                            'pluginOptions' => [
                                'allowClear' => true,

                            ],
                        ]);
                        ?>

                    </div>
                    <div class="col-md-3">

                        <?= $form->field($model, 'received_by')->widget(Select2::classname(), [
                            'data' => \backend\models\User::getBorderPortUser(),
                            'options' => ['placeholder' => '-- select received user --'],
                            'pluginOptions' => [
                                'allowClear' => true,

                            ],
                        ]);
                        ?>
                    </div>
                </div>

                <div class="form-group" style="float: right; padding-right: 8%">
                    <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('<i class="fa fa-backward"> go Back</i>', ['received-devices/index',], ['class' => 'btn btn-default']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        validateNumbers();
        $('#serialReceivedDevices').keyup(function () {
            if (/\D/g.test(this.value)) {
                this.value = this.value.replace(/\D/g, '');
            }
            this.value = this.value
                .replace(/[\n\r]+/g, "")
                .replace(/(.{10})/g, "$1\n");
            validateNumbers();
        });

        function validateNumbers() {
            var value = $("#serialReceivedDevices").val();
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
                } else if (number.match(/\d{10}/)) {
                    validNumbers.push(number);
                } else {
                    inValidNumbers.push(number);
                }
            }
            $("#totalReceivedDevices").text(numbersArray.length);
            $("#duplicateReceivedDevices").text(duplicateNumbers.length);
            $("#validReceivedDevices").text(validNumbers.length);
            $("#invalidReceivedDevices").text(inValidNumbers.length);
        }
    });
</script>