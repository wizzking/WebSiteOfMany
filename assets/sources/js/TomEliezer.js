$(document).ready(function(){
	$('#optionBreakfast').click(function(){
		$('#FoodOptions > .pizza , .soup , .lunch, .snack , .dinner').hide(500);
		$('#FoodOptions > .breakfast').show(500);
	});
	$('#optionLunch').click(function(){
		$('#FoodOptions > .pizza , .soup , .breakfast, .snack , .dinner').hide(500);
		$('#FoodOptions > .lunch').show(500);
	});
	$('#optionSnacks').click(function(){
		$('#FoodOptions > .pizza , .soup , .breakfast, .lunch , .dinner').hide(500);
		$('#FoodOptions > .snack').show(500);
	});
	$('#optionPizza').click(function(){
		$('#FoodOptions > .snack , .soup , .breakfast, .lunch , .dinner').hide(500);
		$('#FoodOptions > .pizza').show(500);
	});
	$('#optionSoups').click(function(){
		$('#FoodOptions > .snack , .pizza , .breakfast, .lunch , .dinner').hide(500);
		$('#FoodOptions > .soup').show(500);
	});
	$('#optionDinner').click(function(){
		$('#FoodOptions > .snack , .pizza , .breakfast, .lunch , .soup').hide(500);
		$('#FoodOptions > .dinner').show(500);
	});
	$('#optionAll').click(function(){
		$('#FoodOptions > .pizza , .soup , .lunch, .snack , .dinner , .breakfast').show(500);
	});			
		
});