<?php
use app\controllers\base\Controller;
use yii\widgets\Breadcrumbs;

/**
 * @var \yii\web\View $this
 * @var int $type
 */
?>
<div class="page-header">
    <?php if ($type !== Controller::HEADER_TYPE_NONE) : ?>
        <div class="background-grey">
            <div class="container container-header">
                <?php if ($type === Controller::HEADER_TYPE_TITLE) : ?>
                    <h1><?= $this->title ?></h1>
                <?php else: ?>
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</div>
