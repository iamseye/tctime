<div id="map">
    <div class="mapWrapper">
        <h2>導覽地圖</h2>
        <ul id="mapArea">
            <li id="a01"><span>舊城區</span></li>
            <li id="a02"><span>中西區</span></li>
            <li id="a03"><span>草悟道區</span></li>
            <li id="a04"><span>南屯區</span></li>
            <li id="a05"><span>霧峰區</span></li>
        </ul>
        <ul id="mapList">

            <li>
                <div class="title">舊城區 Downtown</div>
                @foreach($map->downtowns as $downtown)
                    <a href="{{url('tour/'.$downtown->id)}}"><img src="{{url('images/tours/'.$downtown->picture_list)}}"></a>
                @endforeach
                <a class="moreTour" href="{{url('tour')}}"></a>
            </li>
            <li>
                <div class="title">中西區 MidWest</div>
                @foreach($map->midWests as $midWest)
                    <a href="{{url('tour/'.$midWest->id)}}"><img src="{{url('images/tours/'.$midWest->picture_list)}}"></a>
                @endforeach
                <a class="moreTour" href="{{url('tour')}}"></a>
            </li>
            <li>
                <div class="title">草悟道區 Calligraphy Path</div>
                @foreach($map->calligraphies as $calligraphy)
                    <a href="{{url('tour/'.$calligraphy->id)}}"><img src="{{url('images/tours/'.$calligraphy->picture_list)}}"></a>
                @endforeach
                <a class="moreTour" href="{{url('tour')}}"></a>
            </li>
            <li>
                <div class="title">南屯區 Nantun</div>
                @foreach($map->nantuns as $nantun)
                    <a href="{{url('tour/'.$nantun->id)}}"><img src="{{url('images/tours/'.$nantun->picture_list)}}"></a>
                @endforeach
                <a class="moreTour" href="{{url('tour')}}"></a>
            </li>
            <li>
                <div class="title">霧峰區 Wufang</div>
                @foreach($map->wufangs as $wufang)
                    <a href="{{url('tour/'.$wufang->id)}}"><img src="{{url('images/tours/'.$wufang->picture_list)}}"></a>
                @endforeach
                <a class="moreTour" href="{{url('tour')}}"></a>
            </li>
        </ul>
    </div>
</div>