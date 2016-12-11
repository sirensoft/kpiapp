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
$topic = "เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัยอ เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย";
echo Html::a($topic, ['cup', 'topic' => $topic], ['target' => '_blank']);
?>
                            </div>
                            <div>
                                <?= sp::ptext('มอ',59.99) ?>
                                <?= sp::ptext('นค',80.99) ?>
                                <?= sp::ptext('ชก',79.98) ?>
                            </div>
                        </td>
                        <td>509</td>
                        <td>20</td>
                        <td style="text-align: center">
                            <?=sp::btext('ร้อยละ',80.09)?>
                        </td>
                    </tr> 

                     <tr>

                        <td style="text-align: center">2</td>
                        <td >
                            <div style="padding-bottom: 5px">
<?php
$topic = "เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัยอ เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย";
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
                            <?=sp::btext('ต่อแสน',1080.09)?>
                        </td>
                    </tr> 
                   
                </tbody>
                <tfoot>

                </tfoot>

            </table>
        </div>

    </div>
</div>
