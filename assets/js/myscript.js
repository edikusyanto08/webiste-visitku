// JavaScript Document
$(function() {
	
	$("#home a:contains('Beranda')").parent().addClass('active');
	

	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	});

});