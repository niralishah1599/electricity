<?php
session_start();

$title['data']="Manage User";

if(isset($_GET['value']))
    $value=$_GET['value'];
else 
    $value='';
$sql = "select * from stud1";
    
   $limit = 15; 
    
    $html="";
    $result_b=mysql_query($sql)or die(mysql_error());
     $total_pages = mysql_num_rows($result_b);
     
           //$total_pages = $total_pages[0];
      
      $stages = 3;
        if(isset($_GET['page']))
            $page = mysql_escape_string($_GET['page']);
        else
            $page=1;
      if($page){
        $start = ($page - 1) * $limit; 
      }else{
        $start = 0; 
      }
      
      $query = "select * from stud1  LIMIT $start, $limit"; 
      
      
      $data = mysql_query($query)or die(mysql_error());
       
      // Initial page num setup
      if ($page == 0){$page = 1;}
      $prev = $page - 1;  
      $next = $page + 1;              
      $lastpage = ceil($total_pages/$limit);    
      $LastPagem1 = $lastpage - 1;  
      
        $paginate = '';
  if($lastpage > 1)
  { 
  

  
  
    $paginate .= "<ul class='pagination ticket_pagination pull-right'>";
    // Previous
    if ($page > 1){
      $paginate.= "<li><a href='?page=$prev'>Previous</a></li>";
    }else{
      $paginate.= "<li><span class='disabled'>Previous</span></li>"; }
      

    
    // Pages  
    if ($lastpage < 7 + ($stages * 2))  // Not enough pages to breaking it up
    { 
      for ($counter = 1; $counter <= $lastpage; $counter++)
      {
        if ($counter == $page){
          $paginate.= "<li><span class='current'>$counter</span></li>";
        }else{
          $paginate.= "<li><a href='?page=$counter'>$counter</a></li>";}          
      }
    }
    elseif($lastpage > 5 + ($stages * 2)) // Enough pages to hide a few?
    {
      // Beginning only hide later pages
      if($page < 1 + ($stages * 2))   
      {
        for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
        {
          if ($counter == $page){
            $paginate.= "<li><span class='current'>$counter</span></li>";
          }else{
            $paginate.= "<li><a href='?page=$counter'>$counter</a></li>";}          
        }
        $paginate.= "<li><span>...</span></li>";
        $paginate.= "<li><a href='?page=$LastPagem1'>$LastPagem1</a></li>";
        $paginate.= "<li><a href='?page=$lastpage'>$lastpage</a></li>";   
      }
      // Middle hide some front and some back
      elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
      {
        $paginate.= "<li><a href='?page=1'>1</a></li>";
        $paginate.= "<li><a href='?page=2'>2</a></li>";
        $paginate.= "<li><span>...</span></li>";
        for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
        {
          if ($counter == $page){
            $paginate.= "<li><span class='current'>$counter</span></li>";
          }else{
            $paginate.= "<li><a href='?page=$counter'>$counter</a></li>";}          
        }
        $paginate.= "<li><span>...</span></li>";
        $paginate.= "<li><a href='?page=$LastPagem1'>$LastPagem1</a></li>";
        $paginate.= "<li><a href='?page=$lastpage'>$lastpage</a></li>";   
      }
      // End only hide early pages
      else
      {
        $paginate.= "<li><a href='?page=1'>1</a></li>";
        $paginate.= "<li><a href='?page=2'>2</a></li>";
        $paginate.= "<li><span>...</span></li>";
        for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
        {
          if ($counter == $page){
            $paginate.= "<li><span class='current'>$counter</span></li>";
          }else{
            $paginate.= "<li><a href='?page=$counter'>$counter</a></li>";}          
        }
      }
    }
          
        // Next
    if ($page < $counter - 1){ 
      $paginate.= "<li><a href='?page=$next'>Next</a></li>";
    }else{
      $paginate.= "<li><span class='disabled'>Next</span></li>";
      }
      
    $paginate.= "</ul>";   
  
  
} 

/*$query="select * from stud1 ";
$fetchdata=mysql_query($query);*/
?>

<div class="row col-md-offset-4">
		<h2>Manage Users</h2>
    
    <div class="row">
        <div class="col-md-4">
            <input type="text" id="textbox1" value="<?=$value?>"  placeholder="Enter Name  To Search User" class="form-control">
        </div>
        <div class="col-md-4">
               <button id="button1" type="button" class="btn btn-info">
                    Search
                </button>
			
        </div>
    </div>
    <br />
</div>
<div class="col-md-offset-1 col-md-9">
	<table class="table table-striped table-bordered" >
		<tr>
			<th>FNAME</th>
			<th>LNAME</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>
        <tbody id="table1">
			<?php
			
			while($value=mysql_fetch_array($data))
			{
                $email=$value['email'];
                $id=$value['uid'];
                $name=$value['fname'];
                $status=$value['block'];
			
                if($status=="0")
				$btn_block="<button id='status_$id' class='blockuser btn btn-warning'   data-email='$email' data-id='$id' data-name='$name' data-status='$status'><i class='glyphicon glyphicon-remove-circle'></i></button>";
			
                
            else
				$btn_block="<button id='status_$id' class='blockuser btn btn-success' data-email='$email' data-id='$id' data-name='$name' data-status='$status'><i class='glyphicon glyphicon-ok'></i></button>";
		
			?>
        
			<tr id="tr_<?=$value['uid']?>">
			<td>
				<?php echo $value['fname']; ?>
			</td>
			
			<td>
				<?php echo $value['lname']; ?>
			</td>
			
			<td>
				<?php echo $value['email']; ?>
			</td>
	      	<td>
                <button type="button" class="btn btn-info">
                    <i class="glyphicon glyphicon-edit"></i>
                </button>
			
				<?=$btn_block?>
				
				<button class="deleteuser btn btn-danger " data-name='<?=$value['fname']?>' data-email='<?=$value['email']?>' data-id='<?=$value['uid']?>'>
                <i class="glyphicon glyphicon-trash "></i>
                </button>
				
			</td>
				
			<?php
			}
			?>
		</tr>
            <tr>
                <td colspan="4"><?=$paginate?>
                </td>
            </tr>
        </tbody>
	</table>
</div>

</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script>
/* block_user script */

$(document).on('click','.blockuser',function(){
	var email=$(this).data('email');
	var name=$(this).data('name');
	var id=$(this).data('id');
	var status=$(this).data('status');
    
	var r=confirm("Are You Sure Want To Block This User "+name+" ? ");
	
	if(status=="1")
	{
		status="0";
	}
	else
	{
		status="1";
	}
	
	if(r)
	{
		$.ajax({
				url: "block_user.php",
				data: {"email":email,"name":name,"status":status},
				type: "POST",
				success: function(data)
				{
                    if(status=="0")
					{  
                      
						$("#status_"+id).removeClass("btn-success").addClass("btn-warning");
                        
       
                      $("#status_"+id).html("<i class='glyphicon glyphicon-remove-circle'></i>");
                    }
					else
					{	
						$("#status_"+id).removeClass("btn-warning").addClass("btn-success");
                                     $("#status_"+id).html("<i class='glyphicon glyphicon-ok'></i>");
                                              
					}
					$("#status_"+id).data("status",status);
					
				}
		});
	}
});

/* deleteuser script */

$(".deleteuser").click(function(){
	var email=$(this).data('email');
	var name=$(this).data('name');
	var id=$(this).data('id');
	
	var r=confirm("Are You Sure Want To Remove User "+name+" ? ");
	if(r)
	{
		$.ajax({
				url: "delete_user.php",
				data: {"email":email,"name":name},
				type: "POST",
				success: function(data)
				{
				$("#tr_"+id).slideUp('slow');
				}
				
		});
	
	}
	
	
});
    
    
    /* search user script */
    $("#textbox1").keyup(function(){
             var value=$("#textbox1").val();
                    
                    if(value!="")
                    {
                        $.ajax({
                        url :"searchuser.php",
                        data :{"value":value},
                        type :"POST",
                        success: function(data)
                        {
                            $("#table1").html(data);
                        }
                                });
                    }
    });
                   
</script>
</html>

