(function($){
    $.fn.extend({
    	setValues: function(values){
            var thisClass = this;
            console.log(thisClass.vals);
    		this.each(function(){
                var val;
    			var tagName = this.tagName;
    			var tagType = this.type;
    			var elem = $(this);
                if(values == undefined){
                    val = '';
                }
                if(typeof values == 'object'){
                    if (Object.prototype.toString.call(values) === '[object Array]') {
                        val = values;
                    }else{
                        var id = elem.attr('id');
                        var name = elem.attr('name');
                        var colum;
                        if(id != undefined && name == undefined){
                            colum = id;
                        }else if(id == undefined && name != undefined){
                            colum = name;
                        }else if(id != undefined && name != undefined){
                            colum = id;
                        }else if(id == undefined && name == undefined){
                            colum = "";
                        }
                        if(values.hasOwnProperty(colum)){
                            val = values[colum];
                        }
                    }
                }else{
                    val = values;
                }
    			if(tagName == 'P' || tagName == 'SPAN' || tagName == 'DIV' || tagName == 'BUTTON'){	
					elem.text(val);
    			}else if(tagName == 'TEXTAREA'){	
					elem.val(val);
    			}else if(tagName == 'INPUT'){	
					if(tagType == 'text' || tagType == 'password' || tagType == 'date' || tagType == 'time' || tagType == 'hidden'){
						elem.val(val);
					}else if (tagType == 'checkbox') {
                       	if(elem.val() == val){
                    		elem.prop('checked', true);
                    	}
                    }else if (tagType == 'radio') {
                    	if(elem.val() == val){
                    		elem.prop('checked', true);
                    	}
                    }
    			}else if(tagName == 'SELECT'){
                    if(val){
    					elem.val(val);
                    }   
    			}
    		});
    	},
        getValues: function(option){
            var json = "";
            var valArray = [];
            var chk = 1;
            var radios = {};
            this.each(function(i){
                var val;
                var tagName = this.tagName;
                var tagType = this.type;
                var elem = $(this);
                var id = elem.attr('id');
                var name = elem.attr('name');
                var colum;

                if(id != undefined && name == undefined){
                    colum = id;
                }else if(id == undefined && name != undefined){
                    // check if the tag is a array
                    var expreg = /\[\]$/;
                    if (expreg.test(name)){
                        colum = tagType+chk++;    
                    }else{
                        colum = name;
                    }
                }else if(id != undefined && name != undefined){
                    colum = id;
                }else if(id == undefined && name == undefined){
                    colum = "item"+i;
                }
                
                if(tagName == 'P' || tagName == 'SPAN' || tagName == 'DIV' || tagName == 'BUTTON'){ 
                    valArray.push(elem.text());
                    json += "'"+colum + "':'" + elem.text() + "',";
                }else if(tagName == 'TEXTAREA'){    
                    valArray.push(elem.val());
                    json += "'"+colum + "':'" + elem.val() + "',";
                }else if(tagName == 'INPUT'){   
                    if(tagType == 'text' || tagType == 'password' || tagType == 'date' || tagType == 'time' || tagType == 'hidden'){
                        valArray.push(elem.val());
                        json += "'"+colum + "':'" + elem.val() + "',";
                    }else if (tagType == 'checkbox') {
                        if(elem.prop('checked')){
                            valArray.push(elem.val());  
                            json += "'"+colum + "':'" + elem.val() + "',";
                        }else{
                            valArray.push(null);  
                            json += "'"+colum + "':" + null + ",";
                        }
                    }else if (tagType == 'radio') {
                        if(elem.prop('checked')){
                            valArray.push(elem.val());    
                            json += "'"+colum + "':'" + elem.val() + "',";
                        }else{
                            if(elem.parent().find("input[type=radio][name="+name+"]:checked").length){
                              json += "'"+colum + "':'" +elem.parent().find("input[type=radio][name="+name+"]:checked").val() + "',";  
                            }else{
                                json += "'"+colum + "':" + null + ",";  
                                if(!radios.hasOwnProperty(name)){
                                    radios[name] = i;
                                    valArray.push(null);    
                                }
                            }
                        }
                    }
                }else if(tagName == 'SELECT'){
                    if(tagType == 'select-one'){
                        valArray.push(elem.val());
                        json += "'"+colum + "':'" + elem.val() + "',";
                    }else if(tagType == 'select-multiple'){
                        valArray.push(elem.val());
                        if(elem.val() == null){
                            json += "'"+colum + "':" + elem.val() + ",";
                        }else{
                            json += "'"+colum + "':[" + elem.val() + "],";
                        }
                    }
                    
                }
            });

            json = "{" + json + "}";
            json = JSON.parse(JSON.stringify(eval("(" + json + ")")));

            if(option == undefined || option == 'array'){
                if(valArray.length == 1){
                    return valArray[0];
                }else{
                    return valArray;
                }
            }else if(option == 'json'){
                return json;
            }else{
                return valArray;
            }
        },
        clearTag: function(){
            this.each(function(){
                var tagName = this.tagName;
                var tagType = this.type;
                var elem = $(this);
                            
                if(tagName == 'P' || tagName == 'SPAN' || tagName == 'DIV' || tagName == 'BUTTON'){ 
                    elem.text("");
                }else if(tagName == 'TEXTAREA'){    
                    elem.val("");
                }else if(tagName == 'INPUT'){   
                    elem.val("");
                    if(tagType == 'text' || tagType == 'password' || tagType == 'date' || tagType == 'time' || tagType == 'hidden'){
                        elem.val("");
                    }else if (tagType == 'checkbox') {
                        elem.prop('checked', false);
                    }else if (tagType == 'radio') {
                        elem.prop('checked', false);
                    }
                }else if(tagName == 'SELECT'){
                    if (tagType == 'select-multiple') {
                        elem.val("");
                    } else if(tagType == 'select-one'){
                        this.selectedIndex = 0;
                    }
                }
            });
        },
        createTagOption: function(obj){
                var val = 'val';
                var description = 'description'
                var selection = '';
                var clear = false;
                if(obj != undefined){
                    if(obj.selection != undefined && typeof obj.selection != 'object'){
                        selection = obj.selection;
                    }
                    if(obj.clear != undefined && typeof obj.clear === 'boolean'){
                        clear = obj.clear;
                    }
                    if(obj.val != undefined && typeof obj.val == 'string'){
                        val = obj.val;
                    }
                    if(obj.description != undefined && obj.description != undefined && typeof obj.description == 'string'){
                        description = obj.description;
                    }
                }
            this.each(function(){
                var tagName = this.tagName;
                var elem = $(this);
                if(tagName == 'SELECT'){
                    if(clear){
                        elem.empty();
                    }
                    if(obj != undefined && obj.collection != undefined){
                        if(typeof obj.collection == 'object'){
                            try {
                                for(var i in obj.collection){
                                    if(obj.collection[i][val] == selection){
                                        elem.append('<option selected value="' + obj.collection[i][val] + '">' + obj.collection[i][description] + '</option>');
                                    }else{
                                        elem.append('<option value="' + obj.collection[i][val] + '">' + obj.collection[i][description] + '</option>');
                                    }
                                }
                            } catch (ex) {
                                console.log("El tipo de objeto no es el esperado: " + ex);
                            }
                        }

                    }
                }
            });
        }
    });
})(jQuery)
