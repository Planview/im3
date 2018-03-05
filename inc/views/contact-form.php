
<div id="contact-inputs" class="col-md-4" style="margin-top: 24px;">
  <div class="form-wrapper">
    
    <img src="<?php echo IM3_ROOT_URI; ?>img/see-how-you-compare-600x143.png" width="600" height="143" alt="See How You Compare" style="width: 100%; height: auto;" />

    <script src="//app-ab22.marketo.com/js/forms2/js/forms2.min.js"></script>
    <form id="mktoForm_1057">
      <p>Complete the form to see how you rank against over 700 product development professionals worldwide.</p>
    </form>

<script>
	function getReturnUrl(formValues) {
		var formValuesJson = JSON.stringify(formValues);
		var formValuesObject = JSON.parse(formValuesJson);
		var currentUrl = window.location.href;
		
		return currentUrl.replace("?5/", "?6/") + formValuesObject.Company + "/";
	}	
	
	MktoForms2.loadForm("//app-ab22.marketo.com", "456-QCH-520", 1057, function(form) {
		// Marketo form must be loaded before the SmartForms script
    var SFscript = document.createElement('script');
    SFscript.setAttribute('src','//d12ulf131zb0yj.cloudfront.net/SmartForms.js');
    SFscript.setAttribute('data-token','351');
    document.head.appendChild(SFscript);
		// Set the default return URL
		var returnUrl = "http://www2.planview.com/im3/?6/"
		// Add an onSubmit handler
    form.onSubmit(function(){
        // Get the form field values
        var vals = form.vals();
        // Set the return URL
				returnUrl = getReturnUrl(vals);
    });
		// Add an onSuccess handler
    form.onSuccess(function(values, followUpUrl) {
				// Set the follow up URL
				location.href = returnUrl;
        // Return false to prevent the submission handler from taking the lead to the follow up url
        return false;
    });
	});
</script>

  </div>

</div>
