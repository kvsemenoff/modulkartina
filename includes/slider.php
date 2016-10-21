
<div class="clearfix"></div>

<div class="container container_style2">
	<h4 class="h4_margin">Наша команда</h4>
	<div class="choose_slider">
		<div id="btn_prev2"></div>
		<div class="choose_slider_items">
			<ul id="mySlider2">
			    <li class="current_item">
			        <div class="current_item1"></div>
			        <span class="item-name">Алексей Иванов</span>
			        <span class="item-someth">Ведущий юрист Райтмен Групп</span>
			    </li>
			    <li class="current_item">
			        <div class="current_item1"></div>
			        <span class="item-name">Алексей Иванов</span>
			        <span class="item-someth">Ведущий юрист Райтмен Групп</span>                                
			    </li>
			    <li class="current_item">
			        <div class="current_item1"></div>
			        <span class="item-name">Алексей Иванов</span>
			        <span class="item-someth">Ведущий юрист Райтмен Групп</span>                                
			    </li>
			    <li class="current_item">
			         <div class="current_item1"></div>
			        <span class="item-name">Алексей Иванов</span>
			        <span class="item-someth">Ведущий юрист Райтмен Групп</span>                               
			    </li>
			    <li class="current_item">
			        <div class="current_item1"></div>
			        <span class="item-name">Алексей Иванов</span>
			        <span class="item-someth">Ведущий юрист Райтмен Групп</span>                               
			    </li>
			    <li class="current_item">
			        <div class="current_item1"></div>
			        <span class="item-name">Алексей Иванов</span>
			        <span class="item-someth">Ведущий юрист Райтмен Групп</span>                                
			    </li>
			    <li class="current_item">
			        <div class="current_item1"></div>
			        <span class="item-name">Алексей Иванов</span>
			        <span class="item-someth">Ведущий юрист Райтмен Групп</span>                                
			    </li>
			    <li class="current_item">
			        <div class="current_item1"></div>
			        <span class="item-name">Алексей Иванов</span>
			        <span class="item-someth">Ведущий юрист Райтмен Групп</span>                                
			    </li>
			    <li class="current_item">
			         <div class="current_item1"></div>
			        <span class="item-name">Алексей Иванов</span>
			        <span class="item-someth">Ведущий юрист Райтмен Групп</span>                               
			    </li>
			</ul>
		</div>
		<div id="btn_next2"></div>
	</div>
</div>

<div class="clearfix"></div>


<script>
    function func1() {
        $('.current_item1').addClass('current_item2')
        $('.current_item .current_item1').removeClass('current_item2');
        $('.item-name').addClass('hide')
        $('.current_item .item-name').removeClass('hide');
        $('.item-someth').addClass('hide')
        $('.current_item .item-someth').removeClass('hide');
    }
    $(function() {
        $("#mySlider2").AnimatedSlider( { prevButton: "#btn_prev2", 
            nextButton: "#btn_next2",
            visibleItems: 5,
            infiniteScroll: true,
            willChangeCallback: function(obj, item) { $("#statusText").text("Will change to " + item); },
            changedCallback: function(obj, item) { $("#statusText").text("Changed to " + item); }
        });
        $('#btn_next2, #btn_prev2').click(function(){
            func1();
        });
            func1();
    });
</script>