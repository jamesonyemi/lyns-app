<div class="agileits_w3layouts_copyright text-center">
	<p>© {{ gmdate("Y") }} Order A Cake. All rights reserved | Design by <a href="//w3layouts.com/">W3layouts</a></p>
</div>
		<!--js-->
				<script type="text/javascript" src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
		<!--//js-->
		<!--tabs-->
		<script src="{{ asset('assets/js/easyResponsiveTabs.js') }}"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			//Horizontal Tab
			$('#parentHorizontalTab_agile').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		});
		</script>
		<!--//tabs-->
	{{-- sweet-alert  --}}
	<script src="{{ asset('assets/js/sweetalert.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    @include('sweet::alert')
</body>
</html>