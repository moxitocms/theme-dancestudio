<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\widgets\categoryList\CategoryList;
use frontend\widgets\portfolioSlider\PortfolioSlider;
use frontend\widgets\teamList\TeamList;
use frontend\widgets\twigRender\TwigRender;
use frontend\widgets\videoList\VideoList;
use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */
$this->params['breadcrumbs'] = [];
foreach ($model->parents as $parent) {
    if ($parent->depth > 0) {
        $this->params['breadcrumbs'][] = [
            'label' => $parent->name,
            'url' => $parent->present()->getUrl()
        ];
    }
}
$this->params['breadcrumbs'][] = $model->name;
$tseny = $model->present()->getRelationCategoryByTypeKey('tseny');
?>
<div class="content-block">
    <h1 class="title-home"><?= Yii::$app->seo->getH1() ?></h1>
    <?php if ($model->description) : ?>
    <div class="category__body">
        <?php if ($hasMedia) : ?>
            <div class="image">
                <img src="<?= $model->media->image(375, 300, false) ?>" alt="<?= Html::encode($model->name) ?>">
            </div>
        <?php endif; ?>
        <?= TwigRender::widget([
            'text' => $model->description,
        ]) ?>
        <div class="clearfix"></div>
    </div>
    <?php endif; ?>
</div>

<?php if ($model->childrenActive) : ?>
    <div class="content-block content-block--children-items">
        <?= CategoryList::widget([
            'models' => $model->childrenActive,
        ]) ?>
    </div>
<?php endif; ?>

<?php if ($teams = $model->present()->getRelationCategoryByTypeKey('team')) : ?>
<div class="content-block content-block--sotrudniki">
    <div class="title-home">
        Сотрудники
    </div>
    <?= TeamList::widget([
        'models' => $teams,
    ]) ?>
</div>
<?php endif; ?>

<?php if ($videos = $model->present()->getRelationCategoryByTypeKey('video')) : ?>
<div class="content-block content-block--video">
    <div class="title-home">
        Видео
    </div>
    <?= VideoList::widget([
        'models' => $videos,
    ]) ?>
</div>
<?php endif; ?>

<?php if ($model->portfolio) : ?>
<div class="content-block content-block--sotrudniki">
    <?= PortfolioSlider::widget([
        'category' => $model,
    ]); ?>
</div>
<?php endif; ?>

<?php if ($model->block_price_description ||
    $tseny ||
    $model->block_types_description ||
    $model->block_additional_info_description
) : ?>
<div class="content-block">
    <?php if ($model->block_price_description || $tseny) : ?>
        <div class="title-home">
            <?= $model->block_price_title ?: 'Стоимость' ?>
        </div>
        <?php if ($model->block_price_description) : ?>
            <div class="editor-content">
                <?= TwigRender::widget([
                    'text' => $model->block_price_description,
                ]) ?>
            </div>
        <?php endif; ?>
        <?php if ($tseny) : ?>
            <?php foreach ($tseny as $tsena) : ?>
                <?php if ($tsena->description) : ?>
                    <div class="m-b-25"></div>
                    <div class="editor-content">
                        <?= TwigRender::widget([
                            'text' => $tsena->description,
                        ]) ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ($model->block_types_description) : ?>
        <?php if ($model->block_types_title) : ?>
            <div class="title-home">
                <?= $model->block_types_title ?>
            </div>
        <?php endif; ?>
        <?= TwigRender::widget([
            'text' => $model->block_types_description,
        ]) ?>
    <?php endif; ?>

    <?php if ($model->block_additional_info_description) : ?>
        <?php if ($model->block_additional_info_title) : ?>
            <h2 class="title-home">
                <?= $model->block_additional_info_title ?>
            </h2>
        <?php endif; ?>
        <div class="category__additional-info">
            <div class="editor-content">
                <?= TwigRender::widget([
                    'text' => $model->block_additional_info_description,
                ]) ?>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php endif; ?>
