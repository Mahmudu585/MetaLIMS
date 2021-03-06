
<?php

function dropDown_update_for_storage($select_name,$table_name,$field_name,$select_id,$s_field_name,$sample_name,$stored_name,$root){ #send also the query name?, always based on sample name

		$path = $_SERVER['DOCUMENT_ROOT'].$root;
		include($path.'database_connection.php');
			
		$p_select_name = htmlspecialchars($select_name);
		$p_table_name = htmlspecialchars($table_name);
		$p_field_name = htmlspecialchars($field_name);
		$p_select_id = htmlspecialchars($select_id);
		$p_s_field_name = htmlspecialchars($s_field_name);
		$p_sample_name = htmlspecialchars($sample_name);

		//check that $table_name exists in white list
		include_once($path.'functions/white_list.php');
		$check = whiteList($p_table_name,'table'); 
		$check2 = whiteList($p_s_field_name,'column'); 
		$check3 = whiteList($p_field_name,'column'); 
		$check4 = whiteList($p_select_id,'column'); 
		
		if($check == 'true' && $check2 == 'true' && $check3 == 'true' && $check4 == 'true'){
			
			$name1;
			$stmt = $dbc->prepare("SELECT $p_s_field_name FROM storage_info WHERE sample_name = ?");
			if(!$stmt){;
				die('prepare() failed: ' . htmlspecialchars($stmt->error));
			}
			$stmt->bind_param("s",$p_sample_name);
			if ($stmt->execute()){
				$stmt->bind_result($name1);
				while ($stmt->fetch()) {
					$name1 = htmlspecialchars($name1);
					if($name1 != ''){
						$pieces = explode(",",$name1);
						$name1 = $pieces[$stored_name];
					}
					
	
				}
			}
			$stmt->close();

			
			#now get your dropdown select menu and cycle through it till you match above. When you match above make it the selected option
			echo "<select id='$p_select_name' name='$p_select_name' class='fields form-control';'>";
			echo "<option value='0'>-Select-</option>";
			$attr = 'selected="selected"';
			$stmt = $dbc->prepare("SELECT $p_field_name,$p_select_id FROM $p_table_name");
			if(!$stmt){;
				die('prepare() failed: ' . htmlspecialchars($stmt->error));
			}
			if ($stmt->execute()){
				$stmt->bind_result($name,$id);
			
				while ($stmt->fetch()) {
					$id = htmlspecialchars($id);
					$id = trim($id);
					$name = htmlspecialchars($name);
					$name = trim($name);
					$name1 = trim($name1);
					
					if($id == $name1){
						echo '<option value="'.$id.'" selected>'.$name.'</option>';
					}
					else{
						echo '<option value="'.$id.'">'.$name.'</option>';
					}
	
				}
			}
			$stmt->close();
			echo "</select>";
		}	
     	else{
			echo "ERROR: Please check table name";
     	}
 }	

?>
