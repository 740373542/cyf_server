<?php
	require \view('project_header');
?>
<body id="content">
	<div style="width:100%;height:100%">
		<div style="display:flex;">
						<div style="flex-basis:50%"></div>
						<div style="flex-basis:50%;text-align:right">

							<div id="LoginButton" class="login_botton" >
								<div style="border:1px solid #FFF;border-radius:100%;width:21px;height:20px;display:inline-block;text-align:center;line-height:20px">
									<img src="/svg/account.svg" width="16px" height="16px">
								</div>
								
								<span  style="color:#FFF;font-size:20px;">登陆</span>
							</div>

							<div id="button" class="help_button" >

							<div  style="border:1px solid #FFF;border-radius:100%;width:22px;height:21px;display:inline-block;text-align:center;line-height:22px">
									<img src="/svg/help.svg" width="16px" height="13px">
								</div>

								<span  style="color:#FFF;font-size:20px">帮助</span>
							</div>
						</div>
		</div>


		<div style="display:flex;flex-direction:column;align-items:center;justify-content:center;">
			<div class="InnerTop" style="width:65%;border-bottom:3px solid #FFF;margin-bottom:0%;margin-top:8%;">
				<div style="display:flex;flex-direction:column;align-items:center">
					<div id="EVD" style="border:3px solid #FFF;border-radius:100%;width:100px;height:100px;text-align:center;line-height:100px">
						<span style="color:#FFF;font-size:30px;font-weight:bold;text-shadow:1px 1px 1px #CDCDCD">EVD</span>
					</div>
				</div>
				<div style="display:flex;flex-direction:row;">
					<div id="Line" style="flex-basis:50%;height:100px;border-right:3px solid #FFF"></div>
				</div>
			</div>

			<div class="TextContent" style="opacity:0;">
				<div id="one_text" style="color:#FFF;font-weight:bold;text-align:center;text-shadow:1px 1px 1px #CDCDCD">Welcome Admin</div>
				<div id="two_text" style="color:#FFF;text-align:center;text-shadow:1px 1px 1px #CDCDCD">中网载线技术后端</div>
			</div>

			

			<div class="InnerBottom" style="width:65%;border-bottom:3px solid #FFF;margin-top:0%;box-shadow:1px 1px 1px #CDCDCD"></div>
			<div class="TextFoote" style="color:#FFF;margin-top:10%;align-items:center;font-size:16px;font-weight:bold;text-shadow:1px 1px 1px #CDCDCD;opacity:0;">@ The Net Load Line 2017</div>

		</div>
</div>

<div id="box" style="display:none;">
	<div id="drawer_background" class="drawer_background" onclick="javascript:CloseDrawer()"></div>

	<div id="drawer_content" class="drawer_content">
		<div style="display:flex;flex-direction:row;justify-content:flex-end">
			<div class="ChaHao">✖</div>
		</div>

		<div style="display:flex;flex-direction:row;align-items:center;justify-content:center">
			<div style="font-size:40px;font-weight:bold;margin-top:5%">Log  In</div>
		</div>

		<div style="display:flex;flex-direction:row;align-items:center;justify-content:center">
			<div style="font-size:20px;margin-top:5%;color:#CDCDCD">Welcome Admin</div>
		</div>

		<div style="display:flex;flex-direction:row;align-items:center;justify-content:center">
			<div style="font-size:20px;margin-top:2%;color:#CDCDCD">Please login company administrator account</div>
		</div>

		<div style="display:flex;flex-direction:row;align-items:center;justify-content:center">
			<div style="font-size:20px;margin-top:2%;color:#CDCDCD">请登陆公司管理员帐号</div>
		</div>

		<div style="display:flex;flex-direction:row;align-items:center;justify-content:center;margin-top:7%">
			<input type="text" placeholder="Please input username">
		</div>

		<div style="display:flex;flex-direction:row;align-items:center;justify-content:center;margin-top:3%">
			<input type="password" placeholder="Please input password">
		</div>

		<div style="display:flex;flex-direction:row;margin-top:5%">
			<div class="admin_login" >登陆</div>

			<div class="admin_canle" style="">
				撤销
			</div>
		</div>


		
	</div>
</div>

	
</body>




<style type="text/css">
		.ChaHao{
			font-weight:bold;
			margin-top:2%;
			margin-right:3%;
			border-radius:100%;
			border:2px solid #000000;
			width:30px;height:30px;
			text-align:center;
			line-height:30px;
			font-size:20px;
		}

		.ChaHao:hover{
			border:2px solid #47D3E5;
			color: #47D3E5;
			cursor:pointer;
			transition:0.5;
		}

		.admin_login{
			background:#000000;
			color:#FFF;
			width:29%;
			height:3rem;
			text-align:center;
			line-height:3rem;
			border-radius:8px;
			font-size:18px;
			font-weight:bold;
			margin-left:20%;
			cursor: pointer;
		}

		.admin_login:hover{
			background: #47D3E5;
			color: #FFF;
			transition:0.5s;
		}


		.admin_canle{
			background:#FFFFFF;
			color:#999;
			border:2px solid #999;
			width:28%;
			height:2.8rem;
			text-align:center;
			line-height:2.8rem;
			border-radius:8px;
			font-size:18px;
			font-weight:bold;
			margin-left:2%;
			cursor: pointer;
		}

		.admin_canle:hover{
			border:2px solid #47D3E5;
			color: #47D3E5;
			transition:0.5s;
		}


		input{
			border:2px solid #000000;
			border-radius: 5px;
			width: 58%;
			height:35px;
			font-size: 18px;
			color: #999;
		}

		input:focus {
    	border: 2px solid #47D3E5;
    	outline:none;
		}


	.TextFoote {
		animation-name:TextFoote;
		animation-duration:0.8s;
		animation-timing-function: ease-in-out;
		animation-delay: 1s;
		animation-fill-mode: forwards;
	}

	@keyframes TextFoote{
		0%{
			opacity:0;
		}
		100%{
			opacity:1;
		}
	}

	.TextContent{
		animation-name:TextContent;
		animation-duration:1s;
		animation-timing-function: ease-in-out;
		animation-delay: 0.5s;
		animation-fill-mode: forwards;
	}

	@keyframes TextContent{
		0%{
			opacity:0;
		}
		100%{
			opacity:1;
		}
	}

	.InnerTop{
		animation-name:InnerTop;
		animation-duration: 0.5s;
		animation-timing-function: ease;
		animation-fill-mode: forwards;
		animation-delay: 0.5s;
	}

	@keyframes InnerTop{
		0%{
			margin-bottom:0%;margin-top:8%;
		}
		100%{
			margin-bottom:7%;margin-top:1%
		}
	}

	.InnerBottom{
		animation-name:InnerBottom;
		animation-duration: 0.5s;
		animation-timing-function: ease;
		animation-fill-mode: forwards;
		animation-delay: 0.5s;
	}

	@keyframes InnerBottom{
		0%{
			margin-top:0%;
		}
		100%{
			margin-top:7%;
		}
	}


	#button{
		animation-name: mybutton;
		animation-duration: 3s;
		animation-iteration-count: 1;
		animation-delay: 0s;
	}

	#LoginButton{
		animation-name: mybutton;
		animation-duration: 3s;
		animation-iteration-count: 1;
		animation-delay: 0s;
	}

	@keyframes mybutton{
		0% {
		opacity: 0; /*初始状态 透明度为0*/
		}
		100% {
		opacity: 1; /*结尾状态 透明度为1*/
		}
	}


	#content{
		animation-name: TransitionBackground;
		animation-duration:1s;
		animation-delay: 0.8s;
		animation-fill-mode: forwards;
		overflow: auto; 
		background: #000000;
	}

	@keyframes TransitionBackground{
		from{
			background: #000000;
		}
		to{
			display: flex;
			background:url('/images/background2.jpg');
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
		}
	}

	.login_botton{
		width:150px;
		height:50px;
		border:2px solid #FFF;
		border-radius:8px;
		text-align:center;
		line-height:50px;
		cursor:pointer;
		display:inline-block;
		margin-right:10px;
	}

	.login_botton:hover{
		background:#996666; 
		border:2px solid #996666;
		box-shadow:2px 2px 5px #000000;
		transition:0.3s;
	}

	.help_button{
		width:150px;
		height:50px;
		border:2px solid #FFF;
		border-radius:8px;
		text-align:center;
		line-height:50px;
		cursor:pointer;
		display:inline-block;
		margin-right:10px;
	}

	.help_button:hover{
		background:#999; 
		border:2px solid #999;
		box-shadow:2px 2px 5px #000000;
		transition:0.3s;
	}

	.drawer_background{
		position: absolute;
		top:0;
		left:0;
		z-index: 100;
		background: #000000;
		width: 100%;
		height: 100%;
		opacity:0.6;

	}

	.drawer_content{
		position: absolute;
		top:10%;
		left:30%;
		z-index: 200;
		background: #FFF;
		border-radius: 8px;
		width: 40%;
		height: 36rem;
		/*box-shadow: 0 0 5px #CDCDCD;*/
		animation-name:LoginContent;
		animation-duration:0.5s;
		animation-fill-mode: forwards;
	}

	@keyframes LoginContent{
		from{
			transform:translateY(-2000px);
		}
		to{
			transform:translateY(0px);
		}
	}
	
</style>

<script type="text/javascript">
	
	var WinWidth = document.documentElement.clientWidth


	var styles = {
		SmallFont:function(){
			$("#one_text").css("fontSize","40px")
			$("#two_text").css("fontSize","30px")
			$("#Line").css("height","60px")
			$("#EVD").css({
				width:"70px",
				height:"70px",
				lineHeight:"70px",

			})
		},

		BigFont:function(){
			$("#one_text").css("fontSize","70px")
			$("#two_text").css("fontSize","60px")
			$("#Line").css("height","100px")
			$("#EVD").css({
				width:"100px",
				height:"100px",
				lineHeight:"100px",
			})
		},
	}

	function CloseDrawer(){
		$("#content").css("overflow","auto")
		$("#box").fadeOut(500)
	}

	$("#LoginButton").click(function(){
		$("#content").css("overflow","hidden")
		$("#box").fadeIn(500)
	})

	if(800 > WinWidth){
		window.styles.SmallFont()
	}else{
		window.styles.BigFont()
	}




	window.onresize = function(){

		var WinWidth = document.documentElement.clientWidth

		if(800 > WinWidth){	
			window.styles.SmallFont()
		}else{
			window.styles.BigFont()
		}
		console.log('@@@@@WIDTH:'+WinWidth)
	}


</script>


<!-- #47D3E5 -->


<!-- <style type="text/css">
	#wrapper {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-flex-direction: column;
		-webkit-flex-direction: column;
		-ms-flex-direction: column;
		flex-direction: column;
		-moz-align-items: center;
		-webkit-align-items: center;
		-ms-align-items: center;
		align-items: center;
		-moz-justify-content: space-between;
		-webkit-justify-content: space-between;
		-ms-justify-content: space-between;
		justify-content: space-between;
		position: relative;
		min-height: 100vh;
		width: 100%;
		padding: 4rem 2rem;
		z-index: 3;
	}

	#wrapper:before {
			content: '';
			display: block;
		}

		@media screen and (max-width: 1680px) {

			#wrapper {
				padding: 3rem 2rem;
			}

		}

		@media screen and (max-width: 736px) {

			#wrapper {
				padding: 2rem 1rem;
			}

		}

		@media screen and (max-width: 480px) {

			#wrapper {
				padding: 1rem;
			}

		}

		/*-------------------------------------------------*/

		#header {
			display: -moz-flex;
			display: -webkit-flex;
			display: -ms-flex;
			display: flex;
			-moz-flex-direction: column;
			-webkit-flex-direction: column;
			-ms-flex-direction: column;
			flex-direction: column;
			-moz-align-items: center;
			-webkit-align-items: center;
			-ms-align-items: center;
			align-items: center;
			-moz-transition: -moz-transform 0.325s ease-in-out, -moz-filter 0.325s ease-in-out, opacity 0.325s ease-in-out;
			-webkit-transition: -webkit-transform 0.325s ease-in-out, -webkit-filter 0.325s ease-in-out, opacity 0.325s ease-in-out;
			-ms-transition: -ms-transform 0.325s ease-in-out, -ms-filter 0.325s ease-in-out, opacity 0.325s ease-in-out;
			transition: transform 0.325s ease-in-out, filter 0.325s ease-in-out, opacity 0.325s ease-in-out;
			background-image: -moz-radial-gradient(rgba(0, 0, 0, 0.25) 25%, transparent 55%);
			background-image: -webkit-radial-gradient(rgba(0, 0, 0, 0.25) 25%, transparent 55%);
			background-image: -ms-radial-gradient(rgba(0, 0, 0, 0.25) 25%, transparent 55%);
			background-image: radial-gradient(rgba(0, 0, 0, 0.25) 25%, transparent 55%);
			max-width: 100%;
			text-align: center;
		}

		#header > * {
			-moz-transition: opacity 0.325s ease-in-out;
			-webkit-transition: opacity 0.325s ease-in-out;
			-ms-transition: opacity 0.325s ease-in-out;
			transition: opacity 0.325s ease-in-out;
			position: relative;
			margin-top: 3.5rem;
		}

		#header > *:before {
			content: '';
			display: block;
			position: absolute;
			top: calc(-3.5rem - 1px);
			left: calc(50% - 1px);
			width: 1px;
			height: calc(3.5rem + 1px);
			background: #ffffff;
		}


		#header > :first-child {
			margin-top: 0;
		}

		#header > :first-child:before {
			display: none;
		}

		#header .logo {
			width: 5.5rem;
			height: 5.5rem;
			line-height: 5.5rem;
			border: solid 1px #ffffff;
			border-radius: 100%;
		}



</style> -->