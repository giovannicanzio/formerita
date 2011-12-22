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

                            <span class="textField fullWidth_with padding">
                                <label for="exampleForm1_fieldset1_item1" class="fullWidth ">label</label>
                                <input id="exampleForm1_fieldset1_item1" class="fullWidth" type="text" name="exampleForm1_fieldset1_item1_name" value=""  />
                            </span>

                            <span class="textField halfWidth_with padding">
                                <label for="exampleForm1_fieldset1_item2" class="fullWidth">label</label>
                                <input id="exampleForm1_fieldset1_item2" class="fullWidth" type="text" name="exampleForm1_fieldset1_item2_name" value="" />
                            </span>

                            <span class="textField halfWidth_with padding">
                                <label for="exampleForm1_fieldset1_item3" class="fullWidth">label</label>
                                <input id="exampleForm1_fieldset1_item3" class="fullWidth" type="text" name="exampleForm1_fieldset1_item3_name" value="" />
                            </span>

                            <span class="textField thirdWidth_with padding">
                                <label for="exampleForm1_fieldset1_item4" class="fullWidth">label</label>
                                <input id="exampleForm1_fieldset1_item4" class="fullWidth" type="text" name="exampleForm1_fieldset1_item4_name" value="" />
                            </span>

                            <span class="textField thirdWidth_with padding">
                                <label for="exampleForm1_fieldset1_item5" class="fullWidth">label</label>
                                <input id="exampleForm1_fieldset1_item5" class="fullWidth" type="text" name="exampleForm1_fieldset1_item5_name" value="" />
                            </span>

                            <span class="textField thirdWidth_with padding">
                                <label for="exampleForm1_fieldset1_item6" class="fullWidth">label</label>
                                <input id="exampleForm1_fieldset1_item6" class="fullWidth" type="text" name="exampleForm1_fieldset1_item6_name" value="" />
                            </span>

                            <span class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item7" class="fullWidth">email</label>
                                <input id="exampleForm1_fieldset1_item7" class="fullWidth" type="text" name="exampleForm1_fieldset1_item7_name" value="" />
                            </span>

                            <span class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item8" class="fullWidth">email</label>
                                <input id="exampleForm1_fieldset1_item8" class="fullWidth" type="text" name="exampleForm1_fieldset1_item8_name" value="" />
                            </span>

                            <span class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item9" class="fullWidth">email</label>
                                <input id="exampleForm1_fieldset1_item9" class="fullWidth" type="text" name="exampleForm1_fieldset1_item9_name" value="" />
                            </span>

                            <span class="email quarterWidth_with padding">
                                <label for="exampleForm1_fieldset1_item10" class="fullWidth">email</label>
                                <input id="exampleForm1_fieldset1_item10" class="fullWidth" type="text" name="exampleForm1_fieldset1_item10_name" value="" />
                            </span>


                        </fieldset>
                    </div>
                    <div id="tabs-2">
                        <fieldset class="fullWidth_with padding">
                            <legend class="fullWidth_with padding">legend</legend>

                            <span class="date localized quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item1" class="fullWidth">date 1</label>
                                <input id="exampleForm1_fieldset2_item1" class="fullWidth" type="text" name="exampleForm1_fieldset2_item1_name" value="" />
                            </span>

                            <span class="date localized quarterWidth_with padding newRow">
                                <label for="exampleForm1_fieldset2_item2" class="fullWidth">date 2</label>
                                <input id="exampleForm1_fieldset2_item2" class="fullWidth" type="text" name="exampleForm1_fieldset2_item2_name" value="" />
                            </span>

                            <span class="select thirdWidth_with padding newRow">
                                <label for="exampleForm1_fieldset2_item3" class="fullWidth">select</label>
                                <select id="exampleForm1_fieldset2_item3" class="fullWidth" name="exampleForm1_fieldset2_item3_name" multiple="multiple">
                                    <option value="1">option 1</option>
                                    <option value="2">option 2</option>
                                    <option value="3">option 3</option>
                                </select>
                            </span>

                            <span class="select thirdWidth_with padding">
                                <label for="exampleForm1_fieldset2_item4" class="fullWidth">select</label>
                                <select id="exampleForm1_fieldset2_item4" class="fullWidth" name="exampleForm1_fieldset2_item4_name" >
                                    <option value="1">option 1</option>
                                    <option value="2">option 2</option>
                                    <option value="3">option 3</option>
                                </select>
                            </span>

                            <span class="select thirdWidth_with padding">
                                <label for="exampleForm1_fieldset2_item5" class="fullWidth">select</label>
                                <select id="exampleForm1_fieldset2_item5" class="fullWidth" name="exampleForm1_fieldset2_item5_name" >
                                    <option value="1">option 1</option>
                                    <option value="2">option 2</option>
                                    <option value="3">option 3</option>
                                </select>
                            </span>

                            <span class="freeText fullWidth_with padding">
                                Which is your favourite radio?
                            </span>

                            <span class="radio quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item6" class="fullWidth">radio 1</label>
                                <input id="exampleForm1_fieldset2_item6" class="localized fullWidth" type="radio" name="exampleForm1_fieldset2_item6_name" value="1" />
                            </span>

                            <span class="radio quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item7" class="fullWidth">radio 2</label>
                                <input id="exampleForm1_fieldset2_item7" class="localized fullWidth" type="radio" name="exampleForm1_fieldset2_item6_name" value="2" />
                            </span>

                            <span class="radio quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item8" class="fullWidth">radio 3</label>
                                <input id="exampleForm1_fieldset2_item8" class="localized fullWidth" type="radio" name="exampleForm1_fieldset2_item6_name" value="3" />
                            </span>

                            <span class="radio quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item9" class="fullWidth">radio 4</label>
                                <input id="exampleForm1_fieldset2_item9" class="localized fullWidth" type="radio" name="exampleForm1_fieldset2_item6_name" value="4" />
                            </span>

                            <span class="freeText fullWidth_with padding">
                                Pick some of these.
                            </span>

                            <span class="checkBox quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item10" class="fullWidth">checkbox 1</label>
                                <input id="exampleForm1_fieldset2_item10" class="localized fullWidth" type="checkbox" name="exampleForm1_fieldset2_item10_name" value="a" />
                            </span>

                            <span class="checkBox quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item11" class="fullWidth">checkbox 2</label>
                                <input id="exampleForm1_fieldset2_item11" class="localized fullWidth" type="checkbox" name="exampleForm1_fieldset2_item11_name" value="b" />
                            </span>

                            <span class="checkBox quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item12" class="fullWidth">checkbox 3</label>
                                <input id="exampleForm1_fieldset2_item12" class="localized fullWidth" type="checkbox" name="exampleForm1_fieldset2_item12_name" value="c" />
                            </span>

                            <span class="checkBox quarterWidth_with padding">
                                <label for="exampleForm1_fieldset2_item13" class="fullWidth">checkbox 4</label>
                                <input id="exampleForm1_fieldset2_item13" class="localized fullWidth" type="checkbox" name="exampleForm1_fieldset2_item13_name" value="d" />
                            </span>

                            <span class="textArea halfWidth_with padding">
                                <label for="exampleForm1_fieldset2_item14" class="fullWidth">Notes 1</label>
                                <textarea id="exampleForm1_fieldset2_item14" class="fullWidth" name="exampleForm1_fieldset2_item14_name"></textarea>
                            </span>

                            <span class="textArea halfWidth_with padding">
                                <label for="exampleForm1_fieldset2_item15" class="fullWidth">Notes 2</label>
                                <textarea id="exampleForm1_fieldset2_item15" class="fullWidth" name="exampleForm1_fieldset2_item15_name"></textarea>
                            </span>

                            <span class="btnsArea fullWidth_with padding">
                                <input type="hidden" name="hiddenValue1" value="hidden1" />
                                <input type="hidden" name="hiddenValue2" value="hidden2" />
                                <input type="hidden" name="hiddenValue3" value="hidden3" />
                                <button type="submit" name="cancel" value="true" class="floatLeft">cancel</button>
                                <button type="submit" name="send" value="true" class="floatRight">Send</button>

                            </span>

                        </fieldset>
                    </div>
                </div>               
            </form>
            
        </div>
