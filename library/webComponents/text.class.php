<?phpnamespace library\webComponents;/*** text web component* @author cyril bazin* @package cu.core* @version 1.0*/class text extends \library\field{	public function build()	{		$widget = '';				if(!empty($this->inputgroups))			$widget .= '<div class="input-group"><span class="input-group-addon"><span class="'.$this->inputgroups.'"></span></span>';				$widget .= '<input class="form-control" placeholder="'.$this->title.'" type="text" name="'.$this->name.'"';						if(!empty($this->required))			$widget .= 'required ';						if (!empty($this->value))			$widget .= ' value="'.htmlspecialchars($this->value).'"';				if (!empty($this->maxLength))			$widget .= ' maxlength="'.$this->maxLength.'"';					if (!empty($this->class))			$widget .= ' class="'.$this->class.'"';								if(!empty($this->readonly))			$widget .= ' readonly="'.$this->readonly.'"';					$widget .= ' />';				if(!empty($this->data))			$widget .= '			<div class="alert" style="float:right;width:60%;">				<button type="button" class="close" data-dismiss="alert">&times;</button>'.$this->data.'			</div>';				return $widget;	}}?>