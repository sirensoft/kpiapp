<?php
$this->title = $this->context->action->uniqueId;
$this->params['breadcrumbs'][] = "รายการตัวชี้วัดปีงบประมาณ 2560";

use yii\bootstrap\Html;
use common\components\sp;
?>
<div class="kpi-default-index">
    <div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover table-responsive">
                <thead>
                <th >#</th>
                <th width="650">ตัวชี้วัด</th>
                <th>เป้าหมาย</th>
                <th>ผลงาน</th>
                <th style="text-align: center">อัตรา</th>
                </thead>
                <tbody>
                    <tr>

                        <td style="text-align: center">1</td>
                        <td >
                            <div style="padding-bottom: 5px">
<?php
$topic = "ร้อยละโรงพยาบาลตั้งแต่ระดับ F2 ขึ้นไปสามารถให้ยาละลายลิ่มเลือด (Fibrinolytic drug) ในผู้ป่วย STEMI ได้";
echo Html::a($topic, ['cup', 'topic' => $topic], ['target' => '_blank']);
?>
                            </div>
                            <div>
                                <?= sp::ptext('มอ',100) ?>
                                <?= sp::ptext('นค',100) ?>
                                <?= sp::ptext('วท',100) ?>
                                <?= sp::ptext('บก',100) ?>
                                
                            </div>
                        </td>
                        <td>5</td>
                        <td>4</td>
                        <td style="text-align: center">
                            <?=sp::btext('ร้อยละ',80)?>
                        </td>
                    </tr> 

                     <tr>

                        <td style="text-align: center">2</td>
                        <td >
                            <div style="padding-bottom: 5px">
<?php
$topic = "ร้อยละของผู้ป่วยโรคกล้ามเนื้อหัวใจขาดเลือดเฉียบพลัน (STEMI) ได้รับยาละลายลิ่มเลือด และ/หรือ การขยายหลอดเลือดหัวใจ";
echo Html::a($topic, ['cup', 'topic' => $topic], ['target' => '_blank']);
?>
                            </div>
                            <div>
                                <?= sp::ptext('มอ',59.99) ?>
                                <?= sp::ptext('นค',80.99) ?>
                                <?= sp::ptext('ชก',79.98) ?>
                                 <?= sp::ptext('มอ',59.99) ?>
                                <?= sp::ptext('นค',80.99) ?>
                                <?= sp::ptext('ชก',79.98) ?>
                                 <?= sp::ptext('มอ',59.99) ?>
                                <?= sp::ptext('นค',80.99) ?>
                                <?= sp::ptext('ชก',79.98) ?>
                            </div>
                        </td>
                        <td>509</td>
                        <td>20</td>
                        <td style="text-align: center">
                            <?=sp::btext('ร้อยละ',60.09)?>
                        </td>
                    </tr> 
                   
                </tbody>
                <tfoot>

                </tfoot>

            </table>
        </div>

    </div>
</div>
