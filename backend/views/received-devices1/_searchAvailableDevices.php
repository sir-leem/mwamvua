<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StockDevicesSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="application-search">

    <?php $form = ActiveForm::begin([
        'action' => ['stock-devices/index'],
        'method' => 'get',

    ]);
    ?>
    <div class="panel panel-info" style="background: #EEE">
        <div class="panel panel-heading">
            <a data-toggle="collapse" href="#collapseAvailableDevices"> Data Search</a>
        </div>
        <div id="collapseAvailableDevices" class="panel-collapse collapse">
            <div class="panel panel-body" style="background: #EEE">
                <div class="row">
                    <div class="col-md-4">
                        <?= $form->field($model, 'serial_no')->textarea(['id'=>'serialAvailableDevices','rows'=>10]) ?>
                    </div>
                    <div class="col-md-8 no-padding">
                        <div class="col-sm-12" style="padding-top: 3%">
                            <p>Total Numbers: <span id="totalAvailableDevices"></span></p>
                            <p>Duplicate Numbers: <span id="duplicateAvailableDevices"></span></p>
                            <p>Valid Numbers: <span id="validAvailableDevices"></span></p>
                        </div>
                    </div>
                </div>

                <div class="form-group" style="float: right">
                    <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('<i class="fa fa-backward"> go Back</i>', ['stock-devices/index',], ['class' => 'btn btn-default']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        validateNumbers();
        $('#serialAvailableDevices').keyup(function () {
            if (/\D/g.test(this.value)) {
                this.value = this.value.replace(/\D/g, '');
            }
            this.value = this.value
                .replace(/[\n\r]+/g, "")
                .replace(/(.{10})/g, "$1\n");
            validateNumbers();
        });

        function validateNumbers() {
            var value = $("#serialAvailableDevices").val();
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
            $("#totalAvailableDevices").text(numbersArray.length);
            $("#duplicateAvailableDevices").text(duplicateNumbers.length);
            $("#validAvailableDevices").text(validNumbers.length);
            $("#invalidAvailableDevices").text(inValidNumbers.length);
        }
    });
</script>