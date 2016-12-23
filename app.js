function run() {
	$("input[name=hex], input[name=bghex]").change(function() {
		$("img[name=avatar]").attr("src", "sofeavatar.php?hex=" + $("input[name=hex]").val() + "&bghex=" + $("input[name=bghex]").val());
	});
}