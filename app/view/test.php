<?php
	require \view('project_header');
	// require \view('test2');
	// require \view('test3');
?>

<div id="test1">
	<span @click="test1">{{data}}</span>
	<span @click="test2">{{data2}}</span>

	<div>
		
	</div>
</div>

<script type="text/javascript">
	$$.extend({
		el:'#test1',
		event:['event2'],
		data:function(){
			return{
				data:'test1',
				data2:'test2',
			}
		},

		start:function(){
			
		},

		chenge:function(){
			
		},

		methods:{
			hd_event2:function(){
				alert('succsess')
			},

			test1:function(){
				$$.event.send('event2')
			},

			test2:function(){
				$$.event.delCurrObj(this)
			}

		},
	})
</script>