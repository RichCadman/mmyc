// 百度地图API功能
			var map = new BMap.Map("allmap");    // 创建Map实例
			map.centerAndZoom(new BMap.Point(113.868922,22.613411), 16);  // 初始化地图,设置中心点坐标和地图级别
			map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
			map.setCurrentCity("济南");          // 设置地图显示的城市 此项是必须设置的
			map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
		
			// 百度地图API功能
			var point = new BMap.Point(113.868922,22.613411);
			map.centerAndZoom(point, 16);
			var marker = new BMap.Marker(point);  // 创建标注
			map.addOverlay(marker);               // 将标注添加到地图中
//			marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
			map.centerAndZoom(point, 16);
			var opts = {
			  width : 220,     // 信息窗口宽度
			  height: 55,     // 信息窗口高度
			  title : "深圳美鸣科技有限公司" , // 信息窗口标题
//			  enableMessage:true,//设置允许信息窗发送短息
//			  message:"地址：深圳市宝安西乡前进二路航城工业区富鑫林工业园D栋3楼"
			}
			var infoWindow = new BMap.InfoWindow("地址：深圳市宝安西乡前进二路航城工业区富鑫林工业园D栋3楼", opts);  // 创建信息窗口对象     
			map.openInfoWindow(infoWindow,point); //开启信息窗口