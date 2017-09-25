<template>
    <div id="map" class="col-md-12" style="height: 536px;margin: 2rem 0;">

    </div>
</template>

<script>
    export default {
        created() {
            console.log(123123123);
            let that = this;
            setTimeout(function (){
                that.getMap();
            }, 3000);
        },

        methods: {
            getMap() {
                // 百度地图API功能
            	var map = new BMap.Map("map");
            	var point = new BMap.Point(116.417854,39.921988);
            	var marker = new BMap.Marker(point);  // 创建标注
            	map.addOverlay(marker);              // 将标注添加到地图中
            	map.centerAndZoom(point, 15);
            	var opts = {
            	  width : 200,     // 信息窗口宽度
            	  height: 100,     // 信息窗口高度
            	  title : "海底捞王府井店" , // 信息窗口标题
            	  enableMessage:true,//设置允许信息窗发送短息
            	  message:"亲耐滴，晚上一起吃个饭吧？戳下面的链接看下地址喔~"
            	}
            	var infoWindow = new BMap.InfoWindow("地址：北京市东城区王府井大街88号乐天银泰百货八层", opts);  // 创建信息窗口对象
            	marker.addEventListener("click", function(){
            		map.openInfoWindow(infoWindow,point); //开启信息窗口
            	});
            }
        }
    }
</script>
