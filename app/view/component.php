
<div id="component">
	<div @click="Increment">{{data}}</div>
</div>

<script type="text/javascript">
	Vue.component('component',{
		template:$('#component').html(),
		props:[],
		data:function(){
			return {
				data:'hello word',
			}
		},

		methods:{
			test:function(){
				var self = this 
				self.test1_ = 55555;
			},

			Increment:function(){
				this.$emit('increment')
			},

		},

		watch:{
			test1_:function(val){
				alert(val)
			}
		}
	})
</script>