<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo basename(__FILE__); ?></title>

  <meta charset="utf-8">
 

        <style type="text/css">
            .calendar{
        font-family: Arial;
        font-size: 12px;
        
    }
    table.calendar{
        margin: auto;
        border-collapse: collapse;
    }
    .calendar .days td{
        width: 80px;
        height: 80px;
        padding: 4px;
        border: 1px solid #999;
        vertical-align: top;
        background-color: #DEF;
    }
    .calendar .days td:hover
    {
        background-color: #FFF;
        
    }
    .calendar .highlight {
        font-weight: bold;
        color: red;
    }
    
        </style>  

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    </head>
    <body>  
        <?php echo $calendar; ?>
 
  <script type="text/javascript">
        $(document).ready(function()
        {
            $('.calendar .day').click(function(){
                day_num=$(this).find('.day_num').html();
               $('#myModal').modal('toggle');
            });
        });
    </script>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
       
        <div class="modal-body">
          <p>Event toeveogen,aanpassen of verwijderen</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Add</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Edit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
          <div class="modal-footer">   
        </div>
      </div> 
    </div>
  </div>
  



    
    </body>
</html>