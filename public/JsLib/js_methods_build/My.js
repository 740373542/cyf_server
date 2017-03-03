var repository = {}

var $$ = {}

$$.jsonToString = function (json) {
  return JSON.stringify(json)
};
$$.stringToJSON = function (str) {
  var r = null
  try{
    r = JSON.parse(str)
  } catch (e) {
    console.error("str parse to obj fail! str: " + str);
  }
  return r
};


$$.js2str = $$.jsonToString
$$.str2js = $$.stringToJSON



$$.extend = function(params){

	var start = params.start || function(){}
	var chenge = params.chenge || function(){}

	var options = {
		el:params.el,

		data:params.data,

		mounted:function(){
			if(start){
				start.apply(this)
			}

			if(params.event){
				for(var k in params.event){
					var event = params.event[k]
					$$.event.set(event,this)
				}
			}

		},

		updated:function(){
			if(chenge){
				chenge.apply(this)
			}
		},

		destroyed:function(){
			$$.event.delCurrObj(this)
    },

		computed:params.computed,

		methods:params.methods,

		watch:params.watch,
	}

	return new Vue(options);

}



$$.event = function(){
	var EventContainer = {};

	var SetupEvent = function(EventName,obj){
		EventContainer[EventName] = EventContainer[EventName] || []
		EventContainer[EventName].push(obj)
		console.log(EventContainer[EventName].length)
	}

	var SendoutEvent = function(__EventName , data){
		var obj = EventContainer[__EventName] || []
		console.dir(obj)
		var objLength = obj.length
		for(var k in obj){
			var eventObj = obj[k]
			eventObj['hd_'+__EventName](data);
		}
		
	}

	var removeCurrentObj = function(obj){
		for (var k in EventContainer){
			var allObj = EventContainer[k]
			for (var i in allObj){
				var currentObj = allObj[i]
				if(currentObj === obj){
					allObj.splice(i,1)
				}
			} 
		}
	}

	var removeAllObj = function(){
		var allObj ;
		for(var k in EventContainer){
			if(EventContainer.hasOwnProperty(k)){
				allObj = EventContainer[k];	
			}
			var allObjLength = allObj.length
			for (var i = allObj.length-1; i >= 0; i--) {
				allObj.splice(i,1)
			}  
		}
	}

	var removeEvent = function(){
		EventContainer = {};
	}

	return {
		data:EventContainer,
		set:SetupEvent,
		send:SendoutEvent,
		delAllObj:removeAllObj,
		delEvent:removeEvent,
		delCurrObj:removeCurrentObj,
	}

}()


