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
        
            <form name="exampleForm1" method="POST" action="#" id="exampleForm1_id" class="fullWidth_with padding">
                <div id="tabs">        
                    <ul>
                        <li><a href="#tabs-1">tab 1</a></li>
                        <li><a href="#tabs-2">tab 2</a></li>
                    </ul>
                    <div id="tabs-1">
                        <fieldset class="fullWidth_with padding">

                            <legend class="fullWidth_with padding">legend</legend>

                            <div class="textField fullWidth_with padding">
                                <p class="fullWidth fakeLabel">label</p>
                                <p id="exampleForm1_fieldset1_item1" class="fullWidth fakeInput" >testValue</p>
                            </div>

                            <div class="textField halfWidth_with padding">
                                <p class="fullWidth fakeLabel">label</p>
                                <p id="exampleForm1_fieldset1_item2" class="fullWidth fakeInput" >testValue</p>
                            </div>

                            <div class="textField halfWidth_with padding">
                                <p class="fullWidth fakeLabel">label</p>
                                <p id="exampleForm1_fieldset1_item3" class="fullWidth fakeInput" >testValue</p>
                            </div>

                            <div class="textField thirdWidth_with padding">
                                <p class="fullWidth fakeLabel">label</p>
                                <p id="exampleForm1_fieldset1_item4" class="fullWidth fakeInput" >testValue</p>
                            </div>

                            <div class="textField thirdWidth_with padding">
                                <p class="fullWidth fakeLabel">label</p>
                                <p id="exampleForm1_fieldset1_item5" class="fullWidth fakeInput" >testValue</p>
                            </div>

                            <div class="textField thirdWidth_with padding">
                                <p class="fullWidth fakeLabel">label</p>
                                <p id="exampleForm1_fieldset1_item6" class="fullWidth fakeInput" >testValue</p>
                            </div>

                            <div class="email quarterWidth_with padding">
                                <p class="fullWidth fakeLabel">email</p>
                                <p id="exampleForm1_fieldset1_item7" class="fullWidth fakeInput" >testValue</p>
                            </div>

                            <div class="email quarterWidth_with padding">
                                <p class="fullWidth fakeLabel">email</p>
                                <p id="exampleForm1_fieldset1_item8" class="fullWidth fakeInput" >testValue</p>
                            </div>

                            <div class="email quarterWidth_with padding">
                                <p class="fullWidth fakeLabel">email</p>
                                <p id="exampleForm1_fieldset1_item9" class="fullWidth fakeInput" >testValue</p>
                            </div>

                            <div class="email quarterWidth_with padding">
                                <p class="fullWidth fakeLabel">email</p>
                                <p id="exampleForm1_fieldset1_item10" class="fullWidth fakeInput" >testValue</p>
                            </div>


                        </fieldset>
                    </div>
                    <div id="tabs-2">
                        <fieldset class="fullWidth_with padding">
                            <legend class="fullWidth_with padding">legend</legend>

                            <div class="date localized quarterWidth_with padding">
                                <p class="fullWidth fakeLabel">date 1</p>
                                <p id="exampleForm1_fieldset2_item1" class="fullWidth fakeInput" >gg/mm/aaaa</p>
                            </div>

                            <div class="date localized quarterWidth_with padding newRow">
                                <p class="fullWidth fakeLabel">date 2</p>
                                <p id="exampleForm1_fieldset2_item2" class="fullWidth fakeInput" >gg/mm/aaaa</p>
                            </div>
                            
                            <div class="select thirdWidth_with padding newRow">
                                <p class="fullWidth fakeLabel">select</p>
                                <p id="exampleForm1_fieldset2_item3_1" class="fullWidth fakeInput" >option1</p>
                                <p id="exampleForm1_fieldset2_item3_2" class="fullWidth fakeInput" >option1</p>
                            </div>

                            <div class="select thirdWidth_with padding">
                                <p class="fullWidth fakeLabel">select</p>
                                <p id="exampleForm1_fieldset2_item4" class="fullWidth fakeInput" >option 1</p>
                            </div>

                            <div class="select thirdWidth_with padding">
                                <p class="fullWidth fakeLabel">select</p>
                                <p id="exampleForm1_fieldset2_item5" class="fullWidth fakeInput" >option 1</p>
                            </div>

                            <div class="freeText fullWidth_with padding">
                                Which is your favourite radio?
                            </div>

                            <div class="radio quarterWidth_with padding">
                                <p id="exampleForm1_fieldset2_item6" class="fullWidth fakeInput" >radio 1</p>
                            </div>

                            <div class="freeText fullWidth_with padding">
                                Pick some of these.
                            </div>

                            <div class="checkBox quarterWidth_with padding">
                                <p id="exampleForm1_fieldset2_item7_1" class="fullWidth fakeInput" >checkbox 1</p>
                                <p id="exampleForm1_fieldset2_item7_2" class="fullWidth fakeInput" >checkbox 2</p>
                            </div>

                            <div class="textArea halfWidth_with padding newRow">
                                <p class="fullWidth fakeLabel">Notes 1</p>
                                <p id="exampleForm1_fieldset2_item8" class="fullWidth fakeInput" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget libero ut nibh semper venenatis id vitae est. Vivamus varius egestas nisi. Donec in purus elit. Nulla vitae sodales leo. Etiam vestibulum, ipsum ultrices bibendum molestie, lorem mauris rhoncus dolor, vitae fringilla sapien nunc vitae quam. Cras condimentum condimentum aliquam. Integer id odio lectus. Fusce ut magna velit, sed interdum nunc. Nunc vel tellus lacus.</p>
                            </div>

                            <div class="textArea halfWidth_with padding">
                                <p class="fullWidth fakeLabel">Notes 2</p>
                                <p id="exampleForm1_fieldset2_item9" class="fullWidth fakeInput" >Etiam ullamcorper adipiscing diam, dignissim faucibus sem bibendum vitae. Curabitur et augue sit amet erat pretium auctor. Etiam condimentum orci fermentum sapien tincidunt mollis. Donec vel est in felis gravida dictum. Pellentesque id malesuada velit. Fusce auctor ante sed ligula tincidunt ullamcorper. </p>
                            </div>



                        </fieldset>
                    </div>
                    <div class="btnsArea fullWidth_with padding">
                        <input type="hidden" name="hiddenValue1" value="hidden1" />
                        <input type="hidden" name="hiddenValue2" value="hidden2" />
                        <input type="hidden" name="hiddenValue3" value="hidden3" />
                        <button type="submit" name="action" value="cancel" class="floatLeft">Cancel</button>
                        <button type="submit" name="action" value="edit" class="floatRight">Edit</button>
                    </div>
                </div>               
            </form>
            
        </div>
