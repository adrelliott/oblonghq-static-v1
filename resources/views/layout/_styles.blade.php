@include('partials.common.head')

<div class="container mx-auto py-6 md:py-12">
    <main class="px-6 md:px-0 mx-auto">
        <!-- you can put some webfonts here if you want -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:100,300,400,600,700' rel='stylesheet'
            type='text/css'>

            <style>
                
                
                
                
                /* Style Guide
                // --------------------- */
                html {background: #f7f7f7;}
                #templateTitle {width: 50%; position: relative; padding-top: 10px; margin: 0 auto; text-align: center;}
                #projectTitle {font-size: 34px; font-weight: 700; color: #4d4d4d;}
                #projectDesc {font-family: sans-serif; font-size: 12px; font-weight: 300; color: #4d4d4d;}
                .seperator {width: 50%; position: relative; padding-top: 20px; margin: 0 auto; margin-bottom: 50px; border-bottom: 1px solid #EDEDED;}
                .sectionHeading {width: 50%; margin: 0 auto; text-align: left;}
                .sectionTitle {font-family: sans-serif; font-size: 15px; font-weight: 300; color: #4d4d4d;}
                .sectionSeperator {position: relative; padding-top: 5px; margin: 0 auto; border-bottom: 1px solid #CCCCCC;}
                ul#colors {width: 50%; position: relative; padding-top: 30px; margin: 0 auto; margin-bottom: 75px; text-align: center; list-style: none;}
                li.colorCircle { width: 100px; height: 100px; border-radius: 50%; display: inline-block; margin-right: 20px;}
                .colorHex { position: relative; color: #838080; top: 120px; right: 6px;}
                #typography {width: 50%; position: relative; padding-top: 10px; margin: 0 auto; margin-bottom: 75px;}
                #inlineElements {width: 50%; position: relative; padding-top: 10px; margin: 0 auto; margin-bottom: 75px;}
                #formElements {width: 50%; position: relative; padding-top: 10px; margin: 0 auto; margin-bottom: 75px;}  
                </style>

        <!-- change these titles to match your project -->
        <div id="templateTitle">
            <span id="projectTitle">Style Guide</span> <br />
            <span id="projectDesc">Defining all the styles for the website</span>
            <div class="seperator"></div>
        </div>

        <!-- change the HEX values here -->
        <div class="sectionHeading">
            <span class="sectionTitle">COLORS</span>
            <div class="sectionSeperator"></div>
        </div>

        <ul id="colors">
            <h2 class="text-2xl mb-8">Blues</h2>
            <li class="colorCircle bg-oblong-blue-light">
                <div class="colorHex">#4b6891</div>
            </li>
            <li class="colorCircle bg-oblong-blue">
                <div class="colorHex">#375785</div>
            </li>
            <li class="colorCircle bg-oblong-blue-dark">
                <div class="colorHex">#324e78</div>
            </li>
            
        </ul>
        <ul class="w-1/2 mx-auto pb-12 text-center">
            <li class="mb-2"><strong class="font-bold">#4b6891:</strong> bg-oblong-blue-light</li>
            <li class="mb-2"><strong class="font-bold">#375785:</strong> bg-oblong-blue</li>
            <li class="mb-2"><strong class="font-bold">#324e78:</strong> bg-oblong-blue-dark</li>
        </ul>

        <ul id="colors">
            <h2 class="text-2xl mb-8">Greens</h2>
            <li class="colorCircle bg-oblong-green-light">
                <div class="colorHex">#48989c</div>
            </li>
            <li class="colorCircle bg-oblong-green">
                <div class="colorHex">#348C91</div>
            </li>
            <li class="colorCircle bg-oblong-green-dark">
                <div class="colorHex">#2f7e83</div>
            </li>
            
        </ul>
        <ul class="w-1/2 mx-auto pb-12 text-center">
            <li class="mb-2"><strong class="font-bold">#48989c:</strong> bg-oblong-green-light</li>
            <li class="mb-2"><strong class="font-bold">#348C91:</strong> bg-oblong-green</li>
            <li class="mb-2"><strong class="font-bold">#2f7e83:</strong> bg-oblong-green-dark</li>
        </ul>

        <ul id="colors">
            <h2 class="text-2xl mb-8">Greys</h2>
            <li class="colorCircle bg-oblong-gray-light">
                <div class="colorHex">#94a3b8</div>
            </li>
            <li class="colorCircle bg-oblong-gray">
                <div class="colorHex">#64748b</div>
            </li>
            <li class="colorCircle bg-oblong-gray-dark">
                <div class="colorHex">#475569</div>
            </li>
            
        </ul>
        <ul class="w-1/2 mx-auto pb-12 text-center">
            <li class="mb-2"><strong class="font-bold">#94a3b8:</strong> bg-oblong-gray-light</li>
            <li class="mb-2"><strong class="font-bold">#64748b:</strong> bg-oblong-gray</li>
            <li class="mb-2"><strong class="font-bold">#475569:</strong> bg-oblong-gray-dark</li>
        </ul>

        <!-- customize these heading descriptions if necessary -->
        <div class="sectionHeading">
            <span class="sectionTitle">TYPOGRAPHY</span>
            <div class="sectionSeperator"></div>
        </div>

        <div id="typography">
            <h1>H1. This is a Page Title.</h1>
            <h2>H2. This is a header.</h2>
            <h3>H3. This is a medium header.</h3>
            <h4>H4. This is a sidebar header.</h4>
            <p>A general paragraph will look like this. Font-family is Xm size is Y. The quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dog</p>
            <p class="font-body">Body - The quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dog</p>
            <p class="font-sans">Sans - The quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dog</p>
            <p class="font-serif">Serif - The quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dog</p>
            <p class="font-mono">Mono - The quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dog</p>
            <p class="font-display">Display - The quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dogThe quick brown fox jumps over the lazy dog</p>
        </div>

        <!-- use these as needed -->
        <div class="sectionHeading">
            <span class="sectionTitle">INLINE ELEMENTS</span>
            <div class="sectionSeperator"></div>
        </div>

        <div id="inlineElements">
            <p><a href="#" class="text-oblong-green border-b-2 border-oblong-green hover:text-slate-50 hover:bg-oblong-green hover:no-underline">This is a text link - hover to see effect - just apply the class 'link'</a></p>
            <p><a href="#" class="text-gray-400 border-b-2 border-gray-400 hover:text-slate-50 hover:bg-oblong-green hover:no-underline hover:border-oblong-green">This is a visited link - hover to see effect - just apply the class 'link'</a></p>
            <p><strong>Strong is used to indicate strong importance</strong></p>

            <p>The <b>b element</b> is stylistically different text from normal text, without any special importance</p>

            <p>The <em>i element</em> is text that is set off from the normal text</p>

            <p>The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation
            </p>

            <p><small>This small text is small for for fine print, etc.</small></p>

            <p>
                <span class="text-slate-500 text-lg  italic font-extralight sm:text-xl lg:text-xl tracking-loose pl-6 border-l-4 border-oblong-green-dark" cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation</span>
            </p>

            <p>
                <span class="text-slate-500 text-lg  italic font-extralight sm:text-xl lg:text-xl tracking-loose pl-6 border-l-4 border-oblong-green-dark" cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a long inline quotation This text is a long inline quotation This text is a long inline quotation This text is a long inline quotation This text is a long inline quotation This text is a long inline quotation This text is a long inline quotation This text is a long inline quotation This text is a long inline quotation This text is a long inline quotation </span>
            </p>
            <p><cite>This is a citation</cite>
        </div>

        <!-- use these as needed -->
        <div class="sectionHeading">
            <span class="sectionTitle">FORM ELEMENTS</span>
            <div class="sectionSeperator"></div>
        </div>

        <div id="formElements">
            <form>
                <div class="form-item">
                    <input type="text" placeholder="text field" name="" id="">
                </div>
                <div class="form-item">
                    <input type="text" required="required" placeholder="required text field" name="" id="">
                </div>
                <div class="form-item">
                    <textarea name="" id="" cols="40" rows="5"></textarea>
                </div>

                <div class="form-item">
                    <select name="" id="">
                        <option value="default">-- Select --</option>
                        <option value="">Only</option>
                        <option value="">One</option>
                        <option value="">Item</option>
                    </select>
                </div>

                <div class="form-item">
                    <select multiple name="" id="">
                        <option value="">Select</option>
                        <option value="">Multiple</option>
                        <option value="">Items</option>
                    </select>
                </div>

                <div class="form-item form-type-radios">
                    <div class="form-item"><input type="radio" name="example-radios" id=""><label for=""
                            class="option">Radio One</label></div>
                    <div class="form-item"><input type="radio" name="example-radios" id=""><label for=""
                            class="option">Radio Two</label></div>
                    <div class="form-item"><input type="radio" name="example-radios" id=""><label for=""
                            class="option">Radio Three</label></div>
                    <div class="form-item"><input type="radio" name="example-radios" id=""><label for=""
                            class="option">Radio Four</label></div>
                </div>

                <div class="form-item form-type-checkboxes">
                    <div class="form-item"><input type="checkbox" name="" id=""><label for="">checkbox 1</label>
                    </div>
                    <div class="form-item"><input type="checkbox" name="" id=""><label for="">checkbox 2</label>
                    </div>
                    <div class="form-item"><input type="checkbox" name="" id=""><label for="">checkbox 3</label>
                    </div>
                    <div class="form-item"><input type="checkbox" name="" id=""><label for="">checkbox 4</label>
                    </div>
                </div>

                <div class="form-actions">
                    <input type="submit" class="form-submit">
                    <input type="button" value="Cancel" class="form-submit">
                </div>
            </form>
        </div>

    </main>
</div>

@include('partials.common.footer')
