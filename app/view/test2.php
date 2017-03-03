<?php
	require \view('project_header');
?>

<div id="test2">
	<span @click="test">{{data}}</span>

	<div>
		
	</div>
</div>

<script type="text/javascript">
	$$.extend({
		el:'#test2',
		data:function(){
			return{
				data:'test2',
			}
		},

		start:function(){
			
		},

		chenge:function(){
			
		},

		methods:{
			test:function(){
				$$.event.send('event2')
			},
		},
	})
</script>