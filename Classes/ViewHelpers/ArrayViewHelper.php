<?php

class Tx_WfElearning_ViewHelpers_ArrayViewHelper extends Tx_Fluid_ViewHelpers_Form_AbstractFormFieldViewHelper {

	/**
     * Array Viewhelper
     *
     * @param integer $mode
     * @return array
     */
    public function render($mode = 1)
    {
    	$arr = $this->renderChildren();
    	$arr = explode("\r\n", $arr);

		if($mode == 2)
		{
    		foreach($arr as $key => $value)
    		{
    			if(strpos($value, ','))
    			{
    				$arr2 = explode(',', $value);
    			}
    		}

    		if($arr2)
    		{
    			$arr = $arr2;
    		}
    	}

        return $arr;
    }
}

?>