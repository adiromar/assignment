@include('header.dash-header')
<div id="prebook_assignments" class="modal fade" tabindex="-1" aria-hidden="true"></div>


<!-- END HEADER -->


 <!--coupon section html starts here-->

    <style>/*.full-set{display:block; width:100%;}.border-coupon{ border: 1px solid #56af45; margin-bottom: 20px;    background: url(https://myassignmenthelp.com/assets/img/wallet-coupan.png);
    background-repeat: no-repeat;
    /*background-size: contain;*/ }.money-wrap{   
    text-align: left;
    color: white;
    font-size: 20px;
    padding-top: 12px;
    margin-left: 0px;
    padding-left: 12px;
    font-size: 25px;} .red-text{    color: red!Important;
    font-size: 11.6px;
    margin-top: 15px;font-weight:500;}
  .credit-text{font-weight: 500;
    font-size: 20px;
    margin-top: 12px;}*/
    
    /*responsive*/
/*  @media(max-width:1297px){ .red-text{font-size: 10.6px;}.credit-text{font-weight: 500;font-size: 18px;margin-top: 12px;}}
  @media(max-width:1230px){ .red-text{font-size: 9.6px;}.credit-text{font-weight: 500;font-size: 16px;margin-top: 12px;}#main .page-header .pull-left h1 {
    font-size: 22px;}
  @media(max-width:1156px){ .red-text{font-size: 8.6px;}.credit-text{font-weight: 500;font-size: 13px;margin-top: 12px;}#main .page-header .pull-left h1 {
    font-size: 20px;}.fulset-adj{font-size:8px;}.money-wrap{font-size:20px;}}
  @media(max-width:1100px){ .red-text{font-size: 8px;}.credit-text{font-weight: 500;font-size: 12px;margin-top: 12px;}#main .page-header .pull-left h1 {
    font-size: 18px;}.fulset-adj{font-size:8px;}.money-wrap{font-size:18px;}}
  @media(max-width:1040px){ .border-coupon {
    border: 1px solid #56af45;
    margin-bottom: 20px;
    background: url(https://myassignmenthelp.com/assets/img/wallet-coupan.png);
    background-repeat: no-repeat;
    background-size: contain;
    background-size: 18%;
}.red-text{font-size: 8px; margin-top:8px;}.credit-text{font-weight: 500;font-size: 12px;margin-top: 4px;}#main .page-header .pull-left h1 {
    font-size: 18px;}.fulset-adj{font-size:8px;}.money-wrap {
    font-size: 16px;
    padding-top: 8px;
    padding-left: 10px;
}.fulset-adj {
    font-size: 8px;
    margin-top: -6px;
}}*/
.full-set{display:block; width:100%;}.border-coupon{ border: 1px solid #56af45;height: 53px;
margin-top: 42px;  background: url(https://myassignmenthelp.com/assets/img/wallet-coupan.png);
    background-repeat: no-repeat;
    }.money-wrap{    /* height: 45px; */
    text-align: left;
    color: white;
    font-size: 16px;
    padding-top: 12px;
    margin-left: 0px;
    padding-left: 12px;
    font-size: 15px;} .red-text{    color: red!Important;
    font-size: 11.6px;
    margin-top: 15px;font-weight:500;}
  .credit-text{font-weight: 500;
    font-size: 18px;
    margin-top: 12px;}
    
    /*responsive*/
@media(max-width:1263px){.money-wrap {
    /* height: 45px; */
    text-align: left;
    color: white;
    font-size: 16px;
    padding-top: 12px;
    margin-left: 0px;
    padding-left: 9px;
    font-size: 13px;
}.credit-text {
    font-weight: 500;
    font-size: 15px;
    margin-top: 12px;
}.border-coupon .span6 {
    width: 40.717949%;
} .timer-count .red-text{font-size:10.6px;}}
@media(max-width:1227px){.credit-text {
    font-weight: 500;
    font-size: 11px;
    margin-top: 12px;
}}
@media (max-width:1100px){.border-coupon{background-size: 83px 50px;}}
@media (max-width:1080px){.credit-text{font-size:10px;}.border-coupon {
    background-size: 70px 50px;
}}
@media (max-width:1080px){.money-wrap{font-size: 11px;} .timer-count .red-text{font-size: 9.6px;}}
    </style>
    <!--End-->
  
    
  <script type="text/javascript">               
  function myfunc(){ 
          
    window.open("https://myassignmenthelp.com/Home/submit-assignment.php","_self");                 
  }     
  </script>

<div id="modal6" class="modal fade new-four-popup" tabindex="-1" aria-hidden="true"></div>
<!-- BEGIN CONTAINER -->
<div class="page-container"> 
<div id="order_processing" class="processing loader tab-pane" style="text-align: center; display: none;">
            <div class="preloader"></div>
       <div class="afterloader"></div>
             </div>
  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper"> 
    <!-- BEGIN CONTENT BODY --> 
    <!-- BEGIN PAGE HEAD-->
    <div class="page-head">
      <div class="container"></div>
    </div>
    <!-- END PAGE HEAD--> 
    <!-- BEGIN PAGE CONTENT BODY -->
    <div class="page-content">
      <div class="container"> 
        <!-- BEGIN ASSIGNMENT DETAILS PAGE CONTENT INNER -->
        <div class="page-content-inner assignment-details">
          <div class="portlet box red assignment-info-wrap profile_page">
            <div class="portlet-body">
              <div class="tab-content"> 
                <!--assignment-description-section-->
                <div class="row">
                  <div class="col-md-12 form collapsed">
                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                      <div class="row">
                        <div class="col-xs-8 col-md-6">
                          <h4 class="bold sm-nw margin-bottom-20">Submit New Assignment</h4>
                                      </div>
                        <div class="col-md-6  col-xs-3">
                         
                                                  </div>
                      </div>
                      <div class=" sbm-body">
                 <form method="POST" class="form-horizontal" action="{{ url('/insert') }}">
                 	{{ csrf_field() }}
<?php //dd($errors) ?>
                          <div class="col-md-5 col-sm-12"> 
                            <!-- code by Harshal for externall offer appliead!-->
                                                        <!-- end of code by harshal for external offer applied-->
                            <div class="col-md-7 col-sm-8 col-xs-12">
                              <div class="form-group row">
                               <div class="row">   <label class="col-md-12 lblsubject" style="color: red;">Subject</label></div><div class="input-icon"> <i class="fa fa-file-o" aria-hidden="true"></i>
                                <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="text" data-rule-required="true" class="form-control tt-hint" value="" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><input type="text" name="subject_Name" id="Subject_Name" data-rule-required="true" class="form-control tt-input" placeholder="Enter Subject Name" value="" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent; border: 1px dashed red;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-Subject_Name"></div></div></span></div>
                              </div>
                            </div>
                            <div class="col-md-5 col-sm-4 col-xs-12 ">
                              <div class="form-group row">
                                <label class="col-md-12">Pages</label>
                                <div class="col-md-12 col-sm-12 input-group bootstrap-touchspin ajust-wordcount"> <span class="input-group-btn">
                                  <button class="btn blue bootstrap-touchspin-down" type="button" onclick="return page_dec();">-</button>
                                  </span>
                                  <input type="text" name="Pages" id="Pages" class="form-control noofpages" data-rule-required="true" data-rule-number="true" min="1" max="9999" value="1" readonly="">
                                  <span class="input-group-btn">
                                  <button class="btn red bootstrap-touchspin-up" type="button" onclick="return page_inc();">+</button>
                                  </span> </div>
                                <div class="col-xs-12 col-md-11 col-md-offset-1 col-sm-12 input-group text-center sbold" id="Word_Count" style="">250 Words</div>
                              </div>
                            </div>
                           <div class="row deadline-control-manage">
                          <label class="col-md-12 col-sm-12 lbldeadline">Deadline</label>
                           <div class="col-md-12"> 
                           
                           <div class="col-md-4 col-sm-4">
                            <div class="form-group row">
                              
                                <div class="input-icon"> <i class="fa fa-calendar" aria-hidden="true"></i>
                                  <input type="text" autocomplete="off" name="Due_Date" id="Due_Date" class="form-control date-picker" data-date-start-date="+0d" data-date-end-date="+365d" placeholder="Select Date" value="">
                                </div>
                              </div> 
                              </div>

                              <div class="col-md-4 col-sm-4">
                                <div class="form-group row">
                                <div class="input-icon"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                                  <input type="text" name="Due_Time" id="Due_Time" class="form-control timepicker timepicker-no-seconds" data-rule-required="true" value="">
                                </div>
                              </div></div>
                              <div class="col-md-4 col-sm-4 timezone">
                               <div class="form-group timezone-map-icon">
                                      <div class="input-icon"> <i class="fa fa-map" aria-hidden="true"></i>
                
                                <select class="form-control select2 select2-hidden-accessible" id="time_zone" tabindex="-1" aria-hidden="true">
                                  <option value="">Timezone</option>
                                  <option value="1">Africa/Abidjan</option><option value="439">America/Chicago</option><option value="444">Asia/Yangon</option><option value="441">Etc/GMT+12</option><option value="442">Etc/GMT+2</option><option value="432">Etc/UTC</option><option value="438">Europe/London</option><option value="2">Africa/Accra</option><option value="3">Africa/Addis_Ababa</option><option value="4">Africa/Algiers</option><option value="5">Africa/Asmara</option><option value="6">Africa/Bamako</option><option value="7">Africa/Bangui</option><option value="8">Africa/Banjul</option><option value="9">Africa/Bissau</option><option value="10">Africa/Blantyre</option><option value="11">Africa/Brazzaville</option><option value="12">Africa/Bujumbura</option><option value="13">Africa/Cairo</option><option value="14">Africa/Casablanca</option><option value="15">Africa/Ceuta</option><option value="16">Africa/Conakry</option><option value="17">Africa/Dakar</option><option value="18">Africa/Dar_es_Salaam</option><option value="19">Africa/Djibouti</option><option value="20">Africa/Douala</option><option value="21">Africa/El_Aaiun</option><option value="22">Africa/Freetown</option><option value="23">Africa/Gaborone</option><option value="24">Africa/Harare</option><option value="25">Africa/Johannesburg</option><option value="26">Africa/Juba</option><option value="27">Africa/Kampala</option><option value="28">Africa/Khartoum</option><option value="29">Africa/Kigali</option><option value="30">Africa/Kinshasa</option><option value="31">Africa/Lagos</option><option value="32">Africa/Libreville</option><option value="33">Africa/Lome</option><option value="34">Africa/Luanda</option><option value="35">Africa/Lubumbashi</option><option value="36">Africa/Lusaka</option><option value="37">Africa/Malabo</option><option value="38">Africa/Maputo</option><option value="39">Africa/Maseru</option><option value="40">Africa/Mbabane</option><option value="41">Africa/Mogadishu</option><option value="42">Africa/Monrovia</option><option value="43">Africa/Nairobi</option><option value="44">Africa/Ndjamena</option><option value="45">Africa/Niamey</option><option value="46">Africa/Nouakchott</option><option value="47">Africa/Ouagadougou</option><option value="48">Africa/Porto-Novo</option><option value="49">Africa/Sao_Tome</option><option value="50">Africa/Tripoli</option><option value="51">Africa/Tunis</option><option value="52">Africa/Windhoek</option><option value="53">America/Adak</option><option value="54">America/Anchorage</option><option value="55">America/Anguilla</option><option value="56">America/Antigua</option><option value="57">America/Araguaina</option><option value="58">America/Argentina/Buenos_Aires</option><option value="59">America/Argentina/Catamarca</option><option value="60">America/Argentina/Cordoba</option><option value="61">America/Argentina/Jujuy</option><option value="62">America/Argentina/La_Rioja</option><option value="63">America/Argentina/Mendoza</option><option value="64">America/Argentina/Rio_Gallegos</option><option value="65">America/Argentina/Salta</option><option value="66">America/Argentina/San_Juan</option><option value="67">America/Argentina/San_Luis</option><option value="68">America/Argentina/Tucuman</option><option value="69">America/Argentina/Ushuaia</option><option value="70">America/Aruba</option><option value="71">America/Asuncion</option><option value="72">America/Atikokan</option><option value="73">America/Bahia</option><option value="74">America/Bahia_Banderas</option><option value="75">America/Barbados</option><option value="76">America/Belem</option><option value="77">America/Belize</option><option value="78">America/Blanc-Sablon</option><option value="79">America/Boa_Vista</option><option value="80">America/Bogota</option><option value="81">America/Boise</option><option value="82">America/Cambridge_Bay</option><option value="83">America/Campo_Grande</option><option value="84">America/Cancun</option><option value="85">America/Caracas</option><option value="86">America/Cayenne</option><option value="87">America/Cayman</option><option value="88">America/Chicago</option><option value="89">America/Chihuahua</option><option value="90">America/Costa_Rica</option><option value="91">America/Creston</option><option value="92">America/Cuiaba</option><option value="93">America/Curacao</option><option value="94">America/Danmarkshavn</option><option value="95">America/Dawson</option><option value="96">America/Dawson_Creek</option><option value="97">America/Denver</option><option value="98">America/Detroit</option><option value="99">America/Dominica</option><option value="100">America/Edmonton</option><option value="101">America/Eirunepe</option><option value="102">America/El_Salvador</option><option value="103">America/Fortaleza</option><option value="104">America/Glace_Bay</option><option value="105">America/Godthab</option><option value="106">America/Goose_Bay</option><option value="107">America/Grand_Turk</option><option value="108">America/Grenada</option><option value="109">America/Guadeloupe</option><option value="110">America/Guatemala</option><option value="111">America/Guayaquil</option><option value="112">America/Guyana</option><option value="113">America/Halifax</option><option value="114">America/Havana</option><option value="115">America/Hermosillo</option><option value="116">America/Indiana/Indianapolis</option><option value="117">America/Indiana/Knox</option><option value="118">America/Indiana/Marengo</option><option value="119">America/Indiana/Petersburg</option><option value="120">America/Indiana/Tell_City</option><option value="121">America/Indiana/Vevay</option><option value="122">America/Indiana/Vincennes</option><option value="123">America/Indiana/Winamac</option><option value="124">America/Inuvik</option><option value="125">America/Iqaluit</option><option value="126">America/Jamaica</option><option value="127">America/Juneau</option><option value="128">America/Kentucky/Louisville</option><option value="129">America/Kentucky/Monticello</option><option value="130">America/Kralendijk</option><option value="131">America/La_Paz</option><option value="132">America/Lima</option><option value="133">America/Los_Angeles</option><option value="134">America/Lower_Princes</option><option value="135">America/Maceio</option><option value="136">America/Managua</option><option value="137">America/Manaus</option><option value="138">America/Marigot</option><option value="139">America/Martinique</option><option value="140">America/Matamoros</option><option value="141">America/Mazatlan</option><option value="142">America/Menominee</option><option value="143">America/Merida</option><option value="144">America/Metlakatla</option><option value="145">America/Mexico_City</option><option value="146">America/Miquelon</option><option value="147">America/Moncton</option><option value="148">America/Monterrey</option><option value="149">America/Montevideo</option><option value="150">America/Montreal</option><option value="151">America/Montserrat</option><option value="152">America/Nassau</option><option value="153">America/New_York</option><option value="154">America/Nipigon</option><option value="155">America/Nome</option><option value="156">America/Noronha</option><option value="157">America/North_Dakota/Beulah</option><option value="158">America/North_Dakota/Center</option><option value="159">America/North_Dakota/New_Salem</option><option value="160">America/Ojinaga</option><option value="161">America/Panama</option><option value="162">America/Pangnirtung</option><option value="163">America/Paramaribo</option><option value="164">America/Phoenix</option><option value="165">America/Port-au-Prince</option><option value="166">America/Port_of_Spain</option><option value="167">America/Porto_Velho</option><option value="168">America/Puerto_Rico</option><option value="169">America/Rainy_River</option><option value="170">America/Rankin_Inlet</option><option value="171">America/Recife</option><option value="172">America/Regina</option><option value="173">America/Resolute</option><option value="174">America/Rio_Branco</option><option value="175">America/Santa_Isabel</option><option value="176">America/Santarem</option><option value="177">America/Santiago</option><option value="178">America/Santo_Domingo</option><option value="179">America/Sao_Paulo</option><option value="180">America/Scoresbysund</option><option value="181">America/Shiprock</option><option value="182">America/Sitka</option><option value="183">America/St_Barthelemy</option><option value="184">America/St_Johns</option><option value="185">America/St_Kitts</option><option value="186">America/St_Lucia</option><option value="187">America/St_Thomas</option><option value="188">America/St_Vincent</option><option value="189">America/Swift_Current</option><option value="190">America/Tegucigalpa</option><option value="191">America/Thule</option><option value="192">America/Thunder_Bay</option><option value="193">America/Tijuana</option><option value="194">America/Toronto</option><option value="195">America/Tortola</option><option value="196">America/Vancouver</option><option value="197">America/Whitehorse</option><option value="198">America/Winnipeg</option><option value="199">America/Yakutat</option><option value="200">America/Yellowknife</option><option value="201">Antarctica/Casey</option><option value="202">Antarctica/Davis</option><option value="203">Antarctica/DumontDUrville</option><option value="204">Antarctica/Macquarie</option><option value="205">Antarctica/Mawson</option><option value="206">Antarctica/McMurdo</option><option value="207">Antarctica/Palmer</option><option value="208">Antarctica/Rothera</option><option value="209">Antarctica/South_Pole</option><option value="210">Antarctica/Syowa</option><option value="211">Antarctica/Vostok</option><option value="212">Arctic/Longyearbyen</option><option value="213">Asia/Aden</option><option value="214">Asia/Almaty</option><option value="215">Asia/Amman</option><option value="216">Asia/Anadyr</option><option value="217">Asia/Aqtau</option><option value="218">Asia/Aqtobe</option><option value="219">Asia/Ashgabat</option><option value="220">Asia/Baghdad</option><option value="221">Asia/Bahrain</option><option value="222">Asia/Baku</option><option value="223">Asia/Bangkok</option><option value="224">Asia/Beirut</option><option value="225">Asia/Bishkek</option><option value="226">Asia/Brunei</option><option value="227">Asia/Choibalsan</option><option value="228">Asia/Chongqing</option><option value="229">Asia/Colombo</option><option value="230">Asia/Damascus</option><option value="231">Asia/Dhaka</option><option value="232">Asia/Dili</option><option value="233">Asia/Dubai</option><option value="234">Asia/Dushanbe</option><option value="235">Asia/Gaza</option><option value="236">Asia/Harbin</option><option value="237">Asia/Hebron</option><option value="238">Asia/Ho_Chi_Minh</option><option value="239">Asia/Hong_Kong</option><option value="240">Asia/Hovd</option><option value="241">Asia/Irkutsk</option><option value="242">Asia/Jakarta</option><option value="243">Asia/Jayapura</option><option value="244">Asia/Jerusalem</option><option value="245">Asia/Kabul</option><option value="246">Asia/Kamchatka</option><option value="247">Asia/Karachi</option><option value="248">Asia/Kashgar</option><option value="249" selected="">Asia/Kathmandu</option><option value="250">Asia/Kolkata</option><option value="251">Asia/Krasnoyarsk</option><option value="252">Asia/Kuala_Lumpur</option><option value="253">Asia/Kuching</option><option value="254">Asia/Kuwait</option><option value="255">Asia/Macau</option><option value="256">Asia/Magadan</option><option value="257">Asia/Makassar</option><option value="258">Asia/Manila</option><option value="259">Asia/Muscat</option><option value="260">Asia/Nicosia</option><option value="261">Asia/Novokuznetsk</option><option value="262">Asia/Novosibirsk</option><option value="263">Asia/Omsk</option><option value="264">Asia/Oral</option><option value="265">Asia/Phnom_Penh</option><option value="266">Asia/Pontianak</option><option value="267">Asia/Pyongyang</option><option value="268">Asia/Qatar</option><option value="269">Asia/Qyzylorda</option><option value="270">Asia/Rangoon</option><option value="271">Asia/Riyadh</option><option value="272">Asia/Sakhalin</option><option value="273">Asia/Samarkand</option><option value="274">Asia/Seoul</option><option value="275">Asia/Shanghai</option><option value="276">Asia/Singapore</option><option value="277">Asia/Taipei</option><option value="278">Asia/Tashkent</option><option value="279">Asia/Tbilisi</option><option value="280">Asia/Tehran</option><option value="281">Asia/Thimphu</option><option value="282">Asia/Tokyo</option><option value="283">Asia/Ulaanbaatar</option><option value="284">Asia/Urumqi</option><option value="285">Asia/Vientiane</option><option value="286">Asia/Vladivostok</option><option value="287">Asia/Yakutsk</option><option value="288">Asia/Yekaterinburg</option><option value="289">Asia/Yerevan</option><option value="290">Atlantic/Azores</option><option value="291">Atlantic/Bermuda</option><option value="292">Atlantic/Canary</option><option value="293">Atlantic/Cape_Verde</option><option value="294">Atlantic/Faroe</option><option value="295">Atlantic/Madeira</option><option value="296">Atlantic/Reykjavik</option><option value="297">Atlantic/South_Georgia</option><option value="298">Atlantic/St_Helena</option><option value="299">Atlantic/Stanley</option><option value="300">Australia/Adelaide</option><option value="301">Australia/Brisbane</option><option value="302">Australia/Broken_Hill</option><option value="303">Australia/Currie</option><option value="304">Australia/Darwin</option><option value="305">Australia/Eucla</option><option value="306">Australia/Hobart</option><option value="307">Australia/Lindeman</option><option value="308">Australia/Lord_Howe</option><option value="309">Australia/Melbourne</option><option value="310">Australia/Perth</option><option value="311">Australia/Sydney</option><option value="312">Europe/Amsterdam</option><option value="313">Europe/Andorra</option><option value="314">Europe/Athens</option><option value="315">Europe/Belgrade</option><option value="316">Europe/Berlin</option><option value="317">Europe/Bratislava</option><option value="318">Europe/Brussels</option><option value="319">Europe/Bucharest</option><option value="320">Europe/Budapest</option><option value="321">Europe/Chisinau</option><option value="322">Europe/Copenhagen</option><option value="323">Europe/Dublin</option><option value="324">Europe/Gibraltar</option><option value="325">Europe/Guernsey</option><option value="326">Europe/Helsinki</option><option value="327">Europe/Isle_of_Man</option><option value="328">Europe/Istanbul</option><option value="329">Europe/Jersey</option><option value="330">Europe/Kaliningrad</option><option value="331">Europe/Kiev</option><option value="332">Europe/Lisbon</option><option value="333">Europe/Ljubljana</option><option value="334">Europe/London</option><option value="335">Europe/Luxembourg</option><option value="336">Europe/Madrid</option><option value="337">Europe/Malta</option><option value="338">Europe/Mariehamn</option><option value="339">Europe/Minsk</option><option value="340">Europe/Monaco</option><option value="341">Europe/Moscow</option><option value="342">Europe/Oslo</option><option value="343">Europe/Paris</option><option value="344">Europe/Podgorica</option><option value="345">Europe/Prague</option><option value="346">Europe/Riga</option><option value="347">Europe/Rome</option><option value="348">Europe/Samara</option><option value="349">Europe/San_Marino</option><option value="350">Europe/Sarajevo</option><option value="351">Europe/Simferopol</option><option value="352">Europe/Skopje</option><option value="353">Europe/Sofia</option><option value="354">Europe/Stockholm</option><option value="355">Europe/Tallinn</option><option value="356">Europe/Tirane</option><option value="357">Europe/Uzhgorod</option><option value="358">Europe/Vaduz</option><option value="359">Europe/Vatican</option><option value="360">Europe/Vienna</option><option value="361">Europe/Vilnius</option><option value="362">Europe/Volgograd</option><option value="363">Europe/Warsaw</option><option value="364">Europe/Zagreb</option><option value="365">Europe/Zaporozhye</option><option value="366">Europe/Zurich</option><option value="367">Indian/Antananarivo</option><option value="368">Indian/Chagos</option><option value="369">Indian/Christmas</option><option value="370">Indian/Cocos</option><option value="371">Indian/Comoro</option><option value="372">Indian/Kerguelen</option><option value="373">Indian/Mahe</option><option value="374">Indian/Maldives</option><option value="375">Indian/Mauritius</option><option value="376">Indian/Mayotte</option><option value="377">Indian/Reunion</option><option value="378">Pacific/Apia</option><option value="379">Pacific/Auckland</option><option value="380">Pacific/Chatham</option><option value="381">Pacific/Chuuk</option><option value="382">Pacific/Easter</option><option value="383">Pacific/Efate</option><option value="384">Pacific/Enderbury</option><option value="385">Pacific/Fakaofo</option><option value="386">Pacific/Fiji</option><option value="387">Pacific/Funafuti</option><option value="388">Pacific/Galapagos</option><option value="389">Pacific/Gambier</option><option value="390">Pacific/Guadalcanal</option><option value="391">Pacific/Guam</option><option value="392">Pacific/Honolulu</option><option value="393">Pacific/Johnston</option><option value="394">Pacific/Kiritimati</option><option value="395">Pacific/Kosrae</option><option value="396">Pacific/Kwajalein</option><option value="397">Pacific/Majuro</option><option value="398">Pacific/Marquesas</option><option value="399">Pacific/Midway</option><option value="400">Pacific/Nauru</option><option value="401">Pacific/Niue</option><option value="402">Pacific/Norfolk</option><option value="403">Pacific/Noumea</option><option value="404">Pacific/Pago_Pago</option><option value="405">Pacific/Palau</option><option value="406">Pacific/Pitcairn</option><option value="407">Pacific/Pohnpei</option><option value="408">Pacific/Port_Moresby</option><option value="409">Pacific/Rarotonga</option><option value="410">Pacific/Saipan</option><option value="411">Pacific/Tahiti</option><option value="412">Pacific/Tarawa</option><option value="413">Pacific/Tongatapu</option><option value="414">Pacific/Wake</option><option value="415">Pacific/Wallis</option><option value="416">UTC</option>                                </select><span class="select2 select2-container select2-container--bootstrap" dir="ltr"><span class="selection">
                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-time_zone-container"><span class="select2-selection__rendered" id="select2-time_zone-container" title="Asia/Kathmandu">Asia/Kathmandu</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> </div></div>
                              </div> </div></div>
                              <div id="error_time_zone" style="color: red;display: none;"></div>
                                                                                    <div class="form-group row">
                              <label class="col-md-12 mt-15 lblworklevel" style="color: black;"> Work Level</label>
                              <div class=" col-md-12 btn-group" data-toggle="buttons" style="border: none;">
                                                                <label class="radio-new btn white">
                                  <input type="radio" class="toggle" value="1" name="Work_Level" id="Work_Level">
                                  High School </label>
                                                                <label class="radio-new btn white">
                                  <input type="radio" class="toggle" value="2" name="Work_Level" id="Work_Level">
                                  Diploma </label>
                                                                <label class="radio-new btn white">
                                  <input type="radio" class="toggle" value="3" checked="checked" name="Work_Level" id="Work_Level">
                                  Undergraduate/College </label>
                                                                <label class="radio-new btn white">
                                  <input type="radio" class="toggle" value="4" name="Work_Level" id="Work_Level">
                                  Post Graduate/University </label>
                                                                <label class="radio-new btn white active">
                                  <input type="radio" class="toggle" value="5" name="Work_Level" id="Work_Level">
                                  PhD/Doctorate </label>
                                                              </div>
                            </div>
                            <div id="error_Work_Level" style="color: red;display: none;"></div>
                            <div class="form-group row">
                              <label class="col-md-12 col-sm-12  mt-15 lbldescription">Enter Your Assignment Description</label>
                              <div class="col-md-12 col-sm-12">
                                <div class="bordered-area uploader" id="drag-and-drop-zone">
                                  <textarea id="Details" name="Details" class="form-control" rows="5" data-rule-required="true" style="max-width: 100% !important;"></textarea>
                                  <div class="clearfix"></div>
                                  <span id="desc-error1"></span>
                                  <div class="clearfix"></div>
                                  <div class="row" style="margin-left:-7px; margin-right:-7px; padding:0px 5px;">
                                    <div class="mobile-file-upload-wrap browser">
                                      <!-- <label> <span style="font-size:12px;font-weight: bold;" "=""> <i style="color: #fc8c04;" class="icon-paper-clip"></i> Add File</span> -->
                                        <!-- <input type="file" name="files[]" multiple="" title="Click to add Files"> -->
                                      </label>
                                    </div>
                             
                                    <ul id="demo-files" class="file-attached-wrap demo-panel-files">
                                      <div id="demo-files-error" style="color:red;"></div>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                 <div class="col-md-12" id="msg-box" onclick="$(this).fadeOut(50);"></div>
                            </div>
                            <div class="row mt-10">
                                <div class="col-md-6 col-sm-12">
                                <div class="form-group row">
                                  <label class="col-md-12 lblreference"> Reference Style</label>
                                  <div class="col-md-12 col-sm-12 reference-style">
                                    <select name="Reference_Style_Id" class="form-control select2 select2-hidden-accessible" id="ref_style" tabindex="-1" aria-hidden="true">
                                      <option value=""></option>
                                      <option value="7">AGLC</option><option value="2">APA</option><option value="8">BMJ</option><option value="4">Chicago</option><option value="5">Footnotes</option><option value="6">Footnotes and bibliography</option><option value="1">Harvard</option><option value="16">IEEE</option><option value="9">MHRA</option><option value="3">MLA</option><option value="15">Not Selected</option><option value="14">Open</option><option value="11">OSCOLA</option><option value="10">Oxford</option><option value="13">Turabian</option><option value="12">Vancouver</option></select>
                                      <span class="select2 select2-container select2-container--bootstrap select2-container--above" dir="ltr"><span class="selection"><span style="display: none;" class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ref_style-container"><span class="select2-selection__rendered" id="select2-ref_style-container"><span class="select2-selection__placeholder">Select</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <!-- <input type="hidden" name="Total_Refers" id="Total_Refers" class="input-mini" data-rule-number="true" min="2" max="9999" value="2"> -->
                                  </div>
                                </div>
                                <div id="error_ref_style" style="color: red;display: none;"></div>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <div class="form-group row">
                                  <label class="col-md-12 lblassignmentweightage"> Assignment Weightage</label>
                                  <div class="col-md-12 col-sm-12 assignment-weightage">
                                    <select name="weightage" id="weightage" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                      <option value=""></option>
                                      <option value="5">5 %</option><option value="10">10 %</option><option value="15">15 %</option><option value="20">20 %</option><option value="25">25 %</option><option value="30">30 %</option><option value="35">35 %</option><option value="40">40 %</option><option value="45">45 %</option><option value="50">50 %</option><option value="55">55 %</option><option value="60">60 %</option><option value="65">65 %</option><option value="70">70 %</option><option value="75">75 %</option><option value="80">80 %</option><option value="85">85 %</option><option value="90">90 %</option><option value="95">95 %</option><option value="100">100 %</option>                                    </select><span class="select2 select2-container select2-container--bootstrap select2-container--above" dir="ltr"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-weightage-container"><span class="select2-selection__rendered" id="select2-weightage-container"><span class="select2-selection__placeholder">Select</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                  </div>
                                </div>
                                <div id="error_weightage" style="color: red;display: none;"></div>
                              </div>
                                            
                              <!--section for show expert selected-->
                                                            <!--section end for show expert selected-->
                            </div>
                            <div class="row mt-10 NoOfferDiv">
                              <div class="col-md-12">
                                <div class="dash-bdr"> 
                                  <div class="md-radio-list">
                                                          <style>
                      .NoOfferDiv{
                        display:none;
                      }
                      </style>
                                                    </div>
                                </div>
                              </div>
                            </div>
                              <script src="https://www.google.com/recaptcha/api.js"></script>
                                                            <div class="row mt-10 ">
                            
                                                      <div class="col-md-4 col-sm-2 col-md-offset-2 col-sm-offset-6">    <a class="btn btn-call btn-block mb-10" href="submit-assignment.php?cancel=Y"> Cancel </a></div>
                            <div class="col-md-6 col-sm-4">
                                <button type="submit" name="btnstep2" class="btn btn-success submit_new_asign btn-block mb-10">Submit Assignment</button></div>
                                                              </div>
                              
                      
                          </div>
                        </form>
                                                <!--banner section html-->
                        <div class="col-md-6 col-md-offset-1 col-sm-5 col-sm-offset-1 banner-section-wrap">
                          <div class="col-md-12 right-information-section">
                            <div class="row">
                              <div class="col-md-12 stdnt">
                                <h4 class="right-main-heading"><strong class="strong-numbers">1,50,000+</strong> Students can’t be Wrong!</h4>
                                <img class="divider-right-info" src="https://myassignmenthelp.com/assets/img/divider.png" alt="myassignmenthelp.com"> </div>
                            </div>
                            <div class="row subinfo-right-section">
                              <div class="col-md-4 text-center"><img src="https://myassignmenthelp.com/assets/img/icon-order.png" alt="orders">
                                <h4 class=""><strong class="">799594</strong></h4>
                <span>ORDERS</span> </div>
                              <div class="col-md-4 text-center"><img src="https://myassignmenthelp.com/assets/img/icon-expert.png" alt="orders">
                                <h4><strong>4989</strong></h4>
                                <span>EXPERTS</span> </div>
                              <div class="col-md-4 text-center"><img src="https://myassignmenthelp.com/assets/img/icon-rating.png" alt="orders">
                                <h4><strong>4.9/5</strong></h4>
                                <span>RATINGS</span> </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 text-center reason-headline">
                                <h4>Why students prefer us?</h4>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-2 quality-box  text-center"><img src="https://myassignmenthelp.com/assets/img/icon-top-quality.png" alt="Top-Quality">
                                <h4><strong>TOP </strong></h4>
                                <span>Quality</span> </div>
                              <div class="col-md-2 quality-box text-center"><img src="https://myassignmenthelp.com/assets/img/icon-money-value.png" alt="Best Price">
                                <h4><strong>Best </strong></h4>
                                <span>Price</span> </div>
                              <div class="col-md-2  quality-box text-center"><img src="https://myassignmenthelp.com/assets/img/icon-timely-delivery.png" alt="Timely delivery">
                                <h4><strong>Timely </strong></h4>
                                <span>Delivery</span> </div>
                              <div class="col-md-2 quality-box text-center"><img src="https://myassignmenthelp.com/assets/img/icon-support.png" alt="24*7 Support">
                                <h4><strong>24/7 </strong></h4>
                                <span>Support</span> </div>
                              <div class="col-md-2 quality-box text-center"><img src="https://myassignmenthelp.com/assets/img/icon-privacy.png" alt="100% Privacy">
                                <h4><strong>100% </strong></h4>
                                <span>Privacy</span> </div>
                            </div>
                          </div>
                        </div>
                        <!--banner section html end--> 
                      </div>
                    </div>
                  </div>
                  <!--assignment-description-section end--> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END PAGE CONTENT BODY --> 
      <!-- END CONTENT BODY --> 
    </div>
    <!-- END CONTENT --> 
  </div>
  <!-- END CONTAINER --> 
  <!--side-btns-->
  
 
</div>
<!-- Start of welcome modal
              <a href="#modal_intro" id="welcomemodal" role="button" data-toggle="modal" onclick="$('modal_intro').html(''); sendajax('modals','Type=IntroHome','modal_intro');" > </a>
      end of welcome modal-->
<div id="modal_intro" class="modal fade" tabindex="-1" aria-hidden="true"></div>

<!-- BEGIN FOOTER -->
 

<style>

    

</style>
<style>
.side-btns{position: fixed;right: -139px;bottom: 60%;width: 346px;-ms-transform: rotate(270deg);-webkit-transform: rotate(270deg);transform: rotate(270deg);} .btn-box-footer{    padding-left: 5px;!important;
    padding-right: 5px!important;}
  
  .chatnow-side-btn{padding: 0px 0px;
    background: #fc8c04;
    border: 1px solid #d47605;
    font-weight: 600;
    color: white;
    border-radius: 2px;
    font-size: 14px;}
  .btn-side-order{    border-radius: 2px;
    font-size: 14px;
    font-weight: 600;
    padding: 9px;}
  .btn-side-order i{font-size: 20px;
    vertical-align: inherit;}

@media(max-width:992px){.side-btns {
    position: fixed;
  width: 100%;
    -ms-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    float: none;
    margin: auto;
    margin-bottom: 0px;
    bottom: 0px;
    background: white;
    z-index: 1999;
    left: 0px;
    right: 0px;
    padding: 10px 10px;
}} 
@media(max-width:767px){.page-footer-student-panel{padding: 5px 0px;}.page-footer .mt-5,.page-footer .text-right{text-align:center;    margin: 5px 0px;}}
@media(max-width:380px){.phonenumbers {font-size: 9px;} .page-footer .mt-5, .page-footer .text-right{font-size:11px;}}
@media (max-width: 767px) {
    .col-xs-pt-10 {
        padding-top: 10px;
    }
    .col-xs-pb-10 {
        padding-bottom: 10px;
    }
}
</style>


<!--
due to chat button issue commented this code.
<div class="row side-btns" >
  <div class="col-xs-12 col-md-6 col-sm-6 btn-box-footer" >

  <a  onclick="chatclick();"  class="btn chatnow-side-btn btn-block btn-sm chat-click" style="padding: 0px 0px;"> <img src="https://myassignmenthelp.com/assets/global/img/chat-btn.png" alt="Chat Now" style="width: 30px;">Chat Now</a></div>
</div>-->
<div class="page-footer page-footer-student-panel">
  <div class="container">
    <div class="col-md-5 col-sm-6 col-xs-12 mt-5 col-xs-text-center"> 2018 © Myassignmenthelp.com All rights reserved.</div>
 <div class="col-md-2 col-sm-6 col-xs-12 mt-5 text-center hidden-xs hidden-sm h6">      <i class="icon-time"></i> <span class="TimerMachine" data-value="2018-09-11 12:58:46">11-09-2018 12:58:45 PM</span> +0545   </div>
   <!-- <div class="col-md-5 col-sm-6 col-xs-12 text-right">
      <div class="col-md-12 col-sm-12 col-xs-12 phonenumbers"> <img src="https://myassignmenthelp.com/assets/layouts/layout3/img/flag1.png"> +61-3-4000-0033 &nbsp;&nbsp; <img src="https://myassignmenthelp.com/assets/layouts/layout3/img/flag2.png"> +44-121-285-4112 </div>
    </div>
  -->
  
  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 copyright-phone-number-wrap pull-right pt-4 pb-4">
        <div class="col-xs-offset-2 col-xs-8 col-sm-12 col-md-11 col-lg-10 align-element">
          <div class="row">                <div class="light-gray-1">
              <span class="dataItem"><a><img src="https://myassignmenthelp.com/assets/img/australia.svg" class="achor-center" alt="AUSTRALIA">+61-3-4000-0033</a></span>
              <span class="dropDown-list"><i class="fa fa-angle-down xs-pull-right rotate" aria-hidden="true"></i></span>
              <ul class="list-inline listItem pt-1 mb-10" style="">
                <li class="country-phone-numbers" data-active="true" style="display: none;"><a><img src="https://myassignmenthelp.com/assets/img/australia.svg" class="achor-center" alt="AUSTRALIA">+61-3-4000-0033</a></li>
                <li class="country-phone-numbers" data-active="false"><a><img src="https://myassignmenthelp.com/assets/img/united-kingdom.svg" class="achor-center" alt="UK">+44-121-285-4112</a></li>
                 <li class="country-phone-numbers" data-active="false"><a><img src="https://myassignmenthelp.com/assets/img/new-zealand.svg" class="achor-center" alt="NZ">+64-98880721</a></li>
                 <li class="country-phone-numbers" data-active="false"><a><img src="https://myassignmenthelp.com/assets/img/united-states.svg" class="achor-center" alt="US">+1-515-393-6211</a></li>
              </ul> 
           </div>
          </div>
          </div>
        </div>
    
    
    <a href="javascript: void(0);" title="" target="_blank"></a> </div>
</div>


<!-- BEGIN INNER FOOTER -->



<!-- END INNER FOOTER --> 

<!-- END FOOTER -->

<!--mobile-chat-->
      <style>.bottom-fix-area{    position: fixed;
        bottom: 0px;
        left: 0px;
        padding: 5px;
        background: #4e4e4e;
        padding: 6px 25px;
        box-shadow: 0px -3px 20px 0px #949494a6;
        z-index: 999;}.dropup ul.chat_area{ background: white;
        padding:15px 30px;
        margin-left: 24px;
        margin-bottom: -10px;
        border: 1px solid orange;
        min-width: calc(100vw - 49px);} .bottom-fix-area button.btn-warning{    color: #fff;
        background-color: #ff8b00;
        border-color: #f58e14;} .dropup ul.chat_area li a{color:#373737} .dropup .chat_area .chat-form label.radio {
        font-size: 12px;
        font-weight: 500;
        cursor: pointer;
    } .bottom-fix-area button.btn-warning.dropdown-toggle:hover,.bottom-fix-area button.btn-warning.dropdown-toggle:visited,.bottom-fix-area button.btn-warning.dropdown-toggle:focus {
        color: #fff;
        background-color: #ef8d18;
        border-color: #ff8b00;
    }.bottom-fix-area.open .chat-form {
        background: white;
        overflow: visible;
        margin-top: 0px;
        margin-bottom: 0px;
        padding: 0px;
    }ul.dropdown-menu.chat_area h6 {
        font-size: 12px;
        font-weight: 500;
    }

    ul.dropdown-menu.chat_area h5 {
        text-align: left;
        font-size: 12px;
        font-weight: 600;
        text-transform: capitalize;
    }.dropup .chat_area .chat-form  label.radio span {
        font-size: 11px;
        font-weight: 400;
        color: #9e9e9e;
        cursor: pointer;
    }</style>
    <div class="row">
      <div class="col-xs-12 dropup hidden-sm hidden-md hidden-lg bottom-fix-area">
          <button class="btn btn-block btn-warning dropdown-toggle" style="font-size:18px;" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img style="width:19px;" src="data:image/svg+xml;base64,&#10;        PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNjAuMDE5IDYwLjAxOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNjAuMDE5IDYwLjAxOTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiBjbGFzcz0iIj48Zz48Zz4KCTxwYXRoIGQ9Ik0yNC45MDUsMTEuMDFDMTEuNjE5LDExLjAxLDAuODEsMjEuODE4LDAuODEsMzUuMTA0YzAsNC4xNzcsMS4wODQsOC4yNzgsMy4xNCwxMS44OTNMMC4wNTEsNTguNjkzICAgYy0wLjExNiwwLjM0OS0wLjAzMiwwLjczMiwwLjIxOSwxQzAuNDYyLDU5Ljg5OCwwLjcyNyw2MC4wMSwxLDYwLjAxYzAuMDg1LDAsMC4xNy0wLjAxMSwwLjI1NS0wLjAzM2wxMi43ODgtMy4zNjUgICBjMy4zNDksMS42OTQsNy4wOTYsMi41ODgsMTAuODYyLDIuNTg4QzM4LjE5MSw1OS4xOTksNDksNDguMzksNDksMzUuMTA0UzM4LjE5MSwxMS4wMSwyNC45MDUsMTEuMDF6IE0xNCwzOS4wMSAgIGMtMi4yMDYsMC00LTEuNzk0LTQtNHMxLjc5NC00LDQtNHM0LDEuNzk0LDQsNFMxNi4yMDYsMzkuMDEsMTQsMzkuMDF6IE0yNSwzOS4wMWMtMi4yMDYsMC00LTEuNzk0LTQtNHMxLjc5NC00LDQtNHM0LDEuNzk0LDQsNCAgIFMyNy4yMDYsMzkuMDEsMjUsMzkuMDF6IE0zNiwzOS4wMWMtMi4yMDYsMC00LTEuNzk0LTQtNHMxLjc5NC00LDQtNHM0LDEuNzk0LDQsNFMzOC4yMDYsMzkuMDEsMzYsMzkuMDF6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGRkZGRkYiIGRhdGEtb2xkX2NvbG9yPSIjRkRGREZEIj48L3BhdGg+Cgk8cGF0aCBkPSJNNTkuODg4LDQ3LjUxNGwtMy44MzktMTEuNTE4YzIuMDU2LTMuNjE0LDMuMTQtNy43MTYsMy4xNC0xMS44OTNjMC0xMy4yODYtMTAuODA5LTI0LjA5NS0yNC4wOTUtMjQuMDk1ICAgYy04LjI0MiwwLTE1LjgyMyw0LjIyMy0yMC4yMTksMTEuMDA3YzMuMDg5LTEuMjkxLDYuNDc3LTIuMDA3LDEwLjAyOS0yLjAwN0MzOS4yOTQsOS4wMSw1MSwyMC43MTYsNTEsMzUuMTA0ICAgYzAsMy45OTYtMC45MDYsNy43ODMtMi41MTgsMTEuMTcybDEwLjI2MywyLjdjMC4wODUsMC4wMjIsMC4xNywwLjAzMywwLjI1NSwwLjAzM2MwLjAwNywwLDAuMDE0LDAsMC4wMiwwYzAuNTUzLDAsMS0wLjQ0NywxLTEgICBDNjAuMDE5LDQ3LjgzLDU5Ljk3Miw0Ny42NjEsNTkuODg4LDQ3LjUxNHoiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSJhY3RpdmUtcGF0aCIgc3R5bGU9ImZpbGw6I0ZGRkZGRiIgZGF0YS1vbGRfY29sb3I9IiNGREZERkQiPjwvcGF0aD4KPC9nPjwvZz4gPC9zdmc+"> Chat Now

          </button>
            <ul class="dropdown-menu chat_area" aria-labelledby="dropdownMenu2">
              <li>    <h5 style="font-weight: 600;margin-bottom: 0px;margin-top: 0px;">Have any Query?</h5>
             
                <form class="chat-form">
                  <label for="sales1" class="radio"><input type="radio" id="sales1" name="chatType" onclick="chatclick();" checked="" value="New">Sales Chat <br>
                          <span>(New Assignment Inquiry)</span>
                          </label>
                  <label for="support1" class="radio"><input type="radio" id="support1" name="chatType" onclick="supportChat();" checked="" value="New">Support Chat 
                          <br>
                          <span>(Assignment Already Booked)</span>
                          </label>
          </form></li>
           
            </ul>
          </div>
    </div>
<!--mobile-chat end-->

<script src="https://myassignmenthelp.com/assets/global/plugins/jquery.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script> 
<!-- END CORE PLUGINS --> 
<!-- BEGIN PAGE LEVEL PLUGINS --> 
<script src="https://myassignmenthelp.com/assets/global/plugins/moment.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/global/plugins/fuelux/js/spinner.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/global/plugins/icheck/icheck.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script> 
<!-- END PAGE LEVEL PLUGINS --> 
<!-- BEGIN MAH STUDENT DASHBOARD SCRIPTS --> 
<script src="https://myassignmenthelp.com/assets/global/scripts/app.min.js" type="text/javascript"></script> 

<!-- END MAH STUDENT DASHBOARD SCRIPTS --> 

<!-- BEGIN PAGE LEVEL SCRIPTS --> 

<script src="https://myassignmenthelp.com/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/pages/scripts/form-icheck.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/pages/scripts/components-bootstrap-touchspin.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script> 

<!-- END PAGE LEVEL SCRIPTS --> 

<!-- BEGIN  LAYOUT SCRIPTS --> 

<script src="https://myassignmenthelp.com/assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script> 
<script src="https://myassignmenthelp.com/assets/js/plugins/validation/jquery.validate.min.js"></script> 
<script src="https://myassignmenthelp.com/assets/js/typewatch.js"></script> 
<script src="js.php"></script> 
<script type="text/javascript" src="https://myassignmenthelp.com/assets/global/plugins/typeahead/js/handlebars.min.js"></script> 
<script type="text/javascript" src="https://myassignmenthelp.com/assets/global/plugins/typeahead/js/typeahead.bundle.min.js"></script> 
<script type="text/javascript" src="https://myassignmenthelp.com/assets/global/plugins/typeahead/js/typeahead.autofill.js"></script> 
<script type="text/javascript" src="https://myassignmenthelp.com/assets/global/plugins/typeahead/js/select2.full.min.js"></script> 
<script type="text/javascript" src="https://myassignmenthelp.com/assets/global/plugins/typeahead/js/typeahead.select.js"></script> 
<script type="text/javascript" src="https://myassignmenthelp.com/assets/js/autocomplete.js"></script> 
<script type="text/javascript" src="https://myassignmenthelp.com/assets/global/plugins/dropzone/demo.min.js"></script> 
<script type="text/javascript" src="https://myassignmenthelp.com/assets/global/plugins/dropzone/dmuploader.js"></script>
<!-- Include js file for virtual-chat (expertchatonline) -->
<script type="text/javascript" src="https://expertchatonline.com/chatbot/javascripts/jquery.md5.js"></script>

<style>.page-header-menu1 {display: block;clear: both;margin-top: 0px!important;}</style>

<!--Begin Comm100 Live Chat Code-->
<input type="hidden" value="Last padi date: ">
<div class="col-md-6 col-sm-6 col-xs-6"> <a target="_blank" href="https://chatserver.comm100.com/ChatWindow.aspx?planId=5000016&amp;visitType=1&amp;byHref=1&amp;partnerId=-1&amp;siteid=20537&amp;CUSTOM!Assignment_No=&amp;CUSTOM!Student_Name=&amp;CUSTOM!Support_Team=&amp;CUSTOM!Student_Id=217353&amp;CUSTOM!Assignment_Title=&amp;CUSTOM!Order_Status=&amp;CUSTOM!Payment_Status=&amp;CUSTOM!Quote_Price=0 " class="btn btn-primary btn-block btn-sm comm-virtual " style="padding: 0px 0px; display: none;"> <img src="https://myassignmenthelp.com/assets/global/img/chat-btn.png" style="width: 30px;">Chat Now</a></div>
    <input type="hidden" id="Student_Name" value="Yaman"> <input type="hidden" id="Support_Team" value="">  <input type="hidden" id="Student_Id" value="217353">  <input type="hidden" id="Assignment_Title" value="">  <input type="hidden" id="Assignment_No" value=""> <input type="hidden" id="Order_Status" value="">  <input type="hidden" id="Payment_Status" value="">  <input type="hidden" id="Quote_Price" value="0 ">
  <input type="hidden" id="Support_Chat_Link" value="https://myassignmenthelp.com/Home/initiate-chat.php">
  <!--comm100 code for else condition-->
  <style>#comm100-float-button-2 {

    display: none;

}
@media(max-width:767px){#comm100-float-button-2 {

    display: block;

}}
</style>

<div id="comm100-button-5000005"></div>
  

<div id="mahSurvey" class="modal fade" tabindex="-1" aria-hidden="true"></div>
<div id="google_rating" class="modal fade" tabindex="-1" aria-hidden="true"></div>
<!--<style>#comm100-float-button-2,#comm100-float-button-3{display:none;}</style>-->


  <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
  <script>
    var Student_Id = '217353';
    var Icon = 'https://myassignmenthelp.com/qassets/new-images/mah-front-sticky-logo.png';
  </script>
  <script src="https://myassignmenthelp.com/assets/js/firebase.init.js"></script>
  
  <!--- country-phonenumbers dropdown script starts-->
<script type="text/javascript">
  /* Country List Dropdown */
if ($(window).width() > 992) {
    $('li.country-phone-numbers a').removeAttr('href');
}

$(function(){
  var listItem = $('ul.listItem');
    var activeData = $('span.dataItem');
    var Drop = $('span.dropDown-list');
    var childlist = listItem.children('li');
    //console.log(childlist);
    var ancnhor = childlist.find('a');
    childlist.each(function(){
      if($(this).attr('data-active') == 'true') {
        //  alert('hello');
        console.log($(this));
        $(this).css('display', 'none');
         var activeCountry = $(this);
         var countryAc = activeCountry.children().clone();
         Drop.html('<i class="fa fa-angle-down xs-pull-right rotate" aria-hidden="true"></i>');
         activeData.html(countryAc);
      }
    })
})

   // var activeCountry = childlist.first().attr('data-active', true);
   


function countryToggle(currentElement, activeDataView) {
    currentElement.attr('data-active', true).css({
        'display': 'none'
    }).siblings().attr('data-active', false).css({
        'display': 'block'
    });
    var currentActive = currentElement.children().clone();
    activeDataView.html(currentActive);
    currentElement.attr('data-active', true).css({
        'display': 'none'
    });
    /*console.log(activeDataView);*/
}
$('.light-gray-1').on('click', function () {
    $(this).toggleClass('be-active');
    $(this).find('ul.listItem').stop().slideToggle();
});
$('ul.listItem li').on('click', function () {
    var currentElement = $(this);
    var activeDataView = $(this).parent().siblings('span.dataItem');
    countryToggle(currentElement, activeDataView);
});
$(document).mouseup(function (e) {
    var elementClick = $('ul.listItem');
    e.stopPropagation();
    if (!elementClick.is(e.target) && elementClick.has(e.target).length === 0) {
        elementClick.stop().slideUp();
    }
});
/* End Country List dropdown */
</script>
<script src="https://myassignmenthelp.com/assets/js/jquery.cookie.js" type="text/javascript"></script> 
<script>
  if ($.trim($.cookie("showSubsPop")) != "false") {
    var showSubsPopDate = new Date();
    showSubsPopDate.setDate(showSubsPopDate.getDate() + 1);
    $.cookie("showSubsPop", "true", { expires: showSubsPopDate });
  }
if ($.trim($.cookie("showSubsPopAQ")) != "false") {
    var showSubsPopDate = new Date();
    showSubsPopDate.setDate(showSubsPopDate.getDate() + 1);
    $.cookie("showSubsPopAQ", "true", { expires: showSubsPopDate });
  }
if ($.trim($.cookie("showSubsPopQA")) != "false") {
    var showSubsPopDate = new Date();
    showSubsPopDate.setDate(showSubsPopDate.getDate() + 1);
    $.cookie("showSubsPopQA", "true", { expires: showSubsPopDate });
  }
function closeprmPOP(type){
if(type=="AQ"){
if ($.trim($.cookie("showSubsPopAQ")) != "false") {
  showSubsPopDate.setDate(showSubsPopDate.getDate() + 1);
  $.cookie("showSubsPopAQ", "false", { expires: showSubsPopDate });
  }
}else if(type=="QA"){
if ($.trim($.cookie("showSubsPopQA")) != "false") {
  showSubsPopDate.setDate(showSubsPopDate.getDate() + 1);
  $.cookie("showSubsPopQA", "false", { expires: showSubsPopDate });
  }
}else{
if ($.trim($.cookie("showSubsPop")) != "false") {
  showSubsPopDate.setDate(showSubsPopDate.getDate() + 1);
  $.cookie("showSubsPop", "false", { expires: showSubsPopDate });
  }
}
}
</script>
<!--country phone numbers dropdown script ends-->
<style>.chat-ballon{ position: fixed;
    color: white;
    height: 60px;
    width: 100px;
    background: #fc8c04;
    bottom: 30px;
    left: 10px;
    border-radius: 5px;}.chat-ballon::after {
    content: '';
    border: 10px solid;
    border-left: 10px solid rgba(0, 0, 0, 0);
    border-bottom: 10px solid rgba(255, 0, 0, 0);
    border-right: 10px solid rgba(255, 255, 0, 0);
    border-top: 33px solid rgb(252, 140, 4);
    width: 21px;
    height: 25px;
    position: absolute;
    bottom: -31px;
    left: 60px;
    transform: rotate(27deg); z-index: -1;
}


    .bounce-in-bottom{-webkit-animation:bounce-in-bottom 1.1s both;animation:bounce-in-bottom 1.1s both}
    /* ----------------------------------------------
 * Generated by Animista on 2017-8-31 18:9:1
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

@-webkit-keyframes bounce-in-bottom{0%{-webkit-transform:translateY(500px);transform:translateY(500px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:0}38%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}55%{-webkit-transform:translateY(65px);transform:translateY(65px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}72%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}81%{-webkit-transform:translateY(28px);transform:translateY(28px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}90%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}95%{-webkit-transform:translateY(8px);transform:translateY(8px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}}@keyframes bounce-in-bottom{0%{-webkit-transform:translateY(500px);transform:translateY(500px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:0}38%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;opacity:1}55%{-webkit-transform:translateY(65px);transform:translateY(65px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}72%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}81%{-webkit-transform:translateY(28px);transform:translateY(28px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}90%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}95%{-webkit-transform:translateY(8px);transform:translateY(8px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}100%{-webkit-transform:translateY(0);transform:translateY(0);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}}
</style>
<!-- logout functionality start here  -->
<script type="text/javascript" src="https://expertchatonline.com/chatbot/socket.io/socket.io.js"></script>
<script>
    var socket = io.connect('https://expertchatonline.com:3003');
    
    function logoutVirtualVisitor() {
      
      setTimeout(function(){
        try{
          if(socket.connected){
            socket.emit('mahlogout',{sess:'78158230bf13550c8bd374631a66a552'});
            window.location="https://myassignmenthelp.com/Home/login.php?signout";
          }
          else{
            window.location="https://myassignmenthelp.com/Home/login.php?signout";
          }
        }catch(err){
          window.location="https://myassignmenthelp.com/Home/login.php?signout"; 
        }  
        document.cookie = 'expertChatOnline=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;'; 
        document.cookie = 'proactiveId=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;'; 
        document.cookie = 'unique_key=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;'; 
      },2000);
      
    }
</script>

<script>
var frontrevpop = localStorage.getItem("NewHomefrontpopreviews");
POPArray= JSON.parse(frontrevpop);

</script>
<link href="https://myassignmenthelp.com/css/new-review1.css" type="text/css" rel="stylesheet">
<script src="https://myassignmenthelp.com/js/new-review.js"></script> 
<script type="text/javascript" src="https://myassignmenthelp.com/js/reviewpopulate1.js"></script>

<div id="REWCONTENT" style="display: none">
<strong class="review-heading pull-left" id="mahreviewssubject">theology.(why is ine...</strong>
<div class="pull-right"><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i></div>
<div class="review-words"><span id="mahreviewotype">Assignment</span>, <span id="mahreviewwordcnt">5 Pages </span>, <span id="mahreviewdeadline">12 Days</span></div><p class="review-description text-italic" id="mahreviewscomment">hi i am happy with your work. you solved all ration and questions for this assignment and make good spread sheet..i got good marks in this assignment. thank you</p>
<div class="pull-left"><span id="mahreviewsimages"><img src="https://cdn1.myassignmenthelp.com/new-images/flag-aus-review.png" alt="Australia" title="Australia"></span><span class="review-userid" id="mahreviewsuser">User:206158</span></div>
<div class="pull-right review-post-date"><span id="mahreviewsdate"> 3 hours</span> ago </div>
</div>

<script>
if(frontrevpop!==null){
function reviewpopulated(i,jk){
if(jk%2=="1"){
if(i<6){
var notify = $.noist({
    limit: 1,
    stopOnLimit: true,
    delay: 12000,
    showEffect: "fadeInUp",
    hideEffect: "fadeOutLeft",
    closeEffect: "fadeOutLeft"
});
// Notification Message "default":

notify.message($("#REWCONTENT").html());

// Notification Message "success":
}
}
}
var i=0;  
 var it=0;   
window.setInterval(function(){
 it=it+1;
if(it%2=="1"){
  i=i+1;
}
       /// call your function here
      reviewpopulated(i,it);
   // console.log("it run again");
}, 25500);
}
</script>
<!-- ACTIVE SUPPORT CHAT WINDOW WHEN LOGIN REFERER FROM INITIATE CHAT -->

<!-- logout functionality end here  -->

<!-- new-chat button style and code-->
<style>#support-chat-wrapper{    width: 220px;
    position: fixed;
    top: 36.5%;
    right: -194px;
    height: 100px;
    -webkit-transition: all 1.0s ease-in-out;
    -moz-transition: all 1.0s ease-in-out;
    -o-transition: all 1.0s ease-in-out;
    transition: all 0.3s ease-in;
    z-index: 9999;}.support_chat_now_btn{   /*  display: inline-block;
    padding: 3px 13px;
    background: #ff8d00;
    color: white!important;
    text-decoration: none!important;
    border: 1px solid #ff8d00;
    font-size: 18px;*/} .btn-rotated{    /* -webkit-transform: rotate(270deg); 
    -moz-transform: rotate(270deg);
    -o-transform: rotate(270deg);*/
    /* position: relative; */
    left: -7px;
    /* top: 48px; */
    position: absolute;
    /* left: -16px; */
    top: -34px;
    /* width: 100px; */
}.open-chat{right:0px!important; -webkit-transition:all 1.0s ease-in-out;
  -moz-transition:all 1.0s ease-in-out;
  -o-transition:all 1.0s ease-in-out;
  transition:all 1.0s ease-in-out;}.chat-options-wrapper{ margin-left: 29px;
    padding: 10px 10px;
    background: white;
    margin-top: -34px; border:1px solid #e38d13; border-right:none;} #support-chat-wrapper .chat-form{margin-left: 20px;
    background: none;
    margin-top: 0px;
    overflow: visible;
    clear: both;}
    
   #support-chat-wrapper .chat-options-wrapper label.radio span{font-size: 11px;
    font-weight: 400;color:#9e9e9e;cursor:pointer;}
  #support-chat-wrapper .chat-options-wrapper label.radio{font-size: 12px;
    font-weight: 500; cursor:pointer;}
    </style>
<div id="support-chat-wrapper" class=" visible-sm visible-md visible-lg">
<a href="javascript:void(0)" class="support-chat-toggle support_chat_now_btn btn-rotated" onclick=""><img style="width: 36px;" src="https://myassignmenthelp.com/qassets/new-images/chatnow-orange.png"></a>

<div class="chat-options-wrapper">
    <h5 style="font-weight: 600;margin-bottom: 0px;margin-top: 0px;">Have any Query?</h5>
  
      <form class="chat-form">
        <label for="sales" class="radio"><input type="radio" id="sales" onclick="salesInitiate();" name="chatType" value="New">Sales Chat <br>
                <span>(New Assignment Inquiry)</span>
                </label>
        <label for="support" class="radio"><input type="radio" id="support" onclick="supportChat();" name="chatType" value="New">Support Chat 
                <br>
                <span>(Assignment Already Booked)</span>
                </label>
</form>
</div>
</div>

<input type="hidden" id="cb_visitorId" value="217353">
<input type="hidden" id="cb_visitorName" value="Yaman TechBoy">
<input type="hidden" id="cb_session_id" value="78158230bf13550c8bd374631a66a552">
<input type="hidden" id="cb_total_orders" value="2">
<input type="hidden" id="cb_total_paid_orders" value="0">
<input type="hidden" id="cb_success" value="1">



<script type="text/javascript" src="https://expertchatonline.com/chatbot/javascripts/jquery.md5.js"></script>

  

<!-- new-chat button style and code end-->
<script type="text/javascript">
    // code added on 17-AUG-2018 for proactive chat at main page
    var proactiveId = null,
      removePre = null;
      function eco_deleteCookie(name) { 
        document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;'; 
      }
      function eco_readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
          var c = ca[i];
          while (c.charAt(0)==' ') c = c.substring(1,c.length);
          if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
      }
      var uk = eco_readCookie('unique_key');
      var uk1 = (uk!=null) ? uk : '';
      function eco_createCookie(name, value, hours) {
        if (hours) {
          var date = new Date();
          date.setTime(date.getTime()+(hours*60*60*1000));
          var expires = "; expires="+date.toGMTString();
        } else {
          var expires = "";
        }
        document.cookie = name+"="+value+expires+"; path=/";
      }
      function guid() {
        function s4() {
          return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);
        }
        return s4() + s4() + '_' + s4() + '_' + s4() + '_' + s4() + '_' + s4() + s4() + s4();
      }
      function getStudentId(id) {
        if ($.trim(id) != '') {
          var id = decodeURIComponent(id);
          var pre = '$_' + $.md5(btoa('!@#$^&_CHATBOT_&^$#@!')); 
          var post = $.md5(btoa('chatBot_&^$#@!_!@#$^&')) + '_$';
          var a = id.split(pre);
            a = a[1].split(post);
            a = a[0];
          return a; 
        }
      }
      if (document.cookie.indexOf('proactiveId') > -1) {
        proactiveId = eco_readCookie('proactiveId');
        removePre = eco_readCookie('proactiveId');
      } else {
        proactiveId = guid();
        eco_createCookie('proactiveId', proactiveId, 12);
      }
      var username = $('#cb_visitorName').val();
      if(username == '' || username == undefined){
        var username = 'Guest';
      }
      if (document.cookie.indexOf('expertChatOnline') < 0)  {
        setTimeout(function() {
          socket.emit('proactive visitor', {
            name: username,
            url: window.location.href.split('#')[0],
            type: 'Visitor',
            //siteId: $('#site_id').val(),
            siteId: ['1005'],
            proactiveId: proactiveId,
            removePre: removePre,
            chat_flag: true
          });
        }, 5000);
      }
      socket.on('send proactive invitation', function(data) {
        //debugger;
        if (data.openIfr) {
          if (document.cookie.indexOf('expertChatOnline') < 0) {
            eco_createCookie('expertChatOnline', 'accepted', 12);
          }
          var url = window.location.href.split('#')[0];
          var userid = $('#cb_visitorId').val();
          var sid = '$_' + $.md5(btoa('!@#$^&_CHATBOT_&^$#@!')) + userid + $.md5(btoa('chatBot_&^$#@!_!@#$^&')) + '_$';
          var sturl = getStudentId(sid);

                    //var orderid = '654321';
          var username = $('#cb_visitorName').val();
          if(username == '' || username == undefined){
            var username = 'Guest';
          }
          pagee = 'https://expertchatonline.com:3003/visitor?chatType=proactive&agentSession='+data.agentSession+'&proactiveId='+eco_readCookie("proactiveId")+'&url='+url+'&userid=mah_'+sturl+'&orderid=<p><b> User Agent</b>: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.81 Safari/537.36</p>&username='+username+'&dept=default&question=Hi!&currentOrder=0000&tutor_level=543&site_id=1005&studentId='+sid+'&sess=78158230bf13550c8bd374631a66a552&unique_key='+uk1;
          window.open(pagee,'mahchat', 'width=400,height=500,resizable=0,menubar=no,location=no').focus();
          // setTimeout(function() {
          //   cb_createCookie('expertchatonline', 'accepted');
          // },100);
        }
      });
      $(window).on('beforeunload', function(){
        socket.emit('remove proactive visitor', {
          chat_flag: true
        });
      });

      socket.on('remove_cookie', function(data){
        if(data.chat_flag){
          var user_id = $.trim(data.user_id.replace('mah_', ''));
          if(user_id == $.trim($("#cb_visitorId").val())){
            eco_deleteCookie('expertChatOnline');
            eco_deleteCookie('proactiveId');
          }
        }
      });
    // code end on 17-AUG-2018 for proactive chat at main page

    
    setTimeout(function(){
      if(socket.connected){
          if($('#cb_success').val() == '1'){
            socket.emit('student_details',{
              s_id : $('#cb_visitorId').val(),
              s_name : $('#cb_visitorName').val(),
              s_total_orders : $('#cb_total_orders').val(),
              s_total_paid_orders : $('#cb_total_paid_orders').val(),
              session_id : $('#cb_session_id').val() ,
              page_url : window.location.href.split('#')[0],
              unique_key : (uk!=null) ? uk : ''

            });
          }
        }
      },5000);
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
        $(".support-chat-toggle").click(function(){
          //  $("#support-chat-wrapper").animate({
            //                width: "-400"
            //            });
            $("#support-chat-wrapper").toggleClass("open-chat");

        });
    });
    function makeStudentId(id){
        var stuStr = '$_' + $.md5(btoa('!@#$^&_CHATBOT_&^$#@!')) + id + $.md5(btoa('chatBot_&^$#@!_!@#$^&')) + '_$';
        return stuStr;
    }    
    //code for support chat window open
        
    function supportChat(){
            
    
      window.open('https://expertchatonline.com:3003/visitor?chatType=normal&url='+window.location.href+'&userid=mah_217353&orderid=<p><b> User Agent</b>: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.81 Safari/537.36</p>&username=Yaman TechBoy&dept=supportchat&question=Hi&currentOrder=0000&studentId='+makeStudentId(217353)+'&tutor_level=543&site_id=1005&sess=78158230bf13550c8bd374631a66a552&unique_key='+uk1, 'mahchat', 'width=400,height=500,resizable=0,menubar=no,location=no').focus();
    $("#support-chat-wrapper").removeClass("open-chat");
    }
</script>

<script>
function salesInitiate(){ 
  //code for comm100 open on sales chat click
  let height = $('#chat_window_container').contents().height();
console.log(height);
if (height != null) {
console.log("chat is open");

if (height < 300) {
console.log("now run maximize chat window code");
$('#chat_window_container').contents().find('a.chatButton')[0].click();
     $("#support-chat-wrapper").removeClass("open-chat");
}
} else {

console.log("run chat window open code");
$('#comm100-container').find('a')[0].click();
     $("#support-chat-wrapper").removeClass("open-chat");
}
}
</script>
<style>#comm100-float-button-2,#comm100-float-button-3{display:none!important;}</style>
<!-- END FOOTER -->
<script type="text/javascript">
   $(document).ready(function(){
  var t_refer = 2*$(".noofpages").val();
$("#Total_Refers").val(t_refer);  
  

$('#Due_Date').datepicker().on('changeDate.datepicker',  function(e) {

var d = new Date();
var ch = d.getHours();
var cm = d.getMinutes()+5;
if(cm > 60) { cm = "00";}
if(cm < 10 && cm > 0) { cm = "0"+cm; }
var cmer = ch >= 12 ? 'PM' : 'AM';
ch = ch % 12;
ch = ch ? ch : 12;
//$("#Due_Time").css("border","1px dashed red");
$('#Due_Time').val(ch+':'+cm+' '+cmer);
//$('#Due_Time').val('');
stepvalidation('Due_Date'); 

});   
$('#Due_Date').on('change',function(e) {
stepvalidation('Due_Date'); 
}); 
     
$('#Due_Time').timepicker().on('changeTime.timepicker',  function(e) {    
    var h= e.time.hours;
    var m= e.time.minutes;
    var mer= e.time.meridian;
  var curDate = "09/11/2018";
  var selDate = $("#Due_Date").val();
  var d = new Date();
  //var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
  var ch = d.getHours();
  var cm = d.getMinutes();
  var cmer = ch >= 12 ? 'PM' : 'AM';
  ch = ch % 12;
  ch = ch ? ch : 0;
  //ch = ch ? ch : 12;
  //alert(m);
  //alert(cm);
  if(h==12)
{
  h=0;
}
  if(curDate==selDate)
  {
    
    
  
    
    if(h>ch && mer==cmer)
    { 
  //alert("fff");
    $(this).css('border','1px solid #c2cad8');
    }
    else if(h==ch && mer==cmer && m>=cm) 
    {
//alert("fff1");      
    $(this).css('border','1px solid #c2cad8'); 
    }
    else
    {
      //alert("fff2");
    $('#Due_Time').css('border', '1px solid red');
    $('#Due_Time').val('');   
  }   
  }   
   });     
  });
  
  
  
      
  </script> 
<script type="text/javascript">

        $(document).ready(function(){
            var w = $("#Pages").val() * 250;
            $("#Word_Count").text(w+' Words');
            $('.submit_new_asign').prop("disabled", false);
        });

        var allow_submit = true;//Preventing multiple time form submit on client side
        function checkIfEmailInString(text) { 
      var re = /(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))/;
      return re.test(text);
      }

    function validate_new_asign(){
       // var captcha_response = grecaptcha.getResponse();
      //if (!allow_submit  && captcha_response.length == 0) return false;
      
      var G_Captcha=$('#G_Captcha').val();
      if(G_Captcha==1){
         var captcha_response = grecaptcha.getResponse();
                if (!allow_submit  && captcha_response.length == 0) return false; }
        else{  if (!allow_submit) return false; }
            allow_submit = false;
       if ($.trim($('#Subject_Name').val()) == '' ||  checkIfEmailInString($.trim($('#Subject_Name').val())) || $('#Subject_Name').val().replace(/[^0-9]/g,"").length>8) {
                $('#Subject_Name').css('border', '1px dashed red');
                $('.lblsubject').css('color', 'red');
                return false;
            }else if ($.trim($('#Due_Date').val()) == '') {
                $('#Due_Date').css('border', '1px dashed red');
        $('.lbldeadline').css('color', 'red');
                return false;
            }else if ($.trim($('#Due_Time').val()) == '') {
                $('#Due_Time').css('border', '1px dashed red');
        $('.lbldeadline').css('color', 'red');
                return false;
            }else if (!$("#time_zone option:selected").length || $("#time_zone").val() == '') {
                //alert('Please select time zone!');
                //$('#error_time_zone').html('Please select time zone!').show();
        $('.timezone  .select2-selection').css('border', '1px dashed red');
                return false;
            }else if (!$("input:radio[name='Work_Level']:checked").val()) {
               // $('#error_Work_Level').html('Please select work level.').show();
          $('.btn-group').css('border', '1px dashed red');
          $('.lblworklevel').css('color', 'red');
                return false;
            }else if (!$("#Details").val().trim() && $("ul#demo-files li").length < 1) {
        //alert("dddddd");
               // $('#error_Work_Level').html('Please select work level.').show();
          $("#drag-and-drop-zone").css("border","1px dashed red");
        $('.lbldescription').css('color', 'red');
                return false;
            }else if (!$("#ref_style option:selected").length || $("#ref_style").val() == '') {
               // $('#error_ref_style').html('Please select reference style.').show();
        // alert("rrrrrr");
         $('.reference-style  span.select2-selection').css('border', '1px dashed red');
         $('.lblreference').css('color', 'red');
                return false;
            }else if (!$("#weightage option:selected").length || $("#weightage").val() == '') {
               // $('#error_weightage').html('Please select assignment weightage. Needed to understand importance of assignment.').show();
         //alert("aaaaa");
          $('.assignment-weightage  span.select2-selection').css('border', '1px dashed red');
        $('.lblassignmentweightage').css('color', 'red');
                return false;
            }
            else if($("#g-recaptcha-response").val() === "" && G_Captcha==1) { 
                $('.g-recaptcha').css('border', '1px dashed red').children('div').css({'height' : '76px', 'width' : '302px'});
                return false;
              }
            else{
                $('.submit_new_asign').html("Please Wait...");
            }
        }

    $("#Subject_Name, #Due_Date, #Due_Time").focus(function(){
      $(this).css('border','1px solid #c2cad8');
      allow_submit = true;
      return false;
    });
    
    $("#Subject_Name").blur(function(){
      if (!$("#Subject_Name").val() || checkIfEmailInString($.trim($('#Subject_Name').val())) || $('#Subject_Name').val().replace(/[^0-9]/g,"").length>8) {
      $("#Subject_Name").css('border','1px dashed red');
      $(".lblsubject").css('color','red');
      return false;
      }
      else{
      $("#Subject_Name").css('border','1px solid #c2cad8');
      $(".lblsubject").css('color','black');
      allow_submit = true;      
      }
    });
    function stepvalidation(id)
    {
      if(id=="Due_Date")
      {
        if ($("#Due_Date").val()=="") {
        $("#Due_Date").css('border','1px dashed red');
        $(".lbldeadline").css('color','red');
        return false;
        }
        else{
        $("#Due_Date").css('border','1px solid #c2cad8');
        $(".lbldeadline").css('color','black');
        allow_submit = true;      
        }
      }
    }
    
    $("#Details").blur(function(){
      if (!$("#Details").val().trim() && $("ul#demo-files li").length < 1) {
      $("#drag-and-drop-zone").css('border','1px dashed red');
      $(".lbldescription").css('color','red');
      return false;
      }
      else{
      $("#drag-and-drop-zone").css('border','1px solid #c2cad8');
      $(".lbldescription").css('color','black');
      allow_submit = true;      
      }
      
    });
    $('input[name=Work_Level]').on('change', function() { 
    if(($('input[name=Work_Level]:checked').length <= 0)){  
    $(".btn-group").css('border','1px dashed red');
    $(".lblworklevel").css('color','red');
    return false;
    }else if(($('input[name=Work_Level]:checked').length > 0)){ 
    $(".btn-group").css('border','none');
    $(".lblworklevel").css('color','black');
     allow_submit = true;
    }
    });

    
    $('#ref_style').on('change', function() { 
    if($("#ref_style").val() == ''){ 
    $('.reference-style  span.select2-selection').css('border', '1px dashed red');
    $(".lblreference").css('color','red');
     return false;
    }else {
    $('.reference-style  span.select2-selection').css('border', '1px solid #c2cad8');
    $(".lblreference").css('color','black');
     allow_submit = true;
    }
    });
    
    
    $('#weightage').on('change', function() { 
    if($("#weightage").val() == ''){ 
    $('.assignment-weightage  span.select2-selection').css('border', '1px dashed red');
    $(".lblassignmentweightage").css('color','red');
     return false;
    }else {
    $('.assignment-weightage  span.select2-selection').css('border', '1px solid #c2cad8');
    $(".lblassignmentweightage").css('color','black');
     allow_submit = true;
    }
    });
    

        $('#time_zone').on('change', function() {
            var z = $(this).attr('id');
            $('#error_'+z).html('').hide();
            allow_submit = true;
            return false;
        });

        $('#drag-and-drop-zone').dmUploader({
            url: 'https://myassignmenthelp.com/Home/files-upload.php?Type=orders',
            dataType: 'json',
            extraData: {"Type": JSON.stringify('orders')},
            onNewFile: function(id, file) {
                add_file('#demo-files', id, file, 'orders');
            },
            onComplete: function() {
                $('.submit_new_asign').prop("disabled", false);
                $("#demo-files-error").html('');
                /**for file**/
                $("#drag-and-drop-zone").css('border','1px solid #c2cad8');
                $(".lbldescription").css('color','black');
                allow_submit = true;      
            },
            onUploadProgress: function(id, percent) {
                var percentStr = percent + '%';
               // $("#demo-files-error").html('Please wait,File uploading in progress -  ' + percentStr);
          file_add_progress_bar('#demo-files-error',percent,percentStr);
                $('.submit_new_asign').prop("disabled", true);              
            },  
            onFileTypeError: function(file){
                $("#demo-files-error").html(file.name + ' cannot be added: file type is wrong');
        error_message_hide('#demo-files-error');
        
            },
            onFileSizeError: function(file){
                $("#demo-files-error").html(file.name + ' cannot be added: size excess limit');
        error_message_hide('#demo-files-error');
            },
            onFileExtError: function(file){
                $("#demo-files-error").html(file.name + ' cannot be added: file extension is wrong');
        error_message_hide('#demo-files-error');
            }       
        });

        function page_inc(){
            var val;
            var words;
            val = $(".noofpages").val();
            val = parseInt(val) + 1;
      var total_refer = 2*val;
            words = val*250;
            $(".noofpages").val(val);
      $("#Total_Refers").val(total_refer);

            $("#Word_Count").text(words+' Words');
            return false;
        }

        function page_dec(){
            var val;
            var words;
            val  = $(".noofpages").val();
            val = parseInt(val);
            if(val!=1)
            {
                val = val - 1;
        var total_refer = 2*val;
                $(".noofpages").val(val);
        $("#Total_Refers").val(total_refer);

            }
            words = val*250;
            if(words == 0){words ='No';}
            $("#Word_Count").text(words+' Words');
            $(".noofpages").val(val);
            return false;
        }
    </script>
<script type="text/javascript">
            $( document ).ready(function() {
                $.ajax({
                    url: 'https://myassignmenthelp.com/Home/controller/test-device.php',
                    type: 'POST',
                    data: '',
                    success: function(data) { 
                        //alert(data); 
                        $("#device_type").val(data);
                    }
                });
            });
        </script>
<script>
$(document).ready(function(){
  $("#order_processing").hide();
  $('.g-recaptcha').children('div').css({'height' : '76px !important', 'width' : '302px !important'});
  
  //expert selected
$('.checkexpert').on('click', function () {
    $('.expert-data').html('');
});
//expert selected

});
function recaptchaCallback() {
  $('.g-recaptcha').css('border', 'none');
}

</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '740068246050048');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=740068246050048&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<!-- myassignment help student panel -->
<iframe id="comm100-iframe" style="display: none;"></iframe><div id="comm100-container"><div><div></div><div></div><div><div></div></div></div><div id="comm100-float-button-2"><div style="position: fixed; z-index: 2147483642; font-size: 0px; right: 0%; top: 50%; transform: translateY(-50%);"><a href="https://chatserver.comm100.com/ChatWindow.aspx?siteId=20537&amp;planId=5000005"><img src="https://chatserver.comm100.com/DBResource/DBImage.ashx?imgId=5000128&amp;type=2&amp;siteId=20537" alt="chat button" style="border: none;"></a></div></div></div><div class="noist noist-bottom noist-left"></div></body></html>