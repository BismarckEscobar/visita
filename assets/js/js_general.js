$('.dropdown-toggle').dropdown();

// Sidebar toggle behavior
$('#sidebarCollapse').on('click', function() {
	$('#sidebar, #content').toggleClass('active');
});