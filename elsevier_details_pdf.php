<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Pdf</title>


</head>
<body>
    <p style="text-align: center;">Elsevier JOURNAL</p>

	 <div class="head">
	 <h1 style="text-align:center;" ><?=$user['project_title']?></h1>
	  <h6 style="text-align:center;" ><?=$user['author_name_1']?><?=$user['author_name_2']?><?=$user['author_name_3']?></h6>
	 </div>
	<hr>
     
	<div class="container">
		<div class="col-6">
			<h3>Abstract</h3>
			<p><?=$user['abstract']?></p>
			<p style="font-weight:bold;font-style: italic; text-align: justify;font-size:15px;">Keywords :<?=$user['keyword']?></p>
		</div>
		<hr>
		<div class="col-6">
			<h3>1.Background</h3>
			<p style="font-size:13px;text-align: justify;"><?=$user['background']?></p>
			
		</div>
			<div class="col-6">
			<h3>2.Implementation</h3>
			<p style="font-size:13px;text-align: justify;"><?=$user['implementation']?></p>
			
		</div>
		<div class="col-6">
			<h3>3.Result And Discussion</h3>
			<p style="font-size:13px;text-align: justify;"><?=$user['result']?></p>
			
		</div>
		
		
			<div class="col-6">
			<h3>4.Conclusion</h3>
			<p style="font-size:13px;text-align: justify;"><?=$user['conclusion']?></p>
			
		</div>
		<div class="col-6">
			<h3>5.Methods</h3>
			<p style="font-size:13px;text-align: justify;"><?=$user['methods']?></p>
			
			
		</div>
		<div class="col-6">
			<h3>6.Avaibility And Requirement</h3>
			<p style="font-size:13px;text-align: justify;"><?=$user['requirement']?></p>
			
		</div>
		<div class="col-6">
			<h3>7.Author's Contribution</h3>
			<p style="font-size:13px;text-align: justify;"><?=$user['authors_contribution']?></p>
		
			
		</div>
		<div class="col-6">
			<h3>8.Acknowledgement</h3>
          <p style="font-size:13px;text-align: justify;"><?=$user['acknowldgment']?></p>
			
		</div>
		<div class="col-6">
			<h3>9.References</h3>
         <p style="font-size:13px;text-align: justify;"><?=$user['reference']?></p>
			
		</div>
	</div>
    
	
</body>
</html>