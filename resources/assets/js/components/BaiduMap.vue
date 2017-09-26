<template>
    <div id="map" class="col-md-12" style="height: 536px;margin: 2rem 0;">

    </div>
</template>

<script>
    export default {
        props: ['latitude', 'longitude', 'address', 'title'],
        created() {
            let that = this;
            setTimeout(function (){
                that.getMap();
            }, 3000);
        },

        methods: {
            getMap() {
                // 百度地图API功能
            	var map = new BMap.Map("map");
            	var point = new BMap.Point(this.latitude,this.longitude);
            	var marker = new BMap.Marker(point);  // 创建标注
            	map.addOverlay(marker);              // 将标注添加到地图中
            	map.centerAndZoom(point, 15);
            	var opts = {
            	  width : 200,     // 信息窗口宽度
            	  height: 100,     // 信息窗口高度
            	  title : this.title , // 信息窗口标题
            	}
            	var infoWindow = new BMap.InfoWindow("地址：" + this.address, opts);  // 创建信息窗口对象
            	marker.addEventListener("click", function(){
            		map.openInfoWindow(infoWindow,point); //开启信息窗口
            	});
            }
        }
    }
</script>
