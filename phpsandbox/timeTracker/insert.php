<!--$dg = new C_DataGrid("SELECT * FROM timesheet", "id", "timesheet");
$dg -> set_query_filter("employee_id = '1'");

$dg -> set_col_hidden('id, employee_id', false);

$dg -> set_col_edittype("activity_id", "select", "Select id, code from activity")->set_col_title('activity_id', 'Activity');

$dg -> set_col_time("time_from")->set_col_property("time_from",
    array("formatter"=>"date", "formatoptions"=>array("srcformat"=>"h:i A","newformat"=>"h:i A")));
$dg -> set_col_time("time_to")->set_col_property("time_to",
    array("formatter"=>"date", "formatoptions"=>array("srcformat"=>"h:i A","newformat"=>"h:i A")));

$dg -> enable_edit('FORM')->enable_autowidth(true);

$dg -> display();-->

<div id="tabs">
    <div id="tabs-1" style="padding:0">
        <?php
        //echo $grid;
        ?>
    </div>
    <ul>
        <li><a href="#tabs-1">Timesheets</a></li>
        <li><a href="tabbed_grid_loader.php?gn=account">Employees</a></li>
        <li><a href="tabbed_grid_loader.php?gn=activity">Activities</a></li>
        <li><a href="tabbed_grid_loader.php?gn=cost_center">Cost Center</a></li>
        <li><a href="tabbed_grid_loader.php?gn=project">Projects</a></li>

        
    </ul>
</div>
