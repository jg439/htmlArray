
<?php
$students = array( array("Name"=>"Julia", "Last-Name"=>"Garcia","UCID"=>"jg439","Major" =>"Business", "Age"=>"15"),
               array("Name"=>"Tom", "Last-Name"=>"Smith","UCID"=> "ts22", "Major" =>"Computer", "Age"=> "20"),
               array("Name"=>"Rachel", "Last-Name"=>"Puccio" , "UCID"=>"rp333", "Major" =>"CS", "Age" => "30") 
             ); 
?>

	<html lang = "en">
	    
		<head>
		
			<title>Table Array</title>
				<meta charset = "utf-8">
				<meta name = "description" content="Table array:names, last names, UCID and Major">
				
				<link rel = "stylesheet" type ="text/css" href = "styles/main.css">
			
		
		</head>
		
		<body>
		
		
			<main>
					<table>
						<thead>
								<tr>
									<th><?php echo implode('</th><th>', array_keys(current($students))); ?></th>
								</tr>
						</thead>
						
						<tbody>
							<?php foreach ($students as $row): array_map('htmlentities', $row); ?>
								<tr>
									<td><?php echo implode('</td><td>', $row); ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>	
					</table>	
			</main>
	
	
	    </body>
	
	</html>

