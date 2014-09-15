<?php

class Tx_WfElearning_ViewHelpers_DynamicArrayViewHelper extends Tx_Fluid_ViewHelpers_Form_AbstractFormFieldViewHelper {

	/**
     * Str_Replace Viewhelper
     *
     * @param array obj
     * @param string $type
     * @param integer $num
     * @param integer $anum
     * @return string
     */
    public function render($obj = array(), $type = '', $num = 0, $anum = 0)
    {
    	if(!empty($obj))
    	{
    		if($anum != 0)
    		{
    			$val = $obj[$num]['type_' . $type][$anum];
    		}
    		else
    		{
    			$val = $obj[$num]['type_' . $type];
    		}
    	}
    	else
    	{
    		$val = '';
    	}
    	
    	return $val;
    }
}

?>