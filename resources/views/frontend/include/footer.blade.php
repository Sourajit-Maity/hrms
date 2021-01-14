<!-- Desktop-footer-start -->
<section class="desktopFooter">
    <p class="telephone">{{$footer->phone_no}}</p>
    <p class="email"><a href="mailto:{{$footer->email}}">{{$footer->email}}</a></p>
    <div class="desktopFooterInner">
        <p class="copyright">&copy; {{$footer->copyright}}</p>
        <p class="privacy"><a href="{{url('terms-conditions')}}">{{$footer->terms_conditions}}</a></p>
        <ul class="desktopIcons social">
            <li>
                <a href="{{$footer->facebook_path}}" target="_blank">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 49.7 49.7" style="enable-background:new 0 0 49.7 49.7;" xml:space="preserve">
								<g>
                                    <g>
                                        <path d="M24.8,0C11.1,0,0,11.1,0,24.8c0,13.7,11.1,24.8,24.8,24.8c13.7,0,24.8-11.1,24.8-24.8C49.7,11.1,38.5,0,24.8,0z M31,25.7
											h-4c0,6.5,0,14.4,0,14.4h-6c0,0,0-7.9,0-14.4h-2.8v-5.1H21v-3.3c0-2.4,1.1-6,6-6l4.4,0v4.9c0,0-2.7,0-3.2,0S27,16.5,27,17.6v3h4.6
											L31,25.7z"/>
                                    </g>
                                </g>
							</svg>
                </a>
            </li>
            <li>
                <a href="{{$footer->instagram_path}}" target="_blank">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 49.7 49.7" style="enable-background:new 0 0 49.7 49.7;" xml:space="preserve">
								<g>
                                    <g>
                                        <g>
                                            <path d="M24.8,29.8c2.7,0,5-2.2,5-5c0-1.1-0.4-2.1-0.9-2.9c-0.9-1.3-2.4-2.1-4-2.1c-1.7,0-3.1,0.8-4,2.1
												c-0.6,0.8-0.9,1.8-0.9,2.9C19.9,27.6,22.1,29.8,24.8,29.8z"/>
                                            <polygon points="35.7,18.7 35.7,14.6 35.7,14 35.1,14 30.9,14 30.9,18.8 			"/>
                                            <path d="M24.8,0C11.1,0,0,11.1,0,24.8c0,13.7,11.1,24.8,24.8,24.8c13.7,0,24.8-11.1,24.8-24.8C49.7,11.1,38.5,0,24.8,0z
												 M38.9,21.9v11.6c0,3-2.4,5.5-5.5,5.5H16.2c-3,0-5.5-2.4-5.5-5.5V21.9v-5.8c0-3,2.4-5.5,5.5-5.5h17.3c3,0,5.5,2.4,5.5,5.5V21.9z"
                                            />
                                            <path d="M32.5,24.8c0,4.3-3.5,7.7-7.7,7.7s-7.7-3.5-7.7-7.7c0-1,0.2-2,0.6-2.9h-4.2v11.6c0,1.5,1.2,2.7,2.7,2.7h17.3
												c1.5,0,2.7-1.2,2.7-2.7V21.9H32C32.3,22.8,32.5,23.8,32.5,24.8z"/>
                                        </g>
                                    </g>
                                </g>
							</svg>
                </a>
            </li>
        </ul>
        <div class="failteIreland">
            <a href="{{$footer->failte_ireland_path}}" target="_blank">
                <img src="{{url('images')}}/{{$footer->failte_ireland_logo}}" />
            </a>
        </div>
    </div>
</section>
<!-- Desktop-footer-end -->