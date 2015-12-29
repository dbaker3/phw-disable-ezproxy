/*
* PHW Disable EZproxy - Disables OCLC's EZproxy on proxied links
* David Baker
* Copyright 2015 Milligan College
* GNU Public License v2
*/

jQuery(document).ready(function() {
	jQuery("a[href^='https://milligan.idm.oclc.org/login?url=']").each(function() {
		this.href = this.href.replace("https://milligan.idm.oclc.org/login?url=", "");
	});
});