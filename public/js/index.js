on("load", init_all, window);

function init_all(){
	on("click", init, _("#submit"));
}

function init(){
	var txt_input = _("#txt-input").value;
	var ajax = ajaxObj("POST", "ajax/index.php");

	ajax.onreadystatechange = function() {
		if(ajaxReturn(ajax) == true) {
		   _("#response").innerHTML = ajax.responseText;
		}
	}
	ajax.send("txt=" + txt_input);
}