(function($){
$.fn.extend({        
        Scroll1:function(opt,callback){                
                //参数初始化                
                if(!opt) var opt={};                
                var _BtnRight = $("#"+ opt.right);//Shawphy:向右按钮                
                var _BtnLeft = $("#"+ opt.left);//Shawphy:向左按钮                
                var timerID; 
				var timer; 
                var _this=this.eq(0).find("ul:first");                
                var     lineW=_this.find("li:first").width(), //获取列表宽度
                        line=opt.line?parseInt(opt.line,10):parseInt(this.width()/lineW,10), //每次滚动的行数，默认为一屏，即父容器高度                                                
												speed=opt.speed?parseInt(opt.speed,10):500; //卷动速度，数值越大，速度越慢（毫秒）                                                
												timer=opt.timer; //?parseInt(opt.timer,10):3000; //滚动的时间间隔（毫秒）                
								if(line==0) line=1;                
								var rightWidth=0-line*lineW;                
								//滚动函数                
								var scrollLeft=function(){                        
								        _BtnLeft.unbind("click",scrollLeft); //Shawphy:取消向右按钮的函数绑定                        
								        _this.animate({                                
								                marginLeft:rightWidth
												},speed,function(){                                
												        for(i=1;i<=line;i++){                                        
												                _this.find("li:first").appendTo(_this);                                
												        }                                
												        _this.css({marginLeft:0});                                
												        _BtnLeft.bind("click",scrollLeft); //Shawphy:绑定向右按钮的点击事件                        
												});                 
								}                
								//Shawphy:向右翻页函数                
								var scrollRight=function(){
									_BtnRight.unbind("click",scrollRight);
									for(i=1;i<=line;i++){
										_this.find("li:last").show().prependTo(_this);
									}
									_this.css({marginLeft:rightWidth});
									_this.animate({
										marginLeft:0
									},speed,function(){
										_BtnRight.bind("click",scrollRight);
									});
								}
								//Shawphy:自动播放                
								var autoPlay = function(){
												if(timer)timerID = window.setInterval(scrollLeft,timer);                
								};                
								var autoStop = function(){                        
												if(timer)window.clearInterval(timerID);                
								};                 
								//鼠标事件绑定                
								_this.hover(autoStop,autoPlay); autoPlay();                
								_BtnRight.css("cursor","pointer").click( scrollRight ).hover(autoStop,autoPlay);//Shawphy:向左向右鼠标事件绑定                
								_BtnLeft.css("cursor","pointer").click( scrollLeft ).hover(autoStop,autoPlay);         
				}      
})
})(jQuery);
