<?php
use yii\helpers\Html;
use yii\jui\Sortable;
use yii\bootstrap\ActiveForm;

use app\modules\y2cms\helper\Lng;

$this -> registerCss("
	.jquery-sortable li {
		list-style: none;
	}
	.jquery-sortable {
		list-style-type: none;
		margin: 0;
		padding: 0;
	}

	.jquery-sortable li {
		margin: 0 3px 3px 3px;
		padding: 4px;
		padding-left: 24px;
		height: 30px;
	}

	.jquery-sortable li span {
		position: absolute;
		margin-left: -20px;
	}
");
?>

<?php if(sizeof($items) > 0): ?>
	<?php $Form = ActiveForm::begin(); ?>

		<?php
		echo Sortable::widget([
			'items' => $items,
			'options' => ['tag' => 'ul', 'class' => 'jquery-sortable'],
			'itemOptions' => ['tag' => 'li', 'class' => 'ui-state-default'],
		]);
		?>

		<div class="form-group">
			<?php echo Html::submitButton($button, ['class' => 'btn btn-primary center-block']) ?>
		</div>
	<?php ActiveForm::end(); ?>
<?php else: ?>
	<div class="alert alert-info" role="alert">
		<?php echo $empty ?>
	</div>
<?php endif;?>