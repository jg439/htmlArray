<?php

class tableArray{
	
	/*public array element */
	public $table = array();
	
	/*Function to create number of elements*/
	
	public function create_array($num_elements) {
        
		
		$r = array();
		
				
				for ($i = 0; $i < $num_elements; $i++){
					 
						if($i ==0)
							$r[] = array ('First Name' => 'Julia', 'Last Name' => 'Garcia', 'UCID' => 'jg439');
						elseif($i ==1)
							$r[] = array ('First Name' => 'Thomas', 'Last Name' => 'Johnson', 'UCID' => 'tj33');
						elseif($i ==2)
							$r[] = array ('First Name' => 'Taylor', 'Last Name' => 'Turner', 'UCID' => 'tt24');
						
						else 
							$r[] = array ('First Name' => 'firstname', 'Last Name' => 'lastname', 'UCID' => 'ucid');
			}
				return $r;
	}
	
	
}


$table = new tableArray();

$num =5;

($table->create_array($num));

?>
<html lang = "en">
	    
		<head>
		
			<title>Table Array</title>
				<meta charset = "utf-8">
				<meta name = "description" content="Table array:names, last names, UCID and Major">
				<link rel = "stylesheet" type ="text/css" href = "styles.css">
		
		</head>
		
		<body>
		
		
			<main>
					<table class = "gradienttable">
						<thead>
								<tr>
									<th><?php echo implode('</th><th>', array_keys(current($table->create_array($num)))); ?></th>
								</tr>
						</thead>
						
						<tbody>
							<?php foreach ($table->create_array($num) as $row): array_map('htmlentities', $row); ?>
								<tr>
									<td><?php echo implode('</td><td>', $row); ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>	
					</table>	
			</main>
	
		
	    
		
		
		
		</body>
	
	</html>



