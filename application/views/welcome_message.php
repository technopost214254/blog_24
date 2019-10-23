<?php 
$fields = $this->db->field_data('user');
function th($fields)
{ ?>
		<thead>
			<tr>
				<?php foreach($fields as $rowth)
				{
					echo '<th>'.$rowth->name.'</th>';
				}
				?>
			</tr>
		</thead>
<?php } ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" align="center">
		<?php echo th($fields);?>
		<body>
			<?php
				$sr = 1;
				 foreach($table_row as $row){
				 	echo '<tr>';
					echo '<td>'.$sr++.'</td>';
					echo '<td>'.$row->name.'</td>';
					echo '<td>'.$row->mark.'</td>';
					echo '<td>'.$row->gread.'</td>';
					echo '</tr>';
				}
			?>
			
		</body>
		<?php echo th($fields);?>
		<body>
			<?php 
             $sr=1;
             foreach ($table_row as $a) {
             	if($sr <= 1 && $a->gread == "A" || $sr <= 2 && $a->gread == "B" || $sr <= 3 && $a->gread == "C"){
             		echo '<tr>';
					echo '<td>'.$sr++.'</td>';
					echo '<td>'.$a->name.'</td>';
					echo '<td>'.$a->mark.'</td>';
					echo '<td>'.$a->gread.'</td>';
					echo '</tr>';
				}
             }
			?>
			<tr>
				
			</tr>
		</body>
	</table>
</body>
</html>
