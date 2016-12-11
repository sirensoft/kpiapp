<?php
$this->title = $this->context->action->uniqueId;
$this->params['breadcrumbs'][] = "รายการตัวชี้วัดปีงบประมาณ 2560";

use yii\bootstrap\Html;
?>
<div class="kpi-default-index">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered table-condensed">
                <thead>
                <th >#</th>
                <th>ตัวชี้วัด</th>
                <th>เป้าหมาย</th>
                <th>ผลงาน</th>
                <th style="text-align: center">อัตรา</th>
                </thead>
                <tbody>
                    <tr>

                        <td style="text-align: center">1</td>
                        <td width="650">
                            <div >
                                <?php
                                $topic = "เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัยอ เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย";
                                echo Html::a($topic, ['cup', 'topic' => $topic], ['target' => '_blank']);
                                ?>
                            </div>
                            <div style="font-size: smaller;">
                                <span style="margin-right: 2px;padding: 3px;background-color: red;color: white">
                                    เมือง:20
                                </span>
                                <span style="margin-right: 2px;padding: 3px;background-color: red;color: white">
                                    นค:20
                                </span>
                                <span style="margin-right: 2px;padding: 3px;background-color: limegreen;color: white">
                                    ชก:20
                                </span>
                                 <span style="margin-right: 2px;padding: 3px;background-color: red;color: white">
                                    บก:20
                                </span>
                                 <span style="margin-right: 2px;padding: 3px;background-color: red;color: white">
                                    บท:20
                                </span>
                                 <span style="margin-right: 2px;padding: 3px;background-color: red;color: white">
                                    พร:20
                                </span>
                                 <span style="margin-right: 2px;padding: 3px;background-color: limegreen;color: white">
                                    วบ:20
                                </span>
                                 <span style="margin-right: 2px;padding: 3px;background-color: red;color: white">
                                    วท:20
                                </span>
                                 <span style="margin-right: 2px;padding: 3px;background-color: yellow;color: brown">
                                    นป:20
                                </span>
                               

                            </div>
                        </td>
                        <td>509</td>
                        <td>20</td>
                        <td style="color: white; text-align: center" bgcolor="#FF0000">
                            80.00
                        </td>
                    </tr> 

                    <tr>

                        <td style="text-align: center">2</td>
                        <td>เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย</td>
                        <td>509</td>
                        <td>20</td>
                        <td style="color: white; text-align: center" bgcolor="#FF0000">
                            80.00
                        </td>
                    </tr>  

                    <tr>

                        <td style="text-align: center">3</td>
                        <td>เด็กอายุ 0-5 ปีมีพัฒนาการสมวัย</td>
                        <td>509</td>
                        <td>20</td>
                        <td style="color: white; text-align: center" bgcolor="#FF0000">
                            80.00
                        </td>
                    </tr>  
                </tbody>
                <tfoot>

                </tfoot>

            </table>
        </div>

    </div>
</div>
