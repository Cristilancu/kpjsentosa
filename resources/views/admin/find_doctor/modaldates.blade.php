<div class="col-md-12 text-center">
    <h5 class="text-blue"><i class="fa fa-calendar"></i>&nbsp;{{$day.' '.$Namemon.', '.$yearmodal}}</h5>
</div>

<?php
  $schedules = preg_split('/\n|\r\n?/', $doctor->clinic_hours)[0];
  $schedules = strstr($schedules, ":");
  $schedules = explode(" / ", $schedules);
?>

@foreach($schedules as $index => $schedule)

<?php
$schedule = str_replace(": ", "", $schedule);
$currentTimSlotPatients = $patients
  ? $patients->where('appointment_time', $schedule)->all()
  : collect([]);
?>

<div class="col-md-6 text-left">
    <h6>
      <i class="fa fa-clock-o"></i>
      &nbsp;Time Slot:
      <span class="text-success">{{ $schedule }}</span>
    </h6>
    <h6>
      <i class="fa fa-user"></i>
      &nbsp;Booked Patients:
    </h6>
    @if($currentTimSlotPatients)
      <?php $i = 1; ?>
      <?php foreach ($currentTimSlotPatients as $value): ?>
      <p style="margin-bottom: 5px;">{{ $i }}.)&nbsp;<a href="#"><?php echo $value->patient->first_name.' '.$value->patient->last_name; ?></a>
      <?php $i++; ?>
      <?php endforeach ?>
    @else
      <p>There is no appointment</p>
    @endif
</div>

@endforeach