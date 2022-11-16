	    var div_button = document.getElementById('button_form');
	    div_button.parentNode.removeChild(div_button);
	    var form = document.createElement('form');
	    form.setAttribute('action', 'log_out.php');
	    div_button.appendChild(form);
	    var button = document.createElement('input');
	    form.setAttribute('type', 'submit');
	    form.setAttribute('value', 'Se deconnecter');
	    form.appendChild(button);
