<?php ?>


<table width='100%' border='0'>
    <tr>
        <th width='10%'>S.no</th>
        <th width='40%'>Username</th>
        <th width='40%'>Name</th>
    </tr>
    <?php 
    global $wpdb;
    $results = $wpdb->get_results($wpdb->prepare('SELECT * From test_table order by name'));
    // $result = mysqli_query($con,$query);
    //print_r($results);
    $count = 1;
    foreach($results as $result){
        $id = $result->id;
         $name = $result->name;
         $surname = $result->surname;
    ?>
         <tr>
             <td><?php echo $count; ?></td>
             <td> 
                 <div class='edit' > <?php echo $name; ?></div> 
                 <input type='text' class='txtedit edit' value='<?php echo $name; ?>' id='name_<?php echo $id; ?>' >
             </td>
             <td> 
                 <div class='edit' ><?php echo $surname; ?> </div> 
                 <input type='text' class='txtedit edit' value='<?php echo $surname; ?>' id='surname_<?php echo $id; ?>' >
             </td>
         </tr>
    <?php
         $count ++;
    }
    ?> 
</table>
<script>
 jQuery(document).ready(function() {
 // Add Class
 jQuery('.edit').click(function(){
      jQuery(this).addClass('editMode');
 });

 // Save data
 jQuery(".edit").focusout(function(){   
      jQuery(this).removeClass("editMode");
      var id = this.id;
      console.log( "id is ",id);
      var split_id = id.split("_");
      var field_name = split_id[0];
      var edit_id = split_id[1];
      var value = jQuery(this).val();
    //   console.log( "id is ",id);
    //   console.log( "field name-> ",split_id[0]);
    //   console.log( "edit id ",split_id[1]);
    //   console.log( "value ",value);

      jQuery.ajax({      
           url: ajaxurl,          
           type: 'post',
           dataType : "json",
           data: {
             action: 'save_update_data',
             field:field_name,
             value:value,
             id:edit_id 
            },
           success:function(response){
                if(response == 1){
                     console.log('Save successfully'); 
                }else{
                     console.log("Not saved.");
                }
                console.log(response)
           },
           error: function() {
				alert("There was an error. Try again please!");
			}

      });

 });

});

</script>