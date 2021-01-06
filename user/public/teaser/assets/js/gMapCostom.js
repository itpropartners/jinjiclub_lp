    function initialize() {
      var latlng = new google.maps.LatLng(35.657336,139.699493);/*表示したい場所の経度、緯度*/
      var myOptions = {
        zoom: 16, /*拡大比率*/
        center: latlng, /*表示枠内の中心点*/
        mapTypeControlOptions: { mapTypeIds: ['noText', google.maps.MapTypeId.ROADMAP] }/*表示タイプの指定*/
      };
      var map = new google.maps.Map(document.getElementById('map_custmomize'), myOptions);/*マップのID取得*/
      /*スタイルのカスタマイズ*/
      var styleOptions =

        [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]

      var styledMapOptions = { name: '株式会社サポーターズ' }
      var sampleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
      map.mapTypes.set('sample', sampleType);
      map.setMapTypeId('sample');
     
    /*WEB企画アイコンの取得*/
    var icon = new google.maps.MarkerImage('assets/img/ic_map.png',/*アイコンの場所*/
      new google.maps.Size(53,55),/*アイコンのサイズ*/
      new google.maps.Point(0,0)/*アイコンの位置*/
    );
     
    /*マーカーの設置*/
    var markerOptions = {
      position: latlng,/*表示場所と同じ位置に設置*/
      map: map,
      icon: icon,
      title: '株式会社サポーターズ'/*マーカーのtitle*/
    };
    var marker = new google.maps.Marker(markerOptions);
     
    }
