<?php 

$slots = array("800", "820", "840", "900", "1700");
$schedules = get_schedules(date, teacher_id);

foreach ($slots as $slot) {
    # code...
    print $slot;

    if (check_schedule($slot, $schedules)) {
        # code...
        print 'taken';
    }
}

?>

<?php
//     def get_schedules(date, teacher_id):
// 	return schedules.where(['date': date, 'teacher_id': teacher_id])


// def check_schedule(slot, schedules):
// 	for schedule in schedules:
// 		if schedule['time'] == slot:
// 			return True 


// slots = [800, 820, 840, 900, ..., 1700]
// schedules = get_schedules(date, teacher_id)

// for slot in slots:
// 	print slot

// 	if (check_schedule(slot, schedules)):
// 		print "Taken" 
?>



