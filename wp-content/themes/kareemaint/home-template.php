<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

	<form action="<?php the_permalink('29');?>" method="post" name="tour_search">
    <?php do_action ( 'portlet_tour_search' )?>
    </form>
    
    <!--<div class="well bg-color-white disapp-whole" style="display:none;">
        <?php //do_action ( 'portlet_tour_search_results' )?>
    </div>--><!-- /well-end -->
    
    <!--<div class="well clearfix show-whole" style="display:none;">
        <?php //do_action ( 'portlet_tour_client_form' )?>
    </div>--><!-- /well-end -->
    
    
    <div class="well clearfix">
    <div class="col-md-12 bg-greish">
        <div class="row">
            <div class="col-md-6">
                <h4>Passangers</h4>
            </div>
            <div class="col-md-6">
                <span class="badge badge-set pull-right">1</span>
            </div>
        </div><!-- /row-end --> 
        <div class="border-b m-top-10-bot-20"></div>
        <div class="row m-bot-20">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <label>Adult Full Name*</label>
                <input type="text" placeholder="Adult Full Name" class="form-control">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <label>Date Of Birth</label>
                <input type="text" placeholder="mm/dd/yyyy" class="form-control datepicker">
            </div>
            <div class="col-md-4">
                <label>Title</label>
                <select class="form-control">
                    <option selected="selected" value="S">Select</option>
                    <option value="MR">Mr</option>
                    <option value="MRS">Mrs</option>
                    <option value="MIS">Miss</option>
                </select>
            </div>
        </div><!-- /row-end --> 
        <div class="row m-bot-20 t-text">
            <div class="col-md-4">
                <label>CNIC*</label>
                <input type="text" class="form-control" placeholder="43259568129912">
                <div class="spans">Enter CNIC or Passport Number</div>
            </div>
            <div class="col-md-4">
                <form> 
                    <label>Wheel Chair Required</label>
                    <div class="checkbox checks"> 
                        <label><input type="checkbox" value=""> 
                            <i class="fa fa-wheelchair"></i>
                        </label> 
                    </div> 
                </form>
            </div>
        </div><!-- /row-end --> 
        <div class="border-d m-top-40-bot-30"></div>
        <div class="row">
            <div class="col-md-6">
                <h4>Customer</h4>
            </div>
            <div class="col-md-6">
                <span class="badge badge-set pull-right">2</span>
            </div>
        </div><!-- /row-end --> 
        <div class="border-b m-top-10-bot-20"></div>
        <div class="row m-bot-20">
            <div class="col-md-4">
                <span class="col-black">                    
                    Contact Owner: <span class="col-red">*</span>
                </span>
            </div>
            <div class="col-md-4">
                <span class="little-size">Full Name*</span>
                <input type="text" placeholder="Full Name" class="form-control">
            </div>
            <div class="col-md-4">
                <span class="little-size">Email*</span>
                <input type="email" placeholder="Enter Your Email" class="form-control phone1">
            </div>
        </div><!-- /row-end --> 
        <div class="row m-bot-20">
            <div class="col-md-4">
                <span class="col-black">                    
                    Phone Number: <span class="col-red">*</span>
                </span>
            </div>
            <div class="col-md-4">
                <span class="little-size">Country code*</span>
                <select class="form-control">
                    <option value="+93">Afghanistan (+93)</option>
                    <option value="+355">Albania (+355)</option>
                    <option value="+213">Algeria (+213)</option>
                    <option value="+376">Andorra (+376)</option>
                    <option value="+244">Angola (+244)</option>
                    <option value="+672">Antarctica (+672)</option>
                    <option value="+54">Argentina (+54)</option>
                    <option value="+374">Armenia (+374)</option>
                    <option value="+297">Aruba (+297)</option>
                    <option value="+61">Cocos (keeling) Islands (+61)</option>
                    <option value="+43">Austria (+43)</option>
                    <option value="+994">Azerbaijan (+994)</option>
                    <option value="+973">Bahrain (+973)</option>
                    <option value="+880">Bangladesh (+880)</option>
                    <option value="+375">Belarus (+375)</option>
                    <option value="+32">Belgium (+32)</option>
                    <option value="+501">Belize (+501)</option>
                    <option value="+229">Benin (+229)</option>
                    <option value="+975">Bhutan (+975)</option>
                    <option value="+591">Bolivia, Plurinational State Of (+591)</option>
                    <option value="+387">Bosnia And Herzegovina (+387)</option>
                    <option value="+267">Botswana (+267)</option>
                    <option value="+55">Brazil (+55)</option>
                    <option value="+673">Brunei Darussalam (+673)</option>
                    <option value="+359">Bulgaria (+359)</option>
                    <option value="+226">Burkina Faso (+226)</option>
                    <option value="+95">Myanmar (+95)</option>
                    <option value="+257">Burundi (+257)</option>
                    <option value="+855">Cambodia (+855)</option>
                    <option value="+237">Cameroon (+237)</option>
                    <option value="+1">United States (+1)</option>
                    <option value="+238">Cape Verde (+238)</option>
                    <option value="+236">Central African Republic (+236)</option>
                    <option value="+235">Chad (+235)</option>
                    <option value="+56">Chile (+56)</option>
                    <option value="+86">China (+86)</option>
                    <option value="+57">Colombia (+57)</option>
                    <option value="+269">Comoros (+269)</option>
                    <option value="+242">Congo (+242)</option>
                    <option value="+243">Congo, The Democratic Republic Of The (+243)</option>
                    <option value="+682">Cook Islands (+682)</option>
                    <option value="+506">Costa Rica (+506)</option>
                    <option value="+385">Croatia (+385)</option>
                    <option value="+53">Cuba (+53)</option>
                    <option value="+357">Cyprus (+357)</option>
                    <option value="+420">Czech Republic (+420)</option>
                    <option value="+45">Denmark (+45)</option>
                    <option value="+253">Djibouti (+253)</option>
                    <option value="+670">Timor-leste (+670)</option>
                    <option value="+593">Ecuador (+593)</option>
                    <option value="+20">Egypt (+20)</option>
                    <option value="+503">El Salvador (+503)</option>
                    <option value="+240">Equatorial Guinea (+240)</option>
                    <option value="+291">Eritrea (+291)</option>
                    <option value="+372">Estonia (+372)</option>
                    <option value="+251">Ethiopia (+251)</option>
                    <option value="+500">Falkland Islands (malvinas) (+500)</option>
                    <option value="+298">Faroe Islands (+298)</option>
                    <option value="+679">Fiji (+679)</option>
                    <option value="+358">Finland (+358)</option>
                    <option value="+33">France (+33)</option>
                    <option value="+689">French Polynesia (+689)</option>
                    <option value="+241">Gabon (+241)</option>
                    <option value="+220">Gambia (+220)</option>
                    <option value="+995">Georgia (+995)</option>
                    <option value="+49">Germany (+49)</option>
                    <option value="+233">Ghana (+233)</option>
                    <option value="+350">Gibraltar (+350)</option>
                    <option value="+30">Greece (+30)</option>
                    <option value="+299">Greenland (+299)</option>
                    <option value="+502">Guatemala (+502)</option>
                    <option value="+224">Guinea (+224)</option>
                    <option value="+245">Guinea-bissau (+245)</option>
                    <option value="+592">Guyana (+592)</option>
                    <option value="+509">Haiti (+509)</option>
                    <option value="+504">Honduras (+504)</option>
                    <option value="+852">Hong Kong (+852)</option>
                    <option value="+36">Hungary (+36)</option>
                    <option value="+91">India (+91)</option>
                    <option value="+62">Indonesia (+62)</option>
                    <option value="+98">Iran, Islamic Republic Of (+98)</option>
                    <option value="+964">Iraq (+964)</option>
                    <option value="+353">Ireland (+353)</option>
                    <option value="+44">United Kingdom (+44)</option>
                    <option value="+972">Israel (+972)</option>
                    <option value="+39">Holy See (vatican City State) (+39)</option>
                    <option value="+225">Cote D'ivoire (+225)</option>
                    <option value="+81">Japan (+81)</option>
                    <option value="+962">Jordan (+962)</option>
                    <option value="+7">Russian Federation (+7)</option>
                    <option value="+254">Kenya (+254)</option>
                    <option value="+686">Kiribati (+686)</option>
                    <option value="+965">Kuwait (+965)</option>
                    <option value="+996">Kyrgyzstan (+996)</option>
                    <option value="+856">Lao People's Democratic Republic (+856)</option>
                    <option value="+371">Latvia (+371)</option>
                    <option value="+961">Lebanon (+961)</option>
                    <option value="+266">Lesotho (+266)</option>
                    <option value="+231">Liberia (+231)</option>
                    <option value="+218">Libya (+218)</option>
                    <option value="+423">Liechtenstein (+423)</option>
                    <option value="+370">Lithuania (+370)</option>
                    <option value="+352">Luxembourg (+352)</option>
                    <option value="+853">Macao (+853)</option>
                    <option value="+389">Macedonia, The Former Yugoslav Republic Of (+389)</option>
                    <option value="+261">Madagascar (+261)</option>
                    <option value="+265">Malawi (+265)</option>
                    <option value="+60">Malaysia (+60)</option>
                    <option value="+960">Maldives (+960)</option>
                    <option value="+223">Mali (+223)</option>
                    <option value="+356">Malta (+356)</option>
                    <option value="+692">Marshall Islands (+692)</option>
                    <option value="+222">Mauritania (+222)</option>
                    <option value="+230">Mauritius (+230)</option>
                    <option value="+262">Mayotte (+262)</option>
                    <option value="+52">Mexico (+52)</option>
                    <option value="+691">Micronesia, Federated States Of (+691)</option>
                    <option value="+373">Moldova, Republic Of (+373)</option>
                    <option value="+377">Monaco (+377)</option>
                    <option value="+976">Mongolia (+976)</option>
                    <option value="+382">Montenegro (+382)</option>
                    <option value="+212">Morocco (+212)</option>
                    <option value="+258">Mozambique (+258)</option>
                    <option value="+264">Namibia (+264)</option>
                    <option value="+674">Nauru (+674)</option>
                    <option value="+977">Nepal (+977)</option>
                    <option value="+31">Netherlands (+31)</option>
                    <option value="+687">New Caledonia (+687)</option>
                    <option value="+64">New Zealand (+64)</option>
                    <option value="+505">Nicaragua (+505)</option>
                    <option value="+227">Niger (+227)</option>
                    <option value="+234">Nigeria (+234)</option>
                    <option value="+683">Niue (+683)</option>
                    <option value="+850">Korea, Democratic People's Republic Of (+850)</option>
                    <option value="+47">Norway (+47)</option>
                    <option value="+968">Oman (+968)</option>
                    <option value="+92" selected="Pakistan (+92)">Pakistan (+92)</option>
                    <option value="+680">Palau (+680)</option>
                    <option value="+507">Panama (+507)</option>
                    <option value="+675">Papua New Guinea (+675)</option>
                    <option value="+595">Paraguay (+595)</option>
                    <option value="+51">Peru (+51)</option>
                    <option value="+63">Philippines (+63)</option>
                    <option value="+870">Pitcairn (+870)</option>
                    <option value="+48">Poland (+48)</option>
                    <option value="+351">Portugal (+351)</option>
                    <option value="+974">Qatar (+974)</option>
                    <option value="+40">Romania (+40)</option>
                    <option value="+250">Rwanda (+250)</option>
                    <option value="+590">Saint Barthelemy (+590)</option>
                    <option value="+685">Samoa (+685)</option>
                    <option value="+378">San Marino (+378)</option>
                    <option value="+239">Sao Tome And Principe (+239)</option>
                    <option value="+966">Saudi Arabia (+966)</option>
                    <option value="+221">Senegal (+221)</option>
                    <option value="+381">Serbia (+381)</option>
                    <option value="+248">Seychelles (+248)</option>
                    <option value="+232">Sierra Leone (+232)</option>
                    <option value="+65">Singapore (+65)</option>
                    <option value="+421">Slovakia (+421)</option>
                    <option value="+386">Slovenia (+386)</option>
                    <option value="+677">Solomon Islands (+677)</option>
                    <option value="+252">Somalia (+252)</option>
                    <option value="+27">South Africa (+27)</option>
                    <option value="+82">Korea, Republic Of (+82)</option>
                    <option value="+34">Spain (+34)</option>
                    <option value="+94">Sri Lanka (+94)</option>
                    <option value="+290">Saint Helena, Ascension And Tristan Da Cunha (+290)</option>
                    <option value="+508">Saint Pierre And Miquelon (+508)</option>
                    <option value="+249">Sudan (+249)</option>
                    <option value="+597">Suriname (+597)</option>
                    <option value="+268">Swaziland (+268)</option>
                    <option value="+46">Sweden (+46)</option>
                    <option value="+41">Switzerland (+41)</option>
                    <option value="+963">Syrian Arab Republic (+963)</option>
                    <option value="+886">Taiwan, Province Of China (+886)</option>
                    <option value="+992">Tajikistan (+992)</option>
                    <option value="+255">Tanzania, United Republic Of (+255)</option>
                    <option value="+66">Thailand (+66)</option>
                    <option value="+228">Togo (+228)</option>
                    <option value="+690">Tokelau (+690)</option>
                    <option value="+676">Tonga (+676)</option>
                    <option value="+216">Tunisia (+216)</option>
                    <option value="+90">Turkey (+90)</option>
                    <option value="+993">Turkmenistan (+993)</option>
                    <option value="+688">Tuvalu (+688)</option>
                    <option value="+971">United Arab Emirates (+971)</option>
                    <option value="+256">Uganda (+256)</option>
                    <option value="+380">Ukraine (+380)</option>
                    <option value="+598">Uruguay (+598)</option>
                    <option value="+998">Uzbekistan (+998)</option>
                    <option value="+678">Vanuatu (+678)</option>
                    <option value="+58">Venezuela, Bolivarian Republic Of (+58)</option>
                    <option value="+84">Viet Nam (+84)</option>
                    <option value="+681">Wallis And Futuna (+681)</option>
                    <option value="+967">Yemen (+967)</option>
                    <option value="+260">Zambia (+260)</option>
                    <option value="+263">Zimbabwe (+263)</option>
                </select>
            </div>
            <div class="col-md-4">
                <span class="little-size">Preferred Phone Number*</span>
                <input type="text" placeholder="xxxxxxxxxx" class="form-control">
            </div>
        </div><!-- /row-end --> 
        <div class="row m-bot-20">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <span class="little-size">Country code*</span>
                <select class="form-control">
                    <option value="+93">Afghanistan (+93)</option>
                    <option value="+355">Albania (+355)</option>
                    <option value="+213">Algeria (+213)</option>
                    <option value="+376">Andorra (+376)</option>
                    <option value="+244">Angola (+244)</option>
                    <option value="+672">Antarctica (+672)</option>
                    <option value="+54">Argentina (+54)</option>
                    <option value="+374">Armenia (+374)</option>
                    <option value="+297">Aruba (+297)</option>
                    <option value="+61">Cocos (keeling) Islands (+61)</option>
                    <option value="+43">Austria (+43)</option>
                    <option value="+994">Azerbaijan (+994)</option>
                    <option value="+973">Bahrain (+973)</option>
                    <option value="+880">Bangladesh (+880)</option>
                    <option value="+375">Belarus (+375)</option>
                    <option value="+32">Belgium (+32)</option>
                    <option value="+501">Belize (+501)</option>
                    <option value="+229">Benin (+229)</option>
                    <option value="+975">Bhutan (+975)</option>
                    <option value="+591">Bolivia, Plurinational State Of (+591)</option>
                    <option value="+387">Bosnia And Herzegovina (+387)</option>
                    <option value="+267">Botswana (+267)</option>
                    <option value="+55">Brazil (+55)</option>
                    <option value="+673">Brunei Darussalam (+673)</option>
                    <option value="+359">Bulgaria (+359)</option>
                    <option value="+226">Burkina Faso (+226)</option>
                    <option value="+95">Myanmar (+95)</option>
                    <option value="+257">Burundi (+257)</option>
                    <option value="+855">Cambodia (+855)</option>
                    <option value="+237">Cameroon (+237)</option>
                    <option value="+1">United States (+1)</option>
                    <option value="+238">Cape Verde (+238)</option>
                    <option value="+236">Central African Republic (+236)</option>
                    <option value="+235">Chad (+235)</option>
                    <option value="+56">Chile (+56)</option>
                    <option value="+86">China (+86)</option>
                    <option value="+57">Colombia (+57)</option>
                    <option value="+269">Comoros (+269)</option>
                    <option value="+242">Congo (+242)</option>
                    <option value="+243">Congo, The Democratic Republic Of The (+243)</option>
                    <option value="+682">Cook Islands (+682)</option>
                    <option value="+506">Costa Rica (+506)</option>
                    <option value="+385">Croatia (+385)</option>
                    <option value="+53">Cuba (+53)</option>
                    <option value="+357">Cyprus (+357)</option>
                    <option value="+420">Czech Republic (+420)</option>
                    <option value="+45">Denmark (+45)</option>
                    <option value="+253">Djibouti (+253)</option>
                    <option value="+670">Timor-leste (+670)</option>
                    <option value="+593">Ecuador (+593)</option>
                    <option value="+20">Egypt (+20)</option>
                    <option value="+503">El Salvador (+503)</option>
                    <option value="+240">Equatorial Guinea (+240)</option>
                    <option value="+291">Eritrea (+291)</option>
                    <option value="+372">Estonia (+372)</option>
                    <option value="+251">Ethiopia (+251)</option>
                    <option value="+500">Falkland Islands (malvinas) (+500)</option>
                    <option value="+298">Faroe Islands (+298)</option>
                    <option value="+679">Fiji (+679)</option>
                    <option value="+358">Finland (+358)</option>
                    <option value="+33">France (+33)</option>
                    <option value="+689">French Polynesia (+689)</option>
                    <option value="+241">Gabon (+241)</option>
                    <option value="+220">Gambia (+220)</option>
                    <option value="+995">Georgia (+995)</option>
                    <option value="+49">Germany (+49)</option>
                    <option value="+233">Ghana (+233)</option>
                    <option value="+350">Gibraltar (+350)</option>
                    <option value="+30">Greece (+30)</option>
                    <option value="+299">Greenland (+299)</option>
                    <option value="+502">Guatemala (+502)</option>
                    <option value="+224">Guinea (+224)</option>
                    <option value="+245">Guinea-bissau (+245)</option>
                    <option value="+592">Guyana (+592)</option>
                    <option value="+509">Haiti (+509)</option>
                    <option value="+504">Honduras (+504)</option>
                    <option value="+852">Hong Kong (+852)</option>
                    <option value="+36">Hungary (+36)</option>
                    <option value="+91">India (+91)</option>
                    <option value="+62">Indonesia (+62)</option>
                    <option value="+98">Iran, Islamic Republic Of (+98)</option>
                    <option value="+964">Iraq (+964)</option>
                    <option value="+353">Ireland (+353)</option>
                    <option value="+44">United Kingdom (+44)</option>
                    <option value="+972">Israel (+972)</option>
                    <option value="+39">Holy See (vatican City State) (+39)</option>
                    <option value="+225">Cote D'ivoire (+225)</option>
                    <option value="+81">Japan (+81)</option>
                    <option value="+962">Jordan (+962)</option>
                    <option value="+7">Russian Federation (+7)</option>
                    <option value="+254">Kenya (+254)</option>
                    <option value="+686">Kiribati (+686)</option>
                    <option value="+965">Kuwait (+965)</option>
                    <option value="+996">Kyrgyzstan (+996)</option>
                    <option value="+856">Lao People's Democratic Republic (+856)</option>
                    <option value="+371">Latvia (+371)</option>
                    <option value="+961">Lebanon (+961)</option>
                    <option value="+266">Lesotho (+266)</option>
                    <option value="+231">Liberia (+231)</option>
                    <option value="+218">Libya (+218)</option>
                    <option value="+423">Liechtenstein (+423)</option>
                    <option value="+370">Lithuania (+370)</option>
                    <option value="+352">Luxembourg (+352)</option>
                    <option value="+853">Macao (+853)</option>
                    <option value="+389">Macedonia, The Former Yugoslav Republic Of (+389)</option>
                    <option value="+261">Madagascar (+261)</option>
                    <option value="+265">Malawi (+265)</option>
                    <option value="+60">Malaysia (+60)</option>
                    <option value="+960">Maldives (+960)</option>
                    <option value="+223">Mali (+223)</option>
                    <option value="+356">Malta (+356)</option>
                    <option value="+692">Marshall Islands (+692)</option>
                    <option value="+222">Mauritania (+222)</option>
                    <option value="+230">Mauritius (+230)</option>
                    <option value="+262">Mayotte (+262)</option>
                    <option value="+52">Mexico (+52)</option>
                    <option value="+691">Micronesia, Federated States Of (+691)</option>
                    <option value="+373">Moldova, Republic Of (+373)</option>
                    <option value="+377">Monaco (+377)</option>
                    <option value="+976">Mongolia (+976)</option>
                    <option value="+382">Montenegro (+382)</option>
                    <option value="+212">Morocco (+212)</option>
                    <option value="+258">Mozambique (+258)</option>
                    <option value="+264">Namibia (+264)</option>
                    <option value="+674">Nauru (+674)</option>
                    <option value="+977">Nepal (+977)</option>
                    <option value="+31">Netherlands (+31)</option>
                    <option value="+687">New Caledonia (+687)</option>
                    <option value="+64">New Zealand (+64)</option>
                    <option value="+505">Nicaragua (+505)</option>
                    <option value="+227">Niger (+227)</option>
                    <option value="+234">Nigeria (+234)</option>
                    <option value="+683">Niue (+683)</option>
                    <option value="+850">Korea, Democratic People's Republic Of (+850)</option>
                    <option value="+47">Norway (+47)</option>
                    <option value="+968">Oman (+968)</option>
                    <option value="+92" selected="Pakistan (+92)">Pakistan (+92)</option>
                    <option value="+680">Palau (+680)</option>
                    <option value="+507">Panama (+507)</option>
                    <option value="+675">Papua New Guinea (+675)</option>
                    <option value="+595">Paraguay (+595)</option>
                    <option value="+51">Peru (+51)</option>
                    <option value="+63">Philippines (+63)</option>
                    <option value="+870">Pitcairn (+870)</option>
                    <option value="+48">Poland (+48)</option>
                    <option value="+351">Portugal (+351)</option>
                    <option value="+974">Qatar (+974)</option>
                    <option value="+40">Romania (+40)</option>
                    <option value="+250">Rwanda (+250)</option>
                    <option value="+590">Saint Barthelemy (+590)</option>
                    <option value="+685">Samoa (+685)</option>
                    <option value="+378">San Marino (+378)</option>
                    <option value="+239">Sao Tome And Principe (+239)</option>
                    <option value="+966">Saudi Arabia (+966)</option>
                    <option value="+221">Senegal (+221)</option>
                    <option value="+381">Serbia (+381)</option>
                    <option value="+248">Seychelles (+248)</option>
                    <option value="+232">Sierra Leone (+232)</option>
                    <option value="+65">Singapore (+65)</option>
                    <option value="+421">Slovakia (+421)</option>
                    <option value="+386">Slovenia (+386)</option>
                    <option value="+677">Solomon Islands (+677)</option>
                    <option value="+252">Somalia (+252)</option>
                    <option value="+27">South Africa (+27)</option>
                    <option value="+82">Korea, Republic Of (+82)</option>
                    <option value="+34">Spain (+34)</option>
                    <option value="+94">Sri Lanka (+94)</option>
                    <option value="+290">Saint Helena, Ascension And Tristan Da Cunha (+290)</option>
                    <option value="+508">Saint Pierre And Miquelon (+508)</option>
                    <option value="+249">Sudan (+249)</option>
                    <option value="+597">Suriname (+597)</option>
                    <option value="+268">Swaziland (+268)</option>
                    <option value="+46">Sweden (+46)</option>
                    <option value="+41">Switzerland (+41)</option>
                    <option value="+963">Syrian Arab Republic (+963)</option>
                    <option value="+886">Taiwan, Province Of China (+886)</option>
                    <option value="+992">Tajikistan (+992)</option>
                    <option value="+255">Tanzania, United Republic Of (+255)</option>
                    <option value="+66">Thailand (+66)</option>
                    <option value="+228">Togo (+228)</option>
                    <option value="+690">Tokelau (+690)</option>
                    <option value="+676">Tonga (+676)</option>
                    <option value="+216">Tunisia (+216)</option>
                    <option value="+90">Turkey (+90)</option>
                    <option value="+993">Turkmenistan (+993)</option>
                    <option value="+688">Tuvalu (+688)</option>
                    <option value="+971">United Arab Emirates (+971)</option>
                    <option value="+256">Uganda (+256)</option>
                    <option value="+380">Ukraine (+380)</option>
                    <option value="+598">Uruguay (+598)</option>
                    <option value="+998">Uzbekistan (+998)</option>
                    <option value="+678">Vanuatu (+678)</option>
                    <option value="+58">Venezuela, Bolivarian Republic Of (+58)</option>
                    <option value="+84">Viet Nam (+84)</option>
                    <option value="+681">Wallis And Futuna (+681)</option>
                    <option value="+967">Yemen (+967)</option>
                    <option value="+260">Zambia (+260)</option>
                    <option value="+263">Zimbabwe (+263)</option>
                </select> 
            </div>
            <div class="col-md-4">
                <span class="little-size">Alternate Phone Number*</span>
                <input type="text" placeholder="xxxxxxxxxx" class="form-control">
            </div>
        </div><!-- /row-end -->
        <input type="submit" value="Book Now" class="btn btn-default">
    </div><!-- /col-8-end -->
</div><!-- /well-end -->
    

<?php get_footer(); ?>
