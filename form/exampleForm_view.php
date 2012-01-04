<!-- 

Using  readonly="readonly" instead of disabled="disabled" makes tab browsing possible and avoids accessibility issues related to this.

Blanking name attribute makes it more secure, avoiding malitious readonly override (via debugger, for example); values won't have a name correspondance; 
anyway it's STRONGLY recommended to set up a security policy in the backend development.

-->

<script type="text/javascript">
$(function(){
                
                // Datepicker
                // It must be disabled in view form
//                $('.date input').datepicker({
//                    inline: true,
//                    dateFormat: 'dd/mm/yy'
//                });
                
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
                                <input id="exampleForm1_fieldset1_item1" class="fullWidth_with padding" type="text" readonly="readonly" name="" value=""  />
                            </p>

                            <p class="textField halfWidth_with padding">
                                <label for="exampleForm1_fieldset1_item2" class="fullWidth">label</label>
                                <input id="exampleForm1_fieldset1_item2" class="fullWidth_with padding" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="textField halfWidth_with padding">
                                <label for="exampleForm1_fieldset1_item3" class="fullWidth">label</label>
                                <input id="exampleForm1_fieldset1_item3" class="fullWidth_with padding" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="textField thirdWidth_with padding">
                                <label for="exampleForm1_fieldset1_item4" class="fullWidth">label</label>
                                <input id="exampleForm1_fieldset1_item4" class="fullWidth_with padding" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="textField thirdWidth_with padding">
                                <label for="exampleForm1_fieldset1_item5" class="fullWidth">label</label>
                                <input id="exampleForm1_fieldset1_item5" class="fullWidth_with padding" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="textField thirdWidth_with padding">
                                <label for="exampleForm1_fieldset1_item6" class="fullWidth">label</label>
                                <input id="exampleForm1_fieldset1_item6" class="fullWidth_with padding" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item7" class="fullWidth">email</label>
                                <input id="exampleForm1_fieldset1_item7" class="fullWidth_with padding" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item8" class="fullWidth">email</label>
                                <input id="exampleForm1_fieldset1_item8" class="fullWidth_with padding" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item9" class="fullWidth">email</label>
                                <input id="exampleForm1_fieldset1_item9" class="fullWidth_with padding" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item10" class="fullWidth">email</label>
                                <input id="exampleForm1_fieldset1_item10" class="fullWidth_with padding" type="text" readonly="readonly" name="" value="" />
                            </p>


                        </fieldset>
                    </div>
                    <div id="tabs-2">
                        <fieldset class="fullWidth_with padding">
                            <legend class="fullWidth_with padding">legend</legend>

                            <p class="date localized quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item1" class="fullWidth">date 1</label>
                                <input id="exampleForm1_fieldset2_item1" class="fullWidth_with padding" type="text" readonly="readonly" name="" value="" />
                            </p>

                            <p class="date localized quarterWidth_with padding newRow">
                                <label for="exampleForm1_fieldset2_item2" class="fullWidth">date 2</label>
                                <input id="exampleForm1_fieldset2_item2" class="fullWidth_with padding" type="text" readonly="readonly" name="" value="" />
                            </p>
                            <!-- 
                            SELECT ELEMENTS must be converted into a simple <label><input> pair in view mode                            
                            -->
                            <p class="select thirdWidth_with padding newRow">
                                <label for="exampleForm1_fieldset2_item3" class="fullWidth">select</label>
                                <input id="exampleForm1_fieldset2_item3" class="fullWidth_with padding" type="text" readonly="readonly" name="" value="option 1"/>
                            </p>

                            <p class="select thirdWidth_with padding">
                                <label for="exampleForm1_fieldset2_item4" class="fullWidth">select</label>
                                <input id="exampleForm1_fieldset2_item4" class="fullWidth_with padding" type="text" readonly="readonly" name="" value="option 2"/>
                            </p>

                            <p class="select thirdWidth_with padding">
                                <label for="exampleForm1_fieldset2_item5" class="fullWidth">select</label>
                                <input id="exampleForm1_fieldset2_item5" class="fullWidth_with padding" type="text" readonly="readonly" name="" value="option 3"/>
                            </p>
                            <!-- 
                            RADIO BUTTONS ELEMENTS must be converted into a simple <label><input> pair in view mode                            
                            -->
                            <p class="radio quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item6" class="fullWidth">Which is your favourite radio?</label>
                                <input id="exampleForm1_fieldset2_item6" class="localized fullWidth_with padding" type="text" readonly="readonly" name="" value="radio 1" />
                            </p>
                            <!-- 
                            CHECKBOXES NEED A DIFFERENT TRATMENT:
                            Due to the fact that they can show more than one value, they can't be converted in a single <label>/more than 1 <input>,
                            it would cause a wrong id correspondance (label referring to more than 1 id, and multiple identical ids).
                            The solution is creating a single pair, with the values merged in one.
                            -->
                            <p class="checkBox quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item10" class="fullWidth">Pick some of these.</label>
                                <input id="exampleForm1_fieldset2_item10" class="localized fullWidth_with padding" type="text" readonly="readonly" name="" value="checkox 1, checkbox 2" />
                            </p>

                            <p class="textArea halfWidth_with padding newRow">
                                <label for="exampleForm1_fieldset2_item14" class="fullWidth">Notes 1</label>
                                <textarea id="exampleForm1_fieldset2_item14" class="fullWidth_with padding" readonly="readonly" name=""></textarea>
                            </p>

                            <p class="textArea halfWidth_with padding">
                                <label for="exampleForm1_fieldset2_item15" class="fullWidth">Notes 2</label>
                                <textarea id="exampleForm1_fieldset2_item15" class="fullWidth_with padding" readonly="readonly" name=""></textarea>
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
