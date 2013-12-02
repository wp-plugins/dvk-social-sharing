(function() {

	var links = document.querySelectorAll('.dvk-social-sharing a');
    for (var i = 0; i < links.length; i++) {
		links[i].onclick = social_popup;
    }

	function social_popup(e)
	{
		var top = (screen.availHeight - 500) / 2;
		var left = (screen.availWidth - 500) / 2;
		var e = (e ? e : window.event);
        var target = (e.target ? e.target : e.srcElement);

		var popup = window.open(
			target.href, 
			'social',
			'width=550,height=420,left='+ left +',top='+ top +',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1'
		);

		if(popup) {
			popup.focus();
			if(e.preventDefault) e.preventDefault();
			e.returnValue = false;
		}

		return !!popup;
	}

})();