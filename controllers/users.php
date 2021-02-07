<?php
    // Database connection
    include('config/db.php');
    $sql = "SELECT * FROM users";
    $result = $connection->query($sql);
    $array = (array) $result;


   
    
?>

<table class="table table-striped table-bordered">
    <thead>
        <tr class="bg-primary text-white">
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>User Phone</th>
            <th class="text-center">Record Date</th>
          
        </tr>
    </thead>
    <tbody>
        <?php
        if(count($array)>0){
            foreach($result as $val){
                
        ?>
        <tr>
            
            <td><?php echo $val['id'];?></td>
            <td><?php echo $val['firstname'];?></td>
            <td><?php echo $val['lastname'];?></td>
            <td><?php echo $val['mobilenumber'];?></td>
            <td align="center"><?php echo date('Y-m-d',strtotime($val['date_time']));?></td>
            
 
        </tr>
        <?php
            }
        }else{
        ?>
        <tr><td colspan="6" align="center">No Record(s) Found!</td></tr>
        <?php } ?>
    </tbody>
</table>


