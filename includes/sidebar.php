
<div class="dd-sidebar-wrap">
	<ul id="menuslides">
	    <!-- <li><b><a href="javascript:void(0);">Меню 01</a></b></li> -->
	    <li><b><a class="dd-side-title dd-side-title4" href="javascript:void(0);">Модульные картины</a></b>
	        <ul style="display: block;" class="menuslides">
	            <li><a href="#">Города <span>(110)</span></a></li>
	            <li><a href="#">Природа <span>(14)</span></a></li>
	            <li><a href="#">Цветы <span>(125)</span></a></li>
	            <li><a href="#">Люди <span>(404)</span></a></li>
	            <li><a href="#">Абстракция <span>(217)</span></a></li>
	            <li><a href="#">Животные <span>(152)</span></a></li>
	            <li><a href="#">Еда <span>(52)</span></a></li>
	            <li><a href="#">Этника <span>(83)</span></a></li>
	            <li><a href="#">Для детей <span>(23)</span></a></li>
	        </ul>
	    </li>
	    <li><b><a class="dd-side-title dd-side-title2" href="javascript:void(0);">Постеры</a></b>
	        <ul class="menuslides">
	            <li><a href="#">Города <span>(110)</span></a></li>
	            <li><a href="#">Природа <span>(14)</span></a></li>
	            <li><a href="#">Цветы <span>(125)</span></a></li>
	            <li><a href="#">Люди <span>(404)</span></a></li>
	            <li><a href="#">Абстракция <span>(217)</span></a></li>
	            <li><a href="#">Животные <span>(152)</span></a></li>
	            <li><a href="#">Еда <span>(52)</span></a></li>
	            <li><a href="#">Этника <span>(83)</span></a></li>
	            <li><a href="#">Для детей <span>(23)</span></a></li>
	        </ul>
	    </li>
	     <li><b><a class="dd-side-title dd-side-title3" href="javascript:void(0);">Репродукция</a></b>
	        <ul class="menuslides">
	            <li><a href="#">Города <span>(110)</span></a></li>
	            <li><a href="#">Природа <span>(14)</span></a></li>
	            <li><a href="#">Цветы <span>(125)</span></a></li>
	            <li><a href="#">Люди <span>(404)</span></a></li>
	            <li><a href="#">Абстракция <span>(217)</span></a></li>
	            <li><a href="#">Животные <span>(152)</span></a></li>
	            <li><a href="#">Еда <span>(52)</span></a></li>
	            <li><a href="#">Этника <span>(83)</span></a></li>
	            <li><a href="#">Для детей <span>(23)</span></a></li>
	        </ul>
	    </li>
	    <!-- <li><b><a href="javascript:void(0);">Меню 04</a></b></li> -->
	</ul>
	<div class="clearfix"></div>
	<div class="dd-side-img1">
		<img src="img/side-aktsia.jpg" alt="">
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
	<div class="dd-side-ramka">
		<div class="dd-side-ramka-title">
			<span>Картина на холсте это:</span>
		</div>
		<div class="dd-img">
			<img src="img/canv1.png" alt="">
			<span>100% Хлопковый холост</span>
		</div>
		<div class="dd-img">
			<img src="img/canv2.png" alt="">
			<span>Разрешение печати 2880 dpi</span>
		</div>
		<div class="dd-img">
			<img src="img/canv3.png" alt="">
			<span>Подрамники из первосортной русской сосны</span>
		</div>
		<div class="dd-img">
			<img src="img/canv4.png" alt="">
			<span>Фирменное защитное<br> покрытие</span>
		</div>
	</div>
	<div class="dd-otziv">
		<div class="dd-otziv-title">
			Отзывы
		</div>
		<div class="dd-wrap-ot">
			<div class="dd-img-txt">
				<div class="dd-img">
					
				</div>
				<div class="dd-txt">
					<span>Сергей Куровский</span><br>
					<span>Волгоград</span>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="dd-main-txt">
				Долго думал что подарить маме на др, листал разные магазины с подарками, но случайно наткнулся на рекламу модульных картин...
			</div>
			<a href="#">Читать весь отзыв</a>
		</div>
		<div class="dd-wrap-ot border-none">
			<div class="dd-img-txt">
				<div class="dd-img">
					
				</div>
				<div class="dd-txt">
					<span>Сергей Куровский</span><br>
					<span>Волгоград</span>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="dd-main-txt">
				Долго думал что подарить маме на др, листал разные магазины с подарками, но случайно наткнулся на рекламу модульных картин...
			</div>
			<a href="#">Читать весь отзыв</a>
		</div>
		<div class="dd-side-button">
			<a href="#">Оставить отзыв</a>
		</div>
		<div class="dd-all-button">
			<a href="#">Все отзывы (10)</a>
		</div>		
	</div>
</div>

<script type="text/javascript">
	$('#menuslides li').click(function(){
		$('#menuslides ul').slideUp(300);	
		$('ul', this).slideDown(300);	
	});
</script>

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