function run() {
	$("input[name=hex], input[name=bghex], input[name=rot]").change(function() {
		$("img[name=avatar]").attr("src", "sofeavatar.php?hex=" + $("input[name=hex]").val() + "&bghex=" + $("input[name=bghex]").val() + "&rot=" + $("input[name=rot]").val());
	});
}