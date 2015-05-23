<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo basename(__FILE__); ?></title>
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
    </head>
    <body>
        
        <?php echo $calendar; ?>
       
        
         
    </body>
</html>