<?php

namespace common\components;

use yii\base\Component;

/**
 * Description of myLabel
 *
 * @author utehn
 */
class sp extends Component {

    public static function ptext($string = 'ข้อความ...', $percent = 99.99) {

        if ($percent < 60) {
            $color = 'red';
        } elseif ($percent >= 60 && $percent < 80) {
            $color = 'yellow';
        } elseif ($percent >= 80) {
            $color = 'green';
        }

        $text_color = 'white';

        if ($color == 'yellow') {
            $text_color = 'black';
        }

        echo "  <span style= \"font-size: smaller;margin-right: 3px;padding: 3px;
                      background-color: $color;color: $text_color \">
                   <strong> $string ($percent) </strong>
                </span> ";
    }

    public static function btext($string = 'ข้อความ...', $percent = 99.99) {

        if ($percent < 60) {
            $color = 'red';
        } elseif ($percent >= 60 && $percent < 80) {
            $color = 'yellow';
        } elseif ($percent >= 80) {
            $color = 'green';
        }

        $text_color = 'white';

        if ($color == 'yellow') {
            $text_color = 'black';
        }

        echo "  <span style= \"padding: 5px;
                      background-color: $color;color: $text_color \">
                   <strong> $percent ($string)  </strong>
                </span> ";
    }
    
   public static function ntext($string = 'ข้อความ...', $color='red') {

        
        $text_color = 'white';

        if ($color == 'yellow') {
            $text_color = 'black';
        }

        echo "  <span style= \"font-size: smaller;margin-right: 3px;padding: 3px;
                      background-color: $color;color: $text_color \">
                   <strong> $string ($percent) </strong>
                </span> ";
    }

}
