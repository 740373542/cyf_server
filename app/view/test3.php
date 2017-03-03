<?php
	require \view('project_header');
?>

<div id="test3">
	<span >{{data}}</span>

	<div>
		
	</div>
</div>

<script type="text/javascript">
	$$.extend({
		el:'#test3',
		event:['event2'],
		data:function(){
			return{
				data:'test3',
			}
		},

		start:function(){
			
		},

		chenge:function(){
			
		},

		methods:{
			hd_event2:function(){
			},
		},
	})
</script>