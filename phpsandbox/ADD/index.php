<form id="timeForm" class="form-horizontal" role="form">

   <div class="form-group">
<label for="empName" class="col-sm-2 control-label">Name</label>
<div class="col-sm-6 col-md-6 col-lg-6">
  <input type="text" class="form-control" id="empName" name="empName" placeholder="Name">
</div>
</div>
<div class="form-group">
<div class="col-sm-3 col-md-3 col-lg-3 col-sm-offset-8 col-md-offset-8 col-lg-offset-8 ">
<div class="checkbox">

    <label>
      <input class="checkbox1" type="checkbox" id="selectall" value="y"> Select All?
    </label>
  </div>
 </div>
</div>
<?php

foreach (range(1, 7) as $number) {
?>
<div class="form-group">

<label for="Day1" class="col-sm-2 col-md-2 col-lg-2 control-label">Day <?php echo $number;?> :</label>
<div class="col-sm-3 col-md-3 col-lg-3">
  <input type="time" class="form-control" name="day<?php echo $number;?>_start" id="day<?php echo $number;?>_start" placeholder="start time">
</div>
<div class="col-sm-3 col-md-3 col-lg-3">
  <input type="time" class="form-control" name="day<?php echo $number;?>_finish" id="day<?php echo $number;?>_finish" placeholder="finish time">
</div>
<div class="col-sm-3 col-md-3 col-lg-3">
<div class="checkbox">
    <label>
      <input class="checkbox1" type="checkbox" name="day<?php echo $number;?>_NL" value="y"> No Lunch?
    </label>
  </div>
  </div>
 </div>


<?php
}
?>


<div class="form-group">
<div class="col-sm-offset-2 col-sm-2 col-md-2 col-lg-2">
  <button id="calculate" type="submit" class="btn btn-default">Calculate</button>
</div>
<div class="col-sm-2 col-md-2 col-lg-2">
  <button id="clear" type="submit" class="btn btn-default">Clear</button>
</div>
 </div>
</form>
<div id="total">
</div>





<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js">       </script>
 <script>
 $(document).ready(function() {
$('#clear').on('click', function(e){
e.preventDefault();
$('#timeForm').trigger("reset");

});
$('#calculate').on('click', function(e){
e.preventDefault();
//$('#calculate').fadeOut(300);

$.ajax({
type: "POST",
url: "timesheet.php",
data: jQuery("#timeForm").serialize(),
cache: false,
success:  function(data){
    $('#total').append("<p>" + data + "</p>");
   //$('#timeForm')[0].reset();
   /*if json obj. alert(JSON.stringify(data));*/
}

})

});



$(function() {
var availableTags = [
  "George","Brian","Craig","Bruce","Amy","Stew","Cora","Annette","Derek D","James","Patty","Jessica","Derek"
];
$( "#empName" ).autocomplete({
  source: availableTags
});
 });


$('#selectall').click(function(event) {  //on click
    if(this.checked) { // check select status
        $('.checkbox1').each(function() { //loop through each checkbox
            this.checked = true;  //select all checkboxes with class "checkbox1"
        });
    }else{
        $('.checkbox1').each(function() { //loop through each checkbox
            this.checked = false; //deselect all checkboxes with class "checkbox1"
        });
    }
});


});

</script>

<?php

$totalHours= '';

foreach (range(1, 7) as $number) {
$hours = '';
$hour = '';
$minute = '';
$starttime = '';
$finishtime = '';

if(!empty($_POST["day{$number}_start"]) && !empty($_POST["day{$number}_finish"]) ){
    $starttime = $_POST["day{$number}_start"];
    $finishtime = $_POST["day{$number}_finish"];


    $from = new DateTime($_POST["day{$number}_start"]);
  $to = new DateTime($_POST["day{$number}_finish"]);
  if ($to < $from) {
      $to->modify('+1 day'); // or $to->add(new DateInterval('P1D'));
  }

    //var_dump($from == $to);
    //var_dump($from < $to);
    //var_dump($from > $to);

    if($_POST["day{$number}_NL"] != 'y') {
        $from->add(new DateInterval('PT30M'));
    }

    $hours = $from->diff($to)->format('%H:%I'); //
    //debug
    //echo $hours . " - ";
    list($hour,$minute) = explode(":",$hours);


    $minuteF = $minute / 60;


    //echo " - " . $minuteF;

    $totalHours += $hour + $minuteF;
}
}

echo '<select name="timein">';
$start=strtotime('7:00am');
$end=strtotime('8:00pm');
for ($i=$start;$i<=$end;$i+=1800)
{echo '<option value="'.date('g:i a',$i).'">'.date('g:i a',$i).'</option>';}
echo '</select>';
