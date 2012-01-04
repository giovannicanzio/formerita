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
<script type="text/javascript">
$(function(){

                // Datepicker
                $('.date input').datepicker({
                    inline: true,
                    dateFormat: 'dd/mm/yy'
                });
                
                // tabs
                $('#tabs').tabs();


            });
</script>
        <div id="formsWrapper" class="fullWidth">
        
            <form name="exampleForm1" method="POST" action="#" id="exampleForm1_id" class="fullWidth">
                <div id="tabs">        
                    <ul>
                        <li><a href="#tabs-1">tab 1</a></li>
                        <li><a href="#tabs-2">tab 2</a></li>
                    </ul>
                    <div id="tabs-1">
                        <fieldset class="fullWidth_with padding">

                            <legend class="fullWidth_with padding">legend</legend>

                            <p class="textField fullWidth_with padding">
                                <label for="exampleForm1_fieldset1_item1" class="fullWidth ">label</label>
                                <input id="exampleForm1_fieldset1_item1" class="mandatory fullWidth_with padding" type="text" name="exampleForm1_fieldset1_item1_name" value=""  />
                            </p>

                            <p class="textField halfWidth_with padding">
                                <label for="exampleForm1_fieldset1_item2" class="fullWidth">label</label>
                                <input id="exampleForm1_fieldset1_item2" class="fullWidth_with padding" type="text" name="exampleForm1_fieldset1_item2_name" value="" />
                            </p>

                            <p class="textField halfWidth_with padding">
                                <label for="exampleForm1_fieldset1_item3" class="fullWidth">label</label>
                                <input id="exampleForm1_fieldset1_item3" class="fullWidth_with padding" type="text" name="exampleForm1_fieldset1_item3_name" value="" />
                            </p>

                            <p class="textField thirdWidth_with padding">
                                <label for="exampleForm1_fieldset1_item4" class="fullWidth">label</label>
                                <input id="exampleForm1_fieldset1_item4" class="fullWidth_with padding" type="text" name="exampleForm1_fieldset1_item4_name" value="" />
                            </p>

                            <p class="textField thirdWidth_with padding">
                                <label for="exampleForm1_fieldset1_item5" class="fullWidth">label</label>
                                <input id="exampleForm1_fieldset1_item5" class="fullWidth_with padding" type="text" name="exampleForm1_fieldset1_item5_name" value="" />
                            </p>

                            <p class="textField thirdWidth_with padding">
                                <label for="exampleForm1_fieldset1_item6" class="fullWidth">label</label>
                                <input id="exampleForm1_fieldset1_item6" class="fullWidth_with padding" type="text" name="exampleForm1_fieldset1_item6_name" value="" />
                            </p>

                            <p class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item7" class="fullWidth">email</label>
                                <input id="exampleForm1_fieldset1_item7" class="fullWidth_with padding" type="text" name="exampleForm1_fieldset1_item7_name" value="" />
                            </p>

                            <p class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item8" class="fullWidth">email</label>
                                <input id="exampleForm1_fieldset1_item8" class="fullWidth_with padding" type="text" name="exampleForm1_fieldset1_item8_name" value="" />
                            </p>

                            <p class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item9" class="fullWidth">email</label>
                                <input id="exampleForm1_fieldset1_item9" class="fullWidth_with padding" type="text" name="exampleForm1_fieldset1_item9_name" value="" />
                            </p>

                            <p class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item10" class="fullWidth">email</label>
                                <input id="exampleForm1_fieldset1_item10" class="fullWidth_with padding" type="text" name="exampleForm1_fieldset1_item10_name" value="" />
                            </p>


                        </fieldset>
                    </div>
                    <div id="tabs-2">
                        <fieldset class="fullWidth_with padding">
                            <legend class="fullWidth_with padding">legend</legend>

                            <p class="date localized quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item1" class="fullWidth">date 1</label>
                                <input id="exampleForm1_fieldset2_item1" class="fullWidth_with padding" type="text" name="exampleForm1_fieldset2_item1_name" value="" />
                            </p>

                            <p class="date localized quarterWidth_with padding newRow">
                                <label for="exampleForm1_fieldset2_item2" class="fullWidth">date 2</label>
                                <input id="exampleForm1_fieldset2_item2" class="fullWidth_with padding" type="text" name="exampleForm1_fieldset2_item2_name" value="" />
                            </p>

                            <p class="select thirdWidth_with padding newRow">
                                <label for="exampleForm1_fieldset2_item3" class="fullWidth">select</label>
                                <select id="exampleForm1_fieldset2_item3" class="fullWidth_with padding" name="exampleForm1_fieldset2_item3_name" multiple="multiple">
                                    <option value="1">option 1</option>
                                    <option value="2">option 2</option>
                                    <option value="3">option 3</option>
                                </select>
                            </p>

                            <p class="select thirdWidth_with padding">
                                <label for="exampleForm1_fieldset2_item4" class="fullWidth">select</label>
                                <select id="exampleForm1_fieldset2_item4" class="fullWidth_with padding" name="exampleForm1_fieldset2_item4_name" >
                                    <option value="1">option 1</option>
                                    <option value="2">option 2</option>
                                    <option value="3">option 3</option>
                                </select>
                            </p>

                            <p class="select thirdWidth_with padding">
                                <label for="exampleForm1_fieldset2_item5" class="fullWidth">select</label>
                                <select id="exampleForm1_fieldset2_item5" class="fullWidth_with padding" name="exampleForm1_fieldset2_item5_name" >
                                    <option value="1">option 1</option>
                                    <option value="2">option 2</option>
                                    <option value="3">option 3</option>
                                </select>
                            </p>

                            <p class="freeText fullWidth_with padding">
                                Which is your favourite radio?
                            </p>

                            <p class="radio quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item6" class="fullWidth">radio 1</label>
                                <input id="exampleForm1_fieldset2_item6" class="localized fullWidth_with padding" type="radio" name="exampleForm1_fieldset2_item6_name" value="1" />
                            </p>

                            <p class="radio quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item7" class="fullWidth">radio 2</label>
                                <input id="exampleForm1_fieldset2_item7" class="localized fullWidth_with padding" type="radio" name="exampleForm1_fieldset2_item6_name" value="2" />
                            </p>

                            <p class="radio quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item8" class="fullWidth">radio 3</label>
                                <input id="exampleForm1_fieldset2_item8" class="localized fullWidth_with padding" type="radio" name="exampleForm1_fieldset2_item6_name" value="3" />
                            </p>

                            <p class="radio quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item9" class="fullWidth">radio 4</label>
                                <input id="exampleForm1_fieldset2_item9" class="localized fullWidth_with padding" type="radio" name="exampleForm1_fieldset2_item6_name" value="4" />
                            </p>

                            <p class="freeText fullWidth_with padding">
                                Pick some of these.
                            </p>

                            <p class="checkBox quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item10" class="fullWidth">checkbox 1</label>
                                <input id="exampleForm1_fieldset2_item10" class="localized fullWidth_with padding" type="checkbox" name="exampleForm1_fieldset2_item10_name" value="a" />
                            </p>

                            <p class="checkBox quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item11" class="fullWidth">checkbox 2</label>
                                <input id="exampleForm1_fieldset2_item11" class="localized fullWidth_with padding" type="checkbox" name="exampleForm1_fieldset2_item11_name" value="b" />
                            </p>

                            <p class="checkBox quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item12" class="fullWidth">checkbox 3</label>
                                <input id="exampleForm1_fieldset2_item12" class="localized fullWidth_with padding" type="checkbox" name="exampleForm1_fieldset2_item12_name" value="c" />
                            </p>

                            <p class="checkBox quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item13" class="fullWidth">checkbox 4</label>
                                <input id="exampleForm1_fieldset2_item13" class="localized fullWidth_with padding" type="checkbox" name="exampleForm1_fieldset2_item13_name" value="d" />
                            </p>

                            <p class="textArea halfWidth_with padding">
                                <label for="exampleForm1_fieldset2_item14" class="fullWidth">Notes 1</label>
                                <textarea id="exampleForm1_fieldset2_item14" class="fullWidth_with padding" name="exampleForm1_fieldset2_item14_name"></textarea>
                            </p>

                            <p class="textArea halfWidth_with padding">
                                <label for="exampleForm1_fieldset2_item15" class="fullWidth">Notes 2</label>
                                <textarea id="exampleForm1_fieldset2_item15" class="fullWidth_with padding" name="exampleForm1_fieldset2_item15_name"></textarea>
                            </p>



                        </fieldset>
                    </div>
                    <p class="btnsArea fullWidth_with padding">
                        <input type="hidden" name="hiddenValue1" value="hidden1" />
                        <input type="hidden" name="hiddenValue2" value="hidden2" />
                        <input type="hidden" name="hiddenValue3" value="hidden3" />
                        <button type="submit" name="action" value="cancel" class="floatLeft">Cancel</button>
                        <button type="submit" name="action" value="save" class="floatRight">Save</button>
                    </p>
                </div>               
            </form>
            
        </div>
