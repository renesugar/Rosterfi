@extends('layouts.hometemplate')

@section('title')
    Event Management
@endsection

@push('asset')
<link href="{{url('/assets/global/plugins/socicon/socicon.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
<!-- File Input -->
<link href={{url('/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}} rel="stylesheet" type="text/css" />
<style>
    .card {
        background:#FFF;
        display: block;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        border:1px solid #AAA;
        border-bottom:3px solid #BBB;
        padding:0px;
        margin-bottom:1em;
        overflow:hidden;
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        font-family: 'Roboto', sans-serif;
        -webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .card-body{
        display:flex;
    }

    .card-content {
        width: 100%;
    }

    .pull-left {
        float: left;
    }

    .pull-none {
        float: none !important;
    }

    .pull-right {
        float: right;
    }

    .card-header{
        width:100%;
        color:#2196F3;
        border-bottom:3px solid #BBB;
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        font-family: 'Roboto', sans-serif;
        padding:0px;
        margin-top:0px;
        overflow:hidden;
        -webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);

    }

    .card-header-blue{
        background-color:#2196F3;
        color:#FFFFFF;
        border-bottom:3px solid #BBB;
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        font-family: 'Roboto', sans-serif;
        padding:0px;
        margin-top:0px;
        overflow:hidden;
        -webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .card-header-red{
        background-color:#F44336;
        color:#FFFFFF;
        border-bottom:3px solid #BBB;
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        font-family: 'Roboto', sans-serif;
        padding:0px;
        margin-top:0px;
        overflow:hidden;
        -webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .card-header-grey{
        background-color:#424242;
        color:#FFFFFF;
        border-bottom:3px solid #BBB;
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        font-family: 'Roboto', sans-serif;
        padding:0px;
        margin-top:0px;
        overflow:hidden;
        -webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .card-header-orange{
        background-color:#E65100;
        color:#FFFFFF;
        border-bottom:3px solid #BBB;
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        font-family: 'Roboto', sans-serif;
        padding:0px;
        margin-top:0px;
        overflow:hidden;
        -webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .card-header-pink{
        background-color:#E91E63;
        color:#FFFFFF;
        border-bottom:3px solid #BBB;
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        font-family: 'Roboto', sans-serif;
        padding:0px;
        margin-top:0px;
        overflow:hidden;
        -webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .card-heading {
        display: block;
        font-size: 25px;
        line-height: 20px;
        margin-bottom: 24px;
        border-bottom: 1px #2196F3;
        text-align: center;
        color:#fff;

    }
    .card-footer{
        border-top:1px solid #eee;
        padding: 10px;
        text-align: center;
        background-color: rgb(235, 237, 241);

    }

    .card-footer a:hover {
        text-decoration: none;
    }

    .card-action-pink{
        color:#E91E63;
        font-size: large;
    }
    .card-action-red{
        color:#F44336;
        font-size: large;
    }
    .card-action-grey{
        color:#424242;
        font-size: large;
    }
    .card-action-pink{
        color:#E91E63;
        font-size: large;
    }
    .card-action-orange{
        color:#E65100;
        font-size: large;
    }

    .card-image img {
        display: block;
        height: auto;
        width: 100%;

    }

    .card-body-image {
        width: 100%;
        height: 150px;
        border: 1px solid transparent;
        border-radius: 5px;
    }

    .card-body-section {
        display: block;
        width: 50%;
        padding: 10px;
    }

    .card-date-label {
        font-size: 16px;
        font-weight: 500;
        color: #5b9bd1;
    }

    .card-date-box {
        height: 50%;
        padding: 10px;
        border-bottom: 1px solid #eee;
    }

    .panel{
        text-align: center;
    }

    .content-body{
        padding: 0px 25px;
    }

    .row input{
        width : 100%;
    }

    div.contact-member img{
        width:100%;
    }

    div.member-input div{
        margin : 15px 0;
    }

    div.member-input input{
        width:100%;
    }

    div.member-input button{
        margin-top : 8px;
    }

    .socicon-btn{
        margin : 5px;
    }

    div.panel-footer::after{
        clear: both;
        display: table;
        content: " ";
    }

    div.panel-footer div{
        width:50%;
        float:left;
    }

    div.panel-footer div#price_cost{
        padding-top: 7px;
    }

</style>
@endpush

@section('content')

    <!-- BEGIN PAGE CONTENT INNER -->

    <div class="page-container">
        <div class="page-content-wrapper">
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <div class="container">
                    <!-- BEGIN PAGE TITLE -->
                    <div class="page-title">
                        <h1> Your events and members. </h1>
                    </div>
                    <!-- END PAGE TITLE -->
                </div>
            </div>
            <!-- END PAGE HEAD-->

            <div class="page-content">
                <div class="container">
                    <!-- BEGIN PAGE BREADCRUMBS -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <span> Events / </span>
                        </li>
                        <li>
                            <span> My Event / </span>
                        </li>
                        <li>
                            <span> {{ $event -> name }}</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMBS -->

                    @if($errors -> any())
                        <h4>{{$errors -> first()}}</h4>
                    @endif

                    <div class="page-content-inner">
                        <div class="portlet light">
                            <div class="portlet-body tabbable-default">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_2_1" data-toggle="tab"> Event Info </a>
                                    </li>
                                    <li>
                                        <a href="#tab_2_2" data-toggle="tab"> Event Members </a>
                                    </li>
                                    @if( $theUserRole == 'owner' || $theUserRole == 'admin' )
                                        <li>
                                            <a href="#tab_2_3" data-toggle="tab"> Configure Event </a>
                                        </li>
                                        <li>
                                            <a href="#tab_2_4" data-toggle="tab"> Transactions </a>
                                        </li>
                                    @endif
                                </ul>
                                <div class="tab-content">
                                    <!-- Tab1 start -->
                                    <div class="tab-pane fade active in" id="tab_2_1">
                                        @include('event.management.tabs.eventInfo')
                                    </div>
                                    <div class="tab-pane fade" id="tab_2_2">
                                        @include('event.management.tabs.eventMembers')
                                    </div>
                                    @if( $theUserRole == 'owner' || $theUserRole == 'admin' )
                                        <div  class="tab-pane fade" id="tab_2_3">
                                            @include('event.management.tabs.eventConfigure')
                                        </div>
                                        <div  class="tab-pane fade" id="tab_2_4">
                                            @include('event.management.tabs.eventTransactions')
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('event.management.modals.editContactInfo')
    @include('event.management.modals.addEventPrice')
    @include('event.management.modals.editEventPrice')
    @include('event.management.modals.inviteEventMember')
    @include('event.management.modals.manualTransactions')
    @include('event.management.modals.memberSelectColumns')
    @include('event.management.modals.transactionSelectColumns')

@endsection
@push('script')
<script src="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCjKyxewbk6_hbH9tSAjNWTPCqN9hiPz-o" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/gmaps/gmaps.min.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        if("{{Session::get('active_tab')}}"){
            $("a[href=\"#{{Session::get('active_tab')}}\"").trigger('click');
        }
        $("div#tab_2_2 button#member_view_toggle").on("click", function(event){
            console.log($(this).text());
            if( ' Icon View ' == $(this).text() ){
                $(this).text(' Spreadsheet View ');
                $(this).parent().parent().next().removeClass('active').addClass('hidden');
                $(this).parent().parent().parent().next().removeClass('hidden').addClass('active');
                $(this).parent().parent().parent().next().next().removeClass('active').addClass('hidden');
            }
            else if( ' Spreadsheet View ' == $(this).text() ){
                $(this).text(' Icon View ');
                $(this).parent().parent().next().removeClass('hidden').addClass('active');
                $(this).parent().parent().parent().next().removeClass('active').addClass('hidden');
                $(this).parent().parent().parent().next().next().removeClass('hidden').addClass('active');
            }
        });
        $(".panel-title a[href='#edit_event_price']").on("click", function(event){
            event.preventDefault();
            $('#edit_event_price').find('#price_name').val($(this).parent().find('#price_name').text());
            $('#edit_event_price').find('#price_desc').val($(this).parent().parent().parent().find('#price_desc').text());
            var cost = $(this).parent().parent().parent().find('#price_cost').text().trim();
            if( 'Free' == cost){
                $('#edit_event_price').find('#price_cost').val(0);
            }
            else if( "$" == cost.substring(0,1) ){
                $('#edit_event_price').find('#price_cost').val(cost.substring(1));
            }
            $('#edit_event_price').find('input#price_members_only').parent().removeClass('checked');
            if( $(this).parent().parent().parent().find('#price_is_for_mem').text() == '1' ){
                $('#edit_event_price').find('input#price_members_only').parent().attr('class', 'checked');
            }
            $('#edit_event_price').find('#price_id').val($(this).parent().parent().parent().find('#price_id').text());
        });
        $('div#sel-col button#ref-col').on('click', function(event){
            if( $('input[type="checkbox"]#admin').is(':checked') ){
                $('.col-table-admin').css('display', 'table-cell');
            }
            else{
                $('.col-table-admin').css('display', 'none');
            }
            if( $('input[type="checkbox"]#ct').is(':checked') ){
                $('.col-table-city').css('display', 'table-cell');
            }
            else{
                $('.col-table-city').css('display', 'none');
            }
            if( $('input[type="checkbox"]#fname').is(':checked') ){
                $('.col-table-fn').css('display', 'table-cell');
            }
            else{
                $('.col-table-fn').css('display', 'none');
            }
            if( $('input[type="checkbox"]#stet').is(':checked') ){
                $('.col-table-state').css('display', 'table-cell');
            }
            else{
                $('.col-table-state').css('display', 'none');
            }
            if( $('input[type="checkbox"]#lname').is(':checked') ){
                $('.col-table-ln').css('display', 'table-cell');
            }
            else{
                $('.col-table-ln').css('display', 'none');
            }
            if( $('input[type="checkbox"]#zcode').is(':checked') ){
                $('.col-table-zcode').css('display', 'table-cell');
            }
            else{
                $('.col-table-zcode').css('display', 'none');
            }
            if( $('input[type="checkbox"]#idate').is(':checked') ){
                $('.col-table-idate').css('display', 'table-cell');
            }
            else{
                $('.col-table-idate').css('display', 'none');
            }
            if( $('input[type="checkbox"]#phone').is(':checked') ){
                $('.col-table-phone').css('display', 'table-cell');
            }
            else{
                $('.col-table-phone').css('display', 'none');
            }
            if( $('input[type="checkbox"]#adate').is(':checked') ){
                $('.col-table-adate').css('display', 'table-cell');
            }
            else{
                $('.col-table-adate').css('display', 'none');
            }
            if( $('input[type="checkbox"]#mail').is(':checked') ){
                $('.col-table-email').css('display', 'table-cell');
            }
            else{
                $('.col-table-email').css('display', 'none');
            }
            if( $('input[type="checkbox"]#exp').is(':checked') ){
                $('.col-table-exp').css('display', 'table-cell');
            }
            else{
                $('.col-table-exp').css('display', 'none');
            }
        });
        $('div#sel-trans-cols button#ref-cols').on('click', function(){
            if( $('input[type="checkbox"]#_date').is(':checked') ){
                $('.col-tr-date').css('display', 'table-cell');
            }
            else{
                $('.col-tr-date').css('display', 'none');
            }
            if( $('input[type="checkbox"]#_fname').is(':checked') ){
                $('.col-tr-fn').css('display', 'table-cell');
            }
            else{
                $('.col-tr-fn').css('display', 'none');
            }
            if( $('input[type="checkbox"]#_lname').is(':checked') ){
                $('.col-tr-ln').css('display', 'table-cell');
            }
            else{
                $('.col-tr-ln').css('display', 'none');
            }
            if( $('input[type="checkbox"]#_amt').is(':checked') ){
                $('.col-tr-amount').css('display', 'table-cell');
            }
            else{
                $('.col-tr-amount').css('display', 'none');
            }
            if( $('input[type="checkbox"]#_src').is(':checked') ){
                $('.col-tr-source').css('display', 'table-cell');
            }
            else{
                $('.col-tr-source').css('display', 'none');
            }
            if( $('input[type="checkbox"]#_evp').is(':checked') ){
                $('.col-tr-plan').css('display', 'table-cell');
            }
            else {
                $('.col-tr-plan').css('display', 'none');
            }
            if( $('input[type="checkbox"]#_re').is(':checked') ){
                $('.col-tr-re').css('display', 'table-cell');
            }
            else {
                $('.col-tr-re').css('display', 'none');
            }
        });
        function exportTableToCSV($table, filename) {

            var $headers = $table.find('tr:has(th)')
                ,$rows = $table.find('tr:has(td)')

                // Temporary delimiter characters unlikely to be typed by keyboard
                // This is to avoid accidentally splitting the actual contents
                ,$tmpColDelim = String.fromCharCode(11) // vertical tab character
                ,$tmpRowDelim = String.fromCharCode(0) // null character

                // actual delimiter characters for CSV format
                ,$colDelim = '","'
                ,$rowDelim = '"\r\n"';

            // Grab text from table into CSV formatted string
            var csv = '"';
            csv += $headers.map(function (i, row) {
                    var $row = $(row),
                        $cols = $row.find('th');

                    return $cols.map(function (j, col) {
                        var $col = $(col),
                            $text = $col.text();

                        return $text.replace(/"/g, '""'); // escape double quotes

                    }).get().join($tmpColDelim);

                }).get().join($tmpRowDelim)
                    .split($tmpRowDelim).join($rowDelim)
                    .split($tmpColDelim).join($colDelim) + $rowDelim;

            // Grab text from table into CSV formatted string
            csv += $rows.map(function (i, row) {
                    var $row = $(row),
                        $cols = $row.find('td');

                    return $cols.map(function (j, col) {
                        var $col = $(col),
                            $text = $col.text();

                        return $text.replace(/"/g, '""'); // escape double quotes

                    }).get().join($tmpColDelim);

                }).get().join($tmpRowDelim)
                    .split($tmpRowDelim).join($rowDelim)
                    .split($tmpColDelim).join($colDelim) + '"';

            console.log(csv);

            // Deliberate 'false', see comment below
            if (false && window.navigator.msSaveBlob) {

                var $blob = new Blob([decodeURIComponent(csv)], {
                    type: 'text/csv;charset=utf8'
                });

                // Crashes in IE 10, IE 11 and Microsoft Edge
                // See MS Edge Issue #10396033: https://goo.gl/AEiSjJ
                // Hence, the deliberate 'false'
                // This is here just for completeness
                // Remove the 'false' at your own risk
                window.navigator.msSaveBlob($blob, filename);

            } else if (window.Blob && window.URL) {console.log(2);
                // HTML5 Blob
                var $blob = new Blob([csv], { type: 'text/csv;charset=utf8' });
                var csvUrl = window.URL.createObjectURL($blob);

                $(this)
                    .attr({
                        'download': filename,
                        'href': csvUrl
                    });
            } else {
                // Data URI
                var csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);

                $(this)
                    .attr({
                        'download': filename,
                        'href': csvData,
                        'target': '_blank'
                    });
            }
        }
        // This must be a hyperlink
        $(".export.for-transactions").on('click', function() {
            // CSV
            var args = [$('table#transactions-table'), 'export.csv'];

            exportTableToCSV.apply(this, args);

            // If CSV, don't do event.preventDefault() or return false
            // We actually need this to be a typical hyperlink
        });
        // This must be a hyperlink
        $(".export.for-members").on('click', function() {
            // CSV
            var args = [$('table#members-table'), 'export.csv'];

            exportTableToCSV.apply(this, args);

            // If CSV, don't do event.preventDefault() or return false
            // We actually need this to be a typical hyperlink
        });
        $('button#sandn').on('click', function(){
            $('form#mtForm').submit();
            document.getElementById('userSelector').selectedIndex = -1;
            document.getElementById('trSelector').selectedIndex = -1;
            $('input#amount').val('');
            flag = 1;
        });
        $('#create-price-event').validate({
            rules:{
                pName : 'required',
                pDesc : 'required',
                pCost : 'number'
            }
        });
        $('#update-price-event').validate({
            rules:{
                pName : 'required',
                pDesc : 'required',
                pCost : 'number'
            }
        });
        $('#mtForm').validate({
            rules:{
                mt_amount :{
                    required : true,
                    number : true
                }
            }
        });
    });
    $(document).ready(function(){
        var geocoder; //To use later
        var map; //Your map

        geocoder = new google.maps.Geocoder();
        //Default setup
        var latlng = new google.maps.LatLng(-34.397, 150.644);
        var myOptions = {
            zoom: 8,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("gmap_contact"), myOptions);

        var zcode = '{{$theContact -> zipcode}}';
        geocoder.geocode( { 'address': zcode }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                //Got result, center the map and put it out there
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });
            } else {
                alert("Geocode was not successful for the following reason: " + status);
            }
        });

        var c_map = new google.maps.Map(document.getElementById("gmap_marker"), myOptions);

        geocoder.geocode( { 'address': zcode }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                //Got result, center the map and put it out there
                c_map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: c_map,
                    position: results[0].geometry.location
                });
            } else {
                alert("Geocode was not successful for the following reason: " + status);
            }
        });

        var observer = new MutationObserver(function(mutations){
            mutations.forEach(function(mutationRecord){
                console.log(mutationRecord);
                google.maps.event.trigger(c_map, "resize");
            });
        });

        var target = document.getElementById('edit_contact_info');
        observer.observe(target, {attributes: true, attributeFilter: ['style']});
    });
</script>
@endpush