
<div id="footer">

    <div class="wrapper">
        <ul class="footerList">
            @include('front.layouts._mainMenu')
        </ul>

        <ul class="contactList">
            <li>歡迎學校機關團體、公司行號、協會組織、財團法人預約，我們將為您客製化僅屬於您的導覽路線。</li>
            <li>{{$info->contact_phone}}</li>
            <li>{{$info->contact_email}}</li>
        </ul>
        <a target="_blank" href="https://www.tripadvisor.com.tw/Attraction_Review-g297910-d8354341-Reviews-TC_Time_Walk-Taichung.html"><img id="tripadvisor" src="{{url('images/tripadvisor.png')}}" /></a>
        <img id="footerLogo" src="{{url('images/footerLogo.png')}}" />
    </div>

</div>

<div id="copyright">&copy; 2016 TC Time walk. All rights reserved. design by CircleStudio & Jessie</div>
