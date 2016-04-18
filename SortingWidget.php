<?php
namespace plance\widget\sort;

use yii\helpers\Html;

class SortingWidget extends \yii\base\Widget
{
	public $items;
	public $empty;
	public $button;
	
    public function run()
    {
		//Sets
		$items = [];
		$i = 1;
		
		foreach($this -> items as $id => $title)
		{
			$items[] = '<span class="ui-icon ui-icon-arrowthick-2-n-s"></span> '.
					($i++).'. '.
					Html::hiddenInput('sort[]', $id).
					$title;
		}
		
		return $this -> render('sorting',[
			'items'  => $items,
			'empty'  => $this -> empty,
			'button' => $this -> button,
		]);
    }
}
