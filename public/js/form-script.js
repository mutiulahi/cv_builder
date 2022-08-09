/* global $, alert, console */
$(document).ready(function(){
    'use strict';
    /*
    var x = 0,
        inptSkill = $('#input-skills');
    
    inptSkill.on('keyup',function(e){
        e.stopPropagation();
        if(e.which == 13){
            e.preventDefault();
            
            var curVal = inptSkill.val().trim();
            var found = false;
            for(var i = 0; i<x; i++){
                var str = $('.tag-span').eq(i).text().trim();
                if(str == curVal){
                    found=true;
                }
            }
            if(!found && curVal.length > 1){
                $('.tags').append('<span class="tag-span"><i class="fa fa-times"></i> '+curVal + '<input hidden type="text" value="'+curVal+'" name="skills[]"></span>');
                x++;
            }

            inptSkill.val('');
            
        }
    });
    */
    $('.fa-plus-circle').click(function(){
        var curVal = inptSkill.val().trim();
        var found = false;
        for(var i = 0; i<x; i++){
            var str = $('.tag-span').eq(i).text().trim();
            if(str == curVal){
                found=true;
            }
        }
        if(!found && curVal.length > 1){
            $('.tags').append('<span class="tag-span"><i class="fa fa-times"></i> '+curVal + '<input hidden type="text" value="'+curVal+'" name="skills[]"></span>');
            x++;
        }
        
        inptSkill.val('');
    });
    
    // Remove Tag On Click
    
    $('.tags').on('click','.tag-span i',function(){
        $(this).parent('.tag-span').fadeOut(500).remove();
        x--;
        
    });
    
    // Add education block
    
    $('#add-edu').on('click',function(){
        var edu = '<div class="new-edu">'+
                    // '<div class="add-border"><h2>New Education</h2><span></span></div> <div style="float:right; margin-bottom:10px;"> <div class="btn btn-danger" id="remove-edu"> <i class="fa fa-trash"></i> </div></div>'+
                    
                    '<div class="row">'+
                    '<div class="add-border"><h2>New Education</h2><span></span></div> <div class="del-btn"> <div class="btn btn-sm btn-danger btn-me" id="remove-edu"> <i class="fa fa-trash"></i> </div></div>'+
                    '<div class="col-lg-6">'+
                            '<label style="margin-bottom: 7px;">Field of study:</label>'+
                            '<input type="text" name="school_study[]" class="control-form-me" placeholder="Ex: Computer Science">'+
                        '</div>'+
                        '<div class="col-lg-6">'+   
                            '<label style="margin-bottom: 7px;">Degree:</label>'+
                            '<input type="text" name="school_degree[]" class="control-form-me" placeholder="Ex: Bachelor\'s">'+
                        '</div>'+
                        '<div class="col-lg-6">'+
                            '<label style="margin-bottom: 7px;">School:</label>'+
                            '<input type="text" name="school[]" class="control-form-me" placeholder="Ex: al-albayt university">'+
                        '</div>'+
                        '<div class="col-lg-6">'+
                            '<label style="margin-bottom: 7px;">Address:</label>'+
                            '<input type="text" name="school_address[]" class="control-form-me" placeholder="Ex: no 2, albayt ">'+
                        '</div>'+
                        '<div class="col-lg-6">'+
                            '<label style="margin-bottom: 7px;">City:</label>'+
                            '<input type="text" name="school_city[]" placeholder="Ex: Iwo" class="control-form-me">'+
                        '</div>'+
                        '<div class="col-lg-6">'+
                            '<label style="margin-bottom: 7px;">State:</label>'+
                            '<input type="text" name="school_state[]" placeholder="Ex: Osun" class="control-form-me">'+
                        '</div>'+
                        '<div class="col-lg-6">'+
                            '<label style="margin-bottom: 7px;">School Url:</label>'+
                            '<input type="text" name="school_url[]" placeholder="Ex: www.europain.com" class="control-form-me">'+
                        '</div>'+
                        '<div class="col-lg-6">'+
                            '<label style="margin-bottom: 7px;">School Zip Code:</label>'+
                            '<input type="text" name="school_zipcode[]" placeholder="Ex: 121223" class="control-form-me">'+
                        '</div>'+
                        '<div class="col-lg-6">'+
                            '<label style="margin-bottom: 7px;">From year:</label>'+
                            '<input type="date" name="edu_from_year[]" placeholder="Ex: 121223" class="control-form-me">'+
                        '</div>'+
                        '<div class="col-lg-6">'+
                            '<label style="margin-bottom: 7px;">To year (optional=present):</label>'+
                            '<input type="date" name="edu_to_yeer[]" placeholder="Ex: 121223" class="control-form-me">'+
                        '</div>'+
                        '<div class="col-lg-12">'+
                            '<label style="margin-bottom: 7px;">Nationality:</label>'+
                            '<input type="text" name="edu_nationality[]" class="control-form-me" placeholder="Nationality">'+
                        '</div>'+
                  '</div>';
       $('.all-edus').append('<div class="new-edu">'+edu+'</div>'); 
    });
    
    // Remove education block
    $('.all-edus').on('click','#remove-edu',function(){
        $(this).parent().parent().fadeOut(500).remove();
    });
    
    // Add Experience block
    
    $('#add-exp').on('click',function(){
        var exp = '<div class="new-edu">'+
            '<div class="row">'+
            '<div class="add-border"><h2>New Experience</h2><span></span></div> <div class="del-btn"> <div class="btn btn-sm btn-danger btn-me" id="remove-exp"> <i class="fa fa-trash"></i> </div></div>'+
                '<div class="col-lg-6">'+
                    '<label style="margin-bottom: 7px;">Title:</label>'+
                    '<input type="text" name="exp_title[]" class="control-form-me" placeholder="Ex: Computer Science">'+
                '</div>'+
                '<div class="col-lg-6">'+   
                    '<label style="margin-bottom: 7px;">Company:</label>'+
                    '<input type="text" name="exp_company[]" class="control-form-me" placeholder="Ex: Bachelor\'s">'+
                '</div>'+
                '<div class="col-lg-6">'+
                    '<label style="margin-bottom: 7px;">City:</label>'+
                    '<input type="text" name="exp_city[]" placeholder="Ex: Iwo" class="control-form-me">'+
                '</div>'+
                '<div class="col-lg-6">'+
                    '<label style="margin-bottom: 7px;">Contry:</label>'+
                    '<input type="text" name="exp_contry[]" placeholder="Ex: Nigeria" class="control-form-me">'+
                '</div>'+
                '<div class="col-lg-6">'+
                    '<label style="margin-bottom: 7px;">From year:</label>'+
                    '<input type="month" name="exp_from_year[]" class="control-form-me">'+
                '</div>'+
                '<div class="col-lg-6">'+
                    '<label style="margin-bottom: 7px;">To year (optional=present):</label>'+
                    '<input type="month" name="exp_to_year[]" class="control-form-me">'+
                '</div>'+
                '<div class="col-lg-12">'+
                    '<label style="margin-bottom: 7px;">Description (optional):</label>'+
                    '<textarea name="exp_description[]" class="control-form-me"></textarea>'+
                '</div>'+
            '</div>';
    //    $('.all-exps').append('<div class="new-exp"><label style="margin-bottom: 8px;">Title:</label><input type="text" name="exp[]" class="control-form-me" placeholder="Ex: Web Developer"><label style="margin-bottom: 8px;">Company:</label>                      <input type="text" name="exp[]" class="control-form-me" placeholder="Ex: ProgressSoft">             <div class="form-row"><div class="col"><label style="margin-bottom: 8px;">From year:</label>                                 <input type="month" name="exp[]" class="control-form-me"></div><div class="col">                     <label style="margin-bottom: 8px;">To year (optional=present):</label><input type="month" name="exp[]" class="control-form-me">  </div></div><label style="margin-bottom: 8px;">Description (optional):</label><textarea name="exp[]" class="control-form-me"></textarea></div>');
       $('.all-exps').append('<div class="new-exp">'+exp+'</div>'); 
    });

     // Remove experience block
     $('.all-exps').on('click','#remove-exp',function(){
        $(this).parent().parent().fadeOut(500).remove();
    });
    
    // Add skills block
    
    $('.add-skills').on('click',function(){
        $('.all-skills').append('<div class="new-skills">'+
                                        '<div class="row">'+
                                            '<div class="add-border"><h2>New Skill</h2><span></span></div> <div class="del-btn"> <div class="btn btn-sm btn-danger btn-me" id="remove-skill"> <i class="fa fa-trash"></i> </div></div>'+
                                            '<div class="col-lg-12">'+
                                                '<label style="margin-bottom: 8px;">Skill</label>'+
                                                '<input type="text" name="skill[]" class="control-form-me">'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>');
        
    });

    // Remove experience block
    $('.all-skills').on('click','#remove-skill',function(){
        $(this).parent().parent().fadeOut(500).remove();
    });

    // Add socials block
    $('.add-socials').on('click',function(){
        $('.all-socials').append('<div class="new-socials">'+
                                    '<div class="row">'+
                                            '<div class="add-border"><h2>New Skill</h2><span></span></div> <div class="del-btn"> <div class="btn btn-sm btn-danger btn-me" id="remove-social"> <i class="fa fa-trash"></i> </div></div>'+
                                            '<div class="col-lg-12">'+
                                                '<label style="margin-bottom: 8px;">Social Name</label> <input type="text" name="social_name[]" class="control-form-me">'+
                                            '</div>'+ 
                                            '<div class="col-lg-12">'+          
                                                '<label style="margin-bottom: 8px;">Social Link</label><input type="text" name="social_link[]" class="control-form-me">'+ 
                                            '</div>'+
                                    '</div>'+
                                '</div>');
        
    });
     // Remove socials block
     $('.all-socials').on('click','#remove-social',function(){
        $(this).parent().parent().fadeOut(500).remove();
    });
});