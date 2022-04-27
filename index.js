function checkBoxDivShowCollege(obj){
    if(obj.checked){
      $("#IPCollege").show();
    }else{
      $("#IPCollege").hide();
    }
  }

  function checkBoxDivShowClass(obj){
    if(obj.checked){
      $("#IPClass").show();
    }else{
      $("#IPClass").hide();
    }
  }

  function checkBoxDivShowStudentID(obj){
    if(obj.checked){
      $("#IPStudentID").show();
    }else{
      $("#IPStudentID").hide();
    }
  }

  function checkBoxDivShowName(obj){
    if(obj.checked){
      $("#IPName").show();
    }else{
      $("#IPName").hide();
    }
  }

  function checkBoxDivShowGender(obj){
    if(obj.checked){
      $("#IPGender").show();
    }else{
      $("#IPGender").hide();
    }
  }

  function checkBoxDivShowNative(obj){
    if(obj.checked){
      $("#IPNative").show();
    }else{
      $("#IPNative").hide();
    }
  }

  function addDivBefore(obj){
    if(obj){
      var a = 0;
      a = $('#TAAddTask').val();
      $("#IPSpe").before("<div id='" + a + "' class='form-group'><label for='pillInput'>" + a + "</label><button id='" + a + "' type='button' data-toggle='tooltip' title='Remove' class='btn btn-link btn-simple-danger' onclick='removeDiv(this)'><i class='la la-times'></i></button><input type='text' class='form-control input-pill' id='pillInput' name='pillInput[]' value="+ a +" placeholder='请输入你的"+ a +"\'></div>");
    }
  }

  function removeDiv(obj){
    if(obj){
      var a = obj.id;
      $("#" + a + "").remove();
    }
  }

  function edit(obj){
      var b = $(obj).parent().parent().prev().text();
      alert(b);
  }

  function removeTr(obj){
    //obj也就是按钮的父元素是tr的话
    $(obj).parent().parent().parent().remove();
  } 

  function checkBoxDivShowMaleItem(obj){
    //var a = $("input[name='gender']:checked").val();
    if(obj.value = "male"){
      $("#IPMaleItem").show();
      $("#IPFemaleItem").hide();
    }
  }

  function checkBoxDivShowFemaleItem(obj){
    //var a = $("input[name='gender']:checked").val();
    if(obj.value = "female"){
      $("#IPFemaleItem").show();
      $("#IPMaleItem").hide();
    }
  }

  
