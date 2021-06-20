let headerSpacer = function () {
  jQuery('.header-spacer').height(jQuery('.fixed-top').height());

  if (navigator.userAgent.indexOf('MSIE') >= 0) {
    jQuery('.fixed-top').prepend('<div class="ie"><div class="container-fluid"><p>You are viewing this website on an unsupported version of Internet Explorer. If you are having trouble accessing the page and want more information, please contact us at <a href="mailto:GeorgiaClimateProject@emory.edu">GeorgiaClimateProject@emory.edu</a>.  We apologize for any inconvenience this causes.</p></div></div>');
  }
}

jQuery(document).ready(headerSpacer);
