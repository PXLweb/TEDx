<?php $addEventRoute = site_url('events') . '/nieuw/'; ?>
<!--<form name="eventform" method="POST" action="<?php echo $addEventRoute; ?>?month=<?php echo $month; ?>&day=<?php echo $day; ?>&year=<?php echo $year; ?>&v=true&add=true">-->
<form name="eventform" method="POST" action="<?php echo $addEventRoute; ?>">
    <input type="text" name="day" value="<?php echo $day ?>" class="hidden" />
    <input type="text" name="month" value="<?php echo $month ?>" class="hidden" />
    <input type="text" name="year" value="<?php echo $year ?>" class="hidden" />
    <input type="text" name="v" value="<?php echo true ?>" class="hidden" />
    <input type="text" name="add" value="<?php echo true ?>" class="hidden" />
    <table width="400px"/>
    <tr>
        <td width="150px">Name</td>
        <td width="250px"><input type="text" name="Name"></td>
    </tr>
    <tr>
        <td width="150px">Speaker</td>
        <td width="250px"><input type="text" name="Speaker"></td>
    </tr>
    <tr>
        <td width="150px">Location</td>
        <td width="250px"><input type="text" name="Location"></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" name="add" value="AddEvent"></td>
    </tr>
</table>
</form>