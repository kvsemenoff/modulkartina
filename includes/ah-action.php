
<div class="clearfix"></div>

<section class="ah-action">
    <div class="container ah-action1">
    	<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="ah-schet">
					<span class="ah-schet-span">До конца акции осталось</span>
					<ul id="clockdiv">
						<li class="ah-schet-wrapp-span hours1"></li>
						<li class="ah-schet-wrapp-span hours2"></li>
						<li class="ah-schet-wrapp-el">:</li>
						<li class="ah-schet-wrapp-span minutes1"></li>
						<li class="ah-schet-wrapp-span minutes2"></li>
						<li class="ah-schet-wrapp-el">:</li>
						<li class="ah-schet-wrapp-span seconds1"></li>
						<li class="ah-schet-wrapp-span seconds2"></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="clearfix"></div>

<script>

//Усланавливаем дату окончания	
var deadline = '2016-11-3';

//Высчитайте оставшееся время
function getTimeRemaining(endtime){
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds1 = Math.floor( ((t/1000) % 60)/10 );
  var seconds2 = Math.floor( ((t/1000) % 60)%10 );
  var minutes1 = Math.floor( ((t/1000/60) % 60)/10 );
  var minutes2 = Math.floor( ((t/1000/60) % 60)%10 );
  var hours = Math.floor( ((t/(1000*60*60)) % 24) );
  // var hours2 = Math.floor( ((t/(1000*60*60)) % 24) );
  var days = Math.floor( t/(1000*60*60*24) );
  var hours_temp = days*24 +hours;
  var hours1 = (hours_temp%10);
  var hours2 = (Math.floor(hours_temp/10)%10);
  // var hours2 = (Math.floor(hours_temp/10)%10);
  return {
   'total': t,
   'hours1': hours1,
   'hours2': hours2,
   'minutes1': minutes1,
   'minutes2': minutes2,
   'seconds1': seconds1,
   'seconds2': seconds2
  };
}

//функция которая будет отображать наши данные
function initializeClock(id, endtime){
var clock = document.getElementById(id);

// var daysSpan = clock.querySelector('.days');
var hoursSpan1 = clock.querySelector('.hours1');
var hoursSpan2 = clock.querySelector('.hours2');
var minutesSpan1 = clock.querySelector('.minutes1');
var minutesSpan2 = clock.querySelector('.minutes2');
var secondsSpan1 = clock.querySelector('.seconds1');
var secondsSpan2 = clock.querySelector('.seconds2');

	function updateClock(){
	var t = getTimeRemaining(endtime);

	// daysSpan.innerHTML = t.days;
	hoursSpan1.innerHTML = t.hours1;
	hoursSpan2.innerHTML = t.hours2;
	minutesSpan1.innerHTML = t.minutes1;
	minutesSpan2.innerHTML = t.minutes2;
	secondsSpan1.innerHTML = t.seconds1;
	secondsSpan2.innerHTML = t.seconds2;

	// clock.innerHTML = 'days: ' + t.days + '' + 'hours: '+ t.hours + '' + 'minutes: ' + t.minutes + '' + 'seconds: ' + t.seconds;

	  if(t.total<=0){
	   clearInterval(timeinterval);
	  }

	}

updateClock();
var timeinterval = setInterval(updateClock,1000);

}

//запускаем часы
initializeClock('clockdiv', deadline);





</script>