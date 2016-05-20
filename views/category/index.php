<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $dataProviderProducts yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Categories');
?>
<?php if ($dataProvider->getTotalCount()):?>

<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Category'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'label' => 'Ссылка',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a(
                        $data->title,
                        ['category/index', "id" => $data->id]
                    );
                }
            ],
            'image_url:image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
<?php endif;?>

<?php if ($dataProviderProducts->getTotalCount()):?>
<div class="product-index">

    <h1><?= Html::encode(Yii::t('app', 'Products')) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Product'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProviderProducts,
        'columns' => [
            'title',
            'image_url:image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
<?php endif;?>