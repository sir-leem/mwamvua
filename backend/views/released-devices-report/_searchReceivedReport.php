<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReceivedDevicesReportSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="awaiting-receive-report-search">
    <?php $form = ActiveForm::begin([
        'action' => ['received-devices-report/index'],
        'method' => 'get',

    ]);

    ?>
    <div class="panel panel-warning" style="background: #EEE">
        <div class="panel panel-heading">
            <a data-toggle="collapse" href="#collapse2"> Data Search</a>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel panel-body" style="background: #EEE">
                <div class="row">

                    <div class="col-md-3">
                        <?= $form->field($model, 'serial_no')->textarea(['id' => 'serialReceivedReport', 'rows' => 10, 'placeholder'=>'Search serial number']) ?>
                    </div>
                    <div class="col-sm-9 no-padding">
                        <div class="col-sm-12" style="padding-top: 3%">
                            <p>Total Numbers: <span id="total"></span></p>
                            <p>Duplicate Numbers: <span id="duplicate"></span></p>
                            <p>Valid Numbers: <span id="valid"></span></p>
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

                    <div class="form-group">
                        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('<i class="fa fa-backward"> go Back</i>', ['received-devices-report/index', ], ['class' => 'btn btn-default']) ?>
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
        $('#serialReceivedReport').keyup(function () {
            if (/\D/g.test(this.value)) {
                this.value = this.value.replace(/\D/g, '');
            }
            this.value = this.value
                .replace(/[\n\r]+/g, "")
                .replace(/(.{10})/g, "$1\n");
            validateNumbers();
        });

        function validateNumbers() {
            var value = $("#serialReceivedReport").val();
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
            $("#total").text(numbersArray.length);
            $("#duplicate").text(duplicateNumbers.length);
            $("#valid").text(validNumbers.length);
            $("#invalid").text(inValidNumbers.length);
        }
    });
</script>