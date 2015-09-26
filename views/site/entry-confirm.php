<?php
/**
 * Created by PhpStorm.
 * User: Танька-таранька
 * Date: 26.09.2015
 * Time: 2:12
 */

use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>