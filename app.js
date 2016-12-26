function run() {
	$("#color, #bgcolor, #rotation").change(function() {
		$("img[name=avatar]").attr("src", "sofeavatar.php?hex=" + $("#color").val() + "&bghex=" + $("#bgcolor").val() + "&rot=" + $("#rotation").val());
	});

	$("#download").click(function() {
		$.fileDownload("sofeavatar.php?hex=" + $("#color").val() + "&bghex=" + $("#bgcolor").val() + "&rot=" + $("#rotation").val());
	});
}