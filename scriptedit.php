<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  $('#provinces1').change(function() {
    var id_province1 = $(this).val();

      $.ajax({
      type: "POST",
      url: "ajax_db_edit.php",
      data: {id:id_province1,function:'provinces'},
      success: function(data){
          $('#amphures1').html(data); 
          $('#districts').html(' '); 
          $('#districts').val(' ');  
      }
    });
  });

  $('#amphures1').change(function() {
    var id_amphures = $(this).val();

      $.ajax({
      type: "POST",
      url: "ajax_db_edit.php",
      data: {id:id_amphures,function:'amphures'},
      success: function(data){
          $('#districts1').html(data);  
      }
    });
  });

</script>