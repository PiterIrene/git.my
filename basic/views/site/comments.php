<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    
        <div class="row">
            <div class="col-lg-5">

                <? foreach($comments as $comment){ ?>
					<li><?=$comment->name.": ".$comment->text?></li>
				<? }?>
<?= LinkPager::widget(['pagination'=>$pagination])?>
            </div>
        </div>

</div>
