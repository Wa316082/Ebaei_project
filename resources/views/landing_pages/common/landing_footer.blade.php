<!-- footer Section start-->
<section class="footer_areatop">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="footercontent">
                    <a href="#"><img src="{{ asset('landing/root/img/baeilogo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                <div class="track">
                    <ul>
                        <li><i class="fa fa-chevron-right"></i><a href="#">Home</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href="#/about">About</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href="#/service">Services</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href="#/group">Group Archive</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href="#/experience">Experience</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href="#/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                <div class="track">
                    <ul>
                        <li><i class="fa fa-chevron-right"></i><a href="#">Delivery Agents</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href="#">E-commerce</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href="#">Payments</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href="#">User Guidline</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href="#">Call Support</a></li>
                        <li><i class="fa fa-chevron-right"></i><a href="#">Career</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                <div class="track">
                    <ul>
                        <li><i class="fa-brands fa-facebook"  style="color:#0985ea;"><a href="#"></i>Facebook</a></li>
                        <li><i class="fa-twitter" style="color:#1069b4;"></i><a href="#">Twitter</a></li>
                        <li><i class="fa-brands fa-linkedin" style="color:#171773;"></i><a href="#">Linkedin</a></li>
                        <li><i class="fa-instagram" style="color:#905f5f;"></i><a href="#">Instagram</a></li>
                        <li><i class="fa-google-plus" style="color:#ff0000;"></i><a href="#">Google+</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer Section End -->

<!-- footer_areabottom Section start-->
<section class="footer_areabottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="footer_areabottomcontent">
                    <h1>Copyright  &copy; 2022-2023. Baei expresslimited.com. All rights reserved.Terms & Conditions  |  Privacy Policy</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer_areabottom Section send-->

 <!-- login Registration section start -->

<div class="cd-signin-modal js-signin-modal"> <!-- this is the entire modal form, including the background -->

    <form class="form-horizontal" role="form" method="POST" action="#/merchant/login" id="login">
    <input type="hidden" name="status" id="loginStatus" value="1">
    <input type="hidden" name="_token" value="8hbtXRXb385K4I3OLSEigrTprLHutwyNXE3u1AHi">
    <input name="email" id="loginEmail" type="hidden" value="" />
    <input name="password" id="loginPassword" type="hidden" value="" />
    </form>


    <div class="cd-signin-modal__container"> <!-- this is the container wrapper -->
        <ul class="cd-signin-modal__switcher js-signin-modal-switcher js-signin-modal-trigger">
            <li><a href="#0" data-signin="login" data-type="login">Sign in</a></li>
            <li><a href="#0" data-signin="signup" data-type="signup">New account</a></li>
        </ul>

        <div class="cd-signin-modal__block js-signin-modal-block" data-type="login"> <!-- log in form -->
            <form class="cd-signin-modal__form" role="form" method="POST" action="#/loginRequest" name="signin">
                <input type="hidden" name="status" value="1">
                    <input type="hidden" name="_token" value="8hbtXRXb385K4I3OLSEigrTprLHutwyNXE3u1AHi">
                <fieldset>
                    <span id="msgSignin"></span>

                    <p class="cd-signin-modal__fieldset">
                        <label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signin-email">E-mail</label>
                        <input style="padding: 16px 20px 16px 50px;" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" name="email" id="signinEmail"  type="email" placeholder="E-mail">
                        <span class="cd-signin-modal__error">Error message here!</span>
                    </p>

                    <p class="cd-signin-modal__fieldset">
                        <label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signin-password">Password</label>
                        <input style="padding: 16px 20px 16px 50px;" class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" name="password" id="signinPassword"  type="password"  placeholder="Password">
                        <a href="#0" class="cd-signin-modal__hide-password js-hide-password">Hide</a>
                        <span class="cd-signin-modal__error">Error message here!</span>
                    </p>

                    <p class="cd-signin-modal__fieldset">
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" id="remember-me">
                            <label for="remember-me">
                                Remember me
                            </label>
                        </div>
                    </p>

                    <p class="cd-signin-modal__fieldset">
                        <input class="cd-signin-modal__input cd-signin-modal__input--full-width" type="submit" id="signin" name="signin" value="Login">
                    </p>
                </fieldset>
            </form>

            <p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#/cmscp/password/reset">Forgot your password?</a></p>
        </div> <!-- cd-signin-modal__block -->

        <div class="cd-signin-modal__block js-signin-modal-block" data-type="signup"> <!-- sign up form -->
            <form class="cd-signin-modal__form cd-signin-modal__form_custom" name="signup" role="form" method="POST" enctype="multipart/form-data" action="#/userRegistration">
                <input type="hidden" name="_token" value="8hbtXRXb385K4I3OLSEigrTprLHutwyNXE3u1AHi">
                <fieldset>
                    <span id="msgSignup"></span>

                    <div class="row bg-deep padding-top-bottom-ten col-sm-12">
                        <div class="col-sm-12">Registration for *</div>
                                                             <div class="col-sm-3">
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="booking_type[]" value="E-Commerce">
                                    <label style="font-size: 13px;">
                                        E-Commerce
                                    </label>
                                </div>
                            </div>
                                                            <div class="col-sm-3">
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="booking_type[]" value="Domestic">
                                    <label style="font-size: 13px;">
                                        Domestic
                                    </label>
                                </div>
                            </div>
                                                            <div class="col-sm-3">
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="booking_type[]" value="International">
                                    <label style="font-size: 13px;">
                                        International
                                    </label>
                                </div>
                            </div>
                                                            <div class="col-sm-3">
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="booking_type[]" value="Franchise">
                                    <label style="font-size: 13px;">
                                        Franchise
                                    </label>
                                </div>
                            </div>
                                                    </div>

                    <div class="col-sm-12" style="padding:0;">

                        <p class="cd-signin-modal__fieldset new_style_signin_up col-sm-6">
                            <label class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace" for="signup-username">First Name</label>
                            <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" name="first_name" id="first_name" type="text" placeholder="First Name">
                            <span class="cd-signin-modal__error">Error message here!</span>
                        </p>

                        <p class="cd-signin-modal__fieldset new_style_signin_up col-sm-6">
                            <label class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace" for="signup-username">Last Name</label>
                            <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" type="text" placeholder="Last Name" name="last_name" id="last_name">
                            <span class="cd-signin-modal__error">Error message here!</span>
                        </p>

                        <p class="cd-signin-modal__fieldset new_style_signin_up col-sm-6">
                            <label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signup-email">E-mail</label>
                            <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" name="email" id="email" type="email" placeholder="E-mail">
                            <span class="cd-signin-modal__error">Error message here!</span>
                        </p>

                        <p class="cd-signin-modal__fieldset new_style_signin_up col-sm-6">
                            <label class="cd-signin-modal__label cd-signin-modal__label--mobile cd-signin-modal__label--image-replace" for="signup-mobile">Mobile</label>
                            <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" name="mobile" id="mobile" type="mobile" placeholder="Mobile">
                            <span class="cd-signin-modal__error">Error message here!</span>
                        </p>

                        <p class="cd-signin-modal__fieldset new_style_signin_up col-sm-6">
                            <label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signup-password">Password</label>
                            <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" name="password" id="password" type="password"  placeholder="Password">
                            <a href="#0" class="cd-signin-modal__hide-password js-hide-password" style="padding: 6px 22px 6px 8px;">Hide</a>
                            <span class="cd-signin-modal__error">Error message here!</span>
                        </p>

                        <p class="cd-signin-modal__fieldset new_style_signin_up col-sm-6">
                            <label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="Confirm-password">Confirm Password</label>
                            <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" name="password_confirmation" id="password_confirmation" type="password"  placeholder="Confirm Password">
                            <a href="#0" class="cd-signin-modal__hide-password js-hide-password" style="padding: 6px 22px 6px 8px;">Hide</a>
                            <span class="cd-signin-modal__error">Error message here!</span>
                        </p>

                        <div class="col-sm-12" style="margin-top: 5px;">
                            <div style="color:#b5b5b5">Country</div>
                            <select name="country" required="" class="form-control signupfield" style="height: 45px;" >
                                  <option values="">Select</option>
                                                                            <option value="1">Afghanistan</option>
                                                                            <option value="2">Aland Islands</option>
                                                                            <option value="3">Albania</option>
                                                                            <option value="4">Algeria</option>
                                                                            <option value="5">American Samoa</option>
                                                                            <option value="6">Andorra</option>
                                                                            <option value="7">Angola</option>
                                                                            <option value="8">Anguilla</option>
                                                                            <option value="9">Antarctica</option>
                                                                            <option value="10">Antigua & Barbuda</option>
                                                                            <option value="11">Argentina</option>
                                                                            <option value="12">Armenia</option>
                                                                            <option value="13">Aruba</option>
                                                                            <option value="14">Australia</option>
                                                                            <option value="15">Austria</option>
                                                                            <option value="16">Azerbaijan</option>
                                                                            <option value="17">Bahamas</option>
                                                                            <option value="18">Bahrain</option>
                                                                            <option value="19">Bangladesh</option>
                                                                            <option value="20">Barbados</option>
                                                                            <option value="21">Belarus</option>
                                                                            <option value="22">Belgium</option>
                                                                            <option value="23">Belize</option>
                                                                            <option value="24">Benin</option>
                                                                            <option value="25">Bermuda</option>
                                                                            <option value="26">Bhutan</option>
                                                                            <option value="27">Bolivia</option>
                                                                            <option value="28">Bosnia and Herzegovina</option>
                                                                            <option value="29">Botswana</option>
                                                                            <option value="30">Bouvet Island</option>
                                                                            <option value="31">Brazil</option>
                                                                            <option value="32">British Indian Ocean Territory</option>
                                                                            <option value="33">Brunei Darussalam</option>
                                                                            <option value="34">Bulgaria</option>
                                                                            <option value="35">Burkina Faso</option>
                                                                            <option value="36">Burundi</option>
                                                                            <option value="37">Cambodia</option>
                                                                            <option value="38">Cameroon</option>
                                                                            <option value="39">Canada</option>
                                                                            <option value="40">Cape Verde</option>
                                                                            <option value="41">Cayman Islands</option>
                                                                            <option value="42">Central African Republic</option>
                                                                            <option value="43">Chad</option>
                                                                            <option value="44">Chile</option>
                                                                            <option value="45">China</option>
                                                                            <option value="46">Christmas Island</option>
                                                                            <option value="47">Cocos (Keeling) Islands</option>
                                                                            <option value="48">Colombia</option>
                                                                            <option value="49">Comoros</option>
                                                                            <option value="50">Congo</option>
                                                                            <option value="51">Cook Islands</option>
                                                                            <option value="52">Costa Rica</option>
                                                                            <option value="53">Cote d'Ivoire</option>
                                                                            <option value="54">Croatia (Hrvatska)</option>
                                                                            <option value="55">Cuba</option>
                                                                            <option value="56">Cyprus</option>
                                                                            <option value="57">Czech Republic</option>
                                                                            <option value="58">Democratic Republic of the Congo</option>
                                                                            <option value="59">Denmark</option>
                                                                            <option value="60">Djibouti</option>
                                                                            <option value="61">Dominica</option>
                                                                            <option value="62">Dominican Republic</option>
                                                                            <option value="63">East Timor</option>
                                                                            <option value="64">Ecuador</option>
                                                                            <option value="65">Egypt</option>
                                                                            <option value="66">El Salvador</option>
                                                                            <option value="67">Equatorial Guinea</option>
                                                                            <option value="68">Eritrea</option>
                                                                            <option value="69">Estonia</option>
                                                                            <option value="70">Ethiopia</option>
                                                                            <option value="71">Falkland Islands (Malvinas)</option>
                                                                            <option value="72">Faroe Islands</option>
                                                                            <option value="73">Federated States of Micronesia</option>
                                                                            <option value="74">Fiji Islands</option>
                                                                            <option value="75">Finland</option>
                                                                            <option value="76">France</option>
                                                                            <option value="77">France, Metropolitan</option>
                                                                            <option value="78">French Guiana</option>
                                                                            <option value="79">French Polynesia</option>
                                                                            <option value="80">French Southern Territories</option>
                                                                            <option value="81">Gabon</option>
                                                                            <option value="82">Gambia</option>
                                                                            <option value="83">Georgia</option>
                                                                            <option value="84">Germany</option>
                                                                            <option value="85">Ghana</option>
                                                                            <option value="86">Gibraltar</option>
                                                                            <option value="87">Great Britain (UK)</option>
                                                                            <option value="88">Greece</option>
                                                                            <option value="89">Greenland</option>
                                                                            <option value="90">Grenada</option>
                                                                            <option value="91">Guadeloupe</option>
                                                                            <option value="92">Guam</option>
                                                                            <option value="93">Guatemala</option>
                                                                            <option value="94">Guinea</option>
                                                                            <option value="95">Guinea-Bissau</option>
                                                                            <option value="96">Guyana</option>
                                                                            <option value="97">Haiti</option>
                                                                            <option value="98">Heard Island and McDonald Islands</option>
                                                                            <option value="99">Honduras</option>
                                                                            <option value="100">Hong Kong</option>
                                                                            <option value="101">Hungary</option>
                                                                            <option value="102">Iceland</option>
                                                                            <option value="103">India</option>
                                                                            <option value="104">Indonesia</option>
                                                                            <option value="105">Iran</option>
                                                                            <option value="106">Iraq</option>
                                                                            <option value="107">Ireland</option>
                                                                            <option value="108">Israel</option>
                                                                            <option value="109">Italy</option>
                                                                            <option value="110">Jamaica</option>
                                                                            <option value="111">Japan</option>
                                                                            <option value="112">Jordan</option>
                                                                            <option value="113">Kazakhstan</option>
                                                                            <option value="114">Kenya</option>
                                                                            <option value="115">Kiribati</option>
                                                                            <option value="116">Korea (North)</option>
                                                                            <option value="117">Korea (South)</option>
                                                                            <option value="118">Kuwait</option>
                                                                            <option value="119">Kyrgyzstan</option>
                                                                            <option value="120">Laos</option>
                                                                            <option value="121">Latvia</option>
                                                                            <option value="122">Lebanon</option>
                                                                            <option value="123">Lesotho</option>
                                                                            <option value="124">Liberia</option>
                                                                            <option value="125">Libya</option>
                                                                            <option value="126">Liechtenstein</option>
                                                                            <option value="127">Lithuania</option>
                                                                            <option value="128">Luxembourg</option>
                                                                            <option value="129">Macao SAR</option>
                                                                            <option value="130">Macedonia</option>
                                                                            <option value="131">Madagascar</option>
                                                                            <option value="132">Malawi</option>
                                                                            <option value="133">Malaysia</option>
                                                                            <option value="134">Maldives</option>
                                                                            <option value="135">Mali</option>
                                                                            <option value="136">Malta</option>
                                                                            <option value="137">Marshall Islands</option>
                                                                            <option value="138">Martinique</option>
                                                                            <option value="139">Mauritania</option>
                                                                            <option value="140">Mauritius</option>
                                                                            <option value="141">Mayotte</option>
                                                                            <option value="142">Mexico</option>
                                                                            <option value="143">Moldova</option>
                                                                            <option value="144">Monaco</option>
                                                                            <option value="145">Mongolia</option>
                                                                            <option value="146">Montserrat</option>
                                                                            <option value="147">Morocco</option>
                                                                            <option value="148">Mozambique</option>
                                                                            <option value="149">Myanmar</option>
                                                                            <option value="150">Namibia</option>
                                                                            <option value="151">Nauru</option>
                                                                            <option value="152">Nepal</option>
                                                                            <option value="153">Netherlands</option>
                                                                            <option value="154">Netherlands Antilles</option>
                                                                            <option value="155">New Caledonia</option>
                                                                            <option value="156">New Zealand (Aotearoa)</option>
                                                                            <option value="157">Nicaragua</option>
                                                                            <option value="158">Niger</option>
                                                                            <option value="159">Nigeria</option>
                                                                            <option value="160">Niue</option>
                                                                            <option value="161">Norfolk Island</option>
                                                                            <option value="162">Northern Mariana Islands</option>
                                                                            <option value="163">Norway</option>
                                                                            <option value="164">Oman</option>
                                                                            <option value="165">Pakistan</option>
                                                                            <option value="166">Palau</option>
                                                                            <option value="167">Palestinian Territory</option>
                                                                            <option value="168">Panama</option>
                                                                            <option value="169">Papua New Guinea</option>
                                                                            <option value="170">Paraguay</option>
                                                                            <option value="171">Peru</option>
                                                                            <option value="172">Philippines</option>
                                                                            <option value="173">Pitcairn Islands</option>
                                                                            <option value="174">Poland</option>
                                                                            <option value="175">Portugal</option>
                                                                            <option value="176">Puerto Rico</option>
                                                                            <option value="177">Qatar</option>
                                                                            <option value="178">Reunion</option>
                                                                            <option value="179">Romania</option>
                                                                            <option value="180">Russia</option>
                                                                            <option value="181">Rwanda</option>
                                                                            <option value="182">S. Georgia and S. Sandwich Islands</option>
                                                                            <option value="183">Saint Helena</option>
                                                                            <option value="184">Saint Kitts and Nevis</option>
                                                                            <option value="185">Saint Lucia</option>
                                                                            <option value="186">Saint Pierre and Miquelon</option>
                                                                            <option value="187">Saint Vincent and the Grenadines</option>
                                                                            <option value="188">Samoa</option>
                                                                            <option value="189">San Marino</option>
                                                                            <option value="190">Sao Tome and Principe</option>
                                                                            <option value="191">Saudi Arabia</option>
                                                                            <option value="192">Senegal</option>
                                                                            <option value="193">Serbia and Montenegro</option>
                                                                            <option value="194">Seychelles</option>
                                                                            <option value="195">Sierra Leone</option>
                                                                            <option value="196">Singapore</option>
                                                                            <option value="197">Slovakia</option>
                                                                            <option value="198">Slovenia</option>
                                                                            <option value="199">Solomon Islands</option>
                                                                            <option value="200">Somalia</option>
                                                                            <option value="201">South Africa</option>
                                                                            <option value="202">Spain</option>
                                                                            <option value="203">Sri Lanka</option>
                                                                            <option value="204">Sudan</option>
                                                                            <option value="205">Suriname</option>
                                                                            <option value="206">Svalbard and Jan Mayen</option>
                                                                            <option value="207">Swaziland</option>
                                                                            <option value="208">Sweden</option>
                                                                            <option value="209">Switzerland</option>
                                                                            <option value="210">Syria</option>
                                                                            <option value="211">Taiwan</option>
                                                                            <option value="212">Tajikistan</option>
                                                                            <option value="213">Tanzania</option>
                                                                            <option value="214">Thailand</option>
                                                                            <option value="215">Timor-Leste</option>
                                                                            <option value="216">Togo</option>
                                                                            <option value="217">Tokelau</option>
                                                                            <option value="218">Tonga</option>
                                                                            <option value="219">Trinidad and Tobago</option>
                                                                            <option value="220">Tunisia</option>
                                                                            <option value="221">Turkey</option>
                                                                            <option value="222">Turkmenistan</option>
                                                                            <option value="223">Turks and Caicos Islands</option>
                                                                            <option value="224">Tuvalu</option>
                                                                            <option value="225">Uganda</option>
                                                                            <option value="226">Ukraine</option>
                                                                            <option value="227">United Arab Emirates</option>
                                                                            <option value="228">United Kingdom</option>
                                                                            <option value="229">United States</option>
                                                                            <option value="230">United States Minor Outlying Islands</option>
                                                                            <option value="231">Uruguay</option>
                                                                            <option value="232">USSR (former)</option>
                                                                            <option value="233">Uzbekistan</option>
                                                                            <option value="234">Vanuatu</option>
                                                                            <option value="235">Vatican City State (Holy See)</option>
                                                                            <option value="236">Venezuela</option>
                                                                            <option value="237">Viet Nam</option>
                                                                            <option value="238">Virgin Islands (British)</option>
                                                                            <option value="239">Virgin Islands (US)</option>
                                                                            <option value="240">Wallis and Futuna</option>
                                                                            <option value="241">Western Sahara</option>
                                                                            <option value="242">Yemen</option>
                                                                            <option value="243">Yugoslavia</option>
                                                                            <option value="244">Zaire (former)</option>
                                                                            <option value="245">Zambia</option>
                                                                            <option value="246">Zimbabwe</option>
                                                                    </select>
                        </div>

                        <div class="col-sm-12" style="margin-top: 5px;">
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="accept-terms">
                                <label for="accept-terms">
                                    I agree with this <a href="#/termsAndCondition" target="_blank">terms &amp; condition</a> of BAEI
                                </label>
                            </div>
                        </div>


                        <input type="hidden" name="user_type" value="Merchant">

                        <p class="cd-signin-modal__fieldset col-sm-12" style="margin-top: 0;">
                            <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" id="confirmsignup" name="confirmsignup" value="Create account">
                        </p>

                    </div>

                </fieldset>
            </form>
        </div> <!-- cd-signin-modal__block -->

        <div class="cd-signin-modal__block js-signin-modal-block" data-type="reset"> <!-- reset password form -->
            <p class="cd-signin-modal__message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

            <form class="cd-signin-modal__form">
                <p class="cd-signin-modal__fieldset">
                    <label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="reset-email">E-mail</label>
                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="reset-email" type="email" placeholder="E-mail">
                    <span class="cd-signin-modal__error">Error message here!</span>
                </p>

                <p class="cd-signin-modal__fieldset">
                    <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Reset password">
                </p>
            </form>

            <p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="login">Back to log-in</a></p>
        </div> <!-- cd-signin-modal__block -->
        <a href="#0" class="cd-signin-modal__close js-close">Close</a>
    </div> <!-- cd-signin-modal__container -->
</div> <!-- cd-signin-modal -->

<!-- login Registration section end -->




<!-- modal Section start -->

<!-- line modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="seminor-login-modal-body">
            <h3 class="modal-title" id="lineModalLabel">GET A QUOTE</h3>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        </div>
        <div class="modal-body">
            <!-- content goes here -->
             <form class="seminor-login-form">

                     <div class="field-container">
                          <input type="text" class="field form-control" required placeholder="Name"/>
                          <label class="floating-label">Name</label>
                        </div>

                        <div class="field-container">
                          <input type="text" class="field form-control" required placeholder="Mobile"/>
                          <label class="floating-label">Mobile</label>
                        </div>

                        <div class="field-container">
                          <input type="text" class="field form-control" required placeholder="Email Address"/>
                          <label class="floating-label">Email Address</label>
                        </div>

                        <div class="field-container">
                          <select class="field form-control" placeholder="Request For Quote">
                               <option>Basic</option>
                               <option>ERP</option>
                               <option>Offline Apps</option>
                               <option>Apps</option>
                               <option>Wordpress Versions</option>
                               <option>Wordpress Plugings</option>
                          </select>
                          <label class="floating-label">Request For Quote</label>
                        </div>

                         <div class="field-container">
                            <textarea type="text" class="field form-control"  rows="3" required  placeholder="Description"></textarea>
                          <label class="floating-label">Description</label>
                        </div>

                    <div class="btn-check-log">
                        <button type="submit" class="btn-check-login">Submit</button>
                    </div>
              </form>
        </div>
    </div>
</div>
<!-- modal Section end -->

<!-- Return to Top -->
<a href="#0" class="cd-top js-cd-top">Top</a>


<script>
    $(document).ready(function(){
      $("#btn_login").click(function(){
        $("#tab1").addClass('active');
        $("#tab1").addClass('login-shadow');
        $("#signin").addClass('active in');

        $("#tab2").removeClass('active in');
        $("#tab2").removeClass('login-shadow');
        $("#signup").removeClass('active');

        $("#myModal").modal();
      });



      $(".btn_signup").click(function(){
        $("#tab2").addClass('active');
        $("#tab2").addClass('login-shadow');
        $("#signup").addClass('active in');

        $("#tab1").removeClass('active');
        $("#tab1").removeClass('login-shadow');
        $("#signin").removeClass('active in');

        $("#myModal").modal();
      });


        $('form[name=signin]').submit(function(event){
            event.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            //var loginUurl = "http://wtexbd.com/login";

            $.ajax({
                   type: "POST",
                   url: url,
                   data: form.serialize(),
                   success: function(data){
                       if(data == '1') {
                            $('#myModal').modal('hide');
                            $("#loginEmail").val($("#signinEmail").val());
                            $("#loginPassword").val($("#signinPassword").val());
                            $("#login").submit();
                        }
                        else {
                            $("#msgSignin").html("<div class='alert alert-danger'>"+data+"</div>");

                        }
                   },
                    error: function (request, status, error) {
                        alert(request.responseText);
                    }
            });

        });

        $('form[name=signup]').submit(function(event){
            event.preventDefault();
            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                   type: "POST",
                   url: url,
                   data: form.serialize(),
                   success: function(data){
                       if(data == '1') {
                            $("#msgSignup").html("<div class='alert alert-success'>Your information has been stored successfully!<br>A verification email has been sent to your email.<br> Please open your email.</div>");
                            setTimeout(function(){
                              $('#myModal').modal('hide')
                            }, 4000);
                        }
                        else {
                            $("#msgSignup").html("<div class='alert alert-danger'>"+data+"</div>");

                        }
                   },
                    error: function (request, status, error) {
                        alert(request.responseText);
                    }
            });

        });



    });
    </script>


<!-- CDN js start -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script> -->
<!-- CDN js end -->

<!-- login Registration js start -->
<script src="{{ asset('landing/root/js/placeholders.min.js') }}"></script> <!-- polyfill for the HTML5 placeholder attribute -->
<script src="{{ asset('landing/root/js/loginmain.js') }}"></script> <!-- Resource JavaScript -->
<!-- login Registration js end -->

<!-- Primary JS File start -->
<script src="{{ asset('landing/root/js/jquery.min.js') }}"></script>
<script src="{{ asset('landing/root/js/bootstrap.min.js') }}"></script>

<!-- Bootstrap bootstrap-touch-slider Slider Main JS File start -->
<script src="{{ asset('landing/root/js/bootstrap-touch-slider.js') }}"></script>

<script type="text/javascript">
    $('#bootstrap-touch-slider').bsTouchSlider();
</script>
<!-- Bootstrap bootstrap-touch-slider Slider Main JS File end-->

<script src="{{ asset('landing/root/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('landing/root/js/scrolltotop.js') }}"></script>
<script src="{{ asset('landing/root/js/getmodel.js') }}"></script>
<script src="{{ asset('landing/root/js/plugins.js') }}"></script>
<script src="{{ asset('landing/root/js/main.js') }}"></script>
<!--Primary JS File end -->

<script>
    $(document).ready(function(){
      $("#btn_login").click(function(){
        $("#tab1").addClass('active');
        $("#tab1").addClass('login-shadow');
        $("#signin").addClass('active in');

        $("#tab2").removeClass('active in');
        $("#tab2").removeClass('login-shadow');
        $("#signup").removeClass('active');

        $("#myModal").modal();
      });



      $(".btn_signup").click(function(){
        $("#tab2").addClass('active');
        $("#tab2").addClass('login-shadow');
        $("#signup").addClass('active in');

        $("#tab1").removeClass('active');
        $("#tab1").removeClass('login-shadow');
        $("#signin").removeClass('active in');

        $("#myModal").modal();
      });


        $('form[name=signin]').submit(function(event){
            event.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            //var loginUurl = "http://wtexbd.com/login";

            $.ajax({
                   type: "POST",
                   url: url,
                   data: form.serialize(),
                   success: function(data){
                       if(data == '1') {
                            $('#myModal').modal('hide');
                            $("#loginEmail").val($("#signinEmail").val());
                            $("#loginPassword").val($("#signinPassword").val());
                            $("#login").submit();
                        }
                        else {
                            $("#msgSignin").html("<div class='alert alert-danger'>"+data+"</div>");

                        }
                   },
                    error: function (request, status, error) {
                        alert(request.responseText);
                    }
            });

        });

        $('form[name=signup]').submit(function(event){
            event.preventDefault();
            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                   type: "POST",
                   url: url,
                   data: form.serialize(),
                   success: function(data){
                       if(data == '1') {
                            $("#msgSignup").html("<div class='alert alert-success'>Your information has been stored successfully!<br>A verification email has been sent to your email.<br> Please open your email.</div>");
                            setTimeout(function(){
                              $('#myModal').modal('hide')
                            }, 4000);
                        }
                        else {
                            $("#msgSignup").html("<div class='alert alert-danger'>"+data+"</div>");

                        }
                   },
                    error: function (request, status, error) {
                        alert(request.responseText);
                    }
            });

        });



    });
    </script>

