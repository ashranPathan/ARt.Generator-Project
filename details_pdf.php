<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Pdf</title>


</head>
<body>
    <p style="text-align: center;"> IEEE JOURNAL</p>

	 <div class="head">
	 <h1 style="text-align:center;" ><?=$user['project_title']?></h1>
	  <h6 style="text-align:center;" ><?=$user['author_name_1']?>, <?=$user['author_name_2']?>, <?=$user['author_name_3']?>, <?=$user['author_name_4']?></h6><br>
	 </div>
     
	<div class="container">
    <table class="table table-borderless">
  
  <tbody>
    <tr>
      <th scope="row" style=" text-align: justify"> Abstract-<?=$user['abstract']?></th> 
      
    <th > <div style="margin-top: -50px;">Proposed system</div><br><br></th> 
    
    </tr>
    <tr>
    <th> 
         <span style="font-weight:bold;font-style: italic; text-align: justify;"><br>keywords :</span>
          <span style="font-style:italic">
         <?=$user['keyword']?> </span>
         
      <td ><div style="margin-top:-90px;text-align: justify; margin-left: 20px;"><?=$user['parposed_system']?></div></td> 
      
    </th>
    </tr>
    
    <tr>
    <th scope="row" ></span><br> Introdution</th> 
    
<th > <div style="margin-top: 0px;"><br>Acknowledgment</div></th> 
    </tr>
    <tr>
    <td style=" text-align: justify;"></span><?=$user['introduction']?></td> 
    
<td ><div style="margin-top: 0px;text-align: justify; margin-left: 20px;"><?=$user['acknowledgment']?></div></td> 
</tr>
<tr>
<th scope="row" ></span><br> Figures</th> 
    
    <th >Review of related work</th> 
       
</tr>
<tr> <td> 
    <img src="image/<?=$user['figures']?>" height="180" width="180" style="margin-left:50px;"> </td> 
    <td > <div style="margin-top: 0px; margin-left: 20px;"><?=$user['review_of_related_work']?></div></td> 
       
</tr>

<tr>  
       
<th scope="row" ></span><br> Conclusion</th> 
    
    <th > <div style="margin-top: 0px;"><br>References</div></th> 
</tr>

<tr>  
       
<td scope="row"style=" text-align: justify;" ></span> <?=$user['conclusion']?></td> 
    
    <td style=" text-align: justify;"> <div style="margin-top: 0px; margin-left: 20px;"><?=$user['reference']?></div></td> 
</tr>

  </tbody>
</table>
    
	
</body>
</html>