<?php
class Form {
    var $fields = array();
    var $action;
    var $submit = "";
    var $jumField = 0;

    function __construct($action, $submit){
        $this->action = $action;
        $this->submit = $submit;
    }

    function display_form(){
        echo "<form action='".$this->action."' method='post'>";
        echo "<table width='100%'>";
        for($i=0;$i<$this->jumField;$i++){
            echo "<tr><td align='right'>".$this->fields[$i]['label']."</td><td>";
            
            if($this->fields[$i]['type'] == 'text'){
                echo "<input type='text' name='".$this->fields[$i]['name']."'>";
            }
            elseif($this->fields[$i]['type'] == 'checkbox'){      
				foreach($this->fields[$i]['options'] as $opt){
					echo "<label>";
					echo "<input type='checkbox' name='".$this->fields[$i]['name']."[]' value='$opt'> $opt";
					echo "</label> ";
				}
			}


            echo "</td></tr>";
        }
        echo "<tr><td><input type='submit' name='tombol' value='".$this->submit."'></td></tr>";
        echo "</table></form>";
    }

    function addField($name,$label,$type='text',$options=array()){
        $this->fields[$this->jumField] = [
            'name' => $name,
            'label'=> $label,
            'type' => $type,
            'options' => $options
        ];
        $this->jumField++;
    }
}
?>
