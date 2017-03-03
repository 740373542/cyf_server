<!DOCTYPE html>
<html>
  <head>
		<script src="/JsLib/vue_build/vue.min.js"></script>
    <script src="/JsLib/jquery_build/jquery-3.1.1.min.js"></script>
		<script src="/JsLib/js_methods_build/My.js"></script>
  </head>

  <body>


<div  id="v_project_header"></div>




<script type="text/javascript">


  var repository = new Vue({
    el:'#v_project_header',
    data:function(){
      return {
        ls:'data',
      }
    },

    created:function(){

    },

    mounted:function(){

    },

    updated:function(){

    },

    destroyed:function(){

    },

    computed:{
   
    },

    methods:{
      
    },

    watch:{

    },
    
  })

</script>

    








  </body>




</html>


<script type="text/javascript">
  
  ;(function ($) {

  $.event = $.event || function () {

      var _observer = {};
      var subscribe = function (eventName_, obj_, args_) {

        args_ = args_ || {};
        var fireOthers_ = args_.fireOthers || false;
        if (fireOthers_) {
          _observer[eventName_] = [];
        }
        _observer[eventName_] = _observer[eventName_] || [];

        if (_observer[eventName_].length > 0) {
          $.event.remove(eventName_, obj_);
        }

        _observer[eventName_].push(obj_);
        return true;
      };

      var publish = function (eventName_, data_, data2_, from_) { 
        // data_ = data_ || {};
        from_ = from_ || null

        console.log('eventName_:'+eventName_)
        console.log('data_:')
        console.dir(data_)

        var handlers = _observer[eventName_] || [];
        
        var l = handlers.length;
        
        var _stop = false;
        if (from_) {
          from_['hd_' + eventName_](data_, data2_);
          return
        }

        for (var _i = l - 1; _i >= 0; _i--) {
          if (!_stop) {
            var obj = handlers[_i];
            if (typeof obj === 'string') {
              if (!obj) {
                console.log('........fire')
                $.event.fire(obj)
              }
            }

            if (obj && obj['hd_' + eventName_]) {
              var res = obj['hd_' + eventName_](data_, data2_);
              if(res && res.stop){
                _stop = true 
              }
              // _stop = obj['hd_' + eventName_](data_, data2_);
            }
          }
        }
      };

      var remove = function (eventName_, obj_) {
        var handlers = _observer[eventName_];
        var l = handlers.length;
        for (var i = l - 1; i >= 0; i--) {
          if (handlers[i] === obj_) {
            handlers.splice(i, 1);
            break;
          }
        }
      };

      var removeEvent = function (eventName_) {
        _observer[eventName_] = [];
      };

      var fire = function (obj_) {
        for (var eventName in _observer) {
          var handlers;
          if (_observer.hasOwnProperty(eventName)) {
            handlers = _observer[eventName];
          }
          var length = handlers.length;
          for (var i = length; i > -1; i--) {
            if (handlers[i] === obj_) {
              handlers.splice(i, 1);
            }
          }
        }
      };

      var fireAll = function () {
        _observer = {};
      };

      return {
        nodes: _observer,
        sub: subscribe,
        pub: publish,
        remove: remove,
        fire: fire,
        fireAll: fireAll
      };
    }();
})($$);

</script>