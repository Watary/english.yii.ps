<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WordsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Words';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="words-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Words', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <hr>

    <table id="ListWords" class="display" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Word</th>
            <th>Language</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Word</th>
            <th>Language</th>
        </tr>
        </tfoot>
        <tbody>

        <?php foreach ($ListWords as $key => $value){ ?>
            <tr>
                <td><?= $value->word ?></td>
                <td><?= $value->language ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

