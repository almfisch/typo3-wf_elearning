<?php

class Tx_WfElearning_ViewHelpers_ReplaceViewHelper extends Tx_Fluid_ViewHelpers_Form_AbstractFormFieldViewHelper {

	/**
     * Str_Replace Viewhelper
     *
     * @param string $type
     * @param integer $num
     * @param array $obj
     * @return string
     */
    public function render($type = '', $num = 0, $obj = array())
    {
    	$this->type = $type;
    	$this->num = $num;
    	$this->obj = $obj;
    	
    	$obj[$num]['type_' . $type];
    	
        $search = '/#(\d)#/';
    	$replace = '"repcall"';
        $content = $this->renderChildren();
        return preg_replace_callback($search, array($this, "repcall"), $content);
    }

    function repcall($backs)
    {
    	$replace = '<input type="text" name="tx_wfelearning_learnfront[formAnswers][' . $this->num . '][type_' . $this->type . '][' . $backs[1] . ']" value="' . $this->obj[$this->num]['type_' . $this->type][$backs[1]] . '">';
    	return $replace;
	}
}

?>