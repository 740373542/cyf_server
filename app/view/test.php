<?php
	require \view('project_header');
?>

<div id="test1">
	<span @click="test1">{{data}}</span>
	<span @click="test2">{{data2}}</span>

	<form action="/admin/UploadFile" method="post" enctype="multipart/form-data">
		<input type="file" name="test_file" />
		<input type="submit" value="Submit" />
	</form>

	<img src="/upload/webwxgetmsgimg">

	<div style="border:1px solid #CDCDCD;display:flex;justify-content:center;width:100px;height:30px;align-items:center;cursor:pointer;" @click="JsAjax">JsAjax</div>

	<div style="border:1px solid #CDCDCD;display:flex;justify-content:center;width:100px;height:30px;align-items:center;cursor:pointer;margin-top:20px" @click="JqueryAjax">JqueryAjax</div>

	<div id="result" v-for="v in ls">{{v.name}}</div>

	<canvas width="150" height="150"></canvas> 
</div>



<script type="text/javascript">
	$$.extend({
		el:'#test1',
		event:['event2'],
		data:function(){
			return{
				data:'test1',
				data2:'test2',
				ls:[],
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
			},

			JsAjax:function(){
				var ajax;
				if(window.XMLHttpRequest){
					ajax = new XMLHttpRequest();
				}else{
					ajax = new ActiveXObject("Microsoft.XMLHTTP");
				}

				ajax.onreadystatechange = function(){

					if (ajax.readyState==4 && ajax.status==200)
					{
						document.getElementById("result").innerHTML = ajax.responseText;
					}
				}

				ajax.open("GET","/admin/ajax_file",true);
				ajax.send();
			},

			JqueryAjax:function(){
				var self = this 
				$.ajax({
					url:'/admin/ajax_json',
					type:'get',
					success:function(data,status){
						data = JSON.parse(data)
						self.ls = data
					},
					error:function(){

					},
				})
			}

		},
	})
</script>




<style type="text/css">
	#animation{
		animation-name: myfirst;
		animation-duration: 5s;
		animation-timing-function: linear;
		animation-delay: 2s;
		animation-iteration-count: infinite;
		animation-direction: alternate;
		animation-play-state: running;
		width:100px;
		height:100px;
	}

	@keyframes myfirst{
		0%   {background: red; left:0px; top:0px;}
		25%  {background: yellow; right:200px;top:0px;}
		50%  {background: blue; right:0px;top:200px;}
		100% {background: green; right:0px;top:0px;}
	}
</style>