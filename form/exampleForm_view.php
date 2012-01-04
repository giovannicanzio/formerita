<?php
#
#    Formerita
#    (c) 2011 Giovanni Canzio <giovanni.canzio@gmail.com>
#    
#    This file is part of Formerita
#
#    This is free software: you can redistribute it and/or modify
#    it under the terms of the GNU General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    (at your option) any later version.
#
#    Formerita is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU General Public License for more details.
#
?>
<!-- 

Using  readonly="readonly" instead of disabled="disabled" makes tab browsing possible and avoids accessibility issues related to this.

Blanking name attribute makes it more secure, avoiding malitious readonly override (via debugger, for example); values won't have a name correspondance; 
anyway it's STRONGLY recommended to set up a security policy in the backend development.

-->

        <div id="formsWrapper" class="fullWidth">
        
            <form name="exampleForm1" method="POST" action="#" id="exampleForm1_id" class="formerita fullWidth">
                <div id="tabs">        
                    <ul>
                        <li><a href="#tabs-1">tab 1</a></li>
                        <li><a href="#tabs-2">tab 2</a></li>
                    </ul>
                    <div id="tabs-1">
                        <fieldset class="fullWidth_with padding">

                            <legend class="">legend</legend>

                            <p class="textField fullWidth_with padding">
                                <label for="exampleForm1_fieldset1_item1" class="">label</label>
                                <input id="exampleForm1_fieldset1_item1" class="" type="text" readonly="readonly" name="" value=""  />
                            </p>

                            <p class="textField halfWidth_with padding">
                                <label for="exampleForm1_fieldset1_item2" class="">label</label>
                                <input id="exampleForm1_fieldset1_item2" class="" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="textField halfWidth_with padding">
                                <label for="exampleForm1_fieldset1_item3" class="">label</label>
                                <input id="exampleForm1_fieldset1_item3" class="" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="textField thirdWidth_with padding">
                                <label for="exampleForm1_fieldset1_item4" class="">label</label>
                                <input id="exampleForm1_fieldset1_item4" class="" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="textField thirdWidth_with padding">
                                <label for="exampleForm1_fieldset1_item5" class="">label</label>
                                <input id="exampleForm1_fieldset1_item5" class="" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="textField thirdWidth_with padding">
                                <label for="exampleForm1_fieldset1_item6" class="">label</label>
                                <input id="exampleForm1_fieldset1_item6" class="" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item7" class="">email</label>
                                <input id="exampleForm1_fieldset1_item7" class="" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item8" class="">email</label>
                                <input id="exampleForm1_fieldset1_item8" class="" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item9" class="">email</label>
                                <input id="exampleForm1_fieldset1_item9" class="" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item10" class="">email</label>
                                <input id="exampleForm1_fieldset1_item10" class="" type="text" readonly="readonly" name="" value="" />
                            </p>


                        </fieldset>
                    </div>
                    <div id="tabs-2">
                        <fieldset class="fullWidth_with padding">
                            <legend class="">legend</legend>

                            <p class="date localized quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item1" class="">date 1</label>
                                <input id="exampleForm1_fieldset2_item1" class="" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="date localized quarterWidth_with padding newRow">
                                <label for="exampleForm1_fieldset2_item2" class="">date 2</label>
                                <input id="exampleForm1_fieldset2_item2" class=""type="text" readonly="readonly" name="" value="" />
                            </p>
                            <!-- 
                            SELECT ELEMENTS must be converted into a simple <label><input> pair in view mode                            
                            -->
                            <p class="select thirdWidth_with padding newRow">
                                <label for="exampleForm1_fieldset2_item3" class="">select</label>
                                <input id="exampleForm1_fieldset2_item3" class="" type="text" readonly="readonly" name="" value="option 1"/>
                            </p>

                            <p class="select thirdWidth_with padding">
                                <label for="exampleForm1_fieldset2_item4" class="">select</label>
                                <input id="exampleForm1_fieldset2_item4" class="" type="text" readonly="readonly" name="" value="option 2"/>
                            </p>

                            <p class="select thirdWidth_with padding">
                                <label for="exampleForm1_fieldset2_item5" class="">select</label>
                                <input id="exampleForm1_fieldset2_item5" class="" type="text" readonly="readonly" name="" value="option 3"/>
                            </p>
                            <!-- 
                            RADIO BUTTONS ELEMENTS must be converted into a simple <label><input> pair in view mode                            
                            -->
                            <p class="radio quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item6" class="">Which is your favourite radio?</label>
                                <input id="exampleForm1_fieldset2_item6" class="" type="text" readonly="readonly" name="" value="radio 1" />
                            </p>
                            <!-- 
                            CHECKBOXES NEED A DIFFERENT TRATMENT:
                            Due to the fact that they can show more than one value, they can't be converted in a single <label>/more than 1 <input>,
                            it would cause a wrong id correspondance (label referring to more than 1 id, and multiple identical ids).
                            The solution is creating a single pair, with the values merged in one.
                            -->
                            <p class="checkBox quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item10" class="">Pick some of these.</label>
                                <input id="exampleForm1_fieldset2_item10" class="" type="text" readonly="readonly" name="" value="checkox 1, checkbox 2" />
                            </p>

                            <p class="textArea halfWidth_with padding newRow">
                                <label for="exampleForm1_fieldset2_item14" class="">Notes 1</label>
                                <textarea id="exampleForm1_fieldset2_item14" class="" readonly="readonly" name=""></textarea>
                            </p>

                            <p class="textArea halfWidth_with padding">
                                <label for="exampleForm1_fieldset2_item15" class="">Notes 2</label>
                                <textarea id="exampleForm1_fieldset2_item15" class="" readonly="readonly" name=""></textarea>
                            </p>



                        </fieldset>
                    </div>
                    <div class="btnsArea fullWidth_with padding">
                        <input type="hidden" readonly="readonly" name="" value="hidden1" />
                        <input type="hidden" readonly="readonly" name="" value="hidden2" />
                        <input type="hidden" readonly="readonly" name="" value="hidden3" />
                        <button type="submit" name="action" value="cancel" class="floatLeft">Cancel</button>
                        <button type="submit" name="action" value="edit" class="floatRight">Edit</button>
                    </div>
                </div>               
            </form>
            
        </div>
