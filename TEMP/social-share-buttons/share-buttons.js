(function (window, undefined) {
    window.SocialShare = { };
    SocialShare.Networks = [
	{
	name: 'Facebook',
	class: 'facebook',
	url: 'http://www.facebook.com/sharer.php?s=100&p[url]={url}&p[images][0]={img}&p[title]={title}&p[summary]={desc}',
	fa: 'fa-facebook'
	},
	{
	name: 'Twitter',
	class: 'twitter',
	url: 'https://twitter.com/share?url={url}&text={title}&via={via}&hashtags={hashtags}',
	fa: 'fa-twitter'
	},
	{
	name: 'Google+',
	class: 'google',
	url: 'https://plus.google.com/share?url={url}',
	fa: 'fa-google-plus'
	},
	{
	name: 'Pinterest',
	class: 'pinterest',
	url: 'https://pinterest.com/pin/create/bookmarklet/?media={img}&url={url}&is_video={is_video}&description={title}',
	fa: 'fa-pinterest-p'
	},
	{
	name: 'Linked In',
	class: 'linkedin',
	url: 'http://www.linkedin.com/shareArticle?url={url}&title={title}',
	fa: 'fa-linkedin'
	},
	{
	name: 'Digg',
	class: 'digg',
	url: 'http://digg.com/submit?url={url}&title={title}',
	fa: 'fa-digg'
	},
	{
	name: 'Tumblr',
	class: 'tumblr',
	url: 'http://www.tumblr.com/share/link?url={url}&name={title}&description={desc}',
	fa: 'fa-tumblr'
	},
	{
	name: 'Reddit',
	class: 'reddit',
	url: 'http://reddit.com/submit?url={url}&title={title}',
	fa: 'fa-reddit'
	},
	{
	name: 'StumbleUpon',
	class: 'stumbleupon',
	url: 'http://www.stumbleupon.com/submit?url={url}&title={title}',
	fa: 'fa-stumbleupon'
	},
	{
	name: 'Delicious',
	class: 'delicious',
	url: 'https://delicious.com/save?v=5&provider={company}&noui&jump=close&url={url}&title={title}',
	fa: 'fa-delicious'
	}
    ];

    SocialShare.generateSocialUrls = function(opt) {
	if (typeof opt !== 'object') { return false; }
	var links = [], network;
	for (var i = 0; i < SocialShare.Networks.length; i++) {
	    network = SocialShare.Networks[i];
	    links.push({
		name : network.name,
		class : network.class,
		url : SocialShare.generateUrl(network.url, opt),
		fa : network.fa
	    });
	}
	return links;
    };

    SocialShare.generateUrl = function(url, opt) {
	var prop, arg, arg_ne;
	for (prop in opt) {
	    arg = '{' + prop + '}';
	    if  (url.indexOf(arg) !== -1) {
		url = url.replace(new RegExp(arg, 'g'), encodeURIComponent(opt[prop]));
	    }
	    arg_ne = '{' + prop + '-ne}';
	    if  (url.indexOf(arg_ne) !== -1) {
		url = url.replace(new RegExp(arg_ne, 'g'), opt[prop]);
	    }
	}
	return this.cleanUrl(url);
    };

    SocialShare.cleanUrl = function(fullUrl) {
	// Firstly, remove any expressions we may have left in the URL
	fullUrl = fullUrl.replace(/\{([^{}]*)}/g, '');
	// Then remove any empty parameters left in the URL
	var params = fullUrl.match(/[^\=\&\?]+=[^\=\&\?]+/g),
	    url = fullUrl.split("?")[0];
	if (params && params.length > 0) {
	    url += "?" + params.join("&");
	}
	return url;
    };

    SocialShare.doPopup = function(e) {
	e = (e ? e : window.event);
	var t = (e.target ? e.target : e.srcElement),
	    width = t.data-width || 800,
	    height = t.data-height || 500;
	    // Popup position
	    var	px = Math.floor(((screen.availWidth || 1024) - width) / 2),
		py = Math.floor(((screen.availHeight || 700) - height) / 2);
	    // Open popup
	    var popup = window.open(t.href, "social",
		"width=" + width + ",height=" + height + 
		",left=" + px + ",top=" + py + 
		",location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1");
	    if (popup) {
		popup.focus();
		if (e.preventDefault) e.preventDefault();
		e.returnValue = false;
	    }
	    return !!popup;
	};
})(window);
